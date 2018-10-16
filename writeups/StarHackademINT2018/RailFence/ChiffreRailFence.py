#!/usr/bin/env python2
    
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
    print chiffre
