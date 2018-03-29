<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>Bieltvedt Rallysport</title>
		<meta name="keywords" content="Sveinung Bieltvedt, Bieltvedt Rallysport, Rally, Bieltvedt, Peugoet">
		<link type="text/css" rel="stylesheet" href="libraries/css/stylesheet.css"/>
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<script type="text/javascript" src="libraries/javascript/general.js"></script>
		<script type="text/javascript" src="libraries/javascript/sponsors.js"></script>
		<script type="text/javascript" src="libraries/javascript/pictures.js"></script>
		<script language="php">
			$content_dir = "content";
			$content_id=$_GET['id'];
			if(!$content_id) {
				$content_id = "forside";
			}
			$content_include_file = "$content_dir/content-$content_id.inc";

			if ($content_id == "forside") {
				$menu_item_class_forside = "selected";
			}
			else if ($content_id == "teamet") {
				$menu_item_class_teamet = "selected";
			}
			else if ($content_id == "sponsorer") {
				$menu_item_class_sponsorer = "selected";
			}
			else if ($content_id == "bli-sponsor") {
				$menu_item_class_bli_sponsor = "selected";
			}
			else if ($content_id == "merittliste") {
				$menu_item_class_merittliste = "selected";
			}
			else if ($content_id == "medieomtale") {
				$menu_item_class_medieomtale = "selected";
			}
			else if ($content_id == "terminliste") {
				$menu_item_class_terminliste = "selected";
			}
			else if ($content_id == "fotoalbum") {
				$menu_item_class_fotoalbum = "selected";
			}
			else if ($content_id == "arkiv") {
				$menu_item_class_arkiv = "selected";
			}
			else if ($content_id == "lenker") {
				$menu_item_class_lenker = "selected";
			}
			else if ($content_id == "kontakt") {
				$menu_item_class_kontakt = "selected";
			}
			else if ($content_id == "gjestebok") {
				$menu_item_class_gjestebok = "selected";
			}
		</script>
	</head>
	<body>
		<div id="container">
			<table cellspacing="0" cellpadding="0" width="100%">
				<tr>
					<!-- Page header cell: -->
					<td colspan="2" valign="top" style="padding-bottom: 12px;">
						<div id="header" style="float: left;">
							<div id="top">
								<h1><a class="weblogtitle" href="index.html">b i e l t v e d t   r a l l y s p o r t <span style="color: #FF9900;">.</span > n o</a></h1>
								<p>Hjemmeside for Sveinung Bieltvedt</p>
							</div>
							<div class="sponsorsoverview">
								<h3>Våre sponsorer</h3>
								<table cellspacing="0" cellpadding="0" width="100%">
									<tr>
										<td class="frontpageSponsor" valign="center"><a class="sponsorElement" onmouseover="sponsorPopup(this, 0, LEFT);"  onmouseout="hideSponsorPopup()">Indseth<br/>Transport</a></td>
										<td class="frontpageSponsor" valign="center"><a class="sponsorElement" onmouseover="sponsorPopup(this, 1, LEFT);"  onmouseout="hideSponsorPopup()">NR1 Samkjøringen</a></td>
										<td class="frontpageSponsor" valign="center"><a class="sponsorElement" onmouseover="sponsorPopup(this, 2, LEFT);"  onmouseout="hideSponsorPopup()">Follo<br/>Truckutleie</a></td>
										<td class="frontpageSponsor" valign="center"><a class="sponsorElement" onmouseover="sponsorPopup(this, 9, LEFT);"  onmouseout="hideSponsorPopup()">Berger</a></td>
										<td class="frontpageSponsor" valign="center"><a class="sponsorElement" onmouseover="sponsorPopup(this, 3, LEFT);"  onmouseout="hideSponsorPopup()">Bjørnstad<br/>Gård</a></td>
										<td class="frontpageSponsor" valign="center"><a class="sponsorElement" onmouseover="sponsorPopup(this, 4, LEFT);"  onmouseout="hideSponsorPopup()">Meierienes Juice</a></td>
										<td class="frontpageSponsor" valign="center"><a class="sponsorElement" onmouseover="sponsorPopup(this, 5, RIGHT);" onmouseout="hideSponsorPopup()">Bosch</a></td>
										<td class="frontpageSponsor" valign="center"><a class="sponsorElement" onmouseover="sponsorPopup(this, 6, RIGHT);" onmouseout="hideSponsorPopup()">KiMs</a></td>
										<td class="frontpageSponsor" valign="center"><a class="sponsorElement" onmouseover="sponsorPopup(this, 8, RIGHT);" onmouseout="hideSponsorPopup()">Castrol</a></td>
										<td class="frontpageSponsor" valign="center"><a class="sponsorElement" onmouseover="sponsorPopup(this, 7, RIGHT);" onmouseout="hideSponsorPopup()">NAF Øvre<br/>Østfold</a></td>
									</tr>
								</table>

								<div class="sponsorBox" id="sponsorBox-0" onmouseout="hideSponsorPopup()">
									<div class="newshead">
										<h2>AS Indseth Transport</h2>
									</div>
									<div>
										<img src="images/sponsor-logo/indseth.jpg" width="200" />
									</div>
									Verkstedveien 17 -  PB. 36  1400 Ski<br/>
									Tlf. 64 91 38 60 -  Fax:  64 87 38 55
								</div>

								<div class="sponsorBox" id="sponsorBox-1" onmouseout="hideSponsorPopup()">
									<div class="newshead">
										<h2>NR1 Samkjøringen</h2>
									</div>
									<div>
										<a target="_blank" href="http://www.bosch.no"><img src="images/sponsor-logo/nr1_samkjoringene.jpg" width="119" style="background-color: white" /></a>
									</div>
									<a target="_blank" href="http://www.nr1samkjoringen.no">www.nr1samkjoringen.no</a>
								</div>

								<div class="sponsorBox" id="sponsorBox-2" onmouseout="hideSponsorPopup()">
									<div class="newshead">
										<h2>Follo Truckutleie AS</h2>
									</div>
									<div>
										<img src="images/sponsor-logo/follo-truckutleie.jpg" width="237" style="background-color: white" />
									</div>
									Postboks 573, 1401 SKI<br/>Tlf. 64 86 31 03 -  Fax: 64 86 32 95
									<a target="_blank" href="http://www.follotruckutleie.no">www.follotruckutleie.no</a>
								</div>
								<div class="sponsorBox" id="sponsorBox-9" onmouseout="hideSponsorPopup()">
									<div class="newshead">
										<h2>Berger</h2>
									</div>
									<div>
										<img src="images/sponsor-logo/berger.jpg" width="216" style="background-color: white" />
									</div>
								</div>
								<div class="sponsorBox" id="sponsorBox-3" onmouseout="hideSponsorPopup()">
									<div class="newshead">
										<h2>BJØRNSTAD GÅRD * Kapp</h2>
									</div>
									<div>
										<img src="images/sponsor-logo/bjornstad.gif" width="220" style="background-color: white" />
									</div>
								</div>
								<div class="sponsorBox" id="sponsorBox-4" onmouseout="hideSponsorPopup()">
									<div class="newshead">
										<h2>Meierienes Juice</h2>
									</div>
									<div>
										<img src="images/sponsor-logo/meierienes-juice.jpg" width="119" style="background-color: white" />
									</div>
								</div>
								<div class="sponsorBox" id="sponsorBox-5" onmouseout="hideSponsorPopup()">
									<div class="newshead">
										<h2>BOSCH</h2>
									</div>
									<div>
										<a target="_blank" href="http://www.bosch.no"><img src="images/sponsor-logo/bosch.gif" width="140" style="background-color: white" /></a>
									</div>
									<a target="_blank" href="http://www.bosch.no">www.bosch.no</a>
								</div>
								<div class="sponsorBox" id="sponsorBox-6" onmouseout="hideSponsorPopup()">
									<div class="newshead">
										<h2>KiMs Norge AS</h2>
									</div>
									<div>
										<a><img src="images/sponsor-logo/kims.gif" width="160" /></a>
									</div>
								</div>
								<div class="sponsorBox" id="sponsorBox-8" onmouseout="hideSponsorPopup()">
									<div class="newshead">
										<h2>Castrol</h2>
									</div>
									<div>
										<a target="_blank" href="http://www.castrol.no"><img src="images/sponsor-logo/castrol.jpg" width="246" /></a>
									</div>
									<div>
										<a target="_blank" href="http://www.castrol.no">www.castrol.com</a>
									</div>
								</div>
								<div class="sponsorBox" id="sponsorBox-7" onmouseout="hideSponsorPopup()">
									<div class="newshead">
										<h2>NAF Øvre Østfold</h2>
									</div>
									<div>
										<img src="images/sponsor-logo/naf.jpg" style="background-color: white" />
									</div>
									<a target="_blank" href="http://www.naf.no/eway/?pid=258">www.naf.no</a>
								</div>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<!-- Left column cell: -->
					<td valign="top" style="width: 200px; border-right-width: 1px; border-right-style: solid; border-right-color: #666666;">
						<div id="leftcolumn" style="float: left;">
							<div id="sidebar-a">
								<h3>Meny</h3>
								<ul>
									<li id="menuitem-forside" class="menuItem <? echo $menu_item_class_forside ?>"><a href="index.php">Forside</a></li>
									<li id="menuitem-teamet" class="menuItem <? echo $menu_item_class_teamet ?>"><a href="index.php?id=teamet">Teamet</a></li>

									<li id="menuitem-sponsorer" class="menuItem" name="sponsor" onmouseover="document.all['sponsor-level2'].style.display = ''"><a style="cursor: default;" href="javascript:void();">Sponsorer</a></li>
									<span id="sponsor-level2" name="sponsor">
										<!--<li id="menuitem-sponsorer" style="margin-left: 16px;" class="menuItem <? echo $menu_item_class_sponsorer ?>"><a href="index.php?id=sponsorer">Våre sponsorer</a></li>-->
										<li id="menuitem-bli-sponsor"  style="margin-left: 16px;" class="menuItem <? echo $menu_item_class_bli_sponsor ?>"><a href="/content/bli-sponsor/Sponsormappe-Fiesta-2006.pdf" target="_blank">Bli sponsor</a></li>
									</span>
									<li id="menuitem-merittliste" class="menuItem <? echo $menu_item_class_merittliste ?>"><a href="index.php?id=merittliste">Merittliste</a></li>
									<li id="menuitem-medieomtale" class="menuItem <? echo $menu_item_class_medieomtale ?>"><a href="index.php?id=medieomtale">Medieomtale</a></li>
									<li id="menuitem-terminliste" class="menuItem <? echo $menu_item_class_terminliste ?>"><a href="index.php?id=terminliste">Terminliste</a></li>
									<li id="menuitem-fotoalbum" class="menuItem <? echo $menu_item_class_fotoalbum ?>"><a href="index.php?id=fotoalbum">Fotoalbum</a></li>
									<!--<li id="menuitem-arkiv" class="menuItem <? echo $menu_item_class_arkiv ?>"><a href="index.php?id=arkiv">Arkiv</a></li>-->
									<li id="menuitem-lenker" class="menuItem <? echo $menu_item_class_lenker ?>"><a href="index.php?id=lenker">Lenker</a></li>
									<li id="menuitem-kontakt" class="menuItem <? echo $menu_item_class_kontakt ?>"><a href="index.php?id=kontakt">Kontakt oss</a></li>
									<li id="menuitem-gjestebok" class="menuItem gjestebok"><a href="http://home.no.net/bilrally/gjestebok.cgi?view">Gjestebok</a></li>
								</ul>
							</div>
							<div id="sidebar-a">
								<h3>Løp</h3>
								<h4>Neste løp:</h4>
								<a href="http://www.rallysorland.no/" target="_blank">Rally Sørland</a> 5. - 6. mai
								<br/>
								<h4>Forrige løp:</h4>
								<a href="http://www.numedalsrally.no/" target="_blank">Numedalsrally</a> 4. mars
							</div>
							<div id="sidebar-a">
								<h3>NM klasse 1</h3>
								<table cellpadding="0" cellspacing="0">
									<tr>
										<td><b>1.</b></td>
										<td><b>Sveinung Bieltvedt</b></td>
										<td><b>83 p</b></td>
									</tr>
									<tr>
										<td>2.</td>
										<td>Trond G. Svenkerud</td>
										<td>59 p</td>
									</tr>
									<tr>
										<td>3.</td>
										<td>Peder Økseter</td>
										<td>41 p</td>
									</tr>
									<tr>
										<td>4.</td>
										<td>Petter Rolfsen</td>
										<td>35 p</td>
									</tr>
									<tr>
										<td>5.</td>
										<td>Petter Fausko</td>
										<td>27 p</td>
									</tr>
									<tr>
										<td>6.</td>
										<td>Steffan Aasli</td>
										<td>25 p</td>
									</tr>
									<tr>
										<td colspan="3" style="padding-top: 6px;"">(Etter løp 3 av 7)</td>
									</tr>
								</table>
							</div>
						</div>
					</td>
					<!-- Content cell: -->
					<td valign="top" style="width: 560px;">
						<div id="content" class="content" style="float: left;">
							<!-- CONTENT -->
							<?php include($content_include_file); php?>
						</div>
					</td>
				</tr>
				<tr>
					<!-- Footer cell: -->
					<td valign="top" colspan="2" width="100%" style="padding-top: 12px;">
						<div id="footer" style="border-top: 1px solid #666666; color: #666666;	font-size: 0.9em; font-weight: normal;" >
							<center>Bieltvedt Rallysport © 2004, 2005, 2006</center>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
