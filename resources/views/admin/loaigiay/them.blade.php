@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>THÊM LOẠI GIÀY</strong>&ensp;
            <i class="fas fa-shoe-prints"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/admin/loaigiay/them" method="POST">
                @csrf
                <br>
                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_loai_giay" required/>
                    <label class="form-label" >Tên loại giày</label>
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
                <a href="/admin/loaigiay" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>


@endsection