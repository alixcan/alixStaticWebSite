---
title: SAP Tablo ve Anaveri Ekranları Tasarımı | Laravel + Tailwindcss + AlpineJs
description: Tailwindcss ve Laravel Blade Componentları ile SAP Tablo ve Ana veri Ekran Tasarımları
category: laravel
author: alixcan
date: 2024-09-10 13:38
image: https://alixcan.net/storage/4/conversions/01J6YHWCZNSXNP8HNDRF5KCDTP-cover.webp
thumb: https://alixcan.net/storage/4/conversions/01J6YHWCZNSXNP8HNDRF5KCDTP-thumb.webp
---

Tailwindcss ve Laravel Blade Componentları ile SAP Tablo ve Ana veri Ekran Tasarımları

Eski çalıştığım şirkette SAP entegrasyonları hazırlarken kullanıcılar görmeye alışık oldukları ekranlar haricinde tasarlanmış ekranlar gördüklerinde zorluk yaşadıklarını söylemişlerdi.
O sırada aklıma sürekli kullandıkları ekranlara benzer bir tasarım yapma fikri gelmişti. Can sıkıntısı ve merakta eklenince Ortaya bir şeyler çıktı.

Laravel ile entegrasyon hazırladığım için tailwind ve blade componentları bu işleri hızlandırıcak ve tekrar kullanıma imkan sağlayacağı için bu şekilde hazırlamıştım.

Şimdi sizlere orjinal SAP ekranlarından birkaç detay göstermek istiyorum.

Tablo Örneği;
<img class="mx-auto" src="https://alixcan.net/storage/blog/post/body/VkkbJp1gitPRgxYqjaD261qukZuKed60hiDR9ctY.png" alt="">

Ana Veri Örneği; (Sarı alanlar bul modunda olduğundan kaynaklı veri incelerken input alanları beyaz oluyor 😀)
<img class="mx-auto" src="https://alixcan.net/storage/blog/post/body/UKeRyLHBh36SM0lOoW2GgDF6DbGHZ4ubjPtiLQbv.png" alt="">


Bunlarda benim hazırladığım tasarımlar;

Tablo Örneği;
<img class="mx-auto" src="https://alixcan.net/storage/blog/post/body/9dS0NLocWXOoAEszi7BR2JIgBOWmM9ZVC6raAecf.png" alt="">

Ana Veri Örneği;
<img class="mx-auto" src="https://alixcan.net/storage/blog/post/body/jdSM9SdAsQZbHLv7B5SYFd3Z6CZPBWqqUouJusRw.png" alt="">



Kullanım kısmına gelicek olursak;

Blade componentları olduğundan ötürü aşağıda paylaşmış olduğum github linki üstünden indirdiğiniz dosyaları
resources/views/components/ içine sap-table ve sap-window olarak atmanız yeterli sonrasında hangi view içinde kullanmak istiyorsanız çağırmanız yeterli.

Blog Sap Tablo Tasarımı linkinden ulaşabilirsiniz.

Örnek:

Basit bir örnek ile göstermek gerekirse aşağıda verdiğim kod ve çıktısını görebilirsiniz.

Tablo Örneği;
<img class="mx-auto" src="https://alixcan.net/storage/blog/post/body/wxYSM9prmuYUnHDuPul0aIYpZVH8mVpoteDWeRg4.png" alt="">


