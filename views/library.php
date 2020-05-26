<?php   
    session_start();
    include '../service/config.php'; 
  
?>


<html>
    <head>
        <title>Library</title>
    </head>
    <body>
        <center>

    <fieldset>
        
        <legend><h1><span>Regestered Boooks In Library</span></h1></legend>
        <form id="bookFrom">
  <input list="book" name="b_name" id="bookname">
  <datalist id="book">
  <?php
  $sql1 = "SELECT * FROM book";
  $result1 = mysqli_query($conn,$sql1) or die("book query faild!");
    if($result1){
        while($row1 = mysqli_fetch_assoc($result1)){
            echo '<option value="'.$row1['b_name'].'">';
        
        }
    }
  ?> 
  </datalist>
  <input type="submit" id="submit1" value="Add">
</form>   

    <div id="regBook">
    
    
    </div>


    <p id="msg"></p>

        
                    <br>
                    <br>
    <a href="student.php">Student Page</a>
    </center>
    

    </fieldset>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){


        function Tbookload(){

                    $.ajax({
                        url: '../php/regbook_load.php',
                        type: 'POST',
                        success: function(data){
                            $('#regBook').html(data);
                        }
                    });           
        }
             
        Tbookload();

            $('#submit1').on('click',function(e){
                e.preventDefault();
                var category1id = $('#bookname').val();
        
                    $.ajax({
                        url: '../php/book_add.php',
                        type: 'POST',
                        data: {bookname:category1id},
                        success: function(html){
                            Tbookload();
                            $('#msg').html(html);
                            $("#bookFrom").trigger("reset");
                        }
                    });
                
            });

            $(document).on("click","#deleteBtn",function(){
                var BookId = $(this).data("id");
                $.ajax({
                        url: '../php/del_book.php',
                        type: 'POST',
                        data: {id:BookId},
                        success: function(html){
                            Tbookload();
                            $('#msg').html(html);
                        }
                    });

            })
        
               
                    
                
            
    });
    
    </script>

 </body>   
</html>