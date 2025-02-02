---
title: Github Branchlerini Composer Dependency Gibi Kullanmak
description: Git projelerini composer dependency gibi projelerinize entegre etmek
category: composer
author: alixcan
date: 2024-09-03 13:38
image: https://alixcan.net/storage/2/conversions/01J6W2JFJRBKDK0BQ0JHF322QV-cover.webp
thumb: https://alixcan.net/storage/2/conversions/01J6W2JFJRBKDK0BQ0JHF322QV-thumb.webp
---

## Github Branchlerini Composer Dependency Gibi Kullanmak
Bazı zamanlarda direkt olarak bir github reposunu projenize dahil etmek gerekebilir (zaman zaman abond edilmiş kütüphane forklarını test etmek için kullanabiliyorum)

Bu durumlarda yapmanız gereken aslında çok basit;

composer.json dosyanıza şu satırları ekleyin;

```json
{
   "repositories": [ // [tl! ++]
       { // [tl! ++]
          "type": "git", // [tl! ++]
          "url": "https://github.com/yormy/laravel-eloquent-query-cache" // [tl! ++]
       } // [tl! ++]
   ], // [tl! ++]
    
    "require": {
       ...
       "rennokki/laravel-eloquent-query-cache" : "dev-laravel11" // [tl! ++]
    }
}
```



`composer update /  composer install` çalıştırmanız yeterli olacaktır.

Ne yapmış olduk?
Repositories ile hangi repoların ekleneceğini belirtiyoruz burda direkt github repo linkini ekledik ve tipini git olarak belirttik ki composer ne yaptığımızı anlasın.

sonra standart dependency ekler gibi kütüphanemizi ekledik fakat burada önemli bir nokta var dikkat ettiyseniz versiyon kısmında

dev-laravel11 - yani repodaki branch adı yazmakta ve başına dev- eklememiz zorunlu.

Bu örnek komplike bir örnek o yüzden biraz daha anlatmak istediklerim var.

İşin özünde eklemek istediğim paket;

https://github.com/renoki-co/laravel-eloquent-query-cache paketiydi

Fakat uzun zamandır güncellenmediği için kullanılamıyor.
Issue lara bakınca bir kişinin forkladığını gördüm o yüzden fork reposunu aldım.

Bundan dolayı paket adı ve github repo linkleri birbirinden bağımsız.