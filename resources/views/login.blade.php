<!DOCTYPE html>
  <html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>CSM | Login</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'><link rel="stylesheet" href="{{ asset('css/index_style.css') }}">
  </head>
  
  <body>
    <form action="#" method="post">
      <div class="screen-1">
        <img src="https://centraldatabase.mgb.gov.ph/logo.png" alt="" style="width: 250px; height: 250px; margin: 0 auto; margin-bottom: 30px;">

        <div class="email">
          <label for="username">Username</label>

          <div class="sec-2">
            <input type="text" name="username" placeholder="Enter Username" style="width: 100%;"/>
          </div>
        </div>

        <div class="password">
          <label for="password">Password</label>

          <div class="sec-2">
            <input class="pas" type="password" name="password" placeholder="Enter Password" style="width: 100%;" />
          </div>
        </div>

        <!-- <button class="login">Login </button> -->
        <a href="{{ route('dashboard') }}" class="login" style="text-decoration: none; text-align: center;">Login </a>

        <!-- Footer -->
        <div class="footer">

        </div>
        <!-- End Footer -->
      </div>
    </form>
  </body>
</html>
