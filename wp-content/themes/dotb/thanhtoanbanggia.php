<?php
/**
 * @author : Nguyen Xuan Binh
 * Đơn vị : https://haravy.com
 * Link Facebook: https://www.facebook.com/100011700267483
 */

/**
 * @author : Nguyen Xuan Binh
 * Đơn vị : https://haravy.com
 * Link Facebook: https://www.facebook.com/100011700267483
 */
/*
Template Name: Thanh toán bảng giá
*/
?>


<?php


get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bảng giá</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!--    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
          rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <!--    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
    <link rel="stylesheet" href="/wp-content/themes/dotb/thanhtoanbanggia.css<?php echo '?v=1.' . mt_rand(); ?>">

</head>

<body>
<div class="modal fade" id="nhantuvan_popup" tabindex="-1" role="dialog" aria-labelledby="startupModalTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!--                <h5>Thông tin chi tiết</h5>-->
                <!--                <br/>-->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <div class="modal-body" id="id-content-popup-bao-gia">
                <?php echo do_shortcode('[contact-form-7 id="1398" title="Báo giá sơ bộ"]'); ?>

            </div>
        </div>
    </div>
</div>

<section class="bang-gia-mo-rong">
    <div class="container">
        <div class="row row-bang-gia-mo-rong-chung">
            <div class="col-sm-12">
                <div class="tong-hop-dich-vu">
                    <div class="goi-da-chon">
                        <div class="row">
                            <div class="col-12 text-center mt-3">
                                <h1>Ngân sách dự kiến</h1>
                            </div>
                        </div>
                        <h5>Chi phí cơ bản</h5>

                        <div class="row row-goi-da-chon">
                            <div class="col-sm-8">
                                <div class="test">
                                    <?php
                                    if ($_POST['name-btn-order_0']) {
                                        $tendichvugoidachon = isset($_POST['input-name-title-package_0']) ? $_POST['input-name-title-package_0'] : " ";
                                        $tongtiendachon = isset($_POST['name-input-tong-tien-da-chon_0']) ? $_POST['name-input-tong-tien-da-chon_0'] : " ";
                                        $soluonguser = isset($_POST['name-input-quantity-user']) ? $_POST['name-input-quantity-user'] : " ";


                                    } else
                                        if ($_POST['name-btn-order_1']) {
                                            $tendichvugoidachon = isset($_POST['input-name-title-package_1']) ? $_POST['input-name-title-package_1'] : " ";
                                            $tongtiendachon = isset($_POST['name-input-tong-tien-da-chon_1']) ? $_POST['name-input-tong-tien-da-chon_1'] : " ";
                                            $soluonguser = isset($_POST['name-input-quantity-user']) ? $_POST['name-input-quantity-user'] : " ";

                                        } else
                                            if ($_POST['name-btn-order_2']) {
                                                $tendichvugoidachon = isset($_POST['input-name-title-package_2']) ? $_POST['input-name-title-package_2'] : " ";
                                                $tongtiendachon = isset($_POST['name-input-tong-tien-da-chon_2']) ? $_POST['name-input-tong-tien-da-chon_2'] : " ";
                                                $soluonguser = isset($_POST['name-input-quantity-user']) ? $_POST['name-input-quantity-user'] : " ";


                                            } else {

                                            }

                                    ?>
                                    <div class="ten-goi-dv-da-chon">
                                        <!--                                    <input type="checkbox" checked onclick="return false;"/>-->
                                        <b>
                                            <?php echo $tendichvugoidachon; ?>
                                        </b>
                                        <a class="quaylai" href="#" onclick="history.back();"
                                           style="color: black;     font-size: 15px;     color: #6f6f6f;"><i
                                                    class="fas fa-edit" style="font-weight: 400"></i> Thay đổi</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="so-luong-user-da-chon">
                                                <span><?php
                                                    echo $soluonguser;
                                                    ?> user</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="thoi-gian-da-chon">
                                                <p>
                                                    <?php
                                                    $thoigianthue = isset($_POST['name-switch-dinh-ky']) ? $_POST['name-switch-dinh-ky'] : " ";
                                                    ?>
                                                </p>
                                                <?php

                                                if (isset($_POST['name-switch-dinh-ky']) && $_POST['name-switch-dinh-ky'] == 'yes') {
                                                    echo "2 năm";
                                                } else {
                                                    echo "1 năm";
                                                }

                                                ?>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-sm-4" style="display: flex; align-items: center; justify-content: center; ">
                                <div class="tong-tien-goi-da-chon" style="margin-left: 35%;">
                                    <b>
                                                                            <span class="tong-tien-da-chon">
                                    <?php
                                    echo $tongtiendachon;
                                    ?>
                                        <input type="hidden" name="tong-tien-da-chon" value="<?= $tongtiendachon ?>">
                                    </span>

                                    </b>
                                </div>

                            </div>

                        </div>


                    </div>
                    <h5 class="section-dvct-title">Dịch vụ cộng thêm (Tùy chọn) </h5>
                    <p class="section-ds-title">Những dịch vụ được thiết kế giúp cho quá trình triển khai CRM được dễ
                        dàng, thuận lợi,...</p>

                    <div class="cac_dv_cong_them">

                        <?php
                        query_posts(array(
                            'post_type' => 'dich_vu_cong_them',
                            'showposts' => 1000,
                            'order' => 'ASC'
                        ));
                        ?>
                        <?php
                        $countdv = 0;
                        ?>


                        <?php
                        $counta = 0;
                        $countb = 0;
                        $countc = 0;

                        ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <div class="list-cac-dich-vu-cong-them"
                                 id="id-list-cac-dich-vu-cong-them_<?php echo $counta++; ?>">
                                <div class="row row-dich-vu-cong-them"
                                     id="id-row-dich-vu-cong-them_<?php echo $countb++; ?>">

                                    <div class="col-sm-10">
                                        <div class="tieu-de-dich-vu-cong-them">
                                            <input class="checkbox-dg-dvct" type="checkbox"
                                                   id="checkbox-tieu-de-dich-vu-cong-them"
                                                   name="checkbox-tieu-de-dich-vu-cong-them"
                                                   value="<?php the_field("don_gia_dvct"); ?>"><span
                                                    class="service-name">

                                                <?php the_title(); ?>
                                                <div class="soluong-dvct">

                                                    <span><?php acf_form(); ?></span>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="don_gia_dvct" id="id-don_gia_dvct_<?php echo $countc++; ?>">
                                            <?php the_field("don_gia_dvct"); ?>
                                        </div>
                                    </div>

                                </div>


                            </div>

                        <?php endwhile; ?>


                    </div>
                </div>
                <div class="ngan-sach-du-kien">

                </div>
            </div>

        </div>
        <div class="row row-tongtien-gia-nut mt-3 mb-3">
            <div class="row row-tong-tien">
                <div class="col-sm-3">
                    <h4 class="text-tong-tien">Tổng tiền</h4>
                </div>
                <div class="col-sm-5">
                    <div class="total-price">
                        <b><span class="text-price">

                        </span></b>
                        <input type="hidden" name="total-price-input">

                    </div>
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-baogia " data-toggle="modal" data-target="#nhantuvan_popup">
                        <span class="text-btn">NHẬN BÁO GIÁ</span>
                    </button>
                </div>
            </div>
            <div class="row row-total-price">

            </div>
            <div class="row row-button-nhanbaogia">

            </div>
            <!--                    </div>-->

        </div>

    </div>
    <div class="container">
        <div class="row text-top">
            <?php the_field('text_gioi_thieu', 'option'); ?>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <div class="title-FAQ">
                    <h1>NHỮNG CÂU HỎI THƯỜNG GẶP</h1>
                </div>
            </div>

        </div>
    </div>
    <?php echo do_shortcode('[elementor-template id="7677"]') ?>
