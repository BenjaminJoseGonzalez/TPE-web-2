<header>
	<div class="izq">
		<a id="lnkHome" href="">home</a>
	</div>
	<div class="der">
		<nav>
			<ul>
				<li class="dropdown"> deporte
						<ul id="deporte"class="dropdown-content">
							<li><a id_deporte="1" href="">bike</a></li>
							<li><a id_deporte="2" href="">skate</a></li>
						</ul>
				</li>
				<li><a id="lnkRidersbike" href="">riders</a></li>
				<li><a id="lnkContacto" href="">contacto</a></li>
				{if $logueo != false}
					<li><a id="lnkAdmin" href="">admin</a></li> 
					<li><a id="lnkLogOut" href="">cerrar session</a></li>
				{else }
					<li><a id="lnkRegistro" href="">registrarse</a></li>
				{/if}
			</ul>
		</nav>
	</div>
</header>