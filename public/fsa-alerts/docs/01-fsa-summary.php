<?php include 'html-inc/header.php'; ?>
<title>Food Standards Agency - Summary Alerts Analysis</title>

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
            <div class="countries">
                <div id="JumptoSection">
                <select onchange="javascript:scrollToAnchor(this.value, 100);">

                        <option value="summary-analysis">Summary Analysis</option>
                        <option value="category-contamination">Which product categories receive the most safety alerts</option>
                        <option value="contaminant-food-category">Which product categories receive the most alerts for which contaminant category</option>
                        <option value="contaminant-food-type">Which product types receive the most alerts for which contaminant category</option>
                        <option value="confectionery-ready-meals">Confection and Ready Meals / Ready to Eat</option>
                        <option value="ready-meal-contaminants">Confection and Ready Meals / Ready to Eat - contaminants</option>
                        <option value="objective">Objective of the report </option>
                        <optgroup label="Repeat Offenders">
                            <option value="repeat-offenders">Repeat Offenders</option>
                            <option value="repeat-offenders-grocer">Grocers</option>
                            <option value="repeat-offenders-import-manufacturing">Repeat Offenders - Importers and Manufacturers</option>
                            <option value="top-brands">Top Brands</option>
                        </optgroup>
                        <option value="time-series-alert-category">Visualisations - Time Series by Alert Category</option>
                        
                        <option value="top-brands">Conclusions</option>
                    </select>
                </div>
            </div>
        </div>

        

        <h1 id="">Food Standards Agency - Food Alerts Analysis</h1>
            <!-- <img src="/img/food-standards-agency-logo.jpg" style="width:50%"> -->
            
            <p><img src="../icons/food-standards-agency-logo.jpg" style="width:30%"></p>
            
            <p class='last-updated'><?php include 'last-updated.php' ?></p>

        <h2 id="abstract">Abstract</h2>

        <p>This report presents a comprehensive review of the food safety alerts issued by the UK Food Standards Agency. The analysis provides 
                insights into the frequency, types, and relevant information about each alert, covering an eight year period. The study aims to raise 
                awareness about the importance of monitoring and responding to food safety incidents, highlighting the need for effective public health measures to 
                prevent outbreaks and protect consumers. By analysing the characteristics and trends of these alerts, this report contributes to the understanding of food 
                safety risks and informs policy decisions aimed at promoting a safer food environment.</p>
                
        <p><img src="../icons/INFOGRAPHIC.png" style="width:100%"></p>
                
            
        <h2 id="summary-analysis">Summary Analysis - Food Safety Alerts from food.gov.uk</h2>
        <p>Food safety is a critical concern that affects public health worldwide. In the United Kingdom, ensuring the quality and safety of the food supply is a top 
            priority for both government agencies and food businesses. The Food Safety Act 1990 sets out the legal framework for food safety in the UK, 
            while regulations such as the Food Information Regulations 2014 (FIR) and the General Food Regulations 2004 (GFR) provide detailed guidance on 
            specific aspects of food production, processing, and sale.</p>

        <p>Despite these efforts, foodborne illnesses continue to occur, and food safety alerts are issued regularly by government agencies and other organizations. 
            These alerts typically involve recalls or withdrawals of contaminated or potentially harmful products from the market, and they can have significant 
            economic and public health impacts. For example, the UK's Food Standards Agency (FSA) has a dedicated page on its website where it publishes information 
            about food safety incidents and related recalls [1]. Similarly, the European Food Safety Authority (EFSA) provides comprehensive information on its 
            website about foodborne outbreaks and other safety issues in the EU [2].</p>

<p>This analysis will examine recent food safety alerts issued by food.gov.uk. By examining these alerts, I can identify 
    common themes and trends related to food safety, as well as areas where improvement is needed. This research aims to contribute to a deeper understanding of the 
    complexities surrounding food safety and to inform strategies for improving public health.</p>

<h3>References</h3>

