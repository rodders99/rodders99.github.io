<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="" xml:lang="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="color-scheme" content="dark">

    <!-- <link rel="stylesheet" type="text/css" href="https://rodders.me/css/custom.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/custom-menu2.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="/css/project-style.css">


    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css"> -->
    <link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.7.0/styles/github-dark.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>

    <!-- and it's easy to individually load additional languages -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/python.min.js"></script>

    <script>hljs.highlightAll();</script>

    <title>Food Standards Agency - Alerts Analysis</title>
</head>

<body>
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

    <div class="datatable-container" id="html_table-source-meta-data">
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
</div>

<h4>Observations per year</h4>

<p>There is a lot of data missing, from mid 2017 to 2020.</p>

<div class="datatable-container" id="html_table-source-meta-data">
<table class="dataframe datatable" style="width:100%; margin: 0 auto;">
  <thead>
    <tr style="text-align: right;">
      <th></th>
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
      <th>count</th>
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
</table></div>
<a href="#" class="gototop">Top</a>

<h3>Original Source Data</h3>
        <div class="datatable-container" id="html_table-source-meta-data">
        <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
        
            <thead>
                <tr style="text-align: center;">
                    <th>Column</th>
                    <th>Non-Null</th>
                    <th>Count</th>
                    <th>Dtype</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><hr></td>
                    <td><hr></td>
                    <td><hr></td>
                    <td><hr></td>
                    <td><hr></td>
                </tr>
                <tr>
                    <td>Source</td>
                    <td>748</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>Where data was sourced, food.gov.uk or nationalarchives.gov.uk</td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>748</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>Date the notice was issued</td>
                </tr>
                <tr>
                    <td>Alert_Type</td>
                    <td>748</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>Allergen or Safety Alert</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>748</td>
                    <td>non-null
                    </td>
                    <td>object</td>
                    <td>Alert Title Text</td>
                </tr>
                <tr>
                    <td>BodyText</td>
                    <td>748</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>Alert Body text (usually has more information)</td>
                </tr>

                <tr>
                    <td>usage:</td>
                    <td>44.0+</td>
                    <td>KB</td>
                    <td>None</td>
                    <td></td>
                </tr>
            </tbody>
        </table></div>
        <a href="#" class="gototop">Top</a>
        <h2>Data Cleansing</h2>

<p>The layout of the nationalarchives and food.gov websites were different (food.gov has both food and allergy alerts on the 
    same page, national archive had different pages for each category ).</p>

<p>The web scraping processed produced three main raw unprocessed files :
    <ul class="list">
        <li>fsa_alerts_raw-food_gov : For Food Safety & Allergy Alerts</li>
        <li>fsa_allergy_alerts_raw-national-archive : For Allergy Alerts</li>
        <li>fsa_food_safety_alerts_raw-national-archive : For Food Safety Alerts</li>
    </ul>
    </p>

