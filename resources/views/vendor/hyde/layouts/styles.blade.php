{{-- Prevent Alpine.js flashes --}}
<style>
    [x-cloak] {display: none !important}
    html {scroll-behavior: smooth;}
</style>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
{{--    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />--}}
<link
    href="https://fonts.bunny.net/css?family=figtree:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|fira-mono:400,500,700|jetbrains-mono:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|nunito:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet"
/>


{{-- The compiled Tailwind/App styles --}}
@if(config('hyde.load_app_styles_from_cdn', false))
    <link rel="stylesheet" href="{{ Asset::cdnLink('app.css') }}">
@elseif(Asset::hasMediaFile('app.css'))
    <link rel="stylesheet" href="{{ Asset::mediaLink('app.css') }}">
@endif

{{-- Dynamic TailwindCSS Play CDN --}}
@if(config('hyde.use_play_cdn', false))
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
    <script>tailwind.config = { {!! Asset::injectTailwindConfig() !!} }</script>
    <script>console.warn('The HydePHP TailwindCSS Play CDN is enabled. This is for development purposes only and should not be used in production.', 'See https://hydephp.com/docs/1.x/managing-assets');</script>
@endif

{{-- Add any extra styles to include after the others --}}
@stack('styles')