<!DOCTYPE html>
<html lang="bg">
<?php
require('auth_session.php');
?>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title>GymSync</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              GymSync
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Начало <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="why.php"> Защо нас </a>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="trainer.php"> Треньори</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Връзка с нас</a>
                </li>
                <?php
                if (isset($_SESSION['user'])) {
                  echo '<li class="nav-item">
                            <a class="nav-link" href="#">Профил</a>
                          </li>';
                  echo '<li class="nav-item">
                            <a class="nav-link" href="logout.php">ИЗХОД</a>
                          </li>';
                } else {
                  echo '<li class="nav-item">
                            <a class="nav-link" href="login.php"> Влезте</a>
                          </li>';
                }
                ?>
              </ul>
              <div class="user_option">
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
  </div>
  <section class="us_section layout_padding">
    <?php
    if ($_SESSION['user']['admin'] == 1) {
      include('db.php');
      echo '<h2 id="title">АДМИН ПАНЕЛ</h2>';

      echo '<table id="tadmin">
              <tr>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>SUBSCRIPTION</th>
                <th>IS ADMIN</th>
                </tr>';
      $query = "SELECT * FROM `users`;";

      try {
        $stmt = $connection->prepare($query);
        $stmt->execute();

        $r = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();

        foreach ($result as $row) {
          echo "<tr>" . "<td>" . $row["name"] . "</td>" . "<td>" .
            $row["email"] . "</td>" . "<td>" . $row["subscription"] . "</td>" . "<td>" . $row["admin"] . "</td>" . "</tr>";
        }
      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
      echo "</table>";
    } else {
    ?>
      <div id="card-subs" class="card" style="width: 30rem;">
        <img class="card-img-top" src="https://images.pexels.com/photos/841130/pexels-photo-841130.jpeg?cs=srgb&dl=pexels-victor-freitas-841130.jpg&fm=jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title" style="color:black;">_Членска карта_</h5>
          <h6 class="card-subtitle mb-2 text-muted">Здравейте <?php echo $_SESSION['user']['name'] ?>!</h6>
          <p class="card-text">Вие притежавате <?php echo $_SESSION['user']['subscription'] ?> абонамент.</p>
          <?php
          if ($_SESSION['user']['subscription'] == "BASIC"){
            echo '<p>С нашият Basic Membership имате достъп до фитнеса от 14:00 до 19:00 часа. Не е включен достъп до съблекалня.</p>';
          }elseif($_SESSION['user']['subscription']== "PREMIUM"){
            echo '<p>С нашият премиум пакет имате достъп до нашият спа център, съблекалнята. Също така нямате ограничение, кога можете да тренирате. С премиум получавате допълнително ѝ специална хранителна диета и тренировка, пригодена само за Вас.</p>';
          }
          ?>
        </div>
      </div>

    <?php }?>
  </section>

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-1">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                Местоположение
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-2">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                +359 88 999 1839
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <footer class="container-fluid footer_section">
    <p>
      &copy; 2024 Всички права са запазени
      <a href="#">ОТ ВЕЛИКОТО ТРИО</a>
    </p>
  </footer>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>


</body>

</html>