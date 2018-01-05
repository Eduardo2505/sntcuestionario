<div class="dzen_section_content">
	<div class="dzen_container">
		<div class="dzen_column_DD_span12 ">
			<div class="dzen-callout_box color_white no_margin">
				<div class="dzen_container">
					<div class="dzen_column_DD_span7">
						<span class="dzen-callout_box_title">Consejos y tips para tu bienestar y salud</span>
						<p>
							Te enviaremos artículos  interasantes que te podran ayudar día a día.
						</p>
					</div>
					<div class="dzen_column_DD_span5">
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
						<script>
							$(document).ready(function(){
								$("#clickSus").click(function(){
									$("#enviarSubmit").click();
								});
							});
						</script>
						<form action="<?php echo site_url('') ?>welcome/suscripcion" method="post" id="enviarSus">
							<div class="dzen_column_DD_span9">
								<input type="email" name="email"  class="dzencf-text" placeholder="Email " required="true">

							</div>
							<div class="dzen_column_DD_span2">
							     <input type="submit" id="enviarSubmit" value="ENVIAR" class="dzencf-submit"  style="display: none">
								<a href="#enviar" id="clickSus"  class="dzen-button dzen-button_light dzen-button_large">Suscribete</a>

							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>