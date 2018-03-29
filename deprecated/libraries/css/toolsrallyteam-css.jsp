<%!
	private static final String COLOR_BLACK = "black";
	private static final String COLOR_WHITE = "white";
	private static final String COLOR_TOOLS_LIGHT_BACKGROUND = "#D7E2D9";
	private static final String COLOR_TOOLS_RED_BACKGROUND = "#C3003F";
%>

<%
	final String SCREEN_BACKGROUND 				= COLOR_TOOLS_LIGHT_BACKGROUND;
	final String CONTAINER_BACKGROUND 			= COLOR_TOOLS_RED_BACKGROUND;
	final String PRIMARY_TEXT_COLOR 			= COLOR_WHITE;
	final String LEFT_BAR_PRIMARY_TEXT_COLOR 	= COLOR_TOOLS_LIGHT_BACKGROUND;
%>

<%	
	response.setContentType("text/css");
%>

body {
	font-size : 76%;
	font-family : Verdana, Arial, Helvetica, sans-serif;
	padding: 0px;
	color: <%= PRIMARY_TEXT_COLOR %>;
	margin: 0;
	background-color: <%= SCREEN_BACKGROUND %>;
}

#header {

}

a {
	text-decoration: none;
	color: <%= LEFT_BAR_PRIMARY_TEXT_COLOR %>;
}
a:hover {	
	text-decoration: underline;
}
p {
	margin : 0px 0px 1.5em;
	line-height: 1.2em;
}
h1 {	
	margin : 0px;
	padding-top : 0.5em;
	font-size : 1.4em;
}
h2
{
	font-size: 1.2em;
	margin: 0px;
	padding: 0.5em 0em 0em;
	letter-spacing: 1px;
	text-transform: uppercase;
	color: #CCCCCC;
}

h2 a, .newsfoot a
{
	margin: 0px;
	padding: 0px;
}
h1 a:visited,
h1 a:active,
h1 a:link,
h1 a:hover {
	color : #DDDDDD;
	text-decoration : none;
	font-size: 1.6em;
}

h2 {
	margin-top : 1em;
	font-size : 1em;
}
h3 {
	font-size : 1.2em;
}
h5 
{
	margin: 0px;
	padding: 0px;
}
pre
{
	margin: 0px;
	margin-left: 22px;
	font-size: 1.0em;
}
blockquote {
	font-style: italic;
	padding: 4px;
	margin: 0px;
	
}
input.text {
	width : 350px;	
}
textarea {
	width : 350px;
	height : 200px;	
}
.Textbox, textarea
{
	border: 1px solid #AAAAAA;
	width: 160px;
}

legend {
	letter-spacing: 2px;
	border: 1px solid #CCCCCC;
	background-color: #555555;
	padding: 3px;
	margin-top: 0.5em;
	margin-bottom: 0.5em;
}
img {
	border: 0px;
}
.clr {
	clear: both;
}
#relatedlinks ul {
	list-style : none;
	margin-left : 10px;
	padding : 0px;
}
/*This is for "listening to" links uploaded by w.bloggar*/
.media {
	font-size: 0.8em;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 5px;
	margin-left: 10px;
	font-weight: bold;
}
.thumbnail
{
margin: 5px;
}
/* ------------------------------------------------------- Layout */
/* Container ------------------ */
#container {
	width: 964px;
	margin: 1em auto;
	background-color: <%= CONTAINER_BACKGROUND %>;
	text-align: left;
	border: solid thin;
}

#top {

	vertical-align: middle;
	padding-right: 1em;
	padding-left: 1em;
	margin: 0px;
	text-align: center;
}

#top h1
{
	font-weight: normal;
	margin: 0px;
	padding: 1em 1em 0em;
}

#top p{
	font-family: "Trebuchet MS";
	margin: 0px;
	font-size: 1.1em;
	text-transform: uppercase;
	padding-top: 0px;
	padding-right: 1em;
	padding-bottom: 0px;
	padding-left: 1em;
}

