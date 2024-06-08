<?php

namespace App\Http\Controllers;

use App\Http\Requests\Website\ContactRequest;
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

    public array $blog_articles = [
        [
            "slug" => "the-pomodoro-technique",
            "image" => "assets/images/blog/pomodoro-technique.jpg",
            "title" => "The Pomodoro Technique",
            "description" => 'The Pomodoro Technique is a simple and effective time management method,
            which was proposed by an Italian, Francesco Cirillo, in 1992. The reason why it is named "Pomodoro"
            is simply because the timer he used during university was shaped like a tomato. The principle of the
            Pomodoro Technique is to divide time into several "Pomodoro timers", with each focused on for 25 minutes,
            followed by a 5-minute break. Completing 4 Pomodoro timers allows you to take a longer break.',
            "date" => "04.06.2024",
            "previous" => null,
            "next" => "happier-life-with-mindfulness",
        ],
        [
            "slug" => "happier-life-with-mindfulness",
            "image" => "assets/images/blog/mindfulness.png",
            "title" => "How to Achieve a Happier Life with Mindfulness",
            "description" => 'Mindfulness simply means being in the present moment. It tells you to feel the flow
            of time by only paying attention to where you are, what you are doing, what is in your mind, and how
            you feel at this present moment. By channeling your concentration entirely towards your bodily
            sensations and inner experiences, it gets easier to calm yourself down and be closer to your
            inner selves.',
            "date" => "12.05.2024",
            "previous" => "the-pomodoro-technique",
            "next" => "everything-you-need-to-know-about-procrastination",
        ],
        [
            "slug" => "everything-you-need-to-know-about-procrastination",
            "image" => "assets/images/blog/procrastination.jpg",
            "title" => "Stop Being the Last-Minute Person: Everything You Need to Know about Procrastination",
            "description" => 'Usually, we think of procrastination as a bad habit, but this might not be the case.
            Research by Burka and Yuen, authors of Procrastination: Why You Do It, What to Do About It Now, have
            found that procrastination is not a bad habit, but a psychological syndrome caused by one’s fear. In
            other words, procrastination is not purely a problem of time management. Instead, it concerns people’s
            inner fears, expectations, doubts, and pressures.',
            "date" => "10.04.2024",
            "previous" => "happier-life-with-mindfulness",
            "next" => "self-discipline-or-self-torture",
        ],
        [
            "slug" => "self-discipline-or-self-torture",
            "image" => "assets/images/blog/self-discipline-or-self-torture.png",
            "title" => "Self-Discipline or Self-Torture?",
            "description" => 'Bombarded with numerous books and courses aimed at helping us develop self-discipline,
            together with numerous praises from people around us or on the internet, it seems quite obvious that
            self-discipline is such a highly-valued quality in today’s society.',
            "date" => "26.03.2024",
            "previous" => "everything-you-need-to-know-about-procrastination",
            "next" => "5-tips-for-staying-motivated-when-working-remotely",
        ],
        [
            "slug" => "5-tips-for-staying-motivated-when-working-remotely",
            "image" => "assets/images/blog/staying-motivated-working-remotely.jpg",
            "title" => "5 Tips For Staying Motivated When Working Remotely",
            "description" => "Keeping your motivation up when you're working in an office is relatively easy.
            You need to get your work done before you can return to the comfort and privacy of home, so dragging
            your feet will only cause you further inconvenience. And with your colleagues surrounding and observing
            you, you’ll at once be reminded that you’re part of a team and driven to show productivity.",
            "date" => "19.01.2024",
            "previous" => "self-discipline-or-self-torture",
            "next" => "minimalism",
        ],
        [
            "slug" => "minimalism",
            "image" => "assets/images/blog/minimalism.png",
            "title" => "Minimalism: How I Finally Found the True Beauty of Living with Less",
            "description" => "A couple of months ago, I saw a TV series called Tidying Up with Marie Kondo,
            where a Japanese lady Konmari visited families to help them tidy their homes. The tiding process
            normally starts from clothes, books to sentimental items. A rule she’s given is only keeping what’s
            necessary and discarding those that don’t spark joy anymore. The basic concept embedded in the
            Konmari method is similar to minimalism.",
            "date" => "30.12.2023",
            "previous" => "5-tips-for-staying-motivated-when-working-remotely",
            "next" => "working-from-home",
        ],
        [
            "slug" => "working-from-home",
            "image" => "assets/images/blog/work-from-home.png",
            "title" => "Working From Home? 5 Tips of Increasing Remote-Working Productivity",
            "description" => "An unexpected COVID-19 pandemic has led to a global rollout of working from home
            for a long time and some may be for now too, whether it’s out of personal choices or out of no choices.
            Although this may be no different for those who’ve already been used to remote work, like some
            freelancers. However, for those newcomers to this, like myself, it could be a complete disaster.
            Not just the change of workplace, it’s the change of everything: work schedules, collaborative methods,
            work environment, and more importantly, the state of mind. Staying at home naturally makes me feel like
            doing nothing but binge-watching Netflix.",
            "date" => "23.07.2021",
            "previous" => "minimalism",
            "next" => null,
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
            "slug" => $slug,
            "title" => $title,
            "page_title" => $page_title,
            "help_center_articles" => $this->help_center_articles,
        ]);
    }
    public function about(): View
    {
        return view("website.about");
    }
    public function blog($slug = null): View
    {
        if ($slug) {
            if ($slug == "self-discipline-or-self-torture") {
                $title = "Blog - Self-Discipline Or Self-Torture? | Task List";
            } else {
                $title = Str::of($slug)->replace('-', ' ')->title();
            }
            $page_title = "Blog - " . $title . " | Task List";
        } else {
            $title = "";
            $page_title = "Blog | Task List";
        }
        return view("website.blog", [
            "slug" => $slug,
            "title" => $title,
            "page_title" => $page_title,
            "blog_articles" => $this->blog_articles,
        ]);
    }
    public function contact(): View
    {
        return view("website.contact");
    }
    public function contact_us(ContactRequest $request): RedirectResponse
    {
        return redirect()->route("contact")->with("form_successful", "Form was successfully submitted.");
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
