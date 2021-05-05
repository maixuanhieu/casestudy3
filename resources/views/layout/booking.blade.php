<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sunrise Booking Form</title>
    <style id="" media="all">
        /* latin-ext */
        @font-face {
            font-family: 'Lato';
            font-style: italic;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/lato/v17/S6u8w4BMUTPHjxsAUi-qJCY.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Lato';
            font-style: italic;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/lato/v17/S6u8w4BMUTPHjxsAXC-q.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/lato/v17/S6uyw4BMUTPHjxAwXjeu.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/lato/v17/S6uyw4BMUTPHjx4wXg.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/lato/v17/S6u9w4BMUTPHh6UVSwaPGR_p.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/lato/v17/S6u9w4BMUTPHh6UVSwiPGQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>

    <link type="text/css" rel="stylesheet" href="storage/booking/bootstrap.min.css">

    <link type="text/css" rel="stylesheet" href="storage/booking/style.css">


    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="container" style="margin-top: 3rem">
                            @yield('tittle')
                            @yield('main-content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script async="" src="storage/booking/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script data-dapp-detection="">
        ! function() {
            let e = !1;

            function n() {
                if (!e) {
                    const n = document.createElement("meta");
                    n.name = "dapp-detected", document.head.appendChild(n), e = !0
                }
            }
            if (window.hasOwnProperty("ethereum")) {
                if (window.__disableDappDetectionInsertion = !0, void 0 === window.ethereum) return;
                n()
            } else {
                var t = window.ethereum;
                Object.defineProperty(window, "ethereum", {
                    configurable: !0,
                    enumerable: !1,
                    set: function(e) {
                        window.__disableDappDetectionInsertion || n(), t = e
                    },
                    get: function() {
                        if (!window.__disableDappDetectionInsertion) {
                            const e = arguments.callee;
                            e && e.caller && e.caller.toString && -1 !== e.caller.toString().indexOf("getOwnPropertyNames") || n()
                        }
                        return t
                    }
                })
            }
        }();
    </script>
</body>

</html>