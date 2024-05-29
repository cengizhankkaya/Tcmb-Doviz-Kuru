# tcmb-doviz-kuru #

# Türkiye Cumhuriyet Merkez Bankası Güncel Efektif Döviz Kuru



- Güncel Döviz Kuru verilerini internette bulmamız çok basittir. Peki bu bilgileri doğru ve etkili olarak nasıl kullanabiliriz sorusunu sizlere açıklamak ve uygulamalı olarak göstermek adına oluşturduğum **Türkiye Cumhuriyet Merkez Bankası Güncel Efektif Döviz Kuru** scriptini dilediğiniz gibi kullanabilirsiniz.
- Kolay ve anlaşılır olabilmesi adına kod (PHP) içeriğini olabildiği kadar minimize etmeye çalıştım. Umarım işinize yarar.
- Scriptin satışını yapmadığınız ve ticari kullanmadığınız sürece sorun olmayacaktır.



## Kullanımı ##



Veri kaynak URL: [TCMB Kurlar Sayfası](http://www.tcmb.gov.tr/kurlar/today.xml).

İlgili kaynak bağlantıdan alınan XML içeriği:

```xml
<?xml version="1.0" encoding="UTF-8"?>
<?xml-stylesheet type="text/xsl" href="isokur.xsl"?>
<Tarih_Date Tarih="11.01.2019" Date="01/11/2019" Bulten_No="2019/8">
    <Currency CrossOrder="0" Kod="USD" CurrencyCode="USD">
        <Unit>1</Unit>
        <Isim>ABD DOLARI</Isim>
        <CurrencyName>US DOLLAR</CurrencyName>
        <ForexBuying>5.4242</ForexBuying>
        <ForexSelling>5.4340</ForexSelling>
        <BanknoteBuying>5.4205</BanknoteBuying>
        <BanknoteSelling>5.4422</BanknoteSelling>
        <CrossRateUSD/>
        <CrossRateOther/>
    </Currency>

 ...
</Tarih_Date>

```


## XML Kaynağından Veri Okuma İşlemi:

### İlk olarak XML kaynak bağlantıdan verileri okuma işlemi yapıyoruz:
```php
<?php 
$doviz = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml'); 
?>
```
## XML Kaynağından Veri Okuma ve Değişkenlere Atama:
```php
<?php 
$doviz = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');

// Dolar başlıyor //  
$dolar_alis = $doviz->Currency[0]->BanknoteBuying;
$dolar_satis = $doviz->Currency[0]->BanknoteSelling;
// Dolar bitiyor //

// Euro başlıyor // 
$euro_alis = $doviz->Currency[3]->BanknoteBuying;
$euro_satis = $doviz->Currency[3]->BanknoteSelling;
// Euro bitiyor // 

// Sterlin başlıyor //
$pound_alis = $doviz->Currency[4]->BanknoteBuying;
$pound_satis = $doviz->Currency[4]->BanknoteSelling;
// Sterlin bitiyor //
?>
```

### Yukarıda görüldüğü gibi sadece DOLAR, EURO ve İNGİLİZ STERLİNİ için verileri okuyoruz. Diğer para birimleri için XML kaynağını takip edebilirsiniz.



