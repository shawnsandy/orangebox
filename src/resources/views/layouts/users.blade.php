<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>

        @yield("title")

    </title>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <link href="orangebox/css/blokkfont-b2e761c39d.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.iconmonstr.com/1.2.0/css/iconmonstr-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/orangebox/css/app-e787fe0d66.css">
    <link rel="stylesheet" href="/orangebox/css/theme-ecb10dbf5c.css">

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Generate using http://realfavicongenerator.net/ -->

    <link rel="stylesheet" href="/orangebox/css/users-c3419ea013.css">
</head>

<body class="{{ $page_class or " login-page " }}">

    <main>

        <div class="columns is-marginless">
            <div class="column is-paddingless">

                <div class="hero is-fullheight">

                    <nav class="navbar is-transparent">
                        <div class="navbar-menu navbar-center">
                            <div class="navbar-start">
                                <a href="" class="navbar-item"><i class="im im-angle-left default"></i> Frontend</a>
                                <a href="" class="navbar-item"><i class="im im-users default"></i> Profile</a>
                            </div>

                            <div class="navbar-end">

                            </div>

                        </div>
                    </nav>

                </div>

            </div>

        <div class="column is-paddingless is-three-quaters side-bar">
        @yield('content')
        </div>

    </main>

    <script src="/orangebox/js/app-ffa8a6e839961c181f2c.js"></script>

</body>

</html>
