@extends('orangebox::layouts.admin')
@section('title', 'orangebox')
@section('content')
   <nav class="navbar is-transparent">
            <div class="navbar-brand">
              <a href="/dashboard.html" class="navbar-item"> <i class="im im-radio-button-circle"></i> </a>
              <div class="navbar-item is-uppercase subtitle is-3 dashboard-name">
              Dashboard
              </div>
            </div>
            <div class="navbar-menu">
              <div class="navbar-start">
                <!-- navbar items -->
              </div>

              <div class="navbar-end">
                <!-- navbar items -->
                <a href="/" class="navbar-item"><i class="im im-angle-right default"></i></a>
              </div>
            </div>

          </nav>

          <div class="dashboard">
          <div class="container-fluid">
          <div class="section columns">
            <div class="column">
            <nav class="breadcrumb has-dot-separator" aria-label="breadcrumbs">





  <ul>
    <li><a href="#">Dashboard</a></li>
    <li class="is-active"><a href="#" aria-current="page">Page</a></li>
  </ul>
</nav>

            </div>
          </div>
          </div>



<div class="widgets">
	<div class="columns">
		<div class="column">
			<div class="cards">

				<div class="card-content">

					<header class="header">
						<div class="subtitle is-3"> <i class="im im-note-o"></i> Posts</div>
					</header>
					<p>Lorem ipsum dolor sit amet.</p>

				</div>

			</div>

		</div>

		<div class="column">
			<div class="cards">

				<div class="card-content">
					<header class="header">
						<div class="subtitle is-3"> <i class="im im-users"></i> Users</div>
					</header>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
		</div>

		<div class="column">
			<div class="cards">

				<div class="card-content">
					<header class="header">
						<div class="subtitle is-3"> <i class="im im-control-panel"></i> Options</div>
					</header>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
		</div>

		<div class="column">
			<div class="cards">

				<div class="card-content">
					<header class="header">
						<div class="subtitle is-3"> <i class="im im-gear"></i> Settings</div>
					</header>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
		</div>

	</div>

</div>

<section class="">

	<div class="columns">

		<div class="column dash-main">

			<div class="cards">
				<div class="card-content">
					<div class="header">
						<div class="subtitle is-3"> <i class="im im-bar-chart"></i> Analytics</div>
					</div>
					<p class="">
						Quia ex et reprehenderit cum sit maxime. Lorem ipsum dolor sit amet consectetur
					</p>
				</div>
			</div>

			<div class="cards">
				<div class="card-content">
					<p class="">
						Quia ex et reprehenderit cum sit maxime. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam temporibus deleniti
						ex ut sint eveniet dicta similique aut neque unde dolorum nobis, quidem blanditiis impedit reiciendis consectetur eligendi.
					</p>
				</div>
			</div>

			<div class="section"></div>

		</div>

		<div class="column is-3 sidebar-right">
			<div class="cards">
	<div class="card-content">
		<div class="header">
			<div class="subtitle is-3">
			<i class="im im-info"></i>
			 Dashboard Sidebar
			 </div>
		</div>
		<p class="class">
			Quia ex et reprehenderit cum sit maxime. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam temporibus deleniti
			ex ut sint eveniet dicta similique aut neque unde dolorum nobis, quidem blanditiis impedit reiciendis consectetur eligendi
			quibusdam, saepe quam, laboriosam ducimus atque id! Nesciunt porro dolores mollitia inventore exercitationem, quae fugit
			fuga quidem autem accusantium quo dolor et esse consectetur ad eius. Ab nesciunt alias deserunt magni ullam asperiores
			quos corrupti velit inventore tempore iure, unde similique nihil voluptas magnam cum esse dignissimos at eveniet repudiandae.
			Praesentium temporibus nesciunt maxime aliquam architecto sed doloremque, id libero, placeat esse totam repellendus fugiat
			consequatur blanditiis nulla ullam similique unde accusamus?
		</p>
	</div>
</div>

		</div>

	</div>
</section>


          </div>
@endsection
