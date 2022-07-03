@extends('layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New
                <a href="{{url('admin/room')}}" class="float-right btn btn-success btn-sm">View All</a>
            </h6>
        </div>
        <div class="card-body">
            @if(Session::has('success'))
            <p class="text-success">{{session('success')}}</p>
            @endif
            <div class="table-responsive">
                <form method="POST" action="{{url('admin/roomtype')}}">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th>Room Name</th>
                            <td><input type="text" name="name" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Details</th>
                            <td><textarea class="form-control" name="details" cols="30" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection