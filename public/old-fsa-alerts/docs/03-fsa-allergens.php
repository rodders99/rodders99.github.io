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
                    <!-- <select onchange="window.location.hash=this.value"> -->
                    <select onchange="javascript:scrollToAnchor(this.value, 100);">
                        <option value="#">Select to jump to section ....</option>
                        <option value="allergen-table-annual-totals">Table : Time Series Distribution of Allergen Safety Alerts by year</option>
                        <option value="allergen-type-total-time-series">Time Series Cross-Sectional Visualisation of Allergen Types </option>
                        <option value="allergen-type-totals">Visualisation of Allergen Type Distribution by Type</option>
                        <option value="product-type-totals">Visualisation of Product Type Distribution </option>
                        <option value="allergen-time-series-distribution">Time Series Visualisations of Allergen Safety Alerts</option>
                        <option value="Allergen-visualisations-1">Milk - Temporal and Common Affected Foods Visualisations</option>
                        <option value="Allergen-visualisations-2">Undeclared Allergens - Temporal and Common Affected Foods Visualisations</option>
                        <option value="Allergen-visualisations-3">Nuts - Temporal and Common Affected Foods Visualisations</option>
                        <option value="Allergen-visualisations-4">Gluten - Temporal and Common Affected Foods Visualisations</option>
                        <option value="Allergen-visualisations-5">Soya - Temporal and Common Affected Foods Visualisations</option>
                        <option value="Allergen-visualisations-6">Egg - Temporal and Common Affected Foods Visualisations</option>
                        <option value="Allergen-visualisations-7">Mustard - Temporal and Common Affected Foods Visualisations</option>
                        <option value="Allergen-visualisations-8">Sulphites - Temporal and Common Affected Foods Visualisations</option>
                        <option value="Allergen-visualisations-9">Fish / Crustaceans - Temporal and Common Affected Foods Visualisations</option>
                        <option value="Allergen-visualisations-10">Sesame - Temporal and Common Affected Foods Visualisations</option>
                        <option value="food-by-allergen-type">Allergen Distribution Across Food Categories</option>

                    </select>
                </div>
            </div>
        </div>


        <h1>Food Standards Agency - Alerts Analysis</h1>
        <img src="/img/food-standards-agency-logo.jpg" style="width:30%">

        <h2 id="project-overview-">Allergen Analysis for Food Safety Alerts from food.gov.uk</h2>

        <p>Food safety alerts are an essential tool for protecting public health, as they enable swift action to be
            taken in response to potential threats. In the UK, the Food Standards Agency (FSA) is responsible for issuing
            food safety alerts to inform consumers and industry stakeholders of potential risks associated with certain
            foods or products. These alerts are critical for ensuring that contaminated or potentially harmful products
            are removed from the market as quickly as possible, thereby minimizing the risk of allergic reactions.</p>

            <p>In the UK, the Food Information Regulations (FIR) require that food businesses list certain allergenic ingredients
                on their product labels. The 14 specified allergens are:</p>
                <ul>
                    <li>Cereals containing gluten (such as wheat, barley, and rye)</li>
                    <li>Crustacean</li>
                    <li>Mollusc</li>
                    <li>Peanut</li>
                    <li>Tree nut</li>
                    <li>Fish</li>
                    <li>Egg</li>
                    <li>Milk/ Lactose</li>
                    <li>Soy</li>
                    <li>Sesame</li>
                    <li>Sulphites</li>
                    <li>Lupin</li>
                    <li>Mustard</li>
                    <li>Celery</li>
                    </ul>
            <p>These allergens must be declared in the ingredients list if they are present above a certain threshold (0.5% for most of
                these allergens, except celery which is 1.25%). Additionally, food businesses may choose to provide more detailed 
                information about the presence of these allergens, such as stating "contains peanuts" instead of just listing "peanuts"
                in the ingredients list.</p>

            <p>It's worth noting that while there are no specific labeling requirements for gluten-containing cereals, food businesses 
                must still declare the presence of gluten in their products if it is present above 20mg per kilogram.</p>

            <p>This section of the analysis focuses on a comprehensive review of food safety alerts issued by the FSA with a
            specific emphasis on allergenic substances such as peanuts, tree nuts, milk, eggs, fish, shellfish, soy, and wheat. By 
            examining these data, this study aims to assess the effectiveness of the current alert system in detecting and responding to 
            outbreaks, identify trends and patterns in the types of allergens involved, and provide insights that can inform strategies for
            improving food safety and reducing public health risks.</p>

        <h2 id="allergen-table-annual-totals">Allergen Safety Alerts - Types by year</h2>
        <p>Note, data missing from 2017 to 2002. It appears that prior to 2017 Allergen Alerts were not being issued and with the 
            missing data from 2017 to 2020, there are a lot less data points to visualise for Allergens compared to other Food Safety Alerts.</p>

        <div class="datatable-container" id="html_table-source-meta-data">
            <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
            <thead>
                <tr style="text-align: center;">
                    <th style="text-align: center;">Allergen</th>
                    <th style="text-align: center;">2017</th>
                    <th style="text-align: center;">2019</th>
                    <th style="text-align: center;">2021</th>
                    <th style="text-align: center;">2022</th>
                    <th style="text-align: center;">2023</th>
                    <th style="text-align: center;">2024</th>
                    <th style="text-align: center;">total</th>
                </tr>

            </thead>
            <tbody>
                <tr style="text-align: center">
                    <th style="text-align: center;">Milk</th>
                    <td style="text-align: center;">2</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">23</td>
                    <td style="text-align: center;">20</td>
                    <td style="text-align: center;">24</td>
                    <td style="text-align: center;">8</td>
                    <td style="text-align: center;">77</td>
                </tr>
                <tr style="text-align: center">
                    <th style="text-align: center;">Undeclared Allergens</th>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">13</td>
                    <td style="text-align: center;">21</td>
                    <td style="text-align: center;">4</td>
                    <td style="text-align: center;">5</td>
                    <td style="text-align: center;">43</td>
                </tr>
                <tr style="text-align: center">
                    <th style="text-align: center;">Nuts</th>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">11</td>
                    <td style="text-align: center;">18</td>
                    <td style="text-align: center;">7</td>
                    <td style="text-align: center;">5</td>
                    <td style="text-align: center;">41</td>
                </tr>
                <tr style="text-align: center">
                    <th style="text-align: center;">Gluten</th>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">11</td>
                    <td style="text-align: center;">7</td>
                    <td style="text-align: center;">14</td>
                    <td style="text-align: center;">4</td>
                    <td style="text-align: center;">36</td>
                </tr>
                <tr style="text-align: center">
                    <th style="text-align: center;">Soya</th>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">6</td>
                    <td style="text-align: center;">6</td>
                    <td style="text-align: center;">6</td>
                    <td style="text-align: center;">4</td>
                    <td style="text-align: center;">22</td>
                </tr>
                <tr style="text-align: center">
                    <th style="text-align: center;">Egg</th>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">4</td>
                    <td style="text-align: center;">5</td>
                    <td style="text-align: center;">7</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">16</td>
                </tr>
                <tr style="text-align: center">
                    <th style="text-align: center;">Mustard</th>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">3</td>
                    <td style="text-align: center;">5</td>
                    <td style="text-align: center;">2</td>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">11</td>
                </tr>
                <tr style="text-align: center">
                    <th style="text-align: center;">Sulphites</th>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">2</td>
                    <td style="text-align: center;">3</td>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">2</td>
                    <td style="text-align: center;">9</td>
                </tr>
                <tr style="text-align: center">
                    <th style="text-align: center;">Fish / Crustacean</th>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">3</td>
                    <td style="text-align: center;">2</td>
                    <td style="text-align: center;">3</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">8</td>
                </tr>
                <tr style="text-align: center">
                    <th style="text-align: center;">Sesame</th>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">3</td>
                    <td style="text-align: center;">3</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">7</td>
                </tr>
                <tr style="text-align: center">
                    <th style="text-align: center;">Celery</th>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">2</td>
                </tr>
                <tr style="text-align: center">
                    <th style="text-align: center;">Sulphur Dioxide</th>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">2</td>
                </tr>
                <tr style="text-align: center">
                    <th style="text-align: center;">Struvite Salts</th>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">1</td>
                </tr>
                <tr style="text-align: center">
                    <th style="text-align: center;">Sugar</th>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">0</td>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">1</td>
                </tr>
            </tbody>
            </table>
    </div>
    <p><a href="#">Top</a> </p>


            <h2 id="allergen-type-total-time-series">Time Series Cross-Sectional Visualisations of Allergen Types</h2>

            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td><a href="img/allergen-contaminant_type-yyyy-mm.png"><img
                                    src="img/allergen-contaminant_type-yyyy-mm.png" style="width:100%"></a></td>

                    </tr>
                    <tr>
                        <td><a href="img/allergen-contaminant_type-mmm.png"><img
                                    src="img/allergen-contaminant_type-mmm.png" style="width:100%"></a></td>
                        <td><a href="img/allergen-contaminant_type-yyyy.png"><img
                                    src="img/allergen-contaminant_type-yyyy.png" style="width:100%"></a></td>
                    </tr>
                </table>
            </div>
            <p><a href="#">Top</a> </p>

            <p></p>
            <h2 id="allergen-type-totals">Safety Alert Distribution by Allergen Type</h2>

            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td><a href="img/allergen-pie-total.png"><img src="img/allergen-pie-total.png" style="width:100%"></a></td>

                    </tr>

                </table>
            </div>
            <p><a href="#">Top</a> </p>

            

