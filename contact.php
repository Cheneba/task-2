<?php
if (isset($_GET['textarea']) || isset($_GET['msg'])) {
  $msg = htmlspecialchars($_GET['textarea']) ?: htmlspecialchars($_GET['msg']);
}
?>

<?php include "header.php"; ?>


<div class="contact-body">
  <div class="container">
    <h1 style="margin-top: 50px;">Contact us</h1>
    <br>
    <hr>
    <br>
    <p>I am available for whatever request you have. Here are the various ways you can get to me:</p>
    <br>
    <p>Email: <strong>chenebametuge14@gmail.com</strong></p>
    <p>Tel(Whatsapp): <strong>+237 673893817</strong></p>
    <p>Slack Handle: <strong>@Metuge</strong></p>

    <br>
    <hr>
    <p>
      <?php echo $msg ? "Previous Message: $msg" : "No previous message" ?>
    </p>
    <hr>
    <br>
    <p>Enter a message</p>
    <form action="/task/contact.php" method="GET">
      <textarea name="textarea" id="textarea"></textarea>
      <div class="submit-btn">
        <button type="submit">Send</button>
      </div>
    </form>
  </div>
</div>


<?php include "footer.php"; ?>