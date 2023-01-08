<?php
/*
Template Name: Bang gia
*/

?>
<?php header('Access-Control-Allow-Origin: *'); ?>

<?php
get_header();
the_content();
?>
<?php
//$test = "Hello Kitty";
//include( locate_template( 'thanhtoanbanggia.php', false, false ) );
//
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bảng giá</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <!--    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
          rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <!--    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
    <link rel="stylesheet" href="/wp_aocrm/wp-content/themes/dotb/banggia.css<?php echo '?v=1.' . mt_rand(); ?>">

</head>

<body>

<div class="container main-banggia-wrap">
    <div class="row row-tab-group">
        <div class="tab-group">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#id_cloud"><i class="fas fa-cloud"></i>Thuê Cloud</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#id_data_center"><i class="fas fa-server"></i> Mua trọn
                        gói (On
                        Premise)</a>
                </li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content ">
                <div class="tab-pane container active" id="id_cloud">
                    <div class="row text-top">
                        <?php the_field('text_gioi_thieu', 'option'); ?>

                    </div>
                    <h3 class="text-center">
                        Bảng giá
                    </h3>
                    <form action="http://crmedu.vn/thanh-toan-bang-gia" method="POST" id="id-form-gui-du-lieu"
                          class="form-gui-du-lieu">

                        <div class="row quantity-user">
                            <div class="col-sm-8 many-user"><h4>Bạn có bao nhiêu người dùng? </h4></div>

                            <div class="col-sm-3"><input id="input-quantity-user" name="name-input-quantity-user"
                                                         type="number" style="width: 100%"
                                                         value="" required autocomplete="off" min="1">


                            </div>
                            <div class="col-sm-1">
                                <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top"
                                   title="Nhập số lượng nhân viên quản trị hệ thống mà bạn muốn mua. Ví dụ: Số lượng nhân viên sale, chăm sóc khách hàng, quản lý giáo vụ, kế toán, IT,...  "
                                   style="    margin-left: -100%;"></i>
                            </div>

                        </div>
                        <div class="row switch-button text-center">
                        <span class="three">
                              <p>Chu kỳ thanh toán: &nbsp;</p>

                           <div class="switch-group"> <span href="#" style="    font-size: 20px;">
                            1 năm &nbsp;
                        </span>
                        <div class="custom-control custom-switch">


                            <label class="switch-vip">
                            <input type="checkbox" id="showPriceCheckBox" name="name-switch-dinh-ky" value="yes">
                            <span class="slider round"></span>
                        </label>    <span href="#" style="    font-size: 20px; ">
                            &nbsp;2 năm
                        </span></label><span>
                                <img src="/wp-content/uploads/2022/03/360_F_215030379_nXLofj0JbIAZDdkjQ971PsPdl7UK6yXk-removebg-preview.png"
                                     alt="" style="    width: 70px; margin-top: -8px;">
                            </span>
