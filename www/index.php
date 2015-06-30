
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="http://<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<!-- R-Forge Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="http://r-forge.r-project.org/"><img src="http://<?php echo $themeroot; ?>/imagesrf/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>

<!-- end of project description -->

<p> The <strong>project summary page</strong> you can find <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>. </p>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="generator" content="pandoc" />

<meta name="author" content="Thomas Rusch" />

<meta name="date" content="2015-06-30" />

<title>How to use gRchain</title>



<style type="text/css">code{white-space: pre;}</style>
<style type="text/css">
div.sourceCode { overflow-x: auto; }
table.sourceCode, tr.sourceCode, td.lineNumbers, td.sourceCode {
  margin: 0; padding: 0; vertical-align: baseline; border: none; }
table.sourceCode { width: 100%; line-height: 100%; }
td.lineNumbers { text-align: right; padding-right: 4px; padding-left: 4px; color: #aaaaaa; border-right: 1px solid #aaaaaa; }
td.sourceCode { padding-left: 5px; }
code > span.kw { color: #007020; font-weight: bold; } /* Keyword */
code > span.dt { color: #902000; } /* DataType */
code > span.dv { color: #40a070; } /* DecVal */
code > span.bn { color: #40a070; } /* BaseN */
code > span.fl { color: #40a070; } /* Float */
code > span.ch { color: #4070a0; } /* Char */
code > span.st { color: #4070a0; } /* String */
code > span.co { color: #60a0b0; font-style: italic; } /* Comment */
code > span.ot { color: #007020; } /* Other */
code > span.al { color: #ff0000; font-weight: bold; } /* Alert */
code > span.fu { color: #06287e; } /* Function */
code > span.er { color: #ff0000; font-weight: bold; } /* Error */
code > span.wa { color: #60a0b0; font-weight: bold; font-style: italic; } /* Warning */
code > span.cn { color: #880000; } /* Constant */
code > span.sc { color: #4070a0; } /* SpecialChar */
code > span.vs { color: #4070a0; } /* VerbatimString */
code > span.ss { color: #bb6688; } /* SpecialString */
code > span.im { } /* Import */
code > span.va { color: #19177c; } /* Variable */
code > span.cf { color: #007020; font-weight: bold; } /* ControlFlow */
code > span.op { color: #666666; } /* Operator */
code > span.bu { } /* BuiltIn */
code > span.ex { } /* Extension */
code > span.pp { color: #bc7a00; } /* Preprocessor */
code > span.at { color: #7d9029; } /* Attribute */
code > span.do { color: #ba2121; font-style: italic; } /* Documentation */
code > span.an { color: #60a0b0; font-weight: bold; font-style: italic; } /* Annotation */
code > span.cv { color: #60a0b0; font-weight: bold; font-style: italic; } /* CommentVar */
code > span.in { color: #60a0b0; font-weight: bold; font-style: italic; } /* Information */
</style>
<style type="text/css">
  pre:not([class]) {
    background-color: white;
  }
</style>


<link href="data:text/css;charset=utf-8,body%7Bbackground%2Dcolor%3A%23fff%3Bmargin%3A1em%20auto%3Bmax%2Dwidth%3A700px%3Boverflow%3Avisible%3Bpadding%2Dleft%3A2em%3Bpadding%2Dright%3A2em%3Bfont%2Dfamily%3A%22Open%20Sans%22%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans%2Dserif%3Bfont%2Dsize%3A14px%3Bline%2Dheight%3A1%2E35%7D%23header%7Btext%2Dalign%3Acenter%7D%23TOC%7Bclear%3Aboth%3Bmargin%3A0%200%2010px%2010px%3Bpadding%3A4px%3Bwidth%3A400px%3Bborder%3A1px%20solid%20%23CCCCCC%3Bborder%2Dradius%3A5px%3Bbackground%2Dcolor%3A%23f6f6f6%3Bfont%2Dsize%3A13px%3Bline%2Dheight%3A1%2E3%7D%23TOC%20%2Etoctitle%7Bfont%2Dweight%3Abold%3Bfont%2Dsize%3A15px%3Bmargin%2Dleft%3A5px%7D%23TOC%20ul%7Bpadding%2Dleft%3A40px%3Bmargin%2Dleft%3A%2D1%2E5em%3Bmargin%2Dtop%3A5px%3Bmargin%2Dbottom%3A5px%7D%23TOC%20ul%20ul%7Bmargin%2Dleft%3A%2D2em%7D%23TOC%20li%7Bline%2Dheight%3A16px%7Dtable%7Bmargin%3A1em%20auto%3Bborder%2Dwidth%3A1px%3Bborder%2Dcolor%3A%23DDDDDD%3Bborder%2Dstyle%3Aoutset%3Bborder%2Dcollapse%3Acollapse%7Dtable%20th%7Bborder%2Dwidth%3A2px%3Bpadding%3A5px%3Bborder%2Dstyle%3Ainset%7Dtable%20td%7Bborder%2Dwidth%3A1px%3Bborder%2Dstyle%3Ainset%3Bline%2Dheight%3A18px%3Bpadding%3A5px%205px%7Dtable%2C%20table%20th%2C%20table%20td%7Bborder%2Dleft%2Dstyle%3Anone%3Bborder%2Dright%2Dstyle%3Anone%7Dtable%20thead%2C%20table%20tr%2Eeven%7Bbackground%2Dcolor%3A%23f7f7f7%7Dp%7Bmargin%3A0%2E5em%200%7Dblockquote%7Bbackground%2Dcolor%3A%23f6f6f6%3Bpadding%3A0%2E25em%200%2E75em%7Dhr%7Bborder%2Dstyle%3Asolid%3Bborder%3Anone%3Bborder%2Dtop%3A1px%20solid%20%23777%3Bmargin%3A28px%200%7Ddl%7Bmargin%2Dleft%3A0%7Ddl%20dd%7Bmargin%2Dbottom%3A13px%3Bmargin%2Dleft%3A13px%7Ddl%20dt%7Bfont%2Dweight%3Abold%7Dul%7Bmargin%2Dtop%3A0%7Dul%20li%7Blist%2Dstyle%3Acircle%20outside%7Dul%20ul%7Bmargin%2Dbottom%3A0%7Dpre%2C%20code%7Bbackground%2Dcolor%3A%23f7f7f7%3Bborder%2Dradius%3A3px%3Bcolor%3A%23333%7Dpre%7Bwhite%2Dspace%3Apre%2Dwrap%3Bborder%2Dradius%3A3px%3Bmargin%3A5px%200px%2010px%200px%3Bpadding%3A10px%7Dpre%3Anot%28%5Bclass%5D%29%7Bbackground%2Dcolor%3A%23f7f7f7%7Dcode%7Bfont%2Dfamily%3AConsolas%2C%20Monaco%2C%20%27Courier%20New%27%2C%20monospace%3Bfont%2Dsize%3A85%25%7Dp%20%3E%20code%2C%20li%20%3E%20code%7Bpadding%3A2px%200px%7Ddiv%2Efigure%7Btext%2Dalign%3Acenter%7Dimg%7Bbackground%2Dcolor%3A%23FFFFFF%3Bpadding%3A2px%3Bborder%3A1px%20solid%20%23DDDDDD%3Bborder%2Dradius%3A3px%3Bborder%3A1px%20solid%20%23CCCCCC%3Bmargin%3A0%205px%7Dh1%7Bmargin%2Dtop%3A0%3Bfont%2Dsize%3A35px%3Bline%2Dheight%3A40px%7Dh2%7Bborder%2Dbottom%3A4px%20solid%20%23f7f7f7%3Bpadding%2Dtop%3A10px%3Bpadding%2Dbottom%3A2px%3Bfont%2Dsize%3A145%25%7Dh3%7Bborder%2Dbottom%3A2px%20solid%20%23f7f7f7%3Bpadding%2Dtop%3A10px%3Bfont%2Dsize%3A120%25%7Dh4%7Bborder%2Dbottom%3A1px%20solid%20%23f7f7f7%3Bmargin%2Dleft%3A8px%3Bfont%2Dsize%3A105%25%7Dh5%2C%20h6%7Bborder%2Dbottom%3A1px%20solid%20%23ccc%3Bfont%2Dsize%3A105%25%7Da%7Bcolor%3A%230033dd%3Btext%2Ddecoration%3Anone%7Da%3Ahover%7Bcolor%3A%236666ff%7Da%3Avisited%7Bcolor%3A%23800080%7Da%3Avisited%3Ahover%7Bcolor%3A%23BB00BB%7Da%5Bhref%5E%3D%22http%3A%22%5D%7Btext%2Ddecoration%3Aunderline%7Da%5Bhref%5E%3D%22https%3A%22%5D%7Btext%2Ddecoration%3Aunderline%7Dcode%20%3E%20span%2Ekw%7Bcolor%3A%23555%3Bfont%2Dweight%3Abold%7Dcode%20%3E%20span%2Edt%7Bcolor%3A%23902000%7Dcode%20%3E%20span%2Edv%7Bcolor%3A%2340a070%7Dcode%20%3E%20span%2Ebn%7Bcolor%3A%23d14%7Dcode%20%3E%20span%2Efl%7Bcolor%3A%23d14%7Dcode%20%3E%20span%2Ech%7Bcolor%3A%23d14%7Dcode%20%3E%20span%2Est%7Bcolor%3A%23d14%7Dcode%20%3E%20span%2Eco%7Bcolor%3A%23888888%3Bfont%2Dstyle%3Aitalic%7Dcode%20%3E%20span%2Eot%7Bcolor%3A%23007020%7Dcode%20%3E%20span%2Eal%7Bcolor%3A%23ff0000%3Bfont%2Dweight%3Abold%7Dcode%20%3E%20span%2Efu%7Bcolor%3A%23900%3Bfont%2Dweight%3Abold%7Dcode%20%3E%20span%2Eer%7Bcolor%3A%23a61717%3Bbackground%2Dcolor%3A%23e3d2d2%7D" rel="stylesheet" type="text/css" />

</head>

<body>



<div id="header">
<h1 class="title">How to use gRchain</h1>
<h4 class="author"><em>Thomas Rusch</em></h4>
<h4 class="date"><em>2015-06-30</em></h4>
</div>


<p>This is a short document intended to introduce the reader into the usage of the gRchain package. Currently, it supports block recursive chain graph models (Cox &amp; Wermuth, 1996) by via the main function <code>coxwer()</code>.</p>
<div id="introduction" class="section level2">
<h2>Introduction</h2>
<p>In complex research problems that involve a large number of potentially important variables or feature a complicated dependence structure, the joint probability distribution of the involved random variables can only be unsatisfactorily modelled with classical statistical models. Often some structure in the joint distribution allows to factorize it into conditionally independent components which gave rise to a class of models known as Graphical Models. By representing the joint distribution as a graph with nodes and edges, Graphical Models can exploit possible conditional independence structures in the joint distribution and allow restoring the joint distribution from the components.</p>
<p>A subclass of Graphical Models, Chain Graph Models, can be of particular interest for problems. A chain graph is a graph which may have both directed and undirected edges but is devoid of any directed cycles. In these models, a researcher can use substantive knowledge to categorize the variables as purely explanatory (predictor), purely dependent or target (response) or intermediate (response and predictor in turn). Each of these variables is assigned to a certain block, based on a partial ordering of the variables, meaning that the ordering is present between blocks but not within blocks. This approach leads to a chain of relationships between the different variables.</p>
<p>The challenging task of fitting a full Chain Graph Model to the data is facilitated by the factorization property which allows maximizing the joint likelihood by reducing the problem to maximizing the likelihood for each factorized submodel. However, in case of different variable types in the same block (e.g., metric and categorical variables) ML estimation using the direct factorization strategy often does not converge or can computationally be very expensive. As a remedy, Cox &amp; Wermuth (1996) propose the heuristic usage of a system of univariate models for each factorized component.</p>
<p>In this vignette we introduce an R implementation of the Cox-Wermuth selection strategy that allows to fit a Chain Graph Model for metric and categorical random variables from exponential families and thus incorporates the class of Generalized Linear Models in the chain. For illustration we apply the procedure to a highly multivariate data set that features many different types of variables.</p>
</div>
<div id="graphical-models" class="section level2">
<h2>Graphical Models</h2>
<p>Graphical models (GM) allow multivariate analysis of complex dependency structures. They are probability distributions over a multidimensional space encoded by graphs (as a set of vertices/variables, <span class="math inline">\(V\)</span>, and a set of edges/relationships between variables, <span class="math inline">\(E\)</span>). There are different types:</p>
<ul>
<li>Undirected GM (e.g., Markov random fields)</li>
<li>Directed GM (e.g., Bayesian Networks, DAG)</li>
<li>Chain GM</li>
</ul>
<p>GM represent multivariate dependencies by conditional dependence and independence statements. Thus they can help in reducing overall complexity and allow model formulation, identification and selection.</p>
<p>A simple graphical model (a Markov random field):</p>
<p><embed src="data:application/pdf;base64,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b2JlLmNvbS9wZGYvMS4zLycgcGRmOlByb2R1Y2VyPSdHUEwgR2hvc3RzY3JpcHQgOS4wNScvPgo8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0ndXVpZDphOGRiZWI4ZC1hYmJhLTExZWQtMDAwMC02YmU1MzY1YjJjNTYnIHhtbG5zOnhtcD0naHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyc+PHhtcDpNb2RpZnlEYXRlPjIwMTMtMDItMTBUMTc6MjI6NDkrMDE6MDA8L3htcDpNb2RpZnlEYXRlPgo8eG1wOkNyZWF0ZURhdGU+MjAxMy0wMi0xMFQxNzoyMjo0OSswMTowMDwveG1wOkNyZWF0ZURhdGU+Cjx4bXA6Q3JlYXRvclRvb2w+VW5rbm93bkFwcGxpY2F0aW9uPC94bXA6Q3JlYXRvclRvb2w+PC9yZGY6RGVzY3JpcHRpb24+CjxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSd1dWlkOmE4ZGJlYjhkLWFiYmEtMTFlZC0wMDAwLTZiZTUzNjViMmM1NicgeG1sbnM6eGFwTU09J2h0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8nIHhhcE1NOkRvY3VtZW50SUQ9J3V1aWQ6YThkYmViOGQtYWJiYS0xMWVkLTAwMDAtNmJlNTM2NWIyYzU2Jy8+CjxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSd1dWlkOmE4ZGJlYjhkLWFiYmEtMTFlZC0wMDAwLTZiZTUzNjViMmM1NicgeG1sbnM6ZGM9J2h0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvJyBkYzpmb3JtYXQ9J2FwcGxpY2F0aW9uL3BkZic+PGRjOnRpdGxlPjxyZGY6QWx0PjxyZGY6bGkgeG1sOmxhbmc9J3gtZGVmYXVsdCc+VW50aXRsZWQ8L3JkZjpsaT48L3JkZjpBbHQ+PC9kYzp0aXRsZT48L3JkZjpEZXNjcmlwdGlvbj4KPC9yZGY6UkRGPgo8L3g6eG1wbWV0YT4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAo8P3hwYWNrZXQgZW5kPSd3Jz8+CmVuZHN0cmVhbQplbmRvYmoKMiAwIG9iago8PC9Qcm9kdWNlcihHUEwgR2hvc3RzY3JpcHQgOS4wNSkKL0NyZWF0aW9uRGF0ZShEOjIwMTMwMjEwMTcyMjQ5KzAxJzAwJykKL01vZERhdGUoRDoyMDEzMDIxMDE3MjI0OSswMScwMCcpPj5lbmRvYmoKeHJlZgowIDEyCjAwMDAwMDAwMDAgNjU1MzUgZiAKMDAwMDAwMDM4MiAwMDAwMCBuIAowMDAwMDA1NDkzIDAwMDAwIG4gCjAwMDAwMDAzMjMgMDAwMDAgbiAKMDAwMDAwMDE2OSAwMDAwMCBuIAowMDAwMDAwMDE1IDAwMDAwIG4gCjAwMDAwMDAxNTEgMDAwMDAgbiAKMDAwMDAwMDQ0NyAwMDAwMCBuIAowMDAwMDAwNTQ3IDAwMDAwIG4gCjAwMDAwMDA0ODggMDAwMDAgbiAKMDAwMDAwMDUxNyAwMDAwMCBuIAowMDAwMDA0MDcyIDAwMDAwIG4gCnRyYWlsZXIKPDwgL1NpemUgMTIgL1Jvb3QgMSAwIFIgL0luZm8gMiAwIFIKL0lEIFs8RjU0NUU0NTE0RjU3RURGQUEwMjEwQTI0NjY4RkIyNTM+PEY1NDVFNDUxNEY1N0VERkFBMDIxMEEyNDY2OEZCMjUzPl0KPj4Kc3RhcnR4cmVmCjU2MTYKJSVFT0YK"></embed></p>
<p>In GM the Markov property of graphs allows to factorize the distribution <span class="math inline">\(F_V\)</span> into a set of conditional distributions, e.g., for <span class="math inline">\(V=\{A,B,C,D\}\)</span> by way of densities: <span class="math inline">\(f_V=f_{A|B} \times f_{B|C} \times f_{C|D} \times f_D\)</span>. Thus the problem of fitting graphical models effectively reduces to estimating a series of conditional distributions.</p>
</div>
<div id="chain-graph-models" class="section level2">
<h2>Chain Graph Models</h2>
<p>Chain graph models (CGM) are a mixture of directed and undirected graphical models. They are particularly interesting for social and behavioral sciences (observational studies, complex multivariate dependencies, existing substantive knowledge). In CGM, all variables are assigned to <strong>boxes</strong> (disjoint variable subsets <span class="math inline">\(V_t, V=\bigcup_t V_t\)</span> by theory or substantive knowledge. Between boxes exist <strong>directed</strong> edges, within boxes the edges are <strong>undirected</strong>,</p>
<p>Two types of CGM:</p>
<ul>
<li>Univariate recursive regression graph model (URRG; one variable per block)<br />
</li>
<li>Joint response chain graph model (JRCG; more than one variable per block)</li>
</ul>
<div id="factorization" class="section level3">
<h3>Factorization</h3>
<p>A joint response chain graph model:</p>
<p><embed src="data:application/pdf;base64,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SD81SD+AIkg/Q0g/NUg/gCJIP0NIPzVIP4AiSD9DSD81SD+AIkg/Qy7SD17yMv0AZuNN+sFL+DlSg/QDKIL0M4SfIzVIP4AiSD9D/w8XsT1cCmVuZHN0cmVhbQplbmRvYmoKMTEgMCBvYmoKPDwvVHlwZS9NZXRhZGF0YQovU3VidHlwZS9YTUwvTGVuZ3RoIDEzNDQ+PnN0cmVhbQo8P3hwYWNrZXQgYmVnaW49J++7vycgaWQ9J1c1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCc/Pgo8P2Fkb2JlLXhhcC1maWx0ZXJzIGVzYz0iQ1JMRiI/Pgo8eDp4bXBtZXRhIHhtbG5zOng9J2Fkb2JlOm5zOm1ldGEvJyB4OnhtcHRrPSdYTVAgdG9vbGtpdCAyLjkuMS0xMywgZnJhbWV3b3JrIDEuNic+CjxyZGY6UkRGIHhtbG5zOnJkZj0naHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIycgeG1sbnM6aVg9J2h0dHA6Ly9ucy5hZG9iZS5jb20vaVgvMS4wLyc+CjxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSd1dWlkOmFjNmY3MjhkLWFiYmEtMTFlZC0wMDAwLWUyNGEwNzRiMzNiNCcgeG1sbnM6cGRmPSdodHRwOi8vbnMuYWRvYmUuY29tL3BkZi8xLjMvJyBwZGY6UHJvZHVjZXI9J0dQTCBHaG9zdHNjcmlwdCA5LjA1Jy8+CjxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSd1dWlkOmFjNmY3MjhkLWFiYmEtMTFlZC0wMDAwLWUyNGEwNzRiMzNiNCcgeG1sbnM6eG1wPSdodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvJz48eG1wOk1vZGlmeURhdGU+MjAxMy0wMi0xMFQxNzoyMjo1NSswMTowMDwveG1wOk1vZGlmeURhdGU+Cjx4bXA6Q3JlYXRlRGF0ZT4yMDEzLTAyLTEwVDE3OjIyOjU1KzAxOjAwPC94bXA6Q3JlYXRlRGF0ZT4KPHhtcDpDcmVhdG9yVG9vbD5Vbmtub3duQXBwbGljYXRpb248L3htcDpDcmVhdG9yVG9vbD48L3JkZjpEZXNjcmlwdGlvbj4KPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9J3V1aWQ6YWM2ZjcyOGQtYWJiYS0xMWVkLTAwMDAtZTI0YTA3NGIzM2I0JyB4bWxuczp4YXBNTT0naHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLycgeGFwTU06RG9jdW1lbnRJRD0ndXVpZDphYzZmNzI4ZC1hYmJhLTExZWQtMDAwMC1lMjRhMDc0YjMzYjQnLz4KPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9J3V1aWQ6YWM2ZjcyOGQtYWJiYS0xMWVkLTAwMDAtZTI0YTA3NGIzM2I0JyB4bWxuczpkYz0naHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8nIGRjOmZvcm1hdD0nYXBwbGljYXRpb24vcGRmJz48ZGM6dGl0bGU+PHJkZjpBbHQ+PHJkZjpsaSB4bWw6bGFuZz0neC1kZWZhdWx0Jz5VbnRpdGxlZDwvcmRmOmxpPjwvcmRmOkFsdD48L2RjOnRpdGxlPjwvcmRmOkRlc2NyaXB0aW9uPgo8L3JkZjpSREY+CjwveDp4bXBtZXRhPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCjw/eHBhY2tldCBlbmQ9J3cnPz4KZW5kc3RyZWFtCmVuZG9iagoyIDAgb2JqCjw8L1Byb2R1Y2VyKEdQTCBHaG9zdHNjcmlwdCA5LjA1KQovQ3JlYXRpb25EYXRlKEQ6MjAxMzAyMTAxNzIyNTUrMDEnMDAnKQovTW9kRGF0ZShEOjIwMTMwMjEwMTcyMjU1KzAxJzAwJyk+PmVuZG9iagp4cmVmCjAgMTIKMDAwMDAwMDAwMCA2NTUzNSBmIAowMDAwMDAwMzc4IDAwMDAwIG4gCjAwMDAwMTIzMjAgMDAwMDAgbiAKMDAwMDAwMDMxOSAwMDAwMCBuIAowMDAwMDAwMTY0IDAwMDAwIG4gCjAwMDAwMDAwMTUgMDAwMDAgbiAKMDAwMDAwMDE0NiAwMDAwMCBuIAowMDAwMDAwNDQzIDAwMDAwIG4gCjAwMDAwMDA1NDMgMDAwMDAgbiAKMDAwMDAwMDQ4NCAwMDAwMCBuIAowMDAwMDAwNTEzIDAwMDAwIG4gCjAwMDAwMTA4OTkgMDAwMDAgbiAKdHJhaWxlcgo8PCAvU2l6ZSAxMiAvUm9vdCAxIDAgUiAvSW5mbyAyIDAgUgovSUQgWzwwRUVCODhGOTRBODcxMjIyRjdGMzU0QkVBRjJFMDdEND48MEVFQjg4Rjk0QTg3MTIyMkY3RjM1NEJFQUYyRTA3RDQ+XQo+PgpzdGFydHhyZWYKMTI0NDMKJSVFT0YK"></embed></p>
<p>In CGM factorization happens at least <strong>recursively between blocks</strong>: <span class="math inline">\(f_{V}=f_{V_{T}|{V_{T-1},\dots, V_1}} \times f_{V_{T-1}|{V_{T-2},\dots, V_1}} \times \dots \times f_{V_1}\)</span>. Possibly additional conditional independence by missing edges, e.g., for the above graph <span class="math inline">\(f_{V}=f_{F| C,E,D,A,B} \times f_{C,E,D|A,B} \times f_{A,B}=f_{F|C,E} \times f_{C,D|A,B} \times f_{E|B} \times f_{A,B}\)</span>.</p>
</div>
<div id="estimation" class="section level3">
<h3>Estimation</h3>
<p>For CGM there are no theoretical restrictions on the form of the conditional distributions (though usually conditional Gaussian distributions; Lauritzen &amp; Wermuth, 1989). In particular variable types can be of <strong>mixed type within and between boxes</strong> (discrete and continuous components). General algorithms for computing estimates in every CGM under every possible variable type specification is challenging. One can attempt to fit the conditional distributions of the factorization with a <strong>series of multiple univariate conditional regressions</strong> (Wermuth &amp; Cox, 2001). These are called traceable regressions.</p>
<p>Cox &amp; Wermuth (1996; see also Caputo et al., 1997) lay out ideas for a heuristic selection strategy to approximate the CGM by univariate conditional regressions which is implemented in <code>coxwer</code>.</p>
<p>The <code>coxwer</code> Selection Algorithm:</p>
<ul>
<li>Start in the block with the lowest number</li>
<li>Take one variable from that block. Fit main effects model with all the variables in the same block or higher block.</li>
<li>Screen for quadratic effects (metric variables; orthogonal contrasts) and two-way interactions by adding of single terms. Retain the ones with an associated p-value &lt; <code>signif</code> (defaults to 0.01).</li>
<li>Fit the model with main and retained effects.</li>
<li>Use backward selection to reduce the model. We do this with an information Criterion (BIC by default).</li>
<li>Re-enter interactions for the terms that remain in the model.</li>
<li>Use backward selection.</li>
<li>Re-enter quadratic terms for remaining effects (orthogonal contrasts).</li>
<li>Use backward selection.</li>
<li>If other variables in the same block: Repeat for them. Else: jump to the next higher block and repeat.</li>
</ul>
</div>
</div>
<div id="the-coxwer-functionality" class="section level1">
<h1>The coxwer Functionality</h1>
<p>We implemented an algorithm based on the ideas of the Cox-Wermuth heuristic in R for approximate fitting of JRCG and URRG models.</p>
<p>Currently, there are the following functions intended for the user:</p>
<table>
<thead>
<tr class="header">
<th align="left">Object</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td align="left"><code>cw-class</code></td>
<td align="left">S3 class for objects from a Cox-Wermuth fit</td>
</tr>
<tr class="even">
<td align="left"><code>coxwer</code></td>
<td align="left">Fit a JRCG or a URRG via Cox-Wermuth selection strategy</td>
</tr>
<tr class="odd">
<td align="left"><code>summary, print, plot, predict</code></td>
<td align="left">S3 methods for class cw</td>
</tr>
<tr class="even">
<td align="left"><code>adjmatrix</code></td>
<td align="left">Extracts the adjacency matrix</td>
</tr>
<tr class="odd">
<td align="left"><code>write_cw</code></td>
<td align="left">Writes and saves the graph in igraph format</td>
</tr>
<tr class="even">
<td align="left"><code>prep_coxwer</code></td>
<td align="left">Setup of variable frame, block membership and variable type (interactive)</td>
</tr>
</tbody>
</table>
<div id="using-the-function" class="section level2">
<h2>Using the  Function</h2>
<p>There are two ways of using the coxwer function: either with a formula or with a var.frame. We will use the Contraceptive Method Choice (CMC) data set for illustration which is a subset of the 1987 National Indonesia Contraceptive Prevalence Survey (Lim et. al., 1999). Overall there are 1473 observations of married women on 10 variables:</p>
<ul>
<li>Age (<code>age</code>; continuous)</li>
<li>Education (<code>wifeEdu</code>; ordinal 1=low, 2, 3, 4=high)</li>
<li>Husband’s education (<code>husbEdu</code>; ordinal 1=low, 2, 3, 4=high)</li>
<li>Number of children ever born (<code>nrChild</code>; count)</li>
<li>Religion (<code>wifeRel</code>; binary; 0=Non-Islam 1=Islam)</li>
<li>Wife’s now working? (<code>wifeWork</code>; binary 0=Yes, 1=No)</li>
<li>Husband’s occupation (<code>husbOcc</code>; categorical 1, 2, 3, 4)</li>
<li>Standard-of-living index (<code>solIndex</code>; ordinal 1=low, 2, 3, 4=high)</li>
<li>Media exposure (<code>mediaExp</code>; binary 0=Good, 1=Not good)</li>
<li>Contraceptive method used (<code>contraceptive</code>; categorical 1=No-use 2=Long-term 3=Short-term)</li>
</ul>
<p>We assume the following block structure:</p>
<ul>
<li>Block 1 - Purely dependent (target) variables: contraceptive, nrChild</li>
<li>Block 2 - Intermediate variable: mediaExp</li>
<li>Block 3 - Intermediate variable: solIndex</li>
<li>Block 4 - Intermediate variables: wifeEdu, husbEdu, wifeRel, wifeWork, husbOcc</li>
<li>Block 5 - Purely explanatory variable: age</li>
</ul>
<p>Blocks must always be numbered like this: Increasing integers starting from 1. The purely target variables are always in block 1, the purely explanatory variables are always in Block K where K is the highest block number (here 5). The blocks in between are labeled in the reverse direction of dependencies. We will abreviate this with Bx which stands for block x (Vx stands for variable x; so B5V2 is Block 5 Variable 2). Variables in BK have no antecedents (but possibly undirected dependencies within the block), variables in BK-1 have all variables in BK as antecedents and variables in BK-1 as possible undirected dependencies, variables in BK-2 have all variables in BK and BK-1 as antecedents and variables in BK-2 as possible undirected dependencies and so on until variables in B1 which have all variables in higher numbered blocks as antecedents.</p>
<p>The model is therefore of this type (we use ~ for directed edges, and + for undirected edges; the brackets are there for easier readability)</p>
<pre><code>(B1V1 + B1V2 + ...) ~ (B2V1 + B2V2 + ...) ~ (B3V1 + B3V2 + B3V3 + ...)</code></pre>
<p>For the example it is</p>
<pre><code>B1V1 + B1V2 ~ B2V1 ~ B3V1 ~ B4V1 + B4V2 + B4V3 + B4V4 + B4V5 ~ B5V1</code></pre>
<div id="fitting-the-model-with-a-formula" class="section level3">
<h3>Fitting the model with a formula</h3>
<p>The formula interface to coxwer basically allows to specifiy the directed dependencies between block with the operator <code>~</code> and the undirected within the block by <code>+</code>. The structure is therefore:</p>
<pre><code>B1V1 + B1V2 + ... ~  B2V1 + B2V2 + ... ~  B3V1 + B3V2 + B3V3 + ...</code></pre>
<p>Or for the example</p>
<pre><code>contraceptive + nrChild ~ mediaExp ~ solIndex ~ wifeRel + wifeWork + husbOcc + wifeEdu + husbEdu ~ age</code></pre>
<p>One can the use the function with</p>
<div class="sourceCode"><pre class="sourceCode r"><code class="sourceCode r"><span class="kw">data</span>(cmc)
rescmc &lt;-<span class="st"> </span><span class="kw">coxwer</span>(contraceptive +<span class="st"> </span>nrChild ~<span class="st">              </span><span class="co">#Block 1</span>
<span class="st">                 </span>mediaExp ~<span class="st">                             </span><span class="co">#Block 2</span>
<span class="st">                 </span>solIndex ~<span class="st">                             </span><span class="co">#Block 3</span>
<span class="st">                 </span>wifeRel +<span class="st"> </span>wifeWork +<span class="st"> </span>husbOcc +<span class="st"> </span>wifeEdu +<span class="st"> </span>husbEdu ~<span class="st"> </span><span class="co">#Block 4 </span>
<span class="st">                 </span>age,                                   <span class="co">#Block 5</span>
                 <span class="dt">data=</span>cmc)</code></pre></div>
<p>Note that when using the formula interface, it might be a good idea to specify the <code>vartype</code> argument (see below).</p>
</div>
<div id="fitting-the-model-with-a-var.frame" class="section level3">
<h3>Fitting the model with a <code>var.frame</code></h3>
<p>Here the <code>coxwer</code> argument is a variable frame and an observations <span class="math inline">\(\times\)</span> variables data frame. The variable frame defines the block and type of a variable. It must have the same row names as the data frame has column names. The var.frame must have the following structure: It needs two columns names <code>type</code> and <code>block</code>, which specify the variable type (and thus the model used; see below) and the <code>block</code> to which each variable belongs. The <code>rownames</code> of the var.frame must match the <code>colnames</code> of the data frame. <code>type</code> should be character (so use <code>stringsAsfactors=FALSE</code> when manually setting it up with <code>data.frame()</code>) and <code>block</code> must be whole numbers starting from 1 in increments of 1. Subsequently there is an example for the <code>cmc</code> data</p>
<div class="sourceCode"><pre class="sourceCode r"><code class="sourceCode r">cmc_prep</code></pre></div>
<pre><code>##                type block
## age            cont     5
## wifeEdu         ord     4
## husbEdu         ord     4
## nrChild       count     1
## wifeRel         bin     4
## wifeWork        bin     4
## husbOcc       categ     4
## solIndex        ord     3
## mediaExp        bin     2
## contraceptive categ     1</code></pre>
<p>The <code>prep_coxwer</code> function allows to define the variable frame interactively.</p>
<div class="sourceCode"><pre class="sourceCode r"><code class="sourceCode r">cmc_prep &lt;-<span class="st"> </span><span class="kw">prep_coxwer</span>(cmc)</code></pre></div>
<p>Once the var.frame is set up one can fit the model by</p>
<div class="sourceCode"><pre class="sourceCode r"><code class="sourceCode r"><span class="kw">data</span>(cmc)
rescmc &lt;-<span class="st"> </span><span class="kw">coxwer</span>(<span class="dt">var.frame=</span>cmc_prep, <span class="dt">data=</span>cmc)</code></pre></div>
</div>
</div>
<div id="further-arguments-to-coxwer" class="section level2">
<h2>Further arguments to <code>coxwer</code></h2>
<p><code>coxwer</code> allows to specify further arguments:</p>
<ul>
<li><code>vartype</code>: This is an important argument especially for using the formual interface. When using the formula interface without a specified vartype , the function attempts to automatically detect the variable type from the data frame. This works fairly well for factors but is crude for metric variables. For the latter it will always specify an OLS model. Setting vartype allows to fine tune the model used for the variables (see below). If this argumnet is used, then the order of characters in vartype must correspond to the variable in formula from left to right, or in var.frame from top to bottom.</li>
<li><code>adjfile</code>: Save the adjacency matrix to a file.</li>
<li><code>automatch</code>: Automatically assign the data type to the variables in the data frame according to variable type in the variable frame (the reverse of the autodetection)</li>
<li><code>pen</code>, <code>signif</code>: Arguments for screening and model selection. <code>pen</code> is the penalty for the information criterion used in <code>stepAIC</code> and <code>signif</code> the significance level when screening for higher-order effects and non-linearities.<br />
</li>
<li><code>contrasts</code>: The contrasts to be used for categorical predictors. Defaults to dummy coding for ordered and unordered factors.</li>
<li><code>restr</code>: Allows to fix certain edges to 0, i.e., those edges are ignored for the model selection. It must be a binary matrix of the same dimension as the adjacency matrix between all variables where <code>0</code> stands for a dependency that is not considered, whereas <code>1</code> means fit that edge. *<code>silent</code>: Flag for whether model fitting progress should be printed.</li>
</ul>
<p>Depending on the type of variable, <code>coxwer</code> can use different univariate models</p>
<ul>
<li>For binary targets (<code>vartype=&quot;binary&quot;</code>): binomial logistic models <code>stats::glm(...,family=binomial,link=logit</code></li>
<li>For unrestricted metric targets (<code>vartype=&quot;metric&quot;</code>, <code>vartype=&quot;continuous&quot;</code>, <code>vartype=&quot;gaussian&quot;</code>): OLS/Gaussian linear models <code>stats::glm(...,family=gaussian,link=identity)</code>. When autodetection is done, this is used per default for every metric variable that is not further specified (message is printed in that case).<br />
</li>
<li>For positive continuous targets (<code>vartype=&quot;gamma&quot;</code>,<code>vartype=&quot;invgaussian&quot;</code>): gamma or inverse Gaussian GLM <code>stats::glm(...,family=Gamma,link=inverse)</code> <code>stats::glm(...,family=inverse.gaussian,link=1/mu^2</code></li>
<li>For count targets (<code>vartype=&quot;count&quot;</code>,<code>vartype=&quot;odcount&quot;</code>): Poisson or negative binomial loglinear models <code>stats::glm(...,family=poisson,link=log)</code> <code>MASS::glm.nb(...,link=log)</code></li>
<li>For categorical targets (<code>vartype=&quot;categorical&quot;</code>,<code>vartype=&quot;factor&quot;</code>): multinomial logistic models <code>nnet::multinom(...,link=logit)</code></li>
<li>For ordinal targets (<code>vartype=&quot;ordinal&quot;</code>): proportional odds logistic models <code>MASS::polr(...,link=logit)</code></li>
</ul>
<p>Predictors we treat as metric or as ordered/unordered factors (dummy–treatment–coding by default).</p>
<p>Using exponential families with canonical links assures that properties of conditional Gaussian graphs are approximately retained even when fitted with the CW procedure.</p>
</div>
<div id="worked-example" class="section level2">
<h2>Worked Example</h2>
<p>We now fit the model to the cmc data by using the formula interface.</p>
<div class="sourceCode"><pre class="sourceCode r"><code class="sourceCode r"><span class="kw">data</span>(cmc)
rescmc &lt;-<span class="st"> </span><span class="kw">coxwer</span>(contraceptive +<span class="st"> </span>nrChild ~<span class="st"> </span>mediaExp ~<span class="st"> </span>solIndex ~<span class="st"> </span>
<span class="st">                 </span>wifeRel +<span class="st"> </span>wifeWork +<span class="st"> </span>husbOcc +<span class="st"> </span>wifeEdu +<span class="st"> </span>husbEdu ~<span class="st"> </span>age, 
                 <span class="dt">data=</span>cmc)</code></pre></div>
<pre><code>## Some models for continuous/metric variables are not further specified. Ordinary least squares estimation is used by default. You can specify a different model type with the 'vartype' argument.</code></pre>
<pre><code>## TARGET: contraceptive (multinomial logit model)
## TARGET: nrChild (ordinary least squares model)
## TARGET: mediaExp (binomial logit model)
## TARGET: solIndex (proportional odds logit model)
## TARGET: wifeRel (binomial logit model)
## TARGET: wifeWork (binomial logit model)
## TARGET: husbOcc (multinomial logit model)
## TARGET: wifeEdu (proportional odds logit model)
## TARGET: husbEdu (proportional odds logit model)</code></pre>
<p>S3 methods are available. Print prints the adjacency matrix.</p>
<div class="sourceCode"><pre class="sourceCode r"><code class="sourceCode r"><span class="kw">print</span>(rescmc) </code></pre></div>
<pre><code>## Adjacency Matrix:
## 
##                   1  2  3  4  5  6  7  8  9 10
##  1 contraceptive  0  1  0  0  0  0  0  0  0  0
##  2 nrChild        1  0  0  0  0  0  0  0  0  0
##  3 mediaExp       0  0  0  0  0  0  0  0  0  0
##  4 solIndex       0  0  1  0  0  0  0  0  0  0
##  5 wifeRel        0  1  0  1  0  0  1  1  1  0
##  6 wifeWork       0  1  0  0  0  0  0  1  0  0
##  7 husbOcc        0  0  0  1  1  0  0  1  1  0
##  8 wifeEdu        1  1  1  1  1  0  1  0  1  0
##  9 husbEdu        0  0  0  1  0  0  1  1  0  0
## 10 age            1  1  1  1  1  0  1  1  1  0</code></pre>
<p>It has to be read the following way: rows encode whether a directed edge from a row variable to a column variable exists. Then the entry is <code>1</code>, an edge from one variable to another; columns encode whether the variable has an edge coming towards it from a row. If it is <code>0</code> no edge exists. In the example, column ten (for age) has only <code>0</code> in the column as it is purely explanatory, so no edges lead to it. Conversely, it has edges that lead to all variables but <code>wifeWork</code> (seen in row 10). <code>wifeWork</code> is not explained by anything here (columns) but is associated with <code>nrChild</code>, and <code>wifeEdu</code>. Note that the adjacency matrix needs not be symmetric.</p>
<p>One can summarize the object by extracting the model summaries for specific target variables by name or for all with <code>target=&quot;all&quot;</code>. If no target is given, nothing is returned.</p>
<div class="sourceCode"><pre class="sourceCode r"><code class="sourceCode r"><span class="kw">summary</span>(rescmc,<span class="dt">target=</span><span class="kw">c</span>(<span class="st">&quot;contraceptive&quot;</span>,<span class="st">&quot;nrChild&quot;</span>))</code></pre></div>
<pre><code>## ---------- Summary for target variable: contraceptive ----------
## Call:
## nnet::multinom(formula = y ~ nrChild + wifeEdu + age + I(poly(nrChild, 
##     2)[, 2]), data = data, Hess = TRUE, model = TRUE, trace = FALSE, 
##     MaxNWts = dim(data)[1] + 1)
## 
## Coefficients:
##   (Intercept) nrChild wifeEdu2 wifeEdu3 wifeEdu4      age
## 2      -2.293  0.3578   0.8821   1.8373    3.096 -0.04836
## 3       1.745  0.3558   0.2366   0.6443    1.337 -0.11909
##   I(poly(nrChild, 2)[, 2])
## 2                   -25.60
## 3                   -26.44
## 
## Std. Errors:
##   (Intercept) nrChild wifeEdu2 wifeEdu3 wifeEdu4     age
## 2      0.5139 0.04444   0.4047   0.3870   0.3817 0.01212
## 3      0.3756 0.04058   0.2482   0.2453   0.2462 0.01137
##   I(poly(nrChild, 2)[, 2])
## 2                    3.570
## 3                    3.224
## 
## Value/SE (Wald statistics):
##   (Intercept) nrChild wifeEdu2 wifeEdu3 wifeEdu4     age
## 2      -4.462   8.051   2.1794    4.748    8.112  -3.991
## 3       4.646   8.768   0.9532    2.627    5.433 -10.476
##   I(poly(nrChild, 2)[, 2])
## 2                   -7.171
## 3                   -8.202
## 
## Residual Deviance: 2708 
## AIC: 2736 
## ---------- Summary for target variable: nrChild ----------
## 
## Call:
## stats::glm(formula = y ~ contraceptive + wifeRel + wifeWork + 
##     wifeEdu + I(poly(age, 2)), family = currfamily, data = data)
## 
## Deviance Residuals: 
##    Min      1Q  Median      3Q     Max  
## -5.801  -1.057  -0.167   0.929  10.402  
## 
## Coefficients:
##                  Estimate Std. Error t value Pr(&gt;|t|)
## (Intercept)       2.10561    0.22420    9.39  &lt; 2e-16
## contraceptive2    1.02986    0.13158    7.83  9.5e-15
## contraceptive3    0.99954    0.11312    8.84  &lt; 2e-16
## wifeRel1          0.82276    0.14000    5.88  5.2e-09
## wifeWork1         0.52631    0.11164    4.71  2.7e-06
## wifeEdu2         -0.00114    0.18427   -0.01  0.99508
## wifeEdu3         -0.29816    0.18113   -1.65  0.09996
## wifeEdu4         -1.11024    0.17797   -6.24  5.8e-10
## I(poly(age, 2))1 53.31834    1.94461   27.42  &lt; 2e-16
## I(poly(age, 2))2 -6.64633    1.88877   -3.52  0.00045
## 
## (Dispersion parameter for gaussian family taken to be 3.349)
## 
##     Null deviance: 8188.4  on 1472  degrees of freedom
## Residual deviance: 4899.6  on 1463  degrees of freedom
## AIC: 5973
## 
## Number of Fisher Scoring iterations: 2</code></pre>
<p>We see that the model for <code>nrChild</code> is an OLS model (due to autodetection). But since <code>nrChild</code> is a count it might be better to tell the function that.</p>
<div class="sourceCode"><pre class="sourceCode r"><code class="sourceCode r"><span class="kw">data</span>(cmc)
rescmc &lt;-<span class="st"> </span><span class="kw">coxwer</span>(contraceptive +<span class="st"> </span>nrChild ~<span class="st"> </span>mediaExp ~<span class="st"> </span>solIndex ~<span class="st"> </span>
<span class="st">                 </span>wifeRel +<span class="st"> </span>wifeWork +<span class="st"> </span>husbOcc +<span class="st"> </span>wifeEdu +<span class="st"> </span>husbEdu ~<span class="st"> </span>age, 
                 <span class="dt">vartype=</span><span class="kw">c</span>(<span class="st">&quot;cate&quot;</span>,<span class="st">&quot;count&quot;</span>,<span class="st">&quot;bin&quot;</span>,<span class="st">&quot;ord&quot;</span>,<span class="st">&quot;bin&quot;</span>,<span class="st">&quot;bin&quot;</span>,
                           <span class="st">&quot;ord&quot;</span>,<span class="st">&quot;ord&quot;</span>,<span class="st">&quot;ord&quot;</span>,<span class="st">&quot;metric&quot;</span>), 
                 <span class="dt">data=</span>cmc)</code></pre></div>
<pre><code>## Some models for continuous/metric variables are not further specified. Ordinary least squares estimation is used by default. You can specify a different model type with the 'vartype' argument.</code></pre>
<pre><code>## TARGET: contraceptive (multinomial logit model)
## TARGET: nrChild (poisson loglinear model)
## TARGET: mediaExp (binomial logit model)
## TARGET: solIndex (proportional odds logit model)
## TARGET: wifeRel (binomial logit model)
## TARGET: wifeWork (binomial logit model)
## TARGET: husbOcc (proportional odds logit model)
## TARGET: wifeEdu (proportional odds logit model)
## TARGET: husbEdu (proportional odds logit model)</code></pre>
<div class="sourceCode"><pre class="sourceCode r"><code class="sourceCode r"><span class="kw">summary</span>(rescmc,<span class="dt">target=</span><span class="kw">c</span>(<span class="st">&quot;contraceptive&quot;</span>,<span class="st">&quot;nrChild&quot;</span>))</code></pre></div>
<pre><code>## ---------- Summary for target variable: contraceptive ----------
## Call:
## nnet::multinom(formula = y ~ nrChild + wifeEdu + age + I(poly(nrChild, 
##     2)[, 2]), data = data, Hess = TRUE, model = TRUE, trace = FALSE, 
##     MaxNWts = dim(data)[1] + 1)
## 
## Coefficients:
##   (Intercept) nrChild wifeEdu2 wifeEdu3 wifeEdu4      age
## 2      -2.293  0.3578   0.8821   1.8373    3.096 -0.04836
## 3       1.745  0.3558   0.2366   0.6443    1.337 -0.11909
##   I(poly(nrChild, 2)[, 2])
## 2                   -25.60
## 3                   -26.44
## 
## Std. Errors:
##   (Intercept) nrChild wifeEdu2 wifeEdu3 wifeEdu4     age
## 2      0.5139 0.04444   0.4047   0.3870   0.3817 0.01212
## 3      0.3756 0.04058   0.2482   0.2453   0.2462 0.01137
##   I(poly(nrChild, 2)[, 2])
## 2                    3.570
## 3                    3.224
## 
## Value/SE (Wald statistics):
##   (Intercept) nrChild wifeEdu2 wifeEdu3 wifeEdu4     age
## 2      -4.462   8.051   2.1794    4.748    8.112  -3.991
## 3       4.646   8.768   0.9532    2.627    5.433 -10.476
##   I(poly(nrChild, 2)[, 2])
## 2                   -7.171
## 3                   -8.202
## 
## Residual Deviance: 2708 
## AIC: 2736 
## ---------- Summary for target variable: nrChild ----------
## 
## Call:
## stats::glm(formula = y ~ contraceptive + wifeRel + wifeWork + 
##     wifeEdu + age + I(poly(age, 2)[, 2]), family = currfamily, 
##     data = data)
## 
## Deviance Residuals: 
##    Min      1Q  Median      3Q     Max  
## -3.362  -0.648  -0.103   0.534   3.591  
## 
## Coefficients:
##                      Estimate Std. Error z value Pr(&gt;|z|)
## (Intercept)          -1.22834    0.11021  -11.15  &lt; 2e-16
## contraceptive2        0.33405    0.03952    8.45  &lt; 2e-16
## contraceptive3        0.34824    0.03575    9.74  &lt; 2e-16
## wifeRel1              0.26392    0.04437    5.95  2.7e-09
## wifeWork1             0.17109    0.03505    4.88  1.1e-06
## wifeEdu2              0.01222    0.05007    0.24     0.81
## wifeEdu3             -0.07574    0.04964   -1.53     0.13
## wifeEdu4             -0.35135    0.04961   -7.08  1.4e-12
## age                   0.05817    0.00212   27.48  &lt; 2e-16
## I(poly(age, 2)[, 2]) -5.16323    0.62203   -8.30  &lt; 2e-16
## 
## (Dispersion parameter for poisson family taken to be 1)
## 
##     Null deviance: 2529.0  on 1472  degrees of freedom
## Residual deviance: 1452.1  on 1463  degrees of freedom
## AIC: 5530
## 
## Number of Fisher Scoring iterations: 5</code></pre>
<p>We can use the <code>igraph</code> facilities to plot the model. After some tweeking and ordering the vertices according to the block structure we have</p>
<div class="sourceCode"><pre class="sourceCode r"><code class="sourceCode r"><span class="kw">plot</span>(rescmc)</code></pre></div>
<p><embed src="data:application/pdf;base64,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NyAwIG9iago8PC9UeXBlL0V4dEdTdGF0ZQovT1BNIDE+PmVuZG9iagoxMCAwIG9iago8PC9SNwo3IDAgUj4+CmVuZG9iagoxMSAwIG9iago8PC9SOAo4IDAgUj4+CmVuZG9iago4IDAgb2JqCjw8L0Jhc2VGb250L1ZGS0VNRCtOaW1idXNSb21hbk5vOUwvRm9udERlc2NyaXB0b3IgOSAwIFIvVHlwZS9Gb250Ci9GaXJzdENoYXIgNjcvTGFzdENoYXIgMTIwL1dpZHRoc1sgNjY3IDAgNjExIDAgMCAwIDMzMyAwIDAgMCAwIDAgNzIyCjAgMCA2NjcgMCAwIDAgMCA5NDQgMCAwIDAgMCAwIDAgMCAwCjAgNDQ0IDUwMCA0NDQgNTAwIDQ0NCAzMzMgNTAwIDUwMCAyNzggMCA1MDAgMjc4IDc3OCA1MDAgNTAwCjUwMCAwIDMzMyAzODkgMjc4IDUwMCA1MDAgNzIyIDUwMF0KL0VuY29kaW5nL1dpbkFuc2lFbmNvZGluZy9TdWJ0eXBlL1R5cGUxPj4KZW5kb2JqCjkgMCBvYmoKPDwvVHlwZS9Gb250RGVzY3JpcHRvci9Gb250TmFtZS9WRktFTUQrTmltYnVzUm9tYW5ObzlML0ZvbnRCQm94WzAgLTIxOCA5MzIgNjgzXS9GbGFncyAzMgovQXNjZW50IDY4MwovQ2FwSGVpZ2h0IDY3NgovRGVzY2VudCAtMjE4Ci9JdGFsaWNBbmdsZSAwCi9TdGVtViAxMzkKL01pc3NpbmdXaWR0aCA1MDAKL1hIZWlnaHQgNDYwCi9DaGFyU2V0KC9DL0UvSS9PL1IvVy9hL2IvYy9kL2UvZi9nL2gvaS9rL2wvbS9uL28vcC9yL3MvdC91L3Yvdy94KS9Gb250RmlsZTMgMTIgMCBSPj4KZW5kb2JqCjEyIDAgb2JqCjw8L0ZpbHRlci9GbGF0ZURlY29kZQovU3VidHlwZS9UeXBlMUMvTGVuZ3RoIDM0ODU+PnN0cmVhbQp4nGVXeVRT17o/MZB9riK2pKlJ1YTbqvXWoWjbK1zbqgX0WnEAmQSRQZDBkDBmgIyQhOGDQEZCgEQGE2ZQRItVqYpW29vW2tartS26ejto7+u6dt239uEe3nCi7633x1vrrLPOOvvb+5t/32+ziKAFBIvFemZvYXFO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d29yayAxLjYnPgo8cmRmOlJERiB4bWxuczpyZGY9J2h0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMnIHhtbG5zOmlYPSdodHRwOi8vbnMuYWRvYmUuY29tL2lYLzEuMC8nPgo8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0ndXVpZDpiOWU3MjYwYS1hYmQ3LTExZWQtMDAwMC1lMjYxNmU0OTJlNmQnIHhtbG5zOnBkZj0naHR0cDovL25zLmFkb2JlLmNvbS9wZGYvMS4zLycgcGRmOlByb2R1Y2VyPSdHUEwgR2hvc3RzY3JpcHQgOS4wNScvPgo8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0ndXVpZDpiOWU3MjYwYS1hYmQ3LTExZWQtMDAwMC1lMjYxNmU0OTJlNmQnIHhtbG5zOnhtcD0naHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyc+PHhtcDpNb2RpZnlEYXRlPjIwMTMtMDItMTBUMjA6NTA6NTMrMDE6MDA8L3htcDpNb2RpZnlEYXRlPgo8eG1wOkNyZWF0ZURhdGU+MjAxMy0wMi0xMFQyMDo1MDo1MyswMTowMDwveG1wOkNyZWF0ZURhdGU+Cjx4bXA6Q3JlYXRvclRvb2w+VW5rbm93bkFwcGxpY2F0aW9uPC94bXA6Q3JlYXRvclRvb2w+PC9yZGY6RGVzY3JpcHRpb24+CjxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSd1dWlkOmI5ZTcyNjBhLWFiZDctMTFlZC0wMDAwLWUyNjE2ZTQ5MmU2ZCcgeG1sbnM6eGFwTU09J2h0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8nIHhhcE1NOkRvY3VtZW50SUQ9J3V1aWQ6YjllNzI2MGEtYWJkNy0xMWVkLTAwMDAtZTI2MTZlNDkyZTZkJy8+CjxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSd1dWlkOmI5ZTcyNjBhLWFiZDctMTFlZC0wMDAwLWUyNjE2ZTQ5MmU2ZCcgeG1sbnM6ZGM9J2h0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvJyBkYzpmb3JtYXQ9J2FwcGxpY2F0aW9uL3BkZic+PGRjOnRpdGxlPjxyZGY6QWx0PjxyZGY6bGkgeG1sOmxhbmc9J3gtZGVmYXVsdCc+VW50aXRsZWQ8L3JkZjpsaT48L3JkZjpBbHQ+PC9kYzp0aXRsZT48L3JkZjpEZXNjcmlwdGlvbj4KPC9yZGY6UkRGPgo8L3g6eG1wbWV0YT4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAo8P3hwYWNrZXQgZW5kPSd3Jz8+CmVuZHN0cmVhbQplbmRvYmoKMiAwIG9iago8PC9Qcm9kdWNlcihHUEwgR2hvc3RzY3JpcHQgOS4wNSkKL0NyZWF0aW9uRGF0ZShEOjIwMTMwMjEwMjA1MDUzKzAxJzAwJykKL01vZERhdGUoRDoyMDEzMDIxMDIwNTA1MyswMScwMCcpPj5lbmRvYmoKeHJlZgowIDE0CjAwMDAwMDAwMDAgNjU1MzUgZiAKMDAwMDAwMzUzNSAwMDAwMCBuIAowMDAwMDA5MzAzIDAwMDAwIG4gCjAwMDAwMDM0NzYgMDAwMDAgbiAKMDAwMDAwMzMyNCAwMDAwMCBuIAowMDAwMDAwMDE1IDAwMDAwIG4gCjAwMDAwMDMzMDQgMDAwMDAgbiAKMDAwMDAwMzYwMCAwMDAwMCBuIAowMDAwMDAzNzAxIDAwMDAwIG4gCjAwMDAwMDQwMjQgMDAwMDAgbiAKMDAwMDAwMzY0MSAwMDAwMCBuIAowMDAwMDAzNjcxIDAwMDAwIG4gCjAwMDAwMDQzMTIgMDAwMDAgbiAKMDAwMDAwNzg4MiAwMDAwMCBuIAp0cmFpbGVyCjw8IC9TaXplIDE0IC9Sb290IDEgMCBSIC9JbmZvIDIgMCBSCi9JRCBbPDVBQTk0NDc2OTA0RENGREQ3QzYzQjhFRTYzMDM0OUY5Pjw1QUE5NDQ3NjkwNERDRkREN0M2M0I4RUU2MzAzNDlGOT5dCj4+CnN0YXJ0eHJlZgo5NDI2CiUlRU9GCg=="></embed></p>
</div>
</div>
<div id="references" class="section level1">
<h1>References</h1>
<ul>
<li>Caputo, A., Heinicke, A. &amp; Pigeot, I. (1997). A graphical chain model derived from a model selection strategy for the sociologists graduates study. <em>Collaborative Research Center 386, Discussion Paper 73.</em></li>
<li>Cox, D. &amp; Wermuth, N. (1996). <em>Multivariate Dependencies: Models, Analysis, Interpretation</em>. Florida:Chapman &amp; Hall/CRC.</li>
<li>Cox, D. &amp; Wermuth, N. (2001). Joint response graphs and separation induced by triangular systems. <em>Research Report, Australian National University</em>.</li>
<li>Lauritzen, S. &amp; Wermuth, N. (1989). Graphical models for associations between variables, some of which are qualitative and some quantitative. <em>The Annals of Statistics, 31–57.</em></li>
<li>Lim, T.-S., Loh, W.-Y. &amp; Shih, Y.-S. (1999). A Comparison of Prediction Accuracy, Complexity, and Training Time of Thirty-three Old and New Classification Algorithms. <em>Machine Learning, 40, 203–238.</em></li>
</ul>
</div>



<!-- dynamically load mathjax for compatibility with self-contained -->
<script>
  (function () {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src  = "https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML";
    document.getElementsByTagName("head")[0].appendChild(script);
  })();
</script>

</body>
</html>
