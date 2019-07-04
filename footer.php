	<footer id="footer1" class="footer_columns_3">
		<div id="footer-bottom">
			<div class="container">
				<!-- Footer Info -->
				<p id="footer-info">&copy; 2014 - <?php echo date("Y");?> <a href="http://cryptoroot.com.br">CryptoRoot</a> Community. Todos os direitos reservados</p>
<!--  -->
				<!-- Footer Navigation -->
				<div id="footer-nav">
					<ul class="et-extra-social-icons" style="">
						<li><a href="https://facebook.com/CryptoRootOfficial" class="et-extra-icon et-extra-icon-background-none et-extra-icon-facebook" target="_blank"></a></li>

						<li class="et-extra-social-icon twitter"><a href="https://twitter.com/CryptoRootOfficial" class="et-extra-icon et-extra-icon-background-none et-extra-icon-twitter" target="_blank"></a></li>

						<li class="et-extra-social-icon instagram"><a href="https://instagram.com/cryptoroot" class="et-extra-icon et-extra-icon-background-none et-extra-icon-instagram" target="_blank"></a></li>

						<li class="et-extra-social-icon linkedin">
						<a href="https://www.linkedin.com/company/cryptoroot" class="et-extra-icon et-extra-icon-background-none et-extra-icon-linkedin" target="_blanck"></a>
						</li>

						<li class="et-extra-social-icon youtube"><a href="https://youtube.com/CryptoRootOfficial" class="et-extra-icon et-extra-icon-background-none et-extra-icon-youtube" target="_blank"></a></li>
					</ul>

				</div> <!-- /#et-footer-nav -->
				
				<script src="https://code.jquery.com/jquery-2.2.4.js"></script>

				<div id="backtopo">
					<a href="#" title="Voltar ao topo" style="font-size: 3em;z-index: 3; color: #fff;"><i class="fas fa-chevron-circle-up"></i></a>
				</div>

				<script>
					$(document).ready(function(){

					    // hide #back-top first
					    $('#backtopo').hide();

					    // fade in #back-top
					    $(function () {
					        $(window).scroll(function () {
					            if ($(this).scrollTop() > 150) {
					                $('#backtopo').fadeIn();
					            } else {
					                $('#backtopo').fadeOut();
					            }
					        });

					        // scroll body to 0px on click
					        $('#backtopo').click(function () {
					            $('body,html').animate({
					                scrollTop: 0
					            }, 800);
					            return false;
					        });
					    });
					});
				</script>

				<script type="text/javascript" src="includes/admin/scripts/nav-menu.js"></script>

			</div>
		</div>
	</footer>
	<script  src="js/index.js"></script>
	<script type="text/javascript" src="_js/jquery.js"></script>
	<script type="text/javascript" src="_js/scripts.js"></script>
</body>