</div>
                        </div>

                        </span>
                        </div>
                        <div class="row">


                        </div>


                        <section class="pricing-table">
                            <div class="container">

                                <div class="row justify-content-md-center three-price">
                                    <?php
                                    query_posts(array(
                                        'post_type' => 'bang_gia',
                                        'taxonomy' => 'user_tier',
                                        'showposts' => 4,
                                        'order' => 'ASC'
                                    ));
                                    ?>
                                    <?php
                                    $countx = 0;
                                    $county = 0;
                                    $countzt = 0;
                                    $counte = 0;
                                    $counth = 0;
                                    $countform = 0;
                                    $countnbtn = 0;
                                    $counttt = 0;
                                    $counti = 0;
                                    $countyz = 0;
                                    $countstdc = 0;
                                    $countmtn = 0;
                                    $countuserdc = 0;
                                    $countvuotqua = 0;

                                    ?>

                                    <?php while (have_posts()) : the_post(); ?>

                                        <div class="col-sm-4 row-eq-height" id="id_rowh_<?php echo $countx++; ?>">

                                            <div class="item">
                                                <div id="don-gia-cac-goi" name="name-don-gia-cac-goi">
                                                    <?php the_field('don_gia_cac_goi'); ?>
                                                </div>
                                                <div class="ribbon">Phổ biến</div>
                                                <div class="heading">
                                                    <h3 name="name-title-package"
                                                        id="id-title-package_<?php echo $countzt++; ?>"
                                                        value=""><?php the_title(); ?></h3>
                                                    <input type="text" hidden
                                                           name="input-name-title-package_<?php echo $counti++; ?>"
                                                           value="<?php the_title(); ?>"
                                                           id="id-input-name-title-package_<?php echo $counth++; ?>">

                                                </div>

                                                <div class="price">
                                                    <h1 id="input-quantity-user-display_<?php echo $county++; ?>"
                                                        class="don_gia_thang">
                                                    </h1>
                                                </div>
                                                <div class="goi-user-da-chon">
                                                        <span class="span-goi-user-da-chon">
                                                        <b class="hien-thi-goi-user-da-chon"
                                                           id="id-hien-thi-goi-user-da-chon_<?php echo $countuserdc++; ?>"></b>
                                                    </span>


                                                </div>
                                                <div class="motangan" id="id_motangan_<?php echo $countmtn++; ?>">
                                                    <p><?php the_field('mo_ta_ngan'); ?></p>
                                                    <input type="text" hidden
                                                           name="name-input-tong-tien-da-chon_<?php echo $countstdc++; ?>"
                                                           id="id-input-tong-tien-da-chon_<?php echo $counttt++; ?>"
                                                           class="input-tong-tien-da-chon" value="">
                                                </div>

                                                <!--POPUP nut bao gia startup-->
                                                <div class="modal fade" id="popup-dung-thu-startup" tabindex="-1"
                                                     role="dialog"
                                                     aria-labelledby="startupModalTitle"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <!--                                                                <h4>Thông tin chi tiết</h4>-->
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left"
                                                                 id="id-content-popup-dung-thu-startup">
                                                                <div class="form-an"
                                                                     style="visibility: hidden; display:none;">
                                                                    <?php echo
                                                                    do_shortcode('[contact-form-7 id="7668" title="Đăng ký gói Startup"]');
                                                                    ?>
                                                                </div>

                                                                <div class="form-hien">
                                                                    <?php echo
                                                                    do_shortcode('[contact-form-7 id="7668" title="Đăng ký gói Startup"]');
                                                                    ?>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Popup lien he goi GrowFast-->
                                                <div class="modal fade" id="popup-lien-he-growfast" tabindex="-1"
                                                     role="dialog"
                                                     aria-labelledby="startupModalTitle"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <!--                                                                <h4>Thông tin chi tiết</h4>-->
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left"
                                                                 id="id-content-popup-lien-he-growfast">
                                                                <?php echo
                                                                do_shortcode('[contact-form-7 id="7683" title="popup-lien-he-growfast"]');
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Popup lien he goi Scaleup-->
                                                <div class="modal fade" id="popup-lien-he-scaleup" tabindex="-1"
                                                     role="dialog"
                                                     aria-labelledby="startupModalTitle"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <!--                                                                <h4>Thông tin chi tiết</h4>-->
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left"
                                                                 id="id-content-popup-lien-he-scaleup">
                                                                <?php echo
                                                                do_shortcode('[contact-form-7 id="7684" title="popup-lien-he-scaleup"]');
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row row-order">
                                                    <div class="col">
                                                        <input class="btn btn-order" type="submit"
                                                               id="id-btn-order_<?php echo $counte++; ?>"
                                                               name="name-btn-order_<?php echo $countyz++; ?>"
                                                               value="Báo giá">
                                                        <!--                                                        <span class="span-noticesoluonguser">-->
                                                        <!--                                                             <p><i class="noticesoluonguser"-->
                                                        <!--                                                                   id="noticesoluonguser_-->
                                                        <?php //echo $countvuotqua++; ?><!--"></i>-->
                                                        <!--                                                             </p>-->
                                                        <!--                                                        </span>-->

                                                        <div id="content-popup-hidden">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="features">
                                                    <?php
                                                    if (have_rows('tinh_nang')):
                                                        $values = get_field_object('tinh_nang', get_the_ID())['value'];
                                                        foreach ($values as $key => $value) {

                                                            echo "<table class ='table table-striped table-list-feature'>";
                                                            echo "<tr>";
                                                            echo "<td>" . $value['ten_tinh_nang'] . "</td>";
                                                            if (!empty($value['noi_dung_popup'])) {
                                                                echo '<td><p><i class="fas fa-question-circle" data-toggle="modal" data-target="#startupModal_' . get_the_ID() . '_' . $key . '"></i></p></td>';
                                                            }
                                                            echo "<td id='noi-dung-pop-up-id'>$sub_value3 </td>";

                                                            echo "</tr>   ";
                                                            echo "</table>";
                                                            if (!empty($value['noi_dung_popup'])) {
                                                                echo '
                    <div class="modal fade" id="startupModal_' . get_the_ID() . '_' . $key . '" tabindex="-1" role="dialog" aria-labelledby="startupModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>Thông tin chi tiết</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="id-content-popup">';

                                                                echo $value['noi_dung_popup'];


                                                                echo '                              </div>
                            </div>
                        </div>
                    </div>';
                                                            }

                                                        }

                                                    else :
                                                        // no rows found
                                                    endif;

                                                    ?>

                                                </div>

                                            </div>
                                        </div>
                                        <!--                                    </form>-->
                                    <?php endwhile; ?>


                                </div>
                            </div>

                        </section>
                    </form>

                </div>
                <div class="tab-pane container fade" id="id_data_center">

                    <div class="row text-top">
                        <?php the_field('text_gioi_thieu', 'option'); ?>

                    </div>


                    <div class="row price-onpremise">
                        <div class="col-sm-6 column-left w-90">
                            <?php
                            query_posts(array(
                                'post_type' => 'goi_on_premise',
                                'showposts' => 1000,
                                'order' => 'ASC'
                            ));
                            ?>
                            <div class="div-text-tren-dropdown">
                                <?php the_field('text_tren_dropdown', 'option'); ?>
                            </div>
                            <select name="chon-so-luong-user" id="id-chon-so-luong-user">
                                <option id="id-option-onprmise" disabled selected value>Chọn số lượng user</option>
                                <?php while (have_posts()) : the_post(); ?>

                                    <option id="id-option-onprmise" value="<?php the_field('gia_goi'); ?>"
                                            dexuat="<?php the_field('ha_tang_data_center_dap_ung_de_xuat'); ?>"
                                            data-val="<?php the_title(); ?>"><?php the_title(); ?></option>


                                <?php endwhile; ?>
                            </select>
                            <input type="hidden" name="soluong-hidden">

                            <div class="gia-tri-tuong-ung">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="div-gia-goi">
                                            Tổng giá trị sở hữu <br/>
                                            VĨNH VIỄN TRỌN ĐỜI:
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="div-gia-goi">
                                            <b><span id="id-gia-goi" style="font-size: 24px !important;"></span></b>
                                            <input type="hidden" name="giagoi-hidden">
                                        </div>

                                    </div>
                                </div>
                                <hr/>
                                <div class="ha-tang-data-center-dap-ung-de-xuat">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            Chi phí hạ tầng máy chủ (server) đáp ứng đề xuất
                                            <i>(Khách hàng có thể tự trang bị)</i>

                                        </div>
                                        <div class="col-sm-6">
                                            <div class="ha-tang-data-center-dap-ung-de-xuat">
                                                <b><span id="id-ha-tang-data-center-dap-ung-de-xuat"
                                                         style="font-weight: 400"></span></b>
                                                <input type="hidden" name="datacenter-hidden">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12 text-center mt-1">
                                    <div class="modal fade" id="popup-dang-ky-on-premise" tabindex="-1" role="dialog"
                                         aria-labelledby="startupModalTitle"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <!--                                                    <h4>Thông tin chi tiết</h4>-->
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left"
                                                     id="id-content-popup-dang-ky-on-premise">
                                                    <?php echo
                                                    do_shortcode('[contact-form-7 id="7657" title="form-popup-dang-ky-on-premise"]');
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <button class="btn btn-baogia" data-toggle="modal"
                                            data-target="#popup-dang-ky-on-premise" style=" padding: 5px 15% 5px 15%; ">
                                        Đăng ký
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 column-right">

                            <?php the_field('text_tinh_nang', 'option'); ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="user_tier_grow_fast-section">
    <div class="container">
        <div class="row">
            <?php
            query_posts(array(
                'post_type' => 'user_tier_grow_fast',
                'showposts' => 1000,
                'order' => 'ASC'
            ));
            ?>
            <?php
            $count = 0;
            ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="display-user_tier_grow_fast-section" id="pack_<?php echo $count++; ?>"
                     data-min="<?php the_field("so_min"); ?>" data-max="<?php the_field("so_max"); ?>"
                     data-price="<?php the_field("gia_chung"); ?>" data-tieude="<?php the_title(); ?>">
                </div>
                <!--                <div class="display-user_tier_scale-up-section" id="pack_--><?php //echo $count++; ?><!--"-->
                <!--                     data-min="--><?php //the_field("so_min"); ?><!--" data-max="--><?php //the_field("so_max"); ?><!--"-->
                <!--                     data-price="--><?php //the_field("gia_chung"); ?><!--" data-tieude="--><?php //the_title(); ?><!--">-->
                <!--                </div>-->

            <?php endwhile; ?>
        </div>
    </div>
