<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo SERVER_NAME ?></title>
		<meta http-equiv="cache-control" content="max-age=0" />
		<meta http-equiv="pragma" content="no-cache" />
		<meta http-equiv="expires" content="0" />
		<meta http-equiv="imagetoolbar" content="no" />
		<meta http-equiv="content-type"	content="text/html; charset=UTF-8" />
		<meta name="content-language" content="ro" />
				<link href="gpack/travian_Travian_4.0_Wurststurm/lang/ro/compact.css?asd423" rel="stylesheet" type="text/css" /><link href="gpack/travian_Travian_4.0_Wurststurm/lang/ro/lang.css?asd423" rel="stylesheet" type="text/css" />				<link href="img/travian_basics.css" rel="stylesheet" type="text/css" />
							<script src="AC_OETags.js?asd423" type="text/javascript"></script>
				<script type="text/javascript" src="crypt.js?1336748301"></script>
<script type="text/javascript">
Travian.Translation.add(
{
	'allgemein.anleitung':	'Instrucţiuni',
	'allgemein.cancel':	'anulează',
	'allgemein.ok':	'OK',
	'cropfinder.keine_ergebnisse': 'Nici un rezultat găsit'
});
Travian.applicationId = 'T4.0 Game';
Travian.Game.version = '4.0';
Travian.Game.worldId = 'rox18';
Travian.Game.speed = 3;
</script>						<script type="text/javascript">
			Travian.Game.eventJamHtml = '&lt;a href=&quot;http://t4.answers.travian.ro/index.php?aid=256#go2answer&quot; target=&quot;blank&quot; title=&quot;Travian Answers&quot;&gt;&lt;span class=&quot;c0 t&quot;&gt;0:00:0&lt;/span&gt;?&lt;/a&gt;'.unescapeHtml();
		</script>
					</head>
	<body class="v35 gecko village1">
							<div id="wrapper">
								<img id="staticElements" src="img/x.gif" alt="" />
									<div id="logoutContainer">
						<a id="logout" href="logout.php" title="Ieşire">&nbsp;</a>
					</div>
								<div class="bodyWrapper">
					
										<img style="filter:chroma();" src="img/x.gif" id="msfilter" alt="" />
					<div id="header">
						<div id="mtop">
							<a id="logo" href="http://www.travian.ro/" target="_blank" title="Travian"></a>
							<div id="myGameLinkHeaderWrapper">
															</div>
																					<ul id="navigation">
					        	<li id="n1" class="resources">
					        		<a class=" active" href="dorf1.php" accesskey="1" title="<?php echo HEADER_DORF1; ?>"></a>
					        	</li>
					            <li id="n2" class="village">
					            	<a class="" href="dorf2.php" accesskey="2" title="<?php echo HEADER_DORF2; ?>"></a>
					            </li>
					            <li id="n3" class="map">
					            	<a class="" href="karte.php" accesskey="3" title="<?php echo HEADER_MAP; ?>"></a>
					            </li>
					            <li id="n4" class="stats">
					            	<a class="" href="statistiken.php" accesskey="4" title="<?php echo HEADER_STATS; ?>"></a>
					            </li>
								<?php
								if(count($database->getMessage($session->uid,7)) >= 1000) {
									$unmsg = "+1000";
								} else { $unmsg = count($database->getMessage($session->uid,7)); }

								if(count($database->getMessage($session->uid,8)) >= 1000) {
									$unnotice = "+1000";
								} else { $unnotice = count($database->getMessage($session->uid,8)); }
								?>
					            <li id="n5" class="reports">
					            	<a class="" href="berichte.php" accesskey="5" title="<?php echo HEADER_NOTICES; ?><?php if($message->nunread){ echo' ('.count($database->getMessage($session->uid,8)).')'; } ?>"></a>
					            	<?php
									if($message->nunread) {
									echo "<div class=\"ltr bubble\" title=\"".$unnotice." ".HEADER_NOTICES_NEW."\" style=\"display:block\">
									<div class=\"bubble-background-l\"></div>
									<div class=\"bubble-background-r\"></div>
									<div class=\"bubble-content\">".$unnotice."</div></div>";
									}
									?>
								</li>
					            <li id="n6" class="messages">
					            	<a class="" href="nachrichten.php" accesskey="6" title="<?php echo HEADER_MESSAGES; ?><?php if($message->unread){ echo' ('.count($database->getMessage($session->uid,7)).')'; } ?>"></a>
					            	<?php
									if($message->unread) {
									echo "<div class=\"ltr bubble\" title=\"".$unmsg." ".HEADER_MESSAGES_NEW."\" style=\"display:block\">
									<div class=\"bubble-background-l\"></div>
									<div class=\"bubble-background-r\"></div>
									<div class=\"bubble-content\">".$unmsg."</div></div>";
									}
									?>
								</li>
					        </ul>
														<div class="clear"></div>
						</div>
											</div>

					<div id="mid">

												<div class="clear"></div>
						<div id="contentOuterContainer">
							<div class="contentTitle">&nbsp;</div>
							<div class="contentContainer">
								<div id="content" class="village1"><script type="text/javascript">
			window.addEvent("domready", function()
			{
				var body = $(document.body);
				var content = $("content");

				["village1","village2","map","statistics","reports","messages","build","alliance","a2b","village3","player","warsim","logout","signup","manual","admin","support","error_site","plus","forum","login","activate","banned_cn","cropfinder","hero_adventure","hero_auction","hero_inventory","hero_editor","support_form","hero_image","hero_body","loader","positionDetails","fatal_error","mygame_login","gidRessources","universal"].each(function(className)
				{
					if (body)
					{
						body.removeClass(className);
					}
					if (content)
					{
						content.removeClass(className);
					}
				});
				if (body)
				{
					body.addClass("");
				}
				if (content)
				{
					content.addClass("");
				}
			})
		</script><div id="sysmsg"><div style="width:450px; height:495px; padding: 35px 80px 90px 25px; background: url(http://www.travianmania.ro/images/scroll2.jpg) no-repeat;">
