@php /** @var \Hyde\Pages\MarkdownPost $post */ @endphp


<article class="mt-4 mb-8 flex gap-5 flex-col md:flex-row" itemscope itemtype="https://schema.org/Article">
{{--    <div class="justify-end text-center items-center hidden md:flex">--}}
{{--        <div class="w-3 -rotate-90 transform  font-mono font-medium text-[10px]/7 text-gray-950 dark:border-white/50 dark:text-white tracking-widest">--}}
{{--            {{ str_pad($loop->iteration, 2, 0, STR_PAD_LEFT) }}.--}}
{{--            {{ $post->category }}--}}
{{--        </div>--}}
{{--    </div>--}}

    <meta itemprop="identifier" content="{{ $post->identifier }}">

    @if(Hyde::hasSiteUrl())
        <meta itemprop="url" content="{{ Hyde::url('posts/' . $post->identifier) }}">
    @endif

    @if($post->data('thumb'))
    <figure>
        <img loading="lazy" class="max-w-[250px] mx-auto rounded-xl object-cover" src="{{ $post->data('thumb') }}" alt="{{ $post->data('title') ?? $post->title }}">
    </figure>
    @endif

    <div>
        <header>
            <a href="{{ $post->getRoute() }}" class="block w-fit">
                <h2 class="text-2xl font-bold text-gray-700 transition-colors duration-75 hover:text-gray-900 dark:text-gray-200 dark:hover:text-white">
                    {{ $post->data('title') ?? $post->title }}
                </h2>
            </a>
        </header>

        <footer>
            @isset($post->date)
                <span class="opacity-75">
{{--                <span itemprop="dateCreated datePublished">{{ $post->date->short }}</span>{{ isset($post->author) ? ',' : '' }}--}}
                    @php($tarih = \Illuminate\Support\Carbon::createFromDate($post->date->string))
                <span itemprop="dateCreated datePublished">{{ $tarih->locale('tr-TR')->translatedFormat(
            $tarih->year === now()->year
                ? 'd M, H:i l'
                : 'd M, Y, H:i l'
        ) }}</span>{{ isset($post->author) ? ' | ' : '' }}
            </span>
            @endisset
                @isset($post->author)
                    <span itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <span class="opacity-75">Yazar:</span>
                    <span itemprop="name">
                        {{ $post->author->name ?? $post->author->username }}
                    </span>
                </span>
                @endisset
                @isset($post->category)
                    <span itemprop="category" itemscope itemtype="https://schema.org/category">
                    <span class="opacity-75"></span>
                    <span itemprop="name">
                        {{ $post->category }}
                    </span>
                </span>
                @endisset
        </footer>

        @if($post->data('description') !== null)
            <section role="doc-abstract" aria-label="Excerpt">
                <p class="my-1 leading-relaxed">
                    {{ $post->data('description') }}
                </p>
            </section>
        @endisset

        <footer>
            <a href="{{ $post->getRoute() }}" class="font-medium text-indigo-500 hover:underline">
                Devamını Oku
            </a>
        </footer>
    </div>
</article>