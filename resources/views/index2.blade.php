@extends ('welcome')
	
	@section ('main')

	<body style="background-color: #eee;">
		<!-- Banner Master Game -->
		<div class="container-fluid content-row" style="margin-top: 2rem; margin-bottom: 2rem;">
			<div class="card-deck row justify-content-center">
				<div class="col-lg-6">
			        <img class="card-img-top" src="/images/mastergame.jpg">
				</div>
			</div>
		</div>

	<!-- Links to other pages -->
		<div class="container-fluid" style="margin-top: 12rem;">

			<!-- Empiezo el Div de los links-->
			<div class="card-deck row justify-content-center">

				<!-- Empleados Div-->
				<div class="col-xs-12">
					<div class="container">
						<i class="far fa-id-card" style="font-size: 150px; color: #2c3a45; margin-bottom: 1rem;"></i>
					</div>
					<div class="container-fluid">
						<a class="btn btn-dark" href="admin/empleados" style="font-size: 15px; margin-left: 1.3rem;">
							EMPLEADOS 
						</a>
					</div>
				</div>

				<!--Proveedores Div -->
				<div class="col-xs-12">
					<div class="container">
						<i class="fas fa-truck" style="font-size: 150px; color: #2c3a45;  margin-bottom: 1rem;"></i>
					</div>
					<div class="container-fluid">
						<a class="btn btn-dark" href="admin/proveedores" style="font-size: 15px; margin-left: 1.3rem;">
							PROVEEDORES 
						</a>
					</div>
				</div>

				<!-- Facturación Div -->
				<div class="col-xs-12">
					<div class="container">
						<i class="fa fa-hand-holding-usd" style="font-size: 150px; color: #2c3a45; margin-bottom: 1rem;"></i>
					</div>
					<div class="container-fluid">
						<a class="btn btn-dark" href="admin/facturacion" style="font-size: 15px;">
							FACTURACIÓN
						</a>
					</div>
				</div>

				<!-- Resumen Div -->
				<div class="col-xs-12">
					<div class="container">
						<i class="fas fa-chart-line" style="font-size: 150px; color: #2c3a45;  margin-bottom: 1rem;"></i>
					</div>
					<div class="container-fluid">
						<a class="btn btn-dark" href="admin/estadisticas" style="font-size: 15px; margin-left: 1.3rem;">
							RESUMEN 
						</a>
					</div>
				</div>

				<!-- Clientes DIV -->
				<div class="col-xs-12">
					<div class="container">
						<i class="far fa-user" style="font-size: 150px; color: #2c3a45; margin-bottom: 1rem;"></i>
					</div>
					<div class="container-fluid">
						<a class="btn btn-dark" href="admin/socios" style="font-size: 15px; margin-left: 1.3rem;">
							CLIENTES
						</a>
					</div>
				</div>

				<!-- Inventario Div -->
				<div class="col-xs-12">
					<div class="container">
						<i class="fas fa-box-open" style="font-size: 150px; color: #2c3a45; margin-bottom: 1rem;"></i>
					</div>
					<div class="container-fluid">
						<a class="btn btn-dark" href="admin/stock" style="font-size: 15px; margin-left: 2.5rem;">
							INVENTARIO
						</a>
					</div>
				</div>

			</div>

		</div>

	@endsection