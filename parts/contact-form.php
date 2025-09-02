<?php
// Contact Form Component
// Usage: include 'parts/contact-form.php';
?>

<div class="bg-gradient-to-br from-white/[0.02] to-transparent border border-white/10 rounded-2xl p-8">
    <form id="contact-form" class="space-y-6" action="contact-handler.php" method="POST">
        <input type="hidden" id="selected-department" name="department" value="">
        
        <!-- Name and Email Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Име *</label>
                <input type="text" id="name" name="name" required 
                       class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl px-4 py-3 text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[#1683ab]/50"
                       placeholder="Вашето име">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Имейл *</label>
                <input type="email" id="email" name="email" required 
                       class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl px-4 py-3 text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[#1683ab]/50"
                       placeholder="your@email.com">
            </div>
        </div>

        <!-- Phone and Company Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-300 mb-2">Телефон</label>
                <input type="tel" id="phone" name="phone" 
                       class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl px-4 py-3 text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[#1683ab]/50"
                       placeholder="+359 888 123 456">
            </div>
            <div>
                <label for="company" class="block text-sm font-medium text-gray-300 mb-2">Компания</label>
                <input type="text" id="company" name="company" 
                       class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl px-4 py-3 text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[#1683ab]/50"
                       placeholder="Име на компанията">
            </div>
        </div>

        <!-- Subject -->
        <div>
            <label for="subject" class="block text-sm font-medium text-gray-300 mb-2">Тема *</label>
            <input type="text" id="subject" name="subject" required 
                   class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl px-4 py-3 text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[#1683ab]/50"
                   placeholder="Кратко описание на въпроса">
        </div>

        <!-- Priority (Support only) -->
        <div id="priority-field" class="hidden">
            <label for="priority" class="block text-sm font-medium text-gray-300 mb-2">Приоритет</label>
            <select id="priority" name="priority" 
                    class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl px-4 py-3 text-gray-200 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[#1683ab]/50">
                <option value="low">Нисък</option>
                <option value="medium" selected>Среден</option>
                <option value="high">Висок</option>
                <option value="urgent">Спешен</option>
            </select>
        </div>

        <!-- Service Type (Sales only) -->
        <div id="service-field" class="hidden">
            <label for="service" class="block text-sm font-medium text-gray-300 mb-2">Тип услуга</label>
            <select id="service" name="service" 
                    class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl px-4 py-3 text-gray-200 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[#1683ab]/50">
                <option value="hosting">Хостинг</option>
                <option value="domain">Домейн</option>
                <option value="vps">VPS</option>
                <option value="dedicated">Специализиран сървър</option>
                <option value="ssl">SSL сертификат</option>
                <option value="other">Друго</option>
            </select>
        </div>

        <!-- Message -->
        <div>
            <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Съобщение *</label>
            <textarea id="message" name="message" rows="5" required 
                      class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl px-4 py-3 text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[#1683ab]/50 resize-none"
                      placeholder="Опишете подробно вашия въпрос или нужда..."></textarea>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center">
            <button type="submit" 
                    class="px-8 py-3 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white font-medium rounded-xl hover:from-[#1e9975] hover:to-[#1683ab] transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50">
                <i class="fa-solid fa-paper-plane mr-2"></i>
                Изпрати съобщение
            </button>
        </div>
    </form>
</div>

<script>
// Contact Form JavaScript
(function() {
    const contactForm = document.getElementById('contact-form');
    const priorityField = document.getElementById('priority-field');
    const serviceField = document.getElementById('service-field');
    const selectedDepartment = document.getElementById('selected-department');

    // Function to show/hide department-specific fields
    function updateFormFields(department) {
        if (department === 'support') {
            priorityField.classList.remove('hidden');
            serviceField.classList.add('hidden');
        } else if (department === 'sales') {
            priorityField.classList.add('hidden');
            serviceField.classList.remove('hidden');
        } else {
            priorityField.classList.add('hidden');
            serviceField.classList.add('hidden');
        }
    }

    // Form submission
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(contactForm);
            const data = Object.fromEntries(formData);
            
            // Validate required fields
            const requiredFields = ['name', 'email', 'subject', 'message'];
            let isValid = true;
            
            requiredFields.forEach(field => {
                const input = contactForm.querySelector(`[name="${field}"]`);
                if (!input.value.trim()) {
                    input.classList.add('border-red-500');
                    isValid = false;
                } else {
                    input.classList.remove('border-red-500');
                }
            });
            
            if (!isValid) {
                alert('Моля, попълнете всички задължителни полета.');
                return;
            }
            
            // Show loading state
            const submitButton = contactForm.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            submitButton.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i>Изпраща се...';
            submitButton.disabled = true;
            
            // Simulate form submission (replace with actual API call)
            fetch('contact-handler.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Съобщението е изпратено успешно! Ще се свържем с вас възможно най-скоро.');
                    contactForm.reset();
                } else {
                    alert('Възникна грешка при изпращане на съобщението. Моля, опитайте отново.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Възникна грешка при изпращане на съобщението. Моля, опитайте отново.');
            })
            .finally(() => {
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            });
        });
    }

    // Expose updateFormFields function globally
    window.updateContactFormFields = updateFormFields;
})();
</script>
