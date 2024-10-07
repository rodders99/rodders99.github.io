<?php include 'html-inc/header.php'; ?>

<title>Food Standards Agency - Web Scrape Front End</title>
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

                        <option value="master_list">The master list presentation</option>
                        <option value="web_scrape">Web Scrape New Data</option>
                        <option value="alert_notice">Scrape Alert Notice Details</option>
                        
                    </select>
                </div>
            </div>
        </div>


        <h1 id="">Food Standards Agency - Web Scrape Front End</h1>
        <img src="../icons/food-standards-agency-logo.jpg" style="width:50%">



<h3 >Web Scrape Front End</h3>
        <!-- <div class="datatable-container" id="html_table-source-meta-data"> -->

        <p>Maintenance of the data is carried out through the web scrape front end.</p>

        <h2 id="master_list">The master list</h2>
        <p>The master list contains the data we have, front page search results + edited product information</p>
        <a href="../icons/web-scrape-data-we-have.png"><img src = "../icons/web-scrape-data-we-have.png"></a>


        <h2 id="web_scrape">Web Scrape new Data</h2>
        <p>The master list is  updated by initiating a fresh scrape of the search results from the food.gov.uk web site. Any new alerts not already in the master
            list are added to the master list and identifed:</p>
            <a href="../icons/web-scrape-data-we-dont-have.png"><img src = "../icons/web-scrape-data-we-dont-have.png"></a>
        
        <h2 id="alert_notice">Scrape Alert Notice Detail</h2>
            <p>The user initiates a web scrape of the alert notice which populates as much of the data set as possible, leaving the remaining fields to be hand edited.</p>
            <a href="../icons/web-scrape-data-editing.png"><img src = "../icons/web-scrape-data-editing.png"></a>
            
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