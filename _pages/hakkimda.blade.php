@php($title = 'Hakkımda')
@extends('hyde::layouts.app')
@section('content')

    @php($skills = collect([
            'Devops' => [
                ['image' => 'git-original.svg', 'title' => 'Git'],
                ['image' => 'github-original.svg', 'title' => 'Github'],
                ['image' => 'vscode-original.svg', 'title' => 'VSCode'],
                ['image' => 'docker-original-wordmark.svg', 'title' => 'Docker'],
                ['image' => 'portainer-original-wordmark.svg', 'title' => 'Portainer'],
                ['image' => 'npm-original-wordmark.svg', 'title' => 'NPM'],
                ['image' => 'webpack-original.svg', 'title' => 'WebPack'],
                ['image' => 'sublime.svg', 'title' => 'SublimeText'],
                ['image' => 'virtualbox-icon.svg', 'title' => 'VirtualBox'],
                ['image' => 'yarn-original-wordmark.svg', 'title' => 'yarn'],
                ['image' => 'githubactions-original.svg', 'title' => 'Github Actions'],
                ['image' => 'amazonwebservices-original-wordmark.svg', 'title' => 'Amazon AWS'],
                ['image' => 'phpstorm.svg', 'title' => 'PhpStorm'],
                ['image' => 'datagrip-original.svg', 'title' => 'DataGrip'],
                ['image' => 'jetbrains-original.svg', 'title' => 'Jetbrains IDE\'s'],
                ['image' => 'vagrant-original.svg', 'title' => 'Vagrant'],
                ['image' => 'prettier.svg', 'title' => 'Prettier'],
                //        ['image' => 'vsphere-original.svg' ,'title' => 'VMWare Esxi', ],
                ['image' => 'vmware-esxi.svg', 'title' => 'VMWare Esxi'],
                ['image' => 'macOS.svg', 'title' => 'mac OS'],
                ['image' => 'microsoft-windows.svg', 'title' => 'Windows'],
                ['image' => 'ubuntu.svg', 'title' => 'Ubuntu'],
                ['image' => 'ae.svg', 'title' => 'After effects'],
                ['image' => 'photoshop-original.svg', 'title' => 'Photoshop'],
                ['image' => 'ai.svg', 'title' => 'Adobe Illustrator'],
                ['image' => 'adobe-xd.svg', 'title' => 'Adobe XD'],
                ['image' => 'sap.svg', 'title' => 'SAP Business One'],
                ['image' => 'logo140-beasmanufacturing-rgb-color-onwhite.png', 'title' => 'Beas Manufacturing'],
                ['image' => 'B1-UP.svg', 'title' => 'B1 Up'],
            ],
            'Business Tools' => [
                ['image' => 'google-gmail.svg', 'title' => 'Gmail'],
                ['image' => 'wordpress-original.svg', 'title' => 'Wordpress'],
                ['image' => 'Google_Fonts_logo.svg', 'title' => 'Google Fonts'],
                ['image' => 'font-awesome.svg', 'title' => 'Font Awsome'],
                ['image' => 'google-adsense.svg', 'title' => 'Google Adsense'],
            ],

            'Utilities' => [
                ['image' => 'google-analytics.svg', 'title' => 'Google Analystics'],
                ['image' => 'postman-icon.svg', 'title' => 'Postman'],
                ['image' => 'stackoverflow-icon.svg', 'title' => 'Stack Overflow'],
                ['image' => 'elasticsearch.svg', 'title' => 'Elasticsearch'],
                ['image' => 'meilisearch.svg', 'title' => 'Meilisearch'],
            ],

            'Application and Data' => [
                ['image' => 'javascript.svg', 'title' => 'JavaScript'],
                ['image' => 'jquery.svg', 'title' => 'jQuery'],
                ['image' => 'alpinejs-icon.svg', 'title' => 'AlpineJs'],
                ['image' => 'nodejs.svg', 'title' => 'Node.js'],
                ['image' => 'html-5.svg', 'title' => 'HTML5'],
                ['image' => 'php.svg', 'title' => 'PHP'],
                ['image' => 'composer-original.svg', 'title' => 'Composer'],
                ['image' => 'mysql-original-wordmark.svg', 'title' => 'Mysql'],
                ['image' => 'microsoftsqlserver-original-wordmark.svg', 'title' => 'MSSQL'],
                ['image' => 'nginx-original.svg', 'title' => 'NGINX'],
                ['image' => 'apache-original-wordmark.svg', 'title' => 'Apache'],
                ['image' => 'mongodb-original-wordmark.svg', 'title' => 'MongoDB'],
                ['image' => 'google-drive.svg', 'title' => 'Google Drive'],
                ['image' => 'css-3.svg', 'title' => 'CSS 3'],
                ['image' => 'ubuntu.svg', 'title' => 'Ubuntu'],
                ['image' => 'cloudflare-icon.svg', 'title' => 'Cloudflare'],
                ['image' => 'redis.svg', 'title' => 'Redis'],
                ['image' => 'vue.svg', 'title' => 'Vue3'],
                ['image' => 'aws-s3.svg', 'title' => 'Amazon S3'],
                ['image' => 'aws-ec2.svg', 'title' => 'Amazon EC2'],
                ['image' => 'digital-ocean.svg', 'title' => 'DigitalOcean'],
                ['image' => 'laravel.svg', 'title' => 'Laravel'],
                ['image' => 'livewire-original-wordmark.svg', 'title' => 'Livewire'],
                ['image' => 'inertiajs-logo.png', 'title' => 'InertiaJs'],
                ['image' => 'google-cloud.svg', 'title' => 'Google Cloud Platform'],
                ['image' => 'dropbox.svg', 'title' => 'Dropbox'],
                ['image' => 'microsoft-onedrive.svg', 'title' => 'Onedrive'],
                ['image' => 'markdown.svg', 'title' => 'Markdown'],
                ['image' => 'sqlite.svg', 'title' => 'SQLite'],
                ['image' => 'mariadb-original-wordmark.svg', 'title' => 'MariaDB'],
                ['image' => 'centos-original-wordmark.svg', 'title' => 'CentOs'],
                ['image' => 'centos-original.svg', 'title' => 'Google Compute Engine'],
                ['image' => 'symfony.svg', 'title' => 'Symfony'],
                ['image' => 'logo.svg', 'title' => 'İlkByte'],
                ['image' => 'tailwindcss.svg', 'title' => 'Tailwindcss'],
                ['image' => 'bootstrap.svg', 'title' => 'Bootstrap'],
                ['image' => 'sass.svg', 'title' => 'Sass'],
                ['image' => 'laragon.svg', 'title' => 'Laragon'],
                ['image' => 'python.svg', 'title' => 'python'],
                ['image' => 'react.svg', 'title' => 'react'],
                ['image' => 'SolidWorks_Logo.svg', 'title' => 'SolidWorks'],
                ['image' => 'AutoCad_logo.svg', 'title' => 'Autodesk Autocad'],
                ['image' => 'fusion-360-badge-128@2x.png', 'title' => 'Autodesk Fusion 360'],
                ['image' => 'Threejs-logo.svg', 'title' => 'Tree.js'],
            ],
            'OS' => [
                ['image' => 'apple-original.svg', 'title' => 'apple-original.svg'],
                ['image' => 'raspberrypi-original.svg', 'title' => 'raspberrypi-original.svg'],
                ['image' => 'windows11-original-wordmark.svg', 'title' => 'windows11-original-wordmark.svg'],
                //                ['image' => 'windows11-original.svg', 'title' => 'windows11-original.svg'],
                ['image' => 'windows8-original-wordmark.svg', 'title' => 'windows8-original-wordmark.svg'],
                //                ['image' => 'apple.svg', 'title' => 'apple.svg'],

            ],
            'Diğer' => [
                ['image' => 'electron-original.svg', 'title' => 'electron-original.svg'],
                ['image' => 'matlab-original.svg', 'title' => 'matlab-original.svg'],
                ['image' => 'notion-original.svg', 'title' => 'notion-original.svg'],
                ['image' => 'nuxtjs-original.svg', 'title' => 'nuxtjs-original.svg'],
                ['image' => 'ohmyzsh-original.svg', 'title' => 'ohmyzsh-original.svg'],
                ['image' => 'pfsense-original.svg', 'title' => 'pfsense-original.svg'],
                ['image' => 'pnpm-original-wordmark.svg', 'title' => 'pnpm-original-wordmark.svg'],
                ['image' => 'puppeteer-original.svg', 'title' => 'puppeteer-original.svg'],
                ['image' => 'yunohost-original.svg', 'title' => 'yunohost-original.svg'],
                ['image' => 'chartjs.svg', 'title' => 'chartjs.svg'],
                ['image' => 'daisyUI.svg', 'title' => 'daisyUI.svg'],
                ['image' => 'firefox.svg', 'title' => 'firefox.svg'],
                ['image' => 'zoom-icon.svg', 'title' => 'zoom-icon.svg'],
                ['image' => 'google-play-icon.svg', 'title' => 'google-play-icon.svg'],
                ['image' => 'google-domains-icon.svg', 'title' => 'google-domains-icon.svg'],
                ['image' => 'chrome-web-store.svg', 'title' => 'chrome-web-store.svg'],
                ['image' => 'recaptcha.svg', 'title' => 'recaptcha.svg'],
                ['image' => 'hcaptcha-icon.svg', 'title' => 'hcaptcha-icon.svg'],
                ['image' => 'cloudflare-workers-icon.svg', 'title' => 'cloudflare-workers-icon.svg'],
                ['image' => 'google-search-console.svg', 'title' => 'google-search-console.svg'],
                ['image' => 'flutter.svg', 'title' => 'flutter.svg'],
                ['image' => 'socket.io.svg', 'title' => 'socket.io.svg'],
                ['image' => 'websocket.svg', 'title' => 'websocket.svg'],
                ['image' => 'mailgun-icon.svg', 'title' => 'mailgun-icon.svg'],
                ['image' => 'planetscale.svg', 'title' => 'planetscale.svg'],
                ['image' => 'headlessui-icon.svg', 'title' => 'headlessui-icon.svg'],
                ['image' => 'pwa.svg', 'title' => 'pwa.svg'],
            ],
        ]))

    <div class="px-5 2xl:p-0">
        <div class="my-10 bg-white dark:bg-neutral-800 rounded-xl border dark:border-neutral-700 shadow max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">

            <div class="mx-auto w-full xl:w-8/12">
                <!-- Profile -->
                <div class="flex items-center gap-x-3">
                    <div class="shrink-0">
                        <img class="shrink-0 size-16 rounded-full" src="https://avatars.githubusercontent.com/u/652539?v=4" alt="Avatar">
                    </div>

                    <div class="grow">
                        <h1 class="text-lg font-medium text-gray-800 dark:text-neutral-200">
                            Alican ERTÜRK
                        </h1>
                        <p class="text-sm text-gray-600 dark:text-neutral-400">
                            Fullstack Web Developer
                        </p>
                    </div>
{{--                    <div class="hidden sm:block grow text-right">--}}
{{--                        <a title="İletişim" href="{{ route('contact') }}" class="group inline-flex items-center justify-center whitespace-nowrap font-medium ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 dark:ring-offset-zinc-950 dark:focus-visible:ring-zinc-300 active:scale-[0.99] duration-500 hover:scale-[1.02] bg-zinc-900 dark:bg-zinc-50 h-10 px-5 py-2 animate-bg-shine border-[1px] rounded-lg shadow bg-[length:200%_100%] tracking-wide dark:bg-[linear-gradient(110deg,#09090B,45%,#27272A,55%,#09090B)] dark:text-zinc-200 dark:border-zinc-800 bg-[linear-gradient(110deg,#FFF,45%,#E4E4E7,55%,#FFF)] text-zinc-800 border-zinc-300">--}}
{{--                            <p>İletişim</p>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
                <!-- End Profile -->
{{--                <div class="block sm:hidden grow text-center mt-4">--}}
{{--                    <a title="İletişim" href="{{ route('contact') }}" class="group inline-flex items-center justify-center whitespace-nowrap font-medium ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 dark:ring-offset-zinc-950 dark:focus-visible:ring-zinc-300 active:scale-[0.99] duration-500 hover:scale-[1.02] bg-zinc-900 dark:bg-zinc-50 h-10 px-5 py-2 animate-bg-shine border-[1px] rounded-lg shadow bg-[length:200%_100%] tracking-wide dark:bg-[linear-gradient(110deg,#09090B,45%,#27272A,55%,#09090B)] dark:text-zinc-200 dark:border-zinc-800 bg-[linear-gradient(110deg,#FFF,45%,#E4E4E7,55%,#FFF)] text-zinc-800 border-zinc-300">--}}
{{--                        <p>İletişim</p>--}}
{{--                    </a>--}}
{{--                </div>--}}
                <!-- About -->
                <div class="mt-8">
                    <p class="text-md text-gray-600 dark:text-neutral-400">
                        Merhaba, ben Alican. 34 yaşındayım ve 2000 yılından beri bilgisayarlarla iç içeyim. Bu süre zarfında yazılım, donanım ve network alanlarında derinlemesine bilgi sahibi oldum. Fullstack Web Developer olarak, Php, JavaScript, HTML ve CSS kullanarak çeşitli web uygulamaları geliştirdim. Sanallaştırma teknolojilerine olan ilgim, VMware, Hyper-V ve Docker gibi platformlarda yetkinlik kazanmamı sağladı. Ayrıca, sunucu kurulumu ve yönetimi, veri tabanı yönetimi (MySQL, MsSql, SqLite, Redis) ve proje yönetimi konularında da uzmanlaştım.
                    </p>

                    <p class="mt-3 text-md text-gray-600 dark:text-neutral-400">
                        Profesyonel kariyerimde, SAP entegrasyonları ve otomasyon çözümleri geliştirerek şirket içi süreçleri optimize ettim. Donanım ve network yapılandırmalarında deneyim sahibiyim ve bu alanlarda birçok başarılı projeye imza attım. Asıl amacım, Laravel ile çalışan, şirketlere ve iş yerlerine özel web bazlı uygulamalar geliştirmek ve çözüm sağlamaktır. Bu uygulamalar, ister local ister cloud bazlı kullanılabilerek özel çözümler sunar. İngilizce dil bilgim C1 seviyesindedir. Teknolojiye olan tutkum ve sürekli öğrenme isteğim, beni her geçen gün daha da ileriye taşıyor. Web sitemdeki projelerim ve blog yazılarımla, bilgi ve deneyimlerimi sizlerle paylaşmaktan büyük mutluluk duyuyorum.
                    </p>

                    {{--            <ul class="mt-5 flex flex-col gap-y-3">--}}
                    {{--                <li class="flex items-center gap-x-2.5">--}}
                    {{--                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
                    {{--                        <rect width="20" height="16" x="2" y="4" rx="2" />--}}
                    {{--                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />--}}
                    {{--                    </svg>--}}
                    {{--                    <a class="text-[13px] text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400"--}}
                    {{--                       href="mailto:alixcan.net+cv@protonmail.com">--}}
                    {{--                        alixcan.net@protonmail.com--}}
                    {{--                    </a>--}}
                    {{--                </li>--}}

                    {{--                <li class="flex items-center gap-x-2.5">--}}
                    {{--                    <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                    {{--                        <path d="M14.1881 10.1624L22.7504 0H20.7214L13.2868 8.82385L7.34878 0H0.5L9.47944 13.3432L0.5 24H2.5291L10.3802 14.6817L16.6512 24H23.5L14.1881 10.1624ZM11.409 13.4608L3.26021 1.55962H6.37679L20.7224 22.5113H17.6058L11.409 13.4613V13.4608Z" fill="currentColor" />--}}
                    {{--                    </svg>--}}
                    {{--                    <a class="text-[13px] text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400" href="https://twitter.com/AlixcaNN">--}}
                    {{--                        @AlixcaNN--}}
                    {{--                    </a>--}}
                    {{--                </li>--}}
                    {{--            </ul>--}}
                    <div class="space-y-3 px-5 mt-10">
                        <h4 class="-ml-5 text-2xl font-bold text-indigo-800 dark:text-indigo-400">
                            Uzmanlık Alanlarım
                        </h4>
                        <ul class="list-inside list-disc text-lg dark:text-gray-400">
                            <li>Web Uygulamaları Geliştirme (Php, JavaScript, HTML, CSS)</li>
                            <li>SAP Entegrasyonları ve Otomasyon</li>
                            <li>Donanım ve Network Yapılandırma</li>
                            <li>Sanallaştırma Teknolojileri (VMware, Hyper-V, Docker)</li>
                            <li>Sunucu Kurulumu ve Yönetimi</li>
                            <li>Veri Tabanı Yönetimi (MySQL, MsSql, SqLite, Redis)</li>
                            <li>Proje Yönetimi</li>
                        </ul>
                    </div>

                    <x-data-list />

                    <div class="mt-5 space-y-5">
                        <div class="space-y-5">
                            <h4 class=" text-2xl font-bold text-indigo-800 dark:text-indigo-400">
                                Çalıştığım Yerler ve Projeler
                            </h4>

                            <div class="space-y-5">
                                <div>
                                    <h3 class="mb-1 flex flex-col text-lg font-semibold text-gray-600 dark:text-gray-200 md:flex-row md:items-center">
                                        Aysam Orthopaedics & Medical Devices
                                        <span class="bg-green-100 text-green-800 me-2 max-w-max rounded px-2.5 py-0.5 text-sm font-medium md:ms-3">
                                        Son Çalıştığım Yer
                                    </span>
                                    </h3>
                                    <time class="mb-2 block text-sm font-normal leading-none text-gray-400">
                                        2024 - ∞
                                    </time>
                                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-300">Dijital Dönüşüm Uzmanı / Bilgi İşlem Uzmanı</p>

                                </div>
                                <div class="text-gray-500 dark:text-gray-300">
                                    <ul class="ml-3 grid list-inside list-disc grid-cols-1 gap-1 lg:grid-cols-2">
                                        <li>SysMond ERP Sistemi Entegrasyonları</li>
                                        <li>ÜVT - Üretim Veri Takip Sistemi</li>
                                        <li>Depo Sayım Aracı</li>
                                        <li>Depo Stok Kontrol Aracı</li>
                                        <li>Stok Kalemleri Önizleme Aracı br(3D / 2D) Teknik Resimleri İle</li>
                                        <li>İnsan Kaynakları Sistemi</li>
                                        <li>Sevkiyat Planlama Sistemi</li>
                                        <li>Müşteri Portalı</li>
                                        <li>Teklif Hazırlama Sistemi</li>
                                        <li>SAP Entegrasyonu</li>
                                        <li>SAP Üretim Veri Takip Sistemi</li>
                                        <li>Üretim Veri Takip Sistemi</li>
                                        <li>SAP ISO Yönetim Sistemi</li>
                                        <li>Beas Entegrasyonu</li>
                                    </ul>
                                </div>
                            </div>


                            <div>
                                <h3
                                    class="mb-1 flex flex-col text-lg font-semibold text-gray-600 dark:text-gray-200 md:flex-row md:items-center"
                                >
                                    SEMSAN Pompa Mak. San. Tic. Ltd. Şti.
{{--                                    <span--}}
{{--                                        class="bg-green-100 text-green-800 me-2 max-w-max rounded px-2.5 py-0.5 text-sm font-medium md:ms-3"--}}
{{--                                    >--}}
{{--                            Son Çalıştığım Yer--}}
{{--            </span>--}}
                                </h3>
                                <time class="mb-2 block text-sm font-normal leading-none text-gray-400">
                                    2011 - 2024
                                </time>
                                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-300">Dijital Dönüşüm Uzmanı / Bilgi İşlem Uzmanı</p>

                            </div>
                            <div class="text-gray-500 dark:text-gray-300">
                                <ul
                                    class="ml-3 grid list-inside list-disc grid-cols-1 gap-1 lg:grid-cols-2"
                                >
                                    <li>Plunger Seçim Aracı</li>
                                    <li>ISO Yönetim Sistemi</li>
                                    <li>Kalibrasyon Takip Sistemi</li>
                                    <li>Dosya Yönetim Sistemi (DMS)</li>
                                    <li>Sevkiyat Planlama Sistemi</li>
                                    <li>İnsan Kaynakları Sistemi</li>
                                    <li>Dökümhane Yönetim Sistemi</li>
                                    <li>Müşteri Portalı</li>
                                    <li>Teklif Hazırlama Sistemi</li>
                                    <li>SAP Entegrasyonu</li>
                                    <li>SAP Üretim Veri Takip Sistemi</li>
                                    <li>Üretim Veri Takip Sistemi</li>
                                    <li>SAP ISO Yönetim Sistemi</li>
                                    <li>Beas Entegrasyonu</li>
                                    <li>Web Sitesi ve SEO çalışmaları</li>
                                    <li>Ürün Fotoğrafçılığı</li>
                                </ul>
                            </div>
                            {{-- <x-skills.timeline.button url="https://alixcan.net">Download</x-timeline.button> --}}
                        </div>


                    </div>


                </div>
                <!-- End About -->
            </div>

            {{--Skills--}}
            <div x-data class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-7 gap-4 mt-10 mx-auto w-full xl:w-9/12 dark:bg-neutral-700/50 rounded-xl border dark:border-neutral-600 shadow p-5 ">
                @forelse($skills as $group => $skill)
                    <div class="col-span-full border-b dark:border-neutral-600 px-3 pb-5 text-4xl dark:text-orange-500">
                        {{ $group }}
                    </div>
                    @forelse($skill as $item)
                        <div class="inline-block mb-3">
                            <div  x-tooltip.raw="{{ $item['title'] }}" class="h-28 w-full p-3 inline-flex justify-center items-center gap-2 rounded-xl bg-gray-50 border border-gray-200 text-gray-600 hover:bg-blue-50 hover:border-blue-200 hover:text-blue-600 focus:outline-none focus:bg-blue-50 focus:border-blue-200 focus:text-blue-600 dark:bg-neutral-800/80 dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-white/10 dark:hover:border-white/10 dark:hover:text-white dark:focus:bg-white/10 dark:focus:border-white/10 dark:focus:text-white">
                                <img loading="lazy" class="min-h-full max-h-full" src="{{ 'https://cdn.alixcan.net/icons/'. $item['image'] }}" alt="{{ $item['title'] }}">
                            </div>
                        </div>
                    @empty
                    @endforelse
                @empty
                @endforelse

            </div>
        </div>

    </div>



@endsection
