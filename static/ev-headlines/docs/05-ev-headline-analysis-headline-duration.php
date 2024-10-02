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
      
      
      <div id="JumptoSection"><h2>Jump to section</h2>
      <div class="countries">
              <div id="JumptoSection" >
              <select onchange="javascript:scrollToAnchor(this.value, 100);">
              <option value="#">Select to jump to section ....</option>

                      <option value="headline-duration">Headline Duration</option>
                      <option value="caution">Considerations when viewing this data</option>
                      <option value="all-headlines">General News Headline Duration in Search</option>
                      <option value="all-ev-headlines">EV Headline Duration in Search</option>
                      <option value="conclusion">Conclusion</option>
                      </select></div></div></div>



<h1 id="headline-duration">Headline Duration</h1> 
<p class='last-updated'><?php include '../tables/last-updated.php' ?></p>


<p>Headlines were scraped from media websites search results and a comparison carried out on the number of days a headline appeared in the search results.</p>

<a href="../img/headlines-comparison-days-in-results.png"><img src="../img/headlines-comparison-days-in-results.png"></a>
<br><a href="#" class="gototop">Top</a>

<h3 id="caution">Considerations when viewing this data</h3>
  <ul>
    <li>Mainstream Media often re-use the same article/headlines across multiple time periods. EV headlines tend to be re-used more than general news 
      headlines. This will affect the reported duration shown in results.</li>
    <li>It is reasonable to expect a higher churn rate for general news headlines over EV related headlines, resulting in a general news headlines spending less time in results. </li>
    <li>The headlines search results were captured for EV Terms, the non EV headlines were included in search results by the Publication and are 
      not Front Page headlines.</li>
      <li>Algorithms are driving the search results and it is possible the shorter churn for General News is driven by the Algorithms, rather than a date driven sort.</li>
    <li>No conclusions can be drawn from this, it's just an interesting observation.</li>
  </ul>

  

<h2 id="all-headlines">All Headlines</h2>

<a href="../img/alltitles-all-headlines-days-in-results.png"><img src="../img/alltitles-all-headlines-days-in-results.png"></a>
<br><a href="#" class="gototop">Top</a>
<p></p>
<p>The <code>all_headlines</code> data include the all the headlines captured, around 96,683 rows.</p>
<p>The average number of days a headline appeared in search results was calculated for the entire dataset</p>

<p>Processing time for the comparison process took 14 minutes. </p>

<p>The average number of days for all headlines was 4.27 days.</p>

<h3>For Each Publication</h3>


<div class="datatable-container" id="table-all-headlines-by-publications-number-of-days">

<table class="dataframe datatable table-format" style="width:80%; margin: 0 auto;">

<thead>

<tr>

      <th >Title</th>

      <th >Unique Headlines</th>

      <th >Average Days In Results</th>

      <th >Total Number of Headlines</th>

    </tr>

  </thead>

  <tbody>

  <tr>

<td >The Sun</td>

<td >1455</td>

<td >5</td>

<td >3525</td>

</tr>

<tr>

<td >The Daily Mail</td>

<td >1432</td>

<td >4</td>

<td >38749</td>

</tr>

    <tr>

      <td >The Telegraph</td>

      <td >359</td>

      <td >18</td>

      <td >6976</td>

    </tr>

    <tr>

<td >Express</td>

<td >531</td>

<td >4</td>

<td >1390</td>

</tr>

    <tr>

      <td >The Times</td>

      <td >117</td>

      <td >15</td>

      <td >1815</td>

    </tr>

    <tr>

      <td >BBC</td>

      <td >378</td>

      <td >4</td>

      <td >2857</td>

    </tr>

    <tr>

      <td >The Independent</td>

      <td >130</td>

      <td >14</td>

      <td >15415</td>

    </tr>

    <tr>
      <td >The Spectator</td>

      <td >29</td>

      <td >7</td>

      <td >3430</td>

    </tr>    
    
    <tr>

      <td >The Economist</td>

      <td >74</td>

      <td >15</td>

      <td >1811</td>

    </tr>

    <tr>

      <td >The Daily Star</td>

      <td >15048</td>

      <td >2</td>

      <td >20670</td>

    </tr>

  </tbody>

</table>
</div>
<br><a href="#" class="gototop">Top</a>

<h2 id="all-ev-headlines">All EV Headlines</h2>
<a href="../img/alltitles-ev-headlines-days-in-results.png"><img src="../img/alltitles-ev-headlines-days-in-results.png"></a>
<br><a href="#" class="gototop">Top</a>
<p></p>

<p>The <code>all_ev_headlines</code> data includes the headlines captured and filtered to only those (mostly) relating to electric 
  vehicles and contains 27,580 rows.</p>

  <p>The Average number of days in search results for EV Headlines was 20 days.</p>

  <h3>For Each Publication</h3>

  <div class="datatable-container" id="table-ev-headlines-by-publications-number-of-days">

  <table class="dataframe datatable table-format" style="width:80%; margin: 0 auto;">
<thead>
<tr >
      <th >Publication</th>
      <th >Unique EV<br>Headlines</th>
      <th >Average Days<br>In Results</th>
      <th >Total <br>Headlines</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td >The Sun</td>
      <td >466</td>
      <td >5</td>
      <td >3,525</td>
    </tr>    
       <tr>
      <td >The Daily Mail</td>
      <td >307</td>
      <td >4</td>
      <td >38,749</td>
    </tr> 
    <tr>
      <td >The Telegraph</td>
      <td >188</td>
      <td >18</td>
      <td >6,976</td>
    </tr>
    <tr>
      <td >Express</td>
      <td >114</td>
      <td >4</td>
      <td >1,390</td>
    </tr>    
    <tr>
      <td >The Times</td>
      <td >74</td>
      <td >15</td>
      <td >1,815</td>
    </tr>
    <tr>
      <td >BBC</td>
      <td >58</td>
      <td >4</td>
      <td >2,857</td>
    </tr>
    <tr>
      <td >The Independent</td>
      <td >29</td>
      <td >14</td>
      <td >15,415</td>
    </tr>    
    <tr>
      <td >The Spectator</td>
      <td >26</td>
      <td >7</td>
      <td >3,430</td>
    </tr>

    <tr>
      <td >The Economist</td>
      <td >20</td>
      <td >15</td>
      <td >1,811</td>
    </tr>
    <tr>
      <td >The Daily Star</td>
      <td >15</td>
      <td >2</td>
      <td >20,670</td>
    </tr>



  </tbody>
</table>


  </div>
  <br><a href="#" class="gototop">Top</a>
  <h2 id="conclusion">Conclusion</h2>
  <p>While this is an interesting observation, little can be concluded from this. There are less new EV Headlines per month than general news headlines, so it comes as 
     no surprise that EV headlines tend to stay in EV Search results for longer than general news.  </p>

     <?php include 'footer.php'; ?>

</div></body></html>


