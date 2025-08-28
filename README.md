# CloudHost Pro - Cloud Hosting Website

A modern, responsive cloud hosting website built with PHP, HTML, and Tailwind CSS. The website features a clean design with separate components for header, navigation, footer, and main content.

## 🚀 Features

- **Responsive Design**: Mobile-first approach with Tailwind CSS
- **Component-Based**: Separated header, footer, navigation, and main content
- **Modern UI**: Beautiful gradients, animations, and hover effects
- **Professional Layout**: Pricing plans, features showcase, and call-to-action sections
- **Cross-Browser Compatible**: Works on all modern browsers
- **Custom Development Server**: Multiple server options with advanced features

## 📁 File Structure

```
CloudHostWebsite/
├── index.php          # Main homepage
├── header.php         # Header component with logo and contact info
├── nav.php           # Navigation menu component
├── footer.php        # Footer component
├── styles.css        # Custom CSS styles
├── config.php        # Configuration file
├── router.php        # URL router for development server
├── server.php        # Enhanced development server script
├── serve.php         # Simple development server script
├── serve.bat         # Windows batch file for server
├── serve.sh          # Mac/Linux shell script for server
├── test.php          # Test page for verification
├── .htaccess         # Apache configuration
└── README.md         # This file
```

## 🛠️ Setup Instructions

### Prerequisites
- PHP 7.4 or higher
- Web server (Apache, Nginx, or built-in PHP server)
- Modern web browser

### 🚀 Server Features

Our custom development server includes:
- **Multiple Server Options**: Choose from simple or enhanced server scripts
- **Custom Port Selection**: Specify any port between 1024-65535
- **Network Access**: Access from other devices on your network
- **Smart Routing**: Automatic file serving with fallback to index.php
- **Error Handling**: Better error messages and port availability checking
- **Status Tracking**: Server status file for monitoring
- **Cross-Platform**: Works on Windows, Mac, and Linux

### Option 1: Using Our Custom Server Scripts (Recommended for Development)

#### **Method A: Enhanced Server Script**
```bash
cd CloudHostWebsite
php server.php [port]
```

#### **Method B: Simple Server Script**
```bash
cd CloudHostWebsite
php serve.php [port]
```

#### **Method C: Platform-Specific Scripts**
- **Windows:** Double-click `serve.bat` or run `serve.bat [port]`
- **Mac/Linux:** Run `./serve.sh [port]` or `bash serve.sh [port]`

#### **Default Usage:**
```bash
# Start on default port 8000
php server.php

# Start on custom port 8080
php server.php 8080

# Start on specific host and port
php server.php 0.0.0.0 9000
```

3. **Open your browser and visit:**
   ```
   http://localhost:8000 (or your custom port)
   ```

### Option 2: Using Apache/Nginx

1. **Copy files to your web server directory:**
   - For Apache: `/var/www/html/` or your custom directory
   - For XAMPP: `htdocs/` folder
   - For MAMP: `htdocs/` folder

2. **Ensure PHP is enabled on your web server**

3. **Access the website through your web server URL**

### Option 3: Using XAMPP/MAMP

1. **Install XAMPP or MAMP**
2. **Place the project files in the `htdocs` folder**
3. **Start Apache service**
4. **Access via `http://localhost/CloudHostWebsite`**

## 🎨 Customization

### Colors and Branding
- Modify the color scheme in `styles.css`
- Update the logo and company name in `header.php`
- Change contact information in `header.php`

### Content
- Edit the main content in `index.php`
- Modify navigation links in `nav.php`
- Update footer links and information in `footer.php`

### Styling
- Customize Tailwind classes in the PHP files
- Add custom CSS in `styles.css`
- Modify animations and hover effects

## 📱 Responsive Design

The website is fully responsive and includes:
- Mobile-first design approach
- Collapsible mobile navigation menu
- Responsive grid layouts
- Optimized typography for all screen sizes

## 🔧 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Internet Explorer 11+

## 📝 License

This project is open source and available under the [MIT License](LICENSE).

## 🤝 Contributing

Feel free to submit issues and enhancement requests!

## 📞 Support

For support or questions, please contact:
- Email: support@cloudhostpro.com
- Phone: +1 (555) 123-4567

---

**Built with ❤️ using PHP, HTML, and Tailwind CSS**
