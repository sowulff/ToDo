<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

// Add a task


// if (isset($_POST['todo'])) {
//   $todo = trim(filter_var($_POST['todo'], FILTER_SANITIZE_STRING));


//   $sql = $database->prepare("INSERT INTO tasks (description) VALUES (:todo)");
//   $sql->bindParam(':todo', $todo, PDO::PARAM_STR);

//   $sql->execute();
// };

if (isset($_POST['list'])) {
  $list = trim(filter_var($_POST['list'], FILTER_SANITIZE_STRING));


  $sql = $database->prepare("INSERT INTO lists (title) VALUES (:list)");
  $sql->bindParam(':list', $list, PDO::PARAM_STR);

  $sql->execute();
};




if (isset($_POST['todo'], $_POST['deadline'])) {
  $todo = trim(filter_var($_POST['todo'], FILTER_SANITIZE_STRING));
  $deadline = ($_POST['deadline']);
  // LÄGG TILL FÖR DATUM HÄR!!


  $sql = $database->prepare("INSERT INTO tasks (description, deadline) VALUES (:todo, :deadline)");
  $sql->bindParam(':todo', $todo, PDO::PARAM_STR);
  $sql->bindParam(':deadline', $deadline, PDO::PARAM_STR);

  $sql->execute();
};





redirect('/tasks.php');
