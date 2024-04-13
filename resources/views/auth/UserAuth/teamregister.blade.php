{{-- --------------------------------------------------🙏🔱ॐ नमः शिवाय🔱🙏------------------------------------- --}}
@extends('auth.UserAuth.layouts.main')
@section('main-section')
    @push('title')
        <title>Team Register</title>
    @endpush

    <body
        style="background-image: url('{{ asset('assets/images/backgournd.jpg') }}'); background-repeat:no-repeat; background-size:cover;">
        <div class="auth-page-content overflow-hidden pt-lg-5" style="margin-top: 5%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden m-0">
                            <div class="row justify-content-center g-0">
                                <div class="col-lg-12">
                                    @if ($message = Session::get('success'))
                                        <div class="alert border-0 alert-success text-center" role="alert"
                                            id="successAlert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    @if ($message = Session::get('failure'))
                                        <div class="alert border-0 alert-danger text-center" role="alert"
                                            id="dangerAlert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h2 class="text-danger text-center fw-bold">Register Now</h2>
                                            <p class="text-muted text-center">While Seats are available</p>
                                        </div>

                                        <div class="mt-4">
                                            <form class="" action="{{ route('registerteam') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="useremail" class="form-label">Team Name<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="useremail"
                                                                placeholder="Enter team name" name="teamname" required>
                                                            <input type="hidden" name="id" value="{{ $userdata->id }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="useremail" class="form-label">Captain Name<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="useremail"
                                                                placeholder="Enter captain name" name="captainname"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="useremail" class="form-label">Institution Name<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="useremail"
                                                                placeholder="Enter institution name" name="institutionname"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="useremail" class="form-label">Coach Name<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="useremail"
                                                                placeholder="Enter coach name" name="coachname" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="useremail" class="form-label">Institute Recognized
                                                                By<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="useremail"
                                                                placeholder="Enter institute" name="instituterecognizedby"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="useremail" class="form-label">Email<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="email" class="form-control" id="useremail"
                                                                placeholder="Enter email" name="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="useremail" class="form-label">Team Size&nbsp;<span
                                                                    class="text-danger">(Maximum 30)*</span></label>
                                                            <input type="text" class="form-control" id="useremail"
                                                                placeholder="Enter team size" name="teamsize" maxlength="30"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="useremail" class="form-label">Alternate Phone
                                                                Number&nbsp;<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="useremail"
                                                                placeholder="Enter alternate phone number"
                                                                name="alternatecontactnumber" maxlength="10" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="useremail" class="form-label">City<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="useremail"
                                                                placeholder="nearest well-known city remcommended"
                                                                name="city" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="useremail" class="form-label">State<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="useremail"
                                                                placeholder="Enter state" name="state" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="useremail" class="form-label">Team ID</label>
                                                            <input type="text" class="form-control text-muted"
                                                                id="useremail" placeholder="" name="teamid"
                                                                value="MAC000{{ $userdata->id }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="useremail" class="form-label">Password<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="password" class="form-control" id="useremail"
                                                                placeholder="Enter password" name="password" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="useremail" class="form-label mt-3 mt-lg-0">Institute
                                                            Type<span class="text-danger">*</span></label>
                                                        <div class="">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="instittutetype" id="inlineradio6"
                                                                    value="College">
                                                                <label class="form-check-label"
                                                                    for="inlineradio6">College</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="instittutetype" id="inlineradio7"
                                                                    value="University">
                                                                <label class="form-check-label"
                                                                    for="inlineradio7">University</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="instittutetype" id="inlineradio8"
                                                                    value="Other">
                                                                <label class="form-check-label"
                                                                    for="inlineradio8">Other</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 ">
                                                        <label for="useremail" class="form-label mt-3 mt-lg-0">Vehicle
                                                            Type<span class="text-danger">*</span></label>
                                                        <div class="">
                                                            <div for="useremail" class="form-label fw-bold">
                                                                Buggy&nbsp;&nbsp;</div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="buggy" id="inlineradio6" value="combustion">
                                                                <label class="form-check-label"
                                                                    for="inlineradio6">Combustion</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="buggy" id="inlineradio7" value="electric">
                                                                <label class="form-check-label"
                                                                    for="inlineradio7">Electric</label>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div for="useremail" class="form-label fw-bold">
                                                                Quad&nbsp;&nbsp;</div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="quad" id="inlineradio6" value="combustion">
                                                                <label class="form-check-label"
                                                                    for="inlineradio6">Combustion</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="quad" id="inlineradio7" value="electric">
                                                                <label class="form-check-label"
                                                                    for="inlineradio7">Electric</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-12 col-md-6">
                                                        <div>
                                                            <label for="exampleFormControlTextarea5"
                                                                class="form-label mt-3">Communication Address</label>
                                                            <textarea placeholder="with pincode" name="communicationaddress" class="form-control"
                                                                id="exampleFormControlTextarea5" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <button class="btn btn-danger w-100"
                                                            type="submit">Submit</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
    </body>
    <script>
        setTimeout(function() {
            $('#successAlert').fadeOut('slow');
        }, 2000);

        setTimeout(function() {
            $('#dangerAlert').fadeOut('slow');
        }, 2000);
    </script>
@endsection
