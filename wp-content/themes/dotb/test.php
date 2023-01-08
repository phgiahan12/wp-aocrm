<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
<script>
    $(document).ready(function () {

        $("#input-quantity-user").on("input", function () {
            if ($("#input-quantity-user").val() <= 5) {
                var _x = parseInt($("#id_cloud > section > div > div > div:nth-child(4)  .div-don-gia #motdennam").text());

                var _y = $("#input-quantity-user").val();


                var _result = parseInt(_x) * parseInt(_y);


                $("#id_cloud > section > div > div > div:nth-child(4) h1#input-quantity-user-display").text(_result);

            } else if ($("#input-quantity-user").val() <= 10) {
                var _x = parseInt($("#id_cloud > section > div > div > div:nth-child(4)  .div-don-gia #saudenmuoi").text());

                var _y = $("#input-quantity-user").val();


                var _result = parseInt(_x) * parseInt(_y);


                $("#id_cloud > section > div > div > div:nth-child(4) h1#input-quantity-user-display").text(_result);
            } else if ($("#input-quantity-user").val() <= 17) {
                var _x = parseInt($("#id_cloud > section > div > div > div:nth-child(4)  .div-don-gia #muoimotdenmuoibay").text());

                var _y = $("#input-quantity-user").val();


                var _result = parseInt(_x) * parseInt(_y);


                $("#id_cloud > section > div > div > div:nth-child(4) h1#input-quantity-user-display").text(_result);
            } else if ($("#input-quantity-user").val() <= 25) {
                var _x = parseInt($("#id_cloud > section > div > div > div:nth-child(4)  .div-don-gia #moitamdenhailam").text());

                var _y = $("#input-quantity-user").val();


                var _result = parseInt(_x) * parseInt(_y);


                $("#id_cloud > section > div > div > div:nth-child(4) h1#input-quantity-user-display").text(_result);
            } else if ($("#input-quantity-user").val() <= 40) {
                var _x = parseInt($("#id_cloud > section > div > div > div:nth-child(4)  .div-don-gia #haisaudenbonmuoi").text());

                var _y = $("#input-quantity-user").val();


                var _result = parseInt(_x) * parseInt(_y);


                $("#id_cloud > section > div > div > div:nth-child(4) h1#input-quantity-user-display").text(_result);
            } else if ($("#input-quantity-user").val() <= 60) {
                var _x = parseInt($("#id_cloud > section > div > div > div:nth-child(4)  .div-don-gia #bonmotdensaumuoi").text());

                var _y = $("#input-quantity-user").val();


                var _result = parseInt(_x) * parseInt(_y);


                $("#id_cloud > section > div > div > div:nth-child(4) h1#input-quantity-user-display").text(_result);
            } else if ($("#input-quantity-user").val() <= 100) {
                var _x = parseInt($("#id_cloud > section > div > div > div:nth-child(4)  .div-don-gia #saumotdenmottram").text());

                var _y = $("#input-quantity-user").val();


                var _result = parseInt(_x) * parseInt(_y);


                $("#id_cloud > section > div > div > div:nth-child(4) h1#input-quantity-user-display").text(_result);
            } else if ($("#input-quantity-user").val() <= 200) {
                var _x = parseInt($("#id_cloud > section > div > div > div:nth-child(4)  .div-don-gia #motlinhmotdenhaitram").text());

                var _y = $("#input-quantity-user").val();


                var _result = parseInt(_x) * parseInt(_y);


                $("#id_cloud > section > div > div > div:nth-child(4) h1#input-quantity-user-display").text(_result);
            } else if ($("#input-quantity-user").val() <= 300) {
                var _x = parseInt($("#id_cloud > section > div > div > div:nth-child(4)  .div-don-gia #hailinhmotdenbatram").text());

                var _y = $("#input-quantity-user").val();


                var _result = parseInt(_x) * parseInt(_y);


                $("#id_cloud > section > div > div > div:nth-child(4) h1#input-quantity-user-display").text(_result);
            } else if ($("#input-quantity-user").val() <= 400) {
                var _x = parseInt($("#id_cloud > section > div > div > div:nth-child(4)  .div-don-gia #balinhmotdenbontram").text());

                var _y = $("#input-quantity-user").val();


                var _result = parseInt(_x) * parseInt(_y);


                $("#id_cloud > section > div > div > div:nth-child(4) h1#input-quantity-user-display").text(_result);
            } else if ($("#input-quantity-user").val() <= 500) {
                var _x = parseInt($("#id_cloud > section > div > div > div:nth-child(4)  .div-don-gia #bonlinhmotdennamtram").text());

                var _y = $("#input-quantity-user").val();


                var _result = parseInt(_x) * parseInt(_y);


                $("#id_cloud > section > div > div > div:nth-child(4) h1#input-quantity-user-display").text(_result);
            } else if ($("#input-quantity-user").val() <= 9999) {
                var _x = parseInt($("#id_cloud > section > div > div > div:nth-child(4)  .div-don-gia #namlinhmotdenchinnghinchin").text());

                var _y = $("#input-quantity-user").val();


                var _result = parseInt(_x) * parseInt(_y);


                $("#id_cloud > section > div > div > div:nth-child(4) h1#input-quantity-user-display").text(_result);
            } else {
                var _y = $("#input-quantity-user").val();


                var _result = parseInt(_x) * parseInt(_y);
                $("#id_cloud > section > div > div > div:nth-child(4) h1#input-quantity-user-display").text(_result);

            }
        });


    });

</script>
</html>