</div>
<div class="user_tier_scale-up-section">
    <div class="container">
        <div class="row">
            <?php
            query_posts(array(
                'post_type' => 'user_tier_scaleup',
                'showposts' => 1000,
                'order' => 'ASC'
            ));
            ?>
            <?php
            $count = 0;
            ?>
            <?php while (have_posts()) : the_post(); ?>

                <div class="display-user_tier_scale-up-section" id="pack_scaleup_<?php echo $count++; ?>"
                     scale-data-min="<?php the_field("so_min"); ?>" scale-data-max="<?php the_field("so_max"); ?>"
                     scale-data-price="<?php the_field("gia_chung"); ?>" scale-data-tieude="<?php the_title(); ?>">
                </div>

            <?php endwhile; ?>
        </div>

    </div>

</div>


<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="text-bottom-notice">-->
<!--            Nếu Quý khách hàng cần trao đổi hoặc tư vấn trực tiếp vui lòng gọi cho chúng tôi qua số di động: <a-->
<!--                    href="tel:0961269091">096 126 9091</a> (gặp Mr. Huy) để chúng tôi phục vụ Quý khách hàng tốt nhất.-->
<!--            Chúng tôi trân trọng được đồng hành, hỗ trợ và phát triển cùng Quý khách hàng.-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
</body>
<!--<button class="testbtn btn-outline-primary">-->
<!--    test ngay-->
<!--</button>-->
<!--<div class="hien-api-acesstoken">-->
<!---->
<!--</div>-->
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<script>


    $("#id-chon-so-luong-user").change(function () {

        var val1 = $('#id-chon-so-luong-user option:selected').val();
        $("#id-gia-goi").text(val1);


        var val2 = $("#id-chon-so-luong-user option:selected ").attr("dexuat");

        $("#id-ha-tang-data-center-dap-ung-de-xuat").text(val2);
        const formatter = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND',
            minimumFractionDigits: 0
        })

        $('#id-ha-tang-data-center-dap-ung-de-xuat').html(formatter.format(val2) + "<span id='id-tren-nam' style='color: #2288F9'>/ tháng</span>");
        $('#id-gia-goi').html(formatter.format(val1));
        if (val1 === '') {
            $("#id-gia-goi").text('Liên hệ');
            $("#id-ha-tang-data-center-dap-ung-de-xuat").text('Liên hệ');


        }
        var tonggiatr_op = parseInt($("#id-gia-goi").html().replaceAll(".", "").replaceAll("₫", ""));
        var songuoidung_lonnhat = $("#id-chon-so-luong-user option:selected ").html().replaceAll("Gói", "").replaceAll("user", "").trim();

        $(".don-gia-onpremise").text(formatter.format(tonggiatr_op / songuoidung_lonnhat));
        if (isNaN(tonggiatr_op)) {
            $(".don-gia-onpremise").text("giá liên hệ");

        }
    });
    $(document).ready(function () {

    });
    $("ul.nav-tabs a").click(function (e) {
        e.preventDefault();
        $(this).tab("show");
    });

    // Xử lý bảng giá Startup

    // $(document).ready(function () {
    //
    //     const formatter = new Intl.NumberFormat('vi-VN', {
    //         style: 'currency',
    //         currency: 'VND',
    //         minimumFractionDigits: 0
    //     })
    //     $('#input-quantity-user-display_0').text(formatter.format(0));
    //
    //
    //     // $('#input-quantity-user').on("input", function () {
    //     //
    //     //     let price = 0;
    //     //     const inputUser = $('#input-quantity-user').val();
    //     //
    //     //
    //     //     $('#input-quantity-user-display_0').text(formatter.format(0));
    //     //
    //     //     if (Number.isNaN(inputUser) || inputUser == '') {
    //     //         $('#input-quantity-user-display_0').text(formatter.format(price));
    //     //     }
    //     //     else {
    //     //         $('#input-quantity-user-display_0').text(formatter.format(price));
    //     //
    //     //     }
    //     // });
    //
    //
    // });
    $(document).ready(function () {
        const formatter = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND',
            minimumFractionDigits: 0
        })
        $('#input-quantity-user-display_0').text(formatter.format(0));
        $('#id-btn-order_0').val("Đăng ký");

        $('#input-quantity-user').on("input", function () {

            const inputUser = parseInt($('#input-quantity-user').val());

            if (inputUser > 4) {
                $('#id-btn-order_0').val("Khóa đăng ký");

                $('#input-quantity-user-display-pack').text('Quý Khách hàng vui lòng để lại thông tin, đội ngũ DOTB sẽ liên hệ đến Quý Khách hàng sớm nhất.');

                $("#id-hien-thi-goi-user-da-chon_0").hide();

                $("#time-compare").hide();

                $(".tong_gia_tri").hide();


                $('#id-btn-order_0')
                    .attr("data-toggle", "modal")
                    .attr("data-target", "#popup-dung-thu-startup")
                    .attr("aria-hidden", "true")
                    .attr("type", "button");
                $('#id-btn-order_0')
                    .attr("data-toggle", "modal")
                    .attr("data-target", "#popup-dung-thu-startup")
                    .attr("aria-hidden", "true")
                    .attr("type", "button")
                    .removeClass("btn btn-order")
                    .attr("class", "custom-btn")
                ;
                $("#id-btn-order_0").attr("disabled", "");
                $("#id-hien-thi-goi-user-da-chon_0").show();

                $("#id-hien-thi-goi-user-da-chon_0").html("Chỉ phù hợp với 1-3 người dùng");
                // var insert_text='Khóa đăng ký';
                $("#id-btn-order_0").attr("style", "background-image: linear-gradient(135deg, #d5d5d5 0%, #d9d9d9 100%) !important;");
                // $(".custom-btn").attr("style","color:white !important");
                // $( ".id-btn-order_0" ).hover(
                //     function() {
                //         $( this ).append( $( "<span> ***</span>" ) );
                //     }
                // );


            } else {
                $('#id-btn-order_0').val("Đăng ký");

                $('#id-btn-order_0').removeAttr("data-toggle")
                    .removeAttr("data-target")
                    .removeAttr("aria-hidden")
                    .attr("type", "submit")


                $('#id-btn-order_0')
                    .attr("data-toggle", "modal")
                    .attr("data-target", "#popup-dung-thu-startup")
                    .attr("aria-hidden", "true")
                    .attr("type", "button");
                $("#id-hien-thi-goi-user-da-chon_0").text("Gói 1-3 user");
                $("#id-hien-thi-goi-user-da-chon_0").show();
                // $("#id_rowh_0").css("border", "#0052CC solid 3px");
                $("#id-btn-order_0").removeAttr("disabled");
                $("#noticesoluonguser_0").hide();
                $("#id-btn-order_0").removeAttr("style");


            }
            // if (inputUser < 4) {
            //     $("#id-hien-thi-goi-user-da-chon_0").text("Gói 1-3 user");
            //     $("#id-hien-thi-goi-user-da-chon_0").show();
            //     // $("#id_rowh_0").css("border", "#0052CC solid 3px");
            //     $("#id-btn-order_0").removeAttr("disabled");
            //     $("#noticesoluonguser_0").hide();
            //     $("#id-btn-order_0").removeAttr("style");
            //
            //     $("#id-btn-order_0").hover(function(){
            //         $("#id-btn-order_0").css("color", "#0052CC");
            //         $("#id-btn-order_0").css("background-image", "linear-gradient(135deg, #ffffff 0%, #ffffff 100%) !important");
            //
            //     });
            //     $("#id-btn-order_0").mouseleave(function(){
            //         $("#id-btn-order_0").css("color", "white");
            //         // $("#id-btn-order_0").css("background-image", "white");
            //
            //     });
            // } else {
            //     $("#id-hien-thi-goi-user-da-chon_0").hide();
            //     $("#id_rowh_0").css("border", "unset");
            //     $("#id-btn-order_0").attr("disabled", "");
            //     $("#id-hien-thi-goi-user-da-chon_0").show();
            //
            //     $("#id-hien-thi-goi-user-da-chon_0").html("Chỉ phù hợp với 1-3 người dùng");
            //     $("#id-btn-order_0").attr("style","background-image: linear-gradient(135deg, #3d3d3d 0%, #3d3d3d 100%) !important");
            //     // $(".elementor-kit-5 input[type="button"]:hover").attr("style","background-image: linear-gradient(135deg, #3d3d3d 0%, #3d3d3d 100%) !important; color:white; border: none !important;");
            //
            //     $("#id-btn-order_0").mouseenter(function(){
            //         $("#id-btn-order_0").attr("style","background-image: linear-gradient(135deg, #3d3d3d 0%, #3d3d3d 100%) !important; color:white; border: none !important;");
            //
            //     });
            //
            // }
        });
    });

    // Xử lý bảng giá Grow Fast
    $(document).ready(function () {
        const formatter = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND',
            minimumFractionDigits: 0
        })
        var dongiagrowfast = $('#id_rowh_1 #don-gia-cac-goi').text();
        $('#input-quantity-user-display_1').text(formatter.format(dongiagrowfast)).append(" / USER");
        $('#input-quantity-user-display_1').text(formatter.format(dongiagrowfast)).append(" / USER");

        $('#time-compare').text(" trên 1 năm");

        $("#showPriceCheckBox").change(function () {

            var checked = $("#showPriceCheckBox").is(':checked');

            var currentPrice = $('#input-quantity-user-display-pack').text();
            var price = parseInt(currentPrice.replaceAll(".", "").replaceAll("₫", ""));

            if (checked) {
                if (Number.isInteger(price)) {
                    let lastPrice = $('#input-quantity-user-display-pack').text();
                    var lastPricehai = parseInt(currentPrice.replaceAll(".", "").replaceAll("₫", ""));

                    let lastPriceba = lastPricehai * 2 - (lastPricehai * 2 * 0.25);
                    $('#input-quantity-user-display-pack').text(formatter.format(lastPriceba));
                    $('#id-input-tong-tien-da-chon_1').attr("value", lastPriceba);

                    $('#time-compare').text(" trên 2 năm");

                }
            } else {
                if (Number.isInteger(price)) {
                    let giatri = $('#input-quantity-user-display-pack').text();
                    var giatrihai = parseInt(giatri.replaceAll(".", "").replaceAll("₫", ""));

                    let giatriba = giatrihai / 1.5;
                    // let lastPrice = price / 2;
                    $('#input-quantity-user-display-pack').text(formatter.format(giatriba));
                    $('#id-input-tong-tien-da-chon_1').attr("value", giatriba);


                    $('#time-compare').text(" trên 1 năm");
                }
            }
        });

        $('#input-quantity-user').on("input", function () {

            var checked = $("#showPriceCheckBox").is(':checked');
            const inputUser = parseInt($('#input-quantity-user').val());

            // if (Number.isNaN(inputUser) || inputUser == 0) {
            //     $('#input-quantity-user-display_0').text('');
            //     // $('#input-quantity-user-display_1').text('');
            //     // $('#input-quantity-user-display_2').text('');
            //     return false;
            // }
            var arr = [];

            $(".display-user_tier_grow_fast-section").each(function () {
                var min = parseInt($(this).attr("data-min"));
                var max = parseInt($(this).attr("data-max"));
                var price = parseInt($(this).attr("data-price"));
                var ten_goi = $(this).attr("data-tieude");

                if (!isNaN(max)) {
                    arr.push(max)

                }


                if (inputUser >= parseInt(min) && inputUser <= parseInt(max)) {
                    $("#id-hien-thi-goi-user-da-chon_1").text(ten_goi);

                    // console.log("true "+inputUser);
                    var lastPrice = checked ? price * 2 - (price * 2 * 0.25) : price;
                    $('#input-quantity-user-display-pack').text(formatter.format(lastPrice));
                    // if()
                    // Code sau
                    var checked = $("#showPriceCheckBox").is(':checked');
                    if (checked) {
                        var dongiagrowfast = (lastPrice) / max / 12;
                        $('#input-quantity-user-display_1').text(formatter.format(dongiagrowfast)).append(" / USER");
                        $('#time-compare').text(" trên 2 năm");
                        $('#id-input-tong-tien-da-chon_1').attr("value", lastPrice);
                    } else {
                        var dongiagrowfast = lastPrice / max / 12;
                        $('#input-quantity-user-display_1').text(formatter.format(dongiagrowfast)).append(" / USER");
                        $('#time-compare').text(" trên 1 năm");
                        $('#id-input-tong-tien-da-chon_1').attr("value", lastPrice);
                        $("#time-compare").show();

                        $(".tong_gia_tri").show();
                    }


                }

                if (inputUser > findMax(arr)) {
                    $("#id-hien-thi-goi-user-da-chon_1").text(ten_goi);

                } else {

                }


            });
            if (inputUser > findMax(arr)) {
                $('#input-quantity-user-display-pack').text('Quý Khách hàng vui lòng để lại thông tin, đội ngũ DOTB sẽ liên hệ đến Quý Khách hàng sớm nhất.');
                $('#id-input-tong-tien-da-chon_1').attr("value", "0");
                $("#input-quantity-user-display_1").text("Liên hệ");
                $("#time-compare").hide();

                $(".tong_gia_tri").hide();

                $('#id-btn-order_1').val("Liên hệ");
                $('#id-btn-order_1')
                    .attr("data-toggle", "modal")
                    .attr("data-target", "#popup-lien-he-growfast")
                    .attr("aria-hidden", "true")
                    .attr("type", "button");


            } else {
                $('#id-btn-order_1').removeAttr("data-toggle")
                    .removeAttr("data-target")
                    .removeAttr("aria-hidden")
                    .attr("type", "submit")
                $('#id-btn-order_1').val("Báo giá");

            }
        });
    });


    // Xử lý bảng giá Scale Up

    $(document).ready(function () {
        const formatter = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND',
            minimumFractionDigits: 0
        })
        var dongiascaleup = parseInt($('#id_rowh_2 #don-gia-cac-goi').text());
        $('#id_rowh_2 #input-quantity-user-display_2').text(formatter.format(dongiascaleup)).append(" / USER");
        $('#id_rowh_2 #time-compare').text(" trên 1 năm");

        $("#showPriceCheckBox").change(function () {

            var checked = $("#showPriceCheckBox").is(':checked');

            var currentPrice = $('#id_rowh_2 #input-quantity-user-display-pack_2').text();
            var price = parseInt(currentPrice.replaceAll(".", "").replaceAll("₫", ""));

            if (checked) {
                if (Number.isInteger(price)) {
                    let lastPrice = $('#id_rowh_2 #input-quantity-user-display-pack_2').text();
                    var lastPricehai = parseInt(currentPrice.replaceAll(".", "").replaceAll("₫", ""));

                    let lastPriceba = lastPricehai * 2 - (lastPricehai * 2 * 0.25);
                    $('#id_rowh_2 #input-quantity-user-display-pack_2').text(formatter.format(lastPriceba));
                    $('#id-input-tong-tien-da-chon_2').attr("value", lastPriceba);

                    $('#id_rowh_2 #time-compare').text(" trên 2 năm");

                }
            } else {
                if (Number.isInteger(price)) {
                    let giatri = $('#id_rowh_2 #input-quantity-user-display-pack_2').text();
                    var giatrihai = parseInt(giatri.replaceAll(".", "").replaceAll("₫", ""));

                    let giatriba = giatrihai / 1.5;
                    // let lastPrice = price / 2;
                    $('#id_rowh_2 #input-quantity-user-display-pack_2').text(formatter.format(giatriba));
                    $('#id-input-tong-tien-da-chon_2').attr("value", giatriba);

                    $('#id_rowh_2 #time-compare').text(" trên 1 năm");

                }
            }
        });

        $('#input-quantity-user').on("input", function () {

            var checked = $("#showPriceCheckBox").is(':checked');
            const inputUser = parseInt($('#input-quantity-user').val());
            var dongiascaleup = parseInt($('#id_rowh_2 #don-gia-cac-goi').text());

            if (Number.isNaN(inputUser) || inputUser == 0) {
                $('#id_rowh_2 #input-quantity-user-display_2').text(formatter.format(dongiascaleup)).append(" / USER");
                // $('#input-quantity-user-display_1').text('');
                // $('#input-quantity-user-display_2').text('');
                return false;
            }

            var arr = [];
            $(".display-user_tier_scale-up-section").each(function () {
                var min = parseInt($(this).attr("scale-data-min"));
                var max = parseInt($(this).attr("scale-data-max"));
                var price = parseInt($(this).attr("scale-data-price"));
                var ten_goi_scaleup = $(this).attr("scale-data-tieude");


                if (!isNaN(max)) {
                    arr.push(max)
                }

                if (inputUser >= parseInt(min) && inputUser <= parseInt(max)) {
                    $("#id-hien-thi-goi-user-da-chon_2").text(ten_goi_scaleup);
                    var lastPrice = checked ? price * 2 - (price * 2 * 0.25) : price;
                    $('#id_rowh_2 #input-quantity-user-display-pack_2').text(formatter.format(lastPrice));
                    $('#id-input-tong-tien-da-chon_2').attr("value", lastPrice);
                    // Code sau
                    var checked = $("#showPriceCheckBox").is(':checked');
                    if (checked) {
                        var dongiascaleup = (lastPrice) / max / 12;
                        $('#input-quantity-user-display_2').text(formatter.format(dongiascaleup)).append(" / USER");
                        $('#time-compare').text(" trên 2 năm");
                        $('#id-input-tong-tien-da-chon_2').attr("value", lastPrice);
                    } else {
                        var dongiascaleup = lastPrice / max / 12;
                        $('#input-quantity-user-display_2').text(formatter.format(dongiascaleup)).append(" / USER");
                        $('#time-compare').text(" trên 1 năm");
                        $('#id-input-tong-tien-da-chon_2').attr("value", lastPrice);
                        $("#id_rowh_2 #time-compare").show();
                        $(".tong_gia_tri").show();
                    }

                }
                if (inputUser > findMax(arr)) {
                    $("#id-hien-thi-goi-user-da-chon_2").text(ten_goi_scaleup);

                } else {

                }


            });

            if (inputUser > findMax(arr)) {

                $('#id_rowh_2 #input-quantity-user-display-pack_2').text('Quý Khách hàng vui lòng để lại thông tin, đội ngũ DOTB sẽ liên hệ đến Quý Khách hàng sớm nhất.');
                $('#id-input-tong-tien-da-chon_2').attr("value", "0");
                $("#input-quantity-user-display_2").text("Liên hệ");
                $("#id_rowh_2 #time-compare").hide();

                $(".tong_gia_tri").hide();

                $('#id_rowh_2  #id-btn-order_2').val("Liên hệ");
                $('#id_rowh_2 #id-btn-order_2')
                    .attr("data-toggle", "modal")
                    .attr("data-target", "#popup-lien-he-scaleup")
                    .attr("aria-hidden", "true")
                    .attr("type", "button");


            } else {
                $('#id_rowh_2 #id-btn-order_2').removeAttr("data-toggle")
                    .removeAttr("data-target")
                    .removeAttr("aria-hidden")
                    .attr("type", "submit")
                $('#id_rowh_2  #id-btn-order_2').val("Báo giá");

            }
        });
    });

    function findMax(arr) {
        var max_val = arr.reduce(function (accumulator, element) {
            return (accumulator > element) ? accumulator : element
        });

        return max_val;
    }


