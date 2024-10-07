<?php include 'html-inc/header.php'; ?>

    <style>
/* .table-format {
   /* width: 100%;*/
    /*border-collapse: collapse; /* Optional: to remove space between table borders }*/ 

/* Style for the first column (left aligned) */
.table-format td:first-child,
.table-format th:first-child {
    text-align: left;
}

/* Style for the second and subsequent columns (center aligned) */
.table-format td:not(:first-child),
.table-format th:not(:first-child) {
    text-align: center;
}

</style>

    <title>Food Standards Agency - Alerts Analysis - Contamination Type : Pathogens</title>

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
                        <option value="food-by-pathogen-type">Pathogen Distribution Across Product Types </option>
                        <optgroup label="Product Type">

                            <option value="cheese">Cheese</option>
                            <option value="cheese">Fish Processed</option>
                            <option value="pork">Pork Processed</option>
                            <option value="pork">Ready Meal / Ready to Eat</option>
                            <option value="confectionery">Confectionery</option>
                            <option value="confectionery">Nuts / Seeds</option>
                            <option value="sandwiches">Sandwiches / Wraps</option>
                            <option value="sandwiches">Chicken Processed</option>
                            <option value="pets">Pet Food</option>
                            <option value="pets">Herbs / Spices</option>
                            <option value="vegetables">Vegetables Processed</option>
                            <option value="vegetables">Baby Foods / Formula</option>
                            <option value="sauces">Sauces / Condiments</option>
                            <option value="sauces">Dairy</option>
                            <option value="fruit">Fruit Processed</option>
                            <option value="fruit">Nutrition / Supplements</option>
                            <option value="fruit">Beef Processed</option>
                            <option value="fruit">Other Processed</option>
                            <option value="baked">Baked Goods</option>
                            <option value="baked">Cooking Oil</option>
                            <option value="duck">Duck Processed</option>
                            <option value="duck">Cooking Oil</option>
                            <option value="alt-milk">Milk Alternatives</option>
                            <option value="alt-milk">Mixed Meats Processed</option>
                            <option value="salad">Salad</option>
                            <option value="salad">Soft Drinks</option>
                            </optgroup>
                        <optgroup label="Product Category">

                            <option value="cat-cheese">Baby Foods / Formula</option>
                            <option value="cat-cheese">Cheese</option>
                            <option value="cat-confectionery">Confectionery</option>
                            <option value="cat-confectionery">Herbs / Spices</option>
                            <option value="cat-nuts">Nuts /Seeds</option>
                            <option value="cat-nuts">Other</option>
                            <option value="cat-pets">Pet Foods</option>
                            <option value="cat-pets">Processed Fish</option>
                            <option value="cat-ready">Ready Meals / Ready to Eat</option>
                            <option value="cat-ready">Sandwiches / Wraps</option>
                            <option value="cat-ready">Sauces / Condiments</option>
                            </optgroup>
                        <option value="summary">Summary</option>
                    </select>
                </div>
            </div>
        </div>


        <h1>Food Standards Agency - Alerts Analysis</h1>
        <p><img src="../icons/food-standards-agency-logo.jpg" style="width:30%"></p>
        <p class='last-updated'><?php include 'last-updated.php' ?></p>

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
    <div style="margin-right:auto;margin-left:0px; width:100%">
                <?php include "../tables/pathogen-annual-alert-count.php" ?>
            </div>
