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


        <h1 id="">Food Standards Agency - Alert Monitoring, Management, analysis, Visualisations & Infographic.</h1>
        <img src="../icons/food-standards-agency-logo.jpg" style="width:50%">



<h3 >Web Scrape Front End</h3>
        <!-- <div class="datatable-container" id="html_table-source-meta-data"> -->

        <p>Maintenance of the data is carried out through the web scrape front end.</p>

        <p>The Web Scrape front end is an app developed in Python that handles the scraping, cleansing and feature engineering of the incoming data from the fsa.gov.uk web site.</p>
        <p>While the identification of new alerts and push button scraping is fully automated, a human needs to review and edit the incoming data. The manual intervention 
            improves the quality of the dataset considerably, adding additional features to the dataset not currently maintained by the FSA.</p>
            
            <p>For example : </p>
            <h3>Tesco are recalling Tesco Finest 6 All Butter Pastry Mince Pies because 
                they may contain pieces of dried glue from packaging which makes them unsafe to eat.</h3>

            <p>Additional features that can be deduced or inferred from this information:</p>
            <li>Brand : in this example would be Tesco</li>
            <li>Supplier : is unknown</li>
            <li>Supplier Type : is unknown. Obviously someone makes these for Tesco, but who exactly is not noted in this instance.</li>
            <li>Outlet : Tesco - The outlet the consumer would buy from.</li>
            <li>Outlet Type : Grocer</li>
            <li>Product Category : Bread or Baked Goods</li>
            <li>Product Type : Bread or Baked Goods</li>
            <li>Other Contaminant : Bits of Glue</li>

            <p>Another example from a recent alert:</p>
            <h3>FGS Ingredients Ltd is recalling a number of products containing mustard powder because they may contain peanuts. This means these products 
                are a possible health risk for anyone with an allergy to peanuts. These products are sold under several different brand names at several 
                different retail stores.</h3>

            <p>As part of the scrape process, additional product details are included :</p>
            <h3>** Frozen Iceland Takeaway Chinese Style Chicken Curry - 375g</h3>

            <li>Brand : Iceland</li>
            <li>Supplier : FGS Ingredients</li>
            <li>Supplier Type : Manufacturer.</li>
            <li>Outlet : Iceland</li>
            <li>Outlet Type : Grocer</li>
            <li>Product Category : Ready Meal / Ready to Eat</li>
            <li>Product Type : Ready Meal / Ready to Eat</li>
            <li>Allergen Contaminant: nuts</li>

            
            <p>This is simplified through the Web Scrape front end.</p>
        <p>Once the data has been collated and added to the FSA Safety Alert data set, analysis and the subsequent production of the 
            visualisations and infographic along with publishing to the dev and public server are automatic.</p>

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
            
            
            <h2 id="search">Search FSA Data</h2>
            Searching the FSA data also produces a time series plot showing each month and year a notice was issued for the search term.
            <a href="../icons/web-scrape-search.png"><img src = "../icons/web-scrape-search.png"></a>


            <h1 id="visualisations">Visualisations</h1>
            
            <p>A suite of visualisations have been developed that automatically update whenever new data is added to the FSA Safety Alert dataset.</p>
            
            <h1 id="Infographic">Infographic</h1>
            The infographic is automatically maintained and published whenever the dataset is updated. The main SVG file is automatically amended with new values
            using the lxml python library, converted to PNG format using the cairosvg library then published to the local dev and public server. This does require 
            a human to review changes whenever there are significant new alerts.

            <p><img src="../icons/INFOGRAPHIC.png" style="width:100%"></p>

            
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