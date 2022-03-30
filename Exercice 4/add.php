<?php
session_start();
for($i=0; $i<50;$i++)
{
    if (!isset($_SESSION["title{$i}"]) && isset($_POST['title']))
{$_SESSION["title{$i}"] = $_POST['title'];
$_SESSION["textarea{$i}"] = $_POST['textarea'];
break;}

}echo '<body><div style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">';
for($i=0; $i<50;$i++)

{if (isset($_SESSION["title{$i}"]))
    {echo "<div style='margin:10px; border:1px solid black;padding:0 10px;' name='{$_SESSION["title{$i}"]}'>";



    echo "<h1> {$_SESSION["title{$i}"]}</h1><p>{$_SESSION["textarea{$i}"]} </p><br></div>";}
};
echo "</div></body>";


echo 'You can add notes <a href="index.php">here</a><br>';
echo 'You can logout <a href="logout.php">here</a>';
?>