<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="" xml:lang="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="color-scheme" content="dark">

    <!-- <link rel="stylesheet" type="text/css" href="https://rodders.me/css/custom.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/custom-menu2.css">
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
                <select onchange="javascript:scrollToAnchor(this.value, 100);">
                        <option value="contamination-category-analysis">Introduction</option>
                        <option value="food-category-contamination-category">Visualising Contamination Risk: Food Category and Safety Alert Category Analysis</option>
                        <option value="food-type-contamination-category">Visualising Contamination Risk: Food Type and Safety Alert Category Analysis</option>
                        
                        <optgroup label="Ready Meals / Ready to Eat">

                            <option value="ready-meal-ready-to-eat-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="ready-meal-ready-to-eat-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Confectionery">

                        <option value="confectionery-alert-category">Confectionery, Distribution of Safety Alert Categories</option>
                        <option value="confectionery-alert-types">Confectionery, Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Sauces / Condiments">
                        
                        <option value="sauces-condiments-alert-category">Distribution of Safety Alert Categories</option>
                        <option value="sauces-condiments-alert-types">Distribution of Safety Alert Contaminant Types</option>

                        </optgroup>

                        <optgroup label="Processed Vegetables">
                            <option value="vegetables-processed-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="vegetables-processed-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Bread / Baked Goods">
                            <option value="bread-baked-goods-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="bread-baked-goods-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Cheese">
                            <option value="cheese-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="cheese-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Fish Processed">
                            <option value="fish-processed-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="fish-processed-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Processed Pork">
                            <option value="pork-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="pork-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Processed Chicken">
                            <option value="chicken-processed-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="chicken-processed-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Dairy">
                            <option value="dairy-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="dairy-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Nutrition / Supplements">
                            <option value="nutrition-supplements-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="nutrition-supplements-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Alcohol">
                            <option value="alcohol-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="alcohol-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Sandwiches / Wraps">
                            <option value="sandwiches-wraps-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="sandwiches-wraps-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Nuts / Seeds">
                            <option value="nuts-seeds-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="nuts-seeds-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Baby Foods / Formula">
                            <option value="baby-foods-formula-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="baby-foods-formula-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Pet Foods">
                            <option value="pet-food-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="pet-food-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Herbs / Spices">
                            <option value="herbs-spices-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="herbs-spices-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Processed Beef">
                            <option value="beef-processed-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="beef-processed-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Cereal">
                            <option value="cereal-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="cereal-alert-types">Distribution of Safety Alert Contaminant Types</option>
                        </optgroup>

                        <optgroup label="Soft Drinks">
                            <option value="soft-drinks-alert-category">Distribution of Safety Alert Categories</option>
                            <option value="soft-drinks-alert-types">Distribution of Safety Alert Contaminant Types</option>

                    </select>
                </div>
            </div>
        </div>


        <h1 >Food Standards Agency - Alerts Analysis</h1>
        <p><img src="../icons/food-standards-agency-logo.jpg" style="width:30%"></p>
        <p class='last-updated'><?php include 'last-updated.php' ?></p>
        
        
        <h2 id="contamination-category-analysis">Visualizing Safety Alerts by: Food Category and Contamination Category Analysis</h2>
        <p>This section presents a visual representation of the major food categories and their corresponding safety alert distributions. 
            By examining the frequency and nature of safety alerts across different food categories, we can gain valuable insights into the 
            types of contaminants that pose the greatest risks to consumers. The following visualizations provide a comprehensive overview of 
            the distribution of safety alerts by category, including Allergen, Pathogen, Other, and Foreign Material. This analysis is based on 
            data from the UK Food Standards Agency's food safety alert system, which provides real-time information on potential food safety hazards.</p>

        <p>The individual plots that follow present a more detailed breakdown of the safety alert distributions for each major food category. 
            By examining the specific patterns and trends within each category, we can identify areas where targeted interventions or improvements 
            in food safety management may be needed. The resulting visualizations provide a powerful tool for policymakers, industry stakeholders, 
            and consumers to better understand the complex issues surrounding food safety and make informed decisions about risk mitigation strategies.</p>


        <h2 id="food-category-contamination-category">Visualizing Contamination Risk: Food Type and Contamination Category Analysis</h2>
        <a href="../img/product_category-total-hbar.png"><img src="../img/product_category-total-hbar.png" style="width:75%"></a>
        <br><a href="#" class="gototop">Top</a>

        <h2 id="food-type-contamination-category">Visualizing Contamination Risk: Food Type and Contamination Category Analysis</h2>
        
        <a href = "../img/product_type-contaminant_category.png"><img src="../img/product_type-contaminant_category.png" style="width:75%"></a>
        <br><a href="#" class="gototop">Top</a>

        <h2>Ready Meal / Ready to Eat</h2>

        <h3 id ="ready-meal-ready-to-eat-alert-category">Ready Meal / Ready to Eat - Safety Alert Category Distribution</h3>
            <a  href="../img/ready-meal-ready-to-eat-contaminant-pie.png">
            <img src="../img/ready-meal-ready-to-eat-contaminant-pie.png" style="width:47%"></a>

        <br><a href="#" class="gototop">Top</a>


    <h3 id="ready-meal-ready-to-eat-alert-types">Ready Meal / Ready to Eat - Safety Alert Contaminant Category Distribution</h3>
        <div class="datatable-container" >
        <table class="dataframe datatable" style="width:100%; margin: 0 auto;">

        <tr>
                <td><a href="../img/allergen-type-ready-meal-ready-to-eat-pie-total.png"><img src="../img/allergen-type-ready-meal-ready-to-eat-pie-total.png" style="width:100%"></a></td>
                <td><a href="../img/pathogen-type-ready-meal-ready-to-eat-pie-total.png"><img src="../img/pathogen-type-ready-meal-ready-to-eat-pie-total.png" style="width:100%"></a></td>
            </tr>
            <tr>
            <td><a href="../img/other-type-ready-meal-ready-to-eat-pie-total.png"><img src="../img/other-type-ready-meal-ready-to-eat-pie-total.png" style="width:100%"></a></td>
                <td><a href="../img/foreign_material-type-ready-meal-ready-to-eat-pie-total.png"><img src="../img/foreign_material-type-ready-meal-ready-to-eat-pie-total.png" style="width:100%"></a></td>
             </tr>
            
        </table></div>
