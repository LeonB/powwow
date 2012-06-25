<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">

		<div class="container">

			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<?php $url = array('controller' => 'dashboard', 'action' => 'index', 'admin' => true); ?>
			<a class="brand" href="<?=$this->Html->url($url);?>">Powwow admin</a>

			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="dropdown">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>
							Settings
							<b class="caret"></b>
						</a>

						<ul class="dropdown-menu">
							<li><a href="javascript:;">Account Settings</a></li>
							<li><a href="javascript:;">Privacy Settings</a></li>
							<li class="divider"></li>
							<li><a href="javascript:;">Help</a></li>
						</ul>

					</li>

					<li class="dropdown">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i>
							Rod Howard
							<b class="caret"></b>
						</a>

						<ul class="dropdown-menu">
							<li><a href="javascript:;">My Profile</a></li>
							<li><a href="javascript:;">My Groups</a></li>
							<li class="divider"></li>

							<?php $url = array('controller' => 'users', 'action' => 'logout', 'admin' => true); ?>
							<li><a href="<?=$this->Html->url($url);?>">Logout</a></li>
						</ul>

					</li>
				</ul>

				<form class="navbar-search pull-right">
					<input type="text" class="search-query" placeholder="Search">
				</form>

			</div><!--/.nav-collapse -->

		</div> <!-- /container -->
	</div> <!-- /navbar-inner -->
</div> <!-- /navbar -->
