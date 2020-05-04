@extends('backend.master.master')
@section('title','Quản lý nhân viên')
@section('staff','class=active')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Quản lý nhân viên</h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i>Trang quản trị</a></li>
            <li class="active">Quản lý nhân viên</li>
        </ol>
    </section>
    <hr>
    <section class="content">
        <div align="right" style="margin: 20px 0;">
            <button class="btn btn-success" id="btnAdd">Add</button>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="staff_table">
                <thead>
                    <tr>
                        <td>Họ tên</td>
                        <td>Địa chỉ email</td>
                        <td>Số điện thoại</td>
                        <td>Vai trò</td>
                        <th>Thao tác</th>
                    </tr>
                </thead>
            </table>
        </div>
    </section>
    <div id="formModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thêm nhân viên</h4>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="staff_form" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-4" >Tên : </label>
                        <div class="col-md-8">
                            <input type="text" name="firstname" id="firstname" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Họ : </label>
                        <div class="col-md-8">
                            <input type="text" name="lastname" id="lastname" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Email : </label>
                        <div class="col-md-8">
                            <input type="email" name="email" id="email" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Số điện thoại : </label>
                        <div class="col-md-8">
                            <input type="text" name="phone" id="phone" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Mật khẩu : </label>
                        <div class="col-md-8">
                            <input type="password" name="password" id="password" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Nhập lại mật khẩu : </label>
                        <div class="col-md-8">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Quyền:</label>
                        <div class="col-md-8">
                            <select id="role" class="form-control" name="role">
                                <option value="1">Quản trị</option>
                                <option value="0">Nhân viên</option>
                            </select>
                        </div>
                    </div>
                    <br />
                    <div class="form-group" align="center">
                        <input type="hidden" name="action" id="action" />
                        <input type="hidden" name="hidden_id" id="hidden_id" />
                        <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Thêm" />
                    </div>
                </form>
               </div>
            </div>
        </div>
    </div>
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
                    data: 'fullname',
                    name: 'fullname'
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
            ],
            // order:[,'desc'],
            language: {
                "sProcessing": "Đang xử lý ...",
                "sLengthMenu": "Xem _MENU_ mục",
                "sZeroRecords": "Không tìm thấy kết quả",
                "sEmptyTable": "Không có dữ liệu",
                "sInfo": "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                "sInfoEmpty": "Không có dòng nào được hiển thị",
                "sInfoFiltered": "(được lọc từ _MAX_ mục)",
                "sInfoPostFix": "",
                "sSearch": "Tìm kiếm:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Đang tải ...",
                "oPaginate": {
                "sFirst": "Đầu tiên", "sLast": "Cuối cùng", "sNext": "Tiếp", "sPrevious": "Trước"
                },
                "oAria": {
                "sSortAscending": ":Sắp xếp theo thứ tự tăng dần", "sSortDescending": ": Sắp xếp theo thứ tự giảm dần"
                }
            }
        });
        $(document).ready(function(){
            $(document).on('click','#btnAdd',function(){
                $('#formModal').modal();
                $('#form_result').html('');
            })
            $(document).on('submit','#staff_form',function(e){
                e.preventDefault();
                $.ajax({
                    url : "{{ route('staff.store') }}",
                    method: "post",
                    data: $(this).serialize(),
                    dataType : 'json',
                    beforeSend :function(){
                        $('#action_button').attr('disabled','disabled');
                    },
                    success:function(response){
                        var output = '';
                        if(response.error){
                            output +="<div class='alert alert-danger'>";
                            for (let i = 0; i <response.error.length; i++) {
                               output += "<li>"+response.error[i]+"</li>";
                            }
                            output += "</div>";
                            $('#action_button').prop('disabled',false);
                            $('#form_result').html(output);
                        }else if(response.success){
                            output +="<div class='alert alert-success'>"+response.success+"</div>";
                            $('#action_button').prop('disabled',false);
                            $('#form_result').html(output);
                            $('#staff_form')[0].reset();
                            $('#staff_table').DataTable().ajax.reload();
                        }
                    }
                })
            })
        })
    </script>
@endsection