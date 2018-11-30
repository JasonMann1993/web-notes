<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>

</head>
<body>
<div class="countdown_kill"></div>
</body>
<script>
    $('.countdown_kill').countdown('2018-11-29 16:12:00', function (event) {
        $(this).html(event.strftime('%D天%H时%M分%S秒'));
    });
</script>
</html>