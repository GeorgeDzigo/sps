<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HOME - SmartVillage</title>
      <!-- css -->
      <link rel="stylesheet" href="../css/home.css">
      <link rel="stylesheet" href="../css/reset.css">
      <!-- Includes files css -->
      <link rel="stylesheet" href="../view/css/header.css">
      <!-- Favicon -->
      <link rel="shortcut icon" href="../favicon/logo_hq.png" type="image/x-icon">
      <!-- fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Cantarell&display=swap" rel="stylesheet"></head>
<body>
      <!-- Line -->
      <div class="line">
            <h3>ბიბლიოთეკა</h3>
            <h3 id="line-makert-dropdown-link">მარკეტი</h3>
      </div>
      <!-- headerphp -->
     <?php require_once '../view/header.php'?>

      <!-- Search Seaction -->
      <section class="search_section">
            <center>
                  <div class="search_section-headings">
                        <img src="../imgs/section/logo_hq.png" alt="" width="500">
                        <pre>
მოძებნეთ და შეიძინეთ სოფლის მეურნეობის პროდუქტები უშუალოდ მსოფლიოს მწარმოებლებისგან.
შუამავლების გარეშე - 100% საიმედო შესყიდვის გარანტია
                        </pre>
                  </div>
                  <div style="height:50px"></div>
                  <div class="search-section-input-holder">
                        <input type="text" name="search" placeholder="პროდუქტის ძებნა" id="search-field">
                        <select id="category" style="width: 10%;" name="Category" style="display:block">
                                    <option>კატეგორია</option>
                                    <option placeholder="Developer">ზეითუნის ზეთი</option>
                                    <option placeholder="Engineer">თაფლი</option>
                                    <option placeholder="Designer">ხილი</option>
                                    <option placeholder="Doctor">ბოსტნეული</option>
                        </select>
                        <button type="submit">ძებნა</button>
                  </div>
                        <button class="search_section-btn">როგორ მუშაობს</button><button class="search_section-btn1">დაუყონებლივ სახლში მიტანა</button>
            </center>
      </section>

      <section class="popular-categories">
      </section>

      <!-- SCRIPTS -->
      <script src='../js/home.js'></script>
</body>
</html>