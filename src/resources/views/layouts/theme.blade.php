<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        @yield('title')
    </title>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>

    <link rel="stylesheet" href="https://cdn.iconmonstr.com/1.2.0/css/iconmonstr-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/orangebox/css/app-e787fe0d66.css">
    <link rel="stylesheet" href="/orangebox/css/theme-ecb10dbf5c.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Generate using http://realfavicongenerator.net/ -->
</head>

<body id="body" class="{{ $page_class or "front-page" }} frontend">

    <div class="is-dark">
        <nav class="navbar top">
            <div class="container">
                <div class="navbar-menu">
                    <a href="/" class="navbar-item">Home</a>
                    <a href="/collections.html" class="navbar-item">Collection</a>
                    <a href="/product.html" class="navbar-item">Product</a>
                    <a href="/page.html" class="navbar-item">Pages</a>
                    <a href="/about.html" class="navbar-item">About</a>
                </div>
                <div class="navbar-divider"></div>
                <a href="dashboard.html" class="navbar-item">Admin</a>
                <a href="login.html" class="navbar-item">Register / Login</a>
                <a class="navbar-item">
		<i class="im im-user-circle"></i>
		</a>
            </div>
        </nav>
    </div>


    <section class="section header">
        <div class="container">
            <h1 class="title">ACME INC</h1>
            <h2 class="subtitle">
                A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
            </h2>
        </div>
    </section>

     <section class="cover-fold">
        <div class="cover">
            <div>
                <div class="has-text-centered">

                    <h1 class="headline-h1 is-uppercase">FrontEnd</h1>
                    <h2 class="subtitle is-2 is-capitalized">A UI toolkit for designers</h2>
                </div>
            </div>

        </div>

        <div class="container search">
            <div class="navbar">
                <div class="container">
                    <span class="navbar-item subtitle is-4">Search</span>
                </div>
            </div>
        </div>

    </section>

@yield('content')

    <footer class="footer section">

        <div class="container">
            <div class="columns">
                <div class="column is-2">
                    <p class="title is-4 is-uppercase">Logo</p>
                </div>
                <div class="column">
                    <p class="title is-4 is-uppercase">Recent Articles</p>
                </div>
                <div class="column">
                    <p class="title is-4 is-uppercase">Acme Inc</p>
                </div>
                <div class="column">
                    <p class="title is-4 is-uppercase">Contact us</p>
                    <address>
                        <p>
                            8328 Somewhere out there <br> FL 00000 <br>
                            <abbr title="Phone">Office:</abbr> 000-000-0999<br>
                            <abbr title="Phone">Fax:</abbr> 000-000-0999<br>
                        </p>

                        <p>
                            © 2017 All right reserved
                        </p>

                    </address>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <p class="has-text-centered is-size-5">
                    Copyright Acme Inc All rights resevered
                </p>
            </div>
        </div>
        <div>
            <a data-scroll href="#body" class="back-to-top hide">
  <i class="im im-arrow-up-circle is-2"></i>
  </a>
        </div>
    </footer>
    <script src="/orangebox/js/app-ffa8a6e839961c181f2c.js"></script>
</body>
</html>
