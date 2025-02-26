<?php include "header.php"; ?>


<div class="about-body">
  <div class="container">
    <h1>Hello, <?php echo $greeting ?: null; ?></h1>
    <p>Welcome to my page</p>
    <div class="skills">
      <h2>My Skills</h2>
      <?php foreach ($skills as $skill): ?>
        <p> <?php echo $skill['name'] ?: null ?> </p>
        <p>Level: <?php echo $skill['level'] ?: null ?> </p>
        <p> <?php echo $skill['description'] ?: null ?> </p>
      <?php endforeach ?>
    </div>
    <div class="projects">
      <h2>My projects</h2>
      <?php foreach ($projects as $project): ?>
        <p> <?php echo $project['name'] ?: null ?> </p>
        <p>Completion rate: <?php echo $project['completion'] ?: null ?> </p>
        <p> <?php echo $project['description'] ?: null ?> </p>
      <?php endforeach ?>
    </div>
  </div>

</div>

<?php include "footer.php"; ?>