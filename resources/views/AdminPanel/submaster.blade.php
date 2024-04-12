{{-- --------------------------------------------------🙏🔱ॐ नमः शिवाय🔱🙏------------------------------------- --}}
<x-app-layout>
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">AUTO SPORTS INDIA</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
                                <li class="breadcrumb-item active">Add Submaster</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Add Submaster</h4>
                            {{-- <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">

                                </div>
                            </div> --}}
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="{{ route('createsubmaster') }}" method="POST">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Select Master
                                                    Category</label>
                                                <select name="type" class="form-select mb-3"
                                                    aria-label="Default select example" id="subcategory">
                                                    <option value="">select master category</option>
                                                    @foreach ($masterdata as $row)
                                                        <option value="{{ $row->label }}">{{ $row->label }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
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
                        <div class="card-body">
                            <table class="table table-nowrap table-bordered text-center">
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
                                <tbody id="table-body">
                                    {{-- Tbody Appends Here --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        setTimeout(function() {
            $('#successAlert').fadeOut('slow');
        }, 2000);

        setTimeout(function() {
            $('#dangerAlert').fadeOut('slow');
        }, 2000);

        $('#subcategory').on('change', function() {
            var selectedCat = $(this).val();
            console.log(selectedCat);
            $.ajax({
                type: 'GET',
                url: '/getmastercatajax/' + selectedCat,
                success: function(data) {
                    console.log(data);
                    $('#table-body').empty();
                    data.forEach(function(element, index) {
                        var row = '<tr>';
                        row += '<td>' + (index + 1) + '</td>';
                        row += '<td>' + element.type + '</td>';
                        row += '<td>' + element.label + '</td>';
                        row += '<td>' + element.value + '</td>';
                        row += '<td>' + element.status + '</td>';
                        row += '<td class="align-middle white-space-nowrap  pe-0">' +
                            '<a href="/deletemastercat/' + element.id +
                            '/subcatpage"><button type="button"class="btn btn-outline-danger btn-sm">delete</button></a>' +
                            '</td>';
                        row += '</tr>';
                        $('#table-body').append(row);
                    });
                }
            });
        });
    </script>
    <script>
        function labelValue()
        {
            var label = document.getElementById('labelval').value;
            document.getElementById('valueval').value = label;
        }
    </script>
</x-app-layout>
