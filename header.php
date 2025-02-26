<?php
$greeting = null;
$name = "Cheneba Muche Metuge";
$background = "Computer Science";
$field = "Backend Development";
$specialization = "PHP";
$hobbies = array("reading", "playing games");
$skills = [
  [
    "name" => "Programming",
    "level" => "Intermediary",
    "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure quis doloribus odit illo possimus! Assumenda libero earum error quibusdam eum, id, dolore placeat consequatur quia excepturi, "
  ],
  [
    "name" => "Football",
    "level" => "Beginner",
    "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure quis doloribus odit illo possimus! Assumenda libero earum error quibusdam eum, id, dolore placeat consequatur quia excepturi, "
  ],
];

$projects = [
  [
    "name" => "web calculator",
    "completion" => "Finished",
    "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure quis doloribus odit illo possimus! Assumenda libero earum error quibusdam eum, id, dolore placeat consequatur quia excepturi, "
  ],
  [
    "name" => "php calculator",
    "completion" => "In progress... but ready for production",
    "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure quis doloribus odit illo possimus! Assumenda libero earum error quibusdam eum, id, dolore placeat consequatur quia excepturi, "
  ],
];

if (date('h') < 12) $greeting = "Good morning";
elseif (date('h') < 18) $greeting = "Good afternoon";
else  $greeting = "Good evening";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio</title>
  <link rel="stylesheet" href="css/tyle.css" />
</head>

<body>
  <header>
    <div class="header">
      <ul class="links-header">
        <li class="profile"></li>
        <li class="header-link">
          <a href="/task/">Home</a>
        </li>
        <li class="header-link">
          <a href="/task/about.php">About</a>
        </li>
        <li class="header-link">
          <a href="/task/contact.php">Contact</a>
        </li>
        <li class="time">
          <p><?php echo date("l, F j, Y") ?></p>
        </li>
      </ul>
    </div>
  </header>