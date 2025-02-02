{{--@foreach(MarkdownPost::getLatestPosts() as $post)--}}
{{--    @include('hyde::components.article-excerpt')--}}
{{--@endforeach--}}

@php
    use Hyde\Pages\MarkdownPost;
     $paginator = $page->matter('paginator') ?? new \Hyde\Support\Paginator(
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
        <x-divider />
    @endif
@endforeach

@include('hyde::components.pagination-navigation')