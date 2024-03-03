<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.ico" type="image/x-icon" />

  <link rel="stylesheet" href="hello.css">

  <title> Netflix </title>
</head>

<body>
  <nav class="nav nav-1">
    <a href="">
      <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Logonetflix.png/1600px-Logonetflix.png" alt="" />
    </a>
    <a href="index.php" class="btn btn-signin" id="log_out" >Log out</a>
  </nav>

  <section class="redirected">
    <div class="logout-container margin-inline">
      <h1 class="text-black margin-bottom-1">Leaving So Soon</h1>
      <p class="text-black">
        Just so you know, you don’t always need to sign out of Netflix. It’s only necessary if you’re on a shared or public computer. <br />
        <br />
        You’ll be redirected to Netflix.com in 30 seconds.
      </p>

      <a href="" class="btn btn-gonow margin-top-2 margin-bottom">Go Now</a>
    </div>
  </section>

  <footer class="footer footer-transparent">
    <div class="footer-container margin-inline">
      <p>
        Questions? <br />
        Call 007-803-321-2130
      </p>
      <div class="links">
        <ul class="">
          <li><a class="text-terms text-underline" href="">FAQ</a></li>
          <li><a class="text-terms text-underline" href="">Cookie Preferences</a></li>
        </ul>

        <ul>
          <li><a class="text-terms text-underline" href="">Help Center</a></li>
          <li><a class="text-terms text-underline" href="">Corporate Information</a></li>
        </ul>

        <a class="text-terms text-underline" href="">Terms of Use</a>

        <a class="text-terms text-underline" href="">Privacy</a>
      </div>

      <div class="language">
        <select class="language-select" onchange="location=this.value;">
          <option value="" selected>English</option>
          <option value="">Bahasa Indonesia</option>
        </select>
        <div class="language-icon">
          <i class="fas fa-globe globe"></i>
          <i class="fas fa-chevron-down chevron"></i>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>