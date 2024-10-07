<?php include 'html-inc/header.php'; ?>

    <script src="/scripts/ev-headlines.js"></script>

    <script>hljs.highlightAll();</script>
    <style>
        .dataframe * {
            border: none !important;
            border-collapse: collapse !important;
        }

    </style>

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
        

        <div id="JumptoSection">
            <h2>Jump to section</h2>
            <div class="countries">
                <div id="JumptoSection">
                    <select onchange="javascript:scrollToAnchor(this.value, 100);">
                    <option value="#">Select to jump to section ....</option>

                        <option value="mbfc">About Media Bias Fact Check</option>
                        <option value="the-spectator">The Spectator</option>
                        <option value="the-sun">The Sun</option>
                        <option value="the-telegraph">The Telegraph</option>
                        <option value="the-daily-star">The Daily Star</option>
                        <option value="the-express">The Daily Express </option>
                        <option value="the-times">The Times / Sunday Times</option>
                        <option value="bbc">The BBC</option>
                        <option value="the-daily-mail">The Daily Mail</option>
                        <option value="the-economist">The Economist</option>
                        <option value="the-independent">The Independent</option>
                    </select>
                </div>
            </div>
        </div>


        <h1 id="mbfc">Media Bias Fact Check</h1>
        <p class='last-updated'><?php include '../tables/last-updated.php' ?></p>


        <h3>About Media Bias / Fact Check</h3>

        <p>Founded in 2015, Media Bias/Fact Check (MBFC) is an independent website that has promoted awareness of media
            bias and misinformation by rating the bias, factual accuracy, and credibility of media sources, large and
            small.
            Media Bias/Fact Check relies on human evaluators to determine the bias of media sources and the level of
            overall
            factual reporting through a combination of objective measures and subjective analysis using our stated
            methodology.</p>

        <p>Dave Van Zandt is the founder and primary editor for sources. He is assisted by a collective of volunteers
            and paid
            contractors who provide research for many sources listed on these pages. Finally, MBFC also provides
            occasional fact-checks
            and original articles on media bias and publishes daily curated fact-checks from around the world.</p>

        <h3>Mission</h3>

        <p>The mission of MBFC is to educate the public on media bias and deceptive news practices. We inspire action
            and a rejection of
            overtly biased media resulting in a return to an era of straightforward fact-based news reporting. Our
            purpose is to give
            people the resources and tools needed to understand the bias and credibility of the sources they consume.
        </p>

        <h3>The AI Era (Not at MBFC)</h3>

        <p>The AI era is here. It is everywhere. Most likely, the last news article you read was partially or maybe
            fully generated with AI.
            Please note that MBFC does not use AI to generate our bias and credibility ratings. We believe bias is
            unique to humans and that
            only humans can accurately determine bias. While AI is a powerful tool with great potential, it cannot
            replicate a human's ability
            to read between the lines and interpret intent. Sites that claim to use AI to rate bias should be
            double-checked with a human-based evaluator.</p>

        <h3>Media Bias Analysis of EV Headlines</h3>

        <p></p>For the data used in this analysis, the following publications were included in the analysis, Media Bias
        Fact Check ratings of the publication
        is included to help in understanding the results of this analysis in the context of the overall bias
        demonstrated by each publication.

        <p>For more information on Media Bias Fact Check please visit their website : <a
                href="https://mediabiasfactcheck.com/about/">Media Bias Fact Check Website</a></p>

                <h2>Top Ten UK Newspapers</h2>

