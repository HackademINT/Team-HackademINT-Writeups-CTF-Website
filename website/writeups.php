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
      <div class="wrapper style1">
        <div class="container">
          <section>
            <a href="<?php echo $_SERVER["DOCUMENT_ROOT"] ?>/writeups/2018-2019/">
              <h3>&nbsp;&nbsp;<u><b>2018-2019</b></u></h3>
            </a>
            <ul style="margin-left: 3em; margin-right:3em; text-align: justify">
                <li>
                  <a onclick="activate('IceCTF')">IceCTF</a>
                  <div class="id" id="IceCTF">
                    <?php include('/writeups/2017-2018/IceCTF/icectf.php') ?>
                  </div>
                </li>
            </ul>
          </section>
        </div>
      </div>
      <div class="wrapper style1">
        <div class="container">
          <section>
            <a href="<?php echo $_SERVER["DOCUMENT_ROOT"] ?>/writeups/2017-2018">
              <h3>&nbsp;&nbsp;<u><b>2017-2018</b></u></h3>
            </a>
            <ul style="margin-left: 3em; margin-right:3em; text-align: justify">
              <?php
                ?>
                <li>
                  <a onclick="activate('TUCTF')">TUCTF</a>
                  <div class="id" id="TUCTF">
                    <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/2017-2018/TUCTF/tuctf.php') ?>
                  </div>
                </li>
                <li>
                  <a onclick="activate('JuniorCTF')">JuniorCTF</a>
                  <div class="id" id="JuniorCTF">
                    <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/2017-2018/JuniorCTF/juniorctf.php') ?>
                  </div>
                </li>
                <li>
                  <a onclick="activate('EvlzCTF')">EvlzCTF</a>
                  <div class="id" id="EvlzCTF">
                    <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/2017-2018/EvlzCTF/evlzctf.php') ?>
                  </div>
                </li>
                <li>
                  <a onclick="activate('EasyCTF')">EasyCTF</a>
                  <div class="id" id="EasyCTF">
                    <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/2017-2018/EasyCTF/easyctf.php') ?>
                  </div>
                </li>
                <li>
                  <a onclick="activate('TamuCTF')">TamuCTF</a>
                  <div class="id" id="TamuCTF">
                    <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/2017-2018/TamuCTF/tamuctf.php') ?>
                  </div>
                </li>
                <li>
                  <a onclick="activate('AngstromCTF')">AngstromCTF</a>
                  <div class="id" id="AngstromCTF">
                    <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/2017-2018/AngstromCTF/angstromctf.php') ?>
                  </div>
                </li>
                <li>
                  <a onclick="activate('BreizhCTF')">BreizhCTF</a>
                  <div class="id" id="BreizhCTF">
                    <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/2017-2018/BreizhCTF/breizhctf.php') ?>
                  </div>
                </li>
                <li>
                  <a onclick="activate('ESIEACTF')">ESIEACTF</a>
                  <div class="id" id="ESIEACTF">
                    <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/2017-2018/ESIEACTF/esieactf.php') ?>
                  </div>
                </li>
                <li>
                  <a onclick="activate('RCTF')">RCTF</a>
                  <div class="id" id="RCTF">
                    <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/2017-2018/RCTF/rctf.php') ?>
                  </div>
                </li>
            </ul>
          </section>
        </div>
      </div>
      <div class="wrapper style1">
        <div class="container">
          <section>
            <a href="<?php echo $_SERVER["DOCUMENT_ROOT"] ?>/writeups/StarHackademINT2018/">
              <h3>&nbsp;&nbsp;<u><b>StarHackademINT2018</b></u></h3>
            </a>
            <ul style="margin-left: 3em; margin-right:3em; text-align: justify">
              <?php
                ?>
                <li>
                  <a onclick="activate('ZipBruteforce')">ZipBruteforce</a>
                  <div class="id" id="ZipBruteforce">
        <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/StarHackademINT2018/Zip-Bruteforce/zip-bruteforce.php') ?>
                  </div>
    		</li>
                <li>
                  <a onclick="activate('Affine')">Affine</a>
                  <div class="id" id="Affine">
        <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/StarHackademINT2018/Affine/affine.php') ?>
                  </div>
		</li>
                <li>
                  <a onclick="activate('Bash')">Bash</a>
                  <div class="id" id="Bash">
        <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/StarHackademINT2018/Bash1/bash1.php') ?>
                  </div>
		</li>
		<li>
                  <a onclick="activate('Rail Fence')">Rail Fence</a>
                  <div class="id" id="Rail Fence">
        <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/StarHackademINT2018/RailFence/railfence.php') ?>
                  </div>
                </li>
                <li>
                  <a onclick="activate('Localisation2')">Localisation 2</a>
                  <div class="id" id="Localisation2">
        <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/StarHackademINT2018/Localisation2/localisation2.php') ?>
                  </div>
                </li>
                <li>
                  <a onclick="activate('PHPFilters')">PHP Filters</a>
                  <div class="id" id="PHPFilters">
        <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/StarHackademINT2018/PHPFilters/php_filters.php') ?>
                  </div>
                </li>
                <li>
                  <a onclick="activate('XorDifficile')">Xor Difficile</a>
                  <div class="id" id="XorDifficile">
        <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/StarHackademINT2018/XorDifficile/xor_difficile.php') ?>
                  </div>
                </li>
                <li>
                  <a onclick="activate('RSA Extreme')">RSA Extrême</a>
                  <div class="id" id="RSA Extreme">
        <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/StarHackademINT2018/RSA_Extreme/RSA_Extreme.php') ?>
                  </div>
                </li>
                <li>
                  <a onclick="activate('Zipperonni')">Zipperonni</a>
                  <div class="id" id="Zipperonni">
        <?php include($_SERVER["DOCUMENT_ROOT"].'/writeups/StarHackademINT2018/Zipperonni/Zipperonni.php') ?>
                  </div>
                </li>
            </ul>
          </section>
        </div>
      </div>
      <div class="wrapper style1">
        <div class="container">
          <section>
            <a href="<?php echo $_SERVER["DOCUMENT_ROOT"] ?>/writeups/KerberINT2017/Writeups KERBERINT 2017.pdf">
              <h3>&nbsp;&nbsp;<u><b>KerberINT2017</b></u></h3>
            </a>
          </section>
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
<style>
li {
  margin-right: 1em;
}
.wrapper {
  padding: 1em 0 1em 0
}
</style>
