<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
	<div id="sidebar-menu" class="sidebar-menu">
	<ul>
	<li class="menu-title"><span>Main</span></li>
	<li <?php if(empty($active_home)) {  }else{echo $active_home; };?> >
	<a href="<?php echo base_url() ?>paneluser/home"><i data-feather="home"></i> <span>Dashboard</span></a>
	</li>
	<li <?php if(empty($active_visitor)) {  }else{echo $active_visitor; };?> >
	<a href="<?php echo base_url() ?>paneluser/visitor_list"><i data-feather="user-check"></i> <span>Visitor List</span></a>
	</li>
	<li>
	<a href="<?php echo base_url() ?>paneluser/cnfig"><i data-feather="settings"></i> <span>Settings</span></a>
	</li>
	</ul>
	</div>
	</div>
</div>
