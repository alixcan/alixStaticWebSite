@php $title = 'Son Yazılar'; @endphp
@extends('hyde::layouts.app')
@section('content')

    <div class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://alixcan.net/assets/bg/polygon-light-bg-element.svg')] dark:before:bg-[url('https://alixcan.net/assets/bg/polygon-dark-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:size-full before:-z-[1] before:transform before:-translate-x-1/2">
        <div class="mx-auto px-4 pt-24 pb-10 max-w-[85rem] sm:px-6 lg:px-8">

            <!-- Slider -->
            <div class="mx-auto px-4 max-w-[85rem] sm:px-6 lg:px-8">
                <div data-hs-carousel="{
    &quot;loadingClasses&quot;: &quot;opacity-0&quot;,
    &quot;isAutoPlay&quot;: true
  }" class="relative init">
                    <div class="relative w-full overflow-hidden rounded-lg hs-carousel min-h-96">
                        <div class="absolute top-0 bottom-0 flex flex-nowrap transition-transform duration-700 hs-carousel-body start-0" style="width: 1232px; transform: translate(0px, 0px);">
                            <div class="hs-carousel-slide active" style="width: 1232px;">
                                <!-- Announcement Banner -->
                                <div class="flex justify-center">
                                    <a class="inline-flex items-center gap-x-2 rounded-full border border-gray-200 bg-white p-1 text-sm text-gray-800 transition ps-3 hover:border-gray-300 focus:border-gray-300 focus:outline-none dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:border-neutral-600 dark:focus:border-neutral-600"
                                       href="{{ route('hakkimda') }}" title="Hakkımda / CV">
                                        Merhaba ben Alican (AlixcaN)
                                        <span class="inline-flex items-center justify-center gap-x-2 rounded-full bg-gray-200 text-sm font-semibold text-gray-600 py-1.5 px-2.5 dark:bg-neutral-700 dark:text-neutral-400">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg>
                        </span>
                                    </a>
                                </div>
                                <!-- End Announcement Banner -->

                                <!-- Title -->
                                <div class="mx-auto mt-5 max-w-2xl text-center">
                                    <h1 class="block text-4xl font-bold text-gray-800 dark:text-neutral-200 md:text-5xl lg:text-5xl">
                                        Full-Stack
                                        <span class="bg-gradient-to-tl from-blue-600 to-violet-600 bg-clip-text text-transparent">Web Developer</span>
                                    </h1>
                                </div>
                                <!-- End Title -->

                                <div class="mx-auto mt-5 max-w-3xl text-center">
                                    <p class="text-lg text-gray-600 dark:text-neutral-400">
                                        Merhaba, her şirketin / işin kendine göre bir akışı ve devamlılığı vardır. İşinize özel tüm yazılım çözümlerini geliştirebilir ve sürdürülebilir çözümler üretebilirim.
                                    </p>
                                </div>

                                <!-- Buttons -->
{{--                                <div class="mt-8 flex justify-center gap-3">--}}
{{--                                    <a class="inline-flex items-center justify-center gap-x-3 rounded-md border border-transparent bg-gradient-to-tl from-blue-600 to-violet-600 px-4 py-3 text-center text-sm font-medium text-white hover:from-violet-600 hover:to-blue-600 focus:from-violet-600 focus:to-blue-600 focus:outline-none" href="https://alixcan.net/iletisim" title="İletişim Sayfası">--}}
{{--                                        İletişim / Randevu--}}
{{--                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                            <path d="m9 18 6-6-6-6"></path>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                    <a title="Full Stack Developer" href="https://alixcan.net/full-stack-developer" class="relative inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white p-2 font-mono text-sm text-gray-800 shadow-sm group ps-3 hover:bg-gray-50 focus:bg-gray-50 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">--}}
{{--                                        Detaylar--}}
{{--                                        <span class="flex items-center justify-center rounded-md bg-gray-200 size-7 dark:bg-neutral-700 dark:text-neutral-400">--}}
{{--                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg>--}}

{{--                        </span>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
                            </div>

                        </div>
                    </div>


                </div>
            </div>
            <!-- End Slider -->


            <!-- End Buttons -->


        </div>
    </div>


    <x-divider/>

    <main id="content" class="mx-auto max-w-7xl px-8 py-12">
        <header class="lg:mb-12 xl:mb-16">
            <h1 class=" mb-8 text-left text-3xl font-extrabold leading-10 tracking-tight text-gray-700 dark:text-gray-200 sm:leading-none md:mb-12 md:text-center md:text-4xl lg:text-5xl">
                Son Yazılar
            </h1>
        </header>

        <div id="post-feed" class="mx-auto max-w-5xl">
            @use(Hyde\Pages\MarkdownPost)

            @php
                $paginator = new \Hyde\Support\Paginator(
                    // The items to paginate
                    items: MarkdownPost::getLatestPosts(),
                    // How many items to show on each page
                    pageSize: 5,
                    // The current page index
                    currentPageNumber: 1,
                    // Links will be 'posts/page-1.html' instead of 'page-1.html'
                    paginationRouteBasename: 'posts'
                );
            @endphp

            @foreach($paginator->getItemsForPage() as $post)
                @include('hyde::components.article-excerpt')
                @if(!$loop->last)
                    <x-divider/>
                @endif
            @endforeach
        </div>
    </main>

@endsection
