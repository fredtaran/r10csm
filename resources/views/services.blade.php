@extends('base')

@section('title', 'CSM | Services')

@section('page_title', 'Services')

@section('site_map')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item active">Services</li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <a href="{{ route('add-service') }}" class="btn btn-primary"><i class="nav-icon fas fa-plus"></i> Add new service</a>

        <!-- Card - List of services -->
        <div class="card mt-3">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="card-title">List of services</h3>
            </div>
            <!-- /.Card header -->

            <!-- Card body -->
            <div class="card-body text-center">
                <table id="tbl_services" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Code No.</th>
                            <th>Service Name</th>
                            <th>Division in-charge</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>GD-01</td>
                            <td>Conduct of Geohazard Identification Survey</td>
                            <td>Geoscience Division</td>
                            <td>
                                <button class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.Card body -->
        </div>
        <!-- /.Card - List of services -->
    </div>
</div>
@endsection