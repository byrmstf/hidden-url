# 🤝 Katkıda Bulunma Rehberi

Hidden URL projesine katkıda bulunmak istediğiniz için teşekkürler! Bu rehber, projeye nasıl katkıda bulunabileceğinizi açıklar.

## 📋 İçindekiler

- [Kod Katkısı](#kod-katkısı)
- [Hata Bildirimi](#hata-bildirimi)
- [Özellik İsteği](#özellik-isteği)
- [Dokümantasyon](#dokümantasyon)
- [Geliştirme Ortamı](#geliştirme-ortamı)

## 🚀 Kod Katkısı

### 1. Fork Yapın
- GitHub'da projeyi fork edin
- Yerel makinenizde klonlayın:
```bash
git clone https://github.com/YOUR_USERNAME/hidden-url.git
cd hidden-url
```

### 2. Branch Oluşturun
```bash
git checkout -b feature/amazing-feature
# veya
git checkout -b fix/bug-description
```

### 3. Değişikliklerinizi Yapın
- Kod yazarken mevcut stil rehberini takip edin
- Yorumları Türkçe veya İngilizce yazın
- Güvenlik açıklarını dikkate alın

### 4. Test Edin
```bash
# PHP sunucusunu başlatın
php -S localhost:8000

# Test edin
curl http://localhost:8000
```

### 5. Commit ve Push
```bash
git add .
git commit -m "Add: amazing feature description"
git push origin feature/amazing-feature
```

### 6. Pull Request Oluşturun
- GitHub'da Pull Request oluşturun
- Değişikliklerinizi detaylı açıklayın
- İlgili issue'ları referans edin

## 🐛 Hata Bildirimi

### Hata Bildirirken:
1. **Açıklayıcı başlık** kullanın
2. **Adım adım** hatayı nasıl tekrarlayabileceğinizi açıklayın
3. **Beklenen davranış** vs **gerçek davranış** belirtin
4. **Sistem bilgileri** ekleyin (PHP versiyonu, OS, vs.)
5. **Ekran görüntüsü** varsa ekleyin

### Hata Bildirimi Şablonu:
```markdown
**Hata Açıklaması**
Kısa ve net açıklama

**Tekrarlama Adımları**
1. '...' adımına gidin
2. '...' tıklayın
3. '...' hatası görünür

**Beklenen Davranış**
Ne olması gerektiği

**Gerçek Davranış**
Ne olduğu

**Sistem Bilgileri**
- OS: [e.g. Windows 10]
- PHP: [e.g. 8.3.25]
- Tarayıcı: [e.g. Chrome 120]

**Ek Bilgiler**
Varsa ek bilgiler
```

## 💡 Özellik İsteği

### Özellik İsterken:
1. **Açık başlık** kullanın
2. **Problem** açıklayın
3. **Çözüm önerisi** sunun
4. **Alternatifler** düşünün
5. **Ek bağlam** ekleyin

## 📚 Dokümantasyon

Dokümantasyon katkıları da çok değerlidir:
- README.md güncellemeleri
- Kod yorumları
- Kullanım örnekleri
- Video rehberler

## 🛠️ Geliştirme Ortamı

### Gereksinimler:
- PHP 7.4+
- Web sunucusu (Apache/Nginx)
- Git

### Kurulum:
```bash
# Projeyi klonlayın
git clone https://github.com/byrmstf/hidden-url.git
cd hidden-url

# Test sunucusunu başlatın
php -S localhost:8000
```

### Kod Stili:
- PSR-12 standartlarını takip edin
- Anlamlı değişken isimleri kullanın
- Yorumları açıklayıcı yazın
- Güvenlik önlemlerini unutmayın

## 🏷️ Commit Mesajları

Commit mesajlarınızı şu formatta yazın:
```
type: kısa açıklama

Detaylı açıklama (isteğe bağlı)
```

**Türler:**
- `Add:` Yeni özellik
- `Fix:` Hata düzeltmesi
- `Update:` Mevcut özellik güncellemesi
- `Remove:` Özellik kaldırma
- `Docs:` Dokümantasyon
- `Style:` Kod formatı
- `Refactor:` Kod yeniden düzenleme
- `Test:` Test ekleme

## 📞 İletişim

- **GitHub Issues:** Hata bildirimi ve özellik istekleri için
- **Email:** [mustafabayram.com.tr](https://mustafabayram.com.tr)
- **Website:** [mustafabayram.com.tr](https://mustafabayram.com.tr)

## 🙏 Teşekkürler

Katkıda bulunan herkese teşekkürler! Projeyi daha iyi hale getirmek için birlikte çalışalım.

---

**Not:** Bu proje MIT lisansı altındadır. Katkıda bulunarak, kodunuzun bu lisans altında yayınlanmasını kabul etmiş olursunuz.
