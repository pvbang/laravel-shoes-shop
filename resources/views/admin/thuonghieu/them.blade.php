@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>THÊM THƯƠNG HIỆU</strong>&ensp;
            <i class="fas fa-trademark"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/admin/thuonghieu/them" method="POST">
                @csrf
                <br>
                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_thuong_hieu" required/>
                    <label class="form-label" >Tên thương hiệu</label>
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
                <a href="/admin/thuonghieu" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>


@endsection