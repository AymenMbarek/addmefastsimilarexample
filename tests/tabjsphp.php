<!doctype html>
	<html>
	<head>
		<meta charset="utf-8">
		<script type="text/javascript"></script>
     <title>test fetching </title>
     
 </head>
 <body>
    <?php
    $x="affect";
    $tableau_php = array();
    $tableau_php[0] = "0";
    $tableau_php[1] = "1";
    $tableau_php[2] = "2";
    $tableau_php[3] = "3";    
 
 
   echo "<script type='text/javascript'>";
    echo "var js_tableau = new Array;";
 
    foreach($tableau_php as $cle=>$valeur){
 
    echo "js_tableau[$cle] = '$valeur' ;";
    echo "document.write(js_tableau[$cle]);";
    }
 
    echo "</script>";
 
    ?>
 
 

<p> celui qui ne fonctionne pas : (avec</p></br>

 <button id="btnSend">Send</button>

    <script>
        let btnSend = document.querySelector('#btnSend');
        if (btnSend) {
            btnSend.setAttribute('name', 'send');
            btnSend.setAttribute('disabled', '');
        }
    </script>

     </body>
</html>