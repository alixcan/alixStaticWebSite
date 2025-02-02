@if(config('hyde.footer') !== false)
    <footer aria-label="Page footer" class="flex py-4 px-6 w-full text-center mt-auto bg-slate-100 dark:bg-gray-800">
        <div class="prose dark:prose-invert text-center mx-auto w-full flex justify-between">
{{--            {!! \Hyde\Support\Includes::markdown('footer', config('hyde.footer', 'Site proudly built with [HydePHP](https://github.com/hydephp/hyde) 🎩')) !!}--}}
            <div>
                Bu Site <a href="https://github.com/hydephp/hyde" rel="nofollow">HydePHP 🎩</a> ile yapıldı
            </div>
            <div class="md:text-end space-x-2">
                <a title="Twitter @AlixcaNN" class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" rel="nofollow" href="https://twitter.com/AlixcaNN">
                    <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.1881 10.1624L22.7504 0H20.7214L13.2868 8.82385L7.34878 0H0.5L9.47944 13.3432L0.5 24H2.5291L10.3802 14.6817L16.6512 24H23.5L14.1881 10.1624ZM11.409 13.4608L3.26021 1.55962H6.37679L20.7224 22.5113H17.6058L11.409 13.4613V13.4608Z" fill="currentColor"></path>
                    </svg>
                </a>
                <a title="Github @AlixcaN" class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" rel="nofollow" href="https://github.com/alixcan">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                    </svg>
                </a>
                <a title="Mastodon phpc @AlixcaN" class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" rel="nofollow" href="https://phpc.social/@alixcan">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M11.19 12.195c2.016-.24 3.77-1.475 3.99-2.603.348-1.778.32-4.339.32-4.339 0-3.47-2.286-4.488-2.286-4.488C12.062.238 10.083.017 8.027 0h-.05C5.92.017 3.942.238 2.79.765c0 0-2.285 1.017-2.285 4.488l-.002.662c-.004.64-.007 1.35.011 2.091.083 3.394.626 6.74 3.78 7.57 1.454.383 2.703.463 3.709.408 1.823-.1 2.847-.647 2.847-.647l-.06-1.317s-1.303.41-2.767.36c-1.45-.05-2.98-.156-3.215-1.928a4 4 0 0 1-.033-.496s1.424.346 3.228.428c1.103.05 2.137-.064 3.188-.189zm1.613-2.47H11.13v-4.08c0-.859-.364-1.295-1.091-1.295-.804 0-1.207.517-1.207 1.541v2.233H7.168V5.89c0-1.024-.403-1.541-1.207-1.541-.727 0-1.091.436-1.091 1.296v4.079H3.197V5.522q0-1.288.66-2.046c.456-.505 1.052-.764 1.793-.764.856 0 1.504.328 1.933.983L8 4.39l.417-.695c.429-.655 1.077-.983 1.934-.983.74 0 1.336.259 1.791.764q.662.757.661 2.046z"></path>
                    </svg>
                </a>
                <a title="pinkary @AlixcaN" class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" rel="nofollow" href="https://pinkary.com/@alixcan">
                    <svg class="shrink-0 size-3.5 grayscale" viewBox="0 0 1024 1024" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="512" cy="512" r="512" fill="#EC4899"></circle>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M375.022 782.938H385.585L388.504 772.787C398.2 739.062 408.734 701.557 420.107 660.277L420.117 660.242C430.551 621.984 441.163 583.726 451.952 545.468C459.439 545.219 468.939 544.603 480.341 543.653C496.01 542.347 513.484 539.967 532.73 536.546C552.862 533.044 572.949 527.799 592.987 520.829C613.395 513.731 632.329 504.389 649.748 492.785C668.139 480.818 683.061 465.944 694.293 448.16C706.045 429.552 711.61 407.7 711.61 383.228C711.61 360.057 705.43 339.287 692.671 321.539C680.899 304.178 665.246 290.011 646.011 278.988C627.549 267.755 607.365 259.479 585.534 254.119C563.876 248.384 542.511 245.479 521.468 245.479C501.989 245.479 482.531 247.471 463.109 251.444C444.074 255.338 426.237 260.117 409.618 265.802L409.563 265.821L409.509 265.84C393.722 271.387 379.742 276.759 367.603 281.962L359.101 285.605V294.855C359.101 302.344 362.725 308.746 366.475 313.567C370.135 318.273 374.328 322.466 379.035 326.127L379.314 326.344L379.603 326.546C382.092 328.289 384.664 329.879 387.238 331.08C389.608 332.186 393.095 333.5 397.115 333.5C401.138 333.5 405.052 332.434 408.337 331.251C411.797 330.005 415.532 328.268 419.459 326.189L419.737 326.042L420.008 325.883C426.54 322.04 435.277 317.652 446.368 312.723L446.563 312.636L446.756 312.544C449.831 311.063 453.133 309.652 456.668 308.316C445.353 334.018 434.841 358.926 425.133 383.039L425.104 383.112L425.075 383.185C412.412 415.687 400.171 448.189 388.351 480.694L388.333 480.742L388.316 480.791C376.911 512.894 365.511 546.462 354.116 581.491C342.751 616.005 330.546 653.252 317.501 693.23L317.464 693.343L317.429 693.456C315.782 698.808 313.922 704.595 311.847 710.82L311.712 711.227L311.601 711.642C309.662 718.912 308.603 726.031 308.603 732.931C308.603 749.453 317.664 762.126 331.69 770.758L331.79 770.819L331.891 770.879C345.313 778.833 359.763 782.938 375.022 782.938ZM615.889 423.985C605.825 438.893 592.099 451.594 574.375 462.004C556.626 472.253 536.548 480.43 514.052 486.456C498.109 490.726 482.19 493.892 466.291 495.961C477.084 459.602 488.321 424.611 500.001 390.987L500.016 390.944C512.485 354.67 525.4 323.063 538.731 296.052C553.277 297.171 567.056 300.298 580.123 305.398L580.176 305.418L580.229 305.438C595.921 311.416 608.16 319.997 617.399 331.012L617.483 331.112L617.569 331.211C626.251 341.179 631.163 354.709 631.163 373.128C631.163 392.812 626.014 409.517 616.024 423.788L615.955 423.886L615.889 423.985Z" fill="#0F172A"></path>
                        <path d="M560.932 743.369C560.932 766.565 542.128 785.369 518.932 785.369C495.736 785.369 476.932 766.565 476.932 743.369C476.932 720.173 495.736 701.369 518.932 701.369C542.128 701.369 560.932 720.173 560.932 743.369Z" fill="#FDF2F8"></path>
                    </svg>
                </a>

            </div>
        </div>
        <a href="#app" aria-label="Go to top of page" class="float-right">
            <button title="Scroll to top">
                <svg width="1.5rem" height="1.5rem" role="presentation" class="fill-current text-gray-500 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z" />
                </svg>
            </button>
        </a>
    </footer>
@endif