<p></p>
<h2 id="product-type-totals">Safety Alert Distribution by Product Category</h2>

<div class="datatable-container" id="html_table-source-meta-data">
    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
        <tr>
            
            <td><a href="img/allergen-product_categories-pie-total.png"><img src="img/allergen-product_categories-pie-total.png" style="width:100%"></a></td>
        </tr>

    </table>
</div>
<p><a href="#">Top</a> </p>

            <p></p>

            <h2 id="allergen-time-series-distribution">Time Series Visualisations of Allergen Safety Alerts</h2>

            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td><a href="img/allergen-yyyy-mm.png"><img src="img/allergen-yyyy-mm.png"
                                    style="width:100%"></a></td>

                    </tr>
                    <tr>
                        <td><a href="img/allergen-mmm.png"><img src="img/allergen-mmm.png" style="width:100%"></a></td>
                        <td><a href="img/allergen-yyyy.png"><img src="img/allergen-yyyy.png" style="width:100%"></a>
                        </td>
                    </tr>

                </table>
            </div>
            <p><a href="#">Top</a> </p>


            <h1 id="Allergen-visualisations-title">Time Series Visualisations of Allergens and Common Affected Foods</h1>

            <h2 id="Allergen-visualisations-1">Milk</h2>
            <p>Milk allergy is an immune system reaction to one or more proteins in milk, typically casein or whey. This
                reaction can cause a range of
                symptoms, including hives, itching, swelling, stomach cramps, diarrhoea, and vomiting. In severe cases,
                milk allergy can lead to anaphylaxis,
                a life-threatening allergic reaction that requires immediate medical attention. According to Food
                Allergy Research & Education (FARE), milk
                is one of the most common food allergies in children, affecting about 2.5% of infants under the age of
                three.</p>

            <p>Processed foods can increase the risk of exposure to milk allergens due to hidden ingredients or
                cross-contamination. Many processed foods
                contain milk-derived products like whey, casein, lactose, and milk fat, which can be difficult to
                identify on labels. Even small amounts of these
                allergens can trigger a reaction in individuals with milk allergy. Additionally, the increased use of
                shared equipment and facilities in food
                manufacturing can lead to cross-contamination between milk-based and non-milk-based products. Some
                people may also experience symptoms
                after consuming lactose-containing foods due to lactose intolerance. </p>
            <p><a
                    href="https://www.allergyuk.org/resources/adult-cows-milk-allergy/">https://www.allergyuk.org/resources/adult-cows-milk-allergy/</a>
            </p>

            <h3>Most Common Foods Contaminated with Milk</h3>
            <div style=width:80%><a href="img/allergen-milk-by-product-type.png"><img
                        src="img/allergen-milk-by-product-type.png"></a></div>
            <p><a href="#">Top</a> </p>

            <h3>Temporal Visualisations</h3>

            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    
                    <tr>
                        <td><a href="img/allergen-milk-yyyy-mm.png"><img src="img/allergen-milk-yyyy-mm.png"
                                    style="width:100%"></a></td>
                    </tr>
                    <tr>
                        <td><a href="img/allergen-milk-mmm.png"><img src="img/allergen-milk-mmm.png"></a></td>
                        <td><a href="img/allergen-milk-yyyy.png"><img src="img/allergen-milk-yyyy.png"></a></td>
                    </tr>
                </table>
            </div>
            <p><a href="#">Top</a> </p>

            <h2 id="Allergen-visualisations-2">Undeclared Allergens</h2>
            <p>Undeclared allergens can cause severe reactions, including anaphylaxis, in individuals with food
                allergies.</p>

            <p>A number of regulations apply to food labelling and the declaration of allergens including : </p>

            <ul class="list">
                <li><b>Food Labelling Regulations 1996</b>: These regulations require food businesses to provide
                    accurate and
                    clear labeling of their products, including information on ingredients, allergens, and nutritional
                    content.</li>

                <li><b>The Food Information (Amendment) (England) Regulations 2014</b>: This regulation amends the Food
                    Labelling Regulations 1996 to implement
                    EU legislation on food labeling, including requirements for allergen information.</li>

                <li><b>Food Information Regulation 2011</b>: This regulation requires food businesses to provide
                    consumers with accurate and clear information about their
                    products, including allergens and nutritional content.</li>
            </ul>

            <p>Specific legislation enforcing mandatory labeling of high-risk foods containing common allergens (e.g.,
                peanuts, tree nuts, milk, eggs, fish, shellfish,
                soy, and wheat) include</p>
            <ul class="list">
                <li><b>The Food Labelling Regulations 2014 (SI 2014/1852)</b>: This regulation requires food businesses
                    to provide accurate and clear labeling of their
                    products, including information on ingredients, allergens, and nutritional content.</li>
                <li><b>The Food Information (Amendment) (England) Regulations 2016 (SI 2016/373)</b>: This regulation
                    amends the Food Labelling Regulations 2014 to implement
                    EU legislation on food labeling, including requirements for allergen information.</li>
            </ul>



            <p>In the dataset being analysed, these undeclared allergens are largely unknown, no further information is
                available in the data.</p>

            <h3>Most Common Foods Contaminated with Undeclared Allergens</h3>
            <div style=width:80%><a href="img/allergen-undeclared-allergens-by-product-type.png"><img
                        src="img/allergen-undeclared-allergens-by-product-type.png"></a></div>
            <p><a href="#">Top</a> </p>

            <h3>Temporal Visualisations</h3>
            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td><a href="img/allergen-undeclared-allergens-yyyy-mm.png"><img
                                    src="img/allergen-undeclared-allergens-yyyy-mm.png"></a></td>


                    </tr>
                    <tr>
                        <td><a href="img/allergen-undeclared-allergens-mmm.png"><img
                                    src="img/allergen-undeclared-allergens-mmm.png"></a></td>
                        <td><a href="img/allergen-undeclared-allergens-yyyy.png"><img
                                    src="img/allergen-undeclared-allergens-yyyy.png"></a></td>
                    </tr>
                </table>
            </div>
            <p><a href="#">Top</a> </p>

            <h2 id="Allergen-visualisations-3">Nuts</h2>
            <p><b>Risks of Nut Allergies</b></p>

            <p>Nut allergies can be severe and even life-threatening. Peanuts and tree nuts are one of the most common
                causes of food allergy-related deaths
                in the UK. Symptoms can range from mild, such as hives or itching, to severe, including difficulty
                breathing, swelling of the face and
                lips, and a drop in blood pressure.</p>

            <p><b>Processed Foods and Cross Contamination</b></p>

            <p>Processed foods may increase the risk of cross-contamination with nuts, particularly if they are made on
                shared equipment or in facilities where
                nuts are present. This can be a significant risk for individuals with nut allergies, as even small
                amounts of nut residue can trigger an allergic
                reaction. Food manufacturers and retailers have a responsibility to minimize the risk of
                cross-contamination through good manufacturing practices
                and proper labeling.</p>
            <p><a
                    href="https://www.allergyuk.org/resources/tree-nut-allergy-factsheet/">https://www.allergyuk.org/resources/tree-nut-allergy-factsheet/</a>
            </p>



            <h3>Most Common Foods Contaminated with Nuts</h3>
            <div style=width:80%><a href="img/allergen-nuts-by-product-type.png"><img
                        src="img/allergen-nuts-by-product-type.png"></a></div>
            <p><a href="#">Top</a> </p>

            <h3>Temporal Visualisations</h3>
            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td><a href="img/allergen-nuts-yyyy-mm.png"><img src="img/allergen-nuts-yyyy-mm.png"></a></td>
                    </tr>
                    <tr>
                        <td><a href="img/allergen-nuts-mmm.png"><img src="img/allergen-nuts-mmm.png"></a></td>
                        <td><a href="img/allergen-nuts-yyyy.png"><img src="img/allergen-nuts-yyyy.png"></a></td>
                    </tr>
                </table>
            </div>
            <p><a href="#">Top</a> </p>

            <h2 id="Allergen-visualisations-4">Gluten</h2>
            <p>Gluten allergy, also known as Coeliac disease or non-Coeliac gluten sensitivity (NCGS), is a medical
                condition that occurs when the body's
                immune system reacts to the protein gluten, which is found in wheat, barley, and rye. This reaction can
                cause inflammation and damage to the
                lining of the small intestine, leading to symptoms such as Diarrhoea, abdominal pain, fatigue, and
                weight loss. In severe cases, untreated
                Coeliac disease can lead to malnutrition, anaemia, and even increased risk of certain cancers.</p>

            <p>Processed foods can potentially increase the risk of cross-contamination with gluten due to the use of
                shared equipment, facilities, or ingredients
                in food manufacturing. This is particularly concerning for individuals with Coeliac disease or NCGS, as
                even small amounts of gluten can cause a
                reaction. Some common processed foods that may contain gluten include breaded meats, sauces, and
                seasoning's, which are often made from wheat-based
                products like breadcrumbs or maltodextrin.</p>

            <p>According to the Food Safety Act 1990 (<a
                    href="https://www.legislation.gov.uk/ukpga/1990/16/contents">link</a>), food manufacturers must
                clearly label products containing gluten or other allergens, but it's still essential for consumers with
                gluten allergies to be vigilant in
                checking labels and contacting manufacturers if they have concerns.</p>

            <p>Source: The Coeliac Disease Foundation (CDF) <a
                    href="https://www.coeliac.org.uk/home/">https://www.coeliac.org.uk/home/</a>

            <h3>The Most Common Foods Alerts for Products Contaminated with Gluten</h3>
            <div style=width:80%><a href="img/allergen-gluten-by-product-type.png"><img
                        src="img/allergen-gluten-by-product-type.png"></a></div>
            <p><a href="#">Top</a> </p>

            <h3>Temporal Analysis</h3>
            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td><a href="img/allergen-gluten-yyyy-mm.png"><img src="img/allergen-gluten-yyyy-mm.png"></a>
                        </td>


                    </tr>
                    <tr>
                        <td><a href="img/allergen-gluten-mmm.png"><img src="img/allergen-gluten-mmm.png"></a></td>
                        <td><a href="img/allergen-gluten-yyyy.png"><img src="img/allergen-gluten-yyyy.png"></a></td>
                    </tr>
                </table>
            </div>
            <p><a href="#">Top</a> </p>


            <h2 id="Allergen-visualisations-5">Soya</h2>
            <p>The soya bean belongs to the legume family, which includes fresh and dried peas, beans, carob, liquorice
                and peanut. Research has shown that a symptomatic reaction to more than one member of the legume family is rare. 
                It is therefore in most cases not necessary to avoid all foods from this plant family.</p>

            <p>Soya is widely used in foods and is difficult to avoid. As many as 60% of manufactured foods contain
                soya. Soy comes from soybeans and immature soybeans are called edamame beans. Soya can be ingested as whole 
                beans, soya flour, soya sauce or soya oil. Soya can also be used in foods as a texturiser
                (texturised vegetable protein), emulsifier (soya lecithin) or protein filler. Soya flour is widely used
                in foods including; breads, cakes, processed foods (ready meals, burgers and sausages) and baby foods.<br>
                <a
                    href="https://www.allergyuk.org/resources/soya-allergy-factsheet/">https://www.allergyuk.org/resources/soya-allergy-factsheet/</a>
            </p>

            <h3>The Most Common Foods Alerts for Products Contaminated with Soya</h3>
            <div style=width:80%><a href="img/allergen-soya-by-product-type.png"><img
                        src="img/allergen-soya-by-product-type.png"></a></div>
            <p><a href="#">Top</a> </p>
            <h3>Temporal Visualisations</h3>
            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td><a href="img/allergen-soya-yyyy-mm.png"><img src="img/allergen-soya-yyyy-mm.png"></a></td>
                    </tr>
                    <tr>
                        <td><a href="img/allergen-soya-mmm.png"><img src="img/allergen-soya-mmm.png"></a></td>
                        <td><a href="img/allergen-soya-yyyy.png"><img src="img/allergen-soya-yyyy.png"></a></td>
                    </tr>
                </table>
            </div>
            <p><a href="#">Top</a> </p>


            <h2 id="Allergen-visualisations-6">Egg</h2>
            <p>Eggs are one of the most common foods to trigger allergic symptoms in babies and young children. Most
                children with an egg allergy will
                start to outgrow it by the time they go to school but in some it will persist into later childhood or in
                rare cases, adulthood.
                Egg allergy can occasionally develop in adult life.</p>

            <p>Reactions to egg are usually triggered by the protein part of the egg (mainly in the egg white). Babies
                who have eczema are at an increased
                likelihood of developing an egg allergy. Having another type of food allergy for example to cow’s milk
                or a family history of allergy (atopy)
                also increases the risk.</p>

            <p><a
                    href="https://www.allergyuk.org/resources/egg-allergy-factsheet/">https://www.allergyuk.org/resources/egg-allergy-factsheet/</a>
            </p>

            <h3>The Most Common Foods Alerts for Products Contaminated with Egg</h3>
            <div style=width:80%><a href="img/allergen-egg-by-product-type.png"><img
                        src="img/allergen-egg-by-product-type.png"></a></div>
            <p><a href="#">Top</a> </p>

            <h3>Temporal Visualisations</h3>
            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td><a href="img/allergen-egg-yyyy-mm.png"><img src="img/allergen-egg-yyyy-mm.png"></a></td>


                    </tr>
                    <tr>
                        <td><a href="img/allergen-egg-mmm.png"><img src="img/allergen-egg-mmm.png"></a></td>
                        <td><a href="img/allergen-egg-yyyy.png"><img src="img/allergen-egg-yyyy.png"></a></td>
                    </tr>
                </table>
            </div>
            <p><a href="#">Top</a> </p>


            <h2 id="Allergen-visualisations-7">Mustard</h3>
                <p>Mustard is one of the 14 major allergens (food types). It must be mentioned either on a label or
                    through information provided, such as a menu, when
                    it is used as an ingredient in any food. Because mustard is sometimes a masked or hidden allergen in
                    foods it is important to know that it may not
                    be obvious by sight, taste or smell.</p>
                <p><b>Prevalence</b></p>

                <p>Mustard allergy is more prevalent where mustard plays a large part in the diet, in countries such as
                    France. It is unknown how common mustard allergy is in
                    the UK as there has been limited research or data collection. The number of people affected by
                    mustard allergy is therefore unknown. However, what we
                    do know is that mustard allergy has been reported for many years. In addition, there has been an
                    increase in the use of spices, including mustard,
                    in different food types in the last few years which increases the likelihood of being exposed to
                    mustard in our diet.</p>


                <p><a
                        href="https://www.allergyuk.org/resources/mustard-allergy-factsheet/">https://www.allergyuk.org/resources/mustard-allergy-factsheet/</a>
                </p>

                <h3>The Most Common Foods Alerts for Products Contaminated with Mustard</h3>

                <div style=width:80%><a href="img/allergen-mustard-by-product-type.png"><img
                            src="img/allergen-mustard-by-product-type.png"></a></div>
                <p><a href="#">Top</a> </p>

                <h3>Temporal Visualisations</h3>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td><a href="img/allergen-mustard-yyyy-mm.png"><img
                                        src="img/allergen-mustard-yyyy-mm.png"></a></td>


                        </tr>
                        <tr>
                            <td><a href="img/allergen-mustard-mmm.png"><img src="img/allergen-mustard-mmm.png"></a></td>
                            <td><a href="img/allergen-mustard-yyyy.png"><img src="img/allergen-mustard-yyyy.png"></a>
                            </td>
                        </tr>
                    </table>
                </div>
                <p><a href="#">Top</a> </p>


                <h2 id="Allergen-visualisations-8">Sulphites</h2>
                <p><b>What are sulphites?</b><br>Sulphites are preservatives used in the production of some foods and
                    drinks. The Romans first discovered that adding certain substances
                    (which we now know contain sulphites) to foods makes them last longer, and helps preserve their
                    colour and flavour.
                    <br><b>Key facts</b><br>
                <ul>
                    <li>Sulphites help preserve many foods and drinks</li>
                    <li>Sulphite sensitivity affects up to 13% of people with asthma</li>
                </ul>
                </p>
                <p><b>Prevalence</b></p>

                <p><b>How do sulphites cause symptoms?</b><br>
                    Sulphites work as food preservatives by releasing sulphur dioxide, a gas. Sulphur dioxide is an
                    irritant gas that can cause the airway to become irritated and constricted.
                    It is thought that in most people sensitive to sulphites, the gas is released when sulphite
                    containing foods interact with acid in the stomach. The gas disperses into the
                    stomach but also back up and into the airway, causing symptoms. Rarely, some people can have IgE
                    antibody to sulphites, which can cause an allergic reaction.</p>


                <p><a
                        href="https://www.allergyuk.org/resources/sulphites-and-airway-symptoms-factsheet/">https://www.allergyuk.org/resources/sulphites-and-airway-symptoms-factsheet/</a>
                </p>

                <h3>The Most Common Foods Alerts for Products Contaminated with Sulphites</h3>
                <div style=width:80%><a href="img/allergen-sulphites-by-product-type.png"><img
                            src="img/allergen-sulphites-by-product-type.png"></a></div>
                <p><a href="#">Top</a> </p>

                <h3>Temporal Visualisations</h3>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td><a href="img/allergen-sulphites-yyyy-mm.png"><img
                                        src="img/allergen-sulphites-yyyy-mm.png"></a></td>
                        </tr>
                        <tr>
                            <td><a href="img/allergen-sulphites-mmm.png"><img src="img/allergen-sulphites-mmm.png"></a>
                            </td>
                            <td><a href="img/allergen-sulphites-yyyy.png"><img
                                        src="img/allergen-sulphites-yyyy.png"></a></td>
                        </tr>
                    </table>
                </div>
                <p><a href="#">Top</a> </p>


                <h2 id="Allergen-visualisations-9">Fish / Crustaceans</h2>
                <p>People with seafood allergy may react to fish and/or shellfish. It is one of the most common food allergies in adults, but can also affect children.
                It may develop at any point in a person's life. It can be caused by a fish or shellfish that has been
                    eaten before with no previous signs of a food allergy.</p>
                <p>An allergy to either fish or shellfish is likely to be lifelong and is rarely outgrown.</p>

                <p>Fish and shellfish make up three of the 14 food allergens that are regulated by the Food Standards
                    Agency and must be included on food labels </p>

                <p><a
                        href="https://www.allergyuk.org/resources/sulphites-and-airway-symptoms-factsheet/">https://www.allergyuk.org/resources/sulphites-and-airway-symptoms-factsheet/</a>
                </p>

                <h3>The Most Common Foods Alerts for Products Contaminated with Sulphites</h3>
                <div style=width:80%><a href="img/allergen-fish-crustacean-by-product-type.png"><img
                            src="img/allergen-fish-crustacean-by-product-type.png"></a></div>
                <p><a href="#">Top</a> </p>

                <h3>Temporal Visualisations</h3>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td><a href="img/allergen-fish-crustacean-yyyy-mm.png"><img
                                        src="img/allergen-fish-crustacean-yyyy-mm.png"></a></td>
                        </tr>
                        <tr>
                            <td><a href="img/allergen-fish-crustacean-mmm.png"><img
                                        src="img/allergen-fish-crustacean-mmm.png"></a></td>
                            <td><a href="img/allergen-fish-crustacean-yyyy.png"><img
                                        src="img/allergen-fish-crustacean-yyyy.png"></a></td>
                        </tr>
                    </table>
                </div>
                <p><a href="#">Top</a> </p>

                <h2 id="Allergen-visualisations-10">Sesame</h2>
                <p>Sesame seed allergy is not new (it was first reported in the 1950s), but it has become increasingly
                    common and now is one of the top 10 causes of
                    food allergies. Increasing consumption of sesame might explain why more and more children in the UK
                    are developing this once rare allergy.
                    In countries such as Israel, where sesame has been a very common food for decades, sesame allergy is
                    very common. At this time, it is
                    unknown exactly how often sesame allergy is outgrown or how long it may take for someone to outgrow
                    sesame seed allergy.</p>

                <p>Other seeds have also been reported to cause allergies, including sunflower seed, mustard seed and
                    poppy seed, although these other types of
                    allergies are much less common than sesame. </p>

                <p>The distinction between tree nut and seed is not always clear. We often think of seeds as small in
                    size - like sesame seed, sunflower seed,
                    mustard seed, poppy seed or pumpkin seed. In fact, coconut (including the husk and inner white flesh
                    that we eat) is also a seed, albeit a
                    very large one! This may explain why coconut is considered to be a tree nut in USA but a seed
                    elsewhere.</p>

                <p>The most common type of allergy to seed is due to sesame.</p>

                <p>Some people allergic to sesame are also allergic to peanut and tree nuts. It is therefore important
                    that anyone with an allergy to seeds such as sesame is
                    assessed by an Allergy Specialist, who can provide advice as to what foods an allergic person must
                    avoid.</p>

                <p>Sesame Seeds are extremely potent allergens capable of causing severe allergic reactions
                    (anaphylaxis) in susceptible individuals. Sesame is becoming
                    more common in the diet today and is used extensively in everyday foods, especially on bread and
                    other bakery products. Products that are not
                    intended to contain sesame may have traces of the allergen due to manufacturing or marketing
                    practices.</p>

                <p><a
                        href="https://www.allergyuk.org/resources/sesame-allergy-and-other-seeds/">https://www.allergyuk.org/resources/sesame-allergy-and-other-seeds/</a>
                </p>

                <h3>The Most Common Foods Alerts for Products Contaminated with Sesame</h3>
                <div style=width:80%><a href="img/allergen-sesame-by-product-type.png"><img
                            src="img/allergen-sesame-by-product-type.png"></a></div>
                <p><a href="#">Top</a> </p>
                <h3>Temporal Visualisations</h3>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td><a href="img/allergen-sesame-yyyy-mm.png"><img
                                        src="img/allergen-sesame-yyyy-mm.png"></a></td>
                        </tr>
                        <tr>
                            <td><a href="img/allergen-sesame-mmm.png"><img src="img/allergen-sesame-mmm.png"></a></td>
                            <td><a href="img/allergen-sesame-yyyy.png"><img src="img/allergen-sesame-yyyy.png"></a></td>
                        </tr>
                    </table>
                </div>
                <p><a href="#">Top</a> </p>

                <h2 id="food-by-allergen-type">A Slice Above the Rest: Allergen Distribution Across Food Categories</h2>

                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td><a href="img/allergen-type-confectionery-pie-total.png"><img src="img/allergen-type-confectionery-pie-total.png"></a></td>
                            <td><a href="img/allergen-type-ready-meal-ready-to-eat-pie-total.png"><img src="img/allergen-type-ready-meal-ready-to-eat-pie-total.png"></a></td>

                        </tr>
                        <tr>

                        </tr>
                        <tr>
                            <td><a href="img/allergen-type-sauces-condiments-pie-total.png"><img src="img/allergen-type-sauces-condiments-pie-total.png"></a></td>
                            <td><a href="img/allergen-type-bread-baked-goods-pie-total.png"><img src="img/allergen-type-bread-baked-goods-pie-total.png"></a></td>
                            
                        </tr>
                        <tr>
                            <td><a href="img/allergen-type-vegetables-processed-pie-total.png"><img src="img/allergen-type-vegetables-processed-pie-total.png"></a></td>
                            <td><a href="img/allergen-type-nutrition-supplements-pie-total.png"><img src="img/allergen-type-nutrition-supplements-pie-total.png"></a></td>
                            
                        </tr>
                        <tr>
                            <td><a href="img/allergen-type-fish-processed-pie-total.png"><img src="img/allergen-type-fish-processed-pie-total.png"></a></td>
                            <td><a href="img/allergen-type-alcohol-pie-total.png"><img src="img/allergen-type-alcohol-pie-total.png"></a></td>

                        </tr>
                        <tr>

                        </tr>
                        <tr>
                            <td><a href="img/allergen-type-pork-processed-pie-total.png"><img src="img/allergen-type-pork-processed-pie-total.png"></a></td>
                            <td><a href="img/allergen-type-cereal-pie-total.png"><img src="img/allergen-type-cereal-pie-total.png"></a></td>

                        </tr>
                    </table>
                </div>
                <p><a href="#">Top</a> </p>


