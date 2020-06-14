<!DOCTYPE html>
<html>
<head>
  <title>Fashion Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
  integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
  crossorigin="anonymous">
  <script src="src/main.js"></script>
  <script src="src/functii.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body >
  <?php
    include "createaccount.php";
   ?>
  <nav class="navbar" id="top">
    <ul class="navbar-nav flex-row">
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="tooltip" title="facebook"><i class="fab fa-facebook"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="tooltip" title="instagram"><i class="fab fa-instagram"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="tooltip" title="snap"><i class="fab fa-snapchat"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="tooltip" title="flickr"><i class="fab fa-flickr"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="tooltip" title="twitter"><i class="fab fa-twitter"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="tooltip" title="linkedin"><i class="fa fa-linkedin-square"></i></a>
      </li>
      <li class="nav-item" id="loginBtn">
        <a class="nav-link" href="#" data-toggle="tooltip" title="Login!"><i class="fa fa-angle-double-up"></i></a>
      </li>
      </ul>
      <ul class="navbar-nav navbar-right flex-row">
      <li class="nav-item">
        <a class="nav-link" href="#"><form><input type="text" name="search" placeholder="Search.."></form></a>
      </li>
    </ul>
  </nav>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <div class="form-group">
          <label for="userName">User name</label>
          <input type="text" name="userName" class="form-control" id="userName" placeholder="User">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-dark login">Login</button>
        <button type="button" class="btn btn-dark signUp" onclick="loadDoc();">Sign Up</button>
      </form>
    </div>
  </div>
  <header>
    <div class="container-fluid">
      <h1 class="text-uppercase text-center">jane bloglife</h1>
      <h2 class="h6 text-center">Welcome to the blog of <span class="mark">Jane's world</span></h2>
    </div>
  </header>
  <div class="relative">
    <img src="img/jane.jpg" class="img-fluid">
    <div class="text">
      <h2>Jane's</h3>
      <h1 class="text-uppercase">fashion blog</h2>
      <button class="btn">SUBSCRIBE</button>
    </div>
    </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="article">
          <h3>TITLE HEADING</h3>
          <h5>Title description, date</h5>
          <figure class="figure">
            <img src="img/girl_hat.jpg" class="figure-img img-fluid">
            <figcaption class="figure-caption">
              <p>More hats! I am crazy about hats these days. Some text about this
              blog entry. Fashion fashion and muris neque quam, fermentum ut nisl
              vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod
              placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus
               at. Phasellus sed ultricies mi non congue ullam corper. Praesent
                tincidunt sedtellus ut rutrum. Sed vitae justo condimentum,
                porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                <br>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum
                consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitation ullamco.</p>
            </figcaption>
          </figure>
          <button type="button" value="0" class="btn btn-outline-secondary likeable" onclick="buttonLike(value)">
            <i class="fa fa-thumbs-o-up"></i> Like</button>
            <form>
              <div class="form-group">
                <textarea class="form-control comments" rows="3"></textarea>
              </div>
              <button type="submit" value="0" class="btn btn-dark">Comment</button>
            </form>
            <p class="para">
            </p>
      </div>
      <div class="article">
        <h3>TITLE HEADING</h3>
        <h5>Title description, date</h5>
        <figure class="figure">
          <img src="img/man_hat.jpg" class="figure-img img-fluid">
          <figcaption class="figure-caption">
            <p>Hats! The trend this summer is hats for men!</p>

            <p>Some text about this blog entry. Fashion fashion and mauris neque
               quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis
               nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac
               accumsan tortor cursus at. Phasellus sed ultricies mi non congue
               ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae
               justo condimentum, porta lectus vitae, ultricies congue gravida
               diam non fringilla.</p>
          </figcaption>
        </figure>
        <form>
        <button type="button" value="1" class="btn btn-outline-secondary likeable" onclick="buttonLike(value)">
          <i class="fa fa-thumbs-o-up"></i> Like</button>
        </form>
            <form>
            <div class="form-group">
              <textarea class="form-control comments" rows="3"></textarea>
            </div>
            <button type="submit" value="1" class="btn btn-dark">Comment</button>
          </form>
          <p class="para">
          </p>
      </div>
      <div class="article">
        <h3>TITLE HEADING</h3>
        <h5>Title description, date</h5>
        <figure class="figure">
          <img src="img/runway.jpg" class="figure-img img-fluid">
          <figcaption class="figure-caption">
            <p>Dont miss! The runway in New York City this weekend is gonna be
              legendary!</p>

              <p>Some text about this blog entry. Fashion fashion and mauris
                neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed
                mattis nunc id lorem euismod placerat. Vivamus porttitor magna
                enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi
                non congue ullam corper. Praesent tincidunt sedtellus ut rutrum.
                Sed vitae justo condimentum, porta lectus vitae, ultricies congue
                gravida diam non fringilla.</p>
          </figcaption>
        </figure>
        <form>
        <button type="button" value="2" class="btn btn-outline-secondary likeable" onclick="buttonLike(value)">
          <i class="fa fa-thumbs-o-up"></i> Like</button>
        </form>
            <form>
            <div class="form-group">
              <textarea class="form-control comments" rows="3"></textarea>
            </div>
            <button type="submit" value="2" class="btn btn-dark">Comment</button>
          </form>
          <p class="para">
          </p>
      </div>
      <div class="article">

      </div>
      <template id="produs-template">
        <div class="article">
          <h3 class="title"></h3>
          <h5 class="description"></h5>
          <figure class="figure">
            <figcaption class="figure-caption">
              <p class="text"></p>
              <p class="text2"></p>
            </figcaption>
          </figure>
          <button type="button" class="btn btn-outline-secondary buton" id="likeable"
          onclick="functionLike()">
            <i class="fa fa-thumbs-o-up"></i></button>
        </div>
      </template>
      <div id="produse"></div>
    </div>
      <div class="col-lg-4">
        <div class="aside first">
          <img src="img/avatar_girl2.jpg" class="img-fluid">
          <h4>My name</h4>
          <p>Just me, myself and I, exploring the universe of uknownment. I have
             a heart of love and a interest of lorem ipsum and mauris neque quam
              blog. I want to share my world with you.</p>
      </div>
      <div class="aside">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Popular posts</th>
            </tr>
          </thead>
          <tbody>
            <tr class="posts">
              <th><img src="img/avatar_smoke.jpg" class="img-fluid float-left">
                <h5>Denim</h5>
                <p>Sed mattis nunc</p>
              </th>
            </tr>
            <tr class="posts">
              <th><img src="img/bandmember.jpg" class="img-fluid float-left">
                <h5>Sweaters</h5>
                <p>Some text</p>
              </th>
            </tr>
            <tr class="posts">
              <th><img src="img/workshop.jpg" class="img-fluid float-left">
                <h5>Workshop</h5>
                <p>Some text</p>
              </th>
            </tr>
            <tr class="posts">
              <th><img src="img/avatar_smoke.jpg" class="img-fluid float-left">
                <h5>Trends</h5>
                <p>Another text</p>
              </th>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="aside">
        <table class="table">
          <thead>
            <tr>
              <th>Advertise</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="advertise"></th>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="aside">
        <table class="table">
          <thead>
            <tr>
              <th>Tags</th>
            </tr>
          </thead>
          <tbody>
            <tr><th>
              <span>Fashion</span><span>New York</span><span>London</span>
                <span>Hats</span><span>Norway</span><span>Sweaters</span>
              <span>Ideas</span><span>Deals</span><span>Accessories</span>
            <span>News</span><span>Clothing</span><span>Shopping</span><span>
            Jeans</span><span>Trends</span>
            </th>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="aside">
        <table class="table">
          <thead>
            <tr>
              <th>Inspiration</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>
                <div class="container">
                <div class="row">
                <figure class="col-lg-6">
                  <img src="img/jeans.jpg" class="img-fluid mx-auto d-block">
                </figure>
                <figure class="col-lg-6">
                  <img src="img/avatar_hat.jpg" class="img-fluid mx-auto d-block">
                </figure>
              </div>
              <div class="row">
                <figure class="col-lg-6">
                  <img src="img/team1.jpg" class="img-fluid mx-auto d-block">
                </figure>
                <figure class="col-lg-6">
                  <img src="img/team4.jpg" class="img-fluid mx-auto d-block">
                </figure>
              </div>
          </div>
              </th>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="aside">
        <table class="table">
          <thead>
            <tr>
              <th>Follow Me</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>
                <i class="fa fa-facebook-official follow"></i>
                <i class="fa fa-instagram follow"></i>
                <i class="fa fa-snapchat follow"></i>
                <i class="fa fa-pinterest-p follow"></i>
                <i class="fa fa-twitter follow"></i>
                <i class="fa fa-linkedin follow"></i>
              </th>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="aside">
        <table class="table">
          <thead>
            <tr>
              <th>Subscribe</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="subscribe">Enter your e-mail below and get notified on the latest blog
                posts.
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter e-mail"
                  </div>
                  <button type="submit" class="btn btn-danger btn-block">Subscribe</button>
                </form>
              </th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    </div>
  </div>
  <div class="container-fluid footer">
    <div class="row">
      <div class="col-sm-12">
    <a href="#top"><button type="button" class="btn"><i class="fa fa-arrow-up"></i>
          To the top
      </button></a>
    </div>
      <div class="col-sm-12">
      <p>Powered by Andrei A</p>
    </div>
    </div>
  </div>
  <script>
  //the modal function
  let modal = document.getElementById('myModal');
  let btn = document.getElementById("loginBtn");
  let span = document.getElementsByClassName("close")[0];

  btn.onclick = function(){
    modal.style.display = "block";
  }

  span.onclick = function(){
    modal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.display.style = "none";
    }
  }

  </script>
</body>
</html>
