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
      
      <div id="JumptoSection"><h2>Jump to section</h2>
      <div class="countries">
              <div id="JumptoSection" >
              <select onchange="javascript:scrollToAnchor(this.value, 100);">
              <option value="#">Select to jump to section ....</option>

                      <option value="percent">Percentage of total alerts Vs RoW</option>
                      <option value="annual">Annual, Cumulative Alerts</option>
                      <option value="top3s">Top 3 Product and Risk Categories</option>
                      <option value="category">Product Category</option>
                      <option value="risk">Risk Category</option>
                      <option value="counterfeit">Counterfeit </option>
                      <option value="action_responsible">Action Required / Responsible Party</option>
                      <option value="submitting">Submitting Country</option>
                      <option value="top3">Top 3 Product Categories</option>
                      </select></div></div></div>

<h1>Media Bias and Misinformation: Analysing Mainstream Media Headlines on Electric Vehicles</h1> 

<p><img src="/projects/ev-headlines/img/damn-lies.png"></p>

<p class='last-updated'><?php include '../tables/last-updated.php' ?></p>

<h2>Data Overview</h2>

<p>Data sourced from web scraping headlines from the search results for Mainstream Media publications, 
    using the search term "Electric Car":</p>

<p>Every five minutes from 02-08-2023 to 28-01-2023, this generated <b>1,976,938 datapoints</b>, with the same 
    headlines appearing multiple times per day. </p>

<h2>Meta Data</h2>

<ul><li>Source fields are Title case</li>
<li>featured engineered fields are snake case.</li></ul>

<h2> Data set - <code>/processed/all-headlines-grabbed-cleansed.pkl</code></h2>
<div class="datatable-container" id="html_table-source-meta-data">
<table class="dataframe datatable" style="width:100%; margin: 0 auto;">
<tr>
<td>Idx</td>
<td>Column</td>
<td>Dtype</td>
<td>Source</td>
<td>Meta</td>
</tr>
<tr>
    <td>1</td>
    <td>Date</td>
    <td>datetime64[ns]</td>
    <td>Initial Data Capture</td>
    <td>The date the headline was scraped</td>
</tr>
<tr>
    <td>2</td>
    <td>Publication</td>
    <td>object</td>
    <td>Initial Data Capture</td>
    <td>The website / publication source of the head </td>
</tr>
<tr>
    <td>3</td>
    <td>Headline</td>
    <td>object</td>
    <td>Initial Data Capture</td>
    <td>The Headline text from search results</td>
</tr>
<tr>
    <td>4</td>
    <td>time</td>
    <td>object</td>
    <td>Initial Data Capture</td>
    <td>The time the headline was captured </td>
</tr>
<tr>
    <td>5</td>
    <td>month</td>
    <td>object</td>
    <td>Feature Engineered</td>
    <td>The Month Name </td>
</tr>
<tr>
    <td>6</td>
    <td>month_num</td>
    <td>int32</td>
    <td>Feature Engineered</td>
    <td>The month number</td>
</tr>
<tr>
    <td>7</td>
    <td>day_of_week</td>
    <td>object</td>
    <td>Feature Engineered</td>
    <td>The Day Name</td>
</tr>
<tr>
    <td>8</td>
    <td>day_num</td>
    <td>int32</td>
    <td>Feature Engineered</td>
    <td>The Day number 0 = Sunday</td>
</tr>
<tr>
    <td>9</td>
    <td>date_str</td>
    <td>object</td>
    <td>Feature Engineered</td>
    <td>The date as yyyy/mm/dd as a string</td>
</tr>
<tr>
    <td>10</td>
    <td>combi</td>
    <td>object</td>
    <td>Feature Engineered</td>
    <td>The Publication combined with headlines separated with a dash `-`</td>
</tr>
</table>
</div>

<h2>Engineered Datasets</h2>

<p>Datasets were created for analysis:</p>

<!-- all_daily_headlines_df -->

<h3>Dataset - <code>all_daily_headlines_df</code></h3> 
<p>The entire 1.9 million record dataset, filtered to one headline per day with <b>96,638 rows</b>.</p>

<!-- all_unique_headlines_df -->
<h3>Dataset - <code>all_unique_headlines_df</code></h3> 
<p>All headlines filtered unique for Publication and Headline, with the date it was first published with <b>19,553 rows</b> 

<!-- ev_daily_headlines_df -->

<h3>Dataset - <code>ev_daily_headlines</code></h3> 
<p> <code>all_daily_headlines</code> filtered to EV Topics, once per day (<code>time</code> field removed and grouped by 
<code>Title, Headline, Date</code>), limiting the scope to each headline to being listed once 
for each day, then filtered with the search terms <code>'electric', 'ev', 'evs', 'charger', 'charging','charge'</code>, 
results in 27,580 datapoints.</p>

