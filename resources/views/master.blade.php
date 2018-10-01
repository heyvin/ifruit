<!doctype html>

<html ⚡="">

<head>
    <meta charset="utf-8">
    <title>iFruit</title>
    <link rel="canonical" href="https://www.ampstart.com/templates/themes_2/home.amp">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <script async="" src="https://cdn.ampproject.org/v0.js"></script>



    <style amp-boilerplate="">body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate="">body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>


    <script custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js" async=""></script>
    <script custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js" async=""></script>
    <script custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js" async=""></script>
    <script custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js" async=""></script>
    <script custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js" async=""></script>
    <script async custom-element="amp-install-serviceworker"
            src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CLora%7CLato" rel="stylesheet">
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" sizes="192x192" href="/img/launcher/ifruit-icon-4x.png">
    <link rel="apple-touch-icon" href="/img/launcher/ifruit-touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/launcher/ifruit-touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/launcher/ifruit-touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="/img/launcher/ifruit-touch-icon-ipad-retina.png">

    <style amp-custom="">
        <?php include('css/page.min.css') ?>
    </style>
</head>
<body>

<amp-state id="appState">
    <script type="application/json">
        {
          "submitError": ""
        }
        </script>
</amp-state>

@yield('content')

<!-- Start Footer -->
<footer class="ampstart-footer flex flex-column items-center px3 ">


    <small>
        © iFruit Services
    </small>
</footer>
<!-- End Footer -->
<amp-install-serviceworker
        src="/service-worker.js"
        layout="nodisplay"
        data-iframe-src="/install-service-worker.html">
</amp-install-serviceworker>
</body>
</html>
