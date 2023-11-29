<?php
if(isset($_POST['submit'])) {
  $rows = $_POST['rows'];
  $cols = $_POST['cols'];

  // Génération du tableau HTML
  $table = '<table border="1">';
  $table .= '<tr>';
  for($i = 0; $i < $cols; $i++) {
    $table .= '<th>Colonne ' . ($i+1) . '</th>';
  }
  $table .= '</tr>';
  for($i = 0; $i < $rows; $i++) {
    $table .= '<tr>';
    for($j = 0; $j < $cols; $j++) {
      $table .= '<td>Ligne ' . ($i+1) . ', Colonne ' . ($j+1) . '</td>';
    }
    $table .= '</tr>';
  }
  $table .= '</table>';

  // Affichage du tableau HTML dans un textarea
  echo '<textarea rows="10" cols="50">' . $table . '</textarea>';
}
?>

<!-- Formulaire -->
<form method="POST" action="">
  <label for="rows">Nombre de lignes :</label>
  <input type="number" name="rows" id="rows" required><br>

  <label for="cols">Nombre de colonnes :</label>
  <input type="number" name="cols" id="cols" required><br>

  <input type="submit" name="submit" value="Générer le tableau">
</form>