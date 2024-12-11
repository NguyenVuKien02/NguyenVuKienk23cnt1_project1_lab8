<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Sửa thông tin môn học: <b class="text-danger"> {{$monhoc->nvkMaMH}} </b></h3>
            </div>
            <div class="card-body">
                <form action="{{route('monhoc.editSubmit')}}" method="POST">
                    @csrf
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nvkMaMH">Mã môn học</span>
                        <input type="text" class="form-control" aria-describedby="nvkMaMH"
                            name="nvkMaMH" value="{{$monhoc->nvkMaMH}}" readonly>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nvkTenMH">Tên môn học</span>
                        <input type="text" class="form-control" aria-describedby="nvkTenMH"
                            name="nvkTenMH" value="{{$monhoc->nvkTenMH}}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nvkSoTiet">Số tiết</span>
                        <input type="number" class="form-control" aria-describedby="nvkSoTiet"
                            name="nvkSoTiet" value="{{$monhoc->nvkSoTiet}}">
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary"
                            name="btnSubmit" value="Cập nhật">
                        <a href="/monhoc" class="btn btn-secondary">Trở lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
