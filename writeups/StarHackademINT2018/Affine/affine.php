<h4 style="margin-top: 30px">Objectif</h4>

Dans ce challenge, on doit déchiffrer un texte chiffré à partir d'un script python, fourni sur le site du challenge. <br />
<p style="margin-top: 30px; text-align: center">
  <img src="/writeups/StarHackademINT2018/Affine/regle2.gif" width="80%" />
</p>
<br />

<p style="margin-top: 30px">
<pre><code>
! /usr/bin/env python3
import string
import random

def get_coeff(alpha):
    a=random.randint(0,len(alpha)-1)
    b=random.randint(0,len(alpha)-1)
    return [a,b]

def get_cipher(a,b,plain,alpha):
    cipher=""
    for char in plain:
      cipher+=alpha[(a*alpha.index(char)+b)%len(alpha)]
    return cipher

def main():
    """
    alpha_old=string.printable[:-6]
    alpha=''.join(random.sample(alpha_old,len(alpha_old)))
    """
    alpha="S,1srI48NzUuT=)+<Kk{V(q#]Q:7>/!.fB&X[R^Pam'?_J9Mh%6-G*owiFlLZEpgW~2v}COc@b$|50\"eADt`;\YHdyjxn3"
    plain='<censored>'
    [a,b]=get_coeff(alpha)
    cipher=get_cipher(a,b,plain,alpha)
    return cipher

print(main())

</code></pre>
</p>
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
