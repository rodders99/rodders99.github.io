<?php include 'html-inc/header.php'; ?>


<title>Media Bias and Misinformation: Analysing Mainstream Media Headlines on Electric Vehicles</title>

<body class="colorscheme-light">
    <div class="float-container">
        <a id="dark-mode-toggle" class="colorscheme-toggle">
            <i class="fa-solid fa-adjust fa-fw" aria-hidden="true"></i>
        </a>
    </div>    
    <div class="page-container">
        <div class="toolbar" style="width:100%; text-align: center; align-items:center">

            <!-- JUMP TO MENU-->
            <!-- <span class="menu dropbtn" style="align-items:center;" onclick="openNav()"><i style="align-items:center" class="material-icons" style="font-size:24px; color: white">menu</i>&nbsp;Menu</span> -->
            <?php include 'menu-ev-headlines.php'; ?>
        </div>

        <h1>Analysing Mainstream Media Headlines for Electric Vehicles</h1>
        
        
        <div id="JumptoSection">
            <h2>Jump to section</h2>
            <div class="countries">
                <div id="JumptoSection">
                <select onchange="javascript:scrollToAnchor(this.value, 100);">
                <option value="#">Select to jump to section ....</option>

                        <option value="project-summary">Summary</option>
                        <option value="results">Results & Observations from the analysis</option>
                        <option value="timing">Headline Sentiment vs Vehicle Sales </option>
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


        <h1 id="project-summary">Project Summary</h1>
        <p class='last-updated'><?php include '../tables/last-updated.php' ?></p>

            <p>This study analysed the sentiment of mainstream media headlines towards electric vehicles (EVs) from August 2023 to January 2024, 
                capturing a dataset of 1,976,938 observations across ten prominent UK publications, including The Sun, The Daily Mail, The Telegraph, The Express, 
                The Times, The BBC, The Independent, The Spectator, The Economist and The Daily Star Media outlets.</p> 

            <p>Notably, The Sun, The Daily Mail, The Telegraph and The Express were responsible for over 83% of the 1,297 EV-related headlines (1,075), highlighting 
                their disproportionate influence on public discourse.</p> 
            
            <p>From the 1,075 headlines published by The Sun, The Daily Mail, The Telegraph and The Express, 58% (627) of the headlines published were classified as 
                having a negative bias towards electric vehicles, countered by 31% (336) of their published EV headlines having a positive bias and the remaining 9% 
                (82) headlines being classified as Neutral toward electric vehicles.</p>

                <p>The remaining media outlets : The Times, The BBC, The Independent, The Spectator, The Economist and The Daily Star published 222 headlines (17% of 
                    the total headlines in the study) and of these 50% (110) had a negative sentiment bias, 34% (76) a positive bias and the remaining 16% has a neutral bias.
                    of these
</p>

<style>
.table-highlight {
    width: 100%;
    /* border-collapse: collapse; Optional: /* to remove space between table borders */
}

.table-highlight::after td, th {
padding: 8px;
border: 1px solid #ddd;
}

/* Align the first column to the left */


.table-highlight td:first-child,
.table-highlight th:first-child {
    text-align: left;
}

/* Align the second and subsequent columns to the center */
.table-highlight td:not(:first-child),
.table-highlight th:not(:first-child) {
    text-align: center;
}
.table-highlight td:nth-child(2),
.table-highlight th:nth-child(2) {
    background-color: red;

}
.table-highlight td:nth-child(7),
.table-highlight th:nth-child(7) {
    background-color: red;

}
.table-highlight td:nth-child(4),
.table-highlight th:nth-child(4) {
    background-color: blue;

}
.table-highlight td:nth-child(8),
.table-highlight th:nth-child(8) {
    background-color: blue;

}
</style>
<div class="datatable-container" >
<table class="dataframe datatable table-highlight" style="width:100%; margin: 0 auto; padding-left: 1px">
    <thead>
        <tr>
        <th>Publication</th>
        <th style="text-align:center">Negative<br>Count</th>
        <th style="text-align:center">Neutral<br>Count</t>
        <th style="text-align:center">Positive<br>Count</t>
        <th style="text-align:center">Total<br>Count</th>
        <th style="text-align:center">% of Total <br>Headlines</th>
        <th style="text-align:center">Negative<br>%</th>
        <th style="text-align:center">Positive<br>%</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td >The Sun</td>
        <td>306</td>
        <td >25</td>
        <td >135</td>
        <td >466</td>
        <td >36%</td>
        <td >66%</td>
        <td >29%</td>
    </tr>
    <tr>
        <td >The Daily Mail</td>
        <td >143</td>
        <td >22</td>
        <td >142</td>
        <td >307</td>
        <td >24%</td>
        <td >47%</td>
        <td >46%</td>
    </tr>
    <tr>
        <td >The Telegraph</td>
        <td >112</td>
        <td >27</td>
        <td >49</td>
        <td >188</td>
        <td >14%</td>
        <td >60%</td>
        <td >26%</td>
    </tr>
    <tr>
        <td >Express</td>
        <td >66</td>
        <td >8</td>
        <td >40</td>
        <td >114</td>
        <td >9%</td>
        <td >58%</td>
        <td >35%</td>
    </tr>
    <tr>
        <td>The Times</td>
        <td>41</td>
        <td>9</td>
        <td>24</td>
        <td>74</td>
        <td>6%</td>
        <td>55%</td>
        <td>32%</td>
    </tr>
    <tr>
        <td>BBC</td>
        <td>25</td>
        <td>14</td>
        <td>19</td>
        <td>58</td>
        <td>4%</td>
        <td>43%</td>
        <td>33%</td>
    </tr>
    <tr>
        <td>The Independent</td>
        <td>7</td>
        <td>6</td>
        <td>16</td>
        <td>29</td>
        <td>2%</td>
        <td>24%</td>
        <td>55%</td>
    </tr>
    <tr>
        <td>The Spectator</td>
        <td>20</td>
        <td>2</td>
        <td>4</td>
        <td>26</td>
        <td>2%</td>
        <td>77%</td>
        <td>15%</td>
    </tr>
    <tr>
        <td>The Economist</td>
        <td>8</td>
        <td>4</td>
        <td>8</td>
        <td>20</td>
        <td>2%</td>
        <td>40%</td>
        <td>40%</td>
    </tr>
    <tr>
        <td>The Daily Star</td>
        <td>9</td>
        <td>1</td>
        <td>5</td>
        <td>15</td>
        <td>1%</td>
        <td>60%</td>
        <td>33%</td>
    </tr>
    </tbody>
    <thead>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th style="text-align:center">TOTAL</th>
        <th style="text-align:center">1,297</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    </thead>
