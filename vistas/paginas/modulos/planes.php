<!--=====================================
PLANES
======================================-->

			<?php  $planes = ControladorPlanes::ctrMostrarPlanes();
			//		echo '<pre class="bg-white">'; print_r($planes); echo '</pre>';
					$servidor = ControladorRuta::ctrServidor();
			 ?>
<div class="planes container-fluid bg-white p-0" id="planes">
	
	<div class="container p-0">
		
		<div class="grid-container">
			
			<div class="grid-item">

				
				<h1 class="text-center py-3 py-lg-5 tituloPlan" tituloPlan="BIENVENIDO">BIENVENIDO</h1>

				<p class="text-muted text-left px-4 descripcionPlan" descripcionPlan="Un hotel icónico en Lima, convenientemente ubicado en el exclusivo distrito de San Isidro, cerca de la sede corporativa y a 15 minutos en automóvil del distrito de Miraflores y del centro histórico de Lima. Un edificio de 2011, instalaciones modernas y el personal más acogedor están listos para saludarte y cuidarte, ya sea que viajes a Perú por negocios o placer.">Un hotel icónico en Lima, convenientemente ubicado en el exclusivo distrito de San Isidro, cerca de la sede corporativa y a 15 minutos en automóvil del distrito de Miraflores y del centro histórico de Lima. Un edificio de 2011, instalaciones modernas y el personal más acogedor están listos para saludarte y cuidarte, ya sea que viajes a Perú por negocios o placer.</p>

			</div>
			<?php foreach ($planes as $key => $value) : ?>
			<div class="grid-item d-none d-lg-block" data-toggle="modal" data-target="#modalPlanes">
				
				<figure class="text-center">
					
					<h1 descripcion="<?php echo $value['descripcion']; ?>"><?php echo $value['tipo']?></h1>

				</figure>

				<img src="<?php echo $servidor.$value['img']; ?>" class="img-fluid" width="100%">


			</div>
		<?php endforeach ?>


			
		</div>

	</div>

</div>
