<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" integrity="sha256-tKn8A2U9uuN5rPr3gh4A9FYMJkarrzLVyks7aS/ZfBU=" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js" integrity="sha256-W9FML0cw6SfScX3k0Z8iTWhaZGSEUrR3R3KWfRA6lnI=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript">
    $(document).ready(function(){
    $('.sidenav').sidenav();
    });
  </script>

</head>
<body>
  <nav class="container-fluid nav-wrapper">
  <div class="nav-wrapper">
    <a href="#" class="brand-logo">CSI-SVCE</a>
    <a class="sidenav-trigger" data-target="mobile-responsive">
      <i class="material-icons">menu</i>
    </a>
    <ul class="right hide-on-med-and-down">
      <li>
        <a href="index.php" id="home">Home</a>
      </li>
      <li>
        <a id="events" href="events.php">News & Events</a>
      </li>
      <li>
        <a href="achievements.php" id="achievements">Achievements</a>
      </li>
      <li>
        <a id="team" href="team.php">Our Team</a>
      </li>
      <li>
        <a href="contacts.php" id="contacts">Contact Us</a>
      </li>
    </ul>
  </div>
  </nav>

  <ul class="sidenav" id="mobile-responsive">
    <li>
      <a href="index.php" id="home">Home</a>
    </li>
    <li>
      <a id="events" href="events.php">News & Events</a>
    </li>
    <li>
      <a href="achievements.php" id="achievements">Achievements</a>
    </li>
    <li>
      <a id="team" href="team.php">Our Team</a>
    </li>
    <li>
      <a class="navlink" href="contacts.php" id="contacts">Contact Us</a>
    </li>
  </ul>
</body>
</html>
  