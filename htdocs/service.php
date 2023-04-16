<?php
include 'libs/load.php';
?>
<html>
    <head><meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Responsive Portfolio</title>
        <link rel="stylesheet" href="./assets/css/styles.css" />
        <link
          rel="stylesheet"
          href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
        />
        <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" /></head>
<bdoy>
  <header>
  <?php
    load_template('header');
    ?>
  </header>
    
<section class="work section" id="work">
    <h2 class="section-title" data-aos="fade-down">Service</h2>

    <div
      class="work_container bd_grid"
      data-aos="fade-down"
      data-aos-delay="250"
    >
      <div class="work_img">
        <img src="./assets/img/work1.jpg" alt="" />
      </div>

      <div class="work_img">
        <img src="./assets/img/work2.jpg" alt="" />
      </div>

      <div class="work_img">
        <img src="./assets/img/work3.jpg" alt="" />
      </div>

      <div class="work_img">
        <img src="./assets/img/work4.jpg" alt="" />
      </div>

      <div class="work_img">
        <img src="./assets/img/work5.jpg" alt="" />
      </div>

      <div class="work_img">
        <img src="./assets/img/work6.jpg" alt="" />
      </div>
    </div>
  </section>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="./assets/js/main.js"></script>

  <script>
    AOS.init({
      duration: 1200,
      once: false,
    });
  </script>
</body>
</html>