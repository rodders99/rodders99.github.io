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
    <link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.7.0/styles/github-dark.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>

    <!-- and it's easy to individually load additional languages -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/python.min.js"></script>

    <script>hljs.highlightAll();</script>

    <script src="/scripts/ev-headlines.js"></script>

    </script>

    <title>Media Bias and Misinformation: Analysing Mainstream Media Headlines on Electric Vehicles</title>
</head>

<body>
    <div class="page-container">
        <div class="toolbar" style="width:100%; text-align:center; align-items:center">

            <!-- JUMP TO MENU-->
            <!-- <span class="menu dropbtn" style="align-items:center;" onclick="openNav()"><i style="align-items:center" class="material-icons" style="font-size:24px; color: white">menu</i>&nbsp;Menu</span> -->
            <?php include 'menu-ev-headlines.php'; ?>
        </div>

        <div id="JumptoSection">
            <h2>Jump to section</h2>
            <div class="countries">
                <div id="JumptoSection">
                    <select onchange="javascript:scrollToAnchor(this.value, 100);">

                        <option value="data-prep">Data Preparation and Filtering</option>
                        <option value="source-meta">Source Meta Data</option>
                        <option value="duplicates">Duplicates</option>
                        <option value="nan-values">NaN Values</option>
                        <option value="feature-engineering">Feature Engineering</option>
                        <option value="additional-engineering">Additional Engineering</option>
                        <option value="filtered-datasets">Filtered Datasets </option>
                        <option value="sentiment-dataset">Sentiment Analysis Dataset</option>
                        <option value="example-sentiment-analysis">Example of automated Sentiment Analysis</option>

                    </select>
                </div>
            </div>
        </div>

        <h1>Analysing Mainstream Media Headlines for Electric Vehicles</h1>



        <h2 id="data-prep">Data Preparation and Filtering</h2>

        <p>The initial dataset consisted of 1.9 million records. This was filtered to produce distinct
            datasets that enabled the analysis and visualization of electric vehicle (EV) related news headlines.</p>

        <p>Firstly, a dataset was created that filtered to the date a Headline first appeared. This dataset was
            used to analyze the volume and distribution of EV-related headlines, as well as compare them with general
            news headlines (non-EV related).</p>

        <p>The second dataset was filtered to capture a unique headline each day, enabling tracking of how long a
            particular headline remained in search results over time. This analysis helped to shed light on the
            longevity of EV-related headlines and their persistence in the public discourse.</p>

        <p>To further refine the datasets, EV-related headlines were separated from non-EV related headlines, enabling
            more targeted analysis and comparison between general news and EV-specific news. These filtered datasets
            allowed exploration of the frequency, duration, and distribution of EV-related headlines, providing valuable
            insights into the media's coverage of Electric Vehicles.</p>

        <p>These filtered datasets, enabled in-depth analysis
            and visualization of EV-related news headlines, ultimately informing understanding of the media's role
            in shaping public perceptions of electric vehicles.</p>


<h2 id="source-meta">Source Meta Data</h2>

The Web scrape operation stored results as a CSV, with each row as an observation.
<div class="datatable-container" id="html_table-source-meta-data-feature-engineering">

<table class="dataframe datatable" style="width:80%; margin: 0 auto;">
  <thead>
    <th>
        <td colspan=3>
            <p>&lt;class 'pandas.core.frame.DataFrame'&gt;<br>
                RangeIndex: 1,976,938 entries, 0 to 1,976,937<br>
                Data columns (total 10 columns):</p>
        </td>
    </th>
    <tr style="text-align: right;">
      <th></th>
      <th>Column</th>
      <th>Dtype</th>
      <th>Meta</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <tr>
        <td><hr></td>
        <td><hr></td>
        <td><hr></td>
        <td><hr></td>
    </tr>
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
<br><a href="#" class="gototop">Top</a>
<h3 id="duplicates">Duplicates</h3>

    <p>There were 19,553 duplicates in this dataset for Publication, Headline and Date. Where a publication has
       edited a headline after first publishing it, this will show as a new headline, with a new date/time. </p>

<h3 id="nan-fields">NaN Values</h3>

    <p>There were were no NaN values, every observation's fields were populated. </p>

<h2 id="feature-engineering">Feature Engineering</h2>
<p>Additional fields were engineered from the source data and added to the dataframe. Source fields are title case, 
    engineered fields are snake case.</p>


<div class="datatable-container" id="html_table-source-meta-data-feature-engineering">

