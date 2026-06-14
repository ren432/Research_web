<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/header.css">
    <title>Document</title>
  </head>
  <body>
    <nav id="sidebar">
      <img src="../imgs/fur.jpg" alt="" class="profile-img" />

      <!-- links -->
      <div class="sidebar">
        <ul class="links-active">
          <li>
            <a href="dashboard.php" target="content" class="nav-link active">
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="map.php" target="content" class="nav-link">
              <span>Map</span>
            </a>
          </li>
          <li>
            <a href="analysis.php" target="content" class="nav-link">
              <span>Analysis</span>
            </a>
          </li>
          <li>
            <a href="camer.php" target="content" class="nav-link">
              <span>Camera</span>
            </a>
          </li>
          <li>
            <a href="history.php" target="content" class="nav-link">
              <span>History</span>
            </a>
          </li>
        </ul>

        <!-- Signout button -->
      </div>
      <div class="signout">
        <button class="btn_signout" onclick="">Sign Out</button>
      </div>

      <!-- Signout button -->
    </nav>
    <script>
      const navLinks = document.querySelectorAll(".nav-link");

      navLinks.forEach((link) => {
        link.addEventListener("click", function () {
          document.querySelector(".nav-link.active").classList.remove("active");

          this.classList.add("active");
        });
      });
    </script>
  </body>
</html>
