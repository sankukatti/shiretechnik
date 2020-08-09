<style type="text/css">
	.nav > li > a {
		padding: 10px;
	}
</style>
<section class="headder-section">
	<div class="navbar navbar-default">
		<div class="container">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="/">
			      	<img src="/images/logo.png">
			    </a>

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      </button>

			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav navbar-right">
					<li class="{{ Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>

					<li class="dropdown {{ Request::is('products/*') ? 'active' : ''}}" >
						<a href="javascript:;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Services
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/products/elecCooling">Thermal Design Services</a></li>
							<li><a href="/products/hvacServices">HVAC Design Services</a></li>
							<li><a href="/products/mechDesign">Mechanical Design Services</a></li>
							<li><a href="/products/reliability">Reliability Design Services</a></li>
						</ul>
					</li>

					<li class="{{ Request::is('industries/*') ? 'active' : ''}}" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Products
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/industries/caeses">CAESES</a></li>
							<li ><a href="/industries/tcfd">TCFD</a></li>
							<li><a href="/industries/visualdoc">VisualDOC</a></li>
							<li><a href="/industries/genesis">GENESIS</a></li>
							<!-- <li><a href="/industries/thermal">THERMAL DESKTOP</a></li> -->
							<!-- <li><a href="/industries/consumerProducts">Consumer Products</a></li> -->
							<!-- <li><a href="javascript:;">Healthcare</a></li>
							<li><a href="javascript:;">Oil &amp; Gas</a></li> -->
						</ul>
					</li>
					<li class="{{ Request::is('partners/*') ? 'active' : ''}}" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Partners
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/partners/friendshipSystems">Friendship Systems</a></li>
							<li><a href="/partners/vrand">VR&D</a></li>
							<li><a href="/partners/cfdsupport">CFD Support s.r.o</a></li>
							<!-- <li><a href="/partners/candrtech">C & R Technologies</a></li> -->
						</ul>
					</li>

					<!-- <li><a href="javascript:;">Training</a></li> -->
					<li class="{{ Request::is('about') ? 'active' : ''}}"><a href="/about">About Us</a></li>
					<li class="{{ Request::is('forum') ? 'active' : ''}}  {{ Request::is('forum/*') ? 'active' : ''}}"><a href="/forum">Blog</a></li>
					<li class="{{ Request::is('careers') ? 'active' : ''}}"><a href="/careers">Career</a></li>
					<li class="{{ Request::is('contact') ? 'active' : ''}}" ><a href="/contact">Contact Us</a></li>
				</ul>
			</div><!-- collapse navbar-collapse -->

		</div>
	</div>
</section>
