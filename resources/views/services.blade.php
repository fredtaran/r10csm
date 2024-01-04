@extends('base')

@section('title', 'CSM | Services')

@section('page_title', 'Services')

@section('page_custom_css')
<style>
    #tbl_services th,
    #tbl_services td {
        text-align: center;
    }
</style>
@endsection

@section('site_map')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item active">Services</li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-service-modal">
            <i class="nav-icon fas fa-plus"></i> Add new service
        </button>

        <!-- New service modal -->
        <div class="modal fade" id="new-service-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">New service</h4>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- New services form -->
                    <form action="{{ route('services.save_service') }}" method="POST" id="newServiceForm">
                        @csrf
                        <div class="card-body">
                            <!-- Service code -->
                            <div class="form-group">
                                <label for="service_code">Service Code No.</label>
                                <input type="text" name="service_code" class="form-control" id="service_code">
                            </div>
                            <!-- /.Service code -->

                            <!-- Service name -->
                            <div class="form-group">
                                <label for="service_name">Service Name</label>
                                <input type="test" name="service_name" class="form-control" id="service_name">
                            </div>
                            <!-- /.Service name -->

                            <!-- Division in-charge -->
                            <div class="form-group">
                                <label for="division_id">Division</label>
                                <select name="division_id" id="division_id" class="form-control">
                                    <option value="">--- Select the division in-charge ---</option>
                                    @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}">{{ $division->division_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Division in-charge -->
                        </div>

                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Discard</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                    <!-- /.New services form -->
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- /.New service modal -->

        <!-- Edit service modal -->
        <div class="modal fade" id="edit-service-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit service</h4>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Edit services form -->
                    <form method="POST" id="editServiceForm">
                        @csrf
                        <div class="card-body">
                            <!-- Service code -->
                            <div class="form-group">
                                <label for="edit_service_code">Service Code No.</label>
                                <input type="text" name="edit_service_code" class="form-control" id="edit_service_code">
                            </div>
                            <!-- /.Service code -->

                            <!-- Service name -->
                            <div class="form-group">
                                <label for="edit_service_name">Service Name</label>
                                <input type="test" name="edit_service_name" class="form-control" id="edit_service_name">
                            </div>
                            <!-- /.Service name -->

                            <!-- Division in-charge -->
                            <div class="form-group">
                                <label for="edit_division_id">Division</label>
                                <select name="edit_division_id" id="edit_division_id" class="form-control">
                                    <option value="">--- Select the division in-charge ---</option>
                                    @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}">{{ $division->division_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Division in-charge -->
                        </div>

                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Discard</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                    <!-- /.New services form -->
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- /.Edit service modal -->

        <!-- Card - List of services -->
        <div class="card mt-3">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="card-title">List of services</h3>
            </div>
            <!-- /.Card header -->

            <!-- Card body -->
            <div class="card-body">
                <table id="tbl_services" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Code No.</th>
                            <th>Service Name</th>
                            <th>Division in-charge</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- /.Card body -->
        </div>
        <!-- /.Card - List of services -->
    </div>
</div>
@endsection

@section('page_custom_script')
<!-- Page specific script -->
<script>
$(function () {
    // New service form validation
    $.validator.setDefaults({
        submitHandler: function (form) {
            form.submit();
        }
    });

    $('#newServiceForm').validate({
        rules: {
            service_code: {
                required: true,
            },

            service_name: {
                required: true,
            },

            division_id: {
                required: true,
            },
        },

        messages: {
            service_code: {
                required: "Service code is required",
            },

            service_name: {
                required: "Service name is required",
            },

            division_id: {
                required: "Please choose the division in-charge of the service",
            }
        },

        errorElement: 'span',

        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },

        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },

        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    // /.New service form validation

    // Edit service form validation
    $('#editServiceForm').validate({
        rules: {
            edit_service_code: {
                required: true,
            },

            edit_service_name: {
                required: true,
            },

            edit_division_id: {
                required: true,
            },
        },

        messages: {
            edit_service_code: {
                required: "Service code is required",
            },

            edit_service_name: {
                required: "Service name is required",
            },

            edit_division_id: {
                required: "Please choose the division in-charge of the service",
            }
        },

        errorElement: 'span',

        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },

        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },

        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    // /.Edit service form validation

    // List of services table
    var serviceTable = $('#tbl_services').DataTable({
        ajax: "{{ route('services.get_services') }}",
        columns: [
            { data: 'service_code' },
            { data: 'service_name' },
            { 
                data: 'division',
                render: function(data, type, row, meta) {
                    return data[0].division_name
                }
            },
            {
                data: null,
                render: function (data, type, row) {
                    return `<button type="button" class="btn btn-primary btn-sm updateBtn" title="Edit"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-warning btn-sm deleteBtn" title="Delete"><i class="fa fa-trash-alt"></i></button>`;
                }
            }
        ]
    });

    serviceTable.on('click', '.updateBtn', function() {
        var rowData = $('#tbl_services').DataTable().row($(this).closest('tr')).data();

        // Retrieve data
        $.ajax({
            url: "{{ url('service') }}/" + rowData.id + "/edit",
            type: "GET",
            dataType: 'json',
            success: function(response) {
                $('#editServiceForm').attr('action', "{{ url('service' )}}/" + response.service.id + "/edit");
                $('#edit_service_code').val(response.service.service_code);
                $('#edit_service_name').val(response.service.service_name);
                $('#edit_division_id option[value="' + response.service.division_id + '"]').prop('selected', true);
                $('#edit-service-modal').modal('show');

            },
            error: function(xhr, response, error) {
                console.log(error);
            }
        })
    })
    // /.List of services table

    // Delete button function
    serviceTable.on('click', '.deleteBtn', function() {
        var rowData = $('#tbl_services').DataTable().row($(this).closest('tr')).data();
        
        Swal.fire({
            title: "Delete Confirmation",
            text: "Are you sure you want to delete " + rowData.service_name + "?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Yes, delete!",
            cancelButtonText: "Cancel"
        }).then(function(result) {
            $.ajax({
                url: "{{ url('service') }}/" + rowData.id + "/delete",
                type: 'DELETE',
                dataType: 'json',
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    Swal.fire({
                        title: "Success Message",
                        text: response.message,
                        icon: "info"
                    });

                    serviceTable.ajax.reload();
                },
                error: function(xhr, response, error) {
                    console.log(error);
                }
            });
        });
    })
    // End of delete button function
});
</script>
@endsection