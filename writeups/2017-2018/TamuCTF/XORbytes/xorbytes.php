<br />
<a href="WRITEUPS/2017-2018/TamuCTF/XORbytes/hexxy">download hexxy</a>
<br />
<a href="WRITEUPS/2017-2018/TamuCTF/XORbytes/solve.py">download solve.py</a>
<br />
<br />
<pre><code class="hljs bash">
xxd hexxy | sort 

</code></pre>
output (extract) First line : 07 7d 21 is for 45 4C 46 (E L F)
<br />
<pre><code class="hljs bash">
00000000: 2e07 7d21 316d 3542 3575 7a50 6a6a 4434  ..}!1m5B5uzPjjD4

</code></pre>
Several lines : 51 42 ... 44 34 is for 00 00 ... 00 00
<br />
<pre><code class="hljs bash">
00000870: 5142 3167 336c 3442 3575 7a50 6a6a 4434  QB1g3l4B5uzPjjD4
...
00000da0: 5142 3167 336c 3442 3575 7a50 6a6a 4434  QB1g3l4B5uzPjjD4

</code></pre>
Let's script it with python
<br />
<pre><code class="hljs python">
#! /usr/bin/env python3
f = open("./hexxy", "rb")
startkey = b"|"
data = f.read()
startkey += bytes([ord('E') ^ data[1]]) #data[1]=0x07
startkey += bytes([ord('L') ^ data[2]]) #data[2]=0x7d
startkey += bytes([ord('F') ^ data[3]]) #data[3]=0x21

keypart = b""
keypart+= bytes([0 ^ int("51",16)])
keypart+= bytes([0 ^ int("42",16)])
keypart+= bytes([0 ^ int("31",16)])
keypart+= bytes([0 ^ int("67",16)])
keypart+= bytes([0 ^ int("33",16)])
keypart+= bytes([0 ^ int("6c",16)])
keypart+= bytes([0 ^ int("34",16)])
keypart+= bytes([0 ^ int("42",16)])
keypart+= bytes([0 ^ int("35",16)])
keypart+= bytes([0 ^ int("75",16)])
keypart+= bytes([0 ^ int("7a",16)])
keypart+= bytes([0 ^ int("50",16)])
keypart+= bytes([0 ^ int("6a",16)])
keypart+= bytes([0 ^ int("6a",16)])
keypart+= bytes([0 ^ int("44",16)])
keypart+= bytes([0 ^ int("34",16)])

print (startkey) #b'QB1g3l4B5uzPjjD4'
print (keypart)  #b'|B1g'
key=keypart
cleartext = b""

for i in range(len(data)):
    cleartext += bytes([key[i % len(key)] ^ data[i]])

out = open("cleartext", "wb")
out.write(cleartext)
out.close()

f.close()

</code></pre>
So now we get the output cleartext :
<br />
<pre><code class="hljs bash">
strings cleartext | grep -i gigem

</code></pre>
FLAG : GigEm{NibblerEatsNibbles}
<br />
