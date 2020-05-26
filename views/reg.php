

                <DOCTYPE html>
        <head>
               <title>Student Registration</title>
        </head>
        
        <body>
        <br/>
        <center>
        <img src="../image/studentSignUp.png" width="300px" height="100px"/>
        </center>
        </br>
        
        
        
        
        
        
        <form action="../php/reg_insert.php" method="POST" name="regForm" onsubmit="return(validate()); ">
        <center>
        <?php 
             if(isset($_GET["success"])){

                  if($_GET["success"]){
                       
                  }else{
                    echo '<b style="color:red;">ID or email address already exists!</b>';
                  }
             }
             
             ?>
        <fieldset>
        
        <legend><b>Student Registration</b></legend>
        
        <table border=0>
        
        <tr>
        <td>
        Name <br/>
                      <input type="text" name="sname" id="sname" value="">
            <span style="color:red;" id="msg_sname"> </span>
                </td>           
        </tr>
        
        <tr>
        <td>
        Id <br/>
                      <input type="number" name="id" id="id" value="">
            <span style="color:red;" id="msg_id"> </span>
                </td>           
        </tr>
        
        <tr>
        <td>
        Password <br/>
                      <input type="password" name="pwd" id="pwd" value="">
            <span style="color:red;" id="msg_pwd"> </span>
            
                </td>           
        </tr>
        
        <tr>
        <td>
        Email <br/>
                      <input type="email" name="email" id="email" value="">
            <span style="color:red;" id="msg_email">  </span>
            
                </td>           
        </tr>
        
        <tr>
        <td>
        Date of Birth <br/>
                      <input type="date" name="dob" id="dob" value="">
            <span style="color:red;" id="msg_dob"> </span>
            
                </td>           
        </tr>
        
        <tr>
      
          <td>
        Blood Group <br/>
               <select name="blood_grp" id="blood_grp" required>
                    <option value="">none</option>
                    <option value="a+">A+</option>
                    <option value="b+">B+</option>
                    <option value="a+">AB+</option>
                    <option value="b+">AB-</option>
                    <option value="o+">O+</option>
                    <option value="a+">A-</option>
                    <option value="b+">B-</option>
                    <option value="o+">O-</option>
               </select>
             <span style="color:red;" id="msg_blood_grp">  </span>
          </td>
            </tr>
        
        <tr>
          <td>
          Gender <br/>
        <input type="radio" name="gender"  value="male" required>Male
        <input type="radio" name="gender" value="female" required>Female
        <input type="radio" name="gender" value="others" required>Others
        <span style="color:red;" id="msg_gender"> </span>
        
        
       
          </td>
          </tr>
        
        <tr>
        <td>
        Department <br/>
                      <select name="dept" id="dept" required>
                    <option value="">none</option>
                    <option value="science">Science</option>
                    <option value="arts">Arts</option>
                    <option value="commerce">Commerce</option>
               </select>
               <span style="color:red;" id="msg_dept"></span>
                </td>           
        </tr>
        
        
          <tr>
          <td>
          
        <input type="submit" name="submit" value="Sign Up">
        <a href='../index.php'>Sign in</a>
        
         
       
          </td>
          </tr>
        
        </table>
        
        </center>
        
        </fieldset>
        
        </form>





        <script>
          var msg_sname = document.getElementById("msg_sname");
          var msg_id = document.getElementById("msg_id");
          var msg_pwd = document.getElementById("msg_pwd");
          var msg_email = document.getElementById("msg_email");
          var msg_blood_grp = document.getElementById("msg_blood_grp");
          var msg_dob = document.getElementById("msg_dob");
          var msg_gender = document.getElementById("msg_gender");
          var msg_dept = document.getElementById("msg_dept");
          


          function validate() {

            var letters = /^([a-zA-z]+\s)*[a-zA-Z]+$/
            //var letters = /^([a-zA-Z]+\s)*+$/;
      if( document.regForm.sname.value == "" ) {
         msg_sname.innerHTML = "Your name cannot be empty";
         document.regForm.sname.focus() ;
         document.regForm.sname.addEventListener('keypress', function(){
          msg_sname.innerHTML = "";
         });
         return false;
      }else if( !document.regForm.sname.value.match(letters) ){
        msg_sname.innerHTML = "Only letters and white space allowed";
        document.regForm.sname.focus() ;
        document.regForm.sname.addEventListener('keypress', function(){
          msg_sname.innerHTML = "";
         });
         return false;
      }else if( document.regForm.sname.value.length < 3 ){
        msg_sname.innerHTML = "Length of the name must be greater than 3";
        document.regForm.sname.focus() ;
        document.regForm.sname.addEventListener('keypress', function(){
          msg_sname.innerHTML = "";
         });
         return false;
      }
       




      if( document.regForm.id.value == "" ) {
         msg_id.innerHTML = "Fill your ID!!!";
         document.regForm.id.focus() ;
         document.regForm.id.addEventListener('keypress', function(){
          msg_id.innerHTML = "";
         });
         return false;
      }else if( document.regForm.id.value.length < 4 ){
        msg_id.innerHTML = "ID cannot be less than 4 number";
        document.regForm.id.focus() ;
         return false;
         document.regForm.id.addEventListener('keypress', function(){
          msg_id.innerHTML = "";
         });
      }



      if( document.regForm.pwd.value == "" ) {
         msg_pwd.innerHTML = "Fill your Password!!!";
         document.regForm.pwd.focus() ;
         document.regForm.pwd.addEventListener('keypress', function(){
          msg_pwd.innerHTML = "";
         });
         return false;
      }else if( document.regForm.pwd.value.length < 6 ){
        msg_pwd.innerHTML = "Password must be more than 6 characters";
        document.regForm.pwd.focus() ;
        document.regForm.pwd.addEventListener('keypress', function(){
          msg_pwd.innerHTML = "";
         });
         return false;
      }



      
      if( document.regForm.email.value == "" ) {
         msg_email.innerHTML = "Email field cannot be empty";
         document.regForm.email.focus() ;
         document.regForm.email.addEventListener('keypress', function(){
          msg_email.innerHTML = "";
         });
         return false;
      }



      if( document.regForm.dob.value == "" ) {
         msg_dob.innerHTML = "What is ur DOB?!!!!";
         document.regForm.dob.focus() ;
         document.regForm.dob.addEventListener('click', function(){
          msg_dob.innerHTML = "";
         });
         return false;
      }



      if( document.regForm.gender.value == "" ) {
         msg_gender.innerHTML = "What is ur gender?!!!!";
         document.regForm.gender.focus() ;
         return false;
      }



      if( document.regForm.dept.value == "" ) {
         msg_dept.innerHTML = "Please enter the Department";
         document.regForm.dept.focus() ;
         return false;
      }



      if( document.regForm.blood_grp.value == "" ) {
         msg_blood_grp.innerHTML = "please give blood group";
         document.regForm.blood_grp.focus() ;
         return false;
      }




      return( true );
   }
        
        </script>
        
        </body>
        </html>
        
        
               
        