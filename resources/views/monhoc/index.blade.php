<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1>Danh sách môn học</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã môn học</th>
                            <th>Tên môn học</th>
                            <th>Số tiết</th>
                            <th class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt=0;
                        @endphp
                        @foreach ($monHocs as $item)
                                @php
                                    $stt++;
                                @endphp
                            <tr>
                                <th>{{$stt}}</th>
                                <td>{{$item->nvkMaMH}}</td>
                                <td>{{$item->nvkTenMH}}</td>
                                <td>{{$item->nvkSoTiet}}</td>
                                <td class="text-center">
                                    <a href="/monhoc/detail/{{$item->nvkMaMH}}" class="btn btn-success">
                                        Chi tiết
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="/monhoc/edit/{{$item->nvkMaMH}}" class="btn btn-primary">
                                        Sửa
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="/monhoc/delete/{{$item->nvkMaMH}}" class="btn btn-danger"
                                        onclick="return confirm('Bạn muốn xóa môn học mã: '+{{$item->nvkMaMH}});">
                                        Xóa
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/monhoc/create" class="btn btn-primary">Thêm mới</a>
            </div>
        </div>
    </section>
</body>
</html>
