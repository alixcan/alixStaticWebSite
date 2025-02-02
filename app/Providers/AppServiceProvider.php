<?php

namespace App\Providers;

use Hyde\Hyde;
use Hyde\Support\Paginator;
use Hyde\Pages\MarkdownPost;
use Hyde\Pages\InMemoryPage;
use Hyde\Foundation\HydeKernel;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //s
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // This registers a callback that runs after the kernel has booted
        Hyde::kernel()->booted(function (HydeKernel $hyde) {
            // First we create a paginator instance using the same settings as in our view
            $paginator = new Paginator(MarkdownPost::getLatestPosts(), 5, 1,
                'posts');

            // Then we loop through the total number of pages and create a new page for each one
            foreach (range(1, $paginator->totalPages()) as $page) {
                // Now we set the paginator to the current page number
                $paginator->setCurrentPage($page);

                // Now we create the paginated listing page. We set the identifier to match the route basename we set earlier.
                $listingPage = new InMemoryPage(identifier: "posts/page-$page",
                    matter: [
                        // And the paginator instance. We clone it so that we don't modify the original instance.
                        'paginator' => clone $paginator,

                        // Optionally, specify a custom page title.
                        'title'     => "Blog Posts - Page {$page}",
                        // Here we add the paginated collection
                        'posts'     => $paginator->getItemsForPage(),
                    ],
                    // You can also use a different view if you want to, for example a simpler page just for paginated posts.
                    // This uses the same view system as Laravel, so you can use any vendor view, or a view from the `resources/views` directory.
                    // Hyde also loads views from `_pages/`, so setting `posts` here will load our posts page we created earlier.
                    view: 'posts'
                );

                // This is optional, as the page does not necessarily need to be added to the page collection
                $hyde->pages()->addPage($listingPage);

                // This however is required, so that Hyde knows about the route as we run this after the kernel has booted
                $hyde->routes()->addRoute($listingPage->getRoute());
            }
        });
    }
}
