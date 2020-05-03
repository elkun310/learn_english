@extends('backend.master.master')
@section('title','Quản lý nhân viên')
@section('staff','class=active')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Staff</h1>
        <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i>Trang quản trị</a></li>
        <li class="active">Quản lý nhân viên</li>
        </ol>
    </section>

    <section class="content">
            <div align="right" style="margin: 20px 0;">
                <a class="btn btn-success" href="">Add</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="staff_table">
                    <thead>
                        <tr>
                            <td>FullName</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Role</td>
                            <th>Action</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->firstname." ".$user->lastname}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->role}}</td>
                            </tr>
                        @endforeach
                    </tbody> --}}
                </table>
            </div>
    </section>
@endsection
@section('script')
    @parent
    <script>
        $('#staff_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('staff.index') }}",
            },
            columns: [
                {
                    data: 'firstname',
                    name: 'firstname'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },
                {
                    data: 'role',
                    name: 'role'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                }
            ]
        });

        // $(document).ready( function () {
        //     $('#staff_table').DataTable();
        // } );
    </script>
@endsection