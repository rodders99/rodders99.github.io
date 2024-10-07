

<?php include 'html-inc/header.php'; ?>



<title>Food Standards Agency - Introduction to Alerts Analysis</title>
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

            <div id="JumptoSection">
            <span style="display: inline;"><p>Jump to section
            
                <!-- <div id="JumptoSection"> -->
                <select onchange="javascript:scrollToAnchor(this.value, 100);">
                        <option value="project-overview">Project Overview</option>
                        <option value="objective">Project Objective</option>
                        <option value="methodology">Methodology</option>
                        <option value="data-collection">Data Collection</option>
                        <option value="data-points">Data Points</option>
                        <option value="data-analysis">Data Analysis</option>
                        <option value="recommendations">Recommendations</option>
                        <option value="summary">Summary</option>
                      
                    </select>
                <!-- </div> -->
            </p>
            
        </div></span>



        </div>

        <div id="JumptoSection">
            <h2>Jump to section</h2>
            <div class="countries">
                <div id="JumptoSection">
                <select onchange="javascript:scrollToAnchor(this.value, 100);">
                        <option value="project-overview">Project Overview</option>
                        <option value="objective">Project Objective</option>
                        <option value="methodology">Methodology</option>
                        <option value="data-collection">Data Collection</option>
                        <option value="data-points">Data Points</option>
                        <option value="data-analysis">Data Analysis</option>
                        <option value="recommendations">Recommendations</option>
                        <option value="summary">Summary</option>
                      
                    </select>
                </div>
            </div>
        </div>


        <h1 id="">Food Standards Agency - Alerts Analysis</h1>
        <p><img src="../icons/food-standards-agency-logo.jpg" style="width:30%"></p>

        <p class='last-updated'><?php include 'last-updated.php' ?></p>

            <h2 id="project-overview">Project Overview: Analysing Food Safety Alerts from food.gov.uk</h2>

<h3>Did you know that 37% of all food safety alerts are issued to grocery retailers for own brand products, yet the origin of many of these products remains unknown? </h3>

