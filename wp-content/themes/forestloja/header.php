<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<?php wp_head(); ?>
		<title>Forest Paper</title>
	</head>
	<body>
		<header>
			<p>
				ENTREGAS PARA TODO O BRASIL. PARA ENTREGAS NO EXTERIOR FAVOR ENVIAR UM E-MAIL PARA
				<a href="mailto:e-commerce@forestpaper.com.br" title="Entraga para o exterior">E-COMMERCE@FORESTPAPER.COM.BR</a>
			</p>

			<div class="header_row">
				<a href="https://loja.forestpaper.com.br">
					<h1>Forest Paper</h1>
				</a>

				<form class="input-container">
					<input type="text" placeholder="O que procura?" />
					<button type="submit">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path
								  d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"
								  />
						</svg>
					</button>
				</form>

				<a href="#" class="icon_container" title="Entre ou cadastre-se">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<path
							  d="M19 7.001c0 3.865-3.134 7-7 7s-7-3.135-7-7c0-3.867 3.134-7.001 7-7.001s7 3.134 7 7.001zm-1.598 7.18c-1.506 1.137-3.374 1.82-5.402 1.82-2.03 0-3.899-.685-5.407-1.822-4.072 1.793-6.593 7.376-6.593 9.821h24c0-2.423-2.6-8.006-6.598-9.819z"
							  />
					</svg>
					Entre ou <br />Cadastre-se</a
					>
				<a href="#" class="icon_container" title="Carrinho">
					<svg
						 xmlns="http://www.w3.org/2000/svg"
						 xmlns:xlink="http://www.w3.org/1999/xlink"
						 version="1.1"
						 id="Layer_1"
						 x="0px"
						 y="0px"
						 viewBox="0 0 512 512"
						 style="enable-background: new 0 0 512 512"
						 xml:space="preserve"
						 >
						<g>
							<g>
								<path
									  d="M402.351,381.058h-203.32l-11.806-47.224h266.587L512,101.085H129.038L108.882,20.46H0v33.4h82.804l82.208,328.827    c-24.053,5.971-41.938,27.737-41.938,53.611c0,30.461,24.781,55.242,55.241,55.242c30.459,0,55.241-24.781,55.241-55.242    c0-7.755-1.613-15.138-4.511-21.841h122.577c-2.897,6.703-4.511,14.086-4.511,21.841c0,30.461,24.781,55.242,55.241,55.242    c30.459,0,55.241-24.781,55.241-55.242C457.592,405.84,432.811,381.058,402.351,381.058z M287.029,300.434h-37.08l-8.284-66.275    h45.365V300.434z M411.912,134.484h57.31l-16.568,66.275h-49.026L411.912,134.484z M399.453,234.16h44.85l-16.568,66.275h-36.566    L399.453,234.16z M320.428,134.484h57.824l-8.284,66.275h-49.539V134.484z M320.428,234.159h45.365l-8.284,66.275h-37.08V234.159z     M287.029,134.484v66.275h-49.539l-8.284-66.275H287.029z M137.388,134.484h58.158l8.284,66.275h-49.873L137.388,134.484z     M162.307,234.159h45.699l8.284,66.275h-37.414L162.307,234.159z M178.315,458.141c-12.043,0-21.841-9.798-21.841-21.842    c0-12.043,9.798-21.841,21.841-21.841s21.841,9.798,21.841,21.841C200.156,448.343,190.358,458.141,178.315,458.141z     M402.351,458.141c-12.043,0-21.841-9.798-21.841-21.842c0-12.043,9.798-21.841,21.841-21.841    c12.043,0,21.841,9.798,21.841,21.841C424.192,448.343,414.394,458.141,402.351,458.141z"
									  />
							</g>
						</g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
					</svg>
					Carrinho</a
					>
			</div>

			<?php
			wp_nav_menu( array( 
				'theme_location' => 'my-custom-menu', 
				'container_class' => 'custom-menu-class' ) ); 
			?>
		</header>