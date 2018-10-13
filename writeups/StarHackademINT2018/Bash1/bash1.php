<p style="margin-top: 30px; text-align: center">
  <img src="/writeups/StarHackademINT2018/Bash1/CTF\ Starhack.JPG" width="80%" />
</p>

<p>
Dans ces challenges, on doit trouver le flag sur une machine Bash fournie sur le site du challege.
</p>

<h4 style="margin-top: 30px">Bash1</h4>
<p>
En arrivant sur le serveur, un <pre><code>ls</code></pre> nous apprend l'existence d'un fichier "flag.txt" que l'on peut tout simplement <pre><code>cat<pre><code>.

On obtient ainsi le flag : starhack{mZBuqpDYQzFV4JkSEfg0ATWLF}.
<p>


<h4 style="margin-top: 30px">Bash2</h4>
<p>
Ici, un <pre><code>ls</code></pre> ne nous montre rien. En revanche un <pre><code>ls -a</code></pre> nous montre un fichier caché .flag.txt, que l'on peut <pre><code>cat</code></pre>.

On obtient ainsi le flag : starhack{q6xO8elfpDUPonQTuuutLb9Tg}
</p>


<h4 style="margin-top: 30px">Bash3</h4>
<p>
Cette fois-ci, un <pre><code>ls</code></pre> nous affiche une liste de 1000 dossiers, nommés de "dossier 000" à "dossier 999". En faisant <pre><code>cd dossier\ 000</code></pre> on peut voir qu'il contient 10 fichiers, nommés "fichier 01", "fichier 02" etc... qui contiennent tous un flag. En se basant sur les challenges précédents, on peut se dire que seul le fichier "flag.txt", caché quelque part au milieu de ces 1000 dossiers nous donnera le vrai flag.
En tapant <pre><code>find | grep "flag"</code></pre>, on voit qu'un fichier flag.txt existe dans le dossier 543.

Il nous suffit de le <pre><code>cat</code></pre> pour obtenir le flag : starhack{q6xO8elfpDUPonQTuuutLb9Tg}
</p>
<pre><code> </code></pre>


<h4 style="margin-top: 30px">Bash4</h4>
<p>
On a encore une fois les mille fichiers présents, mais cette fois-ci, <pre><code>find | grep "flag" </code></pre> ne nous renvoie rien. Cependant, on peut remarquer que les fichiers se trouvant dans dossier 000 ne contiennent plus de flag. 

On peut donc utiliser <pre><code>grep -r "starhack"</code></pre> pour trouver le flag : starhack{BPjwnr10GmF0kM1znids9NMtg}, caché dans ~/dossier 729/fichier 03.
</p>

<h4 style="margin-top: 30px">Bash5</h4>
<p>

</p>
