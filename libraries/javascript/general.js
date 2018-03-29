var POPUP_WINDOW_NAME = 'popup';


function openWindow(url, width, height, left, top) {
	var newWindow = window.open(url, POPUP_WINDOW_NAME, 'width=' + width + ', height=' + height + ', left=' + left + ', top=' + top + ', scrollbars=no, resizable=no, titlebar=no, menubar=no, toolbar=no');
	newWindow.focus();
	
	return newWindow;
}


function totalOffsetLeft(object) {
	if (object.offsetParent) {
		return object.offsetLeft + totalOffsetLeft(object.offsetParent);
	}
	else {
		return object.offsetLeft;
	}
}


function totalOffsetTop(object) {
	if (object.offsetParent) {
		return object.offsetTop + totalOffsetTop(object.offsetParent);
	}
	else {
		return object.offsetTop;
	}
}

			
function isAnchestorOf(element, anchestorCandidate) {
	if( element.offsetParent == anchestorCandidate ) {
		return true;
	}
	else if (element.offsetParent) {
		return isAnchestorOf(element.offsetParent, anchestorCandidate);
	}
	else {
		return false;
	}
}

function contentDocumentLoaded(menuItemID) {
	if (window.parent) {
		window.parent.resizeContentContainer(document);
		window.parent.selectMenuItem(menuItemID);
	}
}