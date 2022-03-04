<?php 
 session_start();
 if(!isset($_SESSION['task'])){
    $_SESSION['task'] = array();
 }
 if(!isset($_SESSION['task'])){
   $_SESSION['complete'] = array();
}
 ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <?php 
 if(isset($_POST['btn1'])){

    array_push($_SESSION['task'] ,$_POST['task']);
 }
 function display() {
    echo '<ul>';
    $i = 0;
    foreach($_SESSION['task'] as $v){
        echo '<li id="list'.$i.'"><input type ="checkbox"  name="check" value="check'.$i.'" onchange="form.submit()">'.$v.'<button id="Edit" name="edit'.$i.'">Edit</button> <button id="Delete" name="del'.$i.'">Delete</button></li><br> ';
        $i++;
    }
    echo '</ul>';
 }
 for($j = 0;$j < count($_SESSION['task']) ; $j++){
    if(isset($_POST['del'.$j])) {
        array_splice($_SESSION['task'],$j,1);
    }
 }
 for($j = 0;$j < count($_SESSION['task']) ; $j++){
    if(isset($_POST['edit'.$j])) {
        $_SESSION['pop'] = $j;
        
    }
  
 }
  
 for($j = 0;$j < count($_SESSION['task']) ; $j++){
  
     if($j == $_SESSION['pop']){
        if(isset($_POST['btn2'])) {
       
        array_splice($_SESSION['task'],$_SESSION['pop'],1,$_POST['task']);
    }

    }
 }
 for($j = 0;$j < count($_SESSION['task']) ; $j++){
   if(isset($_POST['check'])){
      echo 'naman';
   }
}
$var = count($_SESSION['task']);
echo $var;

 ?>
 <script>
    $(document).ready(function(){
       
         var count = '<?php echo $var ;?>';
         for(var i = 0 ; i < count ; i++ ) {
            $('#check'+[i]).on('click', function() {
               console.log(i);
         })
       }
    })
 

</script>


 