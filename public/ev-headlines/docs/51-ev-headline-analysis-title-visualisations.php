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
                      
                      <option value="#">Select to jump to publication</option>
                      <option value="new-headlines">New Headlines Vs New Vehicles</option>
                      <option value="visualisation-by-publication">Visualisations by Publication</option>
                      <option value="bbc">Publication - BBC</option>
                      <option value="express">Publication - The Express</option>
                      <option value="daily-mail">Publication - The Daily Mail</option>
                      <option value="daily-star">Publication - The Daily Star</option>
                      <option value="economist">Publication - The Economist</option>
                      <option value="independent">Publication - The Independent</option>
                      <option value="spectator">Publication - The Spectator</option>
                      <option value="sun">Publication - The Sun</option>
                      <option value="telegraph">Publication - The Telegraph</option>
                      <option value="times">Publication - The Times</option>
                      </select></div></div></div>


<h1>Publication Visualisations </h1>
<p class='last-updated'><?php include '../tables/last-updated.php' ?></p>

<h2 id="new-headlines">New EV Headlines Vs New Vehicle Registrations</h2>

<p>This section provides a visual representation of the analysis to help readers better understand the trends and biases exhibited by each 
  publication. I have created various plots for each publication, which provide insights into their reporting patterns and sentiment 
  towards electric vehicles.</p>

<a href="../img/alltitles-monthly-headline-volume-sentiment-vs-registrations.png">
  <img src="../img/alltitles-monthly-headline-volume-sentiment-vs-registrations.png" style="width:75%"></a>



    
<h2>Visualisations by Publication</h2>

    <h3>Quantity and Sentiment Analysis</h3>

    <h3>Bias Distribution</h3>
    
    <p>The first plot for each publication presents a bar chart, illustrating the percentage of headlines categorized as Negative, Positive, or 
      Neutral. This visualization highlights the dominant tone and bias in each publication's reporting. Again it's clear to see some publications 
      exhibit a clear negative bias towards electric vehicles, with an alarming proportion of their headlines being strongly critical.</p>

      <p>The second plot shows a bar chart for each publication, displaying the month, quantity of headlines, and bias (Negative, Neutral, Positive) 
  associated with those headlines. This allows readers to see the overall trend in headline production and sentiment over time. 
  It's quite obvious that certain publications have a significant surge in headline production during peak sales periods, which coincides with a notable 
  shift towards negative sentiment.</p>



  <h3>Rating and Comparison</h3>
  
  <p>The Neutral/Balanced Sentiment Plot depicts a single bar representing the overall sentiment of the Publication regarding electric vehicles. The 
    bar is split 50/50 into two sections, with one half colored positive and the other half colored negative. A vertical arrow indicates the 
    publication's overall bias (Positive or Negative) towards electric vehicles.</p>
      
      <h3>Overall Bias</h3>
      <p>The pieplot presents a distribution of the classification of headlines, providing a concise summary of my findings. This allows readers to easily compare 
        the overall bias across different publications. The analysis reveals that some publications exhibit extreme negativity towards electric vehicles, 
        which is particularly concerning given their influence on public perception and consumer decision-making.</p>

    <!-- BBC -->
     <p id="bbc"></p>
     <div class="datatable-container" >
      <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">

        <!-- Publication Icon Row -->
         <tr>

          <!-- Publication Icon -->
           <td colspan="3"  style="padding:10px; background-color: #ffffff">
            <img src="../icons/bbc-150.png">
            
          </td>
        </tr>

        <!-- First Row -->
        <tr>
          <!-- Percentage Registrations Vs Headlines -->
           <td style="background-color: #ffffff">
              <a href="../img/bbc-monthly-headline-sentiment-percentage-vs-registrations.png">
              <img src="../img/bbc-monthly-headline-sentiment-percentage-vs-registrations.png"></a>
          </td>
                
          <!-- Spacer -->
          <td style="width:1px"></td>

          <!-- Sentiment Classification -->
          <td style="background-color: #ffffff">
            <a href="../img/bbc-monthly-headline-sentiment-count-vs-registrations.png">
            <img src="../img/bbc-monthly-headline-sentiment-count-vs-registrations.png"></a>
          </td>
        </tr>

        
            <!-- Second Row -->
        <tr>
          <!-- Rating Arrow Plot -->
          <td style="background-color: #ffffff">
            <a href="../img/bbc-rating.png">
              <img src="../img/bbc-rating.png"></a>
          </td>
          <!-- Spacer -->
          <td style="width:1px"></td>

          <!-- Sentiment Pie Plot  -->
           <td style="background-color: #ffffff">
              <a href="../img/bbc-sentiment-pieplot.png">
              <img src="../img/bbc-sentiment-pieplot.png"></a>
            </td>
            </tr>
          </table>
    </div><p><a href="#" class="gototop">Top</a></p>
    
    <!-- The Express -->
     <p id="express"></p>
     <div class="datatable-container" >
      <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
      <!-- Icon Row  -->
            <tr>
                <!-- Publication Icon -->
                <td colspan="3"  style="padding:10px; background-color: #ffffff">
        <img src="../icons/express-150.png" >
      
    </td></tr>
    <tr>
      <td style="background-color: #ffffff">
         <a href="../img/express-monthly-headline-sentiment-percentage-vs-registrations.png">
        <img src="../img/express-monthly-headline-sentiment-percentage-vs-registrations.png"></a>
      </td>
      <!-- Spacer -->
      <td style="width:1px"></td>
      <td style="background-color: #ffffff">
         <a href="../img/express-monthly-headline-sentiment-count-vs-registrations.png">
        <img src="../img/express-monthly-headline-sentiment-count-vs-registrations.png"></a>
      </td>
    </tr>
    <!-- Second Row -->
    <tr>
      <!-- Rating Arrow Plot -->
        <td style="background-color: #ffffff">
            <a href="../img/express-rating.png">
              <img src="../img/express-rating.png"></a>
        </td>

        <!-- Spacer -->
        <td style="width:1px"></td>

        <!-- Headline Sentiment Rating  -->
        <td style="background-color: #ffffff">
          <a href="../img/express-sentiment-pieplot.png">
            <img src="../img/express-sentiment-pieplot.png"></a>
        </td>
    </tr></table></div><p><a href="#" class="gototop">Top</a></p>

