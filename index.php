<!DOCTYPE HTML>
<html>
	<?php include('head.php'); ?>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<?php include('menu.php'); ?>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
                                                      <h2><b>HackademINT</b></h2>
                                                        <p>
                                                        <span style="display: block;">Club de cybersécurité de <a href="https://www.minet.net">MiNET</a></span>
                                                        <span style="display: block;">Affiliation à <a href="https://www.telecom-sudparis.eu/">Telecom SudParis</a></span>
                                                        <span style="display: block;">Equipe compétitive de <a href="#zero">Capture The Flag</a></span>
						</header>
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
					</div>
					<a href="#zero" class="goto-next scrolly">Next</a>
				</section>

				<section id="zero" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/pic00.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="4u 12u$(medium)">
									<header>
									<h2>Qu'est ce qu'un CTF ?</h2>
										<p></p>
									</header>
                                                                </div>
								<div class="6u 12u$(medium)">
<p align="justify">
Petit rappel si vous vous êtes retrouvé ici par hasard. CTF est l’abbreviation de _Capture The Flag_ (Capture de Drapeau). Il s’agit d’un mode de jeu dans lequel plusieurs attaquants doivent voler un drapeau et le ramener chez eux. Le but du défenseur (qui n’est autre que l’organisateur du CTF, en général) est de protéger ses drapeaux.

Les CTF existent aussi en informatique, dans le domaine de la sécurité : les organisateurs mettent en place plusieurs épreuves et les participants doivent s’introduire dans un système afin de récupérer le drapeau (flag).

Ceci s’apparente à une intrusion dans un système réel, avec vol de données … sauf qu’ici le drapeau n’a pas de valeur monétaire, et personne ne vous en voudra.

Les CTF les plus célèbres sont ceux organisés par les grands groupes (par exemple : le CTF Google) ou lors de conférences dédiées à la sécurité (Defcon, le wargame de la NuitDuHack …).

Chaque épreuve validée rapporte des points selon sa difficulté estimée par les organisateurs. À la fin du CTF, un classement est établi et des récompenses peuvent être données aux meilleurs participants.
</p>
<p align="right" style="font-size:70%;">Source: <a href="https://ungeek.fr/le-petit-guide-du-chasseur-de-drapeaux/">ici</a></p>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
					<a href="#one" class="goto-next scrolly">Next</a>
                                </section>
				<section id="one" class="spotlight style2 bottom">
					<span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="8u 12u$(medium)">
									<header>
									<h2>À quoi s’attendre lors d’un CTF ?</h2>
										<p></p>
									</header>
								</div>
								<div class="24u 12u$(medium)">
									<p align="justify">
Un CTF est en général composé de plusieurs épreuves réparties dans différentes catégories et pour différents niveaux, du plus facile au plus difficile.
Savoir dans quelle catégorie se trouve un challenge peut aider à l&rsquo;appréhender.
<br />
Les catégories que l&rsquo;on retrouve en général; avec un exemple de challenge
</p>

