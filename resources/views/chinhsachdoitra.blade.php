@extends('khoi.mau')
@section('noidung')
    <h2 style="margin-left: 20px"> Chính sách đổi trả</h2>
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
                <li class="active">Chinh sách đổi trả</li>
            </ol>
        </div>
    </div>

    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'dk')" id="defaultOpen"><b>Điều kiện đổi hàng</b></button>
        <button class="tablinks" onclick="openCity(event, 'dhonline')"><b>Đổi hàng online</b></button>
        <button class="tablinks" onclick="openCity(event, 'ly')"><b>Lưu ý</b></button>
    </div>
    <div id="dk" class="tabcontent">
        <h3 style="margin-top: 10px"><b>Điều kiện đổi hàng</b></h3> <br>
        <p>
            PiRuby hổ trợ đổi hàng trong vòng 7 ngày. <br>
            Có hóa đơn mua hàng. <br>
            Sản phẩm phải có tag (có thể tháo rồi) và chưa sử dụng. <br>

        </p>
    </div>

    <div id="dhonline" class="tabcontent">
        <h3 style="margin-top: 10px"><b>Đổi hàng online</b></h3> <br>
        <p><b>Bước 1:</b> Liên hệ bộ phận châm sóc khách hàng quá <b>SĐT: 0909 212 434</b> để được hướng dẫn đổi trả.
            <br>
            <b>bước 2:</b> Gửi sản phẩm đổi trả và hóa đơn vào <b>Địa chỉ: Ninh Kiều Tp Cần Thơ.</b>
        </p>
    </div>

    <div id="ly" class="tabcontent" >
        <h3 style="margin-top: 10px"><b>Lưu ý</b></h3> <br>
        <p>Một hóa đơn chỉ đôi hàng một lần. <br>
            Không hoàn tiền thừa trong trường hợp sản phẩm đổi có giá trị thấp hơn sản phẩm ban đầu. <br>
            Có thể đổi từ một thành nhiều sản phẩm.
        </p>
    </div>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

@endsection