{{-- ------------------------------------------------🙏🔱ॐ नमः शिवाय🔱🙏----------------------------------- --}}
@extends('layouts.team')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">AUTO SPORTS INDIA</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);"></a>Edit Team Member</li>
                        <li class="breadcrumb-item active">Edit Team Member</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                @if ($mymess = Session::get('success'))
                <div class="alert border-0 alert-success text-center" role="alert" id="successAlert">
                    <strong>{{ $mymess }}</strong>
                </div>
                @endif
                @if ($mymess = Session::get('error'))
                <div class="alert border-0 alert-danger text-center" role="alert" id="dangerAlert">
                    <strong>{{ $mymess }}</strong>
                </div>
                @endif
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Edit Team Member</h4>
                    {{-- <div class="flex-shrink-0">
                        <a href="{{route('allteammembersview')}}">
                            <div class="text-right float-end">
                                <button type="button" class="btn btn-primary btn-label waves-effect waves-light"><i
                                        class="ri-eye-fill label-icon align-middle fs-16 me-2"></i>View Members</button>
                            </div>
                        </a>
                    </div> --}}
                </div>
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{route('update_team_member')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @foreach ($teams as $row)
                            <div class="row gy-4">
                                <div class="col-md-3">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Name</label>
                                        <input type="text" class="form-control" id=""
                                            placeholder="enter team member name" name="membername"
                                            value="{{$row->member}}">
                                        <input type="hidden" name="teamid" value="{{$row->id}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Email
                                            Address&nbsp;&nbsp;<span class="text-danger">(Must be
                                                Unique)</span></label>
                                        <input type="email" class="form-control" id="valueval" placeholder="enter email"
                                            name="emailaddress" value="{{$row->emailaddress}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Mobile&nbsp;&nbsp;<span
                                                class="text-danger">(Must be of 10 digits)</span></label>
                                        <input type="text" class="form-control" id="valueval"
                                            placeholder="enter your mobile number" name="mobile" maxlength="10" required
                                            value="{{$row->mobile}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Age</label>
                                        <input type="text" class="form-control" id="valueval"
                                            placeholder="enter your age" name="age" value="{{$row->age}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Role</label>
                                        <input type="text" class="form-control" id="valueval"
                                            placeholder="enter your role" name="role" value="{{$row->role}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="inputGroupSelect01">Gender</label>
                                    <div class="input-group">
                                        <select class="form-select" id="displaytype" name="gender" required>
                                            <option {{ $row->gender == 'male' ? 'selected' : '' }} value="male">Male
                                            </option>
                                            <option {{ $row->gender == 'female' ? 'selected' : '' }}
                                                value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="inputGroupSelect01">Graduation Year</label>
                                    <div class="input-group">
                                        <select class="form-select" id="displaytype" name="graduationyear" required>
                                            <option {{ $row->graduationyear == 2022 ? 'selected' : '' }}
                                                value="2022">2022</option>
                                            <option {{ $row->graduationyear == 2023 ? 'selected' : '' }}
                                                value="2023">2023</option>
                                            <option {{ $row->graduationyear == 2024 ? 'selected' : '' }}
                                                value="2024">2024</option>
                                            <option {{ $row->graduationyear == 2025 ? 'selected' : '' }}
                                                value="2025">2025</option>
                                            <option {{ $row->graduationyear == 2026 ? 'selected' : '' }}
                                                value="2026">2026</option>
                                            <option {{ $row->graduationyear == 2027 ? 'selected' : '' }}
                                                value="2027">2027</option>
                                            <option {{ $row->graduationyear == 2028 ? 'selected' : '' }}
                                                value="2028">2028</option>
                                            <option {{ $row->graduationyear == 2029 ? 'selected' : '' }}
                                                value="2029">2029</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="inputGroupSelect01">Blood Group</label>
                                    <div class="input-group">
                                        <select class="form-select" id="displaytype" name="bloodgroup" required>
                                            <option {{ $row->bloodgroup == 'A +ve' ? 'selected' : '' }} value="A +ve">A
                                                +ve</option>
                                            <option {{ $row->bloodgroup == 'A -ve' ? 'selected' : '' }} value="A -ve">A
                                                -ve</option>
                                            <option {{ $row->bloodgroup == 'B +ve' ? 'selected' : '' }} value="B +ve">B
                                                +ve</option>
                                            <option {{ $row->bloodgroup == 'B -ve' ? 'selected' : '' }} value="B -ve">B
                                                -ve</option>
                                            <option {{ $row->bloodgroup == 'O +ve' ? 'selected' : '' }} value="O +ve">O
                                                +ve</option>
                                            <option {{ $row->bloodgroup == 'O -ve' ? 'selected' : '' }} value="O -ve">O
                                                -ve</option>
                                            <option {{ $row->bloodgroup == 'AB +ve' ? 'selected' : '' }} value="AB
                                                +ve">AB +ve</option>
                                            <option {{ $row->bloodgroup == 'AB -ve' ? 'selected' : '' }} value="AB
                                                -ve">AB -ve</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <label for="memberphoto" class="form-label">Photo of Member</label>
                                        <input type="file" class="form-control" placeholder="enter label"
                                            name="memberphoto">
                                        <img src="{{ asset('uploads/' . $row->memberphoto) }}" alt="Thumbnail"
                                            class="img-fluid">
                                        <input type="hidden" name="pmemberphoto" value="{{ $row->memberphoto }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <label for="idproofmember" class="form-label">ID Proof of
                                            Member</label>
                                        <input type="file" class="form-control" placeholder="enter label"
                                            name="idproofmember">
                                        <img src="{{asset('uploads/' . $row->idproofmember)}}" alt="Thumbnail"
                                            class="img-fluid">
                                        <input type="hidden" name="pidmember" value="{{ $row->idproofmember }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mt-4 p-1">
                                        <button type="submit" class="btn btn-success btn-border">Update</button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("sa-warningid").addEventListener("click", function() {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You want to delete this Vehicle..?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
                    cancelButtonClass: "btn btn-danger w-xs mt-2",
                    confirmButtonText: '<a href="#" class="text-white">Yes, delete it!</a>',
                    buttonsStyling: false,
                    showCloseButton: true,
                });
            });
        });
</script>
<script>
    function state(rowId) {
            var btn = document.getElementById('btnid' + rowId);
            btn.disabled = true;
            btn.classList.remove('btn-success');
            btn.classList.add('btn-danger');
            btn.textContent = "Deactivated";
        }
        setTimeout(function() {
            $('#successAlert').fadeOut('slow');
        }, 2000);

        setTimeout(function() {
            $('#dangerAlert').fadeOut('slow');
        }, 2000);
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@endsection
