@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>THÊM KHUYẾN MÃI</strong>&ensp;
            <i class="fas fa-hand-holding-usd"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/admin/khuyenmai/sua" method="POST">
                @csrf
                <br>
                <input type="hidden" class="form-control" name="id_khuyen_mai" value="{{$khuyenmai['id_khuyen_mai']}}"/>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_khuyen_mai" value="{{$khuyenmai['ten_khuyen_mai']}}" required/>
                    <label class="form-label" >Tên khuyến mãi</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="gia_tri_khuyen_mai" value="{{$khuyenmai['gia_tri_khuyen_mai']}}" required/>
                    <label class="form-label" >Giá trị khuyến mãi</label>
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
                <a href="/admin/khuyenmai" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>


@endsection