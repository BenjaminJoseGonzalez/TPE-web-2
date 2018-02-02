

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	<button class="navbar-toggler navbar-toggler-right" type="button" 
		data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
		aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" id="lnkHome" href="">Home</a>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Deportes
				</a>
				<div id="deporte" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" id_deporte="1" href="">Bike</a>
					<a class="dropdown-item" id_deporte="2" href="">Skate</a>
				</div>
			</li>
			<li class="nav-item active">
				<a class="nav-link" id="lnkRidersbike" href=""> Riders <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" id="lnkContacto" href=""> Contacto <span class="sr-only">(current)</span></a>
			</li>
			{if $logueo != false}
				<li class="nav-item active"><a class="nav-link" id="lnkAdmin" href="">Admin</a></li> 
				<li class="nav-item active"><a class="nav-link" id="lnkLogOut" href="">Cerrar session</a></li>
			{else}
				<li class="nav-item active"><a class="nav-link" id="lnkRegistro" href="">Registrarse</a></li>
			{/if}
		</ul>	
	</div>
</nav>
