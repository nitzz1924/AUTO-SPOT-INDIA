{{-- --------------------------------------------------🙏🔱ॐ नमः शिवाय🔱🙏------------------------------------- --}}
@extends('auth.UserAuth.layouts.main')
@section('main-section')
    @push('title')
        <title>Team Sign Up</title>
    @endpush

    <body style="background-image: url('{{ asset('assets/images/backgroundfinal.jpg') }}'); background-repeat:no-repeat; background-size:cover;">
        <div class="auth-page-content overflow-hidden pt-lg-5" style="margin-top: 10%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                                        {{-- <div class="bg-overlay"></div> --}}
                                        <div class="position-relative h-100 d-flex flex-column">
                                            {{-- <div class="mt-auto">
                                                <img src="{{ asset('assets/images/loginimg.jpg') }}" alt="" class="img-fluid" />
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div class="">
                                            <h2 class="text-danger text-center fw-bold">Welcome to AUTO SPORTS INDIA</h2>
                                            <p class="text-muted text-center">Sign UP to continue</p>
                                        </div>

                                        <div class="mt-4">
                                            <form id="signupform" class="signform">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Full Name</label>
                                                    <input type="text" class="form-control" id="username"
                                                        placeholder="Enter your full name" name="fullname">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Mobile Number</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="text" class="form-control pe-5 password-input"
                                                            placeholder="Enter mobile number" name="mobilenumber"
                                                            id="password-input">
                                                        {{-- <button
                                                            class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                            type="button" id="password-addon"><i
                                                                class="ri-eye-fill align-middle"></i></button> --}}
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-danger w-100" type="submit">Sign In</button>
                                                </div>
                                            </form>
                                            <form action="{{ route('verifteamyotp') }}" method="POST" id="otpsignupform"
                                                style="display: none;">
                                                @csrf
                                                <div class="p-lg-5 p-4">
                                                    <div class="text-muted text-center mt-0">
                                                        <h4 class="">Verify Yourself</h4>
                                                        <p id="phonetxt"></p>
                                                    </div>

                                                    <div class="mt-4">
                                                        <div class="row">
                                                            <div class="col-2">
                                                                <input type="hidden" name="id" value=""
                                                                    id="signupid">
                                                                <div class="mb-3">
                                                                    <label for="digit1-input" class="visually-hidden">Digit
                                                                        1</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-lg p-0 bg-light border-light text-center"
                                                                        onkeyup="moveToNext(1, event)" maxLength="1"
                                                                        id="digit1-input" name="digit1">
                                                                </div>
                                                            </div><!-- end col -->

                                                            <div class="col-2">
                                                                <div class="mb-3">
                                                                    <label for="digit2-input" class="visually-hidden">Digit
                                                                        2</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-lg p-0 bg-light border-light text-center"
                                                                        onkeyup="moveToNext(2, event)" maxLength="1"
                                                                        id="digit2-input" name="digit2">
                                                                </div>
                                                            </div><!-- end col -->

                                                            <div class="col-2">
                                                                <div class="mb-3">
                                                                    <label for="digit3-input" class="visually-hidden">Digit
                                                                        3</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-lg p-0 bg-light border-light text-center"
                                                                        onkeyup="moveToNext(3, event)" maxLength="1"
                                                                        id="digit3-input" name="digit3">
                                                                </div>
                                                            </div><!-- end col -->

                                                            <div class="col-2">
                                                                <div class="mb-3">
                                                                    <label for="digit4-input" class="visually-hidden">Digit
                                                                        4</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-lg p-0 bg-light border-light text-center"
                                                                        onkeyup="moveToNext(4, event)" maxLength="1"
                                                                        id="digit4-input" name="digit4">
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="mb-3">
                                                                    <label for="digit5-input" class="visually-hidden">Digit
                                                                        4</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-lg p-0 bg-light border-light text-center"
                                                                        onkeyup="moveToNext(5, event)" maxLength="1"
                                                                        id="digit5-input" name="digit5">
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="mb-3">
                                                                    <label for="digit6-input"
                                                                        class="visually-hidden">Digit
                                                                        4</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-lg p-0 bg-light border-light text-center"
                                                                        onkeyup="moveToNext(6, event)" maxLength="1"
                                                                        id="digit6-input" name="digit6">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <button type="submit"
                                                                class="btn btn-danger w-100">Confirm</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        jQuery('#signupform').submit(function(e) {
            console.log('I am called');
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('signup_submit') }}",
                data: jQuery('#signupform').serialize(),
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    jQuery('#message').html(data.msg);
                    console.log(data);
                    if (data.msg == 'success') {
                        jQuery('.signform').hide();
                        jQuery('#otpsignupform').show();
                        jQuery('#phonetxt').text(
                            `Enter the 6-digit code sent to your phone number ${data.data.mobilenumber}`
                        );
                        jQuery('#signupid').val(data.data.id);
                    }
                }
            });
        });

        function moveToNext(currentDigit, event) {
            var maxLength = 1;
            if (event.target.value.length >= maxLength) {
                var nextDigit = currentDigit + 1;
                var nextInput = document.getElementById('digit' + nextDigit + '-input');
                if (nextInput) {
                    nextInput.focus();
                }
            }
        }
    </script>
@endsection
