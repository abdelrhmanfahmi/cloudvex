<footer class="pt-5">
    <div class="container">
        <?php $settings = \App\Models\Setting::all(); ?>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4">
                {{-- <div class="">
                    <div class="logo">
                        <a href="/">
                            @if($settings[7]->image != null)
                                <img src="{{ asset('uploads/' . $settings[7]->image) }}" width="60px" height="60px" alt="">
                            @else
                                <img src="{{ asset('assets/images/firstLogo.JPG') }}" width="60px" height="60px" alt="">
                            @endif
                        </a>
                    </div>
                </div> --}}

                <div class="titleHolder">
                    <h2>Contact Us</h2>
                </div>
                {{-- <p class="text-gray-dark">
                    {{ $settings[11]->value }}
                </p> --}}

                <div>
                    <div class="media aligned-row mt-11">
                        <div class="image-holder">
                            <img src="{{ asset('assets/images/Group56027.png') }}" width="60px" height="60px" />
                        </div>
                        <div class="info mx-2">
                            <p class="text-gray gray-only">You Have Questions ?</p>
                            <p class="text-gray-dark">{{ $settings[1]->value }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-5">
                <div class="titleHolder">
                    <h2>Fast Links</h2>
                </div>
                <ul>
                    <li>
                        <a class="text-gray" href="/about">About Us</a>
                    </li>
                    {{-- <li>
                        <a class="text-gray" href="/show/service/1">Services</a>
                    </li> --}}
                    <li>
                        <a class="text-gray" href="/contact">Contact Us</a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 colmd-6 col-lg-3">
                <div class="titleHolder">
                    <h2>Social Media links</h2>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <a href="{{ $settings[2]->value }}">
                            <i class="fab fa-facebook fa-lg text-white"></i>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ $settings[4]->value }}">
                            <i class="fab fa-instagram fa-lg text-white"></i>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ $settings[12]->value }}">
                            <i class="fab fa-tiktok fa-lg text-white"></i>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ $settings[13]->value }}">
                            <i class="fab fa-youtube fa-lg text-white"></i>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ $settings[14]->value }}">
                            <i class="fas fa-threads fa-lg text-white">@</i>
                        </a>
                    </div>

                </div>
            </div>

            {{-- <hr />

            <div class="col-sm-12 col-md-12 d-flex justify-content-center w-100">
                {!! $settings[16]->value !!}
            </div> --}}

            <div class="text-center">
                <hr />
                <p class="text-gray">© 2024 Copyright reserved to cloudvex <i class="fas fa-heart fa-lg text-white"></i> <a href="/"> <span class="styleFooterText">Cloudvex</span></a></p>
            </div>
        </div>
    </div>
</footer>
