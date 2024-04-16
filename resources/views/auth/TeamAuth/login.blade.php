{{-- --------------------------------------------------🙏🔱ॐ नमः शिवाय🔱🙏------------------------------------- --}}
@extends('auth.TeamAuth.layouts.main')
@section('main-section')
    @push('title')
        <title>Log in | Auto Sports India</title>
    @endpush
    <body
        style="background-image: url('{{ asset('assets/images/loginbackone.jpg') }}'); background-repeat:no-repeat; background-size:cover; background-position:top;">
        <div class="auth-page-content overflow-hidden pt-lg-5" style="margin-top: 10%;">
            <div class="container">
                <div class="row">
                    <div class="d-flex justify-content-end">
                        <div class="col-lg-6">
                            <div class="card overflow-hidden">
                                <div class="row g-0">
                                    <div class="col-lg-12">
                                        <div class="p-lg-5 p-4">
                                            <div class="bg-dark p-3 d-flex justify-content-center">
                                                <img src="{{ asset('assets/images/logofinal.png') }}" alt=""
                                                    height="30" />
                                                {{-- <h1 class="text-danger text-center"
                                                    style="font-family: Permanent Marker, cursive; text-shadow: 2px 2px 2px black;">
                                                    Welcome To</h1>
                                                <h2 class="text-danger text-center fw-bold"
                                                    style="font-family: Permanent Marker, cursive; text-shadow: 2px 2px 2px black;">
                                                    AUTO SPORTS INDIA</h2> --}}
                                            </div>
                                            <h3 class="text-danger text-center mt-3"
                                                style="font-family: Permanent Marker, cursive; text-shadow: 2px 2px 2px black;">
                                                Welcome Back</h3>
                                            <div class="mt-4">
                                                <form action="{{ route('teamauthlogin') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Team ID</label>
                                                        <input type="text" class="form-control" id="username"
                                                            placeholder="team id" name="teamid">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="password-input">Password</label>
                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input type="password" class="form-control pe-5 password-input"
                                                                placeholder="password" name="password" id="password-input">
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
                                            </div>
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
@endsection