<br><a href="#" class="gototop">Top</a>

        <h2>Confectionery</h2>

            <h3 id="confectionery-alert-category">Confectionery - Safety Alert Category Distribution</h3>

                <a href="../img/confectionery-contaminant-pie.png">
                    <img src="../img/confectionery-contaminant-pie.png" style="width:47%"></a>

                    
                <br><a href="#" class="gototop">Top</a>

            <h3 id="confectionery-alert-types">Confectionery - Safety Alert Contaminant Type Distribution</h3>
                <div class="datatable-container" >
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                <tr>
                    <td><a href="../img/allergen-type-confectionery-pie-total.png"><img src="../img/allergen-type-confectionery-pie-total.png" style="width:100%"></a></td>
                    <td><a href="../img/pathogen-type-confectionery-pie-total.png"><img src="../img/pathogen-type-confectionery-pie-total.png" style="width:100%"></a></td>
                </tr>
                <tr>
                    <td><a href="../img/other-type-confectionery-pie-total.png"><img src="../img/other-type-confectionery-pie-total.png" style="width:100%"></a></td>
                    <td><a href="../img/foreign_material-type-confectionery-pie-total.png"><img src="../img/foreign_material-type-confectionery-pie-total.png" style="width:100%"></a></td>
                </tr>
                    
                </table></div>
                <br><a href="#" class="gototop">Top</a>

                <h2>Sauces / Condiments</h2>

<h3 id="sauces-condiments-alert-category">Sauces / Condiments - Safety Alert Category Distribution</h3>

    <a href="../img/sauces-condiments-contaminant-pie.png">
    <img src="../img/sauces-condiments-contaminant-pie.png" style="width:47%"></a>
    <br><a href="#" class="gototop">Top</a>

<h3 id="sauces-condiments-alert-types">Sauces / Condiments - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-sauces-condiments-pie-total.png"><img src="../img/allergen-type-sauces-condiments-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/pathogen-type-sauces-condiments-pie-total.png"><img src="../img/pathogen-type-sauces-condiments-pie-total.png" style="width:100%"></a></td>
    </tr>
    <tr>
        <td><a href="../img/other-type-sauces-condiments-pie-total.png"><img src="../img/other-type-sauces-condiments-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-sauces-condiments-pie-total.png"><img src="../img/foreign_material-type-sauces-condiments-pie-total.png" style="width:100%"></a></td>
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>

    <h2>Vegetables Processed</h2>

