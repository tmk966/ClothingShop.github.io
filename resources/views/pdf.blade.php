<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hóa Đơn</title>
    <style>
        body{
            font-family: DejaVu Sans;
        }
        table{
            border-collapse: collapse;
        }
        td, th{
            border: 1px solid;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Tình Trạng</th>
        <th>Số tiền</th>
        <th>Tên Người Mua</th>
    </tr>
    @foreach($hd as $hd)
        <tr>

            <td>{{$hd->id}}</td>
            <td>{{$hd->tinhTrang}}</td>
            <td>{{$hd->tongtien}}</td>
            <td>{{\App\User::where('id',$hd->iduser)->first()->name}}</td>

        </tr>
    @endforeach
</table>
</body>