<p>As we explore the complexities of food safety in the UK, let's start by peeling back the layers and uncovering the truth behind the safety of our daily diets.</h>
<p>Food safety is a critical issue in the UK. Millions of people are affected by foodborne illnesses every year. These illnesses can range from mild discomfort to life-threatening complications.</p>
    <p>In this report, I delve into the complexities of food safety in the UK. I examine the trends, patterns, and areas for improvement, to better understand the issues.</p>

    <img src="../img/fsa-sankey-diagram.png">
        <br><a href="#" class="gototop">Top</a>

        <h3 id="objective">Objective:</h3>
        <p>The purpose of this report is to provide a comprehensive visual overview of food safety alerts issued by the UK Food Standards Agency, 
            with a focus on major food categories and their corresponding contamination risks. By presenting a range of visualizations, including 
            stacked bar plots, pie chart and time-series plots. The objective is to provide readers with valuable insights into the types of contaminants that pose 
            the greatest threats to consumer health. By visualizing the data, I have improved accessibility, and in turn, I hope that this helps empower 
            policymakers, industry professionals, and consumers with data-driven insights that inform their decisions on food safety management and 
            risk mitigation strategies.</p>

        <p>The report's objective is threefold. 
            <ul class="list">
                <li>Firstly, it aims to provide a broad overview of the distribution of food safety alerts across different categories, 
                highlighting areas where contamination risks are particularly high.</li> 
                <li>Secondly, it seeks to drill down into specific food categories, presenting detailed visualizations that illustrate the types 
                    and frequencies of contaminants associated with each category.</li> 
                <li>Finally, the report aims to facilitate comparison and analysis between different food categories, enabling stakeholders 
                    to identify trends, patterns, and areas for improvement in food safety practices. </li></ul></p>
        
        <p>By achieving these objectives, I hope to contribute to a safer and more informed food system in the UK, and assuage my intense 
            curiosity about how safe UK food really is (Hint, we're good ....)</p>

        <p>The main goal of this analysis is to provide data-driven insights that inform policymakers, industry 
            professionals, and consumers about effective strategies for managing food safety risks in the UK. By visualizing 
            the data, I aim to improve accessibility and empower stakeholders with actionable recommendations that can help reduce foodborne 
            illnesses and ensure a safer food system.</p>
    
    <a href="#" class="gototop">Top</a>
    
        <h2 id="methodology">Methodology:</h2>
        <p>This report employed a comprehensive approach to analysing Food Standards Agency (FSA) alert data. A dataset comprising 824 FSA alerts was obtained and thoroughly 
            cleaned to ensure accuracy. The data was then categorized by contaminant type and food category, allowing for the identification of trends and patterns.
            To gain insights into the complexities of food safety in the UK, I utilised statistical analysis tools to examine the relationships between different contaminants 
            and food categories. This methodology enabled me to uncover key findings that inform understanding of the FSA's alert data and its implications for the food industry.</p>

        <h3 id="data-collection">Data Collection:</h3>
        <p>Web Scraping: I developed a web scraping script with <a href="https://www.selenium.dev/">selenium and <a href = "https://streamlit.io/">Streamlit</a> that collects the search results 
        from food.gov.uk and archived alerts from nationalarchive.gov.uk. During the data collection process, it was noted that a lot of data was missing from 2017 to 2020.</p>

        The web scrape app compares these search results with the data already collected and highlights any missing alert notices allowing a single click to scrape, assemble and present
        the alert notice data for editing and validation.
        
        <p>There were two types of alerts that are issued and have been scraped from the websites: Allergen Alerts and Safety Alerts.</p>
        
        <p><ul class="list"><li>Allergens : which details mainly foods that had been either contaminated with an allergen or had an undeclared allergen.</li> 
            <li>Safety alerts : Which includes pathological, foreign body contamination or other alerts, for example: dangerous packaging (exploding bottles for example), 
                mislabelled packaging.</li></ul>
    </p>
    <br><a href="#" class="gototop">Top</a>
    <h3 id="data-points">Observations</h3>
        <p>Each observation from the original webs scrape includes the date, Title and search results body text</p>
        
        <h3 id="Feature Engineering">Feature Engineering</h3>
        <p>Additional features were engineered from the data as part of the Data Cleanse and Feature Engineering phases of development.</p>
        <ul class="list">
        <li>Supplier - Extracted through splitting the Title. There was an element of manual editing in order to apply a consistent format to the Titles</li>
        <li>Pathogen - Extracted through splitting the Title where possible. Manually edited into the title from the Body Text where it was missing from the title</li>
        <li>Allergen - Extracted through splitting the Title where possible. Manually edited into the title from the Body Text where it was missing from the title</li>
        <li>Foreign Material - Extracted through splitting the Title where possible. Manually edited into the title from the Body Text where it was missing from the title</li>
        <li>Other - Extracted through splitting the Title where possible. Manually edited into the title from the Body Text where it was missing from the title</li>
        <li>Supplier_Type and Supplier (name) are hand curated from the data. Supplier_Type being one of Importer / Manufacturer, and </li>
        <li>Brand is hand curated from the data and captures any Brand mentioned in the notice. </li>
        <li>Outlet_Type and Outlet (name) is hand curated from the data. and captures the outlet type (Grocer, Wholesaler, Retail, Restaurant) mentioned in the notice. </li>

        </ul>
    <h3 id="data-analysis">Data Analysis:</h3>
        
        <ul class="list" >
            <li><b>Temporal Trends</b>: Examine how the number of alerts changes over time. Identify any seasonal patterns or trends over months, quarters, or years. 
                This can help in understanding if there are specific times when food safety issues are more prevalent.</li>
            <li><b>Risk Type Trends</b>: Analyze the trends for each type of risk (pathological, allergic, foreign body) over time. This can help identify which risks are becoming 
                more or less common.</li>
            <li><b>Temporal Analysis</b>: How frequently did brands appear in the alerts? Do any brands demonstrate patterns of repeated alerts. </li>
            <li><b>Brand Analysis</b> : Brand-Specific Alerts: Identify which brands have the most alerts. This can help in understanding if certain brands are more prone to 
            food safety issues.</li>
            <li><b>Risk Types by Brand</b> : Analyze the types of risks associated with each brand. This can help in understanding if certain brands are more prone to specific types of risks.</li>
        </ul>
       
        <br><a href="#" class="gototop">Top</a>




<h2 id="recommendations">Recommendations</h2>
<p>There were a number of issues identified when working with the data and I would like to recommend improvements to the data captured by the Food Standards Agency Team:</p>

<ul class="list">
    <li><b>Consistency</b> : Data prior to 2021 is scant on detail. There's not much that can be done to resolve this at this stage</li>
    <li><b>Breadth of data capture</b> : Own Brand products under retail brands i.e. "Sainsbury's Roast Beef Wrap" or "Waitrose Essential Frozen Cooked King Prawns", <i>often</i> did not 
    capture the original manufacture of the product. It is a requirement of UK Food Labelling that the name, address and contact details of the manufacturer / importer is detailed 
        on packaging, despite this requirement, this data is not captured by the FSA and further analysis of the data is impossible.</li>
<ul class="list">
    <li>e.g. using company information to track endemic issues back to the Contract Manufacturer and associated directors, regardless of the retail brand.</li>
</ul>
<li><b>Data structure</b> : There may be more data in the dataset held at the FSA, but the dataset released to the public is very limited. I would like to see a list of affected 
products in a consistent format with a separate entry for each product with it's own database row. This should be linked back to the original alert data capture. 
The product data is currently in the free form body text field of the alert notice. More recently, alert notices include Product data that can be scraped from 
the tables included in the alert notice (noted with a &lt;caption&gt; tag).  Older data has product data formatted as paragraphs, which is a lot more difficult to correctly scrape.</li>
<li><b>Breakout Data into separate fields</b> : All data useful for analytics is within the title or body text of the data requiring extensive feature engineering and manual editing 
prior to any analysis, as was the case for this analysis. Feature Engineering adds the potential for the quality of data to be impacted negatively and manual editing risks 
introducing errors.</li>
<p>I would like to see the the FSA update the data structure and breakout key data:</p>
<ul class="list">
    <li>Retail Outlets Affected - The Contract Manufacturer /Importer knows who they sold the product to and should be able to provide this information to the FSA.</li>
    <li>Contract Manufacturer / Importer - Full details of the company that manufactured or imported the product : Company name, contact details, company registration number. There are enough alerts 
        for "Unapproved Facilities" to make this a requirement (in my opinion.)</li>
    <li>Breakout of Contaminant types / Issues into separate fields: Pathogen, Allergen, Chemical /Pesticide, Foreign Material, Other Issue</li>
    <li>Breakout of product categories and product types.</li>
</ul></li>
<li><b>Data availability</b> :  There is no download option that I could find for this data, requiring web scraping which is a far from ideal method of data acquisition.</li>
<li><b>Expansion of contaminant categories</b> : Currently data is captured for allergen and general safety alerts. I would like to see this expanded to cover pesticide contamination as well.</li>
</ul>
<br><a href="#" class="gototop">Top</a>



<h2 id="summary">Summary</h2>
<p>In this report, I've analyzed trends, patterns, and areas for improvement across various contaminant types and affected food categories. The following pages 
    present a series of visualizations that illustrate these findings, providing insights into which contaminants are most prevalent in different food groups. 
    You'll see how some contaminants are more likely to occur in certain types of food, while others show no clear patterns. This comprehensive analysis will help 
    you better understand the complex landscape of food safety in the UK and identify opportunities for improvement."</p>
    <br><a href="#" class="gototop">Top</a></p>

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