<center>
<h2>Planurile de construcţie</h2>
<br/>
<p style="font-size:85%; text-align:justify; width:400px">
 Cu multe decenii în urmă triburile din Travian au fost surprinse de neaşteptata întoarcere a Natarilor. Acest trib din timpuri străvechi de o înţelepciune, măreţie şi glorie incomparabilă era pe cale să deranjeze popoarele libere încă o dată. Astfel s-au depus toate eforturile în a prepara un ultim război împotriva Natarilor şi în a-i alunga pentru totdeauna. Mulţi au gândit despre aşa-zisele "Minuni ale Lumii", o construcţie legendară, ca singură soluţie. Se spunea că la final îi va face pe constructori conducătorii şi cuceritorii Travianului. 
<br><img src="http://www.travianmania.ro/images/wwstart.png" alt="Minunea Lumii" width="170" height="137" style="float: right"></p>
<p style="font-size:85%; text-align:justify; width:400px">
Totuşi, s-a spus că va fi nevoie de un plan de construcţie pentru aşa o construcţie. Din această cauză arhitecţii au conceput metode iscusite pentru a le depozita în siguranţă. După un timp se puteau zări clădiri asemănătoare templelor în multe oraşe şi metropole - trezoreriile. 
<br/>
Din păcate, nimeni - nici cei mai înţelepţi şi experimentaţi - nu ştiau unde puteau fi găsite aceste planuri. Cu cât mai mult încercau oamenii să le găsească, cu atât mai mult păreau a fi doar nişte mituri.</p>
<p style="font-size:85%; text-align:justify; width:400px">
Astăzi, totuşi, acest ultim secret va fi descoperit. Pierderile şi aspiraţiile trecutului nu au fost deşarte deoarece astăzi, iscoadele mai multor triburi au descoperit locaţiile acestor planuri de construcţie. Bine păzite de către Natari, zac ascunse  în numeroase oaze răspândite pe întreg tărâmul Travian. Doar cei mai viteji eroi vor fi capabili să captureze un asemenea plan şi să îl aducă în siguranţă acasă astfel încât construcţia să poată începe.</p>
<p style="font-size:65%; text-align:justify; width:400px">
Toate informaţiile privind modul de operare al Planurilor de Construcţie pot fi regăsite pe forumul public Travian <a href="http://forum.travian.ro">aici</a>.
<br/><b>Echipa Travian</b></p>.
<p align="center"><a href="dorf1.php?ok=1">» continuă «</a></p><br> 
</center></div><script type="text/javascript">
			window.addEvent("domready", function()
			{
				var body = $(document.body);
				var content = $("content");

				["village1","village2","map","statistics","reports","messages","build","alliance","a2b","village3","player","warsim","logout","signup","manual","admin","support","error_site","plus","forum","login","activate","banned_cn","cropfinder","hero_adventure","hero_auction","hero_inventory","hero_editor","support_form","hero_image","hero_body","loader","positionDetails","fatal_error","mygame_login","gidRessources","universal"].each(function(className)
				{
					if (body)
					{
						body.removeClass(className);
					}
					if (content)
					{
						content.removeClass(className);
					}
				});
				if (body)
				{
					body.addClass("");
				}
				if (content)
				{
					content.addClass("");
				}
			})
		</script></div>								<div class="clear">&nbsp;</div>							</div>							<div class="clear"></div>
						</div> 						<div class="contentFooter">&nbsp;</div>
					</div>					<div id="side_info">
			<div class="news news1">
		<a href="#" class="newsContent newsContentWithLink" onclick="
			$H(
			{
				data:
				{
					cmd:	'news',
					id:		'1'
				}
			}).dialog(); return false;">Dorim să anunțăm faptul că în data de 11 iun. 2012 la ora 07:00 (.RO) va începe o nouă rundă a serverului Travian Ro1, în versiune T4. Preînregistrările vor fi deschise în data de 08.06.2012.<br />
