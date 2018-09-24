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
							<h2>Writeups</h2>
						</header>
                                                </div>
                                                  <div class="2u">&nbsp;</div>        
                                                  <div class="8u 12u$(medium)">
                                                    <a href="https://ctftime.org/team/30462"><span class="image fit"><img src="images/ctfd.png" alt="" /></span></a>
                                                  </div>
                                                  <div class="2u">&nbsp;</div>        
                                            </div>
					</div>
                                  </div>
				</div>			
			
			<!-- Text -->

			<!-- List  -->
                                        <h2 align="center"><u><b>Liste des Writeups (& <a href="https://ctftime.org/team/30462">CTFTime</a>)</b></u></h2>
                                        <div id="main" class="wrapper style1">
                                          <div class="content">
                                                  <div class="container">
                                                          <div class="row">
                                                                  <div class="12u 12u$(medium)">
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
                                                                  <div class="12u 12u$(medium)">
                                                                          <h3>&nbsp;&nbsp;<u><b>2017-2018</b></u></h3>
                                                                          <ul style="margin-left: 3em; margin-right:3em; text-align: justify">
                                                                                  <?php
                                                                                  ?>
                                                                                  <li>
                                                                                  <a onclick="activate('TUCTF')">TUCTF</a>
                                                                                  <div class="id" id="TUCTF">
                                                                                    <?php include('WRITEUPS/2017-2018/TUCTF/tuctf.php') ?>
                                                                                  </div>
                                                                                  </li>
                                                                                  <li>
                                                                                  <a onclick="activate('JuniorCTF')">JuniorCTF</a>
                                                                                  <div class="id" id="JuniorCTF">
                                                                                    <?php include('WRITEUPS/2017-2018/JuniorCTF/juniorctf.php') ?>
                                                                                  </div>
                                                                                  </li>
                                                                                  <li>
                                                                                  <a onclick="activate('EvlzCTF')">EvlzCTF</a>
                                                                                  <div class="id" id="EvlzCTF">
                                                                                    <?php include('WRITEUPS/2017-2018/EvlzCTF/evlzctf.php') ?>
                                                                                  </div>
                                                                                  </li>
                                                                                  <li>
                                                                                  <a onclick="activate('EasyCTF')">EasyCTF</a>
                                                                                  <div class="id" id="EasyCTF">
                                                                                    <?php include('WRITEUPS/2017-2018/EasyCTF/easyctf.php') ?>
                                                                                  </div>
                                                                                  </li>
                                                                                  <li>
                                                                                  <a onclick="activate('TamuCTF')">TamuCTF</a>
                                                                                  <div class="id" id="TamuCTF">
                                                                                    <?php include('WRITEUPS/2017-2018/TamuCTF/tamuctf.php') ?>
                                                                                  </div>
                                                                                  </li>
                                                                                  <li>
                                                                                  <a onclick="activate('AngstromCTF')">AngstromCTF</a>
                                                                                  <div class="id" id="AngstromCTF">
                                                                                    <?php include('WRITEUPS/2017-2018/AngstromCTF/angstromctf.php') ?>
                                                                                  </div>
                                                                                  </li>
                                                                                  <li>
                                                                                  <a onclick="activate('BreizhCTF')">BreizhCTF</a>
                                                                                  <div class="id" id="BreizhCTF">
                                                                                    <?php include('WRITEUPS/2017-2018/BreizhCTF/breizhctf.php') ?>
                                                                                  </div>
                                                                                  </li>
                                                                                  <li>
                                                                                  <a onclick="activate('ESIEACTF')">ESIEACTF</a>
                                                                                  <div class="id" id="ESIEACTF">
                                                                                    <?php include('WRITEUPS/2017-2018/ESIEACTF/esieactf.php') ?>
                                                                                  </div>
                                                                                  </li>
                                                                                  <li>
                                                                                  <a onclick="activate('RCTF')">RCTF</a>
                                                                                  <div class="id" id="RCTF">
                                                                                    <?php include('WRITEUPS/2017-2018/RCTF/rctf.php') ?>
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
                                                                  <div class="12u 12u$(medium)">
                                                                          <a href="./WRITEUPS/StarHackademINT/">
                                                                          <h3>&nbsp;&nbsp;<u><b>StarHackademINT</b></u></h3>
                                                                          </a>
                                                                  </div>
                                                          </div>
                                                  </div>
                                          </div>
                </div>
                <!-- Footer -->
                                <?php include('footer.php'); ?>
                <!-- Scripts -->
                        <?php include ('script.php'); ?>
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
		</div>
       </body>
</html>