<h3 id="vegetables-processed-alert-category">Vegetables Processed - Safety Alert Category Distribution</h3>

    <a href="../img/vegetables-processed-contaminant-pie.png">
        <img src="../img/vegetables-processed-contaminant-pie.png" style="width:47%">
    </a>
    <br><a href="#" class="gototop">Top</a>

<h3 id="vegetables-processed-alert-types">Vegetables Processed - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-vegetables-processed-pie-total.png"><img src="../img/allergen-type-vegetables-processed-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/pathogen-type-vegetables-processed-pie-total.png"><img src="../img/pathogen-type-vegetables-processed-pie-total.png" style="width:100%"></a></td>
    </tr>
    <tr>
        <td><a href="../img/other-type-vegetables-processed-pie-total.png"><img src="../img/other-type-vegetables-processed-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-vegetables-processed-pie-total.png"><img src="../img/foreign_material-type-vegetables-processed-pie-total.png" style="width:100%"></a></td>
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>
  
    <h2>Bread / Baked Goods</h2>

<h3 id="bread-baked-goods-alert-category">Bread / Baked Goods - Safety Alert Category Distribution</h3>

    <a href="../img/bread-baked-goods-contaminant-pie.png">
        <img src="../img/bread-baked-goods-contaminant-pie.png" style="width:47%">
    </a>
    <br><a href="#" class="gototop">Top</a>

<h3 id="bread-baked-goods-alert-types">Bread / Baked Goods - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-bread-baked-goods-pie-total.png"><img src="../img/allergen-type-bread-baked-goods-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/pathogen-type-bread-baked-goods-pie-total.png"><img src="../img/pathogen-type-bread-baked-goods-pie-total.png" style="width:100%"></a></td>
    </tr>
    <tr>
        <td><a href="../img/foreign_material-type-bread-baked-goods-pie-total.png"><img src="../img/foreign_material-type-bread-baked-goods-pie-total.png" style="width:100%"></a></td>
      <!--  <td style="text-align:center">None <a href="../img/other-type-bread-baked-goods-pie-total.png"><img src="../img/other-type-bread-baked-goods-pie-total.png" style="width:100%"></a></td> -->
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>



    <h2>Cheese</h2>

<h3 id="cheese-alert-category">Cheese - Safety Alert Category Distribution</h3>

    <a href="../img/cheese-contaminant-pie.png">
        <img src="../img/cheese-contaminant-pie.png" style="width:47%">
    </a>
    <br><a href="#" class="gototop">Top</a>

<h3 id="cheese-alert-types">Cheese - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-cheese-pie-total.png"><img src="../img/allergen-type-cheese-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/pathogen-type-cheese-pie-total.png"><img src="../img/pathogen-type-cheese-pie-total.png" style="width:100%"></a></td>
    </tr>
    <tr>
        <td><a href="../img/other-type-cheese-pie-total.png"><img src="../img/other-type-cheese-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-cheese-pie-total.png"><img src="../img/foreign_material-type-cheese-pie-total.png" style="width:100%"></a></td>
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>


    <h2>Processed Fish</h2>

<h3 id="fish-processed-alert-category">Processed Fish - Safety Alert Category Distribution</h3>
    <a href="../img/fish-processed-contaminant-pie.png">
        <img src="../img/fish-processed-contaminant-pie.png" style="width:47%">
    </a>
    <br><a href="#" class="gototop">Top</a>

<h3 id="fish-processed-alert-types">Processed Fish - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-fish-processed-pie-total.png"><img src="../img/allergen-type-fish-processed-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/pathogen-type-fish-processed-pie-total.png"><img src="../img/pathogen-type-fish-processed-pie-total.png" style="width:100%"></a></td>
    </tr>
    <tr>
        <td><a href="../img/other-type-fish-processed-pie-total.png"><img src="../img/other-type-fish-processed-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-fish-processed-pie-total.png"><img src="../img/foreign_material-type-fish-processed-pie-total.png" style="width:100%"></a></td>
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>


    <h2>Processed Pork</h2>

<h3 id="pork-processed-alert-category">Processed Pork - Safety Alert Category Distribution</h3>