<ul align="left">
<li align="justify"><strong>Binary Analysis</strong>/<strong>Reverse Engineering</strong> : on vous fournit un executable et vous devez extraire le drapeau. Il peut s&rsquo;agir d&rsquo;un mot de passe à trouver en inversant le fonctionnement du programme.</li>
<li align="justify"><strong>Web</strong> : un site web est accessible et vous devez trouver un <em>truc</em> intéressant qui pourrait s&rsquo;apparenter à un drapeau. Un mot de passe ? Le contenu du fichier nommé <em>flag</em> ?</li>
<li align="justify"><strong>Forensic</strong> : une machine a été compromise, on vous fournit RAM/Disque/Logs/&hellip; et vous devez trouver une information précise dedans (nom de la personne qui a compromis la machine ?).</li>
<li align="justify"><strong>Réseau</strong> : votre réseau a subi une attaque DoS et vous devez trouver qui l&rsquo;a attaqué et comment.</li>
<li align="justify"><strong>Cryptographie</strong> : Steve a implémenté un algorithme de chiffrement, il s&rsquo;est sans doute trompé à un moment (réutilisation d&rsquo;un nonce ?) et vous devez exploiter cette faille.</li>
<li align="justify"><strong>Mobile Security</strong> : un employé s&rsquo;est rendu compte que son téléphone était peut-être infecté par un mouchard. Vous devez trouver quelle application est responsable, le FLAG est dans l&rsquo;application.</li>
<li align="justify"><strong>Stéganographie</strong> : une information est cachée dans une image, à vous de la retrouver.</li>
<li align="justify"><strong>Physique</strong> (plus rare) : vous devez vous introduire dans un local fermé; vous avez une clé USB et devez extraire une information cachée dessus.</li>
</ul>
<!--
<p align="justify">Gardez bien en tête la consigne (s&rsquo;il y en a une) afin de savoir quoi chercher. Certains flags seront évidents, comme <code>NDH{....}</code> &hellip; d&rsquo;autres le seront moins (par exemple trouver le nom d&rsquo;un utilisateur ou le mot de passe d&rsquo;un compte).
Attaquez les épreuves en considérant qu&rsquo;il s&rsquo;agit de vrais systèmes, et qu&rsquo;ils ont été mis en place avec les mêmes erreurs que vous feriez : un dossier <code>.git</code> accessible, mauvaises permissions attribuées, mot de passe du compte admin est <code>admin</code> &hellip;</p>
-->

									</p>
<p align="right" style="font-size:70%;">Source: <a href="https://ungeek.fr/le-petit-guide-du-chasseur-de-drapeaux/">ici</a></p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/pic03.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Les plateformes indispensables</h2>
						</header>
						<p align="justify">
						Une plateforme rapide, accessible et réaliste pour tester vos compétences en hacking.<br>
						La root est longue mais la voie est Libre
</p>
						<ul class="actions">
							<li style="padding: 0.8em;"><a href="http://overthewire.org/wargames/" class="button">OverTheWire</a></li>
							<li style="padding: 0.8em;"><a href="https://www.root-me.org/" class="button">RootMe</a></li>
							<li style="padding: 0.8em;"><a href="https://www.newbiecontest.org" class="button">NewbieContest</a></li>
							<li style="padding: 0.8em;"><a href="http://www.france-ioi.org/algo/chapters.php" class="button">FranceIOI - Apprendre le Python</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Outils et Réseaux sociaux</h2>
						</header>
						<div class="box alt">
							<div class="row uniform">
								<section class="2u 6u(medium) 12u(xsmall)">
									<a href="https://gitlab.minet.net"><span class="icon alt major fa-gitlab"></span></a>
									<a href="https://gitlab.minet.net"><h3><u>GitLab</u></h3></a>
									<p>Tous les outils et les archives d'HackademINT des CTF passés</p>
								</section>
								<section class="2u 6u$(medium) 12u(xsmall)">
									<a href="https://ctftime.org/team/30462" ><span class="icon alt major fa-flag"></span></a>
									<a href="https://ctftime.org/team/30462"><h3><u>CTFTime</u></h3></a>
									<p>Suivez notre progression et nos classements sur les CTF</p>
								</section>
								<section class="2u 6u(medium) 12u(xsmall)">
									<a href="mailto:hackademint@listes.minet.net"><span class="icon alt major fa-envelope"></span></a>
									<h3><a href="mailto:hackademint@listes.minet.net"><u>Email</u></a></h3>
									<p>Vous êtes un étudiant ou un sponsor interessé par notre club ? Contactez nous </p>
								</section>
								<section class="2u 6u(medium) 12u(xsmall)">
									<a href="https://www.facebook.com/profile.php?id=100013306781604"><span class="icon alt major fa-facebook"></span></a>
									<h3><a href="https://www.facebook.com/profile.php?id=100013306781604"><u>Facebook</u></a></h3>
									<p style="color: transparent;">...<br/>...</p>
								</section>
								<section class="2u 6u(medium) 12u(xsmall)">
									<a href="https://twitter.com/hackademint"><span class="icon alt major fa-twitter"></span></a>
									<h3><a href="https://twitter.com/hackademint"><u>Twitter</u></a></h3>
									<p style="color: transparent;">...<br/>...</p>
								</section>
							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
				<?php include('footer.php'); ?>

		</div>
		<!-- Scripts -->
			<?php include ('script.php'); ?>

	</body>
</html>
