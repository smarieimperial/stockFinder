<!-- Stephanie Imperial,
  in web browser type http://localhost/stockcsv/stock.php
  index.php  reportStock.php  stock.php 
   -->
<?php
print <<< HERE
<html>
		<head>
		<script>
			var myReq = new XMLHttpRequest();
			function searchStock (value,event) {
				var url;
			  var keyCode = event.keyCode;
			  if (keyCode=="13") {
				url = "reportStock.php?symbol=" + value;	
				myReq.onreadystatechange = reportResponse;		
			}
			else {
			return;
			}
			myReq.open ("GET",url,true);
			myReq.send(null);
		}
		function reportResponse( ){
		var responseText = myReq.responseText;
		var response = responseText.split (",");
		var out = responseText + 
			"Symbol: " + response[0] + "<br>" + 
			"Price: " + response[1] + "<br>" +
			"Date: " + response[2] + "<br>" +
			"Time: " + response[3] + "<br>" +
			"High: " + response[4] + "<br>" +
			"Low: " + response[5] + "<br>" +
			"Volume: " + response[6] + "<br>";
		
		document.getElementById("idStockReport").innerHTML
			= out;
		}
		function setStock ( ){
		}
		</script>
		</head>
		<body>
Symbol<input type="text" id="idStock"
		    onkeyup="searchStock(this.value,event);" /><br>
Guess <span id="idStockGuess" onclick="setStock(this.innerHTML);" >
	  </span><br>
Report <span id="idStockReport" >
		</span><br>
		
		</body>
</html>
HERE
?>