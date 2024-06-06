@extends("website.app")

@section("title", "Help Center | Task List")

@section("content")

    <section class="help-center">

        <div class="help-search">

            <label for="search" class="title">How can we <span>help</span> you?</label>

            <input type="text" name="search" id="search" class="search" placeholder="Search...">

        </div>

        <div class="help-topics container">

            <h1 class="title">Other resources that we can <span>help</span> you with</h1>

            <a href="{{ route("help-center.beginner-guide") }}" class="help-topic shadow-sm">

                <img src="{{ asset("assets/images/help-center/beginner-guide.png") }}" alt="Beginner Guide">

                <p class="topic">Beginner Guide</p>

            </a>

            <a href="{{ route("help-center.feature-guide") }}" class="help-topic shadow-sm">

                <img src="{{ asset("assets/images/help-center/feature-guide.png") }}" alt="Feature Guide">

                <p class="topic">Feature Guide</p>

            </a>

            <a href="{{ route("blog") }}" class="help-topic shadow-sm">

                <img src="{{ asset("assets/images/help-center/blog-articles.png") }}" alt="Blog Articles">

                <p class="topic">Blog Articles</p>

            </a>

            <a href="{{ route("help-center.faq") }}" class="help-topic shadow-sm">

                <img src="{{ asset("assets/images/help-center/faq.png") }}" alt="FAQ">

                <p class="topic">FAQ</p>

            </a>

        </div>

        <div class="help-contact-container">

            <div class="help-contact container">

                <div class="help-contact-content">

                    <h1 class="title">Do you need more help?</h1>

                    <p class="detail">
                        Contact us if you think you need more help.
                    </p>

                </div>

                <a href="{{ route("contact") }}">Contact us</a>

            </div>

        </div>

    </section>

@endsection
