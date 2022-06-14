<html>
  <h1 id="result">this</h1>
</html>

<script>
var source = new EventSource("sse.php");
source.onmessage = function(event) {
  //this code will replace content for id->result 
  document.getElementById("result").innerHTML += event.data + "<br>";
};
</script>  