<br><a href="#" class="gototop">Top</a>


    <h2 id="pathogen-type-total-time-series">Time Series Cross-Sectional Visualisations of Pathogen Types</h2>
        <div>
        <table style="width:100%; margin: 0 auto;">
            <tr>
                <td><a href="../img/pathogen-contaminant_type-yyyy-mm.png"><img src="../img/pathogen-contaminant_type-yyyy-mm.png" style="width:100%"></a></td>
                
            </tr>
            <tr>
                <td><a href="../img/pathogen-contaminant_type-mmm.png"><img src="../img/pathogen-contaminant_type-mmm.png" style="width:100%"></a></td>
                <td><a href="../img/pathogen-contaminant_type-yyyy.png"><img src="../img/pathogen-contaminant_type-yyyy.png" style="width:100%"></a></td>
            </tr>
            
         </table></div>
         <br><a href="#" class="gototop">Top</a>

        
        <h2 id="pathogen-type-distribution">Safety Alert Distribution by Pathogen Types</h2>
        
            <div>
            <table style="width:100%; margin: 0 auto;">
                <tr>
                    <td><a href="../img/pathogen-pie-total.png"><img src="../img/pathogen-pie-total.png" style="width:100%"></a></td>
                </tr>
             </table></div>
             <br><a href="#" class="gototop">Top</a>
            
        <h2 id="product-type-distribution">Safety Alert Distribution by Product Types</h2>
        
            <div>
            <table style="width:100%; margin: 0 auto;">
                <tr>
                    
                    <td><a href="../img/pathogen-product_categories-pie-total.png"><img src="../img/pathogen-product_categories-pie-total.png" style="width:100%"></a></td>
                    
                </tr>
                
                
             </table></div>
        <br><a href="#" class="gototop">Top</a>

        <p></p>
        <h2 id="pathogen-total-time-series">Time Series Visualisations of Pathogen Safety Alerts</h2>

        <div>
        <table style="width:100%; margin: 0 auto;">
            <tr>
                <td><a href="../img/pathogen-yyyy-mm.png"><img src="../img/pathogen-yyyy-mm.png" style="width:100%"></a></td>
                
            </tr>
            <tr>
                <td><a href="../img/pathogen-mmm.png"><img src="../img/pathogen-mmm.png" style="width:100%"></a></td>
                <td><a href="../img/pathogen-yyyy.png"><img src="../img/pathogen-yyyy.png" style="width:100%"></a></td>
            </tr>
            
         </table></div>
         <br><a href="#" class="gototop">Top</a>
        
        
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
                <a href="../img/pathogen-salmonella-by-product-type.png"><img src="../img/pathogen-salmonella-by-product-type.png"></a></div>
                <br><a href="#" class="gototop">Top</a>
        
                <h3>Temporal Visualisations</h3>
        <div>
        
        <table style="width:100%; margin: 0 auto;">
            <tr>
                <td><a  href="../img/contaminant-salmonella-yyyy-mm.png"><img src="../img/contaminant-salmonella-yyyy-mm.png"></a></td>
                <td></td>
                
            </tr>
            <tr>
                <td><a  href="../img/contaminant-salmonella-mmm.png"><img src="../img/contaminant-salmonella-mmm.png"></a></td> 
                <td><a  href="../img/contaminant-salmonella-yyyy.png"><img src="../img/contaminant-salmonella-yyyy.png"></a></td>               
            </tr>
         </table></div>
         <br><a href="#" class="gototop">Top</a>

        <h2 id="pathogen-visualisations-2">Listeria</h2>
            <p>Listeria is a genus of bacteria that acts as an intracellular parasite in mammals. Until 1992, 10 species were known, each containing two subspecies. 
                By 2024, 28 species had been identified. The genus is named in honour of the British pioneer of sterile surgery Joseph Lister. Listeria species are Gram-positive, 
                rod-shaped, and facultatively anaerobic, and do not produce endospores. The major human pathogen in the genus Listeria is L. monocytogenes. 
                It is usually the causative agent of the relatively rare bacterial disease listeriosis, an infection caused by eating food contaminated with the bacteria. 
                Listeriosis can cause serious illness in pregnant women, newborns, adults with weakened immune systems and the elderly, and may cause gastroenteritis in 
                others who have been severely infected. Listeriosis is a serious disease for humans; the overt form of the disease has a case-fatality rate of around 20-30%.</p>
            
            <h3>Most Common Foods Contaminated with Listeria</h3>
            <div style=width:80%><a  href="../img/pathogen-listeria-by-product-type.png"><img src="../img/pathogen-listeria-by-product-type.png"></a></div>
            <br><a href="#" class="gototop">Top</a>
            <h3>Temporal Visualisations</h3>
                <div>
                <table style="width:100%; margin: 0 auto;">
            <tr>
                <td><a  href="../img/contaminant-listeria-yyyy-mm.png"><img src="../img/contaminant-listeria-yyyy-mm.png"></a></td>
                <td></td>
                
            </tr>
            <tr>
                <td><a  href="../img/contaminant-listeria-mmm.png"><img src="../img/contaminant-listeria-mmm.png"></a></td> 
                <td><a href="../img/contaminant-listeria-yyyy.png"><img src="../img/contaminant-listeria-yyyy.png"></a></td>               
            </tr>
         </table></div>
         <br><a href="#" class="gototop">Top</a>


        <h2 id="pathogen-visualisations-3">Clostridium Botulinum</h2>
        <p>Clostridium botulinum is a gram-positive, rod-shaped, anaerobic, spore-forming, motile bacterium with the ability to produce botulinum toxin, which is a neurotoxin. 
            C. botulinum is a diverse group of pathogenic bacteria. Initially, they were grouped together by their ability to produce botulinum toxin and are now known as four distinct 
            groups, C. botulinum groups I-IV. Along with some strains of Clostridium butyricum and Clostridium baratii, these bacteria all produce the toxin. </p><p>Botulinum toxin can cause 
            botulism, a severe flaccid paralytic disease in humans and other animals, and is the most potent toxin known to science, natural or synthetic, with a lethal dose of 
            1.3-2.1 ng/kg in humans. C. botulinum is commonly associated with bulging canned food; bulging, misshapen cans can be due to an internal increase in pressure caused by 
            gas produced by bacteria. C. botulinum is responsible for foodborne botulism, infant botulism, and wound botulism.</p>
            <p><a href="https://en.wikipedia.org/wiki/Clostridium_botulinum">https://en.wikipedia.org/wiki/Clostridium_botulinum</a></p>

            <h3>Most common foods contaminated with Clostridium botulinum</h3>
            <div style=width:80%><a href="../img/pathogen-clostridium-botulinum-by-product-type.png"><img src="../img/pathogen-clostridium-botulinum-by-product-type.png"></a></div>
            <br><a href="#" class="gototop">Top</a>
            <h3>Temporal Visualisations</h3>
        <div>
        
        <table style="width:100%; margin: 0 auto;">
            <tr>
                <td><a  href="../img/contaminant-clostridium-botulinum-yyyy-mm.png"><img src="../img/contaminant-clostridium-botulinum-yyyy-mm.png"></a></td>
                <td></td>
                
            </tr>
            <tr>
                <td><a  href="../img/contaminant-clostridium-botulinum-mmm.png"><img src="../img/contaminant-clostridium-botulinum-mmm.png"></a></td> 
                <td><a  href="../img/contaminant-clostridium-botulinum-yyyy.png"><img src="../img/contaminant-clostridium-botulinum-yyyy.png"></a></td>               
            </tr>
         </table></div>
         <br><a href="#" class="gototop">Top</a>

        <h2 id="pathogen-visualisations-4">E.coli</h2>
        <p>Escherichia coli is a gram-negative, facultative anaerobic, rod-shaped, coliform bacterium of the genus Escherichia that is commonly found in the lower intestine of warm-blooded 
            organisms. Most E. coli strains are harmless, but some serotypes such as EPEC, and ETEC are pathogenic and can cause serious food poisoning in their hosts, and are occasionally 
            responsible for food contamination incidents that prompt product recalls. Most strains are part of the normal microbiota of the gut and are harmless or even beneficial to humans. 
            For example, some strains of E. coli benefit their hosts by producing vitamin K₂ or by preventing the colonization of the intestine by pathogenic bacteria. These mutually beneficial 
            relationships between E. coli and humans are a type of mutualistic biological relationship — where both the humans and the E. coli are benefiting each other. E. coli is expelled 
            into the environment within faecal matter.</p>
            <p><a href="https://en.wikipedia.org/wiki/Escherichia_coli">https://en.wikipedia.org/wiki/Escherichia_coli</a></p>
            
            <h3>Most Common Foods Contaminated with E.coli</h3>
            <div style=width:80%><a  href="../img/pathogen-e.coli-by-product-type.png"><img src="../img/pathogen-e.coli-by-product-type.png"></a></div>
            <br><a href="#" class="gototop">Top</a>
            
            <h3>Temporal Visualisations</h3>
        <div>
            <table style="width:100%; margin: 0 auto;">
                <tr>
                    <td><a  href="../img/contaminant-e.coli-yyyy-mm.png"><img src="../img/contaminant-e.coli-yyyy-mm.png"></a></td>
                    <td></td>
                    
                </tr>
                <tr>
                    <td><a  href="../img/contaminant-e.coli-mmm.png">
                        <img src="../img/contaminant-e.coli-mmm.png"></a></td> 
                    <td><a  href="../img/contaminant-e.coli-yyyy.png">
                        <img src="../img/contaminant-e.coli-yyyy.png"></a></td>               
                </tr>
             </table></div>
             <br><a href="#" class="gototop">Top</a>
            


        
