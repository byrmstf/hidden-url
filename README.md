# 🔒 Hidden URL - Secure File Access System

[![PHP Version](https://img.shields.io/badge/PHP-8.3+-blue.svg)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
[![GitHub Stars](https://img.shields.io/github/stars/byrmstf/hidden-url.svg)](https://github.com/byrmstf/hidden-url/stargazers)
[![GitHub Forks](https://img.shields.io/github/forks/byrmstf/hidden-url.svg)](https://github.com/byrmstf/hidden-url/network)

> **Güvenli dosya erişimi için hash tabanlı URL sistemi** - PDF, resim, video ve diğer dosyaları doğrudan erişimden koruyun.

## 🚀 Özellikler

- **🔐 Güvenli Erişim**: Dosyalarınızı hash tabanlı URL'ler ile koruyun
- **🌐 Referer Kontrolü**: Sadece belirli domain'lerden erişime izin verin
- **📁 Çoklu Format Desteği**: PDF, resim, video ve diğer dosya türleri
- **⚡ Hızlı ve Hafif**: Minimal PHP kodu ile maksimum performans
- **🛡️ Güvenlik**: Doğrudan dosya erişimini engelleyin
- **🔧 Kolay Entegrasyon**: Mevcut projelerinize kolayca entegre edin

## 📋 Gereksinimler

- PHP 7.4 veya üzeri
- Web sunucusu (Apache, Nginx, vs.)
- Dosya okuma izinleri

## 🛠️ Kurulum

1. **Projeyi klonlayın:**
```bash
git clone https://github.com/byrmstf/hidden-url.git
cd hidden-url
```

2. **Dosyaları web sunucunuzun root dizinine kopyalayın**

3. **Dosyalarınızı `documents/` klasörüne yerleştirin**

4. **Hash değerlerini `img.php` dosyasında güncelleyin:**
```php
$images = array(
    'your-file-hash' => 'your-file.pdf',
    'another-hash' => 'another-file.jpg',
);
```

## 📖 Kullanım

### Temel Kullanım

```php
// img.php dosyasında dosya hash'lerini tanımlayın
$images = array(
    '05edd57091ad570303df856c652a7a174554a148' => 'sample.pdf',
    'a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0' => 'document.pdf',
);
```

### HTML'de Kullanım

```html
<object data="/img.php?h=05edd57091ad570303df856c652a7a174554a148" 
        type="application/pdf" width="100%" height="800px">
    <embed width="100%" height="1000px" 
           src="/img.php?h=05edd57091ad570303df856c652a7a174554a148"/>
</object>
```

### Güvenlik Ayarları

```php
// Referer kontrolü (isteğe bağlı)
if (!isset($_SERVER['HTTP_REFERER']) || 
    strpos($_SERVER['HTTP_REFERER'], 'yourdomain.com') === false) {
    die('Unauthorized access');
}
```

## 🔧 Gelişmiş Özellikler

### Hash Oluşturma

```php
// Dosya için güvenli hash oluşturma
$filename = 'document.pdf';
$hash = hash('sha1', $filename . time() . 'your-secret-salt');
```

### Çoklu Dosya Desteği

```php
// Farklı dosya türleri için
$images = array(
    'pdf-hash' => 'document.pdf',
    'img-hash' => 'image.jpg',
    'vid-hash' => 'video.mp4',
);
```

## 🛡️ Güvenlik

- **Referer Kontrolü**: Sadece belirli domain'lerden erişim
- **Hash Tabanlı Erişim**: Dosya isimlerini gizleme
- **Doğrudan Erişim Engelleme**: Klasör erişimini kısıtlama
- **SSL Desteği**: HTTPS bağlantıları için optimize edilmiş

## 📁 Proje Yapısı

```
hidden-url/
├── index.php          # Ana sayfa
├── img.php            # Dosya servis scripti
├── documents/         # Dosyaların saklandığı klasör
│   └── sample.pdf     # Örnek PDF dosyası
├── README.md          # Bu dosya
└── .gitignore         # Git ignore dosyası
```

## 🤝 Katkıda Bulunma

1. Fork yapın
2. Feature branch oluşturun (`git checkout -b feature/amazing-feature`)
3. Değişikliklerinizi commit edin (`git commit -m 'Add amazing feature'`)
4. Branch'inizi push edin (`git push origin feature/amazing-feature`)
5. Pull Request oluşturun

## 📝 Lisans

Bu proje MIT lisansı altında lisanslanmıştır. Detaylar için [LICENSE](LICENSE) dosyasına bakın.

## 👨‍💻 Geliştirici

**Mustafa Bayram**
- Website: [mustafabayram.com.tr](https://mustafabayram.com.tr)
- GitHub: [@byrmstf](https://github.com/byrmstf)

## ⭐ Yıldız Verin

Bu projeyi beğendiyseniz, lütfen yıldız verin! ⭐

## 🐛 Hata Bildirimi

Hata bulduysanız veya öneriniz varsa, lütfen [Issues](https://github.com/byrmstf/hidden-url/issues) sayfasından bildirin.

## 📊 İstatistikler

![GitHub stars](https://img.shields.io/github/stars/byrmstf/hidden-url)
![GitHub forks](https://img.shields.io/github/forks/byrmstf/hidden-url)
![GitHub issues](https://img.shields.io/github/issues/byrmstf/hidden-url)
![GitHub pull requests](https://img.shields.io/github/issues-pr/byrmstf/hidden-url)

---

**⭐ Bu projeyi beğendiyseniz, yıldız vermeyi unutmayın!**