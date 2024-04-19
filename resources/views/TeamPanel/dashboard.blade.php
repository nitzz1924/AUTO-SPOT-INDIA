{{-- --------------------------------------------------🙏🔱ॐ नमः शिवाय🔱🙏------------------------------------- --}}
@extends('layouts.team')
@section('content')
<div class="container-fluid">
    <div class="profile-foreground position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg">
            <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
        </div>
    </div>
    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
        <div class="row g-4">
            <div class="col-auto">
                <div class="avatar-lg">
                    <img src="{{asset('assets/images/user-dummy-img.jpg')}}" alt="user-img"
                        class="img-thumbnail rounded-circle" />
                </div>
            </div>
            <div class="col">
                <div class="p-2">
                    <h3 class="text-white mb-1">{{$teamdata->teamname}}</h3>
                    <p class="text-white text-opacity-75">{{$teamdata->teamid}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div>
                <div class="d-flex profile-wrapper">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span
                                    class="d-none d-md-inline-block">Overview</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities" role="tab">
                                <i class="ri-list-unordered d-inline-block d-md-none"></i> <span
                                    class="d-none d-md-inline-block">Activities</span>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#projects" role="tab">
                                <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span
                                    class="d-none d-md-inline-block">Team Members</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
                                <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span
                                    class="d-none d-md-inline-block">Documents</span>
                            </a>
                        </li>
                    </ul>
                    <div class="flex-shrink-0">
                        <a href="pages-profile-settings.html" class="btn btn-success"><i
                                class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content pt-4 text-muted">
                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                        <div class="row">
                            <div class="col-xxl-3">

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Info</h5>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Team Name :</th>
                                                        <td class="text-muted">{{$teamdata->teamname}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Mobile :</th>
                                                        <td class="text-muted">{{$teamdata->mobilenumber}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">E-mail :</th>
                                                        <td class="text-muted">{{$teamdata->email}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Joining Date</th>
                                                        <td class="text-muted">
                                                            {{$teamdata->created_at->format('d/m/y')}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Portfolio</h5>
                                        <div class="d-flex flex-wrap gap-2">
                                            <div>
                                                <a href="javascript:void(0);" class="avatar-xs d-block">
                                                    <span class="avatar-title rounded-circle fs-16 bg-dark text-light">
                                                        <i class="ri-github-fill"></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="avatar-xs d-block">
                                                    <span class="avatar-title rounded-circle fs-16 bg-primary">
                                                        <i class="ri-global-fill"></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="avatar-xs d-block">
                                                    <span class="avatar-title rounded-circle fs-16 bg-success">
                                                        <i class="ri-dribbble-fill"></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="avatar-xs d-block">
                                                    <span class="avatar-title rounded-circle fs-16 bg-danger">
                                                        <i class="ri-pinterest-fill"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Skills</h5>
                                        <div class="d-flex flex-wrap gap-2 fs-15">
                                            <a href="javascript:void(0);"
                                                class="badge bg-primary-subtle text-primary">Photoshop</a>
                                            <a href="javascript:void(0);"
                                                class="badge bg-primary-subtle text-primary">illustrator</a>
                                            <a href="javascript:void(0);"
                                                class="badge bg-primary-subtle text-primary">HTML</a>
                                            <a href="javascript:void(0);"
                                                class="badge bg-primary-subtle text-primary">CSS</a>
                                            <a href="javascript:void(0);"
                                                class="badge bg-primary-subtle text-primary">Javascript</a>
                                            <a href="javascript:void(0);"
                                                class="badge bg-primary-subtle text-primary">Php</a>
                                            <a href="javascript:void(0);"
                                                class="badge bg-primary-subtle text-primary">Python</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="mt-3">
                                                    <label for="emailInput" class="form-label fw-bold">Team Name</label>
                                                    <input type="text"
                                                        class="text-muted form-control text-muted border border-0 bg-transparent border border-0 bg-transparent"
                                                        id="emailInput" readonly value="{{$teamdata->teamname}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mt-3">
                                                    <label for="passwordInput" class="form-label fw-bold">Team
                                                        ID</label>
                                                    <input type="text"
                                                        class="form-control text-muted border border-0 bg-transparent"
                                                        id="passwordInput" readonly value="{{$teamdata->teamid}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mt-3">
                                                    <label for="passwordInput" class="form-label fw-bold">Captain
                                                        Name</label>
                                                    <input type="text"
                                                        class="form-control text-muted border border-0 bg-transparent"
                                                        id="passwordInput" readonly value="{{$teamdata->captainname}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mt-3">
                                                    <label for="passwordInput" class="form-label fw-bold">Email</label>
                                                    <input type="text"
                                                        class="form-control text-muted border border-0 bg-transparent"
                                                        id="passwordInput" readonly value="{{$teamdata->email}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mt-3">
                                                    <label for="passwordInput" class="form-label fw-bold">Coach
                                                        Name</label>
                                                    <input type="text"
                                                        class="form-control text-muted border border-0 bg-transparent"
                                                        id="passwordInput" readonly value="{{$teamdata->coachname}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mt-3">
                                                    <label for="passwordInput" class="form-label fw-bold">Institue
                                                        Recognized By</label>
                                                    <input type="text"
                                                        class="form-control text-muted border border-0 bg-transparent"
                                                        id="passwordInput" readonly
                                                        value="{{$teamdata->instituterecognizedby}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mt-3">
                                                    <label for="passwordInput" class="form-label fw-bold">Institution
                                                        Name</label>
                                                    <input type="text"
                                                        class="form-control text-muted border border-0 bg-transparent"
                                                        id="passwordInput" readonly
                                                        value="{{$teamdata->institutionname}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mt-3">
                                                    <label for="passwordInput" class="form-label fw-bold">Communication
                                                        Address</label>
                                                    <input type="text"
                                                        class="form-control text-muted border border-0 bg-transparent"
                                                        id="passwordInput" readonly
                                                        value="{{$teamdata->communicationaddress}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-4">
                                                <div class="d-flex mt-4">
                                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                        <div
                                                            class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                            <i class="ri-global-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="mb-1">Website :</p>
                                                        <a href="https://autosports.cigmafeed.in/"
                                                            class="fw-semibold">Auto Sports</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Projects</h5>
                                        <!-- Swiper -->
                                        <div class="swiper project-swiper mt-n4">
                                            <div class="d-flex justify-content-end gap-2 mb-2">
                                                <div class="slider-button-prev">
                                                    <div class="avatar-title fs-18 rounded px-1">
                                                        <i class="ri-arrow-left-s-line"></i>
                                                    </div>
                                                </div>
                                                <div class="slider-button-next">
                                                    <div class="avatar-title fs-18 rounded px-1">
                                                        <i class="ri-arrow-right-s-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div
                                                        class="card profile-project-card shadow-none profile-project-success mb-0">
                                                        <div class="card-body p-4">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                                    <h5 class="fs-14 text-truncate mb-1">
                                                                        <a href="#" class="text-body">ABC
                                                                            Project Customization</a>
                                                                    </h5>
                                                                    <p class="text-muted text-truncate mb-0">
                                                                        Last Update : <span
                                                                            class="fw-semibold text-body">4
                                                                            hr Ago</span></p>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <div
                                                                        class="badge bg-warning-subtle text-warning fs-10">
                                                                        Inprogress</div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mt-4">
                                                                <div class="flex-grow-1">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <div>
                                                                            <h5 class="fs-12 text-muted mb-0">
                                                                                Members :</h5>
                                                                        </div>
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="assets/images/users/avatar-4.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="assets/images/users/avatar-5.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <div
                                                                                        class="avatar-title rounded-circle bg-light text-primary">
                                                                                        A
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="assets/images/users/avatar-2.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <!-- end card -->
                                                </div>
                                                <!-- end slide item -->
                                                <div class="swiper-slide">
                                                    <div
                                                        class="card profile-project-card shadow-none profile-project-danger mb-0">
                                                        <div class="card-body p-4">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                                    <h5 class="fs-14 text-truncate mb-1">
                                                                        <a href="#" class="text-body">Client -
                                                                            John</a>
                                                                    </h5>
                                                                    <p class="text-muted text-truncate mb-0">
                                                                        Last Update : <span
                                                                            class="fw-semibold text-body">1
                                                                            hr Ago</span></p>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <div
                                                                        class="badge bg-success-subtle text-success fs-10">
                                                                        Completed</div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mt-4">
                                                                <div class="flex-grow-1">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <div>
                                                                            <h5 class="fs-12 text-muted mb-0">
                                                                                Members :</h5>
                                                                        </div>
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="assets/images/users/avatar-2.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <div
                                                                                        class="avatar-title rounded-circle bg-light text-primary">
                                                                                        C
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div><!-- end card -->
                                                </div><!-- end slide item -->
                                                <div class="swiper-slide">
                                                    <div
                                                        class="card profile-project-card shadow-none profile-project-info mb-0">
                                                        <div class="card-body p-4">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                                    <h5 class="fs-14 text-truncate mb-1">
                                                                        <a href="#" class="text-body">Brand logo
                                                                            Design</a>
                                                                    </h5>
                                                                    <p class="text-muted text-truncate mb-0">
                                                                        Last Update : <span
                                                                            class="fw-semibold text-body">2
                                                                            hr Ago</span></p>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <div
                                                                        class="badge bg-warning-subtle text-warning fs-10">
                                                                        Inprogress</div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mt-4">
                                                                <div class="flex-grow-1">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <div>
                                                                            <h5 class="fs-12 text-muted mb-0">
                                                                                Members :</h5>
                                                                        </div>
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="assets/images/users/avatar-5.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div><!-- end card -->
                                                </div><!-- end slide item -->
                                                <div class="swiper-slide">
                                                    <div
                                                        class="card profile-project-card shadow-none profile-project-danger mb-0">
                                                        <div class="card-body p-4">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                                    <h5 class="fs-14 text-truncate mb-1">
                                                                        <a href="#" class="text-body">Project
                                                                            update</a>
                                                                    </h5>
                                                                    <p class="text-muted text-truncate mb-0">
                                                                        Last Update : <span
                                                                            class="fw-semibold text-body">4
                                                                            hr Ago</span></p>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <div
                                                                        class="badge bg-success-subtle text-success fs-10">
                                                                        Completed</div>
                                                                </div>
                                                            </div>

                                                            <div class="d-flex mt-4">
                                                                <div class="flex-grow-1">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <div>
                                                                            <h5 class="fs-12 text-muted mb-0">
                                                                                Members :</h5>
                                                                        </div>
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="assets/images/users/avatar-4.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="assets/images/users/avatar-5.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <!-- end card -->
                                                </div>
                                                <!-- end slide item -->
                                                <div class="swiper-slide">
                                                    <div
                                                        class="card profile-project-card shadow-none profile-project-warning mb-0">
                                                        <div class="card-body p-4">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                                    <h5 class="fs-14 text-truncate mb-1">
                                                                        <a href="#" class="text-body">Chat
                                                                            App</a>
                                                                    </h5>
                                                                    <p class="text-muted text-truncate mb-0">
                                                                        Last Update : <span
                                                                            class="fw-semibold text-body">1
                                                                            hr Ago</span></p>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <div
                                                                        class="badge bg-warning-subtle text-warning fs-10">
                                                                        Inprogress</div>
                                                                </div>
                                                            </div>

                                                            <div class="d-flex mt-4">
                                                                <div class="flex-grow-1">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <div>
                                                                            <h5 class="fs-12 text-muted mb-0">
                                                                                Members :</h5>
                                                                        </div>
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="assets/images/users/avatar-4.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="assets/images/users/avatar-5.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <div
                                                                                        class="avatar-title rounded-circle bg-light text-primary">
                                                                                        A
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <!-- end card -->
                                                </div>
                                                <!-- end slide item -->
                                            </div>

                                        </div>

                                    </div>
                                    <!-- end card body -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="projects" role="tabpanel">
                        <div class="">
                            <div class="card-body">
                                <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-1">
                                    @foreach ($teammembers as $index => $row)
                                    <div class="col">
                                        <div class="card card-body">
                                            <div class="d-flex mb-4 align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('uploads/' . $row->memberphoto) }}" alt=""
                                                        class="avatar-sm rounded-circle" />
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h5 class="card-title mb-1">{{ $row->member }}</h5>
                                                    <p class="text-muted mb-0">{{ $row->emailaddress }}</p>
                                                </div>
                                            </div>
                                            <h6 class="mb-1">MEM{{ $row->id }}</h6>
                                            <p class="card-text text-muted">{{ $row->role }}</p>
                                            <a href="javascript:void(0)" class="btn btn-primary btn-sm openModalBtn"
                                                data-record-id="{{ json_encode($row) }}" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalgrid">See Details</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane fade" id="documents" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h5 class="card-title flex-grow-1 mb-0">Documents</h5>
                                    <div class="flex-shrink-0">
                                        <input class="form-control d-none" type="file" id="formFile">
                                        <label for="formFile" class="btn btn-danger"><i
                                                class="ri-upload-2-fill me-1 align-bottom"></i> Upload
                                            File</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-borderless align-middle mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col">File Name</th>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Size</th>
                                                        <th scope="col">Upload Date</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm">
                                                                    <div
                                                                        class="avatar-title bg-primary-subtle text-primary rounded fs-20">
                                                                        <i class="ri-file-zip-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-3 flex-grow-1">
                                                                    <h6 class="fs-14 mb-0"><a href="javascript:void(0)"
                                                                            class="text-body">Artboard-documents.zip</a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Zip File</td>
                                                        <td>4.57 MB</td>
                                                        <td>12 Dec 2021</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-light btn-icon"
                                                                    id="dropdownMenuLink15" data-bs-toggle="dropdown"
                                                                    aria-expanded="true">
                                                                    <i class="ri-equalizer-fill"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end"
                                                                    aria-labelledby="dropdownMenuLink15">
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                    </li>
                                                                    <li class="dropdown-divider"></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm">
                                                                    <div
                                                                        class="avatar-title bg-danger-subtle text-danger rounded fs-20">
                                                                        <i class="ri-file-pdf-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-3 flex-grow-1">
                                                                    <h6 class="fs-14 mb-0"><a href="javascript:void(0);"
                                                                            class="text-body">Bank
                                                                            Management System</a></h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>PDF File</td>
                                                        <td>8.89 MB</td>
                                                        <td>24 Nov 2021</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-light btn-icon"
                                                                    id="dropdownMenuLink3" data-bs-toggle="dropdown"
                                                                    aria-expanded="true">
                                                                    <i class="ri-equalizer-fill"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end"
                                                                    aria-labelledby="dropdownMenuLink3">
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                    </li>
                                                                    <li class="dropdown-divider"></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm">
                                                                    <div
                                                                        class="avatar-title bg-secondary-subtle text-secondary rounded fs-20">
                                                                        <i class="ri-video-line"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-3 flex-grow-1">
                                                                    <h6 class="fs-14 mb-0"><a href="javascript:void(0);"
                                                                            class="text-body">Tour-video.mp4</a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>MP4 File</td>
                                                        <td>14.62 MB</td>
                                                        <td>19 Nov 2021</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-light btn-icon"
                                                                    id="dropdownMenuLink4" data-bs-toggle="dropdown"
                                                                    aria-expanded="true">
                                                                    <i class="ri-equalizer-fill"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end"
                                                                    aria-labelledby="dropdownMenuLink4">
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                    </li>
                                                                    <li class="dropdown-divider"></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm">
                                                                    <div
                                                                        class="avatar-title bg-success-subtle text-success rounded fs-20">
                                                                        <i class="ri-file-excel-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-3 flex-grow-1">
                                                                    <h6 class="fs-14 mb-0"><a href="javascript:void(0);"
                                                                            class="text-body">Account-statement.xsl</a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>XSL File</td>
                                                        <td>2.38 KB</td>
                                                        <td>14 Nov 2021</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-light btn-icon"
                                                                    id="dropdownMenuLink5" data-bs-toggle="dropdown"
                                                                    aria-expanded="true">
                                                                    <i class="ri-equalizer-fill"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end"
                                                                    aria-labelledby="dropdownMenuLink5">
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                    </li>
                                                                    <li class="dropdown-divider"></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm">
                                                                    <div
                                                                        class="avatar-title bg-info-subtle text-info rounded fs-20">
                                                                        <i class="ri-folder-line"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-3 flex-grow-1">
                                                                    <h6 class="fs-14 mb-0"><a href="javascript:void(0);"
                                                                            class="text-body">Project
                                                                            Screenshots Collection</a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Floder File</td>
                                                        <td>87.24 MB</td>
                                                        <td>08 Nov 2021</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-light btn-icon"
                                                                    id="dropdownMenuLink6" data-bs-toggle="dropdown"
                                                                    aria-expanded="true">
                                                                    <i class="ri-equalizer-fill"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end"
                                                                    aria-labelledby="dropdownMenuLink6">
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-eye-fill me-2 align-middle"></i>View</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-download-2-fill me-2 align-middle"></i>Download</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm">
                                                                    <div
                                                                        class="avatar-title bg-danger-subtle text-danger rounded fs-20">
                                                                        <i class="ri-image-2-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-3 flex-grow-1">
                                                                    <h6 class="fs-14 mb-0"><a href="javascript:void(0);"
                                                                            class="text-body">Velzon-logo.png</a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>PNG File</td>
                                                        <td>879 KB</td>
                                                        <td>02 Nov 2021</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-light btn-icon"
                                                                    id="dropdownMenuLink7" data-bs-toggle="dropdown"
                                                                    aria-expanded="true">
                                                                    <i class="ri-equalizer-fill"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end"
                                                                    aria-labelledby="dropdownMenuLink7">
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-eye-fill me-2 align-middle"></i>View</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-download-2-fill me-2 align-middle"></i>Download</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-center mt-3">
                                            <a href="javascript:void(0);" class="text-success "><i
                                                    class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i>
                                                Load more </a>
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
</div>
<div class="modal zoomIn" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalteamname">Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalbodyteam">
                {{--Appends Here from AJAX--}}
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="successModalLabel">Welcome {{$teamdata->teamname}}</h5>
                <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-success fw-bold">You have successfully logged in.</p>
            </div>
        </div>



    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@if(session('success'))
<script>
    $(document).ready(function(){
            $('#successModal').modal('show');
        });
</script>
@endif
<script>
    $(document).ready(function() {
        $('.openModalBtn').on('click', function() {
            var data = $(this).data('record-id');
            console.log(data);
            $('#modalbodyteam').empty();
            var modalbody = `
            <form action="javascript:void(0);">
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <label for="emailInput" class="form-label">Member Photo</label>
                                <img src="uploads/${data.memberphoto}" alt="Thumbnail"
                                        class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="emailInput" class="form-label">ID Proof Of Member</label>
                                <img src="uploads/${data.idproofmember}" alt="Thumbnail"
                                     class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mt-3">
                                <label for="emailInput" class="form-label">Member Name</label>
                                <input type="text" class="form-control" id="emailInput" readonly value="${data.member}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mt-3">
                                <label for="passwordInput" class="form-label">Mobile</label>
                                <input type="text" class="form-control" id="passwordInput" readonly value="${data.mobile}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mt-3">
                                <label for="passwordInput" class="form-label">Age</label>
                                <input type="text" class="form-control" id="passwordInput" readonly value="${data.age}">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mt-3">
                                <label for="passwordInput" class="form-label">Role</label>
                                <input type="text" class="form-control" id="passwordInput" readonly value="${data.role}">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mt-3">
                                <label for="passwordInput" class="form-label">Gender</label>
                                <input type="text" class="form-control" id="passwordInput" readonly value="${data.gender}">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mt-3">
                                <label for="passwordInput" class="form-label">Graduation Year</label>
                                <input type="text" class="form-control" id="passwordInput" readonly value="${data.graduationyear}">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mt-3">
                                <label for="passwordInput" class="form-label">Blood Group</label>
                                <input type="text" class="form-control" id="passwordInput" readonly value="${data.bloodgroup}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end mt-3">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
            `;
            $('#modalbodyteam').append(modalbody);

        });
    });
</script>
@endsection
