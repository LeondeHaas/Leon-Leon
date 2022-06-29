<?php 
require_once("connecter.php");
$dataTable = "crud-ict";
$sql = "SELECT * FROM reizen";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>

<div class="boekingen-container">
        <?php 
            foreach ($result as $result){ ?>
            <div class='boeken-container'>
                <div class='boeken-container-layout'>
                    <div class='boeken-container-layout-img'>
                        <img src='img/destination-malaga.png'>
                    </div>
                    <div class='boeken-container-layout-items'>
                        <h3><?php echo $result['bestemming']; ?></h3>
                        <p><?php echo $result['vliegveld']; ?></p>
                        <div class='boeken-container-layout-items-book'>
                            <p>de vakanktie duurt <?php echo $result['duur']; ?> dagen</p>
                            <p>€ <?php echo $result['personen']; ?></p>
                            <a class="boeken" name='Boeken' href='includes/boeken_update.php?ID=<?php echo $result['ID']?>&name=Boeken'>boeken</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php        
            }
        ?>
</div>