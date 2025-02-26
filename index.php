<?php include "header.php"; ?>

<main>
  <div class="body2">
    <div class="container2">
      <div class="holder2">
        <h1>Hello <?php echo "$greeting"; ?></h1>
        <h2><?php echo "I am $name. "; ?>Welcome to my page</h2>
        <p>About Me</p>
        <p class="text">Hello! My name is <strong><?php echo $name ?></strong>. I have a background in
          <strong><?php echo $background ?></strong>, and I specialize in <strong><?php echo $field ?></strong> using
          <strong><?php echo $specialization ?></strong>. I am
          passionate about building efficient and scalable web applications that enhance user experiences. In my free
          time, I enjoy
          <strong>
            <?php
            foreach ($hobbies as $hobby) {
              echo "$hobby, ";
            }
            ?>
          </strong> which helps me stay updated with the latest trends in
          technology and
          develop my skills further.
          p
        </p>
      </div>
    </div>
  </div>
</main>


<?php include "footer.php"; ?>