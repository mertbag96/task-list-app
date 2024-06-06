@extends("website.app")

@section("title", "Help Center - FAQ | Task List")

@section("content")

    <section class="help-center">

        <div class="help-center-detail container">

            <h1 class="title">FAQ</h1>

            <img src="{{ asset("assets/images/help-center/article-faq.jpg") }}" alt="FAQ" class="shadow-sm">

            <p>
                Integer vitae pulvinar ipsum. Aenean aliquam dolor non purus malesuada rutrum. Vivamus aliquet
                quam sit amet euismod mattis. Duis pulvinar, dolor eget iaculis faucibus, nisi dolor accumsan felis,
                eget viverra nunc sem a augue.
            </p>

            <div class="accordion" id="faq">

                <div class="accordion-item">

                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#q1" aria-expanded="true" aria-controls="q1">
                            Ut laoreet metus sit amet imperdiet aliquam?
                        </button>
                    </h2>

                    <div id="q1" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                            <p class="mb-0">
                                Vestibulum lobortis, nunc a euismod pellentesque, nunc tellus pulvinar eros, sed
                                molestie arcu eros suscipit sapien. Vestibulum id ultrices justo, maximus fringilla
                                felis. Vivamus imperdiet purus neque, eget ullamcorper purus sagittis sed. Maecenas
                                libero nisi, auctor iaculis tincidunt sed, tempus eu mauris. Nullam faucibus nisl
                                sem, ut elementum tellus cursus nec. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Ut laoreet, metus sit amet imperdiet aliquam, massa nunc convallis
                                metus, non facilisis purus arcu quis odio. Proin et pellentesque lorem.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#q2" aria-expanded="true" aria-controls="q2">
                            Suspendisse pellentesque arcu id malesuada mattis?
                        </button>
                    </h2>

                    <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                            <p class="mb-0">
                                Aliquam vehicula tellus consequat nibh tincidunt, ac commodo justo vulputate.
                                Nulla posuere odio et porttitor aliquam. Nunc vitae nibh porta, mollis tellus vitae,
                                vestibulum ante. Nulla at cursus augue, nec aliquet elit. Quisque at ante mattis,
                                venenatis elit non, laoreet augue. Nulla at eros leo. Ut sagittis ligula sit amet
                                magna fermentum, vel congue lorem maximus. Suspendisse pellentesque arcu id
                                malesuada mattis. In ut dolor sed leo egestas dignissim. Vivamus id posuere felis.
                                Curabitur feugiat a leo vel imperdiet. Donec sodales maximus efficitur.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#q3" aria-expanded="true" aria-controls="q1">
                            Donec sed pretium tellus in rutrum gravida odio sit amet bibendum?
                        </button>
                    </h2>

                    <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                            <p class="mb-0">
                                Donec sed pretium tellus. In rutrum gravida odio sit amet bibendum. Vestibulum
                                mattis, nisi a ultricies fermentum, diam odio dapibus erat, eget tincidunt mi lectus
                                vitae leo. Donec mauris ante, fermentum ac ipsum eu.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#q4" aria-expanded="true" aria-controls="q1">
                            Morbi rutrum dolor vel leo consequat?
                        </button>
                    </h2>

                    <div id="q4" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                            <p class="mb-0">
                                Dolor vel leo consequat, vitae tristique leo finibus. Aenean massa
                                turpis, elementum vel ligula at, dapibus tempus turpis. Maecenas lobortis augue
                                quis faucibus luctus. Integer tellus quam, pulvinar vitae tempor et, tincidunt
                                sit amet sapien. Cras commodo magna at ipsum varius, sed congue lorem porta.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#q5" aria-expanded="true" aria-controls="q1">
                            Aenean elementum orci vestibulum?
                        </button>
                    </h2>

                    <div id="q5" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                            <p class="mb-0">
                                Cras faucibus pellentesque neque, id accumsan eros sagittis eu. Mauris et blandit mi.
                                Nam ut elementum ante, vitae luctus libero. Cras sollicitudin vehicula diam, a
                                interdum mauris aliquam ac. Aenean elementum orci vestibulum, viverra leo et,
                                semper turpis.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#q6" aria-expanded="true" aria-controls="q1">
                            Pellentesque habitant morbi tristique senectus et netus et malesuada. Lacinia
                            convallis orci erat ut urna duis ac nunc eu ipsum semper blandit eget?
                        </button>
                    </h2>

                    <div id="q6" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                            <p class="mb-0">
                                Integer laoreet, dui eget porta porttitor, eros mauris molestie ex, lacinia
                                convallis orci erat ut urna. Duis ac nunc eu ipsum semper blandit eget at nibh.
                                Etiam fringilla felis eu bibendum malesuada. Proin orci lacus, vehicula a
                                sollicitudin at, pharetra sit amet est. Pellentesque ut metus auctor, venenatis
                                nibh eget, imperdiet leo. Phasellus scelerisque mattis ipsum, non volutpat tortor
                                dapibus nec. Phasellus lobortis vel velit a porta. Pellentesque habitant morbi
                                tristique senectus et netus et malesuada fames ac turpis egestas. Nam hendrerit
                                volutpat eros sit amet volutpat. Aenean metus odio, placerat eu dui eget, iaculis
                                egestas nibh. Etiam rhoncus, nisl in tempor euismod, mauris elit dignissim augue,
                                sed hendrerit turpis nulla ut risus. Sed ex ante, suscipit semper ultricies non,
                                varius quis orci.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#q7" aria-expanded="true" aria-controls="q1">
                            Aliquam erat volutpat?
                        </button>
                    </h2>

                    <div id="q7" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                            <p>
                                Morbi sodales, mauris in tincidunt maximus, erat odio iaculis orci, lobortis
                                condimentum lorem enim ac nunc. Aliquam erat volutpat. Vestibulum sed erat ligula.
                                Sed lacinia viverra quam, eu aliquet tellus accumsan id. Praesent ut interdum mi.
                                Mauris eu malesuada nibh. Duis imperdiet nisi at sem fermentum, at volutpat nisl
                                lobortis.
                            </p>
                            <p class="mb-0">
                                In ut dolor sed leo egestas dignissim. Vivamus id posuere felis.
                                Curabitur feugiat a leo vel imperdiet. Donec sodales maximus efficitur.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            <p class="other-articles">Other articles</p>

            <a href="{{ route("help-center.beginner-guide") }}" class="article shadow-sm">

                <img src="{{ asset("assets/images/help-center/beginner-guide.png") }}" alt="Beginner Guide">

                <p class="title">Beginner Guide</p>

            </a>

            <a href="{{ route("help-center.feature-guide") }}" class="article shadow-sm">

                <img src="{{ asset("assets/images/help-center/feature-guide.png") }}" alt="Feature Guide">

                <p class="title">Feature Guide</p>

            </a>

            <a href="{{ route("blog") }}" class="article shadow-sm">

                <img src="{{ asset("assets/images/help-center/blog-articles.png") }}" alt="Blog Articles">

                <p class="title">Blog Articles</p>

            </a>

        </div>

    </section>

@endsection
