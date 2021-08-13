<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>3D Forms</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="forms-wrapper">
        <form class="signin-form">
          <a href="#" class="signup-btn">Sign Up</a>
          <h2>Sign In</h2>
          <div class="inputs-wrapper">
            <input type="text" placeholder="Your Email" />
            <input type="password" placeholder="Password" />
            <input type="submit" value="Sign In" />
          </div>
        </form>
        <form class="signup-form">
          <a href="#" class="signin-btn">Sign In</a>
          <h2>Sign Up</h2>
          <div class="inputs-wrapper">
            <input type="text" placeholder="Your Name" />
            <input type="text" placeholder="Your Email" />
            <input type="password" placeholder="Password" />
            <input type="password" placeholder="Confirm Password" />
            <input type="submit" value="Sign Up" />
          </div>
        </form>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>