<div class="dataframe" >
<table class="dataframe" style="width:100%; margin: 0 auto; padding: 5px">
    <thead>
    <tr>
        <th>Publication</th>
        <th>Print Run</th>
        <th>Web Site Visitors</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>The Sun</td>
        <td>Approximately 925,000</td>
        <td>23.9 million </td>
    </tr>
    <tr>
        <td>Metro</td>
        <td>Around 1.2 million copies daily, making it the most widely circulated.</td>
        <td>16.1 million </td>
    </tr>
    <tr>
        <td>Daily Mail</td>
        <td>About 755,000</td>
        <td>23 million </td>
    </tr>
    <tr>
        <td>The Daily Telegraph</td>
        <td>Roughly 385,000</td>
        <td>18 million </td>
    </tr>
    <tr>
        <td>The Sunday Times</td>
        <td>1.5 million (weekly)</td>
        <td>15.1 million </td>
    </tr>
    <tr>
        <td>The Guardian</td>
        <td>Around 140,000</td>
        <td>29.1 million </td>
    </tr>
    <tr>
        <td>The Times</td>
        <td>Approximately 417,000</td>
        <td>15 million </td>
    </tr>
    <tr>
        <td>Daily Express</td>
        <td>About 238,000</td>
        <td>14.8 million </td>
    </tr>
    <tr>
        <td>Financial Times</td>
        <td>Around 142,000</td>
        <td>Data not specified, but notable global reach.</td>
    </tr>
    <tr>
        <td>Daily Star</td>
        <td>Around 130,000</td>
        <td>9.7 million </td>
    </tr>
    <tr>
        <td>The Spectator</td>
        <td>Around 120,000</td>
        <td>3.5 million </td>
    </tr></tbody>
</table>
</div>
<br><a href="#" class="gototop">Top</a>