</section>

</body>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<script>
    $(document).ready(function ($) {
        const formatter = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND',
            minimumFractionDigits: 0
        });
        // var tiengoidachon = parseInt($('.tong-tien-da-chon').text());
        var tong_tien_da_chon = parseInt($('input[name="tong-tien-da-chon"]').val());
        var tong_tien_da_chon_text = $('.tong-tien-da-chon').text();

        if (tong_tien_da_chon_text == 0) {
            $('.text-price').text("Liên hệ");
            $('.cac_dv_cong_them').css("display", "none");
            $('.section-dvct-title').css("display", "none");
            $('.section-ds-title').css("display", "none");

            $('textarea').css("display", "none");
            $('.title-dv-ct-f').css("display", "none");
            var $nhantuvan_popup = $('#nhantuvan_popup');
            $nhantuvan_popup.on('shown.bs.modal', function () {
                var total_price = $('input[name="total-price-input"]').val();
                $nhantuvan_popup.find('input[name="name-input-tong-tien-da-chon_0"]').attr("readonly", true).val("Miễn phí");
            })


        } else

            $('.text-price').text(formatter.format(tong_tien_da_chon));
        $('input[name="total-price-input"]').val(tong_tien_da_chon);
        var tongtiendachon = $('.tong-tien-da-chon').text();
        $('.tong-tien-da-chon').text(formatter.format(tongtiendachon));
        $(".checkbox-dg-dvct").each(function (index, element) {
            var $item = $(this).closest('.list-cac-dich-vu-cong-them');
            var don_gia_dvct = parseInt($item.find('.don_gia_dvct').text());
            $item.find('.don_gia_dvct').html("<b>" + formatter.format(don_gia_dvct) + "</b>");


            $('#acf-field_626f7d8cb6ab1').change(function () {
                var x = $('#acf-field_626f7d8cb6ab1').val();
                if (x == "") {
                    $item.find('#id-don_gia_dvct_0').html("<b>" + formatter.format(parseInt(don_gia_dvct)) + "</b>");

                } else {
                    $("#acf-field_626f7d8cb6ab1").attr("value", x)
                    $item.find('#id-don_gia_dvct_0').html("<b>" + formatter.format(parseInt(x) * don_gia_dvct) + "</b>");
                }
                $('#id-list-cac-dich-vu-cong-them_0 .checkbox-dg-dvct').prop('checked', false)
            });
            $('#soluongtaikhoan input').change(function () {
                var x = $('#acf-field_6270aa03c8e8a').val();

                if (x == "") {
                    $item.find('#id-don_gia_dvct_2').html("<b>" + formatter.format(parseInt(don_gia_dvct)) + "</b>");

                } else if (x < 500) {
                    $("#acf-field_6270aa03c8e8a").attr("value", x)
                    $item.find('#id-don_gia_dvct_2').html("<b>" + formatter.format((parseInt(x) * don_gia_dvct)) + "</b>");

                } else if ((500 <= x) && (x < 1000)) {
                    $("#acf-field_6270aa03c8e8a").attr("value", x)
                    $item.find('#id-don_gia_dvct_2').html("<b>" + formatter.format((parseInt(x) * don_gia_dvct) - (parseInt(x) * don_gia_dvct * 0.1)) + "</b>");

                } else if ((1000 <= x) && (x < 2000)) {
                    $("#acf-field_6270aa03c8e8a").attr("value", x)
                    $item.find('#id-don_gia_dvct_2').html("<b>" + formatter.format((parseInt(x) * don_gia_dvct) - (parseInt(x) * don_gia_dvct * 0.15)) + "</b>");

                } else if ((2000 <= x) && (x < 5000)) {
                    $("#acf-field_6270aa03c8e8a").attr("value", x)
                    $item.find('#id-don_gia_dvct_2').html("<b>" + formatter.format((parseInt(x) * don_gia_dvct) - (parseInt(x) * don_gia_dvct * 0.2)) + "</b>");

                } else if ((5000 <= x) && (x < 10000)) {
                    $("#acf-field_6270aa03c8e8a").attr("value", x)
                    $item.find('#id-don_gia_dvct_2').html("<b>" + formatter.format((parseInt(x) * don_gia_dvct) - (parseInt(x) * don_gia_dvct * 0.3)) + "</b>");

                } else if (x >= 10000) {
                    $("#acf-field_6270aa03c8e8a").attr("value", x)
                    $item.find('#id-don_gia_dvct_2').html("<b>" + formatter.format((parseInt(x) * don_gia_dvct * 0.5)) + "</b>");
                }
                // } else {
                //     $("#acf-field_6270aa03c8e8a").attr("value", x)
                //     $item.find('#id-don_gia_dvct_2').html("<b>" + formatter.format(parseInt(x) * don_gia_dvct) + "</b>");
                // }
                $('#id-list-cac-dich-vu-cong-them_2 .checkbox-dg-dvct').prop('checked', false)
            });


        });
        var list_item = [];
        $('.checkbox-dg-dvct').click(function () {


            var total = 0;
            list_item = [];
            var tong_tien_da_chon = parseInt($('input[name="tong-tien-da-chon"]').val());
            $(".checkbox-dg-dvct").each(function (index, element) {

                var $item = $(this).closest('.list-cac-dich-vu-cong-them');

                if ($(this).is(":checked")) {

                    var value = parseInt($item.find(".don_gia_dvct").text().replaceAll(".", "").replaceAll("₫", ""));
                    total += value;

                    var service_name = $item.find('span.service-name').text().trim();
                    var soluong_dvct = $item.find('span.soluong-dvct').text().trim();

                    var item_service = `- ${service_name}`
                    var item_soluong_dvct = `- ${soluong_dvct}`
                    list_item.push(item_service);
                    list_item.push(soluong_dvct);
                    $(this).parent().parent().parent().css("border", "solid 1px #0052CC");

                }
                else
                {
                    $(this).parent().parent().parent().css("border", "solid 1px #cccccc");

                }


            });
            $('.text-price').text(formatter.format(total + parseInt(tongtiendachon)));
            $('input[name="total-price-input"]').val(total + parseInt(tongtiendachon));


        });

        var $nhantuvan_popup = $('#nhantuvan_popup');
        $nhantuvan_popup.on('shown.bs.modal', function () {
            var total_price = $('input[name="total-price-input"]').val();
            $nhantuvan_popup.find('input[name="name-input-tong-tien-da-chon_0"]').attr("readonly", true).val(formatter.format(total_price));
            $nhantuvan_popup.find('input[name="input-name-title-package_0"]').attr("readonly", true).val($('.ten-goi-dv-da-chon').text().trim());
            $nhantuvan_popup.find('input[name="name-thoi_gian_thue_0"]').attr("readonly", true).val($('.thoi-gian-da-chon').text().trim());
            $nhantuvan_popup.find('input[name="name-input-quantity-user"]').attr("readonly", true).val($('.so-luong-user-da-chon span').text().trim());
            $nhantuvan_popup.find('textarea[name="name-input-danh-sach-goi_0"]').attr("readonly", true).val(list_item.join('\n').replaceAll('Validate Email', '\n').replaceAll('Số lượng ngày công', '\n').replaceAll('Số lượng tài khoản', '\n').replace(/\n|\r/g, ""));
        })


    });
</script>
<script>
    // $( window ).on("load", function() {
    //     const formatter = new Intl.NumberFormat('vi-VN', {
    //         style: 'currency',
    //         currency: 'VND',
    //         minimumFractionDigits: 0
    //     });
    //     var don_gia_dvct =   $('.don_gia_dvct').text();
    //     console.log('don_gia_dvct');
    //     $('.don_gia_dvct').html(formatter.format(don_gia_dvct));
    // }

</script>
<script type="text/javascript">
    document.addEventListener( 'wpcf7submit', function( event ) {
        if (event.detail.status=='mail_sent'){
            location = 'https://crmedu.vn/cam-on'; //Thay thành link bạn muốn chuyển hướng
        }
    }, false );
</script>
</html>
<?php get_footer();
?>
