<?php include 'html-inc/header.php'; ?>

<title>Food Standards Agency - Feature Engineering</title>
<body class="colorscheme-light">
<div class="float-container">
    <a id="dark-mode-toggle" class="colorscheme-toggle">
        <i class="fa-solid fa-adjust fa-fw" aria-hidden="true"></i>
    </a></div>
    <div class="page-container">
        <div class="toolbar" style="width:100%; text-align:center; align-items:center">

            <!-- JUMP TO MENU-->
            <!-- <span class="menu dropbtn" style="align-items:center;" onclick="openNav()"><i style="align-items:center" class="material-icons" style="font-size:24px; color: white">menu</i>&nbsp;Menu</span> -->
            <?php include 'menu-fsa-alerts.php'; ?>
        </div>

        <div id="JumptoSection">
            <h2>Jump to section</h2>
            <div class="countries">
                <div id="JumptoSection">
                    <select onchange="window.location.hash=this.value" class="country">

                        <option value="percent">Percentage of total alerts Vs RoW</option>
                        <option value="annual">Annual, Cumulative Alerts</option>
                        <option value="top3s">Top 3 Product and Risk Categories</option>
                        <option value="category">Product Category</option>
                        <option value="risk">Risk Category</option>
                        <option value="counterfeit">Counterfeit </option>
                        <option value="action_responsible">Action Required / Responsible Party</option>
                        <option value="submitting">Submitting Country</option>
                        <option value="top3">Top 3 Product Categories</option>
                    </select>
                </div>
            </div>
        </div>


        <h1 id="">Food Standards Agency - Source Meta Data</h1>
        <img src="../icons/food-standards-agency-logo.jpg" style="width:50%">

        <h2 id="Source data from Web Scraping">Source data from Web Scraping</h2>

        <h2>Data Observations</h2>

<p>There are four main fields in the data obtained from web scraping :
<ul class="list">
    <li>Date</li>
    <li>Type (Food Alert / Allergy Alert)</li>
    <li>Title</li>
    <li>Description</li>
</ul>
    </p>
<p>Each row of data could be a single product or multiple products, it is not always obvious from the title or results body text which is which.</p>

<p>Clicking into a result presents an opportunity to scrape more product information, however there is no consistent format in how 
    products are presented, some had product content in paragraphs with <code>&lt;br&gt;</code> breaks, some has product content in html tables. 
    This means alerts with multiple products will have to edited by hand.</p>

    <h4>Missing Data</h4>

    <!-- <div class="datatable-container" id="html_table-source-meta-data"> -->
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
<thead>
<tr>
<th style="text-align:left">Dataset</th>
<th style="text-align:center">nationalarchives.gov.uk <br> Start Date</th>
<th style="text-align:center">nationalarchives.gov.uk <br> End Date</th>
<th style="text-align:center; background-color: #ff0000" >Missing Data <br> From</th>
<th style="text-align:center; background-color: #ff0000">Missing Data <br> To</th>
<th style="text-align:center">food.gov.uk <br> Start Date</th>
</tr>
</thead>
<tbody>
<tr>
<td style="text-align:left">Food Alerts</td>
<td style="text-align:center">02-10-2014</td>
<td style="text-align:center">05-12-2017</td>
<td style="text-align:center; background-color: #ff0000">06-12-2017</td>
<td style="text-align:center; background-color: #ff0000">17-02-2021</td>
<td style="text-align:center">18-02-2021</td>
</tr>
<tr>
<td style="text-align:left">Allergy Alerts</td>
<td style="text-align:center">14-10-2014</td>
<td style="text-align:center">06-12-2017</td>
<td style="text-align:center; background-color: #ff0000">03-07-2019</td>
<td style="text-align:center; background-color: #ff0000">04-07-2019</td>
<td style="text-align:center">05-07-2019</td>
</tr>
</tbody>
</table>
<!-- </div> -->
<br><a href="#" class="gototop">Top</a>

<h4>Observations per year</h4>

<p>There is a lot of data missing, from mid 2017 to 2020.</p>

<!-- <div class="datatable-container" id="html_table-source-meta-data"> -->
<table class="dataframe datatable" style="width:100%; margin: 0 auto;">
  <thead>
    <tr style="text-align: right;">
      <th>Year</th>
      <th style="text-align:center; ">2014</th>
      <th style="text-align:center; ">2015</th>
      <th style="text-align:center; ">2016</th>
      <th style="text-align:center; background-color: #ff0000">2017</th>
      <th style="text-align:center; background-color: #ff0000">2018</th>
      <th style="text-align:center; background-color: #ff0000">2019</th>
      <th style="text-align:center; background-color: #ff0000">2020</th>
      <th style="text-align:center; ">2021</th>
      <th style="text-align:center; ">2022</th>
      <th style="text-align:center; ">2023</th>
      <th style="text-align:center; ">2024</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>count</td>
      <td style="text-align:center; ">12</td>
      <td style="text-align:center; ">67</td>
      <td style="text-align:center; ">97</td>
      <td style="text-align:center; background-color: #ff0000">54</td>
      <td style="text-align:center; background-color: #ff0000">0</td>
      <td style="text-align:center; background-color: #ff0000">1</td>
      
      <td style="text-align:center; background-color: #ff0000">0</td>
      <td style="text-align:center; ">154</td>
      <td style="text-align:center; ">176</td>
      <td style="text-align:center; ">164</td>
      <td style="text-align:center; ">98</td>
    </tr>
  </tbody>
</table>
<!-- </div> -->
<br><a href="#" class="gototop">Top</a>

<h3>Web Scrape Front End</h3>
        <!-- <div class="datatable-container" id="html_table-source-meta-data"> -->

        <p>Maintenance of the data is carried out through the web scrape front end.</p>

        <h2>The master list</h2>
        <p>The master list contains the data we have, front page search results + edited product information</p>
        <img src = "../icons/web-scrape-data-we-have.png">
        <h2>Web Scrape new Data</h2>
        <p>The master list is  updated by initiating a fresh scrape of the search results from the food.gov.uk web site. Any new alerts not already in the master
            list are added to the master list and identifed:</p>
            <img src = "../icons/web-scrape-data-we-dont-have.png">
            <h3>Scrape Alert Notice Detail</h3>
            <p>The user initiates a web scrape of the alert notice which populates as much of the data set as possible, leaving the remaining fields to be hand edited.</p>
            <img src = "../icons/web-scrape-data-editing.png">
            
<?php include 'html-inc/footer.php'; ?>

    </div>
    <script src="/js/coder.min.6ae284be93d2d19dad1f02b0039508d9aab3180a12a06dcc71b0b0ef7825a317.js"></script>

</body>
</html>
<script>
    function scrollToAnchor(hash, padding) {
  const anchor = document.getElementById(hash);
  if (anchor) {
    window.location.hash = hash;
    anchor.scrollIntoView({ behavior: 'smooth', block: 'center', duration: 800 });
    // Add the padding to the top of the page
    window.scrollTo({
      top: anchor.offsetTop - padding,
      behavior: 'smooth'
    });
  }
}
</script>