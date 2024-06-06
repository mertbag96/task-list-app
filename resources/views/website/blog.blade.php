@extends("website.app")

@section("title", "Blog | Task List")

@section("content")

    <section class="blog container">

        @if(is_null($article))

            <div class="blog-latest">

                <h1 class="title">Latest Post</h1>

                <a href="{{ route("blog", "example-article") }}" class="latest-post">

                    <img src="{{ asset("assets/images/blog/pomodoro-technique.jpg") }}" alt="Pomodoro Technique">

                    <div class="article">

                        <h1 class="article-title">The Pomodoro Technique</h1>

                        <p class="article-detail">
                            The Pomodoro Technique is a simple and effective time management method, which was proposed
                            by an Italian, Francesco Cirillo, in 1992. The reason why it is named "Pomodoro" is simply
                            because the timer he used during university was shaped like a tomato. The principle of the
                            Pomodoro Technique is to divide time into several "Pomodoro timers", with each focused on
                            for 25 minutes, followed by a 5-minute break. Completing 4 Pomodoro timers allows you to
                            take a longer break.
                        </p>

                    </div>

                </a>

            </div>

            <div class="posts">

                <h1 class="title">Recent Posts</h1>

                <a href="{{ route("blog", "example-article") }}" class="post">

                    <img src="{{ asset("assets/images/blog/mindfulness.png") }}" alt="Mindfulness">

                    <div class="post-detail">

                        <h1 class="title">
                            How to Achieve a Happier Life with Mindfulness
                        </h1>

                        <p class="detail">
                            Mindfulness simply means being in the present moment. It tells you to feel the flow of
                            time by only paying attention to where you are, what you are doing, what is in your mind,
                            and how you feel at this present moment. By channeling your concentration entirely towards
                            your bodily sensations and inner experiences, it gets easier to calm yourself down and be
                            closer to your inner selves.
                        </p>

                    </div>

                </a>

                <a href="{{ route("blog", "example-article") }}" class="post">

                    <img src="{{ asset("assets/images/blog/procrastination.jpg") }}" alt="Procrastination">

                    <div class="post-detail">

                        <h1 class="title">
                            Stop Being the Last-Minute Person: Everything You Need to Know about Procrastination
                        </h1>

                        <p class="detail">
                            Usually, we think of procrastination as a bad habit, but this might not be the case.
                            Research by Burka and Yuen, authors of Procrastination: Why You Do It, What to Do About It
                            Now, have found that procrastination is not a bad habit, but a psychological syndrome
                            caused by one’s fear. In other words, procrastination is not purely a problem of time
                            management. Instead, it concerns people’s inner fears, expectations, doubts, and pressures.
                        </p>

                    </div>

                </a>

                <a href="{{ route("blog", "example-article") }}" class="post">

                    <img src="{{ asset("assets/images/blog/self-discipline-or-self-torture.png") }}" alt="Self Discipline Or Self Torture">

                    <div class="post-detail">

                        <h1 class="title">
                            Self-Discipline or Self-Torture?
                        </h1>

                        <p class="detail">
                            Bombarded with numerous books and courses aimed at helping us develop self-discipline,
                            together with numerous praises from people around us or on the internet, it seems quite
                            obvious that self-discipline is such a highly-valued quality in today’s society.
                        </p>

                    </div>

                </a>

                <a href="{{ route("blog", "example-article") }}" class="post">

                    <img src="{{ asset("assets/images/blog/staying-motivated-working-remotely.jpg") }}" alt="Staying Motivated Working Remotely">

                    <div class="post-detail">

                        <h1 class="title">
                            5 Tips For Staying Motivated When Working Remotely
                        </h1>

                        <p class="detail">
                            Keeping your motivation up when you're working in an office is relatively easy.
                            You need to get your work done before you can return to the comfort and privacy of home,
                            so dragging your feet will only cause you further inconvenience. And with your colleagues
                            surrounding and observing you, you’ll at once be reminded that you’re part of a team and
                            driven to show productivity.
                        </p>

                    </div>

                </a>

                <a href="{{ route("blog", "example-article") }}" class="post">

                    <img src="{{ asset("assets/images/blog/minimalism.png") }}" alt="Minimalism">

                    <div class="post-detail">

                        <h1 class="title">
                            Minimalism: How I Finally Found the True Beauty of Living with Less
                        </h1>

                        <p class="detail">
                            A couple of months ago, I saw a TV series called Tidying Up with Marie Kondo, where a
                            Japanese lady Konmari visited families to help them tidy their homes. The tiding process
                            normally starts from clothes, books to sentimental items. A rule she’s given is only
                            keeping what’s necessary and discarding those that don’t spark joy anymore. The basic
                            concept embedded in the Konmari method is similar to minimalism.
                        </p>

                    </div>

                </a>

                <a href="{{ route("blog", "example-article") }}" class="post">

                    <img src="{{ asset("assets/images/blog/work-from-home.png") }}" alt="Working From Home">

                    <div class="post-detail">

                        <h1 class="title">
                            Working From Home? 5 Tips of Increasing Remote-Working Productivity
                        </h1>

                        <p class="detail">
                            An unexpected COVID-19 pandemic has led to a global rollout of working from home for a
                            long time and some may be for now too, whether it’s out of personal choices or out of
                            no choices. Although this may be no different for those who’ve already been used to
                            remote work, like some freelancers. However, for those newcomers to this, like myself,
                            it could be a complete disaster. Not just the change of workplace, it’s the change of
                            everything: work schedules, collaborative methods, work environment, and more importantly,
                            the state of mind. Staying at home naturally makes me feel like doing nothing but
                            binge-watching Netflix.
                        </p>

                    </div>

                </a>

            </div>

        @else

            <div class="blog-post">

                <h1 class="title">{{ $title }}</h1>

                <img src="{{ asset($picture) }}" alt="{{ $alt }}" class="shadow-sm">

                <p>
                    The Pomodoro Technique is a simple and effective time management method, which was proposed
                    by an Italian, Francesco Cirillo, in 1992. The reason why it is named "Pomodoro" is simply
                    because the timer he used during university was shaped like a tomato.
                </p>

                <p>
                    The principle of the Pomodoro Technique is to divide time into several "Pomodoro timers", with
                    each focused on for 25 minutes, followed by a 5-minute break. Completing 4 Pomodoro timers
                    allows you to take a longer break.
                </p>

                <p>
                    The core of the Pomodoro Technique is to create a sense of ritual that guides you to quickly
                    enter a state of concentration and maintain focus during this time until the Pomodoro timer ends.
                    Due to its short duration, it is easy for you to stick with it, and the sense of achievement from
                    completing a Pomodoro session will give you positive feedback, which in turn motivates you to
                    persevere and achieve more difficult goals.
                </p>

                <p>
                    Nulla sodales pulvinar augue, quis elementum mauris lobortis a. Mauris nec nibh eget purus
                    cursus ultrices eget vitae urna. Phasellus eget semper dui, a pharetra tortor. Nullam ac elit
                    eget nibh pulvinar dictum sagittis in sem. Curabitur vestibulum purus vel lorem scelerisque,
                    eu vulputate tellus auctor. Suspendisse ut diam at quam vestibulum rutrum. In ultrices felis
                    id porttitor fringilla. Ut consectetur varius est, ac molestie ante consectetur nec.
                    Suspendisse rhoncus ante sem, at porttitor felis elementum at. Quisque convallis, erat nec
                    porttitor auctor, quam nisi semper dui, eget eleifend magna tortor non sapien. Nullam commodo
                    felis vitae auctor sodales. Integer non consectetur sapien. Nam et dolor nec dolor tincidunt
                    sollicitudin.
                </p>

                <a href="{{ route("blog") }}">
                    Back to Blog
                </a>

            </div>

        @endif

    </section>

@endsection