.weblogtitle
{
	font-family: "Trebuchet MS";
}
/* Navigation Bar*/
#nav{
	margin-top: 0.5em;
	text-align: left;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #666666;
	padding-top: 0.2em;
	padding-bottom: 0.2em;
}
 #nav ul
{
	color: #000000;
	padding: 0;
	list-style-type: none;
	margin-right: 0px;
	margin-top: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
}

#nav ul li {
	display: inline;
}

#nav ul li a
{
	padding: 0.2em 1em;
	text-decoration: none;
	float: left;
	margin-top: 0px;
	border-right-width: 1px;
	border-right-style: solid;
	border-right-color: #666666;
	font-weight: bold;
}
#nav span{
	padding-left: 1em;
}
#navstats
{
	text-align: right;
	color: #CCCCCC;
	font-size: 0.9em;
	padding: 0.5em 0em 0.5em 0.5em;
	float: right;
	width: 340px;
	margin-right: 0.5em;
}

/* Content -------------------- */

#content {
	padding-left: 1em;
}
p.date img {
	vertical-align : middle;
}
p.date {
	font-size : 0.8em;
	font-weight : bold;
	margin-bottom : 0px;
	padding : 2px 0px;
	color : #CCCCCC;
	text-align: right;
	text-transform: uppercase;
}
p.date a
{
	color: #DDDDDD;
}
.news
{
	background-color: <%= CONTAINER_BACKGROUND %>;
	padding: 0px;
	margin: 0px 0px 3em;
}

.box {
	border-top-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 2px;
	border-right-width: 2px;
	border-top-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-right-style: solid;
	border-top-color: #666666;
	border-bottom-color: #666666;
	border-left-color: #666666;
	border-right-color: #666666;
}

.news img
{
	padding: 3px;
	border: 1px solid #666666;
	margin-right: 5px;
	margin-bottom: 5px;
	margin-left: 5px;
}

.newshead
{
	padding: 2px 1em;
	font-size: 0.9em;
	margin: 0px;
}

.newsbody
{
	font-size: 0.92em;
	padding-top: 1em;
	padding-right: 1.5em;
	padding-left: 1.5em;
	padding-bottom: 0.5em;
}


.newsfoot
{
	padding: 0.5em 1em;
	margin: 0px;
	color: #EEEEEE;
	font-size: 0.9em;
}

.readmore
{
	padding: 0.5em 0em;
	margin: 0px;
	color: #EEEEEE;
	font-size: 0.9em;
}

#comments h4 span {
	color : #999;
}

#comments h4 {
	margin : 0px;
	font-size : 0.9em;
}

/* Sponsors overview ---------- */

.sponsorsoverview {
	margin: 0 0 0 0.5em;
	padding: 0.5em;
	font-size: 0.9em;
	border-top-width: 1px;
	border-top-style: solid;
	border-top-color: #666666;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #666666;
	border-right-width: 1px;
	border-right-style: solid;
	border-right-color: #666666;
	border-left-width: 1px;
	border-left-style: solid;
	border-left-color: #666666;
}
.sponsorsoverview h3 {
	color: #CCCCCC;
	text-transform: uppercase;
	letter-spacing: 2px;
	font-size: 0.9em;
	margin-top: 2em;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #CCCCCC;
	margin-left: 1em;
}

.sponsorsoverview a {
	text-align: center;
	font-weight: bold;
	text-decoration: underline;
}



/* Sidebar -------------------- */
#sidebar-a {
	width: 200px;
	margin: 0 0 0 0.5em;
	padding: 0.5em;
	font-size: 0.9em;
}
#sidebar-a h3 {
	color: #CCCCCC;
	text-transform: uppercase;
	letter-spacing: 2px;
	font-size: 0.9em;
	margin-top: 2em;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #CCCCCC;
	margin-left: 1em;
}

#sidebar-a h4 {
	color: #CCCCCC;
	font-size: 0.9em;
	font-weight: normal;
	margin-top: 2em;
	margin-bottom: 0.5em;
	margin-left: 1em;
}

#sidebar-a table {
	color: #CCCCCC;
	font-size: 0.9em;
	font-weight: normal;
	margin-top: 2em;
	margin-bottom: 0.5em;
	margin-left: 1em;
}

