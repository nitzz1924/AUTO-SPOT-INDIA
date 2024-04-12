{{-- --------------------------------------------------🙏🔱ॐ नमः शिवाय🔱🙏------------------------------------- --}}
<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">AUTO SPORTS INDIA</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
                            <li class="breadcrumb-item active">Add Master</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Add Master</h4>
                        {{-- <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">

                                </div>
                            </div> --}}
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <form action="{{ route('addmaster') }}" method="POST">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Label</label>
                                            <input type="text" class="form-control" id="labelval"
                                                placeholder="enter label" name="label" onchange="labelValue()">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 d-none">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Value</label>
                                            <input type="text" class="form-control" id="valueval"
                                                placeholder="enter value" name="value" value="">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div class="mt-4 p-1">
                                            <button type="submit"
                                                class="btn btn-success waves-effect waves-light">Add</button>
                                        </div>
                                        {{-- <button type="button" class="btn btn-primary btn-sm">Click me</button> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    @if ($message = Session::get('success'))
                        <div class="alert border-0 alert-success text-center" role="alert" id="successAlert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @if ($message = Session::get('failure'))
                        <div class="alert border-0 alert-danger text-center" role="alert" id="dangerAlert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="card-body table-responsive">
                        <table class="table table-nowrap table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Value</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($masterdata as $index => $row)
                                    <tr>
                                        <th scope="row" class="fw-semibold">{{ $index + 1 }}</th>
                                        <td>{{ $row->label }}</td>
                                        <td>{{ $row->value }}</td>
                                        <td>{{ $row->type }}</td>
                                        <td>{{ $row->status }}</td>
                                        <td><a href="#"><button class="btn btn-outline-danger btn-sm"
                                                    id="sa-warning{{ $row->id }}">delete</button></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- /deletemastercat/{{ $row->id }}/masterpage --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @foreach ($masterdata as $row)
                document.getElementById("sa-warning{{ $row->id }}").addEventListener("click", function() {
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You want to delete this master..?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
                        cancelButtonClass: "btn btn-danger w-xs mt-2",
                        confirmButtonText: '<a href="/deletemastercat/{{ $row->id }}/masterpage" class="text-white">Yes, delete it!</a>',
                        buttonsStyling: false,
                        showCloseButton: true,
                    });
                });
            @endforeach
        });

        function labelValue() {
            var label = document.getElementById('labelval').value;
            document.getElementById('valueval').value = label;
        }
    </script>
    <script>
        setTimeout(function() {
            $('#successAlert').fadeOut('slow');
        }, 2000);

        setTimeout(function() {
            $('#dangerAlert').fadeOut('slow');
        }, 2000);
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</x-app-layout>
