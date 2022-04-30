@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>THÊM PHÂN QUYỀN</strong>&ensp;
            <i class="fas fa-users"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/admin/phanquyen/sua" method="POST">
                @csrf
                <br>
                <input type="hidden" class="form-control" name="id_phan_quyen" value="{{$phanquyen['id_phan_quyen']}}"/>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_phan_quyen" value="{{$phanquyen['ten_phan_quyen']}}" required/>
                    <label class="form-label" >Tên phân quyền</label>
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
                <a href="/admin/phanquyen" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>


@endsection