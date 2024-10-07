<?php include 'html-inc/header.php'; ?>

<script src="/scripts/ev-headlines.js"></script>


<title>Media Bias and Misinformation: Analysing Mainstream Media Headlines on Electric Vehicles</title>

<body class="colorscheme-light">
    <div class="float-container">
        <a id="dark-mode-toggle" class="colorscheme-toggle">
            <i class="fa-solid fa-adjust fa-fw" aria-hidden="true"></i>
        </a>
    </div><div class="page-container">
  <div class="toolbar" style="width:100%; text-align:center; align-items:center">
                      
      <!-- JUMP TO MENU-->
      <!-- <span class="menu dropbtn" style="align-items:center;" onclick="openNav()"><i style="align-items:center" class="material-icons" style="font-size:24px; color: white">menu</i>&nbsp;Menu</span> -->
      <?php include 'menu-ev-headlines.php'; ?></div>
      <h1>Analysing Mainstream Media Headlines for Electric Vehicles</h1>
      
      
      <div id="JumptoSection"><h2>Jump to section</h2>
      <div class="countries">
              <div id="JumptoSection" >
              <select onchange="javascript:scrollToAnchor(this.value, 100);">
              <option value="#">Select to jump to section ....</option>

                      <option value="sentiment">Sentiment Analysis Overview</option>
                      <option value="bias-risk">Risk of Bias in results</option>
                      <option value="bias-mitigation">Minimising Risk of Bias </option>
                      <option value="analysis-results">Analysis Results </option>
                      <option value="risk">Sentiment Analysis Results</option>
                      <option value="example-analysis-comparison">Comparison of Methodology Results for Sentiment Analysis</option>
                      <option value="conclusion">Conclusion</option>

                      </select></div></div></div>



<h1 id="sentiment">Sentiment Analysis Overview</h1> 
<p class='last-updated'><?php include '../tables/last-updated.php' ?></p>


  <p>Sentiment analysis was carried out using textblob, Llama 3.1b LLM and further supplemented with a hand tuned final review, this data 
  was kept separate allowing a comparison to be drawn between the three methods. It will come as no surprise that understanding the 
  intent behind a headline without any further supporting information is quite challenging for automated libraries such as textblob or 
  general LLMs such as Llama 3.1b. </p>

  <p>A future project will include training an LLM on this specific task, however there's not enough data at 
  this point to make this worthwhile, I am currently running a bot scraping the headlines, which I plan on running for twelve months.
  </p>

<h2 id="bias-risk">Risk of introducing Bias during hand tuned sentiment analysis</h2>

  <p>In the process of manually annotating the dataset, I must acknowledge the possibility of introducing personal biases that can influence the accuracy 
      of results. Specifically, I may be susceptible to three types of cognitive biases: confirmation bias, anchoring bias, and availability heuristic.</p>

  <p><b>Confirmation Bias</b> arises when existing beliefs or opinions influence the perception of new information, leading to the subject selectively focussing on 
      evidence that confirms our views while ignoring contradictory data. In the context of sentiment analysis, this could result in consistently labeling samples 
      as positive or negative based on personal opinions, rather than objective criteria.</p>

  <p><b>Anchoring Bias</b> occurs when initial classification or impression influence subsequent judgments, even if the new information doesn't necessarily match the 
      original criteria. For example, initially labelling a sample as "positive," means that similar samples may be labelled as positive as well, potentially 
      introducing consistency errors into annotations.</p>

  <p><b>Availability Heuristic Bias</b> can also affect the annotation process, leading to overemphasis of extreme cases (e.g., strongly negative or positive sentiments) and 
      overlooking more nuanced opinions. This bias can result in an inaccurate representation of the overall sentiment distribution in the dataset.</p>

<h3 id="bias-mitigation">Minimise bias potential</h3>
  <p>To minimize personal biases during classification, identifying information that could influence interpretation was hidden from the view. 
    This includes publication title and date, which helps to ensure that the classifications are more objective and less influenced by individual perspectives.</p>
    
    <p>Furthermore, the sort order of headlines was randomised to reduce the potential for Availability Heuristic Bias. A significant number of headlines began with 
      the phrase "I'm a .." or "I / I've ...." indicative of a personal experience or subject matter style of headline preferred by certain media outlets (usually with a 
      negative sentiment bias). Randomising the order of headlines, spread these problematic headlines out with the goal of reducing personal bias still further. </p>


      
<h2 id="analysis-results">Sentiment Analysis Results</h2>


