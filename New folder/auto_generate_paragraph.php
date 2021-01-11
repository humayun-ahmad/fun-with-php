<form action="auto_generate_paragraph.php" method="post">
  <div class="form-group">
    <h1>Enter your word for generating paragraph:</h1>
    <input type="text" name="word">
  </div>
  <button type="submit" name="submit">Submit</button>
</form>

<?php 
  if(isset($_POST['submit'])){
    $value = $_REQUEST['word'];
    
  }
  else{
    echo "something wrong anywhere!";
  }
?>


<textarea name="" id="" cols="30" rows="10">this is the demo content <?php echo $value ?>. And this is the another demo content <?php echo $value ?>.
</textarea>



