<?php
include("haml/fammel.php");
for($i = 1; $i < count($argv); $i++)
{
  try
  {
    $fammel = new Fammel();
    $fammel->parse_file($argv[$i]);
    
    //femmel bug: spaces at end of attribute are striped. as workaround, %s% is used
    $output = str_replace("%s%"," ",$fammel->render());
    file_put_contents(str_replace('.haml', '.csl', $argv[$i]), $output);
    echo $output;
  } 
  catch(Exception $e)
  {
    echo $e->getMessage(), "\n";
  }
}
?>