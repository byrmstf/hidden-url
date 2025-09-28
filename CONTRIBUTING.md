# 🤝 Contributing Guide

Thank you for your interest in contributing to the Hidden URL project! This guide explains how you can contribute to the project.

## 📋 Table of Contents

- [Code Contribution](#code-contribution)
- [Bug Reports](#bug-reports)
- [Feature Requests](#feature-requests)
- [Documentation](#documentation)
- [Development Environment](#development-environment)

## 🚀 Code Contribution

### 1. Fork the Project
- Fork the project on GitHub
- Clone to your local machine:
```bash
git clone https://github.com/YOUR_USERNAME/hidden-url.git
cd hidden-url
```

### 2. Create a Branch
```bash
git checkout -b feature/amazing-feature
# or
git checkout -b fix/bug-description
```

### 3. Make Your Changes
- Follow the existing code style guide
- Write comments in English
- Consider security vulnerabilities

### 4. Test Your Changes
```bash
# Start PHP server
php -S localhost:8000

# Test the application
curl http://localhost:8000
```

### 5. Commit and Push
```bash
git add .
git commit -m "Add: amazing feature description"
git push origin feature/amazing-feature
```

### 6. Create a Pull Request
- Create a Pull Request on GitHub
- Describe your changes in detail
- Reference related issues

## 🐛 Bug Reports

### When Reporting Bugs:
1. Use a **descriptive title**
2. **Step by step** explain how to reproduce the bug
3. Specify **expected behavior** vs **actual behavior**
4. Add **system information** (PHP version, OS, etc.)
5. Add **screenshots** if available

### Bug Report Template:
```markdown
**Bug Description**
Short and clear description

**Steps to Reproduce**
1. Go to '...'
2. Click on '...'
3. See error '...'

**Expected Behavior**
What should happen

**Actual Behavior**
What actually happens

**System Information**
- OS: [e.g. Windows 10]
- PHP: [e.g. 8.3.25]
- Browser: [e.g. Chrome 120]

**Additional Information**
Any additional information
```

## 💡 Feature Requests

### When Requesting Features:
1. Use a **clear title**
2. Describe the **problem**
3. Suggest a **solution**
4. Consider **alternatives**
5. Add **additional context**

## 📚 Documentation

Documentation contributions are also very valuable:
- README.md updates
- Code comments
- Usage examples
- Video tutorials

## 🛠️ Development Environment

### Requirements:
- PHP 7.4+
- Web server (Apache/Nginx)
- Git

### Setup:
```bash
# Clone the project
git clone https://github.com/byrmstf/hidden-url.git
cd hidden-url

# Start test server
php -S localhost:8000
```

### Code Style:
- Follow PSR-12 standards
- Use meaningful variable names
- Write descriptive comments
- Don't forget security measures

## 🏷️ Commit Messages

Write your commit messages in this format:
```
type: short description

Detailed description (optional)
```

**Types:**
- `Add:` New feature
- `Fix:` Bug fix
- `Update:` Update existing feature
- `Remove:` Remove feature
- `Docs:` Documentation
- `Style:` Code formatting
- `Refactor:` Code refactoring
- `Test:` Add tests

## 📞 Communication

- **GitHub Issues:** For bug reports and feature requests
- **Email:** [mustafabayram.com.tr](https://mustafabayram.com.tr)
- **Website:** [mustafabayram.com.tr](https://mustafabayram.com.tr)

## 🙏 Thank You

Thank you to everyone who contributes! Let's work together to make the project better.

---

**Note:** This project is licensed under the MIT License. By contributing, you agree that your code will be published under this license.