```blade

<x-sap-table>
    <x-sap-table.heading>
        <x-sap-table.heading.row>
            <x-sap-table.heading.cell>İsim</x-sap-table.heading.cell>
            <x-sap-table.heading.cell>Soyisim</x-sap-table.heading.cell>
        </x-sap-table.heading.row>
    </x-sap-table.heading>
    <x-sap-table.body>
        <x-sap-table.body.row>
            <x-sap-table.body.cell>Kullanıcı İsmi</x-sap-table.body.cell>
            <x-sap-table.body.cell>Kullanıcı Soyisimi</x-sap-table.body.cell>
        </x-sap-table.body.row>
        <x-sap-table.body.row>
            <x-sap-table.body.cell>Kullanıcı İsmi</x-sap-table.body.cell>
            <x-sap-table.body.cell>Kullanıcı Soyisimi</x-sap-table.body.cell>
        </x-sap-table.body.row>
    </x-sap-table.body>
    <x-sap-table.foot>
        <x-sap-table.body.row>
            <x-sap-table.body.cell>İsim</x-sap-table.body.cell>
            <x-sap-table.body.cell>Soyisim</x-sap-table.body.cell>

        </x-sap-table.body.row>
    </x-sap-table.foot>
</x-sap-table>

````



Anaveri Örneği;

```blade
<x-sap-window title="Personel Anaverisi">
                <x-slot:master_data>
                    <x-sap-window.input label="İsim">Alican</x-sap-window.input>
                    <x-sap-window.input label="Email">test@deneme.den</x-sap-window.input>
                    <x-sap-window.input label="Oluşturma">11/12/2023</x-sap-window.input>
                    <x-sap-window.input label="Onay.T.">13/12/2023</x-sap-window.input>
                </x-slot:master_data>
                <x-slot:tabs>
                    <x-sap-window.tabs default_tab="1">
                        <x-slot name="buttons">
                            <x-sap-window.tab-button tab_id="1">Kullanıcı Detayları</x-sap-window.tab-button>
                        </x-slot>
                        <x-sap-window.tab-content tab_id="1">
                            <x-sap-window.input label="Deneme 1.1">Deneme 1.1</x-sap-window.input>
                        </x-sap-window.tab-content>
                    </x-sap-window.tabs>
                </x-slot:tabs>
            </x-sap-window>
```



Gelişmiş Örnekler;

Tablo Örneği;
<img class="mx-auto" src="https://alixcan.net/storage/blog/post/body/wxYSM9prmuYUnHDuPul0aIYpZVH8mVpoteDWeRg4.png" alt="">

```blade
<x-sap-table class="w-2/3 mx-auto">
                <x-sap-table.heading>
                    <x-sap-table.heading.row class="!border-b-[1px] !border-gray-50">
                        <x-sap-table.heading.cell colspan="4" class="text-gray-50 font-bold">Kullanıcı listesi</x-sap-table.heading.cell>
                    </x-sap-table.heading.row>
                    <x-sap-table.heading.row>
                        <x-sap-table.heading.cell :sort-by="true" >İsim</x-sap-table.heading.cell>
                        <x-sap-table.heading.cell :sort-by="request()->routeIs('home')" >Email</x-sap-table.heading.cell>
                        <x-sap-table.heading.cell :sort-by="request()->routeIs('home')" >Oluşturma Tarihi</x-sap-table.heading.cell>
                        <x-sap-table.heading.cell :sort-by="request()->routeIs('home')" >Email Onaylama Tarihi</x-sap-table.heading.cell>
                    </x-sap-table.heading.row>
                </x-sap-table.heading>
                <x-sap-table.body>
                    @foreach($users as $user)
                        <x-sap-table.body.row>
                            <x-sap-table.body.cell>{{ $user->name }}</x-sap-table.body.cell>
                            <x-sap-table.body.cell>{{ $user->email }}</x-sap-table.body.cell>
                            <x-sap-table.body.cell>{{ $user->created_at->format('d/m/Y') }}</x-sap-table.body.cell>
                            <x-sap-table.body.cell>{{ $user->email_verified_at->format('d/m/Y') }}</x-sap-table.body.cell>
                        </x-sap-table.body.row>
                    @endforeach
                </x-sap-table.body>
                <x-sap-table.foot>
                    <x-sap-table.body.row>
                        <x-sap-table.body.cell class="font-semibold">İsim</x-sap-table.body.cell>
                        <x-sap-table.body.cell class="font-semibold">Email</x-sap-table.body.cell>
                        <x-sap-table.body.cell class="font-semibold">Oluşturma Tarihi</x-sap-table.body.cell>
                        <x-sap-table.body.cell class="font-semibold">Email Onaylama Tarihi</x-sap-table.body.cell>
                    </x-sap-table.body.row>
                    <x-sap-table.body.row class="hover:bg-stone-200/0">
                        <x-sap-table.body.cell colspan="4" class="text-xs">
                            {{ $users->links() }}
                        </x-sap-table.body.cell>
                    </x-sap-table.body.row>
                </x-sap-table.foot>
            </x-sap-table>
