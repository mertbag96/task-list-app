@extends("website.app")

@section("title", "About | Task List")

@section("content")

    <section class="about">

        <div class="about-banner-container">

            <div class="about-banner container">

                <div class="about-banner-content">

                    <h1 class="title">
                        About Task List
                    </h1>

                    <h6 class="description">
                        Pulvinar elementum integer enim neque. Id volutpat lacus laoreet non.
                        Blandit massa enim nec dui. Et malesuada fames ac turpis egestas integer eget.
                    </h6>

                </div>

                <div class="about-banner-content">

                    <img src="{{ asset("assets/images/about/about.png") }}" alt="About">

                </div>

            </div>

        </div>

        <div class="about-principles-container">

            <div class="about-principles container">

                <div class="about-mission">

                    <h1 class="title">Our Mission</h1>

                    <p class="detail">
                        Fusce congue fermentum leo eu vestibulum. Morbi rhoncus scelerisque ex quis mattis.
                        Praesent vitae arcu laoreet, vulputate libero eu, blandit turpis. Donec sed aliquet sem.
                        Nullam lacinia sit amet leo feugiat elementum. Proin vitae sapien id velit sollicitudin
                        hendrerit sit amet ut magna. Aliquam erat volutpat. Etiam auctor quis lacus fermentum
                        vehicula. Mauris nibh justo, eleifend at viverra eu, suscipit ac nisi. Donec viverra
                        venenatis quam tempus ornare.
                    </p>

                    <p class="detail mb-0">
                        Maecenas a accumsan elit, nec mattis odio. Proin eu leo sit amet purus lobortis rutrum ut
                        non elit. Sed ac sem egestas, sodales justo sit amet, condimentum ligula. Morbi finibus
                        iaculis dolor in vestibulum. Vivamus accumsan erat non metus molestie, sed fringilla tellus
                        cursus. Morbi eu lectus lacinia felis tempus varius. Aenean vitae ornare enim, ut pharetra
                        quam. Morbi feugiat suscipit dictum. Suspendisse vitae hendrerit turpis. Donec a pretium
                        ipsum. Donec et ex et magna dignissim pharetra vel non lectus.
                    </p>

                </div>

                <div class="about-vision">

                    <h1 class="title">Our Vision</h1>

                    <p class="detail">
                        Donec imperdiet ex eget turpis sodales pulvinar. Nulla id volutpat purus, ut vulputate
                        ligula. Praesent condimentum dignissim metus, a condimentum velit. Phasellus at mauris
                        ac urna iaculis porttitor. Proin rhoncus sapien a cursus pharetra. Nulla tincidunt tortor
                        massa, eu volutpat enim tincidunt sed. Morbi quis elit ultricies, blandit odio a, efficitur
                        ligula. Fusce in vulputate velit.
                    </p>

                    <p class="detail mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales sem magna, et
                        malesuada leo pulvinar vitae. Donec imperdiet ex eget turpis sodales pulvinar. Nulla id
                        volutpat purus, ut vulputate ligula. Praesent condimentum dignissim metus, a condimentum
                        velit. Phasellus at mauris ac urna iaculis porttitor. Duis ut lacus et augue commodo
                        malesuada. Pellentesque quis nunc quis massa efficitur pellentesque nec at ligula.
                        Pellentesque rhoncus lorem a dolor feugiat viverra. Mauris volutpat maximus metus sit
                        amet facilisis.
                    </p>

                </div>

            </div>

        </div>

        <div class="about-statistics-container">

            <div class="about-statistics container">

                <div class="about-statistic">
                    <i class="fa-solid fa-people-group"></i>
                    <h1>50+</h1>
                    <h6>Teams</h6>
                </div>

                <div class="about-statistic">
                    <i class="fa-solid fa-users"></i>
                    <h1>250+</h1>
                    <h6>Users</h6>
                </div>

                <div class="about-statistic">
                    <i class="fa-solid fa-list-check"></i>
                    <h1>500+</h1>
                    <h6>Tasks</h6>
                </div>

            </div>

        </div>

        <div class="about-partners-container">

            <div class="about-partners container">

                <img src="{{ asset("assets/images/partners/adobe.png") }}" alt="Adobe">

                <img src="{{ asset("assets/images/partners/amazon.png") }}" alt="Amazon">

                <img src="{{ asset("assets/images/partners/disney.png") }}" alt="Disney">

                <img src="{{ asset("assets/images/partners/microsoft.png") }}" alt="Microsoft">

                <img src="{{ asset("assets/images/partners/netflix.png") }}" alt="Netflix">

                <img src="{{ asset("assets/images/partners/salesforce.png") }}" alt="Salesforce">

            </div>

        </div>

    </section>

@endsection
