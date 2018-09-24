<br />
<a href="WRITEUPS/2017-2018/BreizhCTF/breizhkoinminer/gen.sh">download gen.sh</a>
<br />
<br />
Generate 42 sha-512 hashs starting by 1337
<br />
<pre><code class="hljs bash">
#! /bin/bash

echo '' > res.txt
lines=$(wc -l res.txt | cut -d' ' -f1)
while [ $lines -lt 42 ] ; do
	cat /dev/urandom | head -n 1 | base64 > temp
	hash=$(sha512sum temp | cut -d' ' -f1)
        short=$(echo $hash | cut -c1-4)
	if [ "$short" == "1337" ]; then
		echo $hash > res.txt
		echo $hash
	fi
        lines=$(wc -l res.txt | cut -d' ' -f1)
done

</code></pre>