</script>
<!--<script>-->
<!--    let num = [5, 4, 7, 2, 8, 7, 3];-->
<!---->
<!--    /*Tìm max trong mảng bằng Array reduce */-->
<!--    let max_val = num.reduce(function(accumulator, element){-->
<!--        return (accumulator > element) ? accumulator : element-->
<!--    });-->
<!--    console.log(num);-->
<!--    console.log("max= ",max_val);-->
<!---->
<!--</script>-->
<script>
    $(document).ready(function () {
        var $popupdangkyonpremise = $('#popup-dang-ky-on-premise');
        $popupdangkyonpremise.on('shown.bs.modal', function () {


            $("select").each(function (index, element) {
                var val2 = $("option:selected").attr("data-val");
                $popupdangkyonpremise.find('input[name="soluong-hidden"]').attr("readonly", true).val(val2);


                $(this).children("option").each(function () {
                });
            });

            $popupdangkyonpremise.find('input[name="giagoi-hidden"]').attr("readonly", true).val($('#id-gia-goi').text().trim());
            $popupdangkyonpremise.find('input[name="datacenter-hidden"]').attr("readonly", true).val($('#id-ha-tang-data-center-dap-ung-de-xuat').text().trim());


        });
    });


</script>
<script>

    // $(window).on("load", function () {
    //     $('#id-btn-order_0').val("Đăng ký");
    //     $('#id-btn-order_0')
    //         .attr("data-toggle", "modal")
    //         .attr("data-target", "#popup-dung-thu-startup")
    //         .attr("aria-hidden", "true")
    //         .attr("type", "button");
    //     $('input.wpcf7-form-control.wpcf7-submit')
    //         .attr("type", "submit");
    //
    // });

