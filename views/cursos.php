<?php include 'db.php';?>

<div class="container">
    <?php 
		while($linha = mysqli_fetch_array($consulta_cursos)){
			echo '<div class="curso">';
                echo '<a href="?pagina=cursos"><img src='.$linha['img'].'/></a>';
                echo $linha['name'];
			    // echo $linha['Duração'];
            echo '</div>';
		?>

    <?php
			}
		?>

</div>