<h2 id="food-by-pathogen-type">A Slice Above the Rest: Pathogen Distribution Across Food Types</h2>


<p id="cheese"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Cheese</h3></td><td><h3>Fish Processed</h3></td></tr></thead>
            <tr>
                <td><a  href="../img/pathogen-type-cheese-pie-total.png">
                    <img src="../img/pathogen-type-cheese-pie-total.png"></a></td> 
                <td><a  href="../img/pathogen-type-fish-processed-pie-total.png">
                    <img src="../img/pathogen-type-fish-processed-pie-total.png"></a></td>
                
            </tr>
            </table>
            </div>
            <br><a href="#" class="gototop">Top</a>

<p id="pork"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Pork Processed</h3></td><td><h3>Ready Meal / Ready to Eat</h3></td></tr></thead>
            <tr>
                <td><a  href="../img/pathogen-type-pork-processed-pie-total.png">
                    <img src="../img/pathogen-type-pork-processed-pie-total.png"></a></td>
                <td><a  href="../img/pathogen-type-ready-meal-ready-to-eat-pie-total.png">
                    <img src="../img/pathogen-type-ready-meal-ready-to-eat-pie-total.png"></a></td>
            </tr>
            </table>
            </div>
            <br><a href="#" class="gototop">Top</a>

