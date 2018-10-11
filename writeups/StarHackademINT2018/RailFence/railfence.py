# -*- coding: utf-8 -*-
import numpy as np

chiffre="Jne3i g4c_lrp}o0.iR stS? _a qtveusade3ia _sstc-su_ti gula4 aszqp Gu pieruZ a _Rpt3a rlito{lnuk evcFmeaeerhnl rcalaeret e sstf etlt iastlger atqidiuu"

def chiffrement(message, rails):
    chiffre = ''
    n = len(message)
    zigzag = [['#']*n for _ in range(rails)]
    rail = 0
    for x in range(n):
        zigzag[rail][x] = message[x]
        if rail >= rails-1:
            dr = -1
        elif rail <= 0:
            dr = 1
        rail += dr
    for rail in range(rails):
        for x in range(n):
            if zigzag[rail][x] != '#':
                chiffre += zigzag[rail][x]
    return chiffre
    

if __name__ == "__main__":
    import random
    message = '<censored>'
    rails = random.randint(6,len(message)//3)
    chiffre = chiffrement(message, rails)
    print(chiffre)


# le but est de reconstruire le zigzag du rail fence a partir du chiffre donne afin d'obtenir le message clair

def init_zigzag(chiffre,rails): 
# initialise le zigzag avec un tableau de rails lignes et len(chiffre) colonnes avec des "#" aux emplacements vides et des "_" pour ceux qu'on veut occuper
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
    
def remplissage(chiffre,rails):
# parcourt le tableau initialise en remplacant les "_" rencontres par les lettres de chiffre
    compteur = 0
    zigzag = init_zigzag(chiffre,rails)
    for i in range(rails):
        for j in range(len(chiffre)):
            if zigzag[i][j] == "_":
                zigzag[i][j] = chiffre[compteur]
                compteur += 1
    return zigzag

def dechiffre(chiffre,rails):
# dechiffre le message du zigzag
    zigzag = remplissage(chiffre,rails)
    message = ""
    for j in range(len(chiffre)):
        for i in range(rails):
            if zigzag[i][j] != "#":
                message += zigzag[i][j]
    return message

# on ne connait pas la valeur de rails mais on sait qu'elle est comprise dans (6,len(chiffre)//3)
# il nous reste a tester toutes les possibilites de valeur pour rails jusqu'a trouver les messages qui contiennent "starhack" et selectionner celui qui nous interesse

def trouve_possibles(chiffre):
# renvoie une liste contenant tous les messages contenant "starhack{" avec leur valeur de rails associee
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
            
print(trouve_possibles(chiffre)) # ca ne marche pas tres bien (tristesse)