<!-- ev_unique_headlines_df -->

<h3>Dataset - <code>ev_unique_headlines</code></h3> 
<p><code>all_unique_headlines</code> filtered to EV Topics</p>

<p>Scope limited to each headline being listed once, with the date it was first published, 
    then filtered with the search terms <code>'electric', 'ev', 'evs', 'charger', 'charging','charge'</code>, 
with<b>1,313 rows</b>.</p>

<!-- sentiment-analysis- -->

<h3>Dataset - <code>sentiment-manual-refined</code></h3> 
<p><code>sentiment-manual-refined</code> the <code>ev_unique_headlines</code> dataset was passed through ChatGPT and Textblob for 
sentiment analysis. </p>

<h3>Dataset - <code>sentiment-manual-refined Hand_Tuned_Sentiment</code></h3> 
<p>The results from Text_blob and ChatGPT were very poor.</p> 
<p>At the risk of introducing bias, the 1300 unique EV headlines were reviewed and scored by hand and stored under 
    <code>Hand_Tuned_Sentiment</code>
</p>

<p>Scope limited to each headline being listed once, with the date it was first published, 
    then filtered with the search terms <code>'electric', 'ev', 'evs', 'charger', 'charging','charge'</code>, 
with<b>1,313 rows</b>.</p>

<div class="datatable-container" id="html_table-source-meta-data">
<table class="dataframe datatable" style="width:100%; margin: 0 auto;">
<tr>
<td>Idx</td>
<td>Column</td>
<td>Dtype</td>
<td>Source</td>
</tr>
<tr>
    <td>1</td>
    <td>Date</td>
    <td>datetime64[ns]</td>
    <td>Initial Data Capture</td>
    <td>Meta</td>
</tr>
<tr>
    <td>2</td>
    <td>Publication</td>
    <td>object</td>
    <td>Initial Data Capture</td>
    <td>The website / publication source of the head </td>
</tr>
<tr>
    <td>3</td>
    <td>Headline</td>
    <td>object</td>
    <td>Initial Data Capture</td>
    <td>The Headline text from search results</td>
</tr>

<tr>
    <td>4</td>
    <td>month</td>
    <td>object</td>
    <td>Feature Engineered</td>
    <td>The Month Name </td>
</tr>
<tr>
    <td>5</td>
    <td>month_num</td>
    <td>int32</td>
    <td>Feature Engineered</td>
    <td>The month number</td>
</tr>
<tr>
    <td>6</td>
    <td>day_of_week</td>
    <td>object</td>
    <td>Feature Engineered</td>
    <td>The Day Name</td>
</tr>
<tr>
    <td>7</td>
    <td>day_num</td>
    <td>int32</td>
    <td>Feature Engineered</td>
    <td>The Day number 0 = Sunday</td>
</tr>
<tr>
    <td>8</td>
    <td>date_str</td>
    <td>object</td>
    <td>Feature Engineered</td>
    <td>The date as yyyy/mm/dd as a string</td>
</tr>
<tr>
    <td>9</td>
    <td>combi</td>
    <td>object</td>
    <td>Feature Engineered</td>
    <td>The Publication combined with headlines separated with a dash `-`</td>
</tr>
<tr>
    <td>10</td>
    <td>textblob_sentiment</td>
    <td>object</td>
    <td>Feature Engineered</td>
    <td>Sentiment Analysis by TextBlob</td>
</tr>
<tr>
    <td>11</td>
    <td>chatGPT_sentiment</td>
    <td>object</td>
    <td>Feature Engineered</td>
    <td>Sentiment Analysis by ChatGPT</td>
</tr>
<tr>
    <td>12</td>
    <td>hand_tuned_sentiment</td>
    <td>object</td>
    <td>Feature Engineered</td>
    <td>Sentiment Analysis by Manual Human Review</td>
</tr>
</table>
</div>

<h2>Feature Engineering</h2>

<p>Publications were captured in a sort form and expanded to the correct Publication title during Feature Engineering </p>
<p>e.g. <code>thetimes</code> was engineered to The <code>Times</code></p>
    
Datetime was expanded to :

<ul>
    <li>day_num</li>
    <li>day name</li>
    <li>month name</li>
    <li>month_num</li>
</ul>

<p>January month_num was amended to month_num 13 to preserve date order for the data capture which run fromAugust to January</p>

<h2>Duplicates</h2>

<p>There are 0 duplicates in this dataset for Publication, Headline and Date. However where a publication has edited
     a headline after first publishing it, this will show as a new headline. </p>