<table class="dataframe datatable" style="width:80%; margin: 0 auto;">
  <thead>
    <th>
        <td colspan=3>
            <p>&lt;class 'pandas.core.frame.DataFrame'&gt;<br>
                RangeIndex: 1,976,938 entries, 0 to 1,976,937<br>
                Data columns (total 11 columns):</p>
        </td>
    </th>
    <tr style="text-align: right;">
      <th></th>
      <th>Column</th>
      <th>Dtype</th>
      <th>Meta</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <tr>
        <td><hr></td>
        <td><hr></td>
        <td><hr></td>
        <td><hr></td>
    </tr>
    </tr>
    <tr>
      <th>1</th>
      <th>Date</th>
      <th>datetime64[ns]</th>
      <th>Date / Time the scrape operation took place</th>
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
<tr>
      <th>4</th>
      <td>time</td>
      <td>object</td>
      <td>Engineered field from Date field</td>
    </tr>
    <tr>
      <th>5</th>
      <td>month</td>
      <td>object</td>
      <td>Engineered field from Date field</td>
    </tr>
    <tr>
      <th>6</th>
      <td>month_num</td>
      <td>int32</td>
      <td>Engineered field from Date field</td>
    </tr>
    <tr>
      <th>7</th>
      <td>day_of_week</td>
      <td>object</td>
      <td>Engineered field from Date field</td>
    </tr>
    <tr>
      <th>8</th>
      <td>day_num</td>
      <td>int32</td>
      <td>Engineered field from Date field</td>
    </tr>
    <tr>
      <th>9</th>
      <td>date_str</td>
      <td>object</td>
      <td>Engineered field from Date field</td>
    </tr>
    <tr>
      <th>10</th>
      <td>combi</td>
      <td>object</td>
      <td>Combined publication field and title field</td>
    </tr>
    <tr>
      <th>11</th>
      <td>datetime64[ns](1),</td>
      <td>int32(2),</td>
      <td>Engineered field from Data field</td>
    </tr>
    <tr>
      <th>12</th>
      <td>usage:</td>
      <td>135.7+ MB</td>
    </tr>
  </tbody>
</table>
</div>
<br><a href="#" class="gototop">Top</a>
<h3 id="additional-engineering">Additional engineering</h3>
<p>The publication field was a short form field added during the web scrape operation. This was expanded to the full Publication/Web Site title.</p>
<div class="datatable-container" id="html_table-source-meta-data-feature-engineering">

<table class="dataframe datatable" style="width:80%; margin: 0 auto;">
<thead>
    <tr>
        <th>Short Code</th>
        <th>Full Publication Title</th>
    </tr>
    <tr>
        <td><hr></td>
        <td><hr></td>
        
    </tr>
</thead>
<tbody>
<tr>
<td>"dailymail" </td>
<td>"The Daily Mail"</td>
</tr>
<tr>
<td>"independent"</td>
<td>"The Independent"</td>
</tr>
<tr>
<td>"spectator"</td>
<td>"The Spectator"</td>
</tr>
<tr>
<td>"telegraph"</td>
<td>"The Telegraph"</td>
</tr>
<tr>
<td>"dailystar"</td>
<td>"The Daily Star"</td>
</tr>
<tr>
<td>"bbc"</td>
<td>"BBC"</td>
</tr>
<tr>
<td>"thesun"</td>
<td>"The Sun"</td>
</tr>
<tr>
<td>"economist"</td>
<td>"The Economist"</td>
</tr>
<tr>
<td>"thetimes"</td>
<td>"The Times"</td>
</tr>
<tr>
<td>"express"</td>
<td>"Express"</td>
</tr>
</tbody>
</table></div>
<br><a href="#" class="gototop">Top</a>
<h2 id="filtered-datasets">Filtered Data Sets</h2>

<p>Additional datasets were created and filtered to create datasets for further analysis.</p>

<div class="datatable-container" id="html_table-source-meta-data-feature-engineering">

<table class="dataframe datatable" style="width:100%; margin: 0 auto;">    
    <thead>
    <tr>
        <th style="width:20%">Dataset</th>
        <th>Contents</th>
        <th style="width:10%; text-align:right"># Rows</th>
    </tr>
    <tr>
        <td><hr></td>
        <td><hr></td>
        <td><hr></td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><code>all_headlines</code></td>
        <td>original source data after cleansing</td>
        <td style="text-align:right">1,827,596</td>
    </tr>
    <tr>
        <td><code>all_ev_headlines</code></td>
        <td><code>all_headlines</code><br>filtered to ev terms : 'electric', 'ev', 'evs', 'charger', 'charging', 'charge'. Further refined to 
        remove non-relevant headlines e.g. "Parking Charge", "Leads the Charge..." etc.</td>
        <td style="text-align:right">621,446</td>
    </tr>
    <tr>
        <td><code>all_daily_headlines</code></td>
        <td><code>all_headlines</code><br> filtered to the Date of the headline. A daily list of headlines.</td>
        <td style="text-align:right">96,639</td>
    </tr>
    <tr>
        <td><code>ev_daily_headlines</code></td>
        <td><code>all_daily_headlines</code><br> filtered to ev terms : 'electric', 'ev', 'evs', 'charger', 'charging', 'charge'. Further refined to 
        remove non-relevant headlines e.g. "Parking Charge", "Leads the Charge..." etc.</td>
        <td style="text-align:right">27,581</td>
    </tr>

    <tr>
        <td><code>all_unique_headlines</code></td>
        <td><code>all_headlines</code><br> filtered to unique Publication and Headline, creating a unique list by publication of 
        the headlines that were published </td>
        <td style="text-align:right">19,554</td>
    </tr>
    <tr>
        <td><code>ev_unique_headlines</code></td>
        <td><code>all_ev_headlines</code><br> filtered to unique Publication and Headline, creating a unique list by publication of 
        the EV headlines that were published.</td>
        <td style="text-align:right">1,316</td>
    </tr>
    <tr>
        <td><code>sentiment-manual-refined</code></td>
        <td><code>ev_unique_headlines</code><br> with the sentiment analysis from Textblob, Llama 3.1b LLM and the Hand Tuned Sentiment .</td>
        <td style="text-align:right">1,316</td>
    </tr>
    </tbody> 
