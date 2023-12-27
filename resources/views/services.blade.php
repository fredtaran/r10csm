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
                    <form action="#" method="POST" id="newServiceForm">
                        <div class="card-body">
                            <!-- Service code -->
                            <div class="form-group">
                                <label for="code_no">Service Code No.</label>
                                <input type="text" name="code_no" class="form-control" id="code_no" autocomplete="off">
                            </div>
                            <!-- /.Service code -->

                            <!-- Service name -->
                            <div class="form-group">
                                <label for="service_name">Service Name</label>
                                <input type="test" name="service_name" class="form-control" id="service_name" autocomplete="off">
                            </div>
                            <!-- /.Service name -->

                            <!-- Division in-charge -->
                            <div class="form-group">
                                <label for="division">Division</label>
                                <select name="division" id="division" class="form-control">
                                    <option value="">--- Select the division in-charge ---</option>
                                    <option value="1">Office of the Regional Director</option>
                                    <option value="2">Finance and Administrative Division</option>
                                    <option value="3">Geoscience Division</option>
                                    <option value="4">Mine Management Division</option>
                                    <option value="5">Mine Safety, Environment, Social Development Division</option>
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
        submitHandler: function () {
            alert( "Form successful submitted!" );
        }
    });

    $('#newServiceForm').validate({
        rules: {
            code_no: {
                required: true,
            },

            service_name: {
                required: true,
            },

            division: {
                required: true,
            },
        },

        messages: {
            code_no: {
                required: "Service code number is required",
            },

            service_name: {
                required: "Service name is required",
            },

            division: {
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

    // List of services table
    var table = $('#tbl_services').DataTable({
        ajax: "{{ asset('data.txt') }}",
        columns: [
            { data: 'code_no' },
            { data: 'service_name' },
            { data: 'division' },
            {
                data: null,
                render: function (data, type, row) {
                    return "<button type=\"button\" class=\"btn btn-primary btn-sm updateBtn\" title=\"Delete\"><i class=\"fa fa-edit\"></i></button>";
                }
            }
        ]
    });

    table.on('click', '.updateBtn', function() {
        var rowData = $('#tbl_services').DataTable().row($(this).closest('tr')).data();

        console.log(rowData);
        table.ajax.reload();
    })
    // /.List of services table
});
</script>
@endsection