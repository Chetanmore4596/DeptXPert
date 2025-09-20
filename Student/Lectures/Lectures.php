<!DOCTYPE html>
<?php session_start();?>
<?php 
    $Email = $_SESSION['Email'];
    if(!isset($Email))
    {
        header("Location:https://deptxpert.com/deptxpert/Student/Studentlogin.php");
    }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lectures+Book</title>
    <link rel="stylesheet" href="Lectures.css">
    <link rel = "icon" href = "DXP_New.png" type = "image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>
  <body>
    <div>
      <script>
      document.addEventListener("contextmenu", function (e){
        e.preventDefault();
      }, false);
      </script>
    <header>
      <nav class="navbar">
        <h2 class="logo"><a href="#">Lectures+Book</a></h2>
        <input type="checkbox" id="menu-toggler">
        <label for="menu-toggler" id="hamburger-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z"/>
          </svg>
        </label>
        <ul class="all-links">
          <li><a href="https://deptxpert.com/deptxpert/Student/Student.php">Home</a></li>
        </ul>
      </nav>
    </header>
    <section class="portfolio" id="portfolio">
      <h2>Progrmaming Lectures</h2>
      <p>Learning Progrmaming with Popular playlists</p>
      <ul class="cards">
        <li class="card">
          <img src="HTML.png" alt="img">
          <a href="https://www.youtube.com/embed/k7ELO356Npo?si=vu5BQlGaoOGtX0QS">
          <button type="submit" class="btn">Click Here</button></a>
        </li>
        <li class="card">
          <img src="css.png" alt="img">
          <a href="https://www.youtube.com/embed/ESnrn1kAD4E?si=CGEr8j53MVI5Bu65">
          <button type="submit" class="btn">Click Here</button></a>
        </li>
        <li class="card">
          <img src="JS.png" alt="img">
          <a href="https://www.youtube.com/embed/ER9SspLe4Hg?si=6KXS4Ksn_blDAF2T">
          <button type="submit" class="btn">Click Here</button></a>
        </li>
        <li class="card">
          <img src="Java.png" alt="img">
          <a href="https://www.youtube.com/embed/yRpLlJmRo2w?si=mK4SENiCyHSmnjkX">
          <button type="submit" class="btn">Click Here</button></a>
        </li>
        <li class="card">
          <img src="python.png" alt="img">
          <a href="https://www.youtube.com/embed/7wnove7K-ZQ?si=r3rep7hLGfQ85wCh">
          <button type="submit" class="btn">Click Here</button></a>
        </li>
        <li class="card">
          <img src="PHP.png" alt="img">
          <a href="https://www.youtube.com/embed/a_qREkJ78f4?si=wVpRKR56EYdn-IBt">
          <button type="submit" class="btn">Click Here</button></a>
        </li>
      </ul>
    </section>

    <section class="portfolio" id="portfolio">
      <h2>Books</h2>
      <p>Here are the some Progrmaming languages Books.</p>
      <ul class="cards">
        <li class="card">
          <img src="Html_Book.png" alt="img">
          <a href="HTML5.pdf">
          <button type="submit" class="btn">Click Here</button></a>
        </li>
        <li class="card">
          <img src="CSS_Book.png" alt="img">
          <a href="HTML5_CSS.pdf">
          <button type="submit" class="btn">Click Here</button></a>
        </li>
        <li class="card">
          <img src="JS_Book.png" alt="img">
          <a href="https://www.youtube.com/embed/ER9SspLe4Hg?si=6KXS4Ksn_blDAF2T">
          <button type="submit" class="btn">Click Here</button></a>
        </li>
        <li class="card">
          <img src="Java_Book.png" alt="img">
          <a href="https://www.youtube.com/embed/yRpLlJmRo2w?si=mK4SENiCyHSmnjkX">
          <button type="submit" class="btn">Click Here</button></a>
        </li>
        <li class="card">
          <img src="Python_Book.png" alt="img">
          <a href="https://www.youtube.com/embed/7wnove7K-ZQ?si=r3rep7hLGfQ85wCh">
          <button type="submit" class="btn">Click Here</button></a>
        </li>
        <li class="card">
          <img src="Php_Book.png" alt="img">
          <a href="https://www.youtube.com/embed/a_qREkJ78f4?si=wVpRKR56EYdn-IBt">
          <button type="submit" class="btn">Click Here</button></a>
        </li>
      </ul>
    </section>
  </div>
  </body>
</html>
