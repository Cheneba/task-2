<?php

if (isset($_POST['submit'])) {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $title = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);
  var_dump($title);
  $ErrName = $name ? null : "required";
  $ErrEmail = $email ? null : "required";
  $ErrTitle = $title ? null : "required";

  if ($name && $email && $title) {
    // Code to connect to the database and store this data there
  }
}

?>

<?php include "header.php"; ?>


<div class="contact-body">
  <div class="container">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
      <div class="part-1">
        <label for="name">Name</label>
        <input type="text" id="name" placeholder="Name" required />

        <label for="email">Email</label>
        <input type="text" id="email" placeholder="Email" required />
      </div>
      <br />
      <div class="part-2">
        <label for="subject">Subject</label>
        <input type="text" id="subject" placeholder="Subject" required />
        <br />
        <br />
        Message
        <textarea name="message" id="message"></textarea>
      </div>

      <div class="submit-btn">
        <button type="submit" id="submit">Send</button>
      </div>
    </form>
  </div>
</div>


<?php include "footer.php"; ?>