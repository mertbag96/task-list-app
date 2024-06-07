<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public array $help_center_articles = [
        [
            "slug" => "beginner-guide",
            "icon" => "assets/images/help-center/beginner-guide.png",
            "image" => "assets/images/help-center/article-beginner-guide.jpg",
            "paragraphs" => [
                "Praesent sed tempor magna, non pharetra nisi. Morbi malesuada elit ut tellus mattis blandit.
                Nam lectus velit, rutrum non rutrum vitae, pretium a elit. Nulla cursus enim vitae enim ullamcorper
                malesuada. Nulla non neque elit. Mauris lacinia felis quis ipsum convallis aliquam. Phasellus ac
                felis ultrices, bibendum quam quis, consequat justo. Mauris ex sem, sagittis nec suscipit quis,
                consequat sed mi. Praesent interdum magna tortor, vitae posuere sem tempus non. Pellentesque velit
                neque, interdum vitae nibh a, condimentum gravida erat. Integer condimentum massa non odio dictum
                efficitur. Proin vel efficitur arcu.",
                "Phasellus volutpat, velit quis ullamcorper laoreet, dolor nibh suscipit augue, sit amet scelerisque
                nibh purus quis nunc. Nunc vehicula lectus eu velit feugiat imperdiet quis in magna.",
                "Quisque condimentum porttitor aliquam. Pellentesque nibh lorem, dapibus quis mauris et, ornare
                imperdiet augue. Nullam ultricies mauris ex, sit amet molestie odio faucibus id. Vivamus ultricies,
                nibh et pretium faucibus, dolor enim posuere velit, eu facilisis nisi risus ac eros. Curabitur
                ultrices scelerisque massa, quis cursus tortor sagittis euismod. Mauris at mauris semper, cursus
                lorem ac, fringilla tellus. Maecenas molestie quis nisl sed dignissim. In ut efficitur libero, eu
                imperdiet ligula. Sed in faucibus mi. Aenean venenatis sem eu rhoncus sollicitudin. Phasellus id
                lobortis dolor.",
            ],
        ],
        [
            "slug" => "feature-guide",
            "icon" => "assets/images/help-center/feature-guide.png",
            "image" => "assets/images/help-center/article-feature-guide.jpg",
            "paragraphs" => [
                "Curabitur malesuada lacinia tellus, commodo rutrum enim auctor in. Phasellus pharetra auctor
                elementum. Integer vel mauris sollicitudin, luctus tortor id, rhoncus ipsum. Integer vitae
                pulvinar ipsum. Aenean aliquam dolor non purus malesuada rutrum.",
                "Nunc tempor tellus id sem venenatis dignissim. Morbi tellus purus, tristique non mauris quis,
                sagittis blandit ex. Sed convallis nisi malesuada nisl elementum, vitae iaculis mauris auctor.
                Phasellus sodales dignissim neque, at pharetra mauris. Curabitur vitae velit molestie, vehicula
                libero eget, tempus nisi. Donec at sem sed magna pretium venenatis eu non turpis. Phasellus
                vulputate euismod neque, ut volutpat nulla varius in. Nullam ullamcorper tincidunt facilisis.
                Aliquam quis lacinia leo, in tempor neque. Donec porttitor justo enim, sed lobortis mauris congue
                ullamcorper. Duis pulvinar, dolor eget iaculis faucibus, nisi dolor accumsan felis, eget viverra
                nunc sem a augue.",
                "Duis scelerisque pellentesque mi, quis varius ex imperdiet non. Aliquam sagittis ex facilisis laoreet
                egestas. Phasellus a purus mollis, mollis libero volutpat, maximus ante. Vivamus aliquet quam sit
                amet euismod mattis. Praesent vitae diam nunc. Duis porttitor, mi vel vehicula tincidunt, ex ipsum
                laoreet dolor, nec mollis odio nisl varius felis. Interdum et malesuada fames ac ante ipsum primis
                in faucibus. Donec fringilla malesuada eros vel sodales.",
            ],
        ],
        [
            "slug" => "faq",
            "icon" => "assets/images/help-center/faq.png",
            "image" => "assets/images/help-center/article-faq.jpg",
            "paragraphs" => [
                "Integer vitae pulvinar ipsum. Aenean aliquam dolor non purus malesuada rutrum. Vivamus aliquet
                quam sit amet euismod mattis. Duis pulvinar, dolor eget iaculis faucibus, nisi dolor accumsan felis,
                eget viverra nunc sem a augue.",
            ]
        ],
        [
            "slug" => "blog-articles",
            "icon" => "assets/images/help-center/blog-articles.png",
            "image" => null,
            "paragraphs" => null,
        ],
    ];

    public function home(): View
    {
        return view("website.home");
    }
    public function features(): View
    {
        return view("website.features");
    }
    public function help_center($slug = null): View
    {
        if ($slug) {
            if ($slug == "faq") {
                $title = Str::of($slug)->replace('-', ' ')->title()->upper();
            } else {
                $title = Str::of($slug)->replace('-', ' ')->title();
            }
            $page_title = "Help Center - " . $title . " | Task List";
        } else {
            $title = null;
            $page_title = "Help Center | Task List";
        }
        return view("website.help-center", [
            "help_center_articles" => $this->help_center_articles,
            "slug" => $slug,
            "title" => $title,
            "page_title" => $page_title,
        ]);
    }
    public function about(): View
    {
        return view("website.about");
    }
    public function blog($article = null): View
    {
        if ($article == "example-article") {
            $alt = "Example Article";
            $title = "Example Article";
            $picture = "assets/images/blog/pomodoro-technique.jpg";
        } else {
            $alt = null;
            $title = null;
            $picture = null;
        }
        return view("website.blog", [
            "article" => $article,
            "title" => $title,
            "picture" => $picture,
            "alt" => $alt
        ]);
    }
    public function contact(): View
    {
        return view("website.contact");
    }
    public function contact_us(Request $request): RedirectResponse
    {
        return redirect()->route("contact")->with("successful", "Form was successfully submitted.");
    }
    public function terms(): View
    {
        return view("website.terms");
    }
    public function privacy(): View
    {
        return view("website.privacy");
    }
    public function security(): View
    {
        return view("website.security");
    }
}