</script>
<script>

    $(document).ready(function () {
        var $popupdangkychungbagoistartup = $('#popup-dung-thu-startup');
        $popupdangkychungbagoistartup.on('shown.bs.modal', function () {


            $popupdangkychungbagoistartup.find('input[name="tengoidachon"]').attr("readonly", true).val($('#id-title-package_0').text().trim());
            $popupdangkychungbagoistartup.find('input[name="soluongcuagoidachon"]').attr("readonly", true).val($('#input-quantity-user').val().trim());


        });
    });
</script>
<script>
    $(document).ready(function () {
        var $popupdangkychungbagoigrowfast = $('#popup-lien-he-growfast');
        $popupdangkychungbagoigrowfast.on('shown.bs.modal', function () {


            $popupdangkychungbagoigrowfast.find('input[name="tengoidachongrowfast"]').attr("readonly", true).val($('#id-title-package_1').text().trim());
            $popupdangkychungbagoigrowfast.find('input[name="soluongcuagoidachongrowfast"]').attr("readonly", true).val($('#input-quantity-user').val().trim());


        });
    });
</script>
<script>
    $(document).ready(function () {
        var $popupdangkychungbagoigrowfast = $('#popup-lien-he-scaleup');
        $popupdangkychungbagoigrowfast.on('shown.bs.modal', function () {


            $popupdangkychungbagoigrowfast.find('input[name="tengoidachonscaleup"]').attr("readonly", true).val($('#id-title-package_2').text().trim());
            $popupdangkychungbagoigrowfast.find('input[name="soluongcuagoidachonscaleup"]').attr("readonly", true).val($('#input-quantity-user').val().trim());


        });
    });
