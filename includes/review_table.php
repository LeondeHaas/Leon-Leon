<?php 
require_once("../../includes/connecter.php");
$dataTable = "crud-ict";
$sql = "select * FROM reviews";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
        
        echo   "<tr>";
        echo   "<td>" . $result['naam'] ."</td>";
        echo   "<td>" . $result['bericht'] ."</td>";
        echo   "<td>" . $result['rating'] ."</td>";
        echo   "<td>" . $result['bestemming'] ."</td>";
        if ($result['validate'] == 1) {
            echo   "<td>Goedgekeurd</td>";
        } elseif ($result['validate'] == 2) {
            echo   "<td>Geweigerd</td>";
        } else {
            echo   "<td>
                    <a href='../../includes/validate.php?ID=".$result['ID']."&validate=1'><button>Accept</button></a>
                    <a href='../../includes/validate.php?ID=".$result['ID']."&validate=2'><button>Decline</button></a>
                    </td>";
        }
        echo   "</tr>"; 
    }