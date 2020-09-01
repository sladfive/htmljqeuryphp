<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Get Multiple Selected Option Value</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("button").click(function(){
        var countries = [];
        $.each($(".country option:selected"), function(){            
            countries.push($(this).val());
        });
        alert("You have selected the country - " + countries.join());
		
		 $.ajax({  
          type: "POST",
          url: "utenti.php",  
          data: "nome=" + countries.join(),
          dataType: "html",
          success: function(risposta) {  
            $("div#risposta").html(risposta);  
          },
          error: function(){
            alert("Chiamata fallita!!!");
          } 
        }); 
        return false;  
		
		
		
    });
});
</script>
</head>
<body>
    <form>
        <label>Country:</label>
        <select class="country" multiple="multiple" size="5">
            <option>United States</option>
            <option>India</option>
            <option>United Kingdom</option>
            <option>Brazil</option>
            <option>Germany</option>
        </select>
        <button type="button">Get Values</button>
    </form>
	
	
	
	
	  <div id="risposta"></div>  
</body>
</html>