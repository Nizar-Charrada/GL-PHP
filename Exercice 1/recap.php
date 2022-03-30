<?php 


$nom=ucfirst($_POST["nom"]);
$prenom=ucfirst($_POST["prenom"]);
$nombre=$_POST["nombre"];
$adresse=$_POST["adresse"];
$type=ucfirst($_POST["type"]);
$mayo=isset($_POST["mayonnaise"]);
$salade=isset($_POST["salade"]);
$harissa=isset($_POST["harissa"]);
$prix_total=$nombre*4;
$remise=0;
$prix_final=$prix_total;
if($nombre>10){
    $remise=$prix_total*0.1;
    $prix_final=$prix_total-$remise;
}
?>


<html>
<body>

    
    <table>
		<tbody>
        <tr>
			<th >Nom</th>
			<td ><?=$nom?></td>
		</tr>
		<tr>
        <th >Prenom</th>
			<td ><?=$prenom?></td>
		</tr>
		<tr>
        <th >No. de sandwichs</th>
			<td ><?=$nombre?></td>
		</tr>
		<tr>
        <th >Type</th>
			<td ><?=$type?></td>
		</tr>
        <tr>
            <th >Ingrediants à ajouter</th>
			<td ><?php
            if ($mayo==FALSE && $harissa==FALSE && $salade==FALSE){
                echo "Rien";
            }
            else if ($harissa==TRUE){
                echo " Harissa\n";
            }
            if($mayo==TRUE){
                echo " Mayonnaise\n";
            }
            if($salade==TRUE){
                echo " Salade\n";
            }
            ?></td>
		</tr>
        <tr>
        <th >Prix Total</th>
			<td ><?="${prix_total} DT"?></td>
		</tr>
        <?php 
        if ($nombre>10){
            echo "<tr>
            <th >Remise</th>
			<td>${remise} DT</td>
		</tr>";
        echo "<tr>
        <th >Prix Final après Remise</th>
        <td >${prix_final} DT</td>
    </tr>";
        }?>
        </tbody>
	</table>
</body>
</html>


