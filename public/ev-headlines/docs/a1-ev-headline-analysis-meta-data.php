<?php include 'html-inc/header.php'; ?>

<script src="/scripts/ev-headlines.js"></script>


<title>Media Bias and Misinformation: Analysing Mainstream Media Headlines on Electric Vehicles</title>
<body class="colorscheme-light">
    <div class="float-container">
        <a id="dark-mode-toggle" class="colorscheme-toggle">
            <i class="fa-solid fa-adjust fa-fw" aria-hidden="true"></i>
        </a>
    </div>
    <div class="page-container">
  <div class="toolbar" style="width:100%; text-align:center; align-items:center">
                      
      <!-- JUMP TO MENU-->
      <!-- <span class="menu dropbtn" style="align-items:center;" onclick="openNav()"><i style="align-items:center" class="material-icons" style="font-size:24px; color: white">menu</i>&nbsp;Menu</span> -->
      <?php include 'menu-ev-headlines.php'; ?></div>
      
      <h1>Analysing Mainstream Media Headlines for Electric Vehicles</h1>
      <br>
      
      <div id="JumptoSection"><h2>Jump to section</h2>
      <div class="countries">
              <div id="JumptoSection" >
              <select onchange="javascript:scrollToAnchor(this.value, 100);">
                      
                      <option value="meta-data">Meta Data</option>

                      </select></div></div></div>


<h2>Meta Data</h2>

<p>The source data was scraped from the either the "Cars" section of the publication, if the publication had a section, or with the search terms "Electric Vehicle"</p>
<p>The original web scrape was executed every five minutes and captured headline changes that were made by some publication, no doubt to increase clicks.</p>
<p>The scraping operation produced 1.9 million observations from August to January. A further web scrape operation is currently under way to capture a full 12 month period of headlines.</p>
<p>See the report section on <a href="a2-ev-headline-analysis-feature-engineering.php">feature engineering</a> to gain an understanding of the data engineering that was carried out with this data set. </p>

<h2 id="meta-data">Source Meta Data</h2>
<!-- <div class="datatable-container" id="html_table-source-meta-data-feature-engineering"> -->

<table class="dataframe datatable" style="width:80%; margin: 0 auto;">
  <thead>

    <tr style="text-align: right;">
      <th></th>
      <th>Column</th>
      <th>Dtype</th>
      <th>Meta</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td>1</td>
      <td>Date</td>
      <td>datetime64[ns]</td>
      <td>Date / Time the scrape operation took place</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Publication</td>
      <td>object</td>
      <td>The web site / newspaper</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Headline</td>
      <td>object</td>
      <td>The Text of the headline</td>
    </tr>
    
  </tbody>
</table>
<!-- </div> -->
<?php include 'html-inc/footer.php'; ?>
<script src="/js/coder.min.6ae284be93d2d19dad1f02b0039508d9aab3180a12a06dcc71b0b0ef7825a317.js"></script> 

</div></body></html>