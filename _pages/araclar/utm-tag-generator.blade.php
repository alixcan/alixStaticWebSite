@php($title = 'Elektrik Tutarı Hesaplama')
@extends('hyde::layouts.app')
@push('scripts')
    <script type="text/javascript">
        function isValidHttpUrl(string) {
            let url;
            try {
                url = new URL(string);
            } catch (_) {
                return false;
            }
            return url.protocol === "http:" || url.protocol === "https:";
        }

        document.addEventListener("alpine:init", () => {
            Alpine.data("utmGenerator", () => ({
                advanced: false,
                url: null,
                source: null,
                medium: null,
                campaign: null,
                content: null,
                term: null,
                get generated() {
                    if (!this.url)
                        return "";

                    if (!isValidHttpUrl(this.url))
                        return;

                    const e = new URL(this.url),
                        t = new URLSearchParams(e.search);

                    return this.source && t.set("utm_source", this.source),
                    this.medium && t.set("utm_medium", this.medium),
                    this.campaign && t.set("utm_campaign", this.campaign),
                    this.content && t.set("utm_content", this.content),
                    this.term && t.set("utm_term", this.term),
                        e.search = t.toString(),
                        e.toString();
                }
            }));
        });
    </script>
@endpush

@section('content')

    <div class="my-10 bg-white dark:bg-neutral-800 rounded-xl border dark:border-neutral-700 shadow max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="w-full grid grid-cols-3 gap-5" x-data="utmGenerator()">

            <div class="col-span-3">
                <h2 class="text-5xl font-semibold text-gray-800 dark:text-gray-300">UTM Etiket Oluşturucu </h2>
                <p class="mt-2 ml-2 text-md text-gray-600">UTM (Urchin İzleme Modülü) etiketleri, web sitenize gelen trafiğin kaynağı hakkında daha spesifik bilgi sağlamak için URL'lere eklenir.</p>
                <p class="text-sm ml-2 text-gray-500">Aşağıdaki formu kullanarak UTM etiketleri içeren bir URL oluşturabilirsiniz.</p>
            </div>

            <div class="max-w-sma col-span-3">
                <label for="siteAdresiniz" class="block text-sm font-medium mb-2 dark:text-white">Site Adresiniz
                    <span class="inline-flex items-center gap-x-1.5 py-0.5 px-3 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-800/30 dark:text-blue-500">Zorunlu</span>
                </label>
                <input type="url" x-model="url" id="siteAdresiniz" placeholder="https://alixcan.net" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <span class="text-neutral-500 text-xs">
				Sitenizin tam adresi
				</span>
            </div>
            <div class="max-w-sma">
                <label for="source" class="block text-sm font-medium mb-2 dark:text-white">Source
                    <span class="inline-flex items-center gap-x-1.5 py-0.5 px-3 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-800/30 dark:text-blue-500">Zorunlu</span>
                </label>
                <input type="text" x-model="source" id="source" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <span class="text-neutral-500 text-xs">
				Genellikle trafiği gönderen siteyi belirler, örneğin: <code>twitter</code>, <code>facebook</code>, veya <code>website</code>.
				</span>
            </div>
            <div class="max-w-sma">
                <label for="medium" class="block text-sm font-medium mb-2 dark:text-white">Medium
                    <span class="inline-flex items-center gap-x-1.5 py-0.5 px-3 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-800/30 dark:text-blue-500">Zorunlu</span>
                </label>
                <input type="text" x-model="medium" id="medium" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <span class="text-neutral-500 text-xs">
				Trafiğin gönderildiği yöntemi belirtir, örneğin: <code>cpc</code>, <code>newsletter</code>, veya <code>banner</code>.
				</span>
            </div>
            <div class="max-w-sma">
                <label for="campaign" class="block text-sm font-medium mb-2 dark:text-white">Campaign
                    <span class="inline-flex items-center gap-x-1.5 py-0.5 px-3 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-800/30 dark:text-blue-500">Zorunlu</span>
                </label>
                <input type="text" x-model="campaign" id="campaign" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <span class="text-neutral-500 text-xs">
				Kampanyanın adını belirtir, örneğin: <code>promoston</code> veya <code>yilbasi</code>.
				</span>
            </div>
            <div x-cloak x-collapse.duration.500ms x-show="advanced" class="max-w-sma">
                <label for="content" class="block text-sm font-medium mb-2 dark:text-white">Content</label>
                <input type="text" x-model="content" id="content" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <span class="text-neutral-500 text-xs">
				Aynı sayfadaki benzer içerikleri veya aynı bağlantıları ayırt etmek için kullanılır, örneğin: <code>simdi-satinal</code> veya <code>simdi-basla</code>.
				</span>
            </div>
            <div x-cloak x-collapse.duration.500ms x-show="advanced" class="max-w-sma">
                <label for="term" class="block text-sm font-medium mb-2 dark:text-white">Term</label>
                <input type="text" x-model="term" id="term" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <span class="text-neutral-500 text-xs">
				Reklamınız için anahtar kelimeleri belirlemek amacıyla kullanılır, örneğin: <code>kosu+ayakkabilari</code> veya <code>kosu%20ayakkabileri</code>.
				</span>
            </div>

            <div class="col-span-3 text-xs text-indigo-600 text-right">
                <button type="button" @click="advanced = !advanced">Gelişmis Seçenekler 🤣</button>
            </div>


            <div class="col-span-3">
                <label for="result" class="block text-sm font-medium mb-2 dark:text-white">Oluşturulan Adresiniz</label>
                <div class="flex rounded-lg shadow-sm">
                    <input x-bind:value="generated" readonly disabled type="text" id="result" name="result" class="py-3 px-4 block w-full border border-gray-200 shadow-sm rounded-s-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    <button
                        x-on:click="$clipboard(generated).then(() => { $el.innerText = 'Copied!'; setTimeout(() => $el.innerText = 'Copy', 2000) })"
                        type="button" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-e-md border border-transparent bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700 disabled:opacity-50 disabled:pointer-events-none">
                        Kopyala
                    </button>
                </div>
            </div>

            <div class="col-span-3 pt-10 space-y-2 text-xs dark:text-gray-400">
                <span class="font-semibold">Diğer Kaynaklar</span>
                <ul class="list-disc list-inside">
                    <li>
                        <a href="https://utmbuilder.net/" rel="nofollow noindex">https://utmbuilder.net/</a>
                    </li>
                    <li>
                        <a href="https://ga-dev-tools.google/campaign-url-builder/" rel="nofollow noindex">https://ga-dev-tools.google/campaign-url-builder/</a>
                    </li>
                    <li>
                        <a href="https://utmbuilder.com/" rel="nofollow noindex">https://utmbuilder.com/</a>
                    </li>
                    <li>
                        <a href="https://usefathom.com/utm-builder" rel="nofollow noindex">https://usefathom.com/utm-builder</a>
                    </li>
                    <li>
                        <a href="https://ryangjchandler.co.uk/tools/utm" rel="nofollow noindex">https://ryangjchandler.co.uk/tools/utm</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>


@endsection
