<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stock Pulse | Home</title>
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-oIYT35X1eHTaFsxHAcC2/Oa5O+U+31CfTiE8/dRlGg7rjGmzimIwt94g3PWwV6cQU3oVk5T0mKGRK3kzw0zxcw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/b38ffb082e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/themes/df-messenger-default.css">
</head>

<body>
  <!-- <div class="preloader">
    <div></div>
    <div>Loading Content!</div>
  </div> -->

  <nav>
    <div class="container0">
      <a href="/" class="logo">
        <i class="fa-solid fa-chart-line"></i>
        <h1>Stock<span>Pulse</span></h1>
      </a>
      <div class="flex-options">
        <a href="#" class="current">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
        <a href="/register">Register</a>
      </div>
    </div>
  </nav>
  

  <header class="showcase">
    <div class="container">
      <div class="text-content">
        <h1>Latest Stock News and Analysis</h1>
        <p>
          Get the latest updates on stocks, market trends, and analysis to make informed investment decisions.
        </p>
        <div id="search-area">
          <input type="text" id="stock-input" placeholder="Enter Stock Name" aria-label="Stock Name">
          <button onclick="searchStock()">Search</button>
        </div>
      </div>
    </div>
  </header>

  <section id="news-articles">
    <!-- News articles will be displayed here -->
  </section>


  <section class="categories2 top-gainers">
    <div class="container2">
      <h1 class="editor-h1">Trending News</h1>
      <div id="trending-stocks" class="collections-container gainers-container"> 
      </div>
    </div>
  </section>
  

  <section class="categories2 Collections">
    <div class="container2">
      <h1 class="editor-h1">Collections</h1>
      <div class="collections-container">
        <div class="category">
          <h2>Top Tech</h2>
          <p>Explore the top technology companies.</p>
        </div>
        <div class="category">
          <h2>Top Brands</h2>
          <p>Discover the leading brands in the market.</p>
        </div>
        <div class="category">
          <h2>By Market Cap</h2>
          <p>View companies categorized by their market capitalization.</p>
        </div>
        <div class="category">
          <h2>High Growth</h2>
          <p>Discover companies with high growth potential.</p>
        </div>
      </div>
    </div>
  </section>
  

  <footer>
    <div class="footer-container">
      <div class="footer">
        <article>
          <div class="logo">
            <i class="fas fa-chart-line fa-2x"></i>
            <h2>Stock<span>Pulse</span></h2>
          </div>
          <p>
            Stay updated with the latest news and analysis on stocks and financial markets.
          </p>
        </article>
  
        <article>
          <h4>NEWSLETTER</h4>
          <p>Subscribe to our newsletter to receive updates on the latest trends and investment opportunities.</p>
          <form class="newsletter-form">
            <input type="email" placeholder="Enter Email..." required>
            <button type="submit">Subscribe</button>
          </form>
        </article>
  
        <article>
          <h4>USEFUL LINKS</h4>
          <ul>
            <li><a href="#">Help & Support</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </article>
      </div>
  
      <div class="copyright">
        <p>Copyright &copy; 2024, Stock Pulse. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
  

  <script src="./js/script.js"></script>
  
</body>

</html>
