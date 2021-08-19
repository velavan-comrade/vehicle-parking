<!DOCTYPE html>
<html>
<body>
	<script type="text/javascript">
function loadDoc() {
	var x=1;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "state.php?q="+x, true);
  xhttp.send();
}
</script>
<div id="demo">
  <h2>Let AJAX change this text</h2>
  <button type="button" onclick="loadDoc()">Change Content</button>
</div>

</body>
</html>
