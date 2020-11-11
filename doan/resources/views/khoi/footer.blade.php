{{--footer--}}
{{--<legend></legend>--}}
<?php
        // mở và thông số lượt có trong file txt
    $fp = "luottruycap.txt";
    $fo = fopen($fp, 'r');
    $fr = fread($fo, filesize($fp));
    $fr++;
    $fc = fclose($fo);
// Mở ghi lại số lượt xem = thuộc tính w, w++
    $fo = fopen($fp, 'w');
    $fw = fwrite($fo, $fr);
    $fc = fclose($fo);
?>
<table class="table" style="float: right">
    <thead>
    <tr style="float: right">
        <th>Số lượng truy cập vào website: </th>
        <th><?php echo $fr?></th>
    </tr>
    </thead>
</table>
<div class="footer" style="padding-bottom: 3em">
    <div class=" container">
        <div class="text logo animated wow fadeInLeft" data-wow-delay=".5s" style="text-align: center">
            <h1><a href="{{url('/')}}">Phong <span>Ken</span></a></h1>
            <h2><b>"Làm hài lòng mọi người"</b></h2>
        </div>
        <div class="footer-top1">
            <div class="col-md-4 animated wow fadeInRight" data-wow-delay=".5s">
                <h3><b>Phục vụ</b></h3>
                <b>Phong Ken</b> cam kết chất lượng phục vụ tốt nhất, chuyên nghiệp nhất cho mọi khách hàng bằng chính sách
                hoàn tiền và tặng quà nếu nhân viên phục vụ quí khách không chu đáo. <br> <br>
                <div class="clearfix"></div>
                <h3><b>Hỗ trợ</b></h3>
                Nếu bạn gặp rắc rối về sản phẩm hay chất lượng dịch vụ của <b>Phong Ken</b>, hãy gọi ngay đến số 0969805153
                hoặc
                inbox ở fanpage <a href="https://www.facebook.com/t.monkey96">fb.com/t.monkey96</a>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 animated wow fadeInRight" data-wow-delay=".5s">
                <br>
                Đặt hàng và thu tiền tận nơi trên toàn quốc <br>
                Liên hệ: 0969805153 <br> <br>
                <h3></h3>
                <div class="clearfix"></div>
            </div>
            {{--<div class="col-md-4 animated wow fadeInRight" data-wow-delay=".5s">--}}
                {{--<h3><b>FAQ</b></h3><br>--}}
                {{--<a href="{{url('chinh-sach-doi-tra')}}"><b>Chính sách đổi trả</b></a> <br>--}}
                {{--<a href="#"><b>Chính sách bảo hành</b></a>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</div>--}}
        </div>
    </div>
</div>
<!--footer-->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</body>
<!-- Subiz -->
<script>
    (function(s, u, b, i, z){
        u[i]=u[i]||function(){
            u[i].t=+new Date();
            (u[i].q=u[i].q||[]).push(arguments);
        };
        z=s.createElement('script');
        var zz=s.getElementsByTagName('script')[0];
        z.async=1; z.src=b; z.id='subiz-script';
        zz.parentNode.insertBefore(z,zz);
    })(document, window, 'https://widgetv4.subiz.com/static/js/app.js', 'subiz');
    subiz('setAccount', 'acpvxfalpmhkctk563c8');
</script>
<!-- End Subiz -->
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
</html>