<p id="confectionery"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Confectionery</h3></td><td><h3>Nuts / Seeds</h3></td></tr></thead>

                <tr>
                <td><a href="../img/pathogen-type-confectionery-pie-total.png">
                    <img src="../img/pathogen-type-confectionery-pie-total.png"></a></td>
                <td><a href="../img/pathogen-type-nuts-seeds-pie-total.png">
                    <img src="../img/pathogen-type-nuts-seeds-pie-total.png"></a></td>
            </tr>
            </table>
            </div>
            <br><a href="#" class="gototop">Top</a>

<p id="sandwiches"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Sandwiches / Wraps</h3></td><td><h3>Chicken Processed</h3></td></tr></thead>

            <tr>
                <td><a  href="../img/pathogen-type-sandwiches-wraps-pie-total.png">
                    <img src="../img/pathogen-type-sandwiches-wraps-pie-total.png"></a></td> 
                <td><a  href="../img/pathogen-type-chicken-processed-pie-total.png">
                    <img src="../img/pathogen-type-chicken-processed-pie-total.png"></a></td> 
            </tr>
            </table>
            </div>
            <br><a href="#" class="gototop">Top</a>

<p id="pets"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead>
            <tr>
                <td style="width:50%">
                    <h3>Pet Food</h3></td>
                    <td><h3>Herbs / Spices</h3></td></tr></thead>

            <tr>
                <td><a  href="../img/pathogen-type-pet-food-pie-total.png">
                    <img src="../img/pathogen-type-pet-food-pie-total.png"></a></td> 
                <td><a  href="../img/pathogen-type-herbs-spices-pie-total.png">
                    <img src="../img/pathogen-type-herbs-spices-pie-total.png"></a></td> 
            </tr>
            </table>
            </div>
            <br><a href="#" class="gototop">Top</a>

<p id="vegetables"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Vegetables</h3></td><td><h3>Baby Foods / Formula</h3></td></tr></thead>

            <tr>
                <td><a  href="../img/pathogen-type-vegetables-processed-pie-total.png">
                    <img src="../img/pathogen-type-vegetables-processed-pie-total.png"></a></td>
                <td><a  href="../img/pathogen-type-baby-foods-formula-pie-total.png">
                    <img src="../img/pathogen-type-baby-foods-formula-pie-total.png"></a></td>
                
            </tr>
            </table>
            </div>

            <br><a href="#" class="gototop">Top</a>
<p id="sauces"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Sauces / Condiments</h3></td><td><h3>Dairy</h3></td></tr></thead>

            <tr>
                <td><a  href="../img/pathogen-type-sauces-condiments-pie-total.png">
                    <img src="../img/pathogen-type-sauces-condiments-pie-total.png"></a></td>
                <td><a  href="../img/pathogen-type-dairy-pie-total.png">
                    <img src="../img/pathogen-type-dairy-pie-total.png"></a></td>
               
            </tr>
            </table>
            </div>
            <br><a href="#" class="gototop">Top</a>

