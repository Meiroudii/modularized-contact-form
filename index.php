<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form | Contact Me</title>
  <link rel="stylesheet" href="./styles.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
  <script src="./main.js" defer type="text/javascript"></script>
</head>
<body>
  <div class="contact-wrapper">
      <header>Send us a Message</header>
      <form method="POST "action="./message.php">
        <div class="db1-field">
          <div class="field">
            <input type="text" name="name" placeholder="Enter your name"/>
            <i class="material-icons">person</i>
          </div>
          <div class="field">
            <input type="text" name="email" placeholder="Enter your email"/>
            <i class="material-icons">mail</i>
          </div>
        </div>

        <div class="db1-field">
          <div class="field">
            <input type="text" name="phone" placeholder="Enter your phone"/>
            <i class="material-icons">phone</i>
          </div>
          <div class="field">
            <input type="text" name="website" placeholder="Enter your website"/>
            <i class="material-icons">web</i>
          </div>
        </div>

        <div class="message">
          <textarea name="message" placeholder="Write your message"></textarea>
          <i class="material-icons">message</i>
        </div>
        <div class="button-area">
          <button type="submit">Send Message</button>
          <span>Sending your message...</span>
        </div>
      </form>
  </div>
</body>
</html>
