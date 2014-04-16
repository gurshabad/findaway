window.alert("HELLO!");
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","http://helpingyoufindaway.tumblr.com/rss/",true);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML; 
var x=xmlDoc.getElementsByTagName("item");
for (i=0;i<x.length;i++)
{
	document.write("<p><h3>");
	document.write(x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue);
	document.write("</h3></p>");
	/*document.write("<p class='text-muted'>");
	document.write(x[i].getElementsByTagName("pubDate")[0].childNodes[0].nodeValue);
	document.write("</p>");*/
}