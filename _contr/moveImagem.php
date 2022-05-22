
<?php


function uploadfile($origin, $dest, $tmp_name)
{
  $origin = strtolower(basename($origin));
  $fulldest = $dest.$origin;
  $filename = $origin;
  for ($i=1; file_exists($fulldest); $i++)
  {
    $fileext = (strpos($origin,'.')===false?'':'.'.substr(strrchr($origin, "."), 1));
    $filename = substr($origin, 0, strlen($origin)-strlen($fileext)).'['.$i.']'.$fileext;
    $fulldest = $dest.$origin;
  }
 
  if (move_uploaded_file($tmp_name, $fulldest)){
    echo "<p>OK</p>";
    return $filename;
    
  }
    
  return false;
}
























// Usage: uploadfile($_FILE['file']['name'],'temp/',$_FILE['file']['tmp_name'])
/*function uploadfile($dest, $tmp_name){
  
  
      $tmp_name = isset($_FILES["imagemTv"]["tmp_name"]);
      
      $name = basename(isset($_FILES["imagemtv"]["name"]));
      if(move_uploaded_file($tmp_name,$dest . $name)){
        echo "<p>So far so good</p>";
      }
      
    
  }*/
  
  
  /*$origin = strtolower(basename($origin));
  $fulldest = $dest.$origin;
  $filename = $tmp_name;
  for ($i=1; file_exists($fulldest); $i++)
  {
    $fileext = (strpos($origin,'.')===false?'':'.'.substr(strrchr($origin, "."), 1));
    $filename = substr($origin, 0, strlen($origin)-strlen($fileext)).'['.$i.']'.$fileext;
    //$fulldest = "_imagens/";
  }
  echo "<p>".$origin."</p>";
  echo "<p>".$fulldest."</p>";
  //echo $fulldest;
  if (move_uploaded_file($filename.$origin, $fulldest)){
      echo "Deu bom!";
    return $filename;
  }
  echo "Deu não!";
  echo "<p>$dest.$origin</p>";
  return false;*/

?>