<a href="../img/pork-processed-contaminant-pie.png">
    <img src="../img/pork-processed-contaminant-pie.png" style="width:47%"></a>
    
    <br><a href="#" class="gototop">Top</a>

<h3 id="pork-processed-alert-types">Processed Pork - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-pork-processed-pie-total.png"><img src="../img/allergen-type-pork-processed-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/pathogen-type-pork-processed-pie-total.png"><img src="../img/pathogen-type-pork-processed-pie-total.png" style="width:100%"></a></td>
    </tr>
    <tr>
        <td><a href="../img/other-type-pork-processed-pie-total.png"><img src="../img/other-type-pork-processed-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-pork-processed-pie-total.png"><img src="../img/foreign_material-type-pork-processed-pie-total.png" style="width:100%"></a></td>
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>


    <h2>Processed Chicken</h2>

<h3 id="chicken-processed-alert-category">Processed Chicken - Safety Alert Category Distribution</h3>

<a href="../img/chicken-processed-contaminant-pie.png">
    <img src="../img/chicken-processed-contaminant-pie.png" style="width:47%"></a>
    <br><a href="#" class="gototop">Top</a>

<h3 id="chicken-processed-alert-types">Processed Chicken - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-chicken-processed-pie-total.png"><img src="../img/allergen-type-chicken-processed-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/pathogen-type-chicken-processed-pie-total.png"><img src="../img/pathogen-type-chicken-processed-pie-total.png" style="width:100%"></a></td>
    </tr>
    <tr>
        <td><a href="../img/other-type-chicken-processed-pie-total.png"><img src="../img/other-type-chicken-processed-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-chicken-processed-pie-total.png"><img src="../img/foreign_material-type-chicken-processed-pie-total.png" style="width:100%"></a></td>
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>

    <h2>Dairy</h2>

<h3 id="dairy-alert-category">Dairy - Safety Alert Category Distribution</h3>

 <a href="../img/dairy-contaminant-pie.png"><img src="../img/dairy-contaminant-pie.png" style="width:47%"></a>
    <br><a href="#" class="gototop">Top</a>

<h3 id="dairy-alert-types">Dairy - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-dairy-pie-total.png"><img src="../img/allergen-type-dairy-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/pathogen-type-dairy-pie-total.png"><img src="../img/pathogen-type-dairy-pie-total.png" style="width:100%"></a></td>
    </tr>
    <tr>
        <td><a href="../img/other-type-dairy-pie-total.png"><img src="../img/other-type-dairy-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-dairy-pie-total.png"><img src="../img/foreign_material-type-dairy-pie-total.png" style="width:100%"></a></td>
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>



    <h2>Nutrition Supplements</h2>

<h3 id="nutrition-supplements-alert-category">Nutrition Supplements - Safety Alert Category Distribution</h3>
<a href="../img/nutrition-supplements-contaminant-pie.png"><img src="../img/nutrition-supplements-contaminant-pie.png" style="width:47%"></a>
    
    <br><a href="#" class="gototop">Top</a>

<h3 id="nutrition-supplements-alert-types">Nutrition Supplements - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-nutrition-supplements-pie-total.png"><img src="../img/allergen-type-nutrition-supplements-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/pathogen-type-nutrition-supplements-pie-total.png"><img src="../img/pathogen-type-nutrition-supplements-pie-total.png" style="width:100%"></a></td>
    </tr>
    <tr>
        <td><a href="../img/other-type-nutrition-supplements-pie-total.png"><img src="../img/other-type-nutrition-supplements-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-nutrition-supplements-pie-total.png"><img src="../img/foreign_material-type-nutrition-supplements-pie-total.png" style="width:100%"></a></td>
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>


    <h2>Alcohol</h2>

<h3 id="alcohol-alert-category">Alcohol - Safety Alert Category Distribution</h3>

 <a href="../img/alcohol-contaminant-pie.png"><img src="../img/alcohol-contaminant-pie.png" style="width:47%"></a>
    <br><a href="#" class="gototop">Top</a>

