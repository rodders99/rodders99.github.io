<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="" xml:lang="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="color-scheme" content="dark">

    <!-- <link rel="stylesheet" type="text/css" href="https://rodders.me/css/custom.css"> -->
    <link rel="stylesheet" type="text/css" href="https://rodders.me/css/custom-menu2.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="/css/project-style.css">


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
            <div class="countries">
                <div id="JumptoSection">
                    <!-- <select onchange="window.location.hash=this.value"> -->
                    <select onchange="javascript:scrollToAnchor(this.value, 100);">
                        <option value="#">Select to jump to section ....</option>
                        <option value="other_types-annual-table">Table : Other Unclassified Safety Alerts by year</option>
                        <option value="other-type-time-series">Time Series Cross-Sectional Visualisations of Other Alerts</option>
                        <option value="other-type-distribution">Visualisation of Other Safety Alerts Distribution by Types</option>
                        <option value="product-type-distribution">Visualisation of Other Safety Alerts Distribution by Product Type</option>
                        <option value="other-total-time-series">Time Series Visualisations of Other (unclassified) Safety Alerts</option>
                        <option value="other-visualisations-1">Labelling Errors - Temporal and Common Affected Foods Visualisations</option>
                        <option value="other-visualisations-2">Unapproved Facilities - Temporal and Common Affected Foods Visualisations</option>
                        <option value="other-visualisations-3">Unhygienic Production - Temporal and Common Affected Foods Visualisations</option>
                        <option value="other-visualisations-4">Packaging - Temporal and Common Affected Foods Visualisations</option>
                        <option value="other-visualisations-5">Shattering Bottles - Temporal and Common Affected Foods Visualisations</option>
                        <option value="other-visualisations-6">Choking Hazard - Temporal and Common Affected Foods Visualisations</option>
                        <option value="other-visualisations-7">Undercooked Ingredients - Temporal and Common Affected Foods Visualisations</option>
                        <option value="food-by-other-type">Other Classified Contamination Distribution Across Top Food Categories</option>
                        <optgroup label="Product Type">
                            <option value="confectionery">Confectionery</option>
                            <option value="confectionery">Ready Meal / Ready to Eat</option>
                            <option value="vegetables">Vegetables</option>
                            <option value="vegetables">Alcohol</option>
                            <option value="chicken">Chicken Processed</option>
                            <option value="chicken">Fish Processed</option>
                            <option value="sauces">Sauces / Condiments</option>
                            <option value="sauces">Pork Processed</option>
                            <option value="soft-drinks">Soft Drinks</option>
                            <option value="soft-drinks">Beef Processed</option>
                            <option value="dairy">Dairy</option>
                            <option value="dairy">Nutrition Supplements</option>
                            <option value="baby">Baby Foods / Formula</option>
                            <option value="baby">Cheese</option>
                        </optgroup>
                        <optgroup label="Product Category">
                            <option value="cat-beverages">Beverages</option>
                            <option value="cat-beverages">Canned Goods</option>
                            <option value="cat-confectionery">Confectionery</option>
                            <option value="cat-confectionery">Nutrition / Supplements</option>
                            <option value="cat-fish">Processed Fish</option>
                            <option value="cat-fish">Processed Meats</option>
                            <option value="cat-ready-meal">Ready Meal / Ready to Eat</option>
                            <option value="cat-ready-meal">Sauces / Condiments</option>
                        </optgroup>


                        <option value="summary">Summary</option>
                    </select>
                </div>
            </div>
        </div>


        <h1>Food Standards Agency - Alerts Analysis</h1>
        <p><img src="../icons/food-standards-agency-logo.jpg" style="width:30%"></p>

        <p class='last-updated'><?php include 'last-updated.php' ?></p>


        <h2 id="project-overview-">Other Category Contamination Analysis for Food Safety Alerts from food.gov.uk</h2>

        <p>This section provides an overview of food safety alerts issued by the Food Standards Agency that do not fall
            under the categories of pathogens,
            allergens, or foreign materials. The data presented below highlights other contaminant, production or
            packaging issues that have posed a risk to public health and food safety.</p>

        <h3>Labelling Error</h3>
        <p>Generally these are the misidentification or missing ingredients in required product labelling, incorrect
            storage instructions, or misleading claims about the product's
            characteristics. This type of error can result in consumers making uninformed purchasing decisions,
            potentially compromising their health.</p>
        <h3>Unapproved Facilities</h3>
        <p>Unapproved facilities may not have met minimum food safety standards, increasing the risk of contamination
            and potential harm to consumers.</p>

        <h3>Unhygienic Production</h3>
        <p>Unhygienic production refers to the failure to maintain proper cleanliness and sanitation standards during
            food processing, manufacturing, or preparation.
            This type of error can occur at any stage of the food production process, from raw material handling to
            finished product packaging. Common examples of
            unhygienic production practices include:
        

        <ul>
            <li>Inadequate cleaning and sanitizing</li>
            <li>Poor personal hygiene</li>
            <li>Inadequate storage and handling</li>
            <li>Lack of temperature control</li>
        </ul>

        <h3>Packaging Issues</h3>
        <p>Improper packaging can also compromise the integrity of food packaging materials, allowing contaminants to
            enter the product stream.</p>
        <h3>Shattering Bottles</h3>
        <p>Highlighting the potential risks associated with fragile packaging, manufacturing defects, post production
            fermentation and more.</p>
        <h3>Choking Hazards</h3>
        <p>Contributing factors to choking hazards include the use of restricted thickening /gelling agents, plastic or
            wood parts</p><p>Examples include<ul class="list">
                <li>Creatine particles due to re-crystallisation</li>
                <li>Konjac flour, Carrageenan, Sodium Alginate and Konjac that are not permitted as an ingredient in jelly confectionery</li>
        </ul></p>

        <h3>Undercooked Products</h3>
        <p>Undercooked products may contain harmful bacteria, viruses, or parasites, posing a significant risk to public
            health.</p>

        <h2 id="other_types-annual-table">Other Unclassified Safety Alerts - Types by year</h2>
        
        <p>Note, data currently missing between 2017 and 2020</p>

        <div class="datatable-container" style="margin-right:auto;margin-left:0px; width:100%">
                <?php include "../tables/other-annual-alert-count.php" ?>
            </div>


            <p><a href="#" class="gototop">Top</a> </p>

            <h2 id="other-type-time-series">Time Series Cross-Sectional Visualisations of Unclassified Alerts: </h2>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td>
                                <a href="../img/other-contaminant_type-yyyy-mm.png">
                                    <img src="../img/other-contaminant_type-yyyy-mm.png" style="width:100%"></a>
                                </td>

                        </tr>
                        <tr>
                            <td><a href="../img/other-contaminant_type-mmm.png"><img
                                        src="../img/other-contaminant_type-mmm.png" style="width:100%"></a></td>
                            <td><a href="../img/other-contaminant_type-yyyy.png"><img
                                        src="../img/other-contaminant_type-yyyy.png" style="width:100%"></a></td>
                        </tr>

                    </table>
                </div>
                <p><a href="#" class="gototop">Top</a> </p>

                <h2 id="other-type-distribution">Other Safety Alerts Distribution by Safety Issue</h2>

                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td><a href="../img/other-pie-total.png"><img src="../img/other-pie-total.png" style="width:100%"></a></td>
                        </tr>

                    </table>
                </div>
                <p><a href="#" class="gototop">Top</a> </p>

                <h2 id="product-type-distribution">Safety Alerts Distribution by Product Type</h2>

                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>

                            <td><a href="../img/other-product_categories-pie-total.png"><img src="../img/other-product_categories-pie-total.png" style="width:100%"></a></td>
                        </tr>

                    </table>
                </div>
                <p><a href="#" class="gototop">Top</a> </p>

                <p></p>
                <h2 id="other-total-time-series">Time Series Visualisations of Other (unclassified) Safety Alerts</h2>

                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td><a href="../img/other-yyyy-mm.png"><img src="../img/other-yyyy-mm.png"
                                        style="width:100%"></a></td>

                        </tr>
                        <tr>
                            <td><a href="../img/other-mmm.png"><img src="../img/other-mmm.png"
                                        style="width:100%"></a></td>
                            <td><a href="../img/other-yyyy.png"><img src="../img/other-yyyy.png"
                                        style="width:100%"></a></td>
                        </tr>

                    </table>
                </div>
                <p><a href="#" class="gototop">Top</a> </p>

                <h1 id="other-visualisations-title">Safety Alerts by Contaminant / Issue Type</h1>
                <p></p>
                <h2 id="other-visualisations-1">Labelling Error</h2>

                <h3>Most Common Foods Alerts for Labelling Error</h3>
                <div style=width:80%><a href="../img/other-labelling-error-by-product-type.png"><img
                            src="../img/other-labelling-error-by-product-type.png"></a></div>
                <p><a href="#" class="gototop">Top</a> </p>

                <h3>Temporal Visualisations</h3>

                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td><a href="../img/contaminant-labelling-error-yyyy-mm.png"><img
                                        src="../img/contaminant-labelling-error-yyyy-mm.png" style="width:100%"></a></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td><a href="../img/contaminant-labelling-error-mmm.png"><img
                                        src="../img/contaminant-labelling-error-mmm.png"></a></td>
                            <td><a href="../img/contaminant-labelling-error-yyyy.png"><img
                                        src="../img/contaminant-labelling-error-yyyy.png"></a></td>
                        </tr>
                    </table>
                </div>
                <p><a href="#" class="gototop">Top</a> </p>

                <h2 id="other-visualisations-2">Unapproved Facilities</h2>
                <p></p>


                <h3>Most Common Food Alerts for Unapproved Facilities</h3>
                <div style=width:80%><a href="../img/other-unapproved-facilities-by-product-type.png"><img
                            src="../img/other-unapproved-facilities-by-product-type.png"></a></div>
                <p><a href="#" class="gototop">Top</a> </p>


                <h3>Temporal Visualisations</h3>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td><a href="../img/contaminant-unapproved-facilities-yyyy-mm.png"><img
                                        src="../img/contaminant-unapproved-facilities-yyyy-mm.png"></a></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td><a href="../img/contaminant-unapproved-facilities-mmm.png"><img
                                        src="../img/contaminant-unapproved-facilities-mmm.png"></a></td>
                            <td><a href="../img/contaminant-unapproved-facilities-yyyy.png"><img
                                        src="../img/contaminant-unapproved-facilities-yyyy.png"></a></td>
                        </tr>
                    </table>
                </div>
                <p><a href="#" class="gototop">Top</a> </p>

                <h2 id="other-visualisations-3">Unhygienic Production</h2>
                <p></p>

                <h3>Most Common Food Safety Alerts for Unhygienic Production</h3>
                <div style=width:80%><a href="../img/other-unhygienic-production-by-product-type.png"><img
                            src="../img/other-unhygienic-production-by-product-type.png"></a></div>
                <p><a href="#" class="gototop">Top</a> </p>

                <h3>Temporal Visualisations</h3>

                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td><a href="../img/contaminant-unhygienic-production-yyyy-mm.png"><img
                                        src="../img/contaminant-unhygienic-production-yyyy-mm.png"></a></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td><a href="../img/contaminant-unhygienic-production-mmm.png"><img src="../img/contaminant-unhygienic-production-mmm.png"></a></td>
                            <td><a href="../img/contaminant-unhygienic-production-yyyy.png"><img src="../img/contaminant-unhygienic-production-yyyy.png"></a></td>
                        </tr>
                    </table>
                </div>
                <p><a href="#" class="gototop">Top</a> </p>

                <h2 id="other-visualisations-4">Packaging</h2>
                <p></p>

                <h3>The Most Common Food Safety Alerts for Packaging</h3>
                <div style=width:80%><a href="../img/other-packaging-by-product-type.png"><img src="../img/other-packaging-by-product-type.png"></a></div>
                <p><a href="#" class="gototop">Top</a> </p>

                <h3>Temporal Analysis</h3>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td><a href="../img/contaminant-packaging-yyyy-mm.png"><img src="../img/contaminant-packaging-yyyy-mm.png"></a></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td><a href="../img/contaminant-packaging-mmm.png"><img src="../img/contaminant-packaging-mmm.png"></a></td>
                            <td><a href="../img/contaminant-packaging-yyyy.png"><img src="../img/contaminant-packaging-yyyy.png"></a></td>
                        </tr>
                    </table>
                </div>
                <p><a href="#" class="gototop">Top</a> </p>

                <h2 id="other-visualisations-5">Shattering Bottles</h2>
                <p></p>

                <h3>The Most Common Food Safety Alerts for Shattering Bottles</h3>
                <div style=width:80%><a href="../img/other-shattering-bottles-by-product-type.png"><img
                            src="../img/other-shattering-bottles-by-product-type.png"></a></div>
                <p><a href="#" class="gototop">Top</a> </p>
                <h3>Temporal Analysis</h3>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td><a href="../img/contaminant-shattering-bottles-yyyy-mm.png"><img
                                        src="../img/contaminant-shattering-bottles-yyyy-mm.png"></a></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td><a href="../img/contaminant-shattering-bottles-mmm.png"><img
                                        src="../img/contaminant-shattering-bottles-mmm.png"></a></td>
                            <td><a href="../img/contaminant-shattering-bottles-yyyy.png"><img
                                        src="../img/contaminant-shattering-bottles-yyyy.png"></a></td>
                        </tr>
                    </table>
                </div>
                <p><a href="#" class="gototop">Top</a> </p>

                <h2 id="other-visualisations-6">Choking Hazard</h2>
                <p></p>

                <h3>The Most Common Food Safety Alerts for Choking Hazards</h3>
                <div style=width:80%><a href="../img/other-choking-hazard-by-product-type.png"><img
                            src="../img/other-choking-hazard-by-product-type.png"></a></div>
                <p><a href="#" class="gototop">Top</a> </p>
                <h3>Temporal Analysis</h3>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td><a href="../img/contaminant-choking-hazard-yyyy-mm.png"><img
                                        src="../img/contaminant-choking-hazard-yyyy-mm.png"></a></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td><a href="../img/contaminant-choking-hazard-mmm.png"><img
                                        src="../img/contaminant-choking-hazard-mmm.png"></a></td>
                            <td><a href="../img/contaminant-choking-hazard-yyyy.png"><img
                                        src="../img/contaminant-choking-hazard-yyyy.png"></a></td>
                        </tr>
                    </table>
                </div>
                <p><a href="#" class="gototop">Top</a> </p>


                <h2 id="other-visualisations-7">Undercooked Ingredients</h2>
                <p></p>

                <h3>The Most Common Food Safety Alerts for Undercooked Ingredients</h3>

                <div style=width:80%><a href="../img/other-undercooked-by-product-type.png"><img
                            src="../img/other-undercooked-by-product-type.png"></a></div>
                
                            <p><a href="#" class="gototop">Top</a> </p>


                <h3>Temporal Analysis</h3>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td><a href="../img/contaminant-undercooked-yyyy-mm.png"><img
                                        src="../img/contaminant-undercooked-yyyy-mm.png"></a></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td><a href="../img/contaminant-undercooked-mmm.png"><img
                                        src="../img/contaminant-undercooked-mmm.png"></a></td>
                            <td><a href="../img/contaminant-undercooked-yyyy.png"><img
                                        src="../img/contaminant-undercooked-yyyy.png"></a></td>
                        </tr>
                    </table>
                </div>
                <p><a href="#" class="gototop">Top</a> </p>

                <h2 id="food-by-other-type">A Slice Above the Rest: Cross Sectional Product Type Visualisations</h2>

                <p id="confectionery"></p>

                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <thead><tr><td style="width:50%"><h3>Confectionery</h3></td><td><h3>Ready Meal / Ready to Eat</h3></td></tr></thead>
                        <tr>
                            <td><a href="../img/other-type-confectionery-pie-total.png">
                                <img src="../img/other-type-confectionery-pie-total.png"></a></td>
                            <td><a href="../img/other-type-ready-meal-ready-to-eat-pie-total.png">
                                <img src="../img/other-type-ready-meal-ready-to-eat-pie-total.png"></a></td>

                        </tr>
                        </table>
                </div>

                <p id="vegetables"></p>
                <div class="datatable-container" id="html_table-source-meta-data" >
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <thead><tr><td style="width:50%"><h3>Vegetables Processed</h3></td><td><h3>Alcohol</h3></td></tr></thead>
                        <tr>
                            <td><a href="../img/other-type-vegetables-processed-pie-total.png">
                                <img src="../img/other-type-vegetables-processed-pie-total.png"></a></td>
                            <td><a href="../img/other-type-alcohol-pie-total.png">
                                <img  src="../img/other-type-alcohol-pie-total.png"></a></td>

                        </tr>
                        </table>
                        </div>



                <p id="chicken"></p>

                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <thead><tr><td style="width:50%"><h3>Chicken Processed</h3></td><td><h3>Fish Processed</h3></td></tr></thead>
                        <tr>
                            <td><a href="../img/other-type-chicken-processed-pie-total.png"><img
                                        src="../img/other-type-chicken-processed-pie-total.png"></a></td>
                            <td><a href="../img/other-type-fish-processed-pie-total.png"><img
                                        src="../img/other-type-fish-processed-pie-total.png"></a></td>

                        </tr>
                        </table>
                        </div>

                <p id="sauces"></p>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <thead><tr><td style="width:50%"><h3>Sauces / Condiments</h3></td><td><h3>Pork Processed</h3></td></tr></thead>
                        <tr>
                            <td><a href="../img/other-type-sauces-condiments-pie-total.png"><img
                                        src="../img/other-type-sauces-condiments-pie-total.png"></a></td>
                            <td><a href="../img/other-type-pork-processed-pie-total.png"><img
                                        src="../img/other-type-pork-processed-pie-total.png"></a></td>

                        </tr>
                        </table>
                        </div>

                <p id="soft-drinks"></p>
                
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <thead><tr><td style="width:50%"><h3>Soft Drinks</h3></td><td><h3>Beef Processed</h3></td></tr></thead>
                        <tr>
                            <td><a href="../img/other-type-soft-drinks-pie-total.png"><img
                                        src="../img/other-type-soft-drinks-pie-total.png"></a></td>
                            <td><a href="../img/other-type-beef-processed-pie-total.png"><img
                                        src="../img/other-type-beef-processed-pie-total.png"></a></td>
                        </tr>
                        </table>
                        </div>
                        
                <p id="dairy"></p>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <thead><tr><td style="width:50%"><h3>Dairy</h3></td><td><h3>Nutrition Supplements</h3></td></tr></thead>
                        <tr>
                            <td><a href="../img/other-type-dairy-pie-total.png"><img
                                        src="../img/other-type-dairy-pie-total.png"></a></td>
                            <td><a href="../img/other-type-nutrition-supplements-pie-total.png"><img
                                        src="../img/other-type-nutrition-supplements-pie-total.png"></a></td>

                        </tr>
                        </table>
                        </div>

                <p id="baby"></p>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <thead><tr><td style="width:50%"><h3>Baby Foods / Formula</h3></td><td><h3>Cheese</h3></td></tr></thead>
                        <tr>
                            <td><a href="../img/other-type-baby-foods-formula-pie-total.png"><img
                                        src="../img/other-type-baby-foods-formula-pie-total.png"></a></td>
                            <td><a href="../img/other-type-cheese-pie-total.png"><img
                                        src="../img/other-type-cheese-pie-total.png"></a></td>
                        </tr>
                    </table>
                </div>
                <p><a href="#" class="gototop">Top</a> </p>

