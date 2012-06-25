<div class="subnavbar">
	<div class="subnavbar-inner">
		<div class="container">

			<ul class="mainnav">
			
				<?php $item = 'dashboard';?>
				<?php $url = array('controller' => 'dashboard', 'action' => 'index', 'admin' => true); ?>
				<li <?=in_array($item, $active_item) ? 'class="active"' : '';?>>
					<a href="<?=$this->Html->url($url);?>">
						<i class="icon-home"></i>
						<span>Home</span>
					</a>	    				
				</li>
				
				<?php $item = 'sites';?>
				<?php $url = array('controller' => 'sites', 'action' => 'index', 'admin' => true); ?>
				<li <?=in_array($item, $active_item) ? 'class="active"' : '';?>>
					<a href="<?=$this->Html->url($url);?>">
						<i class="icon-th-large"></i>
						<span>Sites</span>
					</a>	  				
				</li>
				
				<?php $item = 'faq';?>
				<?php $url = array('controller' => 'dashboard', 'action' => 'index', 'admin' => true); ?>
				<li <?=in_array($item, $active_item) ? 'class="active"' : '';?>>
					<a href="<?=$this->Html->url($url);?>">
						<i class="icon-pushpin"></i>
						<span>FAQ</span>
					</a>	    				
				</li>
				
				<?php $item = 'reports';?>
				<?php $url = array('controller' => 'dashboard', 'action' => 'index', 'admin' => true); ?>
				<li <?=in_array($item, $active_item) ? 'class="active"' : '';?>>
					<a href="<?=$this->Html->url($url);?>">
						<i class="icon-bar-chart"></i>
						<span>Reports</span>
					</a>    				
				</li>
				
				<?php $item = 'tour';?>
				<?php $url = array('controller' => 'dashboard', 'action' => 'index', 'admin' => true); ?>
				<li <?=in_array($item, $active_item) ? 'class="active"' : '';?>>
					<a href="<?=$this->Html->url($url);?>">
						<i class="icon-facetime-video"></i>
						<span>Guided Tour</span>
					</a>  									
				</li>
				
				<?php $item = 'more';?>
				<li class="dropdown subnavbar-open-right <?=in_array($item, $active_item) ? 'active' : '';?>">				
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-share-alt"></i>
						<span>More Pages</span>
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<?php $item = 'dashboard';?>
						<?php $url = array('controller' => 'dashboard', 'action' => 'index', 'admin' => true); ?>
						<li <?=in_array($item, $active_item) ? 'class="active"' : '';?>>
							<a href="<?=$this->Html->url($url);?>">Charts</a>
						</li>
						
						
						<?php $item = 'dashboard';?>
						<?php $url = array('controller' => 'dashboard', 'action' => 'index', 'admin' => true); ?>
						<li <?=in_array($item, $active_item) ? 'class="active"' : '';?>>
							<a href="<?=$this->Html->url($url);?>">Charts</a>
						</li>
						
						<li class="divider subnavbar-open-right"></li>
						
						<?php $item = 'dashboard';?>
						<?php $url = array('controller' => 'dashboard', 'action' => 'index', 'admin' => true); ?>
						<li <?=in_array($item, $active_item) ? 'class="active"' : '';?>>
							<a href="<?=$this->Html->url($url);?>">Charts</a>
						</li>
						
						<?php $item = 'dashboard';?>
						<?php $url = array('controller' => 'dashboard', 'action' => 'index', 'admin' => true); ?>
						<li <?=in_array($item, $active_item) ? 'class="active"' : '';?>>
							<a href="<?=$this->Html->url($url);?>">Charts</a>
						</li>
						
						<?php $item = 'dashboard';?>
						<?php $url = array('controller' => 'dashboard', 'action' => 'index', 'admin' => true); ?>
						<li <?=in_array($item, $active_item) ? 'class="active"' : '';?>>
							<a href="<?=$this->Html->url($url);?>">Charts</a>
						</li>

					</ul>    				
				</li>
			
			</ul>

		</div> <!-- /container -->
	</div> <!-- /subnavbar-inner -->
</div>