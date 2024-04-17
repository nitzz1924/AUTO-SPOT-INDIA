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
        // setTimeout(function() {
        //     $('#successAlert').fadeOut('slow');
        // }, 2000);

        // setTimeout(function() {
        //     $('#dangerAlert').fadeOut('slow');
        // }, 2000);
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@endsection
