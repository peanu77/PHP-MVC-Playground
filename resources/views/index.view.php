<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Playground</title>
  </head>
  <body>
    <li>
      <strong>Task Name:</strong>
      <?= $task['title']; ?>
    </li>
    
    <li>
      <strong>Task Assigned:</strong>
      <?= $task['assigned_to']; ?>
    </li>
    <li>
      <strong>Completed:</strong>
      <?= $task['completed'] ? "Completed" : "Incomplete"; ?>
    </li>
  </body>
</html>
