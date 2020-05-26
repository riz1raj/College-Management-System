<?php   
    session_start();
    include '../service/config.php'; 
   
?>


<html>
    <head>
        <title>Selected Courses</title>
    </head>
    <body>
        <center>

    <fieldset>
        
        <legend><h1><span>Regestered Courses</span></h1></legend>
        <form id="courseFrom">
 
  <datalist id="course">
  <?php
  $sql1 = "SELECT * FROM course";
  $result1 = mysqli_query($conn,$sql1) or die("course query faild!");
    if($result1){
        while($row1 = mysqli_fetch_assoc($result1)){
            echo '<option value="'.$row1['c_name'].'">';
          
        }
    }
  ?> 
  </datalist>
  
</form>   

    <div id="regcourse">
    
    
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


        function Tcourseload(){

                    $.ajax({
                        url: '../php/regcourse_load.php',
                        type: 'POST',
                        success: function(data){
                            $('#regcourse').html(data);
                        }
                    });           
        }
             
        Tcourseload();

            $('#submit1').on('click',function(e){
                e.preventDefault();
                var category1id = $('#coursename').val();
        
                    $.ajax({
                        url: '../php/course_add.php',
                        type: 'POST',
                        data: {coursename:category1id},
                        success: function(html){
                            Tcourseload();
                            $('#msg').html(html);
                            $("#courseFrom").trigger("reset");
                        }
                    });
                
            });

            $(document).on("click","#deleteBtn",function(){
                var courseId = $(this).data("id");
                $.ajax({
                        url: '../php/del_course.php',
                        type: 'POST',
                        data: {id:courseId},
                        success: function(html){
                            Tcourseload();
                            $('#msg').html(html);
                        }
                    });

            })
        
               
                    
                
            
    });
    
    </script>

 </body>   
</html>