</table></div>

          

        
        
        <h2 id="results">Results</h2>
          <p>The analysis reveals a concerning trend: as the peak new registration period for electric vehicles approached in September, sentiment 
                in certain publications headlines shifted dramatically, with an increase in both the negative language and the quantity of new headlines published. 
                This study's findings suggest that mainstream media outlets may be playing a significant role in shaping public perception of EVs, and further research 
                is needed to understand the implications of this phenomenon on the adoption and development of sustainable transportation solutions.</p>
                

        <h3 id="timing">Timing</h3>
        <p>There is a significant increase in the number of headlines relating to Electric Vehicles towards the period of peak new vehicle sales
            (September). </p>
            <a href="../img/alltitles-barplot-monthly-hl-count-vs-registrations.png">
                <img style="width:75%;" src="../img/alltitles-barplot-monthly-hl-count-vs-registrations.png"></a>
            <br>
            <p>It is also noticeable that the overall sentiment towards Electric Vehicles shifts towards larger share of headlines being negative.</p>
            
            <a href="../img/alltitles-sentiment_analysis.png"><img style="width:75%;" src="../img/alltitles-sentiment_analysis.png"></a>
            <br>

            <p>There is a measurable increase in the overall quantity of new headlines which increases significantly from certain publications during peak sales. More new headlines 
            are published during peak sales, compared to peak sales from "The Spectator", "The Sun", "The Telegraph", "The Daily Star", 
            "The Daily Express", "The Times" and "The BBC". For more information see the <a href="51-ev-headline-analysis-title-visualisations.php">Publication Visualisations</a> of 
            the Analysis Report.</p>


            <div class="datatable-container" >
            <table class="dataframe datatable" style="width:auto; margin: 0 auto;">
    <tr>
        <td>
            <a href="../img/alltitles-negative-press-headline-count.png"><img src="../img/alltitles-negative-press-headline-count.png"></a>
        </td>
        <td>
            <a href="../img/alltitles-positive-press-headline-count.png"><img src="../img/alltitles-positive-press-headline-count.png"></a>
        </td>