<p>These were combined into a single file : fsa_alerts_raw-combined.</p>

        <h3>Engineered Features</h3>




        <div class="datatable-container" id="html_table-source-meta-data">
        <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
            <thead>
                <tr style="text-align: right;">
                    <th>Column</th>
                    <th>
                        Non-Null</th>
                    <th>Count</th>
                    <th>Dtype</th>
                    <th>Engineered Feature Notes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><hr></td>
                    <td><hr></td>
                    <td><hr></td>
                    <td><hr></td>
                    <td><hr></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>751</td>
                    <td>non-null</td>
                    <td>datetime64[ns]</td>
                    <td>Datetime conversion</td>
                </tr>
                <tr>
                    <td>datetime</td>
                    <td>
                        751</td>
                    <td>non-null</td>
                    <td>datetime64[ns]</td>
                    <td>None</td>
                </tr>
                <tr>
                    <td>year</td>
                    <td>751</td>
                    <td>non-null</td>
                    <td>int64</td>
                    <td>Datetime conversion</td>
                </tr>
                <tr>
                    <td>month</td>
                    <td>751</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>Datetime conversion</td>
                </tr>
                <tr>
                    <td>Alert_Type</td>
                    <td>751</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>None</td>
                </tr>
                <tr>
                    <td>Product_category</td>
                    <td>751</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>Edited by hand</td>
                </tr>
                <tr>
                    <td>Product_Type</td>
                    <td>751</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>Edited by hand</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>751</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>None</td>
                </tr>
                <tr>
                    <td>BodyText</td>
                    <td>751</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>None</td>
                </tr>
                <tr>
                    <td>Supplier</td>
                    <td>751</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>Extract from Title or Body text</td>
                </tr>
                <tr>
                    <td>Product</td>
                    <td>751</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>Extract from Title or Body text</td>
                </tr>
                <tr>
                    <td>Risk</td>
                    <td>751</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>Extract from Title or Body text</td>
                </tr>
                <tr>
                    <td>Pathogen</td>
                    <td>191</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>Extract from Title or Body text</td>
                </tr>
                <tr>
                    <td>Allergen</td>
                    <td>269</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>Extract from Title or Body text</td>
                </tr>
                <tr>
                    <td>Foreign_Material</td>
                    <td>159</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>Extract from Title or Body text</td>
                </tr>
                <tr>
                    <td>Other</td>
                    <td>131</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>Extract from Title or Body text</td>
                </tr>
                <tr>
                    <td>month_num</td>
                    <td>751</td>
                    <td>non-null</td>
                    <td>int32</td>
                    <td>Datetime conversion</td>
                </tr>
                <tr>
                    <td>month_name</td>
                    <td>751</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>Datetime conversion</td>
                </tr>
                <tr>
                    <td>year_month</td>
                    <td>751</td>
                    <td>non-null</td>
                    <td>object</td>
                    <td>Datetime conversion</td>
                </tr>
                <tr>
                    <td>datetime64[ns](2),</td>
                    <td>int32(1),</td>
                    <td>int64(1),</td>
                    <td>object(15)</td>
                    <td></td>
                </tr>
                <tr>
                    <td>usage:</td>
                    <td>108.7+</td>
                    <td>KB</td>
                    <td>None</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        </div>
        <a href="#" class="gototop">Top</a>
        <h3 id="manually-applying-consistency">Manually applying consistency</h3>
        <p>The initial results of the web scrape were combined into a single excel file and reviewed by hand.</p>
        <p>The EDA and feature engineering revealed that the use of the words <code>recall</code> and <code>because</code> could be used as delimiters :</p>
        <p>“Boots <code>recalls / recall / is recalling</code> product XXXX <code>because</code> of reason YYYY”</p>
        <p>could be used to split the titles into separate fields :</p>
        <ul>
            <li>Supplier : Everything before the <code>recalls/recall/is recalling</code></li>
            <li>Risk : Everything after <code>because</code></li>
        </ul>
        <p>Where this format was not available, the title was edited to ensure consistency.</p>

        <h2>Breakout Pathogens, Allergens, Foreign Material and Other Reasons</h2>

        <p>Each entry was reviewed and additional fields added to the dataset :</p>
<ul class="list">
    <li>Pathogen</li>
    <li>Allergen</li>
    <li>Foreign_Material</li>
    <li>Other</li>
    </ul>
<p>The Title and Body Text was reviewed to extract the required information.</p>
<h3>Duplicate Entries</h3>

<p>Reviewing this file it was noted that many entries in the nation archives dataset were duplicated under both Food Alerts and Allergy 
    Alerts. So this had to be cleaned by hand with the duplicate entry with the incorrect category being removed.</p>

<p>This was hand edited to ensure consistency required for data cleansing.</p>
<p>Specifically:</p>
<ul class="list">
    <li>Incorrect posts were removed, examples include request for tender and request for comment</li>
    <li>Update posts were removed.</li>
    <li>incorrect alert type classifications were corrected (Food Alert / Allergy Alert)</li>
    <li>Duplicates were removed</li>
    </ul>
<p>191 Duplicate Entries were removed, all of which were incorrectly categorised under Food Alert / Allergy Alert where the 
    Allergy Alert categorisation was incorrect.</p>
<h3>Product Breakout</h3>

<p>Where there were multiple products in the Title or Body Text of the search results these were broken out into separate entries. 
    In many instances, the actual full list of products was not available in the search results, requiring a click to get the full detail. 
    However, it should be noted that product names in titles were not applied consistently by the agency when the data was first entered 
    into the web site database. Additional product details were noted if the search result was clicked to get more details, 
    but the presentation of the data was not consistent, making subsequent scraping of the data impossible. Where product details were present in search 
    detail, some were in html tables with no tagging, some were within paragraphs tags, some with <code>&lt;BR&gt;</code>.</p>

<p>Therefore extracting the full product detail from each page would be a significant endeavour.</p>

<?php include 'footer.php'; ?>

    </div>
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