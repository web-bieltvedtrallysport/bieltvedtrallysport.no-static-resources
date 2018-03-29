const LEFT = 0;
const RIGHT = 1;
var visibleSponsorbox = null;


function sponsorPopup(o,index, side) {
	var sponsorBox = document.all['sponsorBox' + index];
	var style = sponsorBox.style;
	
	style.zIndex=1;
	style.visibility='visible';
	style.top= totalOffsetTop(o) + o.offsetHeight;

	if (side == left) {
		style.left= totalOffsetLeft(o);
	}
	else {
		style.left= totalOffsetLeft(o) + o.offsetWidth - sponsorBox.offsetWidth;
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