<ul class="list"><li> [1] Food Standards Agency (FSA). <a href="https://www.food.gov.uk/">https://www.food.gov.uk/</a></li>
<li>[2] European Food Safety Agency (EFSA). <a href="https://www.efsa.europa.eu/en">https://www.efsa.europa.eu/en</a> </li></ul>


        <h2>Quick Note : </h2>
        <p>The number of products for which alerts are issued reported here, is a lot lower than reality. Prior to July 2024, 
            only products mentioned in the search results alert title and sub text are included. Post July 2024, these are now being scraped.</p>

        <h2 id="category-contamination">Product Categories most often contaminated</h2>

        <p>Which product categories are most often contaminated.</p>
        <div style="width:100%;" >
        <table class="" >
            <tr>
                <td><a href="../img/product_category-total-hbar.png">
                <img src="../img/product_category-total-hbar.png" ></a></td>
                <td><a href="../img/product_type-total-hbar.png">
                <img src="../img/product_type-total-hbar.png" ></a></td>
            </tr></table></div>
    
            <div style="width:100%;" >
            <table class="" >
            <tr><td style="width:50%" ><p style="font-size:0.8em">Under Other: Vegetables / Salad 5, Milk / Alt Milks 6, Processed Fruit 6, Vegetarian Meat Alternatives 3</p></td>
                <td><p  style="font-size:0.8em">Under Other: Eggs 1, Bottled Water 1, Tofu 1, Honey 1, Salad 2, Duck Processed 2, Lamb Processed 2, Cooking Oil 3, Coffee / Tea 3, Rice 4, Milk / Alt Milks 6,
                    Fruit Processed 6, Mixed Meat Processed 8, Other Processed 9, Cereal 13, Soft Drinks 13</p></td>
                </tr>
            
        </table>
    </div>
