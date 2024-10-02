<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="" xml:lang="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="color-scheme" content="dark">

    <!-- <link rel="stylesheet" type="text/css" href="https://rodders.me/css/custom.css"> -->
    <link rel="stylesheet" type="text/css" href="https://rodders.me/css/custom-menu2.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://rodders.me/css/project-style.css">


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


        <h1 id="">Food Standards Agency - Alerts Meta Data</h1>
        <img src="/img/food-standards-agency-logo.jpg" style="width:50%">

        <h3 id="Source data from Web Scraping">Source data from Web Scraping</h3>

        <h4>Data Observations</h4>

<p>There are four main fields in the food.gov.uk search results :
<ul class="list">
    <li>Date</li>
    <li>Type (Food Alert / Allergy Alert)</li>
    <li>Title</li>
    <li>Description</li>
</ul>
    </p>
<p>Each entry could be a single product or multiple products, it is not always obvious from the description which is which.</p>

<p>Clicking into a result presents an opportunity to scrape more product information, however there is no consistent format in how 
    products are presented, some had product content in paragraphs with <br> breaks, some has product content in html tables. 
    This means alerts with multiple products will have to edited by hand.</p>

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

        <h3>Engineered Features</h3>

        <p>Following on from Exploratory Data Analysis, Data Cleansing and Feature Engineering the data structure has been supplemented with 
            additional fields for analysis.</p>

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

        <h2 id="further-content">Further Content</h2>
        <p><a href="./00-fsa-analysis-introduction.php">FSA - Analysis Introduction</a></p>
        <p><a href="./01-fsa-summary.php">FSA - Analysis Summary</a></p>
        <p><a href="./02-fsa-pathogens.php">FSA - Pathological Contaminants Analysis</a></p>
        <p><a href="./03-fsa-allergens.php">FSA - Allergen Contaminants Analysis</a></p>
        <p><a href="./04-fsa-foreign-material-other">FSA - Foreign Material and Other Contaminants Analysis</a></p>
        <p><a href="./05-fsa-product-type.php">FSA - Product Type</a></p>
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