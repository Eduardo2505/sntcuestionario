<div class="container">
	<div id="logo">
		<a href="<?php echo site_url('') ?>"><img src="<?php echo site_url('') ?>images/logo.png" alt="Dzen"></a>
	</div>
	<nav>
		<ul id="main_menu">

			<li class="<?php  if($activar==="index") {echo "current-menu-item"; }?>">
				<a href="<?php echo site_url('') ?>">Inicio</a>
			</li>
			<li class="<?php  if($activar==="yo") {echo "current-menu-item"; }?>">
				<a href="<?php echo site_url('') ?>quien-soy-yo">¿Quién soy ?</a>
			</li>
			<li class="<?php  if($activar==="planes") {echo "current-menu-item"; }?>">
				<a href="<?php echo site_url('') ?>planes-integrales">Planes integrales</a>
				<!-- <ul>
					<li><a href="#">Programa 1</a></li>
					<li><a href="#">Programa 2</a></li>
					
				</ul> -->
			</li>
			<li class="<?php  if($activar==="blog") {echo "current-menu-item"; }?>">
			<a href="https://sntcenter.com.mx/blog/">Blog</a></li>

		<!-- 	<li class="<?php  if($activar==="historias") {echo "current-menu-item"; }?>">
				<a href="#">Historias de Éxito</a>
			</li> -->
			
			<li class="<?php  if($activar==="contacto") {echo "current-menu-item"; }?>">
				<a href="<?php echo site_url('') ?>contacto">Contacto</a>
			</li>
		</ul>	
	</nav>
	<div id="ABdev_menu_toggle">
		<i class="ABdev_icon-menu"></i>
	</div>
</div>