<br><a href="#" class="gototop">Top</a>
       
        
        <h2 id="contaminant-food-category">Product Category by Food Contaminants</h2>
        
        <p>Which contaminants are most often found in which product category.</p>
        
        <a href="../img/product_category-contaminant_category.png">
            <img src="../img/product_category-contaminant_category.png" style="width:75%"></a>
        
        
        <h2 id="contaminant-food-type">Product TYPE Contaminants</h2>
        
        <p>Which contaminants are most often found in which product TYPE.</p>
        <p>Product Type breaks out the larger categories such as "Confectionery, Processed Meats" into sub categories. The consolidation into categories is 
            largely to simplify the visualisation where a large number of entries with a low number of alerts would overly complicate the visualisation. </p>

        <p>Product Categories / Types</p>

        <div style="width:100%;" >
            <table  >            <thead>
            <tr>
                <th style="text-align: left" >Product Category</th>
                <th style="text-align: left">Product Types</th>
            </tr>
            </thead>
            <tr>
                <td>Beverages</td>
                <td>Alcohol, Bottled Water, Coffee / Tea, Soft Drinks</td>
            </tr>
            <tr>
                <td>Confectionery</td>
                <td>Sweets, Crisps, Ice cream etc.</td>
            </tr>
            <tr>
                <td>Processed Meats</td>
                <td>Pork Processed, Chicken Processed, Beef Processed, Duck Processed, Mixed Meats, Lamb Processed</td>
            <tr>
                <td>Other</td>
                <td>Rice, Cooking Oil, Tofu, Meat Alternatives</td>
            </tr>
        </tr>
        </table></div>
        <br><a href="#" class="gototop">Top</a><p></p>
        
        <a href="../img/product_type-contaminant_category.png">
            <img src="../img/product_type-contaminant_category.png" style="width:75%"></a>
        <br><a href="#" class="gototop">Top</a>
        <h2 id="confectionery-ready-meals">Confectionery and Ready Meals / Ready to eat foods : Factors contributing to Food Safety alerts</h2>
        
        <p>The number of process steps and the number of ingredients in Confectionery and Ready Meals products could be contributing factors to the higher frequency of food 
            safety alerts. </p>
            <p>Here's why : </p>
        <ul class="list">
        <li><b>More opportunities for contamination : </b> When there are more process steps involved, such as mixing, cooking, and packaging, each step creates an opportunity 
            for contamination or mishandling. This increased complexity can lead to a greater risk of introducing pathogens or other contaminants into the product.</li>
        
        <li><b>Higher likelihood of human error : </b> As the number of process steps increases, so does the potential for human error. 
            Fatigue, distractions, or lack of training can all contribute to mistakes that compromise food safety.</li>
        
        <li><b>Greater variety of ingredients and allergens : </b> With more ingredients comes a greater variety of potential allergens and intolerances. 
            This can increase the risk of adverse reactions in consumers with specific dietary needs or restrictions.</li>
        
        <li><b>Increased complexity in manufacturing and storage : </b> When there are many ingredients, process steps, and product varieties involved, 
            manufacturing and storage processes become increasingly complex. This complexity can create opportunities for 
            contamination or mishandling during production, packaging, and distribution.</li>
        
        
        <li>In the case of Ready Meals, which often involve meat, dairy, or eggs, the number of ingredients and process steps might be particularly high. This could contribute 
            to a greater risk of foodborne illnesses if proper handling and processing procedures are not followed.</li>
        </ul>
            <h3>Other Factors</h3>
        <ul class="list">
            <li><b>Wide consumption and distribution : </b> Confectionery products like chocolates, candies, and baked goods are widely consumed and distributed globally. 
            They're often produced in large quantities and have a long shelf life, making them more likely to reach a broader audience and increase the risk of 
            contamination or mishandling.</li>
        
            <li><b>High-risk ingredients : </b> Some confectionery products may contain high-risk ingredients like nuts, dairy, eggs, or soy, which can be allergenic or 
            cause adverse reactions in susceptible individuals. This could lead to more alert submissions related to food allergies or intolerances.</li>
        
        <li><b>Complex supply chains : </b> Confectionery products often have complex supply chains involving multiple manufacturers, distributors, and retailers. 
        This complexity can create opportunities for contamination or mishandling at various stages of production, storage, or transportation, leading 
        to increased alert rates.</li>
        
        <li><b>Ready-to-eat/Ready Meals : </b>Convenience vs. Risk: Ready-to-eat/Ready Meals are designed for convenience, which can also increase the risk of contamination 
        or mishandling. These products often require multiple handling and preparation steps, making it easier for pathogens to contaminate them. The fact that these products
        are already prepared for consumption might contribute to a higher alert rate from consumers not storing the product correctly. </li>
        
        <li><b>Increased regulatory scrutiny : </b>As consumers become more health-conscious and demand greater transparency in food production, regulatory agencies like 
        the UK's Food Standards Agency (FSA) may be more likely to issue alerts related to confectionery and Ready Meals. This could be due to the perceived 
        risks associated with these products or increased public awareness of potential hazards.</li>
        
        <li><b>Higher incidence of adverse reactions : </b>Confectionery products can contain high levels of added sugars, which have been linked to various health issues, 
        including gastrointestinal symptoms. Similarly, Ready Meals might be more prone to contamination due to their higher moisture content and the presence of meat, 
        dairy, or eggs, which are common sources of foodborne illnesses.</li>
        
        <li><b>Industry dynamics : </b>The confectionery and Ready Meal industries may experience more frequent changes in production processes, formulations, or suppliers, 
        which can increase the risk of contamination or mishandling. This could lead to a higher alert rate as regulators respond to these changes.</li>
        </ul>
        <p>These factors are not exhaustive, but they might contribute to the high frequency of food safety alerts for confectionery and Ready Meals products.</p>
        
        <h2 id="ready-meal-contaminants">Confectionery and Ready Meals / Ready to eat foods : Most common  Contaminants</h2>
        
        <p>Which are the top contaminants by contaminant category.</p>
        <div  style="width:100%;" >
            <table class="" >
                <thead><th style="width:50%">Ready Meals / Ready to Eat</th>
            <th>Confectionery</th></thead>
            <tbody>
                <tr>
                <td><a href="../img/pathogen-type-ready-meal-ready-to-eat-pie-total.png"><img src="../img/pathogen-type-ready-meal-ready-to-eat-pie-total.png" ></a></td>
                <td><a href="../img/pathogen-type-confectionery-pie-total"><img src="../img/pathogen-type-confectionery-pie-total.png" ></a></td>
            </tr>
            <tr>
                <td><a href="../img/allergen-type-ready-meal-ready-to-eat-pie-total.png"><img src="../img/allergen-type-ready-meal-ready-to-eat-pie-total.png" ></a></td>
                <td><a href="../img/allergen-type-confectionery-pie-total"><img src="../img/allergen-type-confectionery-pie-total.png" ></a></td>
            </tr>

            <tr>
                <td><a href="../img/other-type-ready-meal-ready-to-eat-pie-total.png"><img src="../img/other-type-ready-meal-ready-to-eat-pie-total.png" ></a></td>
                <td><a href="../img/other-type-confectionery-pie-total"><img src="../img/other-type-confectionery-pie-total.png" ></a></td>
            </tr>

            <tr>
                <td><a href="../img/foreign_material-type-ready-meal-ready-to-eat-pie-total.png"><img src="../img/foreign_material-type-ready-meal-ready-to-eat-pie-total.png" ></a></td>
                <td><a href="../img/foreign_material-type-confectionery-pie-total"><img src="../img/foreign_material-type-confectionery-pie-total.png" ></a></td>
            </tr>
            </tbody>
        </table></div>
        <br><a href="#" class="gototop">Top</a>



       <h2 id="repeat-offenders">Repeat Offenders</h2>
       <h3 id="repeat-offenders-grocer">The Grocer Channel</h3>

        <p>As the main distribution point for food to retail customers, the supermarkets obviously appear repeatedly in the Food Safety Alerts, these are most often for 
        own branded products. Currently the FSA does not collect data on the source manufacturer of the product. This makes analysis of repeat offenders impossible at this 
        stage, despite it being a legal requirement that packaging is printed with the original supplier, the FSA does not collect this data consistently.</p>

        <p>The analysis of food safety alerts issued by the UK Food Safety Agency reveals a concerning trend. A significant proportion of these alerts - in fact, a 
            surprising 34% - are related to own-brand products sold by major supermarkets. This is equivalent to 326 individual alerts issued to supermarkets across the 
            country. These alerts highlight instances where food products have been found to pose a risk to consumer health and safety, whether due to contamination, 
            mislabelling, or other issues.</p>

        <h3 id="repeat-offenders-import-manufacturing">Importers and Manufacturers</h3>
        <p>Upon examining the food safety data, it becomes apparent that while there are some repeat instances from the same manufacturer, these incidents are often 
            scattered across an extended period of time. This pattern suggests that rather than being indicative of endemic problems or systemic failures within a 
            company, these isolated events may be more likely the result of one-off mistakes or random fluctuations. Moreover, when analysing the distribution of 
            incidents across manufacturers, I observed that most companies tend to have only a few incidents, and these are typically clustered together in time, implying a 
            single incident rather than an ongoing issue. This analysis implies that while some manufacturers may experience occasional slip-ups, they are not necessarily 
            indicative of deep-seated problems or a culture of non-compliance.</p>

            <h3 id="top-brands">The Top Brands</h3>
       <p>It should be noted that Food Safety incidents in the UK, the number of food alerts issued, is very low when compared to the number of products in the market 
        and caution should be applied when drawing any conclusions. Generally speaking, UK Food Safety is high and the Food Standards Agency has implemented robust measures 
        to ensure the safety of consumers, including stringent testing protocols, effective recall procedures, and transparent communication channels. The agency's 
        proactive approach and commitment to public health have helped maintain a strong reputation for food safety in the UK.</p>
        <ul class="list">
            <li>There are over 360 different suppliers identified in the dataset. The main categories of supplier include : Grocer, Importer, Manufacturer 
                (Contract Manufacturer) and Retail Brand</li>
       <li>For example it should come as no surprise to find that own brand products from major retailers (supermarkets) make up more than 34% of the alerts issues.</li>
       </ul>
       
       <div >

       <?php include "../tables/supplier_type-annual-alert-count.php" ?>
       </div>
       
       
       <br><a href="#" class="gototop">Top</a>
       <h2 id="time-series-alert-category">Temporal Analysis</h2>
       <p>Time Series visualisation by alert category.</p>

       <div >
            <table  style="width:100%; margin: 0 auto;">
                <tr>
                    <td><a  href="../img/fsa-alerts-by-category-yyyy-mm.png"><img src="../img/fsa-alerts-by-category-yyyy-mm.png"></a></td>
                    <td></td>
                    
                </tr>
                <tr>
                    <td><a  href="../img/fsa-alerts-by-category-mmm.png"><img src="../img/fsa-alerts-by-category-mmm.png"></a></td> 
                    <td><a  href="../img/fsa-alerts-by-category-yyyy.png"><img src="../img/fsa-alerts-by-category-yyyy.png"></a></td>               
                </tr>
            </table></div>
            <br><a href="#" class="gototop">Top</a>
            
            
            <h2>Conclusion</h2>
       <p>In conducting temporal analysis on the food safety alert data, I found that there is no strong correlation between the date alerts are issued and the type 
        of alert. While some patterns do emerge, such as slightly higher alert rates in the months leading up to year-end (March) or quarter-end dates 
        (March, June, September, December), these correlations are weak and should not be interpreted as indicating a meaningful trend. It appears that the timing
         of alerts is not driven by specific business cycles or calendar events, but rather reflects the stochastic nature of food safety incidents. 
         As such, I caution against drawing conclusions based on these correlations, and instead recommend focusing on other factors that may influence alert rates.</p>
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
    anchor.scrollIntoView({ behavior: 'smooth', block: 'center', duration: 800 });
    // Add the padding to the top of the page
    window.scrollTo({
      top: anchor.offsetTop - padding,
      behavior: 'smooth'
    });
  }
}
</script>