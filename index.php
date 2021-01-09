<?php

include 'consumir.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="p-2 text-center">Codigo Postales Ciudad Mexico</h1>
    <table class="table table-striped table-hover table-bordered">
        <thead>
          <tr>
            <th>Codigo Postal</th>
            <th>Asentamiento</th>
			<th>Ciudad</th>
			<th>Estado</th>
          </tr>
        </thead>
        <tbody>
          <?php if(!empty($edms)):?>
          <?php foreach($edms as $data):?>
          <tr>
            <td><?php echo $data->codigoPostal;?></td>
            <td><?php echo $data->asentamiento;?></td>
			<td><?php echo $data->ciudad;?></td>
			<td><?php echo $data->estado;?></td>
          </tr>
          <?php endforeach;?>
          <?php endif;?>
        </tbody>
	</table>

</body>
</html>