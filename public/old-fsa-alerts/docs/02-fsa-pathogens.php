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
            <div class="document-section">
                <div id="JumptoSection">
                    <!-- <select onchange="window.location.hash=this.value"> -->
                    <select onchange="javascript:scrollToAnchor(this.value, 100);">
                    <option value="#">Select to jump to section ....</option>

                        <option value="Pathogen-table-annual-totals">Table : Time Series Distribution of Pathogen Safety Alerts by year</option>
                        <option value="pathogen-type-total-time-series">Time Series Cross-Sectional Visualisation of Pathogen Types</option>
                        <option value="pathogen-type-distribution">Visualisation of Pathogen Type Distribution</option>
                        <option value="product-type-distribution">Visualisation of Food Types Distribution</option>
                        <option value="pathogen-total-time-series">Time Series Distribution of Pathogen Safety Alerts</option>
                        <option value="pathogen-visualisations-1">Salmonella - Distribution by Year, Month, and Combined Year-Month</option>
                        <option value="pathogen-visualisations-2">Listeria - Distribution by Year, Month, and Combined Year-Month</option>
                        <option value="pathogen-visualisations-3">Clostridium Botulinum - Distribution by Year, Month, and Combined Year-Month</option>
                        <option value="pathogen-visualisations-4">E.coli - Distribution by Year, Month, and Combined Year-Month</option>
                        <option value="food-by-pathogen-type">Pathogen Distribution Across Food Categories </option>
                    </select>
                </div>
            </div>
        </div>


        <h1>Food Standards Agency - Alerts Analysis</h1>
            <img src="/img/food-standards-agency-logo.jpg" style="width:30%">

        <h2 id="project-overview">Pathogen Analysis for Food Safety Alerts from food.gov.uk</h2>

        <p>Food safety alerts are an essential tool for protecting public health, as they enable swift action to be taken in response to potential threats. 
            In the UK, the Food Standards Agency (FSA) is responsible for issuing food safety alerts to inform consumers and industry stakeholders of potential 
            risks associated with certain foods or products. These alerts are critical for ensuring that contaminated or potentially harmful products are removed 
            from the market as quickly as possible, thereby minimizing the risk of foodborne illness outbreaks.</p>

 <p>This section of the analysis focuses on a comprehensive review of food safety alerts issued by the FSA with a specific emphasis on pathogenic organisms such 
    as Salmonella, Listeria, Campylobacter, and E. coli. By examining these data, this study aims to assess the effectiveness of the current alert system in 
    detecting and responding to outbreaks, identify trends and patterns in the types of pathogens involved, and provide insights that can inform strategies 
    for improving food safety and reducing public health risks.</p>


    <h2 id="Pathogen-table-annual-totals">Pathogen Safety Alerts - Types by year</h2>
    <p>Note, data missing from 2017 to 2020.</p>
        <div class="datatable-container" id="html_table-source-meta-data">
        <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
        <thead>
            <tr style="text-align: center;">
                <th>year</th>
                <th>2014</th>
                <th>2015</th>
                <th>2016</th>
                <th>2017</th>
                <th>2021</th>
                <th>2022</th>
                <th>2023</th>
                <th>2024</th>
                <th>total</th>
            </tr>

        </thead>  
        <tbody>
            <tr style="text-align: center">
                <th>Salmonella</th>
                <td>1</td>
                <td>11</td>
                <td>19</td>
                <td>4</td>
                <td>14</td>
                <td>24</td>
                <td>4</td>
                <td>3</td>
                <td>80</td>
            </tr>
            <tr style="text-align: center">
                <th>Listeria</th>
                <td>0</td>
                <td>7</td>
                <td>13</td>
                <td>3</td>
                <td>5</td>
                <td>7</td>
                <td>13</td>
                <td>9</td>
                <td>57</td>
            </tr>
            <tr style="text-align: center">
                <th>Clostridium botulinum</th>
                <td>0</td>
                <td>5</td>
                <td>6</td>
                <td>6</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>17</td>
            </tr>
            <tr style="text-align: center">
                <th>E.Coli</th>
                <td>1</td>
                <td>1</td>
                <td>3</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>4</td>
                <td>7</td>
                <td>16</td>
            </tr>
            <tr style="text-align: center">
                <th>Microbiological</th>
                <td>0</td>
                <td>2</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>4</td>
                <td>1</td>
                <td>0</td>
                <td>10</td>
            </tr>
            <tr style="text-align: center">
                <th>Cronobacter sakazakii</th>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>2</td>
                <td>0</td>
                <td>2</td>
                <td>4</td>
            </tr>
            <tr style="text-align: center">
                <th>Hepatitis A</th>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>2</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>3</td>
            </tr>
            <tr style="text-align: center">
                <th>Norovirus</th>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>2</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>2</td>
            </tr>
            <tr style="text-align: center">
                <th>Campylobacter</th>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>1</td>
            </tr>
            <tr style="text-align: center">
                <th>Food Poisoning</th>
                <td>0</td>
                <td>0</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>1</td>
            </tr>
            <tr style="text-align: center">
                <th>Rhizopus oryzae</th>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>1</td>
            </tr>  </tbody></table>
