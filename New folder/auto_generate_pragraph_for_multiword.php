


  <form action="auto_generate_pragraph_for_multiword.php" method="post">

  <div class="form-group">
    <h1>Enter your word for generating paragraph:</h1>
    <input type="text" name="word">
  </div>

  <div class="form-group">
     <h1>Enter your Descripton:</h1><br>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
  </div>

  <button type="submit" name="submit">Submit</button>
</form>



  <?php 
  if(isset($_POST['submit'])){
    $old_value = $_REQUEST['word'];
    $demo_description = $_REQUEST['description'];
    $value = explode(",", $old_value);
    foreach ($value as $word) {
      if($word === NULL){
        echo "Your input word empty!!";
      }
      else{

        <form action="paragraph.php" method="post">

            <button type="submit" value="Generate Now"></button>
      
        </form>
      
      }
    }
  }
  else{
    echo "something wrong anywhere!";
  }
?>
