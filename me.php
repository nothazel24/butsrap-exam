<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My-Portofolio</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- EXTRAS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">
</head>


<body data-spy="scroll" data-target=".navbar" data-offset="50" style="background: #ffedad;">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#"><strong>Nothzl24.</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#profile">My Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section1">Goals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section2">Projects</a>
        </li>
      </ul>
    </div>
  </nav>


  <!-- HEAD CONTENT -->
  <br>
  <br>

  <div class="jumbotron jumbotron-fluid text-center p-5 bg-warning home" id="home">
    <h1>Hello !</h1>
    <p><strong>Welcome to My Portofolio website</strong></p>
    <p class="pl-5 pr-5 text-justify">Hi, welcome to my website. Here I create a portfolio website as a medium to add my
      insight into web development. Maybe there will be many shortcomings of this website, so, please understand,
      because I am a beginner programmer :>. Okay, let's move on to the next part....</p>

    <!-- BUTTON -->
    <div class="btn-wrapper d-flex justify-content-center">
      <a href="#" class="text-dark font-weight-bold">
        <div class="btn-home btn btn-sm pl-3 pr-3 ml-2 mr-2" style="background: #ffedad;">Info</div>
      </a>
      <a href="#" class="text-dark font-weight-bold">
        <div class="btn-home btn btn-sm pl-3 pr-3 ml-2 mr-2" style="background: #aad0ff;">Donate :) </div>
      </a>
    </div>
  </div>

  <br>

  <!-- PROFILE PAGE -->
  <div class="container container-fluid" id="profile">
    <h2 class="font-weight-bold my-4 d-flex justify-content-center">My Pro<div class="bg-dark pr-4 text-warning">file.
      </div>
    </h2>
    <div class="inner-profile">
      <img src="https://avatars.githubusercontent.com/u/157547885?s=400&u=ae6cf48d202aa8d0815c3d3b173635a9fb92c49e&v=4"
        alt="pfp" class="rounded-circle mx-auto d-block img-fluid pfp" width="180px">

      <div class="container container-sm contents">
        <p class="p-4 text-justify">Hello!, my name is nothazel, You can call me hazel. Today I'm learning Bootstrap
          framework. And maybe in the future i will adding new language to improve my personal web pages. Nice to meet
          you & stay tune!</p>
      </div> <!-- SECOND DIVISION -->

    </div> <!-- INNER PROFILE SECTION -->

    <div class="profileTable">
      <table class="table table-striped">
        <thead class="bg-dark text-warning">
          <tr>
            <th>My Skills</th>
            <th>Social Media</th>
          </tr>
        </thead>

        <tbody style="background: #FEFEFE;">
          <tr>
            <td>Phone repairing</td>
            <td>@nothazel24 (Github)</td>
          </tr>

          <tr>
            <td>Coding</td>
            <td>@frdnryann_ (IG)</td>
          </tr>

          <tr>
            <td>Design</td>
            <td>@shironekoo (FB)</td>
          </tr>
        </tbody>
      </table>
    </div> <!-- PROFILE TABLE SECTION -->

  </div>

  <br>

  <!-- SUB CONTENT -->
  <div class="jumbotron jumbotron-fluid p-4 mb-0" style="background: #8AB9F1;" id="section1">
    <h2 class="font-weight-bold p-1">Why i build this page?</h2>

    <div class="inner-goals">
      <?php

      $goals = [
        ["icons" => "assets/icons/build.png", "goals" => "I made this with the aim of improving my skills, expanding my experience, and at the same time practicing my English skills."],
        ["icons" => "assets/icons/exp.png", "goals" => "To train me to be a good Programmer and expand my Knowledge about Programming language, networking, and making people know a little bit about me through this website."],
        ["icons" => "assets/icons/care.png", "goals" => "I want to make my parents proud with what I have learned so far, and create new positive habits for myself :) "]
      ];

      $countGoals = count($goals);

      for ($j = 0; $j < 3; $j++):
        $currentIndex = $j % $countGoals;
        $currentGoals = $goals[$currentIndex];
        ?>

        <div class="container col col-sm d-flex justify-content-around align-items-center text-wrap p-4 goals<?= $j; ?>">
          <img src="<?= $currentGoals['icons'] ?>" alt="goal-icon" width="150px" height="150px">
          <p class="m-4"><?= $currentGoals['goals'] ?></p>
        </div>

      <?php endfor; ?>
    </div>

  </div>


  <!-- CONTENT TWO -->
  <div class="mb-5" style="background: #f8de7e;" id="section2">
    <div class="container container-fluid p-4">
      <h2 class="font-weight-bold my-4 d-flex justify-content-center">
        <div class="bg-dark pl-4 text-warning">My P</div>rojects.
      </h2>

      <div class="scrolled-projects mb-4">

        <div class="d-flex justify-content-around">
          <?php

          $contents = [
            ["title" => "First-Projects", "img" => "assets/projectsImg/projects.jpg", "links" => "https://youtube.com"],
            ["title" => "Second-Projects", "img" => "assets/projectsImg/projects2.jpg", "links" => "https://instagram.com"],
            ["title" => "Third-Projects", "img" => "assets/projectsImg/projects3.jpg", "links" => "https://whatsapp.com"],
            ["title" => "Fourth-Projects", "img" => "assets/projectsImg/projects4.jpg", "links" => "https://github.com"]
          ];

          $countContents = count($contents);

          for ($i = 0; $i <= 3; $i++):
            $currentIndex = $i % $countContents;
            $currentContents = $contents[$currentIndex];
            ?>

            <div class="mb-2 p-2 prjct text-center">
              <h6 class="font-weight-bold p-1"><?= $currentContents['title'] ?></h6>
              <img src="<?= $currentContents['img'] ?>" alt="#" class="shadow-sm rounded d-flex align-items-center"
                width="200px">
              <p class="text-right p-1"><a href="<?= $currentContents['links'] ?>"
                  class="text-dark font-weight-bold small">View Projects</a></p>
            </div>

          <?php endfor; ?>
        </div>

      </div> <!-- SCROLLED PROJECTS -->

      <p class="font-weight-bold text-center small">Here are some of the projects I made. maybe for now it doesn't feel
        much, but I will try to improve my skills and add more projects. </p>

    </div> <!-- CONTAINER -->
  </div>


  <!-- FOOTER -->
  <div class="footer">
    <div class="container container-fluid pl-4 pr-4 pb-3 d-flex justify-content-between align-items-center">
      <h2 class="d-flex">not<div class="bg-dark text-warning pr-4">Hzl24</div>
      </h2>
      <p>Project-?</p>
    </div>

    <div class="container container-fluid text-center">
      <p class="small pl-3 pr-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit delectus ea recusandae
        perferendis repudiandae fugit! Itaque eum, blanditiis dolor animi, totam, et quos impedit maxime minus officia
        libero provident iusto.</p>
    </div>

    <div class="d-flex flex-row small text-center footer-links justify-content-center">
      <p class="m-4"><a href="#home" class="text-dark">Home</a></p>
      <p class="m-4"><a href="#profile" class="text-dark">Profile</a></p>

      <div class="dropdown" style="cursor: pointer;">
        <p class="m-4 dropdown-toggle" data-toggle="dropdown">
          Social Media
        </p>

        <div class="dropdown-menu">
          <a class="dropdown-item" href="https://github.com/nothazel24" target="_self">Github</a>
          <a class="dropdown-item" href="#">Facebook</a>
          <a class="dropdown-item" href="#">Instagram</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Profile?</a>
        </div>
      </div>

    </div>

  </div>
  </div>
</body>

</html>