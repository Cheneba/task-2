<?php include "header.php"; ?>


<div class="contact-body">
  <div class="container">
    <form action="#" method="POST">
      <div class="part-1">
        <label for="name">Name</label>
        <input type="text" id="name" placeholder="Name" />

        <label for="email">Email</label>
        <input type="text" id="email" placeholder="Email" />
      </div>
      <br />
      <div class="part-2">
        <label for="subject">Subject</label>
        <input type="text" id="subject" placeholder="Subject" />
        <br />
        <br />
        Message
        <textarea name="message" id="message"></textarea>
      </div>

      <div class="submit-btn">
        <button type="submit">Send</button>
      </div>
    </form>
  </div>
</div>


<?php include "footer.php"; ?>