rm -rf tmp.folder
mkdir tmp.folder
file=$(ls | grep *zip)
rm tmp*
while(true); do
        echo "$file"
        rm wordlist
        search=$(echo $file | cut -d'.' -f1)
        cewl -d0 -m5 -c -w wordlist "https://en.wikipedia.org/wiki/""$search"
        cut -d',' -f1 wordlist > tmp && cp tmp wordlist && rm tmp
        fcrackzip -D -p wordlist -u $file >> tmp.pw
	unzip -P $(tail -n1 tmp.pw | cut -d' ' -f5) "$file" >> tmp.file
        mv "$file" tmp.folder
	file="$(tail -n1 tmp.file | cut -d':' -f2 | sed 's/ //g')"
	echo "$file" >> tmp.history
        if [ -z "$(echo $file | grep "zip")" ]; then
          break
        fi
done
rm tmp*
rm wordlist
