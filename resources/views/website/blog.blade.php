@extends("website.app")

@section("title", $page_title)

@section("content")

    <section class="blog container">

        @if(is_null($slug))

            @foreach($blog_articles as $article)

                @if($loop->index == 0)

                    <div class="blog-latest">

                        <h1 class="title">Latest Post</h1>

                        <a href="{{ route("blog", $article["slug"]) }}" class="latest-post">

                            <img src="{{ asset($article["image"]) }}" alt="{{ $article["title"] }}">

                            <div class="article">

                                <h1 class="article-title">{{ $article["title"] }}</h1>

                                <p class="article-detail">{{ $article["description"] }}</p>

                            </div>

                        </a>

                    </div>

                @endif

            @endforeach

            <div class="posts">

                <h1 class="title">Recent Posts</h1>

                @foreach($blog_articles as $article)

                    @if($loop->index > 0)

                        <a href="{{ route("blog", $article["slug"]) }}" class="post">

                            <img src="{{ asset($article["image"]) }}" alt="{{ $article["title"] }}">

                            <div class="post-detail">

                                <h1 class="title">{{ $article["title"] }}</h1>

                                <p class="detail">{{ $article["description"] }}</p>

                            </div>

                        </a>

                    @endif

                @endforeach

            </div>

        @else

            <div class="blog-post">

                @foreach($blog_articles as $article)

                    @if($article["slug"] == $slug)

                        <h1 class="title">{{ $article["title"] }}</h1>

                        <p class="date">{{ $article["date"] }}</p>

                        <img src="{{ asset($article["image"]) }}" alt="{{ $article["title"] }}" class="shadow-sm">

                        <p>{{ $article["description"] }}</p>

                    @endif

                @endforeach

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

                <p>
                    Curabitur malesuada lacinia tellus, commodo rutrum enim auctor in. Phasellus pharetra auctor
                    elementum. Integer vel mauris sollicitudin, luctus tortor id, rhoncus ipsum. Integer vitae
                    pulvinar ipsum. Aenean aliquam dolor non purus malesuada rutrum.
                </p>

                <p>
                    Nunc tempor tellus id sem venenatis dignissim. Morbi tellus purus, tristique non mauris quis,
                    sagittis blandit ex. Sed convallis nisi malesuada nisl elementum, vitae iaculis mauris auctor.
                    Phasellus sodales dignissim neque, at pharetra mauris. Curabitur vitae velit molestie, vehicula
                    libero eget, tempus nisi. Donec at sem sed magna pretium venenatis eu non turpis. Phasellus
                    vulputate euismod neque, ut volutpat nulla varius in. Nullam ullamcorper tincidunt facilisis.
                    Aliquam quis lacinia leo, in tempor neque. Donec porttitor justo enim, sed lobortis mauris congue
                    ullamcorper. Duis pulvinar, dolor eget iaculis faucibus, nisi dolor accumsan felis, eget viverra
                    nunc sem a augue.
                </p>

                <p>
                    Duis scelerisque pellentesque mi, quis varius ex imperdiet non. Aliquam sagittis ex facilisis laoreet
                    egestas. Phasellus a purus mollis, mollis libero volutpat, maximus ante. Vivamus aliquet quam sit
                    amet euismod mattis. Praesent vitae diam nunc. Duis porttitor, mi vel vehicula tincidunt, ex ipsum
                    laoreet dolor, nec mollis odio nisl varius felis. Interdum et malesuada fames ac ante ipsum primis
                    in faucibus. Donec fringilla malesuada eros vel sodales.
                </p>

                <div class="pagination">

                    @foreach($blog_articles as $article)

                        @if($article["slug"] == $slug)

                            @if($article["previous"])
                                <a href="{{ route("blog", $article["previous"]) }}">
                                    <i class="fa-solid fa-caret-left"></i>
                                    Previous
                                </a>
                            @else
                                <span></span>
                            @endif

                            @if($article["next"])
                                <a href="{{ route("blog", $article["next"]) }}">
                                    Next
                                    <i class="fa-solid fa-caret-right"></i>
                                </a>
                            @else
                                <span></span>
                            @endif

                        @endif

                    @endforeach

                </div>

            </div>

        @endif

    </section>

@endsection