<!-- The daily mail -->
 <p id="daily-mail"></p>
  <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
      <tr>
      <!-- Publication Icon -->
        <td colspan="3"  style="padding:10px; background-color: #ffffff">
        <img src="../icons/the-daily-mail-150.png">
      
    </td></tr>
    <tr>
      <td style="background-color: #ffffff">
         <a href="../img/the-daily-mail-monthly-headline-sentiment-percentage-vs-registrations.png">
        <img src="../img/the-daily-mail-monthly-headline-sentiment-percentage-vs-registrations.png"></a>
      </td>
      <td style="width:1px"></td>

      <td style="background-color: #ffffff">
         <a href="../img/the-daily-mail-monthly-headline-sentiment-count-vs-registrations.png">
        <img src="../img/the-daily-mail-monthly-headline-sentiment-count-vs-registrations.png"></a>
      </td>
    </tr>
    <tr>
      <!-- Rating Arrow Plot -->
        <td style="background-color: #ffffff">
            <a href="../img/the-daily-mail-rating.png">
              <img src="../img/the-daily-mail-rating.png"></a>
        </td>

        <!-- Spacer -->
        <td style="width:1px"></td>
        
        <!-- Headline Sentiment Rating  -->
        <td style="background-color: #ffffff">
          <a href="../img/the-daily-mail-sentiment-pieplot.png">
            <img src="../img/the-daily-mail-sentiment-pieplot.png"></a>
        </td>
    </tr></table></div><p><a href="#" class="gototop">Top</a></p>

    <!-- The daily star -->
     <p id="daily-star"></p>
    <div class="datatable-container" >
        <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">

            <tr>
                <!-- Publication Icon -->
    <td colspan="3" style="background-color: #ffffff">
        <img src="../icons/the-daily-star-150.png">
    </td>
  </tr>
  <tr>
      <td style="background-color: #ffffff">
        <a href="../img/the-daily-star-monthly-headline-sentiment-percentage-vs-registrations.png">
        <img src="../img/the-daily-star-monthly-headline-sentiment-percentage-vs-registrations.png"></a>
      </td>
      
      <!-- Spacer -->
      <td style="width:1px"></td>

      <td style="background-color: #ffffff">
         <a href="../img/the-daily-star-monthly-headline-sentiment-count-vs-registrations.png">
        <img src="../img/the-daily-star-monthly-headline-sentiment-count-vs-registrations.png"></a>
      </td>
    </tr>

    <!-- Second Row -->
    <tr>
      <!-- Rating Arrow Plot -->
        <td style="background-color: #ffffff">
            <a href="../img/the-daily-star-rating.png">
              <img src="../img/the-daily-star-rating.png"></a>
        </td>

        <!-- Spacer -->
        <td style="width:1px"></td>

        <!-- Headline Sentiment Rating  -->
        <td style="background-color: #ffffff">
          <a href="../img/the-daily-star-sentiment-pieplot.png">
            <img src="../img/the-daily-star-sentiment-pieplot.png"></a>
        </td>
    </tr></table></div><p><a href="#" class="gototop">Top</a></p>




    <!-- The economist -->
     <p id="economist"></p>
    <div class="datatable-container" >
      <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
        <tr>
        <!-- Publication Icon -->
         <td colspan="3" style="background-color: #ffffff;">
          <img src="../icons/the-economist-150.png">
        </td>
      </tr>
      <tr>
        <td style="background-color: #ffffff">
          <a href="../img/the-economist-monthly-headline-sentiment-percentage-vs-registrations.png">
          <img src="../img/the-economist-monthly-headline-sentiment-percentage-vs-registrations.png"></a>
        </td>

        <!-- Spacer -->
        <td style="width:1px"></td>

        <td style="background-color: #ffffff">
          <a href="../img/the-economist-monthly-headline-sentiment-count-vs-registrations.png">
          <img src="../img/the-economist-monthly-headline-sentiment-count-vs-registrations.png"></a>
        </td>
      </tr>

    <!-- Second Row -->
    <tr>
      <!-- Rating Arrow Plot -->
        <td style="background-color: #ffffff">
            <a href="../img/the-economist-rating.png">
              <img src="../img/the-economist-rating.png"></a>
        </td>

        <!-- Spacer -->
        <td style="width:1px"></td>

        <!-- Headline Sentiment Rating  -->
        <td style="background-color: #ffffff">
          <a href="../img/the-economist-sentiment-pieplot.png">
            <img src="../img/the-economist-sentiment-pieplot.png"></a>
        </td>
    </tr></table></div><p><a href="#" class="gototop">Top</a></p>




      <!-- The Independent -->
       <p id="independent"></p>
      <div class="datatable-container" >
      <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
      <!-- Icon Row  -->
        <tr>
          <!-- Publication Icon -->
          <td colspan="3"  style="padding:10px; background-color: #ffffff">
            <img src="../icons/the-independent-150.png">
          </td>
          </tr>
          
          <tr>
            <td style="background-color: #ffffff">
              <a href="../img/the-independent-monthly-headline-sentiment-percentage-vs-registrations.png">
              <img src="../img/the-independent-monthly-headline-sentiment-percentage-vs-registrations.png"></a>
            </td>

            <!-- Spacer -->
            <td style="width:1px"></td>
            <td style="background-color: #ffffff">
              <a href="../img/the-independent-monthly-headline-sentiment-count-vs-registrations.png">
              <img src="../img/the-independent-monthly-headline-sentiment-count-vs-registrations.png"></a>
            </td>
          </tr>
    <!-- Second Row -->
    <tr>
      <!-- Rating Arrow Plot -->
        <td style="background-color: #ffffff">
            <a href="../img/the-independent-rating.png">
              <img src="../img/the-independent-rating.png"></a>
        </td>

        <!-- Spacer -->
        <td style="width:1px"></td>

        <!-- Headline Sentiment Rating  -->
        <td style="background-color: #ffffff">
          <a href="../img/the-independent-sentiment-pieplot.png">
            <img src="../img/the-independent-sentiment-pieplot.png"></a>
        </td>
    </tr></table></div><p><a href="#" class="gototop">Top</a></p>

        <!-- The spectator -->
         <p id="spectator"></p>
  <div class="datatable-container" >
  <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
    <!-- Icon Row  -->
      <tr>
        <!-- Publication Icon -->
        <td colspan="3"  style="padding:10px; background-color: #ffffff">
          <img src="../icons/the-spectator-150.png">
        </td>
        </tr>
        <tr>
      <td style="background-color: #ffffff">
         <a href="../img/the-spectator-monthly-headline-sentiment-percentage-vs-registrations.png">
        <img src="../img/the-spectator-monthly-headline-sentiment-percentage-vs-registrations.png"></a>
      </td>
              <!-- Spacer -->
              <td style="width:1px"></td>
      <td style="background-color: #ffffff">
         <a href="../img/the-spectator-monthly-headline-sentiment-count-vs-registrations.png">
        <img src="../img/the-spectator-monthly-headline-sentiment-count-vs-registrations.png"></a>
      </td>
    </tr>

        <!-- Second Row -->
        <tr>
      <!-- Rating Arrow Plot -->
        <td style="background-color: #ffffff">
            <a href="../img/the-spectator-rating.png">
              <img src="../img/the-spectator-rating.png"></a>
        </td>

        <!-- Spacer -->
        <td style="width:1px"></td>

        <!-- Headline Sentiment Rating  -->
        <td style="background-color: #ffffff">
          <a href="../img/the-spectator-sentiment-pieplot.png">
            <img src="../img/the-spectator-sentiment-pieplot.png"></a>
        </td>
    </tr></table></div><p><a href="#" class="gototop">Top</a></p>

   
        <!-- The sun -->
         <p id="sun"></p>
      <div class="datatable-container" >
      <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
      <!-- Icon Row  -->
            <tr>
              <!-- Publication Icon -->
              <td colspan="3"  style="padding:10px; background-color: #ffffff">
                <img src="../icons/the-sun-150.png">
      </td>
      </tr>
      <tr>
    
      <td style="background-color: #ffffff">
         <a href="../img/the-sun-monthly-headline-sentiment-percentage-vs-registrations.png">
        <img src="../img/the-sun-monthly-headline-sentiment-percentage-vs-registrations.png"></a>
      </td>
              <!-- Spacer -->
              <td style="width:1px"></td>
      <td style="background-color: #ffffff">
         <a href="../img/the-sun-monthly-headline-sentiment-count-vs-registrations.png">
        <img src="../img/the-sun-monthly-headline-sentiment-count-vs-registrations.png"></a>
      </td>
    </tr> 
        <!-- Second Row -->
        <tr>
      <!-- Rating Arrow Plot -->
        <td style="background-color: #ffffff">
            <a href="../img/the-sun-rating.png">
              <img src="../img/the-sun-rating.png"></a>
        </td>

        <!-- Spacer -->
        <td style="width:1px"></td>

        <!-- Headline Sentiment Rating  -->
        <td style="background-color: #ffffff">
          <a href="../img/the-sun-sentiment-pieplot.png">
            <img src="../img/the-sun-sentiment-pieplot.png"></a>
        </td>
    </tr></table></div><p><a href="#" class="gototop">Top</a></p>

       
        <!-- The telegraph -->
         <p id="telegraph"></p>
        <div class="datatable-container" >
      <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
      <!-- Icon Row  -->
            <tr>
                <!-- Publication Icon -->
                <td colspan="3"  style="padding:10px; background-color: #ffffff">
        <img src="../icons/the-telegraph-150.png">
    </td></tr>
    <tr>
      <td style="background-color: #ffffff">
         <a href="../img/the-telegraph-monthly-headline-sentiment-percentage-vs-registrations.png">
        <img src="../img/the-telegraph-monthly-headline-sentiment-percentage-vs-registrations.png"></a>
      </td>
              <!-- Spacer -->
              <td style="width:1px"></td>
      <td style="background-color: #ffffff">
         <a href="../img/the-telegraph-monthly-headline-sentiment-count-vs-registrations.png">
        <img src="../img/the-telegraph-monthly-headline-sentiment-count-vs-registrations.png"></a>
      </td>
    </tr> 
        <!-- Second Row -->
        <tr>
      <!-- Rating Arrow Plot -->
        <td style="background-color: #ffffff">
            <a href="../img/the-telegraph-rating.png">
              <img src="../img/the-telegraph-rating.png"></a>
        </td>

        <!-- Spacer -->
        <td style="width:1px"></td>

        <!-- Headline Sentiment Rating  -->
        <td style="background-color: #ffffff">
          <a href="../img/the-telegraph-sentiment-pieplot.png">
            <img src="../img/the-telegraph-sentiment-pieplot.png"></a>
        </td>
    </tr></table></div><p><a href="#" class="gototop">Top</a></p>

       
        <!-- The times -->
         <p id="times"></p>
        <div class="datatable-container" >
      <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
      <!-- Icon Row  -->
            <tr>
                <!-- Publication Icon -->
                <td colspan="3"  style="padding:10px; background-color: #ffffff">
        <img src="../icons/the-times-150.png">
      </td></tr>
      <tr>
    </td>
      <td style="background-color: #ffffff">
         <a href="../img/the-times-monthly-headline-sentiment-percentage-vs-registrations.png">
        <img src="../img/the-times-monthly-headline-sentiment-percentage-vs-registrations.png"></a>
      </td>
              <!-- Spacer -->
              <td style="width:1px"></td>
      <td style="background-color: #ffffff">
         <a href="../img/the-times-monthly-headline-sentiment-count-vs-registrations.png">
        <img src="../img/the-times-monthly-headline-sentiment-count-vs-registrations.png"></a>
      </td>
    </tr> 

    <!-- Second Row -->
    <tr>
      <!-- Rating Arrow Plot -->
        <td style="background-color: #ffffff">
            <a href="../img/the-times-rating.png">
              <img src="../img/the-times-rating.png"></a>
        </td>

        <!-- Spacer -->
        <td style="width:1px"></td>

        <!-- Headline Sentiment Rating  -->
        <td style="background-color: #ffffff">
          <a href="../img/the-times-sentiment-pieplot.png">
            <img src="../img/the-times-sentiment-pieplot.png"></a>
        </td>
    </tr></table></div><p><a href="#" class="gototop">Top</a></p>



     <?php include 'footer.php'; ?>

</div></body></html>