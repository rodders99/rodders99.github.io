<?php include 'html-inc/header.php'; ?>



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
            <?php include 'menu-ev-headlines.php'; ?>
        </div>
        
        <h1>Analysing Mainstream Media Headlines for Electric Vehicles</h1>
        

        <div id="JumptoSection">
            <h2>Jump to section</h2>
            <div class="countries">
                <div id="JumptoSection">
                <select onchange="javascript:scrollToAnchor(this.value, 100);">
                <option value="#">Select to jump to section ....</option>

                    <option value="abstract">Abstract</option>
                    <option value="intro">Introduction</option>
                    <option value="objective">Project Objective</option>
                    <option value="methodology">Methodology</option>
                    <option value="data-collection">Data Acquisition</option>
                    <option value="observations">Observations</option>
                    <option value="eda">Exploratory Data Analysis</option>
                    <option value="feature-engineering">Feature Engineering </option>
                    <option value="sentiment-analysis">Sentiment Analysis Overview</option>
                    <option value="sentiment-results">Sentiment Results</option>
                    </select>
                </div>
            </div>
        </div>
<br>
        <p><img src="/projects/ev-headlines/img/damn-lies.png"></p>
        <p class='last-updated'><?php include '../tables/last-updated.php' ?></p>
        

<h1 id="abstract">Abstract</h1>
    <p>News media play an indispensable role in disseminating information and shaping public perception during times of crisis, through technological transitions and more. 
    The media plays a crucial role in shaping public opinion, and headlines are often the first point of contact for readers. However, research has shown that many people 
    form their opinions based on the headline alone, without reading the full article <a href="https://arxiv.org/pdf/1503.07921v2">(Kwak et al., 2010 - Breaking the News: First Impressions 
        Matter on Online News)</a>. This phenomenon is often referred to as 'headline-reading,' 
    where individuals react to the attention-grabbing title rather than taking the time to read the entire piece. As a result, headlines have become incredibly influential 
    in shaping public perception and can significantly impact how people think about and respond to various topics.</p>

    <p>In the context of electric vehicles, this is particularly concerning. Headlines that emphasise negative aspects, such as range anxiety or high costs, may lead readers 
        to form a biased view of EVs without considering the benefits they offer. Conversely, headlines that highlight the environmental advantages of EVs may inspire readers 
        to adopt more sustainable transportation options.</p>

    <p>Headlines have a ripple effect, shaping not only individual opinions but also policy decisions and business strategies.. For instance, 
        news coverage that focuses on the limitations of EV charging infrastructure may lead policymakers to prioritize investment in traditional fossil fuel-based energy 
        sources, rather than exploring alternative solutions. Similarly, headlines that tout the benefits of electric vehicles may inspire businesses to invest in EV-related 
        technologies, driving innovation and job creation.</p>

        <p>A study by Dr. Robert Cialdini (1993) found that using emotional headlines can significantly impact public perception. He demonstrated that emotionally charged 
            headlines can increase people's willingness to take action.</p>

            <div class="block_quote-wrapper">
            <div class="block_quote">
                <h1>
                The most effective appeals are those that tap into the 
                <span style="color:#ffffff">deep-seated emotions</span> of the audience.

                </h1>
                <h4>&mdash;Cialdini, R. B. (1993)<br><em>Influence: The Psychology of Persuasion. Morrow.</em></h4>
            </div>
            </div><br>

    <p>This study integrates three key analytical approaches: sentiment analysis, sentiment bias evaluation, and time-series analysis. I drew upon a massive dataset of 
        1.9 million headlines, collected over six months from top UK news sources, to inform the analysis and shed light on the electric vehicle reporting landscape.</p>

        <p>Our analysis reveals a staggering finding: an alarming 50% of electric vehicle headlines are negative, highlighting the need for balanced reporting and greater 
            public understanding. The study identifies that certain notable publishers 
        making extensive use of unsubstantiated claims and concerns to promote this negative rhetoric. This is further exacerbated by the volume of new anti EV 
        headlines increasing significantly during periods of peak sales for new vehicles, when readers would potentially be considering the purchase of a new vehicle.</p>

    <p>In isolation a news media outlet promoting a negative story about electric vehicles would not be something worthy of note. Our analysis exposes a disheartening 
        truth: despite the urgent need for accurate information, many news outlets are perpetuating myths and misconceptions about electric vehicles, leaving 
        consumers in the dark.</p>

    <p>A study by Dr. Philip E. Tetlock (1985) explored how connotative headlines can influence public perception. He found that using connotative language in 
        headlines can shape people's attitudes and beliefs.</p>

        <div class="block_quote-wrapper">
            <div class="block_quote">
                <h1>
                The power of words is not just a metaphor; 
                <span style="color:#ffffff">it's a reality</span>.
                The way we frame <span style="color:#ffffff">an issue</span>
                can <span style="color:#ffffff">shape the way people think about it.</span>

                </h1>
                <h4>&mdash;<a href="https://en.wikipedia.org/wiki/Philip_E._Tetlock">Dr. Philip E. Tetlock</a><br><em>Influence: The Psychology of Persuasion. Morrow.</em></h4>
            </div>
            </div><br>


    <p>This report classifies Headline Sentiment applied using Natural Language Processing, Large Language Models, the Chat GPT commercial LLM and hand tuned sentiment 
        classification to develop a comprehensive analysis of the media landscape in the UK and how electric vehicles are portrayed in their headlines. 
    </p>
    <p>As we embark on this journey of discovery, we can't help but ask: what does it take to create a more informed and environmentally conscious society? this study offers 
        some answers.</p>
        <br><a href="#" class="gototop">Top</a>

        <h1 id="intro">Project Introduction</h1>
        <p>The goal of this research is to investigate how the media portrays electric vehicles and what kinds of messages they convey to readers. Specifically, 
            I aim to analyse the themes, sentiment biases, and patterns in electric vehicle-related headlines across different publications.</p>

        <h2>Research Questions</h2>
        <p>Investigate how the media portrays electric vehicles and what kinds of messages they convey to readers?</p>

        <h4>What are the common themes of headlines found in the data across different publications, and what is the sentiment bias (negative, positive, or neutral) 
            towards electric vehicles in these headlines?</h4>
        <ol>
            <li>What are the most common themes or topics covered in EV-related headlines across different publications?</li>
            <li>Are there any notable differences in the tone or sentiment of EV headlines between mainstream newspapers and online news sources?</li>
            <li>Do certain types of publications (e.g. national vs local, liberal vs conservative) tend to have more positive or negative sentiments towards electric vehicles?</li>
            <li>Is there a correlation between the popularity or reach of a publication and its sentiment bias towards electric vehicles?</li>
            <li>Are there any specific events or developments that appear to influence the tone or content of EV-related headlines?</li>
        </ol>


        <h4>How do electric vehicle-related headlines persist in online search results compared to general news headlines, and what does 
            this persistence reveal about the media's attention span and public interest in EVs?</h4>
        <ol>
            <li>How much attention electric vehicle-related news receives online.</li>
            <li>Whether there is a bias towards promoting or sensationalizing EV news.</li>
            <li>What factors contribute to the longevity of an EV headline's presence in search results.</li>
        </ol>
        
            <h4>What patterns or correlations exist between the volume and timing of electric vehicle-related headlines, and how do these patterns relate to market 
            trends or consumer behavior?</h4>
            <ol>
                <li>Is there a relationship between the frequency of EV-related headlines and market trends or consumer behavior?</li>
                <li>Are the headlines themselves influencing public perception or purchasing decisions?</li>
                <li>What insights can be gained by analysing the timing and volume of EV headlines alongside market data?</li>
            </ol>
            <h4>What is the sentiment bias (positive, negative, or neutral) towards electric vehicles in mainstream media headlines, and what do these biases 
                reveal about public perception, industry trends, or societal attitudes towards EVs?</h4>

                <ol>
                    <li>Categorising headlines as positive, negative, or neutral based on their content.</li>
                    <li>Analysing the frequency and distribution of these biases across different media sources, topics, or time periods.</li>
                    <li>Investigating whether there are any correlations between the sentiment bias and market trends, consumer behavior, or industry developments.</li>
                </ol>

                <h4>Is there a correlation between the sentiment analysis of electric vehicle-related headlines in mainstream media outlets and the independent 
                    ratings provided by Media Bias Fact Check?</h4>
                    <ol>
                        <li>Is there a significant correlation between the sentiment bias detected in EV headlines and the overall rating provided by Media Bias Fact Check?</li>
                        <li>Are there any notable exceptions or inconsistencies between the two metrics?</li>
                        <li>Do certain publications tend to have a consistent sentiment bias across different topics, including electric vehicles?</li>
                    </ol>
                    <br><a href="#" class="gototop">Top</a>
        <h3 id="objective">Objective</h3>

            <p>The world is on the cusp of a significant transformation in transportation, with electric vehicles (EVs) poised to revolutionize the way we 
            travel. Governments and industries around the world are setting ambitious targets to reduce greenhouse gas emissions and combat climate change, 
            making electric vehicles (EVs) a crucial solution in response.</p>

            <p>However, the transition to electric vehicles is not without its challenges. Media outlets shape public opinion and influence consumer behavior, 
                playing a vital role in the process. As such, it's essential to examine how news outlets are reporting on electric vehicles, particularly in regards 
                to their potential benefits and drawbacks.</p>

            <p>I aim to investigate the mainstream media's coverage of electric vehicles, exploring common themes, biases, and messaging strategies 
                employed by various news sources, to better understand their impact. By analysing these trends, I aim to contribute to a deeper understanding of the role that mass media 
                can play in facilitating or hindering the widespread adoption of electric vehicles.</p>
                
            <p>I examine the sentiment and trends of electric vehicle (EV) headlines in mainstream media, using a massive dataset of over 1.9 million 
                web-scraped headlines. A variety of methods were used to to assign sentiment labels to each headline, providing a gold standard for 
                evaluating the performance of automated sentiment analysis tools. The results reveal significant biases and patterns in the coverage of EVs, 
                including the dominance of negative sentiments and the amplification of misinformation by media outlets.</p>

            <p>Corresponding with the observed trends in media coverage, an analysis of the correlation between the volume of negative headlines and new vehicle 
                sales suggests a potential impact on public opinion and purchasing decisions 
                (see <a href="07-ev-headline-analysis-headline-timing.php">Headline Timing Analysis</a>  for more information). The study highlights the limitations 
                of current sentiment analysis tools for this domain and proposes alternative approaches using topic modelling and entity recognition techniques to 
                better understand the complex context and nuances of EV-related discourse.</p>

            <p>This research contributes to the ongoing discussion about the role of media in shaping public perception of emerging technologies, while also 
                providing insights for stakeholders in the electric vehicle industry on how to address misinformation and promote a more balanced narrative. </p>

                <br><a href="#" class="gototop">Top</a>

        <h3 id="methodology">Methodology</h3>
        
        <h3 id="data-collection">Scope of analysis</h3>
            <p>As part of my research, I designed and implemented a web scraping script that systematically collected headlines from the search results of 
                UK mainstream media news outlets' websites. This automated process was executed every five minutes over a six-month period, spanning from August 2, 2023 
                to January 28, 2023.</p>
                <p><em>Web scraping is a way for computers to extract information from websites without actually browsing them like we do. Imagine you're looking through a big library 
                    and you need to find all the books with a specific title or author. Instead of searching through each shelf one by one, you could ask a friend to 
                    help you by making a list of all the relevant book titles for you. That's basically what web scraping does! It uses special software that 
                    can "read" websites like a computer program would read text, and then extracts specific information from those sites - like headlines, 
                    prices, or even whole articles.</em></p>

            <p>Our research offers a crucial window into media outlet reporting for policymakers, business leaders, and the general public – shedding light on the critical 
                role that media portrayals play in shaping attitudes towards electric vehicles.</p>

                <p>Observations collected for each publication</p>

                <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:80%; margin: 0 auto;">
                <thead>
                <tr style="text-align: right;">
                <th>month</th>
                <th>August</th>
                <th>September</th>
                <th>October</th>
                <th>November</th>
                <th>December</th>
                <th>January</th>
                </tr>
                <tr>
                <th>Publication</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                <tr style="text-align:center">
                <td>BBC</td>
                <td style="text-align:center; ">6,386</td>
                <td style="text-align:center; ">10,066</td>
                <td style="text-align:center; ">10,416</td>
                <td style="text-align:center; ">10,066</td>
                <td style="text-align:center; ">10,356</td>
                <td style="text-align:center; ">9,138</td>
                </tr>
                <tr style="text-align:center">
                <td>Express</td>
                <td style="text-align:center; ">4,670</td>
                <td style="text-align:center; ">7,200</td>
                <td style="text-align:center; ">7,450</td>
                <td style="text-align:center; ">1,550</td>
                <td style="text-align:center; ">0</td>
                <td style="text-align:center; ">0</td>
                </tr>
                <tr style="text-align:center">
                <td>The Daily Mail</td>
                <td style="text-align:center; ">115,460</td>
                <td style="text-align:center; ">173,243</td>
                <td style="text-align:center; ">174,171</td>
                <td style="text-align:center; ">162,836</td>
                <td style="text-align:center; ">139,897</td>
                <td style="text-align:center; ">119,457</td>
                </tr>
                <tr style="text-align:center">
                <td>The Daily Star</td>
                <td style="text-align:center; ">18,056</td>
                <td style="text-align:center; ">27,862</td>
                <td style="text-align:center; ">28,807</td>
                <td style="text-align:center; ">27,761</td>
                <td style="text-align:center; ">28,532</td>
                <td style="text-align:center; ">25,218</td>
                </tr>
                <tr style="text-align:center">
                <td>The Economist</td>
                <td style="text-align:center; ">4,848</td>
                <td style="text-align:center; ">7,200</td>
                <td style="text-align:center; ">7,450</td>
                <td style="text-align:center; ">7,190</td>
                <td style="text-align:center; ">7,370</td>
                <td style="text-align:center; ">6,520</td>
                </tr>
                <tr style="text-align:center">
                <td>The Independent</td>
                <td style="text-align:center; ">45,970</td>
                <td style="text-align:center; ">73,236</td>
                <td style="text-align:center; ">74,388</td>
                <td style="text-align:center; ">62,622</td>
                <td style="text-align:center; ">80,875</td>
                <td style="text-align:center; ">72,372</td>
                </tr>
                <tr style="text-align:center">
                <td>The Spectator</td>
                <td style="text-align:center; ">18,660</td>
                <td style="text-align:center; ">28,760</td>
                <td style="text-align:center; ">29,780</td>
                <td style="text-align:center; ">28,760</td>
                <td style="text-align:center; ">29,640</td>
                <td style="text-align:center; ">26,080</td>
                </tr>
                <tr style="text-align:center">
                <td>The Sun</td>
                <td style="text-align:center; ">5,604</td>
                <td style="text-align:center; ">8,730</td>
                <td style="text-align:center; ">8,904</td>
                <td style="text-align:center; ">8,740</td>
                <td style="text-align:center; ">8,892</td>
                <td style="text-align:center; ">7,812</td>
                </tr>
                <tr style="text-align:center">
                <td>The Telegraph</td>
                <td style="text-align:center; ">18,174</td>
                <td style="text-align:center; ">28,002</td>
                <td style="text-align:center; ">29,016</td>
                <td style="text-align:center; ">28,041</td>
                <td style="text-align:center; ">28,860</td>
                <td style="text-align:center; ">25,424</td>
                </tr>
                <tr style="text-align:center">
                <td>The Times</td>
                <td style="text-align:center; ">4,670</td>
                <td style="text-align:center; ">7,200</td>
                <td style="text-align:center; ">7,440</td>
                <td style="text-align:center; ">7,190</td>
                <td style="text-align:center; ">7,390</td>
                <td style="text-align:center; ">6,530</td>
                </tr>
            </tbody>
            </table>
        <!-- </div> -->


            <br><a href="#" class="gototop">Top</a>

        <h2 id="observations">Observations</h2>
            <p>Each data point includes the date, time, headline (and edits to the headlines), and the publication source,
                providing a robust basis for analysis. In total 1.9 million observations were recorded during the six month period from 
                August to January. </p>
                <p>Search Results often included non Electric Vehicle Related Topics, these were retained to provide some comparative 
                    analysis of General News to EV Headlines. </p>

        <h2 id="eda">EDA</h2>
            <p>Extensive Exploratory Data Analysis and Data Cleansing was carried out to produce a clean source dataset to work with.</p>

        <h2 id="feature-engineering">Feature Engineering</h2>
            <p>Feature Engineering was used to create additional columns and supplemental datasets </p>
            <p>See the <a href="a1-ev-headline-analysis-meta-data.php">Meta Data Overview</a> and 
            <a href="a2-ev-headline-analysis-feature-engineering.php">Feature Engineering</a> section for more information on 
            Meta Data, EDA, Cleansing and Feature Engineering.</p>
            <br><a href="#" class="gototop">Top</a>
        
        <h2 id="sentiment-analysis">Sentiment Analysis</h2> 

    <h3>NLP Sentiment Analysis</h3> 
        
        <p>Leveraged Natural Language Processing (NLP) techniques, specifically using the
            TextBlob library, to classify the sentiment of each headline as positive, negative, or neutral.</p>
            <p>The results from Textblob were poor quality and, in my opinion, unusable for analysis.</p>
            <p>Further investigation of the discrepancy led me to these conclusions: </p>
            <ul><li>Textblob uses simple rules based analysis and is simply unable to process linguistic cues, sarcasm, 
                irony, or figurative language that are common in mainstream media headlines</li>
            <li>Headlines often contain context-specific information, such as references to specific events, people, or trends. TextBlob 
                might not be able to fully understand the context, which can lead to mis-classifications.</li>
            <li>Some headlines may contain ambiguous language that can be interpreted as both positive and negative depending on the 
                reader's perspective. TextBlob might struggle with these ambiguities,</li>
            <li>Electric vehicles (EVs) are a relatively new and rapidly evolving field. TextBlob may not have been trained on enough data to 
                understand the specific domain specific knowledge including: concerns, benefits, or controversies surrounding EVs. </li>
            </ul>
            
    <h3>LLM Analysis</h3>
            <p> Utilised the Meta Llama 3.1 Large Language Model to perform a more nuanced sentiment and contextual
                analysis, identifying subtle biases and underlying tones in the headlines that might not be captured by
                traditional sentiment analysis tools. </p>
                <p>This produced results much closer to the hand tuned rating with a closer ratio of negative headlines being identified by the 
                    LLM Vs Hand Tuned. However the LLM identified less of the positive headlines, more often classifying them as Neutral rather than positive. 
                the results were a significant improvement over TextBlob and with further training could become quite usable.</p>

    <h3>Hand-Tuned Analysis</h3> 
            <p>I resorted to conducting a manual annotation review and used human judgement (me) on the data to
                validate the accuracy of automated methods and to fine-tune the sentiment classification algorithms.</p>
                <p>This has the potential to introduce personal bias, I set out to reduce this potential by hiding
                the publication source, date and time through the review. I am obviously biased, however the quality of the resulting dataset aligned
                better with the sentiment of the headlines, in my opinion.</p>
                <p>For further information on the bias risk see <a href="06-ev-headline-analysis-sentiment-analysis.php#bias-risk">Sentiment Analysis - Bias Risk</a></p>    
    
                <p> <a href="../img/sentiment-analysis-by-methodology.png"><img src="../img/sentiment-analysis-by-methodology.png"></a></p>
                <br><a href="#" class="gototop">Top</a>

    <h2 id=sentiment-results>Results of Sentiment Analysis</h2>                    
    <p>Unique Headlines were used as the source, this was filtered to the EV terms : "Charger", "Charging", "EV", "Electric Vehicle", "Electric Car", before processing. </p>
    <!-- <div class="datatable-container" id="all-headlines-count-by-publication"> -->
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
      <td>hand tuned</td>
      <td>57%</td>
      <td>9%</td>
      <td>34%</td>
    </tr>
    <tr>
      <td>Llama</td>
      <td>51%</td>
      <td>28%</td>
      <td>21%</td>
    </tr>
    <tr>
      <td>ChatGPT</td>
      <td>18%</td>
      <td>75%</td>
      <td>7%</td>
    </tr>
    <tr>
      <td>TextBlob</td>
      <td>28%</td>
      <td>34%</td>
      <td>38%</td>
    </tr>
  </tbody>
