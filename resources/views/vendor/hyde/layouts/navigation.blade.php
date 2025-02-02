@php
    $navigation = \Hyde\Framework\Features\Navigation\NavigationMenu::create();
@endphp

{{--<nav class="flex flex-wrap  md:justify-start md:flex-nowrap z-50 w-full bg-white border-b border-gray-200 dark:bg-neutral-800 dark:border-neutral-700">--}}
{{--    <nav class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">--}}
{{--        <div class="flex justify-between items-center gap-x-1">--}}
{{--            <a class="flex-none font-bold text-3xl focus:outline-none focus:opacity-80--}}

{{--            bg-gradient-to-tl from-slate-400 hover:animate-pulse via-indigo-500 to-zinc-400 text-transparent bg-clip-text--}}
{{--            " href="https://alixcan.net" aria-label="Brand" title="Anasayfa">--}}
{{--                AlixcaN.Net--}}
{{--            </a>--}}

{{--            <!-- Collapse Button -->--}}
{{--            <button type="button" class="hs-collapse-toggle md:hidden relative size-9 flex justify-center items-center font-medium text-[12px] rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" id="hs-header-base-collapse" aria-expanded="false" aria-controls="hs-header-base" aria-label="Toggle navigation" data-hs-collapse="#hs-header-base">--}}
{{--                <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                    <line x1="3" x2="21" y1="6" y2="6"></line>--}}
{{--                    <line x1="3" x2="21" y1="12" y2="12"></line>--}}
{{--                    <line x1="3" x2="21" y1="18" y2="18"></line>--}}
{{--                </svg>--}}
{{--                <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                    <path d="M18 6 6 18"></path>--}}
{{--                    <path d="m6 6 12 12"></path>--}}
{{--                </svg>--}}
{{--                <span class="sr-only">Toggle navigation</span>--}}
{{--            </button>--}}
{{--            <!-- End Collapse Button -->--}}
{{--        </div>--}}

{{--        <!-- Collapse -->--}}
{{--        <div id="hs-header-base" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block " aria-labelledby="hs-header-base-collapse">--}}
{{--            <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&amp;::-webkit-scrollbar]:w-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500">--}}
{{--                <div class="py-2 md:py-0  flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">--}}
{{--                    <div class="grow">--}}
{{--                        <div class="flex flex-col md:flex-row md:justify-end md:items-center gap-0.5 md:gap-1">--}}

{{--                            <a class="p-2 flex items-center text-sm  text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100  dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:bg-neutral-700 bg-gray-100" href="https://alixcan.net" title="Anasayfa" aria-current="page">--}}
{{--                                <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>--}}
{{--                                </svg>--}}
{{--                                Anasayfa--}}
{{--                            </a>--}}


{{--                            <!-- Dropdown -->--}}
{{--                            <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false]">--}}
{{--                                <button id="hs-header-base-dropdown" type="button" class="hs-dropdown-toggle w-full p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 " aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">--}}
{{--                                    <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                        <path d="m3 10 2.5-2.5L3 5"></path>--}}
{{--                                        <path d="m3 19 2.5-2.5L3 14"></path>--}}
{{--                                        <path d="M10 6h11"></path>--}}
{{--                                        <path d="M10 12h11"></path>--}}
{{--                                        <path d="M10 18h11"></path>--}}
{{--                                    </svg>--}}
{{--                                    Araçlar--}}
{{--                                    <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 duration-300 shrink-0 size-4 ms-auto md:ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                        <path d="m6 9 6 6 6-6"></path>--}}
{{--                                    </svg>--}}
{{--                                </button>--}}

{{--                                <div class="hs-dropdown-menu z-30 transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 top-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700 hidden" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown" style="">--}}
{{--                                    <div class="py-1 md:px-1 space-y-0.5">--}}
{{--                                        <a class=" p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="https://tools.alixcan.net/utm-tag-manager" title="UTM Tag Üretici">--}}
{{--                                            UTM Tag Üretici--}}
{{--                                        </a>--}}
{{--                                        <a class=" p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="https://tools.alixcan.net/json-converter" title="JSON -> Array Çevirici">--}}
{{--                                            JSON--}}
{{--                                            <span class="font-jetbrains">&nbsp;-&gt;&nbsp;</span> Array--}}
{{--                                        </a>--}}
{{--                                        <a class=" p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="https://tools.alixcan.net/excel-converter" title="Excel -> Array Çevirici">--}}
{{--                                            Excel--}}
{{--                                            <span class="font-jetbrains">&nbsp;-&gt;&nbsp;</span> Array--}}
{{--                                        </a>--}}

{{--                                        <a class=" p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="https://tools.alixcan.net/elektrik-hesaplama" title="Elektrik Tutarı Hesaplama">--}}
{{--                                            Elektrik Tutarı Hesaplama--}}
{{--                                        </a>--}}






{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End Dropdown -->--}}


{{--                            <!-- Dropdown -->--}}
{{--                            <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false]">--}}
{{--                                <button id="hs-header-base-dropdown" type="button" class="hs-dropdown-toggle w-full p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 " aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">--}}
{{--                                    <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                        <path d="m3 10 2.5-2.5L3 5"></path>--}}
{{--                                        <path d="m3 19 2.5-2.5L3 14"></path>--}}
{{--                                        <path d="M10 6h11"></path>--}}
{{--                                        <path d="M10 12h11"></path>--}}
{{--                                        <path d="M10 18h11"></path>--}}
{{--                                    </svg>--}}
{{--                                    Blog--}}
{{--                                    <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 duration-300 shrink-0 size-4 ms-auto md:ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                        <path d="m6 9 6 6 6-6"></path>--}}
{{--                                    </svg>--}}
{{--                                </button>--}}

{{--                                <div class="hs-dropdown-menu z-30 transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 z-10 top-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700 hidden" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown" style="">--}}
{{--                                    <div class="py-1 md:px-1 space-y-0.5">--}}
{{--                                        <a class=" p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="https://alixcan.net/blog" title="Tüm Blog Yazıları">--}}
{{--                                            Tüm Yazılar--}}
{{--                                        </a>--}}

{{--                                        <div class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] [--is-collapse:true] md:[--is-collapse:false] relative">--}}
{{--                                            <button id="hs-header-base-dropdown-sub" type="button" class="hs-dropdown-toggle w-full flex justify-between items-center text-sm text-gray-800 rounded-lg p-2 md:px-3 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">--}}
{{--                                                Kategoriler--}}
{{--                                                <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:-rotate-90 md:-rotate-90 duration-300 ms-auto shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                                    <path d="m6 9 6 6 6-6"></path>--}}
{{--                                                </svg>--}}
{{--                                            </button>--}}

{{--                                            <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative md:w-48 hidden z-10 md:mt-2 md:!mx-[10px] md:top-0 md:end-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md dark:bg-neutral-800 dark:divide-neutral-700 before:hidden md:before:block before:absolute before:-end-5 before:top-0 before:h-full before:w-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown-sub">--}}
{{--                                                <div class="p-1 space-y-1">--}}
{{--                                                    <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="https://alixcan.net/blog/laravel" title="Laravel Kategorisi">--}}
{{--                                                        Laravel--}}
{{--                                                    </a>--}}
{{--                                                    <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="https://alixcan.net/blog/composer" title="Composer Kategorisi">--}}
{{--                                                        Composer--}}
{{--                                                    </a>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a class=" p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="https://alixcan.net/blog/links" title="Tüm Linkler">--}}
{{--                                            🔗 Tüm Linkler--}}
{{--                                        </a>--}}








{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End Dropdown -->--}}




























{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="my-2 md:my-0 md:mx-2">--}}
{{--                        <div class="w-full h-px md:w-px md:h-4 bg-gray-100 md:bg-gray-300 dark:bg-neutral-700"></div>--}}
{{--                    </div>--}}

{{--                    <!-- Button Group -->--}}
{{--                    <div class=" flex flex-wrap items-center gap-x-1.5">--}}
{{--                        <a class="bg-white dark:bg-neutral-800 py-[7px] px-2.5 inline-flex items-center font-medium text-sm rounded-lg border border-gray-200 text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="https://alixcan.net/cv" title="Hakkımda / CV">--}}
{{--                            Hakkımda--}}
{{--                        </a>--}}
{{--                        <a class="bg-blue-600 dark:bg-blue-500 py-2 px-2.5 inline-flex items-center font-medium text-sm rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:bg-blue-600" href="https://alixcan.net/iletisim" title="İletişim">--}}
{{--                            İletişim--}}
{{--                        </a>--}}
{{--                        <div class="hs-dropdown ml-1">--}}
{{--                            <button id="hs-dropdown-dark-mode" type="button" class="hs-dropdown-toggle hs-dark-mode group flex items-center text-gray-600 hover:text-blue-600 focus:outline-none focus:text-blue-600 font-medium dark:text-neutral-400 dark:hover:text-neutral-500 dark:focus:text-neutral-500" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">--}}
{{--                                <svg class="hs-dark-mode-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>--}}
{{--                                </svg>--}}
{{--                                <svg class="hs-dark-mode-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                    <circle cx="12" cy="12" r="4"></circle>--}}
{{--                                    <path d="M12 2v2"></path>--}}
{{--                                    <path d="M12 20v2"></path>--}}
{{--                                    <path d="m4.93 4.93 1.41 1.41"></path>--}}
{{--                                    <path d="m17.66 17.66 1.41 1.41"></path>--}}
{{--                                    <path d="M2 12h2"></path>--}}
{{--                                    <path d="M20 12h2"></path>--}}
{{--                                    <path d="m6.34 17.66-1.41 1.41"></path>--}}
{{--                                    <path d="m19.07 4.93-1.41 1.41"></path>--}}
{{--                                </svg>--}}
{{--                            </button>--}}

{{--                            <div id="selectThemeDropdown" class="hs-dropdown-menu hs-dropdown-open:opacity-100 mt-2 hidden z-10 transition-[margin,opacity] opacity-0 duration-300 mb-2 origin-bottom-left bg-white shadow-md rounded-lg p-1 space-y-0.5 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-dark-mode">--}}
{{--                                <button type="button" class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" data-hs-theme-click-value="default">--}}
{{--                                    Default (Light)--}}
{{--                                </button>--}}
{{--                                <button type="button" class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" data-hs-theme-click-value="dark">--}}
{{--                                    Dark--}}
{{--                                </button>--}}
{{--                                <button type="button" class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" data-hs-theme-click-value="auto">--}}
{{--                                    Auto (System)--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Button Group -->--}}

{{--                    <div class="my-2 md:my-0 md:mx-2">--}}
{{--                        <div class="w-full h-px md:w-px md:h-4 bg-gray-100 md:bg-gray-300 dark:bg-neutral-700"></div>--}}
{{--                    </div>--}}

{{--                    <div class="md:hidden flex flex-wrap items-center gap-x-1.5">--}}
{{--                        <div wire:snapshot="{&quot;data&quot;:{&quot;searchTerm&quot;:null},&quot;memo&quot;:{&quot;id&quot;:&quot;nOmmbxdGn4zX94kCuNVQ&quot;,&quot;name&quot;:&quot;frontend.site-search&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;91506f45f4ceb98fe41c32aae3dbad1550258591618d40a91b17463bc1b4454e&quot;}" wire:effects="[]" wire:id="nOmmbxdGn4zX94kCuNVQ" class="w-full lg:w-1/2" x-data="{searchTerm: window.Livewire.find('nOmmbxdGn4zX94kCuNVQ').entangle('searchTerm')}">--}}
{{--                            <!-- SearchBox -->--}}
{{--                            <div class="relative space-y-1">--}}
{{--                                <div class=" flex justify-center md:justify-end">--}}
{{--                                    <div class="relative max-w-sm w-full lg:w-3/5">--}}
{{--                                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">--}}
{{--                                            <svg class="shrink-0 size-4 text-indigo-400 dark:text-white/60" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                                <circle cx="11" cy="11" r="8"></circle>--}}
{{--                                                <path d="m21 21-4.3-4.3"></path>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                        <input wire:model.live.debounce.300ms="searchTerm" @keyup.escape="() => {--}}
{{--                        if(searchTerm &amp;&amp;  searchTerm.length > 0){--}}
{{--                            $wire.set('searchTerm', null);--}}
{{--                            $wire.set('searchTerm',null);--}}
{{--                         }else{--}}
{{--                            return null;--}}
{{--                         }--}}
{{--                    }" class="py-3 pr-8 ps-10 pe-4 block w-full border-indigo-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 placeholder:text-indigo-400" type="text" role="combobox" aria-expanded="false" placeholder="Arama Yapın .." value="">--}}





{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <!-- End SearchBox -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Button Group -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- End Collapse -->--}}
{{--    </nav>--}}
{{--</nav>--}}

<nav aria-label="Main navigation" id="main-navigation" class="flex flex-wrap items-center justify-between p-4 shadow-lg sm:shadow-xl md:shadow-none dark:bg-gray-800">
    <div class="flex flex-grow items-center flex-shrink-0 text-gray-700 dark:text-gray-200">
{{--        @include('hyde::components.navigation.navigation-brand')--}}
        <div>
            <a
                class="flex-none font-bold text-3xl focus:outline-none focus:opacity-80 bg-gradient-to-tl from-slate-400 hover:animate-pulse via-indigo-500 to-zinc-400 text-transparent bg-clip-text"
                href="{{ Routes::get('index') }}"
                title="AlixcaN.Net Anasayfa"
                aria-label="Brand"
            >AlixcaN.Net</a>
        </div>

        <div class="ml-auto">
            <x-hyde::navigation.theme-toggle-button/>
        </div>
    </div>

    <div class="block md:hidden">
        <button id="navigation-toggle-button" class="flex items-center px-3 py-1 hover:text-indigo-500 dark:text-gray-200"
                aria-label="Toggle navigation menu" @click="navigationOpen = ! navigationOpen">
            <svg id="open-main-navigation-menu-icon" title="Open Navigation Menu" class="dark:fill-gray-200"
                 xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 24 24"
                 x-show="! navigationOpen" style="display: block;"
            ><title>Open Menu</title>
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
            </svg>
            <svg id="close-main-navigation-menu-icon" title="Close Navigation Menu" class="dark:fill-gray-200"
                 xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 24 24"
                 x-show="navigationOpen" style="display: none;"
            ><title>Close Menu</title>
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
            </svg>
        </button>
    </div>

    <div id="main-navigation-links" class="w-full x-uncloak-md md:flex flex-grow md:flex-grow-0 md:items-center md:w-auto px-6 -mx-4 border-t mt-3 pt-3 md:border-none md:mt-0 md:py-0 border-gray-200 dark:border-gray-700"
         :class="navigationOpen ? '' : 'hidden'" x-cloak>
        <ul aria-label="Navigation links" class="md:flex-grow md:flex justify-end">
            @foreach ($navigation->items as $item)
                <li class="md:mx-2">
                    @if($item instanceof \Hyde\Framework\Features\Navigation\DropdownNavItem)
                        <x-hyde::navigation.dropdown :label="\Hyde\Hyde::makeTitle($item->label)" :items="$item->items"/>
                    @else
                        @include('hyde::components.navigation.navigation-link')
                    @endif
                </li>
            @endforeach
        </ul>
    </div>

    <div class="dropdown-container relative" x-data="{ open: false }">
        <button class="dropdown-button block my-2 md:my-0 md:inline-block py-1 text-gray-700 group hover:text-indigo-500 dark:text-gray-100"
                x-on:click="open = ! open" @click.outside="open = false" @keydown.escape.window="open = false">
            Araçlar
            <svg class="inline group-hover:text-indigo-500 transition-all dark:fill-white" x-bind:style="open ? { transform: 'rotate(180deg)' } : ''" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M7 10l5 5 5-5z"/></svg>
        </button>
        <div class="dropdown absolute shadow-lg bg-gray-100 rounded-xl dark:bg-gray-700 z-50 right-0" :class="open ? '' : 'hidden'" x-cloak="">
            <ul class="dropdown-items px-3 py-2 divide-y space-y-1">
                <li class="whitespace-nowrap">
                    <a @class([
                        'block my-2 md:my-0 md:inline-block py-1 text-gray-700 hover:text-indigo-500 dark:text-gray-100',
                        'border-l-4 border-indigo-500 md:border-none font-semibold -ml-6 pl-5 md:ml-0 md:pl-0 bg-gray-100 dark:bg-gray-800 md:bg-transparent dark:md:bg-transparent' => Hyde::currentRoute()->getRouteKey() == 'araclar/elektrik-tutari-hesaplama'
                    ])
                       href="{{ route('araclar/elektrik-tutari-hesaplama') }}" >
                        Elektrik Tutarı Hesaplama
                    </a>
                </li>

                <li class="whitespace-nowrap pt-1">
                    <a @class([
                        'block my-2 md:my-0 md:inline-block py-1 text-gray-700 hover:text-indigo-500 dark:text-gray-100',
                        'border-l-4 border-indigo-500 md:border-none font-semibold -ml-6 pl-5 md:ml-0 md:pl-0 bg-gray-100 dark:bg-gray-800 md:bg-transparent dark:md:bg-transparent' => Hyde::currentRoute()->getRouteKey() == 'araclar/utm-tag-generator'
                    ])
                       href="{{ route('araclar/utm-tag-generator') }}" >
                        UTM Tag Üretici
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