</table>
</div>
<br><a href="#" class="gototop">Top</a>

<h2 id="sentiment-dataset">Sentiment Analysis Data Set</h2>

<p>The Sentiment Analysis dataset used the <code>ev_unique_headlines</code> as the basis from which analysis was carried out. 
<code>ev_unique_headlines</code> a filtered dataset of all the unique EV Headlines.</p>
<p>Additional fields were added for each sentiment analysis method: Llama 3.1b LLM, TextBlob and Hand-Tuned.</p>

<p>Because of the wildly varying results from Llama 3.1b LLM and Textblob, only the Hand-Tuned sentiment analysis was used for the 
    analysis and visualisations you see in this report. While this 
    has potential for personal bias, dates and Publication titles were hidden during the review process to attempt to minimise any bias.</p>
    <p>Sentiments were classified in one of three ways</p>



<div class="datatable-container" id="html_table-source-meta-data-feature-engineering">
<table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
  <tr><td style="background-color: blue; width: 20%; text-align: center"><b>Positive</b></td>
  <td style="background-color: blue; vertical-align: middle"><p><br>The headline was viewed as positive towards Electric Vehicles.</p><br></td>
</tr>
<tr><td style="background-color: grey; text-align: center"><b>Neutral</td>
  <td style="background-color: grey"><p><br>The headlines was viewed as neutral, generally reporting verifiable facts.</p><br></td>
</tr>
<tr><td style="background-color: red; text-align: center"><b>Negative</b></td>
  <td style="background-color: red">The headline was viewed as negative, typically these were unsubstantiated facts, common misinformation, directly 
          criticize or denigrate electric vehicles and either negative Subject Matter Expert Opinions
            or negative Personal Experiences in the headline. Generally speaking if the headline promotes FUD (Fear, Uncertainty, Doubt) about 
            Electric Vehicles, then it is classified as negative</td>
</tr>

</table></div>


<h3 id="example-sentiment-analysis">Examples of the Sentiment Analysis results</h3>



<div class="datatable-container" id="html_table-source-meta-data-feature-engineering">
<table class="dataframe datatable" style="width:100%; margin: 0 auto;">
<thead>
<tr>
<th style="text-align:left; width:15%">Title</th>
<th style="text-align:left">Headline</th>
<th style="text-align:center; width:10%">Date</th>
<th style="text-align:center; width:10%">Hand Tuned<br>Sentiment</th>
<th style="text-align:center; width:10%">Textblob<br>Sentiment</th>
<th style="text-align:center; width:10%">Llama 3.1b LLM<br>
</thead>
<tbody>
<tr>
<td style="text-align:left">The Sun</td>
<td style="text-align:left">EV explodes as firefighters used 6,000 litres of water to extinguish fire</td>
<td style="text-align:center">14-09-2023</td>
<td style="text-align:center">Negative</td>
<td style="text-align:center">Neutral</td>
<td style="text-align:center">Neutral</td>
</tr>
<tr>
<td style="text-align:left">The Telegraph</td>
<td style="text-align:left">Burning electric cars must be dunked in baths of water to stop fires spreading</td>
<td style="text-align:center">16-10-2023</td>
<td style="text-align:center">Negative</td>
<td style="text-align:center">Neutral</td>
<td style="text-align:center">Neutral</td>
</tr>
<tr>
<td style="text-align:left">Express</td>
<td style="text-align:left">I'm an EV expert - these electric car tax fees should not be raised significantly more</td>
<td style="text-align:center">05-11-2023</td>
<td style="text-align:center">Negative</td>
<td style="text-align:center">Positive</td>
<td style="text-align:center">Neutral</td>
</tr>
<tr>
<td style="text-align:left">The Sun</td>
<td style="text-align:left">I've driven thousands of cars - no one wants to buy an EV for these three reasons</td>
<td style="text-align:center">09-10-2023</td>
<td style="text-align:center">Negative</td>
<td style="text-align:center">Positive</td>
<td style="text-align:center">Neutral</td>
</tr>
</tbody>
</table>
</div>
<br><a href="#" class="gototop">Top</a>
<?php include 'footer.php'; ?>

</div></body></html>