```


Anaveri Örneği

<img class="mx-auto" src="https://alixcan.net/storage/blog/post/body/PXxlx5SKwdV7rNdSkd41bI98vvcOXcvOUBIfEmKC.gif" alt="">

```blade
<x-sap-window title="Personel Anaverisi" class="w-1/2 mx-auto">
            <x-slot:master_data>
                <x-sap-window.input label="İsim">Alican</x-sap-window.input>
                <x-sap-window.input label="Email">test@deneme.den</x-sap-window.input>
                <x-sap-window.input label="Oluşturma">11/12/2023</x-sap-window.input>
                <x-sap-window.input label="Onay.T.">13/12/2023</x-sap-window.input>
            </x-slot:master_data>
            <x-slot:tabs>
                <x-sap-window.tabs default_tab="1">
                    <x-slot name="buttons">
                        <x-sap-window.tab-button tab_id="1">Kullanıcı Detayları</x-sap-window.tab-button>
                        <x-sap-window.tab-button tab_id="2">Bilgi Sayfası</x-sap-window.tab-button>
                        <x-sap-window.tab-button tab_id="3">Hakkında</x-sap-window.tab-button>
                    </x-slot>
                    <x-sap-window.tab-content tab_id="1">
                        <x-sap-window.input label="Deneme 1.1">Deneme 1.1</x-sap-window.input>
                        <x-sap-window.input label="Deneme 2.1">Deneme 2.1</x-sap-window.input>
                        <x-sap-window.input label="Deneme 3.1">Deneme 3.1</x-sap-window.input>
                        <x-sap-window.input label="Deneme 4.1">Deneme 4.1</x-sap-window.input>
                        <x-sap-window.input label="Deneme 5.1">Deneme 5.1</x-sap-window.input>
                        <x-sap-window.input label="Deneme 6.1">Deneme 6.1</x-sap-window.input>
                        <x-sap-window.input label="Deneme 7.1">Deneme 7.1</x-sap-window.input>

                    </x-sap-window.tab-content>
                    <x-sap-window.tab-content tab_id="2">
                            <x-sap-window.input label="Deneme 2.1">Deneme 2.1</x-sap-window.input>
                            <x-sap-window.input label="Deneme 2.2">Deneme 2.2</x-sap-window.input>
                            <x-sap-window.input label="Deneme 2.3">Deneme 2.3</x-sap-window.input>
                            <x-sap-window.input label="Deneme 2.4">Deneme 2.4</x-sap-window.input>
                            <x-sap-window.input label="Deneme 2.5">Deneme 2.5</x-sap-window.input>

                    </x-sap-window.tab-content>
                    <x-sap-window.tab-content tab_id="3">
                        <div class="col-span-2 space-y-2">
                            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi beatae commodi corporis cum debitis dolorum enim eveniet maiores minima nobis nulla pariatur rem, sapiente sed voluptas voluptatum? Dolores, officia.</div>
                            <div>Adipisci aliquid animi asperiores aspernatur blanditiis consectetur corporis cum, cupiditate deleniti doloremque eaque eligendi eos error eum facere iste iure magni maiores maxime nam, nostrum quis reiciendis rerum sequi, totam.</div>
                            <div>Accusantium blanditiis cupiditate delectus deserunt dignissimos, eius exercitationem hic laborum praesentium quia sequi soluta ullam voluptatibus. A ad dignissimos illum placeat quaerat ut veniam voluptates? Blanditiis error esse explicabo similique?</div>
                            <div>Ab accusamus corporis deleniti dignissimos dolores doloribus ducimus, eaque earum eos error facere fugit, in inventore iusto laudantium magni officia quaerat quam quisquam ratione reiciendis repudiandae ut veritatis vero voluptates?</div>
                        </div>
                    </x-sap-window.tab-content>
                </x-sap-window.tabs>
            </x-slot:tabs>
        </x-sap-window>
```

<p><a href="https://github.com/alixcan/Blog-Sap-Tablo-Tasarimi">Blog Sap Tablo Tasarımı</a> linkten kaynak dosyalara erişebilirsiniz.</p>