<p id="fruit"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Fruit Processed</h3></td><td><h3>Nutrition / Supplements</h3></td></tr></thead>

            <tr>
                <td><a href="../img/pathogen-type-fruit-processed-pie-total.png">
                    <img src="../img/pathogen-type-fruit-processed-pie-total.png"></a></td>
                <td><a  href="../img/pathogen-type-nutrition-supplements-total.png">
                    <img src="../img/pathogen-type-nutrition-supplements-pie-total.png"></a></td>
                    
            </tr>
            </table>
            </div>
            <br><a href="#" class="gototop">Top</a>

<p id="beef"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Beef Processed</h3></td><td><h3>Other Processed</h3></td></tr></thead>

            <tr>
                <td><a  href="../img/pathogen-type-beef-processed-pie-total.png">
                    <img src="../img/pathogen-type-beef-processed-pie-total.png"></a></td>
                <td><a  href="../img/pathogen-type-other-processed-total.png">
                    <img src="../img/pathogen-type-other-processed-pie-total.png"></a></td>
            </tr>     
         </table></div>
         <br><a href="#" class="gototop">Top</a>

 

         <p id="baked"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Beef Processed</h3></td><td><h3>Other Processed</h3></td></tr></thead>

            <tr>
                <td><a  href="../img/pathogen-type-bread-baked-goods-pie-total.png">
                    <img src="../img/pathogen-type-bread-baked-goods-pie-total.png"></a></td>
                <td><a  href="../img/pathogen-type-cooking-oil-pie-total.png">
                    <img src="../img/pathogen-type-cooking-oil-pie-total.png"></a></td>
            </tr>     
         </table></div>
         <br><a href="#" class="gototop">Top</a>

         <p id="duck"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Duck Processed</h3></td><td><h3>Eggs</h3></td></tr></thead>

            <tr>
                <td><a  href="../img/pathogen-type-duck-processed-pie-total.png">
                    <img src="../img/pathogen-type-duck-processed-pie-total.png"></a></td>
                <td><a  href="../img/pathogen-type-eggs-pie-total.png">
                    <img src="../img/pathogen-type-eggs-pie-total.png"></a></td>
            </tr>     
         </table></div>
         <br><a href="#" class="gototop">Top</a>

<p id="alt-milk"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Alternative Milks</h3></td><td><h3>Mixed Meats Processed</h3></td></tr></thead>

            <tr>
                <td><a  href="../img/pathogen-type-milk-alt-milks-pie-total.png">
                    <img src="../img/pathogen-type-milk-alt-milks-pie-total.png"></a></td>
                <td><a  href="../img/pathogen-type-mixed-meat-processed-pie-total.png">
                    <img src="../img/pathogen-type-mixed-meat-processed-pie-total.png"></a></td>
            </tr>     
         </table></div>
         <br><a href="#" class="gototop">Top</a>


         <p id="salad"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Salad</h3></td><td><h3>Soft Drinks</h3></td></tr></thead>

            <tr>
                <td><a  href="../img/pathogen-type-salad-pie-total.png">
                    <img src="../img/pathogen-type-salad-pie-total.png"></a></td>
                <td><a  href="../img/pathogen-type-soft-drinks-pie-total.png">
                    <img src="../img/pathogen-type-soft-drinks-pie-total.png"></a></td>
            </tr>     
         </table></div>
         <br><a href="#" class="gototop">Top</a>

<h2>A Taste of Trouble: Common Food Contaminants by Product Category</h2>

