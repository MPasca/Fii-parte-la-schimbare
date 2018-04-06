<!DOCTYPE HTML>
<head>
	<title>Fii parte la schimbare</title>
	<link href="./index.css" type="text/css" rel="stylesheet">
</head>

<body>
<header><h1 id="title">FII PARTE LA SCHIMBARE</h1>
	<h2>REZOLVARI</h2>
</header>	

<div id="navbar">
	<a href="index.html">Acasa</a>
	<a href="probleme.html">PROBLEME</a>
	<a href="#reciclare">Reciclare</a>
	<a href="#consumator">Consumator Responsabil</a>
	<a href="#sustenabil">Stil de viata sustenabil</a>
	<a href="#tips">Tips</a>
	<a href="linkuri.html">Linkuri utile</a>
	<a href="centre.php">Centre de reciclare</a>
</div>
<script>
	window.onscroll = function() {myFunction()};
	var navbar = document.getElementById("navbar");
	var sticky = navbar.offsetTop;

	function myFunction() {
	  if (window.pageYOffset >= sticky) {
	    navbar.classList.add("sticky")
	  } else {
	    navbar.classList.remove("sticky");
	  }
	}
</script>


	<div id="reciclare" class="first">
		<h1>RECICLARE</h1>
		<h4>Reciclarea reprezinta introducerea unor reziduuri sau deseuri intr-un proces tehnologic pentru a obtine reutilizarea si valorificarea lor sau in scopuri ecologice. Prin intermediul reciclarii se reduce consumul de materie prima noua si de asemenea se reduce consumul de energie si nivelul de contaminare al mediului natural.</h4>
	</div>

	<div id="consumator" class="noice">
		<h1>CONSUMATOR RESPONSABIL</h1>
		<h4>Consumul responsabil de resurse reprezinta modul de consum al resurselor astfel incat sa nu se creeze risipa si sa nu dauneze mediului inconjurator.</h4>
	</div>

	<div id="sustenabil" class="noice">
		<h1>STIL DE VIATA SUSTENABIL</h1>
		<h4>Sustenabilitatea reprezinta o calitate a unei activitati antropice de a se desfasura fara a epuiza resursele disponibile ai fara a distruge mediul, deci fara a compromite posibilitatile de satisfacere a nevoilor generatiilor urmatoare. Conferinta mondiala asupra mediului de la Rio de Janeiro din 1992 a acordat o atentie deosebita acestui concept, care implica stabilirea unui echilibru între cresterea economica si protectia mediului si gasirea de resurse alternative. Cand se refera la dezvoltarea economica de ansamblu a unei tari sau regiuni, este de obicei preferat termenul sinonim dezvoltare durabila.</h4>
	</div>

	<div id="tips" class="noice">
		<h1>TIPS'N'TRICKS</h1>
		<h2>Recicleaza sticla, hartia, plasticul si metalele pe care nu le mai folosesti!</h2>
		<ul>
			<li>Nu arunca amabalajele si alte reziduuri menajere pe jos!</li>
			<li>Refoloseste pungile de plastic si cara-le cu tine atunci cand mergi la cumparaturi!</li>
			<li>Refoloseste sticlele de plastic, foloseste toate partile disponibile ale unui caiet si nu arunca hartia nefolosita!</li>
			<li>Nu arunca bateriile! Supermarketurile au locuri special amenajate pentru reciclarea acestora!</li>
		</ul>
		<h2>Consuma resurse in mod responsabil!</h2>
		<ul>
			<li>Nu face risipa de apa, current electric si alimente!</li>
			<li>Nu cumpara mai mult decat ai nevoie!</li>
			<li>Nu gati mai mult decat mananci!</li>
			<li>Fa un dus in loc de o baie, nu lasa orice aparat electric in functiune atunci cand nu-l folosesti si foloseste becuri economice!</li>
		</ul>
		<h2>Adopta un stil de viata sustenabil!</h2>
		<ul>
			<li>Foloseste transportul in comun in schimbul masinii personale!</li>
			<li>Foloseste energie regenerabila!</li>
			<li>Cumpara de la producatori locali si produse de sezon!</li>
			<li>Nu polua mediul inconjurator sub nicio forma!</li>
		</ul>
	</div>

	<div class="noice">
		<a href="centre.php" class="button3">CENTRE DE RECICLARE</a>
	
</body>
