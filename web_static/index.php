<?php $version = "v. 0.6 beta" ?>
<html>
<head>
	<title>Sortir A Liège Point Be</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel=StyleSheet href="css/screen.css" type="text/css" media=screen>

	<script type="text/javascript">
	/* <![CDATA[ */
	    (function() {
	        var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
	        s.type = 'text/javascript';
	        s.async = true;
	        s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
	        t.parentNode.insertBefore(s, t);
	    })();
	/* ]]> */
	</script>

</head>

<body>

<div id="container">
	<div id="header">
		<h1 id="title">SORTIRALIEGE.be</h1>
	</div>

	<!--
<div id="error">
	</div>
-->

	<div id="intro">
		<p>
			SortiraLiege.be est un agenda culturel automatique expérimental. Il indexe les évènements facebook se déroulant à Liège. 
			<br/>Pour y faire apparaitre un évènement, devenez ami avec "<a href="http://www.facebook.com/profile.php?id=100003052185883" target="_blank">sortir aliege</a>", il est peut-être nécessaire d'inviter sortir aliege à votre évènement.
			<br/> Le système étant hautement expérimental, des erreurs peuvent apparaitre.</p>
	</div>
	<div id="count">
		<p>Il y a actuellement <b><?php include('/home/sortiraliege/public_html/count.inc.html') ?></b> évènements référencés.</p>
	</div>
	<div id="agenda">
		<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;hl=fr&amp;bgcolor=%231D1D1D&amp;src=6chu7umk3j0uqsr0t5jjf9rq84ihuiie%40import.calendar.google.com&amp;color=%231D1D1D&amp;ctz=America%2FWinnipeg" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
	</div>
	
	<div id="explanation">
		<p>
			Suivez l'évolution de la plateforme sur twitter -> <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
			<a href="https://twitter.com/SortirALiege" class="twitter-follow-button" data-lang="fr">Suivre @SortirALiege</a>
		<p>
	
		<p>Le processus est entièrement automatique mais le tri est plutôt sommaire, il est dès lors très possible d'avoir des doublons ou des évènements qui ne se déroulent pas à Liège, tout comme il est possible que certain évènement liégeois n'apparaissent pas dans la liste. Les futures versions affinerons les filtres et amèneront le support des mobiles et la géolocalisation.</p>
	<!--
		<p>[update 0.2]Les filtres sont plus ou moins fonctionnels et c'est les accents qui partent en vrille, ce sera réglé bientôt.</p>
		<p>[update 0.2]Le fuseau horaire n'est évidement pas bon ! Ca va être corrigé rapidement.</p>
		<p>[update 0.3]Les problèmes d'accents sont résolu. Pour ceux que ça intéresse l'explication est <a href="http://blog.aethernet.eu/post/11618246295/unicode-yahoo-pipes-google-calendar">ici</a>.</p>
	-->
		<p>[update 0.4]Les horaires sont corrigés.</p>
		<p>[update 0.5]La mise en page est un peu plus sympa. Je sais que le bleu de l'agenda google est immonde, mais je ne peux pas le changer. Dans une prochaine mise à jour on se passera de google pour avoir une mise en page plus libre et plus sympa !</p>
		<p>[update 0.6]Moins de pipes, plus de bash. Ajout d'un compteur.</p>
		<p>Si vous avez des questions, voulez donner un coup de main, ou avez repéré des bugs, écrivez à sortiraliege//at//sortiraliege//point//be.</p>
		</p>
		<p>Si vous êtes curieux et voulez savoir comment ce site fonctionne allez voir <a href="http://blog.aethernet.eu/post/11592388241/web2-make-an-automated-cultural-calendar">ici</a>.</p>
		<p><b>Financement</b> : SortirALiege.be à besoin de vous pour fonctionner, aidez-le en faisant un micro-don via flattr : <a class="FlattrButton" style="display:none;" rev="flattr;button:compact;" href="http://sortiraliege.be"></a>
		<noscript><a href="http://flattr.com/thing/419011/Sortir-Lige" target="_blank">
		<img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a></noscript>
		Si vous ne connaissez pas flattr, vous trouverez une explication plus complète sur les nouveaux moyens de financement <a href="http://www.paulds.fr/2010/06/nouveaux-financements-yoook-ulule-kachingle-flattr-et-les-autres/" target="_blank">chez Paul Da Silva</a>.
		<br />Nous vous demandons de faire des dons, car on se refuse à mettre de la pub sur le site !
		</p>
	</div>
	
	<div id="footer">
		sortiraliege.be <?= $version ?> créé en 2011
		<br />Les fontes sont Panefresco et Blackout, elles sont disponibles sur <a href="http://www.fontsquirrel.com" target="_blank">Fontsquirrel</a>.
		<br />powered by <a href="http://facebook.com" target="_blank">facebook</a> | <a href="http://calendar.google.com" target="_blank">G!Calendar</a> | <a href="http://pipes.yahoo.com" target="_blank">Y!Pipes</a> | <a href="http://netline.be" target="_blank">netline.be</a> | <a href="http://lidje.net" target="_blank">lidje.net</a> & <a href="http://aethernet.eu" target="_blank">aethernet.eu</a>
	</div>

</div>

<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://stats.lidje.net/" : "http://stats.lidje.net/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 22);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://stats.lidje.net/piwik.php?idsite=22" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

</body>
</html>