</div>
<p><a href="#">Top</a> </p>


    <h2 id="pathogen-type-total-time-series">Time Series Cross-Sectional Visualisations of Pathogen Types</h2>
        <div class="datatable-container" id="html_table-source-meta-data">
        <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
            <tr>
                <td><a href="img/pathogen-contaminant_type-yyyy-mm.png"><img src="img/pathogen-contaminant_type-yyyy-mm.png" style="width:100%"></a></td>
                
            </tr>
            <tr>
                <td><a href="img/pathogen-contaminant_type-mmm.png"><img src="img/pathogen-contaminant_type-mmm.png" style="width:100%"></a></td>
                <td><a href="img/pathogen-contaminant_type-yyyy.png"><img src="img/pathogen-contaminant_type-yyyy.png" style="width:100%"></a></td>
            </tr>
            
         </table></div>
         <p><a href="#">Top</a> </p>

        
        <h2 id="pathogen-type-distribution">Safety Alert Distribution by Pathogen Types</h2>
        
            <div class="datatable-container" id="html_table-source-meta-data">
            <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                <tr>
                    <td><a href="img/pathogen-pie-total.png"><img src="img/pathogen-pie-total.png" style="width:100%"></a></td>
                </tr>
             </table></div>
             <p><a href="#">Top</a> </p>
            
        <h2 id="product-type-distribution">Safety Alert Distribution by Product Types</h2>
        
            <div class="datatable-container" id="html_table-source-meta-data">
            <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                <tr>
                    
                    <td><a href="img/pathogen-product_categories-pie-total.png"><img src="img/pathogen-product_categories-pie-total.png" style="width:100%"></a></td>
                    
                </tr>
                
                
             </table></div>
        <p><a href="#">Top</a> </p>

        <p></p>
        <h2 id="pathogen-total-time-series">Time Series Visualisations of Pathogen Safety Alerts</h2>

        <div class="datatable-container" id="html_table-source-meta-data">
        <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
            <tr>
                <td><a href="img/pathogen-yyyy-mm.png"><img src="img/pathogen-yyyy-mm.png" style="width:100%"></a></td>
                
            </tr>
            <tr>
                <td><a href="img/pathogen-mmm.png"><img src="img/pathogen-mmm.png" style="width:100%"></a></td>
                <td><a href="img/pathogen-yyyy.png"><img src="img/pathogen-yyyy.png" style="width:100%"></a></td>
            </tr>
            
         </table></div>
         <p><a href="#">Top</a> </p>
        
        
        <h1>Time Series Visualizations of Pathogen Distribution and Common Affected Foods</h1>
        
        <h2 id="pathogen-visualisations-1">Salmonella</h2>
        <p>Salmonella is a genus of rod-shaped gram-negative bacteria of the family Enterobacteriaceae. Salmonella species are non-spore-forming, predominantly motile 
            enterobacteria with cell diameters between about 0.7 and 1.5 μm, lengths from 2 to 5 μm, and peritrichous flagella. They are chemotrophs, obtaining their 
            energy from oxidation and reduction reactions, using organic sources. They are also facultative anaerobes (are capable of adapting to different 
            environmental conditions), and can thrive in an an oxygen environment but also in an anaerobic environment.</p>
        <p>Salmonella is a type of bacteria that can cause food poisoning in humans. It is the most common pathogenic contamination in UK Foods.</p>
        <p></p>

        <p>From a food safety perspective, Salmonella is a significant concern because it can contaminate a wide range of foods and beverages, including:
        <ul>
            <li><b>Meat</b>: Raw poultry, pork, beef, lamb, and veal are all potential sources of Salmonella.</li>
            <li><b>Eggs</b>: Salmonella Enteritidis is the most common cause of egg-related illnesses.</li>
            <li><b>Dairy products</b>: Raw milk, cream, cheese, and ice cream can be contaminated with Salmonella.</li>
            <li><b>Produce</b>: Fresh fruits and vegetables, such as tomatoes, cucumbers, sprouts, and leafy greens, can harbor Salmonella.</li>
            <li><b>Fruits and juices</b>: Contaminated fruit juice, cider, and unpasteurized apple cider can spread the bacteria.</li>
            </ul>
        </p>

        <h3>Most Common Foods Contaminated with Salmonella</h3>
            <div style=width:80%>
                <a href="img/pathogen-salmonella-by-product-type.png"><img src="img/pathogen-salmonella-by-product-type.png"></a></div>
                <p><a href="#">Top</a> </p>
        
                <h3>Temporal Visualisations</h3>
        <div class="datatable-container" id="html_table-source-meta-data">
        
        <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
            <tr>
                <td><a  href="img/contaminant-salmonella-yyyy-mm.png"><img src="img/contaminant-salmonella-yyyy-mm.png"></a></td>
                <td></td>
                
            </tr>
            <tr>
                <td><a  href="img/contaminant-salmonella-mmm.png"><img src="img/contaminant-salmonella-mmm.png"></a></td> 
                <td><a  href="img/contaminant-salmonella-yyyy.png"><img src="img/contaminant-salmonella-yyyy.png"></a></td>               
            </tr>
         </table></div>
         <p><a href="#">Top</a> </p>

        <h2 id="pathogen-visualisations-2">Listeria</h2>
            <p>Listeria is a genus of bacteria that acts as an intracellular parasite in mammals. Until 1992, 10 species were known, each containing two subspecies. 
                By 2024, 28 species had been identified. The genus is named in honour of the British pioneer of sterile surgery Joseph Lister. Listeria species are Gram-positive, 
                rod-shaped, and facultatively anaerobic, and do not produce endospores. The major human pathogen in the genus Listeria is L. monocytogenes. 
                It is usually the causative agent of the relatively rare bacterial disease listeriosis, an infection caused by eating food contaminated with the bacteria. 
                Listeriosis can cause serious illness in pregnant women, newborns, adults with weakened immune systems and the elderly, and may cause gastroenteritis in 
                others who have been severely infected. Listeriosis is a serious disease for humans; the overt form of the disease has a case-fatality rate of around 20-30%.</p>
            
            <h3>Most Common Foods Contaminated with Listeria</h3>
            <div style=width:80%><a  href="img/pathogen-listeria-by-product-type.png"><img src="img/pathogen-listeria-by-product-type.png"></a></div>
            <p><a href="#">Top</a> </p>
            <h3>Temporal Visualisations</h3>
                <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
            <tr>
                <td><a  href="img/contaminant-listeria-yyyy-mm.png"><img src="img/contaminant-listeria-yyyy-mm.png"></a></td>
                <td></td>
                
            </tr>
            <tr>
                <td><a  href="img/contaminant-listeria-mmm.png"><img src="img/contaminant-listeria-mmm.png"></a></td> 
                <td><a href="img/contaminant-listeria-yyyy.png"><img src="img/contaminant-listeria-yyyy.png"></a></td>               
            </tr>
         </table></div>
         <p><a href="#">Top</a> </p>


        <h2 id="pathogen-visualisations-3">Clostridium Botulinum</h2>
        <p>Clostridium botulinum is a gram-positive, rod-shaped, anaerobic, spore-forming, motile bacterium with the ability to produce botulinum toxin, which is a neurotoxin. 
            C. botulinum is a diverse group of pathogenic bacteria. Initially, they were grouped together by their ability to produce botulinum toxin and are now known as four distinct 
            groups, C. botulinum groups I-IV. Along with some strains of Clostridium butyricum and Clostridium baratii, these bacteria all produce the toxin. </p><p>Botulinum toxin can cause 
            botulism, a severe flaccid paralytic disease in humans and other animals, and is the most potent toxin known to science, natural or synthetic, with a lethal dose of 
            1.3-2.1 ng/kg in humans. C. botulinum is commonly associated with bulging canned food; bulging, misshapen cans can be due to an internal increase in pressure caused by 
            gas produced by bacteria. C. botulinum is responsible for foodborne botulism, infant botulism, and wound botulism.</p>
            <p><a href="https://en.wikipedia.org/wiki/Clostridium_botulinum">https://en.wikipedia.org/wiki/Clostridium_botulinum</a></p>

            <h3>Most common foods contaminated with Clostridium botulinum</h3>
            <div style=width:80%><a href="img/pathogen-clostridium-botulinum-by-product-type.png"><img src="img/pathogen-clostridium-botulinum-by-product-type.png"></a></div>
            <p><a href="#">Top</a> </p>
            <h3>Temporal Visualisations</h3>
        <div class="datatable-container" id="html_table-source-meta-data">
        
        <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
            <tr>
                <td><a  href="img/contaminant-clostridium-botulinum-yyyy-mm.png"><img src="img/contaminant-clostridium-botulinum-yyyy-mm.png"></a></td>
                <td></td>
                
            </tr>
            <tr>
                <td><a  href="img/contaminant-clostridium-botulinum-mmm.png"><img src="img/contaminant-clostridium-botulinum-mmm.png"></a></td> 
                <td><a  href="img/contaminant-clostridium-botulinum-yyyy.png"><img src="img/contaminant-clostridium-botulinum-yyyy.png"></a></td>               
            </tr>
         </table></div>
         <p><a href="#">Top</a> </p>

        <h2 id="pathogen-visualisations-4">E.coli</h2>
        <p>Escherichia coli is a gram-negative, facultative anaerobic, rod-shaped, coliform bacterium of the genus Escherichia that is commonly found in the lower intestine of warm-blooded 
            organisms. Most E. coli strains are harmless, but some serotypes such as EPEC, and ETEC are pathogenic and can cause serious food poisoning in their hosts, and are occasionally 
            responsible for food contamination incidents that prompt product recalls. Most strains are part of the normal microbiota of the gut and are harmless or even beneficial to humans. 
            For example, some strains of E. coli benefit their hosts by producing vitamin K₂ or by preventing the colonization of the intestine by pathogenic bacteria. These mutually beneficial 
            relationships between E. coli and humans are a type of mutualistic biological relationship — where both the humans and the E. coli are benefiting each other. E. coli is expelled 
            into the environment within faecal matter.</p>
            <p><a href="https://en.wikipedia.org/wiki/Escherichia_coli">https://en.wikipedia.org/wiki/Escherichia_coli</a></p>
            
            <h3>Most Common Foods Contaminated with E.coli</h3>
            <div style=width:80%><a  href="img/pathogen-e.coli-by-product-type.png"><img src="img/pathogen-e.coli-by-product-type.png"></a></div>
            <p><a href="#">Top</a> </p>
            
            <h3>Temporal Visualisations</h3>
        <div class="datatable-container" id="html_table-source-meta-data">
            <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                <tr>
                    <td><a  href="img/contaminant-e.coli-yyyy-mm.png"><img src="img/contaminant-e.coli-yyyy-mm.png"></a></td>
                    <td></td>
                    
                </tr>
                <tr>
                    <td><a  href="img/contaminant-e.coli-mmm.png"><img src="img/contaminant-e.coli-mmm.png"></a></td> 
                    <td><a  href="img/contaminant-e.coli-yyyy.png"><img src="img/contaminant-e.coli-yyyy.png"></a></td>               
                </tr>
             </table></div>
             <p><a href="#">Top</a> </p>
            


        
