<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>last Version 4000</h1>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <input name="valor" id="sales" value="3801">
    <br><br><br><br><br>
    <h3>+<span class="counter" id="counter-lat" data-endcountvalue="3801">0</span> visitas!</h3>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-inline">
            <strong> Potenciado por: <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </div>
        Anything you want
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <script src="l-makecounter.min.js"></script>
    <script>
        $(function() {
            $('#sales').mcounter({
                endcountvalue: 4002,
                startcountvalue: 3995,
                elapsetime:8
            });
            $('.counter').visibilityChanged({
                callback: function(element, visible, initialLoad) {
                    // do something
                    console.log("visible?: " + visible);
                }
            });
        })
    </script>
</body>

</html>