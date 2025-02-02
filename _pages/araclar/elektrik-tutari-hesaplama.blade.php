@php($title = 'Elektrik Tutarı Hesaplama')
@extends('hyde::layouts.app')
@push('scripts')
    <script type="text/javascript">
//AlixcaN
        document.addEventListener("alpine:init", () => {
            Alpine.data("electricityCalculator", () => ({
                watt: 500,
                unit_price: 1.86,
                time: 1,
                get otherOptions() {
                    return ((this.watt / 1000) * this.unit_price).toFixed(2);
                },
                get generated() {
                    return (((this.watt / 1000) * this.time) * this.unit_price).toFixed(2) + "₺";
                }
            }));
        });
    </script>
@endpush
@section('content')


    <div class="my-10 bg-white dark:bg-neutral-800 rounded-xl border dark:border-neutral-700 shadow max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="w-full grid grid-cols-3 gap-5" x-data="electricityCalculator()">

            <div class="col-span-3">
                <h2 class="text-5xl font-semibold text-gray-800 dark:text-gray-300">Elektrik Tutarı Hesaplama </h2>
                <p class="mt-2 ml-2 text-md text-gray-600">
                    Çok farklı tarifeler olduğu için faturanızdan birim fiyat'ı kontrol ediniz. 1.86 Tek zamanlı mesken için geçerlidir.
                </p>
                <p class="text-sm ml-2 text-gray-500">
                    Bu araç kesinlikle tahmini sonuçlar üretmektedir. Vergiler ve diğer yansımalar hesaba katılmamış olabilir.
                </p>
            </div>

            <div class="max-w-sma ">
                <label for="watt" class="block text-sm font-medium mb-2 dark:text-white">Watt
                </label>
                <input type="number" x-model="watt" id="watt" placeholder="150" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            </div>
            <div class="max-w-sma">
                <label for="time" class="block text-sm font-medium mb-2 dark:text-white">Çalışma Süresi (Saat)</label>
                <input type="number" x-model="time" id="time" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            </div>
            <div class="max-w-sma">
                <label for="unit_price" class="block text-sm font-medium mb-2 dark:text-white">Birim Fiyatı</label>
                <input type="text" x-model="unit_price" id="unit_price" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            </div>


            <div class="col-span-3 grid md:grid-cols-2 gap-5">
                <div class="flex flex-col space-y-5 flex-grow bg-gray-50 rounded-2xl border border-gray-500 items-center justify-center text-center">

                    <p class="text-md">
                        <span class="font-semibold">Watt -> kWh :</span>
                        <span x-text="watt"></span>/1000 =
                        <span x-text="watt/1000"></span>kWh
                    </p>
                    <p>
                        <span class="font-semibold">kWh * Tüketim Süresi :</span>
                        <span x-text="watt/1000"></span>*<span x-text="time"></span> =
                        <span x-text="(watt/1000)*time"></span>
                    </p>
                    <p>
                        <span class="font-semibold">Tüketim Miktarı * Birim Fiyat:</span>
                        <span x-text="(watt/1000)*time"></span> *
                        <span x-text="unit_price"></span> =
                    </p>
                    <p class=" text-4xl text-green-600 ">
                        Tutar:
                        <span x-text="generated"></span>
                    </p>

                </div>
                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-2 sm:px-6">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Tutarlar</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Gün / Hafta / Ay / Yıllık Tüketim Tutarı</p>
                    </div>
                    <div class="border-t border border-gray-200">
                        <dl>
                            <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">1 Gün</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                    <span x-text="(otherOptions*24).toFixed(2)"></span>₺
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">1 Hafta</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                    <span x-text="(otherOptions*24*7).toFixed(2)"></span>₺
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">1 Ay</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                    <span x-text="(otherOptions*24*30).toFixed(2)"></span>₺
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">1 Yıl</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                    <span x-text="(otherOptions*24*360).toFixed(2)"></span>₺
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>

            </div>

            <div class="col-span-3 pt-10 space-y-2 text-xs dark:text-gray-400">
                <span class="font-semibold">Diğer Kaynaklar</span>
                <ul class="list-disc list-inside">
                    <li>
                        <a href="https://aydinlatma.org/elektrik-faturasi-hesaplama.html" rel="nofollow noindex">https://aydinlatma.org/elektrik-faturasi-hesaplama.html</a>
                    </li>
                    <li>
                        <a href="https://www.calculator.net/electricity-calculator.html" rel="nofollow noindex">https://www.calculator.net/electricity-calculator.html</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>


@endsection
