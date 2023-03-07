<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<strong>
    Tên Khách hàng 
</strong>:<i>{{$dataMail['name']}}</i>
<br>
<strong>
    Số Điện Thoại 
</strong>:<i>{{$dataMail['phone']}} </i>
<br>
<strong>
    Email
</strong>:<i>{{$dataMail['email']}}</i>
<br>
<strong>
    Ngày tháng:

</strong>:<i>{{date("d-m-Y", strtotime($dataMail['date']))}}</i>
<br>
<strong>
    @if (isset($product))
    Ghi chú
    @else
    Tuyến xe
    @endif
</strong>:<i>{{$dataMail['mess']}}</i>
<br>
@if (isset($product))
    <strong>
        Thông tin vé :
    </strong>
    <br>
    <table style="   border-collapse: collapse;
    width: 100%;">
        
        <tr>
            <th style=" padding: 15px; border: 1px solid #222222;
            text-align: left;" scope="col">Tuyến</th>
            <th style=" padding: 15px; border: 1px solid #222222;
            text-align: left;" scope="col">Loai Vé</th>
            <th style=" padding: 15px; border: 1px solid #222222;
            text-align: left;" scope="col">Giá</th>
        </tr>
    

        <tr >
            <td style=" padding: 15px; border: 1px solid #222222;
            text-align: left;">{{languageName($product->cate->name)}}</td>
            <td style=" padding: 15px; border: 1px solid #222222;
            text-align: left;">{{languageName($product->name)}}</td>
            <td style=" padding: 15px; border: 1px solid #222222;
            text-align: left;">{{number_format($product->price)}}</td>
        </tr>

    </table>
@endif
</body>
</html>

 
