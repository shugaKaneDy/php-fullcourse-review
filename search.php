<?php
// Sanitize the data when you output it on the website

if( $_SERVER["REQUEST_METHOD"] == "POST") {
  $userSearch = $_POST["userSearch"];

  try {
    require_once "includes/dbh.inc.php";

    $query = "SELECT * FROM comments WHERE username = :userSearch;";

    $stmt = $pdo->prepare($query);

    $stmt->execute([
      ":userSearch" => $userSearch,
    ]);

    // $results = $stmt->fetch(); = single result
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;

  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }

} else {
  header("Location: sign-up.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

  <h3 class="text-center">This is our search result</h3>

  <?php if(empty($results)): ?>
    <div>
      <p>No Result</p>
    </div>
  <?php else: ?>
    <?php foreach($results as $row): ?>
      <div class="mb-3">
        <h4>
          <?= htmlspecialchars($row["username"]) ?>
        </h4>
        <p class="text-muted">
          <?= htmlspecialchars($row["created_at"]) ?>
        </p>
        <p>
          <?= htmlspecialchars($row["comment_text"]) ?>
        </p>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>