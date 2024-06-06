@extends("website.app")

@section("title", "Help Center - Feature Guide | Task List")

@section("content")

    <section class="help-center">

        <div class="help-center-detail container">

            <h1 class="title">Feature Guide</h1>

            <img src="{{ asset("assets/images/help-center/article-feature-guide.jpg") }}" alt="Feature Guide" class="shadow-sm">

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

            <p class="other-articles">Other articles</p>

            <a href="{{ route("help-center.beginner-guide") }}" class="article shadow-sm">

                <img src="{{ asset("assets/images/help-center/beginner-guide.png") }}" alt="Beginner Guide">

                <p class="title">Beginner Guide</p>

            </a>

            <a href="{{ route("blog") }}" class="article shadow-sm">

                <img src="{{ asset("assets/images/help-center/blog-articles.png") }}" alt="Blog Articles">

                <p class="title">Blog Articles</p>

            </a>

            <a href="{{ route("help-center.faq") }}" class="article shadow-sm">

                <img src="{{ asset("assets/images/help-center/faq.png") }}" alt="FAQ">

                <p class="title">FAQ</p>

            </a>

        </div>

    </section>

@endsection
