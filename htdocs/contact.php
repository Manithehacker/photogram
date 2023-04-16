<?php
include 'libs/load.php';
?>
<html>
    <head>
        <meta charset="UTF-8" />
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    </head>
<body>
  <header>
    <?php
    load_template('header');
    ?>
  </header>
<section class="contact section" id="contact">
    <h2 class="section-title" data-aos="fade-down">Contact</h2>

    <div class="contact_container bd_grid">
      <form action="#" class="contact_form">
        <input
          type="text"
          placeholder="Name"
          class="control_input"
          data-aos="fade-right"
          data-aos-delay="250"
        />
        <input
          type="mail"
          placeholder="Email"
          class="control_input"
          data-aos="fade-right"
          data-aos-delay="300"
        />
        <textarea
          name=""
          id=""
          cols="0"
          rows="10"
          class="control_input"
          data-aos="fade-right"
          data-aos-delay="400"
        ></textarea>

        <input
          type="button"
          value="Send"
          class="control_button button"
          data-aos="fade-right"
          data-aos-delay="450"
        />
      </form>
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