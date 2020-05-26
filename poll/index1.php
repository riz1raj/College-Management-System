<?php
include '../service/config.php';
function show_poll(){
  global $conn;
  $polls = [];
  $sql = "SELECT * FROM poll WHERE q_option IS NULL";
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)){
      $row = mysqli_fetch_all($result, MYSQLI_ASSOC );
      
      foreach($row as $index=>$rows){
          $id = $rows['id'];
          $polls['poll_'.$id]=[
                  'id' => $rows['id'],
                  'question' => $rows['question']
          ];
              $sql1 = "SELECT * FROM poll WHERE '{$id}' = q_id";
              $result1 = mysqli_query($conn,$sql1);
              if(mysqli_num_rows($result1)){
              $row1 = mysqli_fetch_all($result1, MYSQLI_ASSOC );
              foreach($row1 as $index=>$rows1){
                  // $id1 = $rows1['parent_id'];
                  $polls['poll_'.$id]['option'][]=[
                      'id' => $rows1['id'],
                      'q_option' => $rows1['q_option']
                  ];
              } }
      }
  }else{
      return 'no data found!';
  }
  return $polls;
}
$polls = show_poll();

// echo '<pre>';
// print_r($polls);

?>
<!DOCTYPE html>
<html><head>
  
</head>
<body class="">
  <fieldset>
        
        <legend><center><h1>Poll Answer / Your Opinion</h1></center></legend>

  
  <div class="container">
    <div class="row">
      <?php
      if(isset($_GET['success'])){
        if($_GET['success'] == 1){
          echo '<div class="alert alert-success" style="color:green;"><b>Your have voted successfully.</b></div>';
        }else if($_GET['success'] == 0){
          echo '<div class="alert alert-danger" style="color:red;"><b>Your had already voted.</b></div>';
        }
      }
      
                if(is_array($polls)){
                foreach($polls as $poll){
                    $questionID = $poll['id'];
                ?>
          <h2><?php echo $poll['question']; ?></h2>
          <form action="poll_update.php" method="post">
          <ol>
              <?php
              if(isset($poll['option'])){
                  foreach($poll['option'] as $options){?>
                        <ul>
                          <li>
                            <label>
                              <input type="radio" value="<?php echo $options['id']; ?>" name="option" id="option">
                              <?php echo $options['q_option']; ?>
                            </label>
                          </li>
                        </ul>
                  <?php } }else{
                            echo '<li>No data found!</li>';
                  } ?>
                  <h4><input type="submit" name="submit" value="Vote">
                  <input type="hidden" name="q_id" value="<?php echo $questionID; ?>">
                  <a href="result.php?pollid=<?php echo $questionID; ?>">view result</a></h4>
          </ol>
         
          </form>
          <hr>
        <?php } }else{
                    echo '<h2>No data found!</h2>';
                }?>

 	<center><a href='../views/student.php'><b>Student Page</b></a></center><br>
      
    </div>
  </div>
  </center>
</body>
</html>