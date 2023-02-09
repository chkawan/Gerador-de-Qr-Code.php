<?php

?>
<html>
    <head>
        <title></title>
        
      
    </head>

    <body>

    <form  method="POST" action="index.php">
    
    <label>URL: <input id="name" name="name" type="text" placeholder="URL">
    </label>
        

        <input type="submit" id="send" Value='Enviar'>
    </form>

    <script>
           
           const btn = document.querySelector('#send');

            btn.addEventListner("click", function(e){
               
                e.preventDefault();

                const name = document.querySelector("#name");

                const value = name.value;

                console.log(value);
            
            });
        </script>

<?php

    include_once "index.php";

?>
    </body>
</html>