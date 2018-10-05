<h4 style="margin-top: 30px">Objectif</h4>
Il s'agit dans ce challenge de retrouver le mot de passe du fichier <a href="/writeups/StarHackademINT2018/Zip-Bruteforce/flag.zip">flag.zip</a> afin de retrouver la liste de course pour notre animal de compagnie affamé Jean Didier<br />
<p style="margin-top: 30px; text-align: center">
  <img src="/writeups/StarHackademINT2018/Zip-Bruteforce/koala.jpg" width="80%" />
</p>
<br />
<h4>Méthode</h4>

Comme suggéré par l'énoncé, on va utiliser ici fcrackzip en mode bruteforce pour trouver le
mot de passe qu'on sait de longueur strictement inférieure à 6.
<br/>

Il suffit alors de consulter la page de manuel de fcrackzip afin de connaitre les arguments qui nous sont utiles ici: <br/>
-b pour bruteforce <br/>
-l 1-5 pour indiquer qu'on cherche un mot de passe de longueur comprise entre 1 et 5 <br/>
-u pour que fcrackzip teste pour nous toutes les possibilités et nous renvoie celle qui marche. <br/>

La commande renverra au bout d'un certain temps (patience...):<br/>
<p style="margin-top: 30px">
<pre><code>fcrackzip -b -l 1-5 -u flag.zip


PASSWORD FOUND!!!!: pw = koala
</code></pre>
</p>
A partir de là, il ne reste plus qu'à saisir le mot de passe pour extraire le fichier <a href="/writeups/StarHackademINT2018/Zip-Bruteforce/flag.txt">flag.txt</a> qui contient le flag recherché !
(mais aucune trace de liste de course... dommage)
