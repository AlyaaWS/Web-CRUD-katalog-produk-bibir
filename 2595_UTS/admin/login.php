<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    /* ALYA WAHYUNING SYAHBANI 22.12.2595 SI 05*/
    body {
      background: url('../lip.jpg') center center no-repeat;
      background-size: cover;
      font-family: "Roboto", sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-page {
      background: rgba(255, 255, 255, 0.8);
      max-width: 360px;
      width: 100%;
      padding: 45px;
      text-align: center;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
      border-radius: 20px;
    }

    .login-form input {
      font-family: "Roboto", sans-serif;
      outline: 0;
      background: #f0f0f0;
      width: 100%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
    }

    .login-form button {
      font-family: "Roboto", sans-serif;
      text-transform: uppercase;
      outline: 0;
      background: #8B0000;
      width: 100%;
      border: 0;
      padding: 15px;
      color: #FFFFFF;
      font-size: 14px;
      -webkit-transition: all 0.3s ease;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .login-form .message {
      margin: 15px 0 0;
      color: #b3b3b3;
      font-size: 12px;
    }
    .login-form .message a {
      color: #4CAF50;
      text-decoration: none;
    }

    .login-form .register-form {
      display: none;
    }
  </style>
</head>
<body>
  <div class="login-page">
    <div class="login-form">
      <form class="login-form" action="login_action.php" method="post">
        <input type="text" placeholder="username" name="txtUsername">
        <input type="password" placeholder="password" name="txtPassword">
        <button>login</button>
      </form>
    </div>
  </div>
</body>
</html>
