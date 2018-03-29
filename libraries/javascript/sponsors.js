var LEFT = 0;
var RIGHT = 1;
var visibleSponsorbox = null;

var sponsors = new Array();

new Sponsor(
	'AS Indseth Transport',
	'Indseth Transport',
	'indseth_hvit.gif',
	null,
	'Verkstedveien 17 -  PB. 36  1400 SKI Tlf. 64 91 38 60 -  Fax:  64 87 38 55',
	null
);

new Sponsor(
	'Follo Landbrukshandel AS',
	'Follo Landbrukshandel',
	'follo-landbrukshandel.gif',
	null,
	'Askimveien 157, 1408 Kråkstad -  Telefon 64863399 - Telefax: 64863599',
	null
);




new Sponsor(
	'Follo Truckutleie AS',
	'Follo Truckutleie',
	'follo-tuckutleie_stor.gif',
	'http://www.follotruckutleie.no',
	'Besøksadresse Tomterv 41, 1408 Kråkstad - Postadresse Postboks 573, 1401 Ski - Telefon 64 86 31 03 - Faks 64 86 32 95 - E-post post@follotruckutleie.no',
	null
);




new Sponsor(
	'Bjørnstad Gård',
	'Bjørnstad Gård',
	'bjornstad.gif',
	null,
	'',
	null
);

new Sponsor(
	'Polaris',
	'Polaris',
	'polaris.gif',
	'http://thewayout.polarisindustries.com',
	'',
	null
);

new Sponsor(
	'Bosch',
	'Bosch',
	'bosch.gif',
	'http://www.bosch.no',
	null,
	null
);

new Sponsor(
	'KiMs Norge AS',
	'KiMs',
	'kims.gif',
	null,
	null,
	null
);

//new Sponsor(
//	'Ski Bil log Lakk AS',
//	'Ski Bil log Lakk',
//	'ski-bil-og-lakk.gif',
//	null,
//	'Teglvegen 16, 1400 Ski - Telefon 64856900 - Telefax 64856910 - E-post skade@skibiloglakk.no',
//	null
//);

new Sponsor(
	'NAF Øvre Østfold',
	'NAF Øvre Østfold',
	'naf.jpg',
	'http://www.naf.no/eway/?pid=258',
	'',
	null
);


new Sponsor(
	'Arbeidsklærsenteret',
	'Arbeidsklærsenteret',
	'aks.gif',
	'http://www.arbeidsklaer.no',
	'Industriveien 9, 1400 Ski - Telefon 64 85 62 00',
	null
);


function Sponsor(theFullName, theShortName, theLogoImage, theUrl, theText1, theText2) {
	this.fullName = theFullName;
	this.shortName = theShortName;
	this.logoImage = theLogoImage;
	this.url = theUrl;
	this.text1 = theText1;
	this.text2 = theText2;
	
	sponsors.push(this);
}

function getSponsorHTML(index) {
	var sponsor = sponsors[index];
	var html = 
		'<h2>' + sponsor.fullName + '</h2>' +
		'<img src="images/sponsor-logo/' + sponsor.logoImage + '" style="background-color: white"/><br/>' +
		sponsor.text1 + '<br/>' +
		sponsor.text1 + '<br/>';

	return html;
}


function sponsorPopup(o, sponsorIndex, side) {
	
	var sponsorBox = document.all['sponsorBox-' + sponsorIndex];
	
	var style = sponsorBox.style;
	
	//sponsorBox.innerHTML = getSponsorHTML(sponsorIndex);
	
	style.zIndex=1;
	style.visibility='visible';
	style.top = totalOffsetTop(o) + o.offsetHeight;

	if (side == LEFT) {
		style.left = totalOffsetLeft(o);
	}
	else {
		style.left = totalOffsetLeft(o) + o.offsetWidth - sponsorBox.offsetWidth;
	}
	
	visibleSponsorbox = sponsorBox;
}


function hideSponsorPopup() {
	if (visibleSponsorbox && event.toElement != visibleSponsorbox && !isAnchestorOf( event.toElement, visibleSponsorbox) ) {
		visibleSponsorbox.style.zIndex=-1;
		visibleSponsorbox.style.visibility='hidden';
		
		visibleSponsorbox = null;
	}
}