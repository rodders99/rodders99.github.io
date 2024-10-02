<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta name="color-scheme" content="dark">

<!-- <link rel="stylesheet" type="text/css" href="/css/custom.css"> -->
<link rel="stylesheet" type="text/css" href="/css/custom-menu2.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="/css/project-style.css">


<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css"> -->
<link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.7.0/styles/github-dark.min.css"
/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>

<!-- and it's easy to individually load additional languages -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/python.min.js"></script>

<script>hljs.highlightAll();</script>
<script src="/scripts/ev-headlines.js"></script>


<title>Media Bias and Misinformation: Analysing Mainstream Media Headlines on Electric Vehicles</title>
</head>
<body>
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
<div class="datatable-container" id="html_table-source-meta-data-feature-engineering">

<table class="dataframe datatable" style="width:80%; margin: 0 auto;">
  <thead>
    <tr>
        <td colspan=3>
            <p>&lt;class 'pandas.core.frame.DataFrame'&gt;<br>
                RangeIndex: 1,976,938 entries, 0 to 1976937<br>
                Data columns (total 10 columns):</p>
        </td>
    </tr>
    <tr style="text-align: right;">
      <th></th>
      <th>Column</th>
      <th>Dtype</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>------</td>
      <td>-----</td>
    </tr>
    <tr>
      <th>1</th>
      <td>Date</td>
      <td>datetime64[ns]</td>
      <td>Date / Time the scrape operation took place</td>
    </tr>
    <tr>
      <th>2</th>
      <td>Publication</td>
      <td>object</td>
      <td>The web site / newspaper</td>
    </tr>
    <tr>
      <th>3</th>
      <td>Headline</td>
      <td>object</td>
      <td>The Text of the headline</td>
    </tr>
    
  </tbody>
</table>
</div>
<?php include 'footer.php'; ?>

</div></body></html>