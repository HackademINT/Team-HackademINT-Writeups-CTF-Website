<h4 style="margin-top: 30px">Objectif</h4>
On cherche à déterminer d'où vient la musique contenue dans le fichier <a href="/writeups/StarHackademINT2018/Localisation2/music.mp3">music.mp3</a>.
<br />
<br />

<h4>Méthode</h4>


<p>Pour ce challenge, on dispose uniquement du fichier <code>music.mp3</code>.</p>
<p>À l'aide d'<code>exiftool</code>, il est possible de récupérer les informations suivantes sur ce fichier :</p>
<pre><code>$ exiftool music.mp3
ExifTool Version Number         : 10.40
File Name                       : music.mp3
Directory                       : .
File Size                       : 2.7 MB
File Modification Date/Time     : 2018:09:16 18:56:44+02:00
File Access Date/Time           : 2018:09:16 19:13:39+02:00
File Inode Change Date/Time     : 2018:09:18 12:39:11+02:00
File Permissions                : rw-r--r--
File Type                       : MP3
File Type Extension             : mp3
MIME Type                       : audio/mpeg
MPEG Audio Version              : 1
Audio Layer                     : 3
Sample Rate                     : 48000
Channel Mode                    : Stereo
MS Stereo                       : Off
Intensity Stereo                : Off
Copyright Flag                  : False
Original Media                  : False
Emphasis                        : None
VBR Frames                      : 7139
VBR Bytes                       : 2829456
VBR Scale                       : 0
ID3 Size                        : 51338
Encoder Settings                : Lavf57.71.100
Picture MIME Type               : image/jpeg
Picture Type                    : Front Cover
Picture Description             :
Picture                         : (Binary data 50320 bytes, use -b option to extract)
Title                           :
Artist                          :
Album                           :
Year                            :
Comment                         :
Genre                           : None
Audio Bitrate                   : 132 kbps
Duration                        : 0:02:51 (approx)</code></pre>
<p>On voit ainsi qu'une image accompagne le <code>.mp3</code>.</p>
<p>On continue avec <code>ffmpeg</code>.</p>
<pre><code>$ ffmpeg -i music.mp3 img.jpg</code></pre>
<p>Et on obtient l'image suivante :</p>
<div class="figure">
<p style="margin-top: 10px; text-align: center"> 
<img src="/writeups/StarHackademINT2018/Localisation2/koala.jpeg" alt="img.jpg" style="width:25.0%" />
</p>
<p class="caption" style="text-align: center">img.jpg</p>
</div>
<p>De nouveau un petit coup d'<code>exiftool</code> :</p>
<pre><code>$ exiftool img.jpg
ExifTool Version Number         : 10.40
File Name                       : img.jpg
Directory                       : .
File Size                       : 49 kB
File Modification Date/Time     : 2018:09:16 19:24:39+02:00
File Access Date/Time           : 2018:09:22 18:11:50+02:00
File Inode Change Date/Time     : 2018:09:18 12:39:11+02:00
File Permissions                : rw-r--r--
File Type                       : JPEG
File Type Extension             : jpg
MIME Type                       : image/jpeg
JFIF Version                    : 1.02
Exif Byte Order                 : Big-endian (Motorola, MM)
X Resolution                    : 96
Y Resolution                    : 96
Resolution Unit                 : None
Y Cb Cr Positioning             : Centered
GPS Version ID                  : 2.3.0.0
GPS Latitude                    : 35 deg 16&#39; 55.30&quot;
GPS Longitude                   : 149 deg 7&#39; 43.10&quot;
Comment                         : Lavc57.89.100
Image Width                     : 768
Image Height                    : 1024
Encoding Process                : Baseline DCT, Huffman coding
Bits Per Sample                 : 8
Color Components                : 3
Y Cb Cr Sub Sampling            : YCbCr4:4:4 (1 1)
Image Size                      : 768x1024
Megapixels                      : 0.786
GPS Position                    : 35 deg 16&#39; 55.30&quot;, 149 deg 7&#39; 43.10&quot;</code></pre>
<p>On obtient les coordonnées GPS recherchées. Une simple recherche permet de trouver un site capable de positionner ces coordonnées sur une carte, et en se basant par rapport au sud pour la latitude et par rapport à l'est pour la longitude, on se retrouve à Canberra.</p>
<p>Le flag est donc <code>starhack{Canberra}</code>.</p>