<h2>Summary</h2>
<p>Safety alerts for Allergenic contaminations account for 33% of all safety alerts issued by the FSA</p>
<p>The most common allergens : Milk, Undeclared Allergens, Nuts, Gluten, Soya, Egg, Mustard account for 89% of all safety alerts issued for allergens.</p>
<div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
  <thead>
    <tr style="text-align: right;">
      <th>Allergen</th>
      <th>count</th>
      <th>total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Milk</td>
      <td>77</td>
      <td>27.9%</td>
    </tr>
    <tr>
      <td>Undeclared Allergens</td>
      <td>43</td>
      <td>15.6%</td>
    </tr>
    <tr>
      <td>Nuts</td>
      <td>41</td>
      <td>14.9%</td>
    </tr>
    <tr>
      <td>Gluten</td>
      <td>36</td>
      <td>13.0%</td>
    </tr>
    <tr>
      <td>Soya</td>
      <td>22</td>
      <td>8.0%</td>
    </tr>
    <tr>
      <td>Egg</td>
      <td>16</td>
      <td>5.8%</td>
    </tr>
    <tr>
      <td>Mustard</td>
      <td>11</td>
      <td>4.0%</td>
    </tr>
    <tr>
      <td>Sulphites</td>
      <td>9</td>
      <td>3.2%</td>
    </tr>
    <tr>
      <td>Fish / Crustacean</td>
      <td>8</td>
      <td>2.9%</td>
    </tr>
    <tr>
      <td>Sesame</td>
      <td>7</td>
      <td>2.5%</td>
    </tr>
    <tr>
      <td>Sulphur Dioxide</td>
      <td>2</td>
      <td>0.7%</td>
    </tr>
    <tr>
      <td>Celery</td>
      <td>2</td>
      <td>0.7%</td>
    </tr>
    <tr>
      <td>Struvite Salts</td>
      <td>1</td>
      <td>0.3%</td>
    </tr>
    <tr>
      <td>Sugar</td>
      <td>1</td>
      <td>0.3%</td>
    </tr>
  </tbody>
</table>


        </div>
</body>
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