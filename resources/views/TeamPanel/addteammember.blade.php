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
                        <li class="breadcrumb-item"><a href="javascript: void(0);"></a>Add Team Member</li>
                        <li class="breadcrumb-item active">Add Team Member</li>
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
                    <h4 class="card-title mb-0 flex-grow-1">Add Team Member</h4>
                    <div class="flex-shrink-0">
                        <a href="{{route('allteammembersview')}}">
                            <div class="text-right float-end">
                                <button type="button" class="btn btn-primary btn-label waves-effect waves-light"><i
                                        class="ri-eye-fill label-icon align-middle fs-16 me-2"></i>View Members</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{ route('createteammember') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-3">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Name</label>
                                        <input type="text" class="form-control" id=""
                                            placeholder="enter team member name" name="membername">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Email
                                            Address&nbsp;&nbsp;<span class="text-danger">(Must be
                                                Unique)</span></label>
                                        <input type="email" class="form-control" id="valueval" placeholder="enter email"
                                            name="emailaddress">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Mobile&nbsp;&nbsp;<span
                                                class="text-danger">(Must be of 10 digits)</span></label>
                                        <input type="text" class="form-control" id="valueval"
                                            placeholder="enter your mobile number" name="mobile" maxlength="10"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Age</label>
                                        <input type="text" class="form-control" id="valueval"
                                            placeholder="enter your age" name="age">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Role</label>
                                        <input type="text" class="form-control" id="valueval"
                                            placeholder="enter your role" name="role">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="inputGroupSelect01">Gender</label>
                                    <div class="input-group">
                                        <select class="form-select" id="displaytype" name="gender" required>
                                            <option selected>Choose...</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="inputGroupSelect01">Graduation Year</label>
                                    <div class="input-group">
                                        <select class="form-select" id="displaytype" name="graduationyear" required>
                                            <option selected>Choose...</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="inputGroupSelect01">Blood Group</label>
                                    <div class="input-group">
                                        <select class="form-select" id="displaytype" name="bloodgroup" required>
                                            <option selected>Choose...</option>
                                            <option value="A +ve">A +ve</option>
                                            <option value="A -ve">A -ve</option>
                                            <option value="B +ve">B +ve</option>
                                            <option value="B -ve">B -ve</option>
                                            <option value="O +ve">O +ve</option>
                                            <option value="O -ve">O -ve</option>
                                            <option value="AB +ve">AB +ve</option>
                                            <option value="AB -ve">AB -ve</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <label for="memberphoto" class="form-label">Photo of Member</label>
                                        <input type="file" class="form-control" placeholder="enter label"
                                            name="memberphoto" value="0">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <label for="idproofmember" class="form-label">ID Proof of
                                            Member</label>
                                        <input type="file" class="form-control" placeholder="enter label"
                                            name="idproofmember" value="0">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mt-4 p-1">
                                        <button type="submit" class="btn btn-success btn-border">Add</button>
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
<div id="showmasteredit" class="modal fadeInRight" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content border-0 overflow-hidden">
            <div class="modal-header p-3 text-center">
                <h4 class="card-title mb-0 ">BTech Mart</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="alert alert-success  rounded-0 mb-0">
                <p class="mb-0 text-center">Edit Category</p>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0);">
                    <div class="row  g-3 align-items-center">
                        <div class="col-sm-4">
                            <div>
                                <label for="placeholderInput" class="form-label">Label</label>
                                <input type="text" class="form-control" id="" placeholder="enter label" name="label">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <label for="placeholderInput" class="form-label">Value</label>
                                <input type="text" class="form-control" id="valueval" placeholder="enter value"
                                    name="value" value="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <label for="placeholderInput" class="form-label">Upload Image</label>
                                <input type="file" class="form-control" id="image" placeholder="enter color"
                                    name="image">
                            </div>
                        </div>
                        <div class="col-auto text-center w-100">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
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
