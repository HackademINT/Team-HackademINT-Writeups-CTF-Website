#! /usr/bin/env python3
from itertools import cycle


def chiffrement(message, cle):
    chiffre = ""
    paires = zip(message, cycle(cle))

    for paire in paires:
        (x, y) = paire
        chiffre += chr(ord(x) ^ ord(y))
    return chiffre


f = open("xor.odt")
lines = f.readlines()
f.close()

line = ''

for l in lines:
    line += l

magic_nb = chr(0x50) + chr(0x4B) + chr(0x03) + chr(0x04)  # magic number d'un .odt
cle = ''


for i in range(4):  # à la recherche de la clé
    for j in range(256):
        if chr(ord(line[i]) ^ j) == magic_nb[i]:
            cle += chr(j)


chiffre = chiffrement(line, cle)  # en appliquant deux fois la transformation avec la même clé, on retrouve le fichier initial

fichier = open("xor2.odt", "w")
fichier.write(chiffre)
fichier.close()
