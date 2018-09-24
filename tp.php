<!DOCTYPE HTML>
<html>
	<?php include('head.php'); ?>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<?php include('menu.php'); ?>

			<!-- Main -->
				<div class="content">
                                  <div id="main" class="wrapper style1">
					<div class="container">
                                            <div class="row">
                                                <div class="12u 12u$(medium)">
						<header class="major">
							<h2>Travaux Pratiques</h2>
						</header>
                                                </div>
                                                  <div class="2u">&nbsp;</div>        
                                                  <div class="8u 12u$(medium)">
                                                    <a class="image fit"><img src="images/pic09.jpg" alt="" /></a>
                                                  </div>
                                                  <div class="2u">&nbsp;</div>        
                                            </div>
					</div>
                                  </div>
				</div>			
			
			<!-- List  -->
                                        <h2 align="center"><u><b>Liste des TPs</b></u></h2>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="60u$ 90u$(medium) 5u(x-small)">
									<h3>&nbsp;&nbsp;<u><b>2018-2019</b></u></h3>
									<ul style="margin-left: 3em; margin-right:3em">
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="60u$ 90u$(medium) 5u(x-small)">
									<h3>&nbsp;&nbsp;<u><b>2017-2018</b></u></h3>
									<ul style="margin-left: 3em; margin-right:3em">
										<li>
										<a onclick="activate('TPWebCrawling')">Web Crawling</a><br />
                                                                                    <div class="id" id="TPWebCrawling">
                                                                                            <?php include('TP/WebCrawling/webcrawing.php') ?>
                                                                                    </div>
                                                                                </li>
										<li>
										<a onclick="activate('TPRSA')">RSA</a><br />
                                                                                    <div class="id" id="TPRSA">
                                                                                            <?php include('TP/RSA/rsa.php') ?>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                      </div>
							</div>
						</div>
					</div>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="60u$ 90u$(medium) 5u(x-small)">
									<h3>&nbsp;&nbsp;<u><b><a href="Downloads/Formation">Archives</a></b></u></h3>
									<ul style="margin-left: 3em; margin-right:3em">
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>


			<!-- Footer -->
				<?php include('footer.php'); ?>

		</div>

		<!-- Scripts -->
			<?php include('script.php'); ?>
                        <script>
                        function activate(elem) {
                            var x = document.getElementById(elem);
                            if (x.style.display === "none" || x.style.display === "") {
                                x.style.display = "block";
                            } else {
                                x.style.display = "none";
                            }
                        }
                        </script>
	</body>
</html>