#sidebar-a table tr td {
	padding-right: 4px;
}


#sidebar-a ul {
	list-style : none;
	margin : 0px;	
	padding : 0px;

	margin-bottom : 10px;
}

#sidebar-a li 
{
	margin-top: 6px;
}

#sidebar-a a:active,
#sidebar-a a:visited,
#sidebar-a a:link {
	text-decoration : none;	
	margin-right : 0px;
	padding : 2px;
	margin-left : 8px;
}

#sidebar-a a:hover {
	text-decoration: underline;
}
#calendar{
	text-align: center;
	margin-bottom: 1em;
}
#news{
	margin-bottom: 0.5em;
	border: 1px dotted #cccccc;
	padding: 5px;
}

.news ul {
	list-style : none;
	margin-bottom : 10px;
}

.news li 
{

	margin-top: 6px;
}


/* Footer --------------------- */

#footer {
	clear: both;
	padding: 5px;
	font-size: 0.9em;
		}		
		
/* ----------------------- Ends */		

/* Nye ------------------------ */
.menuItem
{
	font-weight: normal;	
#	background-image: url(http://www.bieltvedtrallysport.com/graphics/menu-arrow.gif);
	background-repeat: no-repeat;
	background-position: 9px;
	padding-left: 12px;
}

.linkListItem
{
	font-weight: normal;
	background-image: url(http://www.bieltvedtrallysport.com/graphics/menu-arrow.gif);
	background-repeat: no-repeat;
	background-position: 0px;
	padding-left: 12px;
}

li.selected
{
	font-weight: bold;
	background-image: url(http://www.bieltvedtrallysport.com/graphics/menu-square.gif);
	background-repeat: no-repeat;
	background-position: 9px;
	background-color:#444444;
	border-color: #CCCCCC;
	border-top: 1px dashed;
	border-bottom: 1px dashed;
}


.sponsorBox {
	position:absolute;
	z-index: -1;
	visibility: hidden;	
	background-color: #444444;
	width: 319px; 
	margin: 0 0 0 0.5em;
	padding: 0.5em;
	font-size: 0.9em;
	
	border-width: 1px;
	border-style: solid;
	border-color: #FF9900;
}

.selectedLink a:visited {
	font-weight: bold;
}

.fotoalbumcontainer {
	width: 500px;
	font-size: 0.9em;
}

.fotoalbumcontainer img {
	border: 1px;
	border-color: #cccccc;
	padding: 2px;
}

.photogallery img {
	border-style: solid; 
	border-width: 2px; 
	border-color: #AAAAAA black black #AAAAAA; 
}


.teamProfile td {
	padding: 10px 10px 10px 10px;
}


.check {
	padding: 0;
	margin: 0 0 0 18px;
	list-style: outside url("http://www.bieltvedtrallysport.com/graphics/check.gif");
}

.check li {
	list-style: outside url("http://www.bieltvedtrallysport.com/graphics/check.gif");
}

.line {
	background: #718ea5 url("http://www.bieltvedtrallysport.com/graphics/line.gif") repeat-x;
	height: 1px;
	font-size: 0;
	clear: both;
	margin: 0;
	padding: 0;
}

.squarelist {
	list-style: outside url("http://www.bieltvedtrallysport.com/graphics/menu-square.gif");
	margin-top: 10px;
}

/* ---------------------------- */
/* --- Form --- */
input,
textarea{
	font-family: tahoma, sans-serif;
	font-size: 12px;
	color:#AAAAAA;
}

.button {
	padding: 0px;
	font-size: 0.9em;
	border-style: solid;
	border: 1px;
	border-color: #AAAAAA black black #AAAAAA;
	background-color: #444444;
	color: #FF9900;
	height: 19px;
}

input.text,
textarea{
	background-color: #444444;
	border: 1px solid #CCCCCC;
	width: 350px;
}

td.label{
	font-weight: bold;
	vertical-align: top;
	padding: 3px 10px 0px 15px;
}

td.input{
	vertical-align: top;
	padding-bottom: 6px;
}
/* --- End Form --- */