</tr>
</table></div>

            <p>This is particularly noticeable with the following publications:</p>


        <h3>The Daily Star</h3>
            <p>A very noticeable increase in headlines during peak sales period.</p> 
                <div class="blockquote-wrapper">
                <div class="blockquote">
                    <h1>Overall, we rate the <span style="color:#ff0000">Daily Star UK as - Questionable</span>, based on frequent use of  
                    <span style="color:#ff0000">conspiracy theories</span>
                    and 
                    <span style="color:#ff0000">pseudoscience</span>
                    , and a long track record with 
                    <span style="color:#ff0000">failed fact checks</span> 
                    and 
                    <span style="color:#ff0000">fake news.</span>
                    </h1>
                    <h4>&mdash;Media Bias Fact Check<br><em>Last Updated on July 1, 2023.</em></h4>
                </div>
                </div>

            <div class="datatable-container" >
            <table class="dataframe datatable" style="width:auto; margin: 0 auto; padding-left: 1px">
            <tr >
                <td  text-align: center; width: 32% ">
                <a href="../img/the-daily-star-monthly-headline-sentiment-percentage-vs-registrations.png">
                <img style="background-color:#ff0000" src="../img/the-daily-star-monthly-headline-sentiment-percentage-vs-registrations.png" ></a>
                </td>
                <td></td>
                <td  text-align: center;">
                    <a href="../img/the-daily-star-monthly-headline-sentiment-count-vs-registrations.png">
                        <img src="../img/the-daily-star-monthly-headline-sentiment-count-vs-registrations.png"></a>
                    </td>
                    <td></td>
                  
                    <td  text-align: center;">
                        <a href="../img/the-daily-star-sentiment-pieplot.png">
                        <img src="../img/the-daily-star-sentiment-pieplot.png" ></a>
                    </td>
                </tr>
            </table></div>

 

            <h3>The Telegraph</h3>
            <p>A very noticeable increase in headlines during peak sales period.</p>


                <div class="blockquote-wrapper">
                <div class="blockquote">
                    <h1>
                    Overall, we rate <span style="color:#ff0000">The Telegraph as - Right-Biased,</span> 
                    based on story selection that  strongly favours the 
                    <span style="color:#ff0000">right.</span>
                    We also rate them
                    <span style="color:#ff0000">Mixed</span> for factual reporting due to 
                    <span style="color:#ff0000">poor sourcing of information</span> and 
                    <span style="color:#ff0000">some failed fact checks. </span>
                    </h1>
                    <h4>&mdash;Media Bias Fact Check<br><em>Last Updated on August 17, 2024.</em></h4>
                </div>
                </div><br>

            <div class="datatable-container" >
            <table class="dataframe datatable" style="width:auto; margin: 0 auto; padding-left:1px">
            <tr>
                <td  text-align: center; width: 32%">
                <a href="../img/the-telegraph-monthly-headline-sentiment-percentage-vs-registrations.png">
                <img  src="../img/the-telegraph-monthly-headline-sentiment-percentage-vs-registrations.png" ></a>
                </td>
                <td></td>
                <td  text-align: center;">
                    <a href="../img/the-telegraph-monthly-headline-sentiment-count-vs-registrations.png">
                        <img  src="../img/the-telegraph-monthly-headline-sentiment-count-vs-registrations.png"></a>
                    </td>
                    
                        <td ></td>
                    
                        <td  text-align: center;">
                            <a href="../img/the-telegraph-sentiment-pieplot.png">
                            <img  src="../img/the-telegraph-sentiment-pieplot.png" ></a>
                        </td>
            </tr>
            </table></div>


            <h3>The Sun</h3>
            <p>A very noticeable increase in headlines during peak sales period.</p>

            <div class="blockquote-wrapper">
            <div class="blockquote">
                <h1>
                Overall, we rate <span style="color:#ff0000">The Sun as - Right-Biased</span>,  
                based on political affiliation that  
                <span style="color:#ff0000">favours the right.</span> 
                We also rate them 
                <span style="color:#ff0000">Mixed</span> 
                for factual reporting due to 
                <span style="color:#ff0000">overly sensationalized headlines</span> 
                and 
                <span style="color:#ff0000">numerous failed fact checks. </span>
                </h1>
                <h4>&mdash;Media Bias Fact Check<br><em>Last Updated on July 1, 2023.</em></h4>
            </div>
            </div><br>

            <div class="datatable-container" >
            <table class="dataframe datatable" style="width:auto; margin: 0 auto; padding-left: 1px">
            <tr>
                <td  text-align: center; width: 32%">
                <a href="../img/the-sun-monthly-headline-sentiment-percentage-vs-registrations.png">
                <img  src="../img/the-sun-monthly-headline-sentiment-percentage-vs-registrations.png" ></a>
                </td>
                <td></td>
                <td  text-align: center;">
                    <a href="../img/the-sun-monthly-headline-sentiment-count-vs-registrations.png">
                        <img  src="../img/the-sun-monthly-headline-sentiment-count-vs-registrations.png"></a>
                    </td>
                    <td></td>
                        <td  text-align: center;">
                            <a href="../img/the-sun-sentiment-pieplot.png">
                            <img  src="../img/the-sun-sentiment-pieplot.png" ></a>
                        </td>
            </tr>
            </table></div><br>


            <h3>The Spectator</h3>
            <p>A very noticeable increase in headlines during peak sales period.</p>

            <div class="blockquote-wrapper">
            <div class="blockquote">
                <h1>
                Overall, we rate <span style="color:#ff0000">The Spectator as - Right-Center-Biased</span>, 
                 based on story selection and editorial positions that moderately favours
             
                <span style="color:#ff0000">the right.</span> 
                We also rate them 
                <span style="color:#ff0000">Mostly Factual</span> 
                for factual reporting rather than High, due to  
                <span style="color:#ff0000">misleading articles</span> 
                and a few
                <span style="color:#ff0000">failed fact checks regarding climate change.</span>
                </h1>
                <h4>&mdash;Media Bias Fact Check<br><em>Last Updated on July 1, 2023.</em></h4>
            </div>
            </div><br>

            <div class="datatable-container" >
            <table class="dataframe datatable" style="width:auto; margin: 0 auto; padding-left:1px">
            <tr>
                <td  text-align: center; width: 32%">
                <a href="../img/the-spectator-monthly-headline-sentiment-percentage-vs-registrations.png">
                <img  src="../img/the-spectator-monthly-headline-sentiment-percentage-vs-registrations.png" ></a>
                </td>
                <td></td>
                <td  text-align: center;">
                    <a href="../img/the-spectator-monthly-headline-sentiment-count-vs-registrations.png">
                        <img  src="../img/the-spectator-monthly-headline-sentiment-count-vs-registrations.png"></a>
                    </td>
                    <td></td>
                        <td  text-align: center;">
                            <a href="../img/the-spectator-sentiment-pieplot.png">
                            <img src="../img/the-spectator-sentiment-pieplot.png" ></a>
                        </td>
            </tr>
            </table></div>

          
        
        <h3>The BBC</h3>
            <p>A very noticeable increase in headlines during peak sales period.</p>

            <div class="blockquote-wrapper">
            <div class="blockquote">
                <h1>
                Overall, we rate <span style="color:#ff0000">The BBC as - Left-Center-Biased</span> 
                based on story selection that slightly favours the 
             
                <span style="color:#ff0000">the left.</span> 
                We also rate them 
                <span style="color:#ff0000">High</span> 
                for factual reporting, due to proper sourcing of information. Although they have failed  
                <span style="color:#ff0000">a fact-check</span> 
                , they appropriately issued a correction.
                </h1>
                <h4>&mdash;Media Bias Fact Check<br><em>Last Updated on July 1, 2023.</em></h4>
            </div>
            </div><br>

            <div class="datatable-container" >
            <table class="dataframe datatable" style="width:auto; margin: 0 auto; padding-left:1px">
            <tr>
                <td  text-align: center; width: 32%">
                <a href="../img/bbc-monthly-headline-sentiment-percentage-vs-registrations.png">
                <img  src="../img/bbc-monthly-headline-sentiment-percentage-vs-registrations.png" ></a>
                </td>
                <td></td>
                <td  text-align: center;">
                    <a href="../img/bbc-monthly-headline-sentiment-count-vs-registrations.png">
                        <img src="../img/bbc-monthly-headline-sentiment-count-vs-registrations.png"></a>
                    </td>
                    <td></td>
                        <td  text-align: center;">
                            <a href="../img/bbc-sentiment-pieplot.png">
                            <img  src="../img/bbc-sentiment-pieplot.png" ></a>
                        </td>
            </tr>
            </table></div>


            <h3>The Times</h3>
            <p>A very noticeable increase in headlines during peak sales period.</p>



            <div class="blockquote-wrapper">
            <div class="blockquote">
                <h1>
                Overall, we rate <span style="color:#ff0000">The Times as - Right-Center-Biased</span> 
                , based on story selection and editorial positions that favours the 
             
                <span style="color:#ff0000">Right.</span> 
                We also rate them 
                <span style="color:#ff0000">High</span> 
                for factual reporting, due clean  
                <span style="color:#ff0000">fact-check</span> 
                 record.
                </h1>
                <h4>&mdash;Media Bias Fact Check<br><em>Last Updated on July 1, 2023.</em></h4>
            </div>
            </div><br>

            <div class="datatable-container" >
            <table class="dataframe datatable" style="width:auto; margin: 0 auto; padding-left:1px">
            <tr>
                <td  text-align: center; width: 32%">
                <a href="../img/the-times-monthly-headline-sentiment-percentage-vs-registrations.png">
                <img  src="../img/the-times-monthly-headline-sentiment-percentage-vs-registrations.png" ></a>
                </td>
                <td></td>
                <td  text-align: center;">
                    <a href="../img/the-times-monthly-headline-sentiment-count-vs-registrations.png">
                        <img  src="../img/the-times-monthly-headline-sentiment-count-vs-registrations.png"></a>
                    </td>
                    <td></td>

                        <td  text-align: center;">
                            <a href="../img/the-times-sentiment-pieplot.png">
                            <img  src="../img/the-times-sentiment-pieplot.png" ></a>
                        </td>
            </tr>
            </table></div>

        <h3>The Economist</h3>
            <p>A very noticeable increase in headlines during peak sales period.</p>




            <div class="blockquote-wrapper">
            <div class="blockquote">
                <h1>
                Overall, we rate <span style="color:#ff0000">The Economist as -  Least Biased</span> 
                based on 
             
                <span style="color:#ff0000">Balanced Reporting.</span> 
                We also rate them 
                <span style="color:#ff0000">High</span> 
                for factual reporting, due clean  
                <span style="color:#ff0000">fact-check</span> 
                 record.
                </h1>
                <h4>&mdash;Media Bias Fact Check<br><em>Last Updated on July 1, 2023.</em></h4>
            </div>
            </div><br>

            <div class="datatable-container" >
            <table class="dataframe datatable" style="width:auto; margin: 0 auto; padding-left:1px">
            <tr>
                <td  text-align: center; width: 32%">
                <a href="../img/the-economist-monthly-headline-sentiment-percentage-vs-registrations.png">
                <img  src="../img/the-economist-monthly-headline-sentiment-percentage-vs-registrations.png" ></a>
                </td>
                <td></td>
                <td  text-align: center;">
                    <a href="../img/the-economist-monthly-headline-sentiment-count-vs-registrations.png">
                        <img  src="../img/the-economist-monthly-headline-sentiment-count-vs-registrations.png"></a>
                    </td>
                    <td></td>

                        <td  text-align: center;">
                            <a href="../img/the-economist-sentiment-pieplot.png">
                            <img  src="../img/the-economist-sentiment-pieplot.png" ></a>
                        </td>
            </tr>
            </table></div>


            <h3>The Express</h3>
            <p>A very noticeable increase in headlines during peak sales period.</p>
         

            <div class="blockquote-wrapper">
            <div class="blockquote">
                <h1>
                Overall, we rate <span style="color:#ff0000">The Express as Right-Biased</span> 
                based on 
             
                <span style="color:#ff0000">editorial content.</span> 
                We also rate them 
                <span style="color:#ff0000">Mixed</span> 
                for factual reporting due publishing   
                <span style="color:#ff0000">conspiracies & pseudoscience</span> 
                and
                <span style="color:#ff0000">several failed fact checks.</span> 
                </h1>
                <h4>&mdash;Media Bias Fact Check<br><em>Last Updated on June 12, 2024.</em></h4>
            </div>
            </div><br>

            <div class="" >
            <table class="" style="width:auto; margin: 0 auto; padding-left:1px">
            <tr>
                <td  text-align: center; width: 32%">
                <a href="../img/express-monthly-headline-sentiment-percentage-vs-registrations.png">
                <img  src="../img/express-monthly-headline-sentiment-percentage-vs-registrations.png" ></a>
                </td>
                <td></td>
                <td  text-align: center;">
                    <a href="../img/express-monthly-headline-sentiment-count-vs-registrations.png">
                        <img  src="../img/express-monthly-headline-sentiment-count-vs-registrations.png"></a>
                    </td>
                   
                    <td></td>
                        <td  text-align: center; ">
                            <a href="../img/express-sentiment-pieplot.png">
                            <img src="../img/express-sentiment-pieplot.png" ></a>
                        </td>
            </tr>
            </table></div>

            <h2 id="themes-and-patterns">Themes and Patterns Identification</h2>
              <h3>Sensational Reporting</h3>
              <p>A notable portion of headlines focused on sensational and often unsubstantiated claims, such as spying
                allegations and fire incidents, despite data showing that EVs are significantly less likely to catch fire compared to internal combustion
                engine vehicles.</p>      


            
                <p>Common Themes: Identified recurring themes in the headlines, See <a href="04-ev-headline-analysis-common-themes.php">"Common Themes"</a> in this report. 
                Broadly classified examples of recurring themes:</p>
            
                <ul><li>Concerns about China spying on or controlling EVs remotely</li>
                    <li>Incidents of EVs catching fire</li>
                    <li>Negative commentary from subject matter experts </li>
                    <li>Personal experiences (nearly always negative)</li>
                    <li>Difficulties in obtaining planning permission for charging infrastructure</li>
                    <li>EV Sales in decline</li>
                    <li>General unsubstantiated warnings to EV drivers.</li>
                    </ul>


                    <div class="" >
                <table class="" style="width:100%; margin: 0 auto;">    
                    <thead>
                    <tr style="text-align: center">
        <th  style="text-align: center">Publication</th>
        <th style="text-align: center">China<br>Spying</t>
        <th style="text-align: center">EV Fires</th>
        <th style="text-align: center">Subject<br>Matter<br>Expert</t>
        <th style="text-align: center">Personal<br>Experience</th>
        <th style="text-align: center">EV Sales<br>Decline</th>
        <th style="text-align: center">General<br>Warnings</th>
    </tr>
    </thead>
    <tbody>
    <tr style="text-align: center">

        <td style="text-align: center">BBC</td>
        <td style="text-align: center">0</td>
        <td style="text-align: center">0</td>
        <td style="text-align: center">0</td>
        <td style="text-align: center">1</td>
        <td style="text-align: center">2</td>
        <td style="text-align: center">2</td>
    </tr>
    <tr style="text-align: center">
        <td style="text-align: center">Express</td>
        <td style="text-align: center">2</td>
        <td style="text-align: center">1</td>
        <td style="text-align: center">16</td>
        <td style="text-align: center">1</td>
        <td style="text-align: center">2</td>
        <td style="text-align: center">1</td>
    </tr>
    <tr style="text-align: center">
        <td style="text-align: center">Daily Mail</td>
        <td style="text-align: center">2</td>
        <td style="text-align: center">4</td>
        <td style="text-align: center">0</td>
        <td style="text-align: center">0</td>
        <td style="text-align: center">12</td>
        <td style="text-align: center">0</td>
    </tr>
    <tr style="text-align: center">
        <td style="text-align: center">Spectator</td>
        <td style="text-align: center">1</td>
        <td style="text-align: center">0</td>
        <td style="text-align: center">0</td>
        <td style="text-align: center">0</td>
        <td style="text-align: center">0</td>
        <td style="text-align: center">0</td>
    </tr>
    <tr style="text-align: center">
        <td style="text-align: center">The Sun</td>
        <td style="text-align: center">4</td>
        <td style="text-align: center">6</td>
        <td style="text-align: center">44</td>
        <td style="text-align: center">23</td>
        <td style="text-align: center">2</td>
        <td style="text-align: center">14</td>
    </tr>
    <tr style="text-align: center">
        <td style="text-align: center">The Telegraph</td>
        <td style="text-align: center">1</td>
        <td style="text-align: center">3</td>
        <td style="text-align: center">0</td>
        <td style="text-align: center">1</td>
        <td style="text-align: center">3</td>
        <td style="text-align: center">1</td>
    </tr>
    <tr style="text-align: center">
        <td style="text-align: center">The Times</td>
        <td style="text-align: center">0</td>
        <td style="text-align: center">0</td>
        <td style="text-align: center">0</td>
        <td style="text-align: center">0</td>
        <td style="text-align: center">6</td>
        <td style="text-align: center">0</td>
    </tr>
    </tbody>
