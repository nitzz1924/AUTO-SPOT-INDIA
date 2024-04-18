{{-- ------------------------------------------------🙏🔱ॐ नमः शिवाय🔱🙏----------------------------------- --}}
@extends('layouts.team')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">AUTO SPORTS INDIA</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);"></a>All Team Members</li>
                        <li class="breadcrumb-item active">All Team Members</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="justify-content-between d-flex align-items-center mt-3 mb-4">
                <h5 class="mb-0 pb-1">All Team Members</h5>
                <a href="{{route('teammemberaddview')}}">
                    <div class="text-right float-end">
                        <button type="button" class="btn btn-success btn-label waves-effect waves-light"><i
                                class="ri-add-fill label-icon align-middle fs-16 me-2"></i>Add New Member</button>
                    </div>
                </a>
            </div>
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
    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="card tablecard">
                <div class="card-header">
                    <a href="{{route('teammemberaddview')}}">
                        <div class="text-right float-end">
                            <button type="button" class="btn btn-success btn-label waves-effect waves-light"><i
                                    class="ri-add-fill label-icon align-middle fs-16 me-2"></i>Add New Member</button>
                        </div>
                    </a>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-nowrap table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Member Name</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Age</th>
                                <th scope="col">Role</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Graduation Year</th>
                                <th scope="col">Blood Group</th>
                                <th scope="col">Member Photo</th>
                                <th scope="col">ID Proof</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teammembers as $index => $row)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $row->member }}</td>
                                <td>{{ $row->emailaddress }}</td>
                                <td>{{ $row->mobile }}</td>
                                <td>{{ $row->age }}</td>
                                <td>{{ $row->role }}</td>
                                <td>{{ $row->gender }}</td>
                                <td>{{ $row->graduationyear }}</td>
                                <td>{{ $row->bloodgroup }}</td>
                                <td><img src="{{ asset('uploads/' . $row->memberphoto) }}" alt="Thumbnail" width="100px"
                                        class="square--50"></td>
                                <td><img src="{{ asset('uploads/' . $row->idproofmember) }}" alt="Thumbnail"
                                        width="100px" class="square--50"></td>
                                <td>
                                    <button class="btn btn-success btn-border btn-sm" id="btnid{{ $row->id }}"
                                        onclick="state('{{ $row->id }}')">Dectivate</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
