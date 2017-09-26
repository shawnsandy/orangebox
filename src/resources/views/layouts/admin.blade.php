
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>
 @yield('title')
  </title>
   <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
  <link href="/orangebox/css/blokkfont-b2e761c39d.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdn.iconmonstr.com/1.2.0/css/iconmonstr-iconic-font.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/orangebox/css/app-e787fe0d66.css">

<link rel="stylesheet" href="/orangebox/css/theme-ecb10dbf5c.css">

  <meta name="viewport" content="width=device-width,initial-scale=1"> <!-- Generate using http://realfavicongenerator.net/ -->

 <link rel="stylesheet" href="/orangebox/css/admin-070a62256f.css">
</head>

<body class="admin">
  <section class="is-paddingless dashboard">
    <div class="container-fluid">

      <div class="columns is-marginless">
        <div class="column sidebar">

  <nav class="navbar">
    <div class="navbar-brand">
      <a class="navbar-item toggle-sidebar">
					<i class="im im-menu-list"></i> <span class="sidebar-text is-uppercase subtitle is-4">Admin</span>
					</a>
    </div>
  </nav>

  <div class="columns">
    <div class="column">
      <aside class="menu">

        <ul class="menu-list">

          <li>
            <a href="/dashboard.html"><i class="im im-cubes"></i><span class="sidebar-text">Dash</span></a>
          </li>

          <li>
            <a href="/dashboard.html"><i class="im im-note-o"></i><span class="sidebar-text">Posts</span></a>
          </li>

          <li>
            <a href="/dashboard.html"><i class="im im-users"></i><span class="sidebar-text">Dashboard</span></a>
          </li>

          <li>
            <a href="/dashboard.html"><i class="im im-control-panel"></i><span class="sidebar-text">Options</span></a>
          </li>

          <li>
            <a href="/dashboard.html"><i class="im im-gear"></i><span class="sidebar-text">Settings</span></a>
          </li>

        </ul>

      </aside>

    </div>
  </div>

</div>

      </div>

      <div class="column is-paddingless">

        <main class="main">

         @yield('content')

        </main>
      </div>
    </div>

  </section>
  <script src="/orangebox/js/app-ffa8a6e839961c181f2c.js"></script>
  <script src="/orangebox/js/admin-ffa8a6e839961c181f2c.js"></script>

</body>

</html>