<!-- PRODUCT CATEGORY -->
 <h2>A Taste of Trouble: Common Food Contaminants by Product Category</h2>
<p id="cat-beverage"></p>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <thead><tr><td style="width:50%"><h3>Beverages</h3></td><td><h3>Canned Goods</h3></td></tr></thead>
                        <tr>
                            <td><a   href="../img/other-category-beverages-pie-total.png">
                                <img  src="../img/other-category-beverages-pie-total.png"></a></td>
                            <td><a href="../img/other-category-canned-goods-pie-total.png">
                                <img src="../img/other-category-canned-goods-pie-total.png"></a></td>
                        </tr>
                    </table>
                </div>
                <p><a href="#" class="gototop">Top</a> </p>


                <p id="cat-confectionery"></p>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <thead><tr><td style="width:50%"><h3>Confectionery</h3></td><td><h3>Nutrition Supplements</h3></td></tr></thead>
                        <tr>
                            <td><a   href="../img/other-category-confectionery-pie-total.png">
                                <img  src="../img/other-category-confectionery-pie-total.png"></a></td>
                            <td><a href="../img/other-category-nutrition-supplements-pie-total.png">
                                <img src="../img/other-category-nutrition-supplements-pie-total.png"></a></td>
                        </tr>
                    </table>
                </div>
                <p><a href="#" class="gototop">Top</a> </p>


                <p id="cat-fish"></p>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <thead><tr><td style="width:50%"><h3>Processed Fish</h3></td><td><h3>Processed Meats</h3></td></tr></thead>
                        <tr>
                            <td><a   href="../img/other-category-processed-fish-pie-total.png">
                                <img  src="../img/other-category-processed-fish-pie-total.png"></a></td>
                            <td><a href="../img/other-category-processed-meats-pie-total.png">
                                <img src="../img/other-category-processed-meats-pie-total.png"></a></td>
                        </tr>
                    </table>
                </div>
                <p><a href="#" class="gototop">Top</a> </p>

                <p id="cat-ready-meal"></p>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <thead><tr><td style="width:50%"><h3>Ready Meal / Ready to Eat</h3></td><td><h3>Sauces / Condiments</h3></td></tr></thead>
                        <tr>
                            <td><a   href="../img/other-category-ready-meal-ready-to-eat-pie-total.png">
                                <img  src="../img/other-category-ready-meal-ready-to-eat-pie-total.png"></a></td>
                            <td><a  href="../img/other-category-sauces-condiments-pie-total.png">
                                <img src="../img/other-category-sauces-condiments-pie-total.png"></a></td>
                        </tr>
                    </table>
                </div>
                <p><a href="#" class="gototop">Top</a> </p>


                
                

<h2 id="summary">Summary</h2>
<p>The "other" category groups together safety alerts that are not for Allergens, Pathogens or Foreign Material contaminations. 
    Alerts for largely unclassified issues account for 19% of all safety alerts issued. The top issues include Labelling Errors, 
    Unapproved Facilities, Unhygienic Production, Packaging Issues, Shattering Bottles, Choking Hazard, and Undercooked Ingredients together represent 46% 
    of all "other" safety alerts.
 </p>
<p>

<div class="datatable-container" style="margin-right:auto;margin-left:0px; width:100%">
                <?php include "../tables/other-annual-alert-count.php" ?>
            </div>
</p>

<?php include 'footer.php'; ?>



        </div>
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