<p id="cat-cheese"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Baby Foods / Formula</h3></td><td><h3>Cheese</h3></td></tr></thead>

            <tr>
                <td><a  href="../img/pathogen-category-baby-foods-formula-pie-total.png">
                    <img src="../img/pathogen-category-baby-foods-formula-pie-total.png"></a></td>
                <td><a  href="../img/pathogen-category-cheese-pie-total.png">
                    <img src="../img/pathogen-category-cheese-pie-total.png"></a></td>
            </tr>     
         </table></div>
         <br><a href="#" class="gototop">Top</a>

         <p id="cat-confectionery"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Confectionery</h3></td><td><h3>Herbs /Spices</h3></td></tr></thead>

            <tr>
                <td><a  href="../img/pathogen-category-confectionery-pie-total.png">
                    <img src="../img/pathogen-category-confectionery-pie-total.png"></a></td>
                <td><a  href="../img/pathogen-category-herbs-spices-pie-total.png">
                    <img src="../img/pathogen-category-herbs-spices-pie-total.png"></a></td>
            </tr>     
         </table></div>
         <br><a href="#" class="gototop">Top</a>


         <p id="cat-nuts"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Nuts / Seeds</h3></td><td><h3>Other</h3></td></tr></thead>

            <tr>
                <td><a  href="../img/pathogen-category-nuts-seeds-pie-total.png">
                    <img src="../img/pathogen-category-nuts-seeds-pie-total.png"></a></td>
                <td><a  href="../img/pathogen-category-other-pie-total.png">
                    <img src="../img/pathogen-category-other-pie-total.png"></a></td>
            </tr>     
         </table></div>
         <br><a href="#" class="gototop">Top</a>



         <p id="cat-pets"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Pet Food</h3></td><td><h3>Processed Fish</h3></td></tr></thead>

            <tr>
                <td><a  href="../img/pathogen-category-pet-food-pie-total.png">
                    <img src="../img/pathogen-category-pet-food-pie-total.png"></a></td>
                <td><a  href="../img/pathogen-category-processed-fish-pie-total.png">
                    <img src="../img/pathogen-category-processed-fish-pie-total.png"></a></td>
            </tr>     
         </table></div>
         <br><a href="#" class="gototop">Top</a>


         <p id="cat-pets"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Pet Food</h3></td><td><h3>Processed Fish</h3></td></tr></thead>

            <tr>
                <td><a  href="../img/pathogen-category-pet-food-pie-total.png">
                    <img src="../img/pathogen-category-pet-food-pie-total.png"></a></td>
                <td><a  href="../img/pathogen-category-processed-fish-pie-total.png">
                    <img src="../img/pathogen-category-processed-fish-pie-total.png"></a></td>
            </tr>     
         </table></div>
         <br><a href="#" class="gototop">Top</a>


         <p id="cat-ready"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Ready Meals / Ready to Eat</h3></td><td><h3>Sandwiches / Wraps</h3></td></tr></thead>

            <tr>
                <td><a  href="../img/pathogen-category-ready-meal-ready-to-eat-pie-total.png">
                    <img src="../img/pathogen-category-ready-meal-ready-to-eat-pie-total.png"></a></td>
                <td><a  href="../img/pathogen-category-sandwiches-wraps-pie-total.png">
                    <img src="../img/pathogen-category-sandwiches-wraps-pie-total.png"></a></td>
            </tr>     
         </table></div>
         <br><a href="#" class="gototop">Top</a>


         <p id="cat-sauces"></p>

<div>
    <table style="width:100%; margin: 0 auto;">
        <thead><tr><td style="width:50%"><h3>Ready Meals / Ready to Eat</h3></td><td><h3></h3></td></tr></thead>

            <tr>
                <td><a  href="../img/pathogen-category-sauces-condiments-pie-total.png">
                    <img src="../img/pathogen-category-sauces-condiments-pie-total.png"></a></td>
                <td></td>
            </tr>     
         </table></div>
         <br><a href="#" class="gototop">Top</a>

         
<h2 id="summary">Summary</h2>
<p>Food Safety Alerts for Pathogenic contaminations account 23% of all safety alerts issued by the FSA.</p>
<p>There has been a measurable increase in the number of pathogen safety alerts in 2024 (so far) compared to the previous few years.</p>
    
<p>Salmonella, Listeria, Clostridium botulinum, E.Coli are the most common pathogenic food contaminants accounting for 88% of all pathogen safety alerts</p>
<p>

<div class="format-table" >
        <table class="table-format" style="width:70%; margin: 0 auto;">
  <thead>
    <tr >
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
<br><a href="#" class="gototop">Top</a>
<?php include 'html-inc/footer.php'; ?>

</div>
<script src="/js/coder.min.6ae284be93d2d19dad1f02b0039508d9aab3180a12a06dcc71b0b0ef7825a317.js"></script>
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