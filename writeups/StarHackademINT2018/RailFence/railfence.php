<h4 style="margin-top: 30px">Principe du rail fence</h4>

<p>Le rail fence est une méthode de chiffrement qui consiste dans un premier temps à choisir un nombre de rails puis à écrire le message à chiffrer en zigzag sur le nombre de rails choisi. On recopie ensuite les lettres rail par rail pour obtenir le message chiffré.</p>

<p>Exemple pour 3 rails: "Message à chiffrer" <br /> 
écrit en palissade donne: <br />    
M---a---à---f---r <br />
-e-s-g- -c-i-f-e- <br />
--s---e---h---r-- <br />
d'où le message une fois chiffré: "Maàfresg cifesehr"</p>

<h4>Objectif du challenge</h4>

<p>On nous donne le message chiffré accompagné du <a href="../writeups/StarHackademINT2018/RailFence/ChiffreRailFence.py">script</a> qui a été utilisé pour le chiffrer. L'objectif est de retrouver à partir de là le plaintext sachant qu'on ne connait pas le nombre de rails.</p>

<h4>Résolution</h4>
<p>On va reconstruire le zigzag du rail fence à partir du ciphertext donné.<br />

On commence par définir une fonction qui initialise le zigzag en le modélisant par un tableau de <i>rails</i> lignes et <i>len(chiffre)</i> colonnes avec des "#" aux emplacements vides et des "_" pour ceux qu'on veut occuper.</p>

<pre><code type="python">import numpy as np #servira à la fin pour un affichage plus clair

chiffre="Jne3i g4c_lrp}o0.iR stS? _a qtveusade3ia _sstc-su_ti gula4 aszqp Gu pieruZ a _Rpt3a rlito{lnuk evcFmeaeerhnl rcalaeret e sstf etlt iastlger atqidiuu"

def init_zigzag(chiffre,rails):
    zigzag = [["#"]*len(chiffre) for i in range(rails)]
    # on reutilise le code de la fonction chiffrement donnee afin de positionner les "_" en zigzag
    rail = 0
    n = len(chiffre)
    for x in range(n):
        zigzag[rail][x] = "_"
        if rail >= rails-1:
            dr = -1
        elif rail <= 0:
            dr = 1
        rail += dr
    return zigzag
</code></pre>

<p>Une fois le tableau initialisé, on le parcourt ligne par ligne et on remplace les "_" rencontrés par les lettres de chiffre pour compléter notre zigzag:</p>

<pre><code type="python">def remplissage(chiffre,rails):
    compteur = 0
    zigzag = init_zigzag(chiffre,rails)
    for i in range(rails):
        for j in range(len(chiffre)):
            if zigzag[i][j] == "_":
                zigzag[i][j] = chiffre[compteur]
                compteur += 1
    return zigzag
</code></pre>

<p>On définit pour finir une fonction qui nous permet de déchiffrer le message à partir du zigzag. Il suffit pour cela de parcourir le tableau colonne par colonne.</p>

<pre><code>def dechiffre(chiffre,rails):
    zigzag = remplissage(chiffre,rails)
    message = ""
    for j in range(len(chiffre)):
        for i in range(rails):
            if zigzag[i][j] != "#":
                message += zigzag[i][j]
    return message
</code></pre>

<p>On ne connait pas la valeur de <i>rails</i> mais on sait qu'elle est comprise dans <i>(6,len(chiffre)//3)</i> Il nous reste a tester toutes les possibilités de valeur pour <i>rails</i> jusqu'à trouver les messages qui contiennent "starhack" et sélectionner celui qui nous intéresse.</p>

<pre><code>def trouve_possibles(chiffre):
    possibles = []
    for rails in range(6, len(chiffre)//3):
        message = dechiffre(chiffre,rails)
        trouve = False
        for i in range(len(message)):
            if message.find("starhack{") != -1:
                trouve = True
        if trouve:
            possibles.append([rails, message])
    return np.array(possibles)
</code></pre>

<p>On peut maintenant exécuter la fonction <i>trouve_possible</i> pour obtenir les messages qui contiennent starhack accompagné du nombre de rails correspondant.</p>

<pre><code>print(trouve_possibles(chiffre))
</pre></code>

<p>ce qui va renvoyer:</p>                           
<pre><code>[['34'
  'J3c}R?qsisug ppZRail Fence se trqui litteralement p i au_taat  o_in l0s_vd ctlsGeatrouver le flagaduitest starhack{l3 ruzai-_eeat.rge4piS u3ss 4q u_']
 ['35'
  'J3c}R?qsisug que Rail Fence se trqui litteralement par pau_taat  o_in l0s_vd ctls pu trouver le flagaduitest starhack{l3_ZiGzai-_eeat.rge4piS u3ss 4']
 ['36'
  'J3c}R?qsis-tu que Rail Fence se trqui litteralement par palissaat  o_in l0s_vd tu as pu trouver le flagaduitest starhack{l3_ZiGz4g_c_eeat.rge4piS u3']
 ['37'
  'J3c}RSavais-tu que Rail Fence se trqui litteralement par palissade ? o_in l0s que tu as pu trouver le flagaduitest starhack{l3_ZiGz4g_c_3st_t.rge4pi']
 ['38'
  'JegloRSavais-tu que Rail Fence se trqui litteralement par palissade ? 0r43nicp.s que tu as pu trouver le flagaduitest starhack{l3_ZiGz4g_c_3st_ti}_ ']
 ['39'
  'Je croRSavais-tu que Rail Fence se trqui litteralement par palissade ? 0p_g3ni4l}.s que tu as pu trouver le flagaduitest starhack{l3_ZiGz4g_c_3st_ti']
 ['40'
  'Je crois?avais-tu que Rail Fence se trqui litteralement par palissade  tR0p_g3ni4l}. S_que tu as pu trouver le flagaduitest starhack{l3_ZiGz4g_c_3st']
 ['41'
  'Je crois?atudis-tu que Rail Fence se trqui litteralement par palissaesv  tR0p_g3ni4l}. S_qea3 tu as pu trouver le flagaduitest starhack{l3_ZiGz4g_c_']
 ['42'
  'Je crois?atudi_tstu que Rail Fence se trqui litteralement par paliucsaesv  tR0p_g3ni4l}. S_qea3 s-_ as pu trouver le flagaduitest starhack{l3_ZiGz4g']
 ['43'
  'Je crois?atudi_tstgaaque Rail Fence se trqui litteralement par ps4uiucsaesv  tR0p_g3ni4l}. S_qea3 s-_ l z pu trouver le flagaduitest starhack{l3_ZiG']
 ['44'
  'Je crois?atudi_tstgaaqGpr Rail Fence se trqui litteralement pauiups4uiucsaesv  tR0p_g3ni4l}. S_qea3 s-_ l z  eZ trouver le flagaduitest starhack{l3_']
 ['45'
  'Je crois?atudi_tstgaaqGpr _t il Fence se trqui litteralementr3Rauiups4uiucsaesv  tR0p_g3ni4l}. S_qea3 s-_ l z  eZ palouver le flagaduitest starhack{']]
</code></pre> 

<p>Le message a un ordre légèrement aléatoire mais on peut repérer le flag: 
<strong>starhack{l3_ZiGz4g_c_3st_tR0p_g3ni4l}</strong></p>