</table>
<!-- </div> -->
<br>
            <p>In using the "human judgement" approach, I've taken a closer look at each individual headline and provided a subjective rating 
                (positive, neutral, or negative) based on my understanding and interpretation. This is a labour-intensive process that requires 
                human expertise, attention to detail, and contextual understanding.</p>

            <p>By doing so, I've effectively created a high-quality, manually curated dataset that can be used as a gold standard for evaluating the 
                performance of other sentiment analysis models, including Llama 3.1b LLM and Python Textblob. This approach allowed me to assess the accuracy 
                and reliability of these automated tools and identify areas where they may not be effective.</p>

            <p>In contrast to automatic sentiment analysis methods, manual annotation provides a more nuanced and accurate understanding of the sentiment 
                behind each headline. However, it's important to note that this process can be time-consuming and resource-intensive, especially for large 
                datasets.</p>

            <p>The hand-tuned sentiment analysis shows a much more realistic distribution of sentiments, with 57% negative, 9% neutral, and 34% positive. 
                This is likely a more accurate representation of the actual sentiments in the dataset.</p>
                <p>Llama 31.b was a lot closer to the hand tuned analysis.</p>
            <p>In contrast, ChatGPT and TextBlob are both significantly off the mark. ChatGPT seems to be overly optimistic, with only 7% negative sentiment and 
                75% neutral (which might not even be possible in reality). TextBlob is also off, but in a different way, with 28% negative and 38% positive.</p>

        <p>This highlights the limitations of automated sentiment analysis tools and the importance of human oversight and validation. Even when used as a 
            starting point or to augment other approaches, these models may not provide accurate results without careful evaluation and fine-tuning.</p>

            <br><a href="#" class="gototop">Top</a>

            <?php include 'html-inc/footer.php'; ?>
            <script src="/js/coder.min.6ae284be93d2d19dad1f02b0039508d9aab3180a12a06dcc71b0b0ef7825a317.js"></script> 

    </div>


</body>