</script>
<script>
    $(document).keypress(
        function (event) {
            if (event.which == '13') {
                event.preventDefault();
            }
        });
</script>

<script type="text/javascript">
    document.addEventListener('wpcf7submit', function (event) {
        if (event.detail.status == 'mail_sent') {
            location = 'https://crmedu.vn/cam-on'; //Thay thành link bạn muốn chuyển hướng
        }
    }, false);
</script>

<script>

    $(".testbtn").click(function () {
        var key = "ygKY0sSYSh2zqPCRm1MCFAb8bJqDjh";
        var secret = "em2BRpjhCVBcKEqqktzMkDw5pDKqY2";

        // var token = await getToken();
        //
        // console.log("SHOW " + token)
        //
        // console.log("RESPONSE " + response);

        $.get('https://ms.dotb.vn/rest/v11_3/get_api_access_token?key=ygKY0sSYSh2zqPCRm1MCFAb8bJqDjh&secret=em2BRpjhCVBcKEqqktzMkDw5pDKqY2', function (data, status) {
            // var x = JSON.stringify(data);
            // let obj = JSON.parse(x);

            $.each(data, function () {
                console.log($(this))
            });
        });
    });

    // async function GetToken () {
    //     var token = await  getToken();
    //     console.log("TOKEN IS " + token)
    // }
    //
    // const getToken = async () => {
    //     let url = 'https://ms.dotb.vn/rest/v11_3/get_api_access_token?key=ygKY0sSYSh2zqPCRm1MCFAb8bJqDjh&secret=em2BRpjhCVBcKEqqktzMkDw5pDKqY2';
    //     let response = await fetch(
    //         url,
    //         {
    //             method: 'GET',
    //             mode: 'no-cors',
    //             headers: {
    //                 'Content-Type': 'application/json',
    //                 "Access-Control-Allow-Origin":"*",
    //             }
    //         }
    //     ).then((res) => {
    //         // var  x = {
    //         //     'Content-Type': 'application/json',
    //         //     "Access-Control-Allow-Origin":"*",
    //         // }
    //         return JSON.stringify(res)
    //     })
    //
    //     return response;
    // }

</script>
</html>
<?php get_footer();
?>