<!-- <div class="datatable-container table-format" id="all-headlines-count-by-publication"> -->
    <table class="dataframe datatable" style="width:80%; margin: 0 auto;"> 
    
    
  <thead>
    <tr style="text-align: right;">
      <th>title</th>
      <th>Negative</th>
      <th>Neutral</th>
      <th>Positive</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>hand tuned</th>
      <td>57%</td>
      <td>9%</td>
      <td>34%</td>
    </tr>
    <tr>
      <th>Llama</th>
      <td>51%</td>
      <td>28%</td>
      <td>21%</td>
    </tr>    
    <tr>
      <th>TextBlob</th>
      <td>28%</td>
      <td>34%</td>
      <td>38%</td>
    </tr>    
    <tr>
      <th>ChatGPT</th>
      <td>18%</td>
      <td>75%</td>
      <td>7%</td>
    </tr>


  </tbody>
</table>
<!-- </div> -->
<br><a href="#" class="gototop">Top</a>




<h2 id="example-headlines">Examples of the wildly different results from sentiment analysis</h2>

<!-- <div class="datatable-container" id="html_table-source-meta-data-feature-engineering"> -->
<table class="dataframe datatable" style="width:100%; margin: 0 auto;">
<thead>
<tr>
<th style="text-align:left; width:15%">Publication</th>
<th style="text-align:left; width:55%">Headline</th>
<th style="text-align:center">Date</th>
<th style="text-align:center">Hand Tuned<br>Sentiment</th>
<th style="text-align:center">Textblob<br>Sentiment</th>
<th style="text-align:center">Llama 3.1b LLM<br>
</thead>
<tbody>

    <tr>
        <td>Express</td>
        <td>White van men are going green as they switch to electric vehicles</td>
        <td>2023-09-20</td>
        <td style="text-align:center">Positive</td>
       <td style="text-align:center">Neutral</td>
       <td style="text-align:center">Negative</td>
    </tr>
    <tr>
        <td>The Daily Mail</td>
        <td>BMWs new electric i5 offers supercar performance in an executive saloon package - but is it better than a Tesla</td>
        <td>2024-01-08</td>
       <td style="text-align:center">Negative</td>
       <td style="text-align:center">Positive</td>
       <td style="text-align:center">Neutral</td>
    </tr>
    <tr>
        <td>The Sun</td>
        <td>Electric car sales plummet as relieved drivers opt for petrol and diesel motors</td>
        <td>2023-10-05</td>
       <td style="text-align:center">Negative</td>
       <td style="text-align:center">Positive</td>
       <td style="text-align:center">Neutral</td>
    </tr>
    <tr>
        <td>The Sun</td>
        <td>I took my EV on a 280-mile trip across the UK... it was a disaster</td>
        <td>2023-09-19</td>
       <td style="text-align:center">Negative</td>
       <td style="text-align:center">Positive</td>
       <td style="text-align:center">Neutral</td>
    </tr>
    <tr>
        <td>The Sun</td>
        <td>Major rental company makes U-turn on EV rollout over important issue</td>
        <td>2023-10-31</td>
       <td style="text-align:center">Negative</td>
       <td style="text-align:center">Positive</td>
       <td style="text-align:center">Neutral</td>
    </tr>
    <tr>
        <td>BBC</td>
        <td>Car company Nissan promises to make electric vehicles in Sunderland</td>
        <td>2023-11-23</td>
       <td style="text-align:center">Positive</td>
       <td style="text-align:center">Negative</td>
       <td style="text-align:center">Neutral</td>
    </tr>
    <tr>
        <td>The Telegraph</td>
        <td>BT to turn street cabinets into electric car chargers</td>
        <td>2024-01-08</td>
       <td style="text-align:center">Positive</td>
       <td style="text-align:center">Negative</td>
       <td style="text-align:center">Neutral</td>
    </tr>
    <tr>
        <td>The Daily Mail</td>
        <td>What drains an electric car battery most From air-con to smartphone charging - how much range is wiped-out when using these nine common features</td>
        <td>2023-08-02</td>
       <td style="text-align:center">Negative</td>
       <td style="text-align:center">Positive</td>
       <td style="text-align:center">Positive</td>
    </tr>
    <tr>
        <td>The Sun</td>
        <td>Urgent warning over EVs after batteries suddenly explode into flames</td>
        <td>2023-10-11</td>
       <td style="text-align:center">Negative</td>
       <td style="text-align:center">Positive</td>
       <td style="text-align:center">Neutral</td>
    </tr>
</tbody>
</table>
<!-- </div> -->
<br><a href="#" class="gototop">Top</a>


<h3 id="conclusion">Conclusion - The Risk of Bias</h3>
    
    <p>While I have taken steps to reduce personal biases during classification, it is possible that these biases could affect the accuracy of the findings. 
        As such, the results presented in this report should be interpreted with caution and considered within the context of the broader study.</p>





        <?php include 'html-inc/footer.php'; ?>
        <script src="/js/coder.min.6ae284be93d2d19dad1f02b0039508d9aab3180a12a06dcc71b0b0ef7825a317.js"></script> 

</div>
</body>
</html>


