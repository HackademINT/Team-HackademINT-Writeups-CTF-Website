---
title: "Reading between the eyes"
subtitle: "picoCTF"
author: "Archonte"
team: "HackademINT"
titlepage: true
toc: true
toc-own-page: true
titlepage-color: "607D8B"
titlepage-text-color: "FFFFFF"
titlepage-rule-color: "FFFFFF"
titlepage-rule-height: 2
colorlinks: true
---

On a ici une jolie image de Husky

![Il est vraiment trop mignon !](/home/xh/Images/picoCTF stegano/husky.png)

En effectuant une analyse bit à bit, on se rend comte que les bits de poids 0 de chaque couleur sont anormalement vides ...
Sauf tout en haut à gauche !


Comme on a déterminé qu'il y a quelquechose d'important sur ces bits, on les extrait pour regarder à quoi ça ressemble si on ne considère qu'eux.

![Tadaaa !](/home/xh/Images/picoCTF stegano/reading)

Le flag est donc picoCTF{r34d1ngb37w33n 7h3_by73s}.