<h2 id="food-by-pathogen-type">A Slice Above the Rest: Pathogen Distribution Across Food Categories</h2>


       
<div class="datatable-container" id="html_table-source-meta-data">
        <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
            <tr>
                <td><a  href="img/pathogen-type-cheese-pie-total.png"><img src="img/pathogen-type-cheese-pie-total.png"></a></td> 
                <td><a  href="img/pathogen-type-fish-processed-pie-total.png"><img src="img/pathogen-type-fish-processed-pie-total.png"></a></td>
                
            </tr>
            <tr>
                <td><a  href="img/pathogen-type-pork-processed-pie-total.png"><img src="img/pathogen-type-pork-processed-pie-total.png"></a></td>
                <td><a  href="img/pathogen-type-ready-meal-ready-to-eat-pie-total.png"><img src="img/pathogen-type-ready-meal-ready-to-eat-pie-total.png"></a></td>
            </tr>
                <tr>
                <td><a href="img/pathogen-type-confectionery-pie-total.png"><img src="img/pathogen-type-confectionery-pie-total.png"></a></td>
                <td><a href="img/pathogen-type-nuts-seeds-pie-total.png"><img src="img/pathogen-type-nuts-seeds-pie-total.png"></a></td>
            </tr>
            <tr>
                <td><a  href="img/pathogen-type-sandwiches-wraps-pie-total.png"><img src="img/pathogen-type-sandwiches-wraps-pie-total.png"></a></td> 
                <td><a  href="img/pathogen-type-chicken-processed-pie-total.png"><img src="img/pathogen-type-chicken-processed-pie-total.png"></a></td> 
            </tr>
            <tr>
                <td><a  href="img/pathogen-type-pet-food-pie-total.png"><img src="img/pathogen-type-pet-food-pie-total.png"></a></td> 
                <td><a  href="img/pathogen-type-herbs-spices-pie-total.png"><img src="img/pathogen-type-herbs-spices-pie-total.png"></a></td> 
            </tr>
            <tr>
                <td><a href="img/pathogen-type-vegetables-processed-pie-total.png"><img src="img/pathogen-type-vegetables-processed-pie-total.png"></a></td>
                <td><a  href="img/pathogen-type-baby-foods-formula-pie-total.png"><img src="img/pathogen-type-baby-foods-formula-pie-total.png"></a></td>
                
            </tr>
            <tr>
                <td><a href="img/pathogen-type-sauces-condiments-pie-total.png"><img src="img/pathogen-type-sauces-condiments-pie-total.png"></a></td>
                <td><a  href="img/pathogen-type-dairy-pie-total.png"><img src="img/pathogen-type-dairy-pie-total.png"></a></td>
               
            </tr>
            <tr>
                <td><a href="img/pathogen-type-fruit-processed-pie-total.png"><img src="img/pathogen-type-fruit-processed-pie-total.png"></a></td>
                <td><a  href="img/pathogen-type-nutrition-supplements-total.png"><img src="img/pathogen-type-nutrition-supplements-pie-total.png"></a></td>
                    
            </tr>
            <tr>
                <td><a href="img/pathogen-type-beef-processed-pie-total.png"><img src="img/pathogen-type-beef-processed-pie-total.png"></a></td>
                <td><a  href="img/pathogen-type-other-processed-total.png"><img src="img/pathogen-type-other-processed-pie-total.png"></a></td>
            </tr>     
         </table></div>
         <p><a href="#">Top</a> </p>

 

