<?php   
    session_start();
    include '../service/config.php';
   
?>

<html>
    <head>
        <title>Request Admin</title>
    </head>
        <body>

       <center> 
        <fieldset>
            
       <legend><h1><span>Request To Admin</span></h1></legend>    
    

    <strong> If you want to do any Update/Delete</strong><br>
    <br>
    <textarea name="Request" id="Request" cols="30" rows="5"></textarea><br>
    <input type="submit" id="submit" name="SubmittoAdmin"><br>
                        <br>
                        <b id="msg"></b>
                        <br>

    <a href="student.php">Student Page</a>
    
    </center>
    

        </fieldset>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
            $('#submit').on('click',function(e){
                var category1id = $('#Request').val();
        
                    $.ajax({
                        type: 'POST',
                        url: '../php/req_to_adm_ud.php',
                        data: 'Request='+category1id,
                        success: function(html){
                            $('#msg').html(html);
                        }
                    });
                    $('#Request').val("");
                
            });
    });
    
    </script>
    </body>
</html>