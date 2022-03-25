# hidden-url

Code samples are written on **php**. But it can be applied algorithmically to other languages as well. 

The purpose of hiding the url makes it difficult to download documents, image,video etc.

To prevent direct access to the file.

``` php
if (!isset($_SERVER['HTTP_REFERER']) 
    && strpos($_SERVER['HTTP_REFERER'], 'http://hidden-url/') === false) {
    die('None content');
}
```

When you want to access from browser like below
> http://hidden-url/img.php?h=05edd57091ad570303df856c652a7a174554a148]

**info** 
--- 
https://mustafabayram.dev 
---
