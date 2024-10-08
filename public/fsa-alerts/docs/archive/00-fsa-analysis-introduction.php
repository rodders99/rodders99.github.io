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
            <img src="/img/food-standards-agency-logo.jpg" style="width:50%">

            <h2 id="project-overview">Project Overview: Analysing Food Safety Alerts from food.gov.uk</h2>

<h3>Did you know that 34% of all food safety alerts are issued to grocery retailers for own brand products, yet the origin of many products remains unknown? </h3>

<p>As we explore the complexities of food safety in the UK, let's start by peeling back the layers and uncovering the truth behind our daily diets.</h>
<p>Food safety is a critical issue in the UK. Millions of people are affected by foodborne illnesses every year. These illnesses can range from mild discomfort to life-threatening complications.</p>
    <p>In this report, I delve into the complexities of food safety in the UK. I examine the trends, patterns, and areas for improvement, to better understand the issues.</p>

    <img src="img/fsa-sankey-diagram.png">
    <br><a href="#">Top</a>
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
    
    <a href="#">Top</a>
    
        <h2 id="methodology">Methodology:</h2>
        <p>This report employed a comprehensive approach to analysing Food Standards Agency (FSA) alert data. A dataset comprising 824 FSA alerts was obtained and thoroughly 
            cleaned to ensure accuracy. The data was then categorized by contaminant type and food category, allowing for the identification of trends and patterns.
            To gain insights into the complexities of food safety in the UK, I utilised statistical analysis tools to examine the relationships between different contaminants 
            and food categories. This methodology enabled me to uncover key findings that inform understanding of the FSA's alert data and its implications for the food industry.</p>

        <h3 id="data-collection">Data Collection:</h3>
        <p>Web Scraping: I developed a web scraping script with <a href="https://www.selenium.dev/">selenium</a> that collected the search results from food.gov.uk and 
        archived alerts from nationalarchive.gov.uk. During the data collection process, it was noted that a lot of data was missing from 2017 with no data 
        available for 2018 to 2020.</p>
        
        <p>There were two types of alerts that are issued and have been scraped from the websites: Allergen Alerts and Safety Alerts.</p>
        
        <p><ul class="list"><li>Allergens detailed mainly foods that had been either contaminated with an allergen or had an undeclared allergen.</li> 
            <li>Safety alerts included pathological, foreign body contamination or other alerts, for example: dangerous packaging (exploding bottles for example), 
                mislabelled packaging.</li></ul>
    </p>
    <br><a href="#">Top</a>
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
       
        <br><a href="#">Top</a>
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
(currently the product data is in the free form body text field of the alert, with inconsistent formatting. Product data is currently either formatted as an untagged html table, or 
as paragraphs, both types embedded in the alert body text).</li>
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
<br><a href="#">Top</a>



<h2 id="summary">Summary</h2>
<p>In this report, I've analyzed trends, patterns, and areas for improvement across various contaminant types and affected food categories. The following pages 
    present a series of visualizations that illustrate these findings, providing insights into which contaminants are most prevalent in different food groups. 
    You'll see how some contaminants are more likely to occur in certain types of food, while others show no clear patterns. This comprehensive analysis will help 
    you better understand the complex landscape of food safety in the UK and identify opportunities for improvement."</p>
    <br><a href="#">Top</a>
</body>
</html><script>
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