<p>These figures highlight both the print and digital influence of these newspapers, showing the evolving landscape 
    of media consumption in the UK. The data reflects a snapshot from mid-2024.</p>

    <h2>Comparison of MBFC's Publication Bias rating compared to the hand tuned Bias classification of headlines for Electric Vehicles</h2>

    <p>The table below presents the Factual Reporting Classification and overall Bias Rating from The
        <a href="https://mediabiasfactcheck.com/about/">Media Bias Fact Check Website</a> alongside the hand tuned 
        bias rating from this report.
    </p>
    <!-- ========================================================================================================================================= -->
    <p id="the-spectator"></p>

    <div class="dataframe" >


            <table style="width:100%; margin: 0 auto; padding: 2px; ">
                <thead>
                    <tr>
                        <th style="width:10%"><h3>Publication</h3></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Factual Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Rating Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>EV Headline Analysis Summary</h3></th>
                    </tr>
                </thead>
                <tbody>


                    <tr >
                        <!-- Publisher Logo -->
                        <td style="background-color: #ffffff" >
                            <img src='../icons/the-spectator-150.png'>
                        </td>

                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- MBFC Factual Reporting -->
                        <td style="text-align: center; background-color: #ffffff">
                            <a href='https://mediabiasfactcheck.com/the-spectator-uk/' target="_blank"> 
                            <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2020/02/MBFCMostlyFactual.png?w=356&ssl=1">
                        </a></td>
                        
                        <!-- Spacer -->
                        <td style="width:1px"></td>
                        
                        <!-- MBFC Rating -->
                        <td style="background-color: #ffffff">
                            <a href="https://mediabiasfactcheck.com/the-spectator-uk/" target="_blank">
                                <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2016/12/rightcenter011.png?w=600&ssl=1"></a>
                        </td>

                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- EV Headlines Rating -->
                        <td style="background-color: #ffffff"><a href="../img/the-spectator-rating.png"><img src="../img/the-spectator-rating.png"></a>
                        </td>
                    </tr>
                    </tbody></table>
                </div>
                <br><a href="#" class="gototop">Top</a>

                    <!-- ========================================================================================================================================= -->
                    <p id="the-sun"></p>
                    <!-- <div class="datatable-container" > -->
            <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
                <thead>
                    <tr>
                        <th style="width:10%"><h3>Publication</h3></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Factual Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Rating Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>EV Headline Analysis Summary</h3></th>
                    </tr>
                </thead>
                <tbody>


                    <tr>
                        <!-- Publisher Logo -->
                        <td style="background-color: #ffffff"><img src='../icons/the-sun-150.png'></td>

                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- MBFC Factual Reporting -->
                        <td style="text-align: center; background-color: #ffffff">
                            <a href='https://mediabiasfactcheck.com/the-sun/' target="_blank">
                            <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2020/02/MBFCMixed.png?w=355&ssl=1"></a>
                        </td>

                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- MBFC Rating -->
                        <td style="background-color: #ffffff">
                        <a href="https://mediabiasfactcheck.com/the-sun/" target="_blank">
                        <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2016/12/right051.png?w=600&ssl=1"></a>
                        
                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- EV Headlines Rating -->
                        <td style="background-color: #ffffff"><a href="../img/the-sun-rating.png"><img src="../img/the-sun-rating.png"></a></td>
                    </tr>
                    </tbody></table>
                <!-- </div> -->
                <br><a href="#" class="gototop">Top</a>

                    <!-- ========================================================================================================================================= -->
                    <p id="the-telegraph"></p>
                    <!-- <div class="datatable-container" > -->
            <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
                <thead>
                    <tr>
                        <th style="width:10%"><h3>Publication</h3></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Factual Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Rating Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>EV Headline Analysis Summary</h3></th>
                    </tr>
                </thead>
                <tbody>

                    <tr >
                        <!-- Publisher Logo -->
                        <td style="background-color: #ffffff"><img src='../icons/the-telegraph-150.png'></td>

                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- MBFC Factual Reporting -->
                        <td style="text-align: center; background-color: #ffffff">
                            <a href='https://mediabiasfactcheck.com/daily-telegraph' target="_blank">
                        <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2020/02/MBFCMixed.png?w=355&ssl=1"></a>
                        </td>

                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- MBFC Rating -->
                        <td style="text-align: center; background-color: #ffffff">
                            <a href='https://mediabiasfactcheck.com/daily-telegraph/' target="_blank">
                            <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2016/12/right061.png?w=600&ssl=1"></a></td>

                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- EV Headlines Rating -->
                        <td style="background-color: #ffffff"><a href="../img/the-telegraph-rating.png"><img src="../img/the-telegraph-rating.png"></a>
                        </td>
                    </tr>

                    </tbody></table>
                <!-- </div> -->
                <br><a href="#" class="gototop">Top</a>

                    <!-- ========================================================================================================================================= -->
                    <p id="the-daily-star"></p>
                    <!-- <div class="datatable-container" > -->
            <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
                <thead>
                    <tr>
                        <th style="width:10%"><h3>Publication</h3></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Factual Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Rating Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>EV Headline Analysis Summary</h3></th>
                    </tr>
                </thead>
                <tbody>


                        <tr >
                        <!-- Publisher Logo -->
                        <td style="background-color: #ffffff"> <img src='../icons/the-daily-star-150.png'></td>

                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- MBFC Factual Reporting -->
                        <td style="text-align: center; background-color: #ffffff">
                            <a href='https://mediabiasfactcheck.com/daily-star-uk/' target="_blank">
                            <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2020/02/MBFCMixed.png?w=355&ssl=1"> </a></td>
                        
                        <!-- Spacer -->
                        <td style="width:1px"></td>
                        
                        <!-- MBFC Rating -->
                        <td style="background-color: #ffffff">
                            <a href="https://mediabiasfactcheck.com/daily-star-uk/" target="_blank">
                                <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2016/12/rightcenter051.png?w=600&ssl=1"></a>
                        </td>
                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- EV Headlines Rating -->

                        <td style="background-color: #ffffff"><a href="../img/the-daily-star-rating.png"><img src="../img/the-daily-star-rating.png"></a>
                        </td>
                    </tr>                    
                    </tbody></table>
                <!-- </div> -->
                <br><a href="#" class="gototop">Top</a>

                    <!-- ========================================================================================================================================= -->
                    <p id="the-express"></p>
                    <!-- <div class="datatable-container" > -->
            <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
                <thead>
                    <tr>
                        <th style="width:10%"><h3>Publication</h3></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Factual Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Rating Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>EV Headline Analysis Summary</h3></th>
                    </tr>
                </thead>
                <tbody>

                        <tr >

                        <!-- Publisher Logo -->
                        <td  style="background-color: #ffffff">
                            <img src='../icons/express-150.png'>
                        </td>

                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- MBFC Factual Reporting -->
                        <td style="text-align: center; background-color: #ffffff">
                            <a href='https://mediabiasfactcheck.com/daily-express/' target="_blank">
                                <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2020/02/MBFCMixed.png?w=355&ssl=1">
                            </a>
                        </td>
                        <!-- Spacer -->
                        <td style="width:1px"></td>
                        <!-- MBFC Rating -->
                        <td style="background-color: #ffffff">
                            <a href="https://mediabiasfactcheck.com/daily-express/" target="_blank">
                                <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2016/12/leftcenter11.png?w=600&ssl=1"></a>
                        </td>
                        <!-- Spacer -->
                        <td style="width:1px"></td>
                        <!-- EV Headlines Rating -->

                        <td style="background-color: #ffffff"><a href="../img/express-rating.png"><img
                                    src="../img/express-rating.png"></a></td>
                    </tr>
                    </tbody></table>
                <!-- </div> -->
                <br><a href="#" class="gototop">Top</a>

                    <!-- ========================================================================================================================================= -->
                    <p id="the-times"></p>
                    <!-- <div class="datatable-container" > -->
            <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
                <thead>
                    <tr>
                        <th style="width:10%"><h3>Publication</h3></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Factual Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Rating Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>EV Headline Analysis Summary</h3></th>
                    </tr>
                </thead>
                <tbody>


                    <tr>
                        <!-- Publisher Logo -->
                        <td style="background-color: #ffffff" >
                            <img src='../icons/the-times-150.png'></td>

                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- MBFC Factual Reporting -->
                        <td style="text-align: center; background-color: #ffffff">
                            <a href='https://mediabiasfactcheck.com/the-times-of-london/' target="_blank"> 
                            <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2020/02/MBFCHigh.png?w=357&ssl=1"></a>
                        </td>

                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- MBFC Rating -->
                        <td style="text-align: center; background-color: #ffffff">
                            <a href='https://mediabiasfactcheck.com/the-times-of-london/' target="_blank">
                            <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2016/12/rightcenter061.png?w=600&ssl=1"></a>
                        </td>
                        
                        <!-- Spacer -->
                        <td style="width:1px"></td>
                        
                        <!-- EV Headlines Rating -->
                        <td><a href="../img/the-times-rating.png"><img src="../img/the-times-rating.png"></a></td>
                    </tr>
                    </tbody></table>
                <!-- </div> -->
                <br><a href="#" class="gototop">Top</a>

                    <!-- ========================================================================================================================================= -->
                    <p id="bbc"></p>
                    <!-- <div class="datatable-container" > -->
            <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
                <thead>
                    <tr>
                        <th style="width:10%"><h3>Publication</h3></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Factual Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Rating Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>EV Headline Analysis Summary</h3></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <!-- Publisher Logo -->
                        <td  style="background-color: #ffffff">
                            <img src='../icons/bbc-150.png'>
                        </td>

                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- MBFC Factual Reporting -->
                        <td style="text-align: center; background-color: #ffffff">
                            <a href='https://mediabiasfactcheck.com/bbc/' target="_blank">
                                <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2020/02/MBFCHigh.png?w=357&ssl=1"></a>
                        </td>
                        
                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- MBFC Rating -->
                        <td style="background-color: #ffffff">
                            <a href="https://mediabiasfactcheck.com/bbc/" target="_blank">
                                <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2016/12/leftcenter11.png?w=600&ssl=1"></a>
                        </td>

                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- EV Headlines Rating -->
                        <td style="background-color: #ffffff">
                            <a href="../img/bbc-rating.png"><img src="../img/bbc-rating.png"></a>
                        </td>
                    </tr>
                    <tr>
                    </tbody></table>
                <!-- </div> -->
                <br><a href="#" class="gototop">Top</a>
                    
                    <!-- ========================================================================================================================================= -->
                    <p id="the-daily-mail"></p>
                    <!-- <div class="datatable-container" > -->
            <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
                <thead>
                    <tr>
                        <th style="width:10%"><h3>Publication</h3></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Factual Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Rating Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>EV Headline Analysis Summary</h3></th>
                    </tr>
                </thead>
                <tbody>


                    <tr>
                        <!-- Publisher Logo -->
                        <td  style="background-color: #ffffff" >
                            <img src='../icons/the-daily-mail-150.png'>
                        </td>

                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- MBFC Factual Reporting -->

                        <td style="text-align: center; background-color: #ffffff">
                            <a href='https://mediabiasfactcheck.com/daily-mail/' target="_blank">
                            <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2020/02/MBFCLow.png?w=357&ssl=1"></a>
                        </td>
                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- MBFC Rating -->
                        <td style="background-color: #ffffff">
                            <a href="https://mediabiasfactcheck.com/daily-mail/" target="_blank">
                                <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2016/12/right051.png?w=600&ssl=1"></a>
                        </td>
                        
                        <!-- Spacer -->
                        <td style="width:1px"></td>
                        
                        <!-- EV Headlines Rating -->
                        <td style="background-color: #ffffff"><a href="../img/the-daily-mail-rating.png"><img src="../img/the-daily-mail-rating.png"></a>
                        </td>
                    </tr>
                  
                    </tbody></table>
                <!-- </div> -->
                <br><a href="#" class="gototop">Top</a>

                    <!-- ========================================================================================================================================= -->
                     <p id="the-economist"></p>
                    <!-- <div class="datatable-container" > -->
            <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
                <thead>
                    <tr>
                        <th style="width:10%"><h3>Publication</h3></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Factual Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Rating Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>EV Headline Analysis Summary</h3></th>
                    </tr>
                </thead>
                <tbody>




                    <tr>
                        <!-- Publisher Logo -->
                        <td style="background-color: #ffffff">
                            <img src='../icons/the-economist-150.png'>
                        </td>

                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- MBFC Factual Reporting -->
                        <td style="text-align: center; background-color: #ffffff">
                            <a href='https://mediabiasfactcheck.com/the-economist/' target="_blank">
                            <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2020/02/MBFCHigh.png?w=357&ssl=1"></a>
                        </td>
                        
                        <!-- Spacer -->
                        <td style="width:1px"></td>
                        
                        <!-- MBFC Rating -->
                        <td style="background-color: #ffffff">
                            <a href="https://mediabiasfactcheck.com/the-economist/" target="_blank">
                        <img  src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2016/12/leastbiased071.png?w=600&ssl=1"></a>
                        </td>
                        
                        <!-- Spacer -->
                        <td style="width:1px"></td>
                        
                        <!-- EV Headlines Rating -->
                        <td style="background-color: #ffffff">
                            <a href="../img/the-economist-rating.png"><img src="../img/the-economist-rating.png"></a>
                        </td>
                    </tr>
                    </tbody></table>
                <!-- </div> -->
                <br><a href="#" class="gototop">Top</a>

                    <!-- ========================================================================================================================================= -->
                    <p id="the-independent"></p>
                    <!-- <div class="datatable-container" > -->
            <table class="dataframe datatable" style="width:100%; margin: 0 auto; padding: 5px">
                <thead>
                    <tr>
                        <th style="width:10%"><h3>Publication</h3></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Factual Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>MBFC Rating Summary</h></th>
                        <th style="width:1px"></th>
                        <th style="width:30%"><h3>EV Headline Analysis Summary</h3></th>
                    </tr>
                </thead>
                <tbody>

                    

                    <tr >
                        <!-- Publisher Logo -->
                        <td style="background-color: #ffffff">
                            <img src='../icons/the-independent-150.png'>
                        </td>

                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- MBFC Factual Reporting -->
                        <td style="text-align: center; background-color: #ffffff">
                            <a href='https://mediabiasfactcheck.com/the-independent/' target="_blank">
                                <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2020/02/MBFCMixed.png?w=355&ssl=1">
                            </a></td>
                        
                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- MBFC Rating -->
                        <td style="background-color: #ffffff">
                            <a href="https://mediabiasfactcheck.com/the-independent/" target="_blank">
                                <img src="https://i0.wp.com/mediabiasfactcheck.com/wp-content/uploads/2016/12/leftcenter04.png?w=600&ssl=1"></a>
                        </td>
                        
                        <!-- Spacer -->
                        <td style="width:1px"></td>

                        <!-- EV Headlines Rating -->
                        <td style="background-color: #ffffff"><a href="../img/the-independent-rating.png">
                            <img src="../img/the-independent-rating.png"></a></td>
                    </tr>

</tbody></table>
<!-- </div> -->
<br><a href="#" class="gototop">Top</a>

                    

                    
                </tbody>
            </table>
        </div>


        <?php include 'html-inc/footer.php'; ?>
        <script src="/js/coder.min.6ae284be93d2d19dad1f02b0039508d9aab3180a12a06dcc71b0b0ef7825a317.js"></script> 

    </div>
</body>

</html>