<h3 id="alcohol-alert-types">Alcohol - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-alcohol-pie-total.png"><img src="../img/allergen-type-alcohol-pie-total.png" style="width:100%"></a></td>
        <!--<td style="text-align: center"><a href="../img/pathogen-type-alcohol-pie-total.png"><img src="../img/pathogen-type-alcohol-pie-total.png" style="width:100%"></a></td>-->
    </tr>
    <tr>
        <td><a href="../img/other-type-alcohol-pie-total.png"><img src="../img/other-type-alcohol-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-alcohol-pie-total.png"><img src="../img/foreign_material-type-alcohol-pie-total.png" style="width:100%"></a></td>
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>

    <h2>Sandwiches / Wraps</h2>

<h3 id="sandwiches-wraps-alert-category">Sandwiches / Wraps - Safety Alert Category Distribution</h3>

  <a href="../img/sandwiches-wraps-contaminant-pie.png"><img src="../img/sandwiches-wraps-contaminant-pie.png" style="width:47%"></a>
            
    <br><a href="#" class="gototop">Top</a>

<h3 id="sandwiches-wraps-alert-types">Sandwiches / Wraps - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-sandwiches-wraps-pie-total.png"><img src="../img/allergen-type-sandwiches-wraps-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/pathogen-type-sandwiches-wraps-pie-total.png"><img src="../img/pathogen-type-sandwiches-wraps-pie-total.png" style="width:100%"></a></td>
    </tr>
    <tr>
        <td><a href="../img/other-type-sandwiches-wraps-pie-total.png"><img src="../img/other-type-sandwiches-wraps-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-sandwiches-wraps-pie-total.png"><img src="../img/foreign_material-type-sandwiches-wraps-pie-total.png" style="width:100%"></a></td>
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>


    <h2>Nuts / Seeds</h2>

<h3 id="nuts-seeds-alert-category">Nuts / Seeds - Safety Alert Category Distribution</h3>
<a href="../img/nuts-seeds-contaminant-pie.png"><img src="../img/nuts-seeds-contaminant-pie.png" style="width:47%"></a>
    <br><a href="#" class="gototop">Top</a>

<h3 id="nuts-seeds-alert-types">Nuts / Seeds - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-nuts-seeds-pie-total.png"><img src="../img/allergen-type-nuts-seeds-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/pathogen-type-nuts-seeds-pie-total.png"><img src="../img/pathogen-type-nuts-seeds-pie-total.png" style="width:100%"></a></td>
    </tr>
    <tr>
        <td><a href="../img/other-type-nuts-seeds-pie-total.png"><img src="../img/other-type-nuts-seeds-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-nuts-seeds-pie-total.png"><img src="../img/foreign_material-type-nuts-seeds-pie-total.png" style="width:100%"></a></td>
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>


    <h2>Baby Foods / Formula</h2>

<h3 id="baby-foods-formula-alert-category">Baby Foods / Formula - Safety Alert Category Distribution</h3>

  <a href="../img/baby-foods-formula-contaminant-pie.png"><img src="../img/baby-foods-formula-contaminant-pie.png" style="width:47%"></a>
            

    <br><a href="#" class="gototop">Top</a>

<h3 id="baby-foods-formula-alert-types">Baby Foods / Formula - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-baby-foods-formula-pie-total.png"><img src="../img/allergen-type-baby-foods-formula-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/pathogen-type-baby-foods-formula-pie-total.png"><img src="../img/pathogen-type-baby-foods-formula-pie-total.png" style="width:100%"></a></td>
    </tr>
    <tr>
        <td><a href="../img/other-type-baby-foods-formula-pie-total.png"><img src="../img/other-type-baby-foods-formula-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-baby-foods-formula-pie-total.png"><img src="../img/foreign_material-type-baby-foods-formula-pie-total.png" style="width:100%"></a></td>
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>


    <h2>Pet Foods</h2>

<h3 id="pet-food-alert-category">Pet Foods - Safety Alert Category Distribution</h3>
<a href="../img/pet-food-contaminant-pie.png"><img src="../img/pet-food-contaminant-pie.png" style="width:47%"></a>
    <br><a href="#" class="gototop">Top</a>

<h3 id="pet-food-alert-types">Pet Foods - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/pathogen-type-pet-food-pie-total.png"><img src="../img/pathogen-type-pet-food-pie-total.png" style="width:100%"></a></td>
        <td style="text-align:center"><!--<a href="../img/allergen-type-pet-food-pie-total.png"><img src="../img/allergen-type-pet-food-pie-total.png" style="width:100%"></a>--></td>
    </tr>
    <tr>
        <td><a href="../img/other-type-pet-food-pie-total.png"><img src="../img/other-type-pet-food-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-pet-food-pie-total.png"><img src="../img/foreign_material-type-pet-food-pie-total.png" style="width:100%"></a></td>
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>


    <h2>Herbs / Spices</h2>

