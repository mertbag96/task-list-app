@extends("website.app")

@section("title", "Help Center - Beginner Guide | Task List")

@section("content")

    <section class="help-center">

        <div class="help-center-detail container">

            <h1 class="title">Beginner Guide</h1>

            <img src="{{ asset("assets/images/help-center/article-beginner-guide.jpg") }}" alt="Beginner Guide" class="shadow-sm">

            <p>
                Praesent sed tempor magna, non pharetra nisi. Morbi malesuada elit ut tellus mattis blandit.
                Nam lectus velit, rutrum non rutrum vitae, pretium a elit. Nulla cursus enim vitae enim ullamcorper
                malesuada. Nulla non neque elit. Mauris lacinia felis quis ipsum convallis aliquam. Phasellus ac
                felis ultrices, bibendum quam quis, consequat justo. Mauris ex sem, sagittis nec suscipit quis,
                consequat sed mi. Praesent interdum magna tortor, vitae posuere sem tempus non. Pellentesque velit
                neque, interdum vitae nibh a, condimentum gravida erat. Integer condimentum massa non odio dictum
                efficitur. Proin vel efficitur arcu.
            </p>

            <p>
                Phasellus volutpat, velit quis ullamcorper laoreet, dolor nibh suscipit augue, sit amet scelerisque
                nibh purus quis nunc. Nunc vehicula lectus eu velit feugiat imperdiet quis in magna.
            </p>

            <p>
                Quisque condimentum porttitor aliquam. Pellentesque nibh lorem, dapibus quis mauris et, ornare
                imperdiet augue. Nullam ultricies mauris ex, sit amet molestie odio faucibus id. Vivamus ultricies,
                nibh et pretium faucibus, dolor enim posuere velit, eu facilisis nisi risus ac eros. Curabitur
                ultrices scelerisque massa, quis cursus tortor sagittis euismod. Mauris at mauris semper, cursus
                lorem ac, fringilla tellus. Maecenas molestie quis nisl sed dignissim. In ut efficitur libero, eu
                imperdiet ligula. Sed in faucibus mi. Aenean venenatis sem eu rhoncus sollicitudin. Phasellus id
                lobortis dolor.
            </p>

            <p class="other-articles">Other articles</p>

            <a href="{{ route("help-center.feature-guide") }}" class="article shadow-sm">

                <img src="{{ asset("assets/images/help-center/feature-guide.png") }}" alt="Feature Guide">

                <p class="title">Feature Guide</p>

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
