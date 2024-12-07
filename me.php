<?php include 'others/head.php'; ?>

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
        <div class="btn-home btn btn-sm pl-3 pr-3 ml-2 mr-2" style="background: #aad0ff;">????</div>
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
            ["title" => "First-Projects", "img" => "assets/projectsImg/projects.jpg", "links" => "projects.php"],
            ["title" => "Second-Projects", "img" => "assets/projectsImg/projects2.jpg", "links" => "projects.php"],
            ["title" => "Third-Projects", "img" => "assets/projectsImg/projects3.jpg", "links" => "projects.php"],
            ["title" => "Fourth-Projects", "img" => "assets/projectsImg/projects4.jpg", "links" => "projects.php"]
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

<?php include 'others/footer.php'; ?>