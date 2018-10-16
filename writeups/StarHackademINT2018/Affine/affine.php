<h4 style="margin-top: 30px">Objectif</h4>

<p style="margin-top: 30px; text-align: center">
  <img src="/writeups/StarHackademINT2018/Affine/regle2.gif" width="80%" />
</p>
<p>
Dans ce challenge, on doit déchiffrer ce message : GEuyQu!?APwO_yG_~hL,2{uPy_~G1uu<=} chiffré à partir de ce script python, fourni sur le site du challenge:
</p>
<p style="margin-top: 30px">
<pre><code>#! /usr/bin/env python3
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

<p>
En voyant la définition de la fonction get_cipher, on voit bien que la méthode de chiffrement est
analogue à une méthode de substition, où on remplace un charactère par un autre
en fonction de sa place dans un alphabet, suivant la relation suivante : En posant x la position de la
lettre chiffrée dans l’alphabet, i la position de la lettre en clair dans l’alphabet :
x = (a*i + b)%94 avec 94 la longueur de l’alphabet donné, a et b des constantes choisies entre 0 et 93. 
</p>
<h4>Ma solution (plus ou moins dégueu)</h4>

<p>
En intuitant que le message chiffré commence par « starhack{», j’ai testé toutes les paires (a,b) telles
que le « s» soit chiffré en « G» grâce au script suivant :
</p>

<p style="margin-top: 30px">
<pre><code>catalogue=[];
for a in range(94):
    for b in range(94):
        if alpha[(a*alpha.index("s")+b)%len(alpha)]=="G":
            catalogue += [(a,b)]

</code></pre>
</p>

<p>
Puis parmis celles-ci, celles qui chiffrent "t" en "E":
</p>

<p style="margin-top: 30px">
<pre><code>catalogue2=[]
for elem in catalogue:
    (a,b)=elem
    if alpha[(a*alpha.index("t")+b)%len(alpha)]=="E":
            catalogue2 += elem
</code></pre>
</p>

<p>
Il ne nous reste plus qu'une seule paire possible: a=37 et b=35.
Pour pallier à l'utilisation du reste euclidien utilisé dans la formule de chiffrement (la place de la lettre chiffrée sera donc représentée par r), j'ai testé toutes les valeurs possibles du quotient en m'arrêtant à la première solution entière avec ce script:
</p>

<p style="margin-top: 30px">
<pre><code>def decode1(a,b,r):
    q=0
    while ((94*q +r-b)/a) - int((94*q +r-b)/(a)) != 0:
        q+=1
    return((94*q+r-b)/a)
</code></pre>
</p>
<p>
Il ne nous reste plus à qu'à déchiffrer le message pour obtenir le flag grâce à la fonction :
</p>
<p style="margin-top: 30px">
<pre><code>def decode(a,b,mess):
    clair = ""
    for char in mess:
        r=alpha.index(char)
        clair += alpha[int(decode1(a,b,r))]
    print(clair)
</code></pre>
</p>
<p>
En exécutant decode(37,35,"GEuyQu!?APwO_yG_~hL,2{uPy_~G1uu<=>}"), on obtient le flag : starhack{inverse_modulaire_swaag}
</p>
