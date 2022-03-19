<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Student Grades</title>

  <link href="styles.css" rel="stylesheet">

  <script defer src="script.js"></script>

</head>


<body>
<?php include 'grades.php'?>
<button class="button" data-modal-target=".modal">Jericho Carl R. Lugtu</button>
 
  <div class="modal" id="abc">
    <div class="modal-header">
      <div class="title">Informations</div>
      <button button-for-closing class="close-button">&times;</button>
    </div>
  
    <div class="modal-body"> 
      <table>
        <thead>
          <tr>
            <th><?php echo implode('</th><th>', array_keys(current($grades))); ?></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($grades as $row): array_map('htmlentities', $row); ?>
          <tr>
            <td><?php echo implode('</td><td>', $row); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      

    </div>

  </div>

  <div id="overlay"></div>

</body>
</html>