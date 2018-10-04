<br />
Fichier <a href="WRITEUPS/2017-2018/EvlzCTF/LOL/lol">lol</a>
<br />
<br />
<pre><code class="hljs python">
#! /usr/bin/env python2.7
import binascii

fichier=open("lol","r")
ligne=fichier.readline()
L=[]
L.append(ligne)
chaine=L[0]

chaine2=""
for i in range(len(chaine)):
    if chaine[i]=="\t":
        chaine2+="1"
    else:
        chaine2+="0"

s = int('0b'+chaine2, 2)
flag=binascii.unhexlify('%x' % s)
print flag

</code></pre>
