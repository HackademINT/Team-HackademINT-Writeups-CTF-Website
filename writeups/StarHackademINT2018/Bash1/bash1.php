<p style="margin-top: 30px; text-align: center">
  <img src="/writeups/StarHackademINT2018/Bash1/img" width="80%" />
</p>

<p>
Dans ces challenges, on doit trouver le flag sur une machine Bash fournie sur le site du challege.
</p>

<h4 style="margin-top: 30px">Bash #1</h4>
<p>
En arrivant sur le serveur, un<code>ls</code>nous apprend l'existence d'un fichier "flag.txt" que l'on peut tout simplement<code>cat</code>.

On obtient ainsi le flag : starhack{mZBuqpDYQzFV4JkSEfg0ATWLF}.
<p>

<h4 style="margin-top: 30px">Bash #2</h4>
<p>
Ici, un<code>ls</code>ne nous montre rien. En revanche un<code>ls -a</code>nous montre un fichier caché .flag.txt, que l'on peut<code>cat</code>.

On obtient ainsi le flag : starhack{q6xO8elfpDUPonQTuuutLb9Tg}
</p>

<h4 style="margin-top: 30px">Bash #3</h4>
<p>
Cette fois-ci, un<code>ls</code>nous affiche une liste de 1000 dossiers, nommés de "dossier 000" à "dossier 999". En faisant<code>cd dossier\ 000</code>on peut voir qu'il contient 10 fichiers, nommés "fichier 01", "fichier 02" etc... qui contiennent tous un flag. En se basant sur les challenges précédents, on peut se dire que seul le fichier "flag.txt", caché quelque part au milieu de ces 1000 dossiers nous donnera le vrai flag.
En tapant<code>find | grep "flag"</code>, on voit qu'un fichier flag.txt existe dans le dossier 543.

Il nous suffit de le<code>cat</code>pour obtenir le flag : starhack{q6xO8elfpDUPonQTuuutLb9Tg}
</p>

<h4 style="margin-top: 30px">Bash #4</h4>
<p>
On a encore une fois les mille fichiers présents, mais cette fois-ci,<code>find | grep "flag" </code>ne nous renvoie rien. Cependant, on peut remarquer que les fichiers se trouvant dans dossier 000 ne contiennent plus de flag. 

On peut donc utiliser<code>grep -r "starhack"</code>pour trouver le flag : starhack{BPjwnr10GmF0kM1znids9NMtg}, caché dans ~/dossier 729/fichier 03.
</p>

<h4 style="margin-top: 30px">Bash #5</h4>
<p>
Surprise ! Lorsque l'on tente de se connecter au serveur via ssh, on se prend un "retour à l'envoyeur", qui nous déconnecte aussi tôt que l'on arrive. Vu que l'on a absolument pas le temps d'entrer quoi que ce soit lors de la connection, l'astuce réside dans la commande de connection : En ajoutant la commande à exécuter directement après la commande de connection, celle-ci s'exécute avant la déconnexion. 

Ainsi, en faisant un<code>ssh bash5@IP_fournie_sur_le_site ls</code>, on voit qu'il exite un fichier flag.txt, que l'on peut ainsi<code>cat</code>de la même manière. 

On obtient ainsi le flag : starhack{OGJNhnuDS4JG7hknweSYRhYbR}
</p>
<h4 style="margin-top: 30px">Bash #6</h4>
<p>
Cette fois-là, on voit avec notre trusty<code>ls</code>deux fichiers : instructions.txt et sshkey.private. N'écoutant que notre instinct, on<code>cat</code>instructions.txt pour découvrir des... INSTRUCTIONS : "Connexion ssh en localhost avec le user bash6bis avec la clé privée RSA sshkey.private". En suivant les instructions (?!?), c'est à dire en exécutant la commande<code>ssh -i sshkey.private bash6bis@localhost</code>, on accède à un autre serveur bash, sur lequel notre trusty<code>ls</code>(again) nous dévoile l'existence de flag.txt que l'on peut<code>cat</code>, pour obtenir le flag : starhack{FZOSNkKayVsRwvS0mh2pXlpY6}.
</p>

<h4 style="margin-top: 30px">Bash #7</h4>
<p>
On découvre grâce à notre (once again) trust<code>ls</code>un fichier instructions.txt qui contient (once ag) des... INSTRUCTIONS (?!?) : "Connexion tcp sur l'ip de connexion / port 500 et/ou port 5000". Pour ce connecter en tcp, on utilise l'outil NetCat, grâce à la commande suivante :<code>nc IP.FOURNIE.SUR.LE.SITE 500</code>. Cela nous renvoie le flag : starhack{72BA46rGoflIUsL2q9hlnEmNL}.
PS: en essayant avec le port 5000, on trouve exactement le même flag. Le "et" des instructions était donc là pour nous induire en erreur (?!?!).
</p>

<h4 style="margin-top: 30px">Bash #8</h4>
<p>
Une fois de plus, on découvre un fichier instructions.txt (accompagné d'un script seconnecter, que l'on ne peut pas lire ni modifier, mais que l'on peut exécuter) que l'on va allègrement<code>cat</code>, pour y lire : Le script "seconnecter" permet d'écouter sur le port donné en argument. Si il reçoit le mot de passe actuel de session alors il renverra le flag. Envoyez le mot de passe et interrompez la commande instantanement après. 
On décide (une fois de plus) de suivre les instructions. On commence par exécuter le script seconnecter, qui nous renvoie ceci : "PORT ?". Sans aucune forme de politesse, ce script semble nous demander un port sur lequel il irait potentiellement écouter (si l'on en croit les instructions). A la louche, on intuite que le port 1234 est libre, et nous allons donc le renseigner au près de notre script mal-poli. Notons au passage que l'on a exécuté se connecter avec l'esperluette (<code>./seconnecter &</code>), ce qui nous permet d'utiliser le même terminal pour envoyer le mot de passe par nc, ce que nous allons prestement faire grâce à la commande suivante :
<pre><code>nc IP.FOURNIE.SUR.LE.SITE 1234
  >MOTDEPASSEDONNESURLESITE
</code></pre>
Comme les textes anciens (et les instructions) l'avaient prédit, en arrêtant de manière immédiate la commande<code>nc</code>via un CTRL+C judicieusement lancé, le script seconnecter nous renvoie le flag : starhack{GXQI473SlAxyzGGoz1jhEO8JW}.
</p>