Vă aşteptăm!<br />
Echipa Travian</a>
			<a class="newsContentMoreInfoLink" target="_blank" href="http://travian.ro">...mai multe informații</a>	</div>
		</div>					<div class="clear"></div>
				</div>
				<div id="footer">
					<div id="mfoot">
						<a href="http://www.travian.ro/" target="_blank">Acasă</a>
						<a href="http://forum.travian.ro" target="_blank">Forum</a>
						<a href="http://www.travian.ro/links.php" target="_blank">Link-uri</a>
						<a href="http://t4.answers.travian.ro/" target="_blank">FAQ - Answers</a>
						<a href="http://www.travian.ro/agb.php" target="_blank">Termeni</a>
						<a href="http://www.travian.ro/impressum.php" target="_blank">Despre noi</a>
						<div class="clear"></div>
											</div>
                    <p class="copyright">© 2004 - 2012 Travian Games GmbH</p>
				</div>
												<div id="anwersQuestionMark">
	<a href="http://t4.answers.travian.ro/index.php?aid=287#go2answer" target="_blank" title="Travian Answers">&nbsp;</a>
</div>			</div>

			<div id="ce"></div>
						<script type="text/javascript">
				GetSwfVer('2706727|706e6a');
			</script>
									<img src="stats.php?p=h3c&amp;login=1338319779" alt="" width="1" height="1" style="position:absolute;" />
			<script type="text/javascript">
				window.addEvent('domready', function()
				{
					(new Element('img',
					{
						src: 'stats.php?p=c75&amp;login=1338319779'.unescapeHtml(),
						width: 1,
						height: 1,
						alt: '',
						styles:
						{
							position:'absolute'
						}
					})).inject($(document.body));
				});
			</script>
					</div>

		
		
			</body>
</html>