</table></div>

            <h3>China Spying / Taking Remote Control of EVs</h3>
             <p>Despite the lack of concrete evidence, sensationalist headlines have been circulating, claiming that China is capable of remotely controlling electric 
                vehicles (EVs) or worse, using them as a means for national espionage. While it's understandable that concerns about cybersecurity and data privacy 
                are on the rise, such outlandish claims not only perpetuate unfounded fears but also risk causing unnecessary reputational damage to the EV industry as a whole.</p>

            <p>In reality, the notion of China controlling EVs remotely is nothing short of absurd. The technical feasibility of such an operation would be extremely challenging, 
                if not impossible, considering the complexity of modern vehicle systems and the need for multiple layers of secure authentication. Moreover, any attempt to 
                compromise the security of EVs would likely result in severe economic consequences, including reputational harm and potential legal action.</p>
            <p>This type of fear-mongering can have far-reaching consequences, including:</p>

    <p><b>Misconstrued public perception</b>: Sensationalist headlines can lead people to believe that EVs are inherently compromised or vulnerable to exploitation, which 
    can erode trust in the technology and hinder widespread adoption.</p>

    <p><b>Distrust among stakeholders</b>: Industry leaders, policymakers, and consumers may become wary of investing in or promoting EVs due to unfounded fears about their security.</p>

    <p><b>Inaccurate policy-making</b>: Regulatory bodies may create overly restrictive policies or guidelines based on misinformation, which could stifle innovation and hinder the 
    development of a robust electric vehicle ecosystem.</p>

      <h3>EVs catching Fire. </h3>
             <p>According to data from the UK's Fire Service College, electric vehicle (EV) fires are relatively rare and tend to be less severe than those involving 
                internal combustion engines. Between 2016 and 2020, there were only 12 reported EV fires in the UK, with most occurring when the vehicles were being charged 
                or parked. In contrast, during the same period, there were over 15,000 reported fires involving traditional gasoline-powered vehicles, with many of these resulting 
                from mechanical failures or collisions. While the numbers are starkly different, a key takeaway is that EV fires tend to be contained and less likely to spread to other 
                areas, thanks in part to their battery design and reduced risk of fuel spills.</p>

            <p>According to a report by the UK's Office for National Statistics (ONS) published in October 2022: There were 34 reported electric vehicle fires in the UK 
                in 2021, which translates to approximately 0.02% of all reported fires. The ONS data also showed that most EV fires (81%) occurred while the vehicles were parked or stationary</p>
            
            <p>According to a report by the <a href="https://www.gov.uk/government/statistical-data-sets/fire-statistics-data-tables#non-dwelling-fires-attended">
            UK's Fire and Rescue Service, for FYI 2021/2022: There were 19,146 vehicle fires.</a></p>


            <h3>Negative Comments from Subject Matter experts / Personal Opinions</h3>
                <p>The news media plays a significant role in shaping public opinion, and it is essential to consider how their reporting can influence our perception of electric vehicles. 
                    Unfortunately, a substantial number of headlines from mainstream media outlets, often featuring subject matter experts or expressing personal opinions, are critical or 
                    designed to spread fear, uncertainty, and doubt (FUD) about electric vehicles. These stories may focus on perceived limitations, such as range anxiety or charging 
                    infrastructure challenges, while downplaying the numerous benefits of electric vehicles, including their environmental advantages, cost-effectiveness, and performance.
                    This form of headline was published mainly by the Sun.</p>

                <h3>EV Sales Decline</h3>
                <p>This type of headline follows the cyclical pattern of EV shipments, since nearly all EVs sold in the UK are imported, availability is limited to manufacturing and shipping lead times. 
                    Tesla tends to make up the bulk of EV Shipments and they have an end of quarter push where there is a measurably 
                    large increase in EV registrations in the last month of the quarter, with much lower registrations in the first and second month of the quarter. This data is published by the SMMT
                and used by publications as justification for this type of headline. So it should come as no surprise that this type of headline peaks in October, November, and August.</p>

                <h3>Infrastructure Challenges:</h3>
                <p>Articles frequently reported on challenges related to EV infrastructure, particularly the difficulties in
                    obtaining planning permission for public charging stations. </p>
                <p>As of recent data:</p>

                <ul><li>In the United States, it's estimated that around 80-85% of EV charging occurs at home. This percentage is high because many EV owners prefer the convenience and cost-effectiveness of home charging.</li>

                <li>In Europe, similar trends are observed, with about 70-80% of EV owners charging at home. The availability of home charging options, such as garages or driveways, significantly influences this percentage.</li>

                <li>In the UK, estimates suggest that around 60-70% of EV drivers charge at home. The number can vary based on factors such as access to off-street parking and residential charging solutions.</li>

                <li>The exact percentage can vary, but generally, around 70-85% of EV drivers charge their vehicles at home, making it the most common charging method.</li></ul>

                <h3>General Warnings:</h3>
                <p>Headlines issuing "general warning's" to EV drivers, which lacked substantial evidence and context.</p>

              <p>The Sun was very noticeable in the use of Subject Matter Expert, Personal Experience, and General Warning style headlines. These were often republished throughout the sample period. 
                    See <a href="04-ev-headline-analysis-common-themes.php#sme">"Common Themes - Subject Matter Expert"</a> section of this report for examples. </p>

                    <ul>
                        <li>China Spying on / Controlling EVs - These headlines were prominent the month before peak sales (August) across a number of publications with the same or similar 
                            themes : The Express, The Sun, The Telegraph, The Spectator, The Express and The Mail all featured these types of headlines during August 2023.</li>
                        <li><b>"Personal Experience" headlines</b> - 23 of 26 of this type of headline were from The Sun</li>
                        <li><b>"Subject Matter Experts" headlines (I'm a .....)</b> - 44 out of 66 unique headlines of this type were from The Sun, with the remaining from The Express</li>
                        <li><b>General Warning type headlines</b> - 14 out of 18 unique headlines of this type were from The Sun, with the remaining from the BBC, The Express and the Telegraph, 
                </ul>             

        <h2>Statistical Analysis</h2>
            <p>Statistical analysis was carried out on the time-series data to determine the frequency and distribution of the headlines across different publications, asking the 
            questions : What was the duration of the headline? Were headlines republished at a later date?</p>

            <p>With the growing body of evidence against the majority of publishers acting neutrally towards Electric Vehicles, it would be simple to draw a conclusion from the 
                visualisation that EV headlines are retained in search results for a longer period than general news, however it would not be fair to 
                compare the statistics.</p>
                <p>It must be recognised that EV headlines (which are lesser in volume) would be visible for longer than general news headlines. General news 
                    headlines are produced at a higher volume and therefore churn off the search results faster than EV headlines. 
                    Therefore no reasonable conclusion that can be draw from this data.            </p>

                <a href="../img/headlines-comparison-days-in-results.png"><img style="width:75%;" src="../img/headlines-comparison-days-in-results.png"> </a>

        <h3>Uniqueness</h3> 
        <p>How unique were the headlines, were they duplicated across different publications? </p>
        <p></p>There was no noticeable duplication in headlines across publications, what was common were the themes as discussed above.</p>
            
       

        <h1 id="conclusion">Conclusion:</h1>
        <p>The project's findings indicate a skew in the reporting on electric vehicles by major news publications.</p>
            <p>The headlines often emphasize negative aspects and potential pitfalls of EV technology, contributing to a
            biased perception. This underscores the importance of addressing misinformation and providing balanced,
            data-driven reporting to accurately inform the public about the advancements and challenges in the EV
            industry.</p>
            <p>By systematically analysing the sentiment and themes in media coverage, this project provides valuable
                insights into how electric vehicles are portrayed in the news, highlighting the need for more balanced and
                evidence-based reporting.</p>
                
                <h3 id="future-work">Future Work:</h3>
                <ul>
                    <li>Broader Analysis: Expand the analysis to include more publications and longer time periods to further
                        validate the findings.</li>
                    <li>Deeper Sentiment Analysis: Enhance the sentiment analysis models using advanced NLP techniques and
                        larger datasets.</li>
                    <li>Impact Assessment: Study the impact of media bias on public opinion and policy-making regarding electric
                        vehicles.</li>
                        <li>Topic Modelling using LongformerForSequenceClassification and entity recognition analysis using biobert/biobert-v1.2/</li>
                </ul>

                <h3>How the media messages around Electric Vehicles</h3>
                It is quite clear that there is a significant bias for certain publishers. MediaFact analysis of the titles also indicates that in 
                nearly all instances where a publication takes a largely negative position towards electric vehicles, these are classified by MediaFact
                as Right Wing or Conservative owned or report news with a conservative bias.

                <h3>Media Bias Fact Check Ratings</h3>
                You can find more details of the MBFC rating compared to the analysis results in <a href="99-ev-headline-analysis-mediabiasfactcheck.php">The Media Bias Fact Check</a>  section of the report.

                <h3>Examples of the Anti EV headlines by Publication</h3>
                <p>You can find examples of the anti-ev headlines by publication : </p>


                <div >
                <table  style="width:100%; margin: 0 auto; border: 0 0 0 0">                        
                    <thead><tr>
                    <td style="width:160px; "></td>
                    <td style="padding-left:20px"></td>
                    <td style="text-align: center;  padding-left:20px"></td>

                    <td></td>
                    </tr></thead>
                    <tr><td >
                        <p><a href="08-ev-headline-analysis-publication-headlines.php?publication=bbc"><img src=../icons/bbc-150.png></a></p>
                    </td>
                    <td></td>
                    <td><a href="08-ev-headline-analysis-publication-headlines.php?publication=bbc">Scraped Headlines</a></td>
                    <td><a href="99-ev-headline-analysis-mediabiasfactcheck.php#bbc">Media Bias Fact Check Comparison</a></td>
                    </tr>
                    
                    <tr>
                        <td >
                        <p><a href="08-ev-headline-analysis-publication-headlines.php?publication=express"><img src=../icons/express-150.png></a></p>
                        </td>
                        <td>
                        </td>
                        <td><a href="08-ev-headline-analysis-publication-headlines.php?publication=express">Scraped Headlines</a></td>
                        <td><a href="99-ev-headline-analysis-mediabiasfactcheck.php#the-express">Media Bias Fact Check Comparison</a></td>
                    </tr>
                        
                    <tr>
                        <td >
                        <p><a href="08-ev-headline-analysis-publication-headlines.php?publication=the-daily-mail"><img src=../icons/the-daily-mail-150.png></a></p>
                        </td>
                        <td></td>
                        <td><a href="08-ev-headline-analysis-publication-headlines.php?publication=the-daily-mail">Scraped Headlines</a></td>
                        <td><a href="99-ev-headline-analysis-mediabiasfactcheck.php#the-daily-mail">Media Bias Fact Check Comparison</a></td>
                    </tr>
                    
                    <tr>
                        <td >
                        <p><a href="08-ev-headline-analysis-publication-headlines.php?publication=the-daily-star"><img src=../icons/the-daily-star-150.png></a></p>
                        </td>
                        <td></td>
                        <td><a href="08-ev-headline-analysis-publication-headlines.php?publication=the-daily-star">Scraped Headlines</a></td>
                        <td><a href="99-ev-headline-analysis-mediabiasfactcheck.php#the-daily-star">Media Bias Fact Check Comparison</a></td>
                    </tr>
                    
                    <tr>
                        <td >
                        <p><a href="08-ev-headline-analysis-publication-headlines.php?publication=the-economist"><img src=../icons/the-economist-150.png></a></p>
                    </td>
                    <td></td>
                        <td><a href="08-ev-headline-analysis-publication-headlines.php?publication=the-economist">Scraped Headlines</a></td>
                        <td><a href="99-ev-headline-analysis-mediabiasfactcheck.php#the-economist">Media Bias Fact Check Comparison</a></td>
                    </tr>

                    <tr>
                        <td >
                        <p><a href="08-ev-headline-analysis-publication-headlines.php?publication=the-independent"><img src=../icons/the-independent-150.png></a></p>
                        </td>
                        <td></td>
                        <td><a href="08-ev-headline-analysis-publication-headlines.php?publication=the-independent">Scraped Headlines</a></td>
                        <td><a href="99-ev-headline-analysis-mediabiasfactcheck.php#the-independent">Media Bias Fact Check Comparison</a></td>
                    </tr>
                    <tr>
                        <td >
                        <p><a href="08-ev-headline-analysis-publication-headlines.php?publication=the-spectator"><img src=../icons/the-spectator-150.png></a></p>
                    </td>
                    <td></td>
                    <td>
                        <a href="08-ev-headline-analysis-publication-headlines.php?publication=the-spectator">Scraped Headlines</a></td>
                        <td><a href="99-ev-headline-analysis-mediabiasfactcheck.php#the-spectator">Media Bias Fact Check Comparison</a></td>
                </tr>
                    <tr>
                        <td >
                        <p><a href="08-ev-headline-analysis-publication-headlines.php?publication=the-sun"><img src=../icons/the-sun-150.png></a></p>
                    </td>
                    <td></td>
                    <td>
                        <a href="08-ev-headline-analysis-publication-headlines.php?publication=the-sun">Scraped Headlines</a></td>
                        <td><a href="99-ev-headline-analysis-mediabiasfactcheck.php#the-sun">Media Bias Fact Check Comparison</a></td>
                </tr>
                    <tr>
                        <td >
                        <p><a href="08-ev-headline-analysis-publication-headlines.php?publication=the-telegraph"><img src=../icons/the-telegraph-150.png></a></p>
                        </td>
                        <td></td>
                    <td>
                        <a href="08-ev-headline-analysis-publication-headlines.php?publication=the-telegraph">Scraped Headlines</a></td>
                        <td><a href="99-ev-headline-analysis-mediabiasfactcheck.php#the-telegraph">Media Bias Fact Check Comparison</a></td>
                    </tr>
                    <tr><td >
                    <p><a href="08-ev-headline-analysis-publication-headlines.php?publication=the-times"><img src=../icons/the-times-150.png></a></p>
                    <td></td>
                    <td>
                        <a href="08-ev-headline-analysis-publication-headlines.php?publication=the-times">Scraped Headlines</a></td>
                        <td><a href="99-ev-headline-analysis-mediabiasfactcheck.php#the-times">Media Bias Fact Check Comparison</a></td>
                    </td></tr>
                </table>






                <?php include 'html-inc/footer.php'; ?>
                <script src="/js/coder.min.6ae284be93d2d19dad1f02b0039508d9aab3180a12a06dcc71b0b0ef7825a317.js"></script> 

   </div>
</body>
</html>