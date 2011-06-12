<?php
include("haml/fammel.php");
for($i = 1; $i < count($argv); $i++)
{
  try
  {
    $fammel = new Fammel();
    $fammel->parse_file($argv[$i]);
    
    //echo "HAML:\n\n$input\n\n\nRESULT:\n\n";
    $output = $fammel->render();

    file_put_contents(str_replace('.haml', '.csl', $argv[$i]), $output);
    echo $output;
  } 
  catch(Exception $e)
  {
    echo $e->getMessage(), "\n";
  }
}
?>