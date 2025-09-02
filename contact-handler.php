<?php
// Contact Form Handler
header('Content-Type: application/json');

// Include configuration
include 'config.php';

// Function to sanitize input
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to send email
function sendContactEmail($data) {
    $to = get_config('contact.email', 'support@example.com');
    $subject = 'Ново съобщение от контактната форма - ' . $data['subject'];
    
    $message = "
    <html>
    <head>
        <title>Контактна форма</title>
        <style>
            body { font-family: Arial, sans-serif; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #1683ab, #1e9975); color: white; padding: 20px; border-radius: 8px 8px 0 0; }
            .content { background: #f9f9f9; padding: 20px; border-radius: 0 0 8px 8px; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #333; }
            .value { color: #666; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Ново съобщение от контактната форма</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <div class='label'>Отдел:</div>
                    <div class='value'>" . ucfirst($data['department']) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Име:</div>
                    <div class='value'>" . $data['name'] . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Имейл:</div>
                    <div class='value'>" . $data['email'] . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Телефон:</div>
                    <div class='value'>" . ($data['phone'] ?: 'Не е посочен') . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Компания:</div>
                    <div class='value'>" . ($data['company'] ?: 'Не е посочена') . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Тема:</div>
                    <div class='value'>" . $data['subject'] . "</div>
                </div>";
    
    if ($data['department'] === 'support' && isset($data['priority'])) {
        $message .= "
                <div class='field'>
                    <div class='label'>Приоритет:</div>
                    <div class='value'>" . ucfirst($data['priority']) . "</div>
                </div>";
    }
    
    if ($data['department'] === 'sales' && isset($data['service'])) {
        $message .= "
                <div class='field'>
                    <div class='label'>Тип услуга:</div>
                    <div class='value'>" . ucfirst($data['service']) . "</div>
                </div>";
    }
    
    $message .= "
                <div class='field'>
                    <div class='label'>Съобщение:</div>
                    <div class='value'>" . nl2br($data['message']) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Дата и час:</div>
                    <div class='value'>" . date('d.m.Y H:i:s') . "</div>
                </div>
            </div>
        </div>
    </body>
    </html>";
    
    $headers = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: ' . get_config('contact.from_email', 'noreply@example.com'),
        'Reply-To: ' . $data['email'],
        'X-Mailer: PHP/' . phpversion()
    ];
    
    return mail($to, $subject, $message, implode("\r\n", $headers));
}

// Function to save to database (if you have a database)
function saveToDatabase($data) {
    // This is a placeholder - implement your database logic here
    // Example:
    /*
    $pdo = new PDO('mysql:host=localhost;dbname=your_db', $username, $password);
    $stmt = $pdo->prepare("INSERT INTO contact_messages (department, name, email, phone, company, subject, priority, service, message, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
    return $stmt->execute([
        $data['department'],
        $data['name'],
        $data['email'],
        $data['phone'],
        $data['company'],
        $data['subject'],
        $data['priority'] ?? null,
        $data['service'] ?? null,
        $data['message']
    ]);
    */
    return true; // Placeholder
}

// Handle POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Sanitize and validate input
        $data = [
            'department' => sanitizeInput($_POST['department'] ?? ''),
            'name' => sanitizeInput($_POST['name'] ?? ''),
            'email' => sanitizeInput($_POST['email'] ?? ''),
            'phone' => sanitizeInput($_POST['phone'] ?? ''),
            'company' => sanitizeInput($_POST['company'] ?? ''),
            'subject' => sanitizeInput($_POST['subject'] ?? ''),
            'priority' => sanitizeInput($_POST['priority'] ?? ''),
            'service' => sanitizeInput($_POST['service'] ?? ''),
            'message' => sanitizeInput($_POST['message'] ?? '')
        ];
        
        // Validate required fields
        $requiredFields = ['name', 'email', 'subject', 'message'];
        foreach ($requiredFields as $field) {
            if (empty($data[$field])) {
                throw new Exception("Полето '$field' е задължително.");
            }
        }
        
        // Validate email
        if (!validateEmail($data['email'])) {
            throw new Exception("Невалиден имейл адрес.");
        }
        
        // Validate department
        if (!in_array($data['department'], ['support', 'sales'])) {
            throw new Exception("Невалиден отдел.");
        }
        
        // Send email
        $emailSent = sendContactEmail($data);
        
        // Save to database (optional)
        $saved = saveToDatabase($data);
        
        if ($emailSent) {
            echo json_encode([
                'success' => true,
                'message' => 'Съобщението е изпратено успешно!'
            ]);
        } else {
            throw new Exception("Грешка при изпращане на имейла.");
        }
        
    } catch (Exception $e) {
        echo json_encode([
            'success' => false,
            'message' => $e->getMessage()
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Невалиден метод на заявка.'
    ]);
}
?>
