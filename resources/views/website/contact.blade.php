@extends("website.app")

@section("title", "Contact | Task List")

@section("content")

    <section class="contact">

        <div class="contact-banner-container">

            <div class="contact-banner-bg">

                <h1 class="title">Contact</h1>

            </div>

        </div>

        <div class="contact-content container">

            <div class="contact-area">

                <h1 class="title">Contact information</h1>

                <div class="contact-detail">
                    <i class="fa-solid fa-phone"></i>
                    <p>+1 123 456 78 90</p>
                </div>

                <div class="contact-detail">
                    <i class="fa-solid fa-envelope"></i>
                    <p>contact@tasklist.com</p>
                </div>

                <div class="contact-detail">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>820 Haul King Str. 86500, CA</p>
                </div>

            </div>

            <div class="contact-area">

                <h1 class="title">Get in touch</h1>

                <form action="{{ route("contact-us") }}" method="POST" autocomplete="off">

                    @csrf

                    <div class="form-element">
                        <label for="first-name">First name</label>
                        <input type="text" name="first_name" id="first-name"
                               maxlength="24" value="{{ old("first_name") }}" required>
                        @error("first_name")
                        <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-element">
                        <label for="last-name">Last name</label>
                        <input type="text" name="last_name" id="last-name"
                               maxlength="24" value="{{ old("last_name") }}" required>
                        @error("last_name")
                        <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-element">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"
                               maxlength="48" value="{{ old("email") }}" required>
                        @error("email")
                        <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-element">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone"
                               maxlength="15" value="{{ old("phone") }}" required>
                        @error("phone")
                        <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-element w-100">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="4"
                                  maxlength="500" required>{{ old("message") }}</textarea>
                        @error("message")
                        <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-element w-100">
                        <button type="submit">Submit</button>
                    </div>

                    <p class="agreement">
                        I agree to the
                        <a href="{{ route("terms") }}" target="_blank">Terms of Service</a>
                        and
                        <a href="{{ route("privacy") }}" target="_blank">Privacy</a>
                        &
                        <a href="{{ route("security") }}" target="_blank">Security</a>
                        Policies by submitting this form.
                    </p>

                </form>

            </div>

        </div>

    </section>

@endsection

@section("scripts")

    @if(session()->has("form_successful"))

        <script>
            $(".alert .fa-check").removeClass("d-none");
            $(".alert p").text("{{ session("form_successful") }}");
            $(".alert").removeClass("d-none");
            setTimeout( function () {
                $(".alert").addClass("animate__fadeOutRight");
            }, 5000);
        </script>

    @endif

@endsection
