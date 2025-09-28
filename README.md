# 🔒 Hidden URL - Secure File Access System

[![PHP Version](https://img.shields.io/badge/PHP-8.3+-blue.svg)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
[![GitHub Stars](https://img.shields.io/github/stars/byrmstf/hidden-url.svg)](https://github.com/byrmstf/hidden-url/stargazers)
[![GitHub Forks](https://img.shields.io/github/forks/byrmstf/hidden-url.svg)](https://github.com/byrmstf/hidden-url/network)

> **Hash-based URL system for secure file access** - Protect PDFs, images, videos and other files from direct access.

## 🚀 Features

- **🔐 Secure Access**: Protect your files with hash-based URLs
- **🌐 Referer Control**: Allow access only from specific domains
- **📁 Multi-Format Support**: PDF, images, videos and other file types
- **⚡ Fast & Lightweight**: Maximum performance with minimal PHP code
- **🛡️ Security**: Prevent direct file access
- **🔧 Easy Integration**: Easily integrate into existing projects

## 📋 Requirements

- PHP 7.4 or higher
- Web server (Apache, Nginx, etc.)
- File read permissions

## 🛠️ Installation

1. **Clone the project:**
```bash
git clone https://github.com/byrmstf/hidden-url.git
cd hidden-url
```

2. **Copy files to your web server's root directory**

3. **Place your files in the `documents/` folder**

4. **Update hash values in `img.php` file:**
```php
$file_config = array(
    'your-file-hash' => array(
        'file' => 'your-file.pdf',
        'type' => 'application/pdf',
        'size' => 123456
    ),
);
```

## 📖 Usage

### Basic Usage

```php
// Define file hashes in img.php file
$file_config = array(
    '05edd57091ad570303df856c652a7a174554a148' => array(
        'file' => 'sample.pdf',
        'type' => 'application/pdf',
        'size' => 433994
    ),
);
```

### HTML Usage

```html
<object data="/img.php?h=05edd57091ad570303df856c652a7a174554a148" 
        type="application/pdf" width="100%" height="800px">
    <embed width="100%" height="1000px" 
           src="/img.php?h=05edd57091ad570303df856c652a7a174554a148"/>
</object>
```

### Security Settings

```php
// Referer control (optional)
$allowed_domains = ['yourdomain.com', 'www.yourdomain.com'];
$referer = $_SERVER['HTTP_REFERER'] ?? '';
$is_allowed = false;

foreach ($allowed_domains as $domain) {
    if (strpos($referer, $domain) !== false) {
        $is_allowed = true;
        break;
    }
}

if (!$is_allowed) {
    http_response_code(403);
    die('Access denied');
}
```

## 🔧 Advanced Features

### Hash Generation

```php
// Generate secure hash for file
$filename = 'document.pdf';
$hash = hash('sha1', $filename . time() . 'your-secret-salt');
```

### Multiple File Support

```php
// Different file types
$file_config = array(
    'pdf-hash' => array(
        'file' => 'document.pdf',
        'type' => 'application/pdf',
        'size' => 123456
    ),
    'img-hash' => array(
        'file' => 'image.jpg',
        'type' => 'image/jpeg',
        'size' => 78901
    ),
    'vid-hash' => array(
        'file' => 'video.mp4',
        'type' => 'video/mp4',
        'size' => 2345678
    ),
);
```

## 🛡️ Security

- **Referer Control**: Access only from specific domains
- **Hash-Based Access**: Hide file names
- **Direct Access Prevention**: Restrict folder access
- **SSL Support**: Optimized for HTTPS connections
- **File Validation**: Size and existence checks
- **Security Headers**: XSS and clickjacking protection

## 📁 Project Structure

```
hidden-url/
├── index.php              # Main page
├── img.php                # File service script
├── documents/             # Files storage folder
│   └── sample.pdf         # Sample PDF file
├── .github/
│   └── workflows/
│       └── ci.yml         # CI/CD pipeline
├── README.md              # This file
├── CONTRIBUTING.md        # Contribution guide
├── LICENSE                # MIT License
├── composer.json          # Dependencies
└── .gitignore            # Git ignore file
```

## 🚀 Quick Start

1. **Download and extract the files**
2. **Upload to your web server**
3. **Add your files to the `documents/` folder**
4. **Update the hash configuration in `img.php`**
5. **Test the system by accessing `index.php`**

## 🤝 Contributing

1. Fork the project
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

For more details, see [CONTRIBUTING.md](CONTRIBUTING.md)

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👨‍💻 Developer

**Mustafa Bayram**
- Website: [mustafabayram.com.tr](https://mustafabayram.com.tr)
- GitHub: [@byrmstf](https://github.com/byrmstf)

## ⭐ Star This Project

If you like this project, please give it a star! ⭐

## 🐛 Bug Reports

If you find a bug or have a suggestion, please report it on the [Issues](https://github.com/byrmstf/hidden-url/issues) page.

## 📊 Statistics

![GitHub stars](https://img.shields.io/github/stars/byrmstf/hidden-url)
![GitHub forks](https://img.shields.io/github/forks/byrmstf/hidden-url)
![GitHub issues](https://img.shields.io/github/issues/byrmstf/hidden-url)
![GitHub pull requests](https://img.shields.io/github/issues-pr/byrmstf/hidden-url)

## 🔗 Related Projects

- [Secure File Manager](https://github.com/byrmstf/secure-file-manager)
- [PHP Security Library](https://github.com/byrmstf/php-security)

## 📚 Documentation

- [API Documentation](docs/api.md)
- [Security Guide](docs/security.md)
- [Deployment Guide](docs/deployment.md)

---

**⭐ If you like this project, don't forget to give it a star!**