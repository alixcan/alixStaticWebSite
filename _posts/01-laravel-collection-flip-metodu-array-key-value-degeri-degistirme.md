---
title: Laravel Collection Flip Metodu - Array Key-Value Değeri Değiştirme
description: Bir array yapısı içinde anahtar ile değerin yerini değiştirmek için kulanabileceğiniz çok basit bir yapı collection flip() metodu.
category: laravel
author: alixcan
date: 2024-09-01 13:38
image: https://alixcan.net/storage/1/conversions/01J6PZG12JXBRT8CZ7DBQYN44H-cover.webp
thumb: https://alixcan.net/storage/1/conversions/01J6PZG12JXBRT8CZ7DBQYN44H-thumb.webp
---

Laravel collection'ları bildiğiniz üzere aşırı güclü ve başarılı bir yapı.

Bugün birşeyler karalarken bir array içinde key ile valueları değiştirmem gerekti yani

```php 
$orjinalArray = [
	"key1" => "value1", 
	"key2" => "value2", 
	"key3" => "value3", 
	"key4" => "value4", 
	"key5" => "value5" 
]; 

$olmasiniIstedigimArray = [ 
	"value1" => "key1", 
	"value2" => "key2", 
	"value3" => "key3", 
	"value4" => "key4", 
	"value5" => "key5" 
]; 

``` 
Kullanımı:
```php 
	return collect($orjinalArray)->flip(); 
``` 

Çıktısı

```php 
Illuminate\Support\Collection {#3685 all: [ 
	"value1" => "key1", 
	"value2" => "key2", 
	"value3" => "key3", 
	"value4" => "key4", 
	"value5" => "key5", 
], }
```