<h3 id="herbs-spices-alert-category">Herbs / Spices - Safety Alert Category Distribution</h3>

 <a href="../img/herbs-spices-contaminant-pie.png"><img src="../img/herbs-spices-contaminant-pie.png" style="width:47%"></a>
            
    <br><a href="#" class="gototop">Top</a>

<h3 id="herbs-spices-alert-types">Herbs / Spices - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-herbs-spices-pie-total.png"><img src="../img/allergen-type-herbs-spices-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/pathogen-type-herbs-spices-pie-total.png"><img src="../img/pathogen-type-herbs-spices-pie-total.png" style="width:100%"></a></td>
    </tr>
    <tr>
        <td><a href="../img/other-type-herbs-spices-pie-total.png"><img src="../img/other-type-herbs-spices-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-herbs-spices-pie-total.png"><img src="../img/foreign_material-type-herbs-spices-pie-total.png" style="width:100%"></a></td>
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>



    <h2>Processed Beef</h2>

<h3 id="beef-processed-alert-category">Processed Beef - Safety Alert Category Distribution</h3>

 <a href="../img/beef-processed-contaminant-pie.png"><img src="../img/beef-processed-contaminant-pie.png" style="width:47%"></a>
    <br><a href="#" class="gototop">Top</a>

<h3 id="beef-processed-alert-types">Processed Beef - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-beef-processed-pie-total.png"><img src="../img/allergen-type-beef-processed-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/pathogen-type-beef-processed-pie-total.png"><img src="../img/pathogen-type-beef-processed-pie-total.png" style="width:100%"></a></td>
    </tr>
    <tr>
        <td><a href="../img/other-type-beef-processed-pie-total.png"><img src="../img/other-type-beef-processed-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-beef-processed-pie-total.png"><img src="../img/foreign_material-type-beef-processed-pie-total.png" style="width:100%"></a></td>
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>

    <h2>Cereals</h2>

<h3 id="cereal-alert-category">Cereals - Safety Alert Category Distribution</h3>

<a href="../img/cereal-contaminant-pie.png"><img src="../img/cereal-contaminant-pie.png" style="width:47%"></a>
            

    <br><a href="#" class="gototop">Top</a>

<h3 id="cereal-alert-types">Cereals - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-cereal-pie-total.png"><img src="../img/allergen-type-cereal-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-cereal-pie-total.png"><img src="../img/foreign_material-type-cereal-pie-total.png" style="width:100%"></a></td>
    </tr>
    <!--<tr>
        <td style="text-align:center">None a href="../img/pathogen-type-cereal-pie-total.png"><img src="../img/pathogen-type-cereal-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/other-type-cereal-pie-total.png"><img src="../img/other-type-cereal-pie-total.png" style="width:100%"></a></td>
    </tr>-->
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>

    <h2>Soft Drinks</h2>

<h3 id="soft-drinks-alert-category">Soft Drinks - Safety Alert Category Distribution</h3>
<a href="../img/soft-drinks-contaminant-pie.png"><img src="../img/soft-drinks-contaminant-pie.png" style="width:47%"></a>
            
    <br><a href="#" class="gototop">Top</a>

<h3 id="soft-drinks-alert-types">Soft Drinks - Safety Alert Contaminant Type Distribution</h3>
    <div class="datatable-container" >
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
    <tr>
        <td><a href="../img/allergen-type-soft-drinks-pie-total.png"><img src="../img/allergen-type-soft-drinks-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/pathogen-type-soft-drinks-pie-total.png"><img src="../img/pathogen-type-soft-drinks-pie-total.png" style="width:100%"></a></td>
    </tr>
    <tr>
        <td><a href="../img/other-type-soft-drinks-pie-total.png"><img src="../img/other-type-soft-drinks-pie-total.png" style="width:100%"></a></td>
        <td><a href="../img/foreign_material-type-soft-drinks-pie-total.png"><img src="../img/foreign_material-type-soft-drinks-pie-total.png" style="width:100%"></a></td>
    </tr>
        
    </table></div>
    <br><a href="#" class="gototop">Top</a>

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