<h2>Summary</h2>
<p>Pathogenic food alerts account for 23% of all safety alerts issued by the FSA.</p>
<p>There has been a measurable increase in the number of pathogen safety alerts in 2024 (so far) compared to the previous few years.</p>
    
<p>Salmonella, Listeria, Clostridium botulinum, E.Coli are the most common pathogenic food contaminants accounting for 88% of all pathogen safety alerts</p>
<p>

<div class="datatable-container" id="html_table-source-meta-data">
        <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
  <thead>
    <tr style="text-align: right;">
      <th>Pathogen</th>
      <th>count</th>
      <th>total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Salmonella</td>
      <td>80</td>
      <td>41.6%</td>
    </tr>
    <tr>
      <td>Listeria</td>
      <td>57</td>
      <td>29.7%</td>
    </tr>
    <tr>
      <td>Clostridium botulinum</td>
      <td>17</td>
      <td>8.9%</td>
    </tr>
    <tr>
      <td>E.Coli</td>
      <td>16</td>
      <td>8.3%</td>
    </tr>
    <tr>
      <td>Microbiological</td>
      <td>10</td>
      <td>5.2%</td>
    </tr>
    <tr>
      <td>Cronobacter sakazakii</td>
      <td>4</td>
      <td>2.0%</td>
    </tr>
    <tr>
      <td>Hepatitis A</td>
      <td>3</td>
      <td>1.6%</td>
    </tr>
    <tr>
      <td>Norovirus</td>
      <td>2</td>
      <td>1.0%</td>
    </tr>
    <tr>
      <td>Rhizopus oryzae</td>
      <td>1</td>
      <td>0.5%</td>
    </tr>
    <tr>
      <td>Food Poisoning</td>
      <td>1</td>
      <td>0.5%</td>
    </tr>
    <tr>
      <td>Campylobacter</td>
      <td>1</td>
      <td>0.5%</td>
    </tr>
  </tbody>
</table>
</div>

</p>
</div>
</body>
</html>
<script>
    function scrollToAnchor(hash, padding) {
  const anchor = document.getElementById(hash);
  if (anchor) {
    window.location.hash = hash;
    anchor.scrollIntoView({ behavior: 'smooth', block: 'center' });
    // Add the padding to the top of the page
    window.scrollTo({
      top: anchor.offsetTop - padding,
      behavior: 'smooth'
    });
  }
}
</script>