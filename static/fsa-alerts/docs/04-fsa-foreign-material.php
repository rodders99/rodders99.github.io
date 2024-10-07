<?php include 'html-inc/header.php'; ?>
<title>Food Standards Agency - Alerts Analysis - Contamination Type : Foreign Material</title>

<body class="colorscheme-light">
<div class="float-container">
    <a id="dark-mode-toggle" class="colorscheme-toggle">
        <i class="fa-solid fa-adjust fa-fw" aria-hidden="true"></i>
    </a></div>
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
                    <!-- <select onchange="window.location.hash=this.value" class="country"> -->
                    <select onchange="javascript:scrollToAnchor(this.value, 100);">
                        <option value="#">Select to jump to section ....</option>
                        <option value="foreign_material_types-annual-table">Table : Times Series Distribution of Foreign Material Contamination by year</option>
                        <option value="foreign_material-total-distribution">Time Series Cross-Sectional Visualisations of Foreign Material Contamination Types</option>
                        <option value="foreign_material-type-totals">Visualisation by Foreign Material Alerts Distribution by Type </option>
                        <option value="product-type-totals">Visualisation of Foreign Material Safety Alerts by Product Type </option>
                        <option value="foreign_material-time-series-total">Time Series Visualisations of Foreign Material Contaminations</option>
                        <option value="foreign_Material-visualisations-1">Metal - Temporal and Common Affected Foods Visualisations</option>
                        <option value="foreign_Material-visualisations-2">Plastic - Temporal and Common Affected Foods Visualisations</option>
                        <option value="foreign_Material-visualisations-3">Glass - Temporal and Common Affected Foods Visualisations</option>
                        <option value="foreign_Material-visualisations-4">Rubber - Temporal and Common Affected Foods Visualisations</option>
                        <option value="foreign_Material-visualisations-5">Insects - Temporal and Common Affected Foods Visualisations</option>
                        <option value="food-by-foreign_material-type">Foreign Material Contamination Distribution Across Food Categories</option>
                        <optgroup label="Product Type">
                            <option value="ready">Ready Meals / Ready to Eat </option>
                            <option value="ready">Confectionery </option>
                            <option value="baked">Bread / Baked Products</option>
                            <option value="baked">Vegetables Processed</option>
                            <option value="dairy">Dairy</option>
                            <option value="dairy">Cereal</option>
                            <option value="sauces">Sauces / Condiments</option>
                            <option value="sauces">Baby Foods / Formula</option>
                            <option value="fish">Fish Processed</option>
                            <option value="fish">Herbs / Spices</option>
                            <option value="beef">Beef Processed</option>
                            <option value="beef">Cheese </option>
                            <option value="chicken">Chicken Processed / </option>
                            <option value="chicken">Coffee / Tea</option>
                            <option value="honey">Honey</option>
                            <option value="honey">Milk / Alt Milks</option>
                            <option value="meats">Mixed Meats Processed</option>
                            <option value="meats">Nuts / Seeds</option>
                            <option value="other">Other Processed</option>
                            <option value="other">Pet Foods</option>
                            <option value="pork">Pork Processed</option>
                            <option value="pork">Rice</option>
                            <option value="sandwiches">Sandwiches / Wraps</option>
                            <option value="sandwiches">Soft Drinks</option>
                        </optgroup>
                        <optgroup label="Product Category">
                        <option value="cat-baby">Baby Foods / Formula</option>
                        <option value="cat-baby">Beverages</option>
                        <option value="cat-bread">Bread / Baked Goods</option>
                        <option value="cat-bread">Cereal</option>
                        <option value="cat-confectionery">Confectionery</option>
                        <option value="cat-confectionery">Dairy</option>
                        <option value="cat-frozen">Frozen Chilled Foods</option>
                        <option value="cat-frozen">Herbs / Spices</option>
                        <option value="cat-other">Other Processed</option>
                        <option value="cat-other">Fish Processed</option>
                        <option value="cat-meats">Meats Processed</option>
                        <option value="cat-meats">Ready Meal / Ready to Eat</option>
                        <option value="cat-sauces">Sauces / Condiments</option>
                        </optgroup>




                        <option value="summary">Summary</option>

                    </select>
                </div>
            </div>
        </div>


        <h1>Food Standards Agency - Alerts Analysis</h1>
        <p><img src="../icons/food-standards-agency-logo.jpg" style="width:30%"></p>
        <p class='last-updated'><?php include 'last-updated.php' ?></p>

        <h2 id="project-overview-">Foreign Material Category Contamination Analysis for Food Safety Alerts from
            food.gov.uk</h2>

            <p>Safety Alerts issued for Foreign Material contamination account for nearly a quarter of all alerts issued (</p>

        <p>The predominant cause of Foreign Material Contamination food safety alerts are for pieces of metal, plastic,
            glass and rubber found in foods. </p>
        <p>This type of contamination in food can be caused by various factors. However, based on industry reports,
            regulatory data, and research studies, here are some of the most likely causes:</p>
        <ul class="list">
            <li><B>Mechanical failure or wear and tear</B> : Equipment used in food processing, packaging, and
                transportation can malfunction or wear out over time, releasing small fragments of metal, plastic, or
                rubber into the product.</li>

            <li><b>Risk-Based Optimization (RBO) Gone Wrong</b> : In Risk-Based Optimization, companies prioritize
                maintenance based on a thorough assessment of risk levels associated with equipment failure.
                However, when RBO is done incorrectly or prioritizes profits over safety and quality, it can lead to
                avoiding essential maintenance to drive greater profits. The result of this approach can be:<br>
                <ul class="list">
                    <li><b>Increased risk of contamination</b> : Equipment failures can introduce contaminants into food
                        products.</li>
                    <li><b>Decreased product quality</b> : Under-maintained equipment may not perform optimally, leading to
                        inconsistent or subpar product quality.</li>
                    <li><b>Reputation damage</b> : Companies that compromise on safety and quality may face reputation damage,
                        regulatory issues, and even recalls.</li>
                </ul>
            <li><B>Material defects or imperfections</B> : Raw materials (e.g., plastics, rubbers) can have inherent
                flaws, such as inclusions, cracks, or poor quality control during production, which
                can lead to contamination during processing.</li>

            <li><B>Human error or neglect</B> : Employees may inadvertently introduce contaminants through carelessness,
                lack of attention to detail, or inadequate training on Good Manufacturing Practices (GMPs).</li>

            <li><B>Cross-contamination</B> : Products are often processed in shared facilities, and there is a risk of
                cross-contamination between different products or production lines.</li>


            <li><b>Recall or salvage of contaminated products</b> : If a product is recalled due to contamination issues,
                it may be sold as "salvage" or "re-manufactured," which can lead to the introduction of
                contaminants into other food products.</li></li></ul>

            <p>Some specific examples of common contaminants and their sources include:</p>
            <p>
            <ul class="list">
                <li><b>Metal fragments</b> : from machinery (e.g., grinders, crushers), packaging materials (e.g., tin
                    cans), or even food itself (e.g., metallic particles in spices).</li>

                <li><b>Plastic pieces</b> : from packaging materials (e.g., plastic containers, films), processing
                    equipment (e.g., conveyor belts), or production materials (e.g., plastic tubing).</li>

                <li><b>Rubber fragments</b> : from gaskets, seals, or other rubber components used in food processing and
                    packaging equipment.</li>
            </ul>
            </p>
            <h2 id="foreign_material_types-annual-table">Foreign Material Safety Alerts - Types by year</h2>
            <!-- <div class="datatable-container" style="margin-right:auto;margin-left:0px; width:100%"> -->
                <?php include "../tables/foreign_material-annual-alert-count.php" ?>
            <!-- </div> -->
                
                
                
            <p><a href="#" class="gototop">Top</a></p>


            <h3 id="foreign_material-total-distribution">Time Series Cross-Sectional Visualisations of Foreign Material Contamination Types</h3>

            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td><a href="../img/foreign_material-contaminant_type-yyyy-mm.png"><img
                                    src="../img/foreign_material-contaminant_type-yyyy-mm.png"></a></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td><a href="../img/foreign_material-contaminant_type-mmm.png"> <img
                                    src="../img/foreign_material-contaminant_type-mmm.png"></a></td>
                        <td><a href="../img/foreign_material-contaminant_type-yyyy.png"><img
                                    src="../img/foreign_material-contaminant_type-yyyy.png"></a></td>
                    </tr>

                </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>

            <h2 id="foreign_material-type-totals">Safety Alerts Distribution by Foreign Material Type</h2>

            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td><a href="../img/foreign_material-pie-total.png"><img src="../img/foreign_material-pie-total.png" style="width:100%"></a></td>
                        </td>

                    </tr>

                </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>


            <h2 id="product-type-totals">Safety Alerts Distribution by Product Category</h2>

            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td><a href="../img/foreign_material-product_categories-pie-total.png"><img src="../img/foreign_material-product_categories-pie-total.png" style="width:100%"></a>
                        </td>

                    </tr>

                </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>

            <p></p>
            <h2 id="foreign_material-time-series-total">Time Series Visualisations of Foreign Material Safety Alerts</h2>

            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td><a href="../img/foreign_material-yyyy-mm.png"><img src="../img/foreign_material-yyyy-mm.png"
                                    style="width:100%"></a></td>

                    </tr>
                    <tr>
                        <td><a href="../img/foreign_material-mmm.png"><img src="../img/foreign_material-mmm.png"
                                    style="width:100%"></a></td>
                        <td><a href="../img/foreign_material-yyyy.png"><img src="../img/foreign_material-yyyy.png"
                                    style="width:100%"></a></td>
                    </tr>

                </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>

            <h2 id="">Safety Alerts by Foreign Material Contaminant</h2>
            <h2 id="foreign_Material-visualisations-1">Metal</h2>
            <p></p>

            <h3>Most Common Foods Contaminated with Metal</h3>
            <div style=width:80%><a href="../img/foreign_material-metal-by-product-type.png">
                    <img src="../img/foreign_material-metal-by-product-type.png"></a></div>
            <p><a href="#" class="gototop">Top</a> </p>

            <h3>Temporal Visualisations</h3>

            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td><a href="../img/contaminant-metal-yyyy-mm.png"><img src="../img/contaminant-metal-yyyy-mm.png"
                                    style="width:100%"></a></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td><a href="../img/contaminant-metal-mmm.png"><img src="../img/contaminant-metal-mmm.png"></a></td>
                        <td><a href="../img/contaminant-metal-yyyy.png"><img src="../img/contaminant-metal-yyyy.png"></a></td>
                    </tr>
                </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>

            <h2 id="foreign_Material-visualisations-2">Plastic</h2>
            <p></p>

            <h3>Most Common Foods Contaminated with Plastic</h3>
            <div style=width:80%><a href="../img/foreign_material-plastic-by-product-type.png"><img
                        src="../img/foreign_material-plastic-by-product-type.png"></a></div>
            <p><a href="#" class="gototop">Top</a> </p>

            <h3>Temporal Visualisations</h3>
            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td><a href="../img/contaminant-plastic-yyyy-mm.png"><img
                                    src="../img/contaminant-plastic-yyyy-mm.png"></a></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td><a href="../img/contaminant-plastic-mmm.png"><img src="../img/contaminant-plastic-mmm.png"></a>
                        </td>
                        <td><a href="../img/contaminant-plastic-yyyy.png"><img src="../img/contaminant-plastic-yyyy.png"></a>
                        </td>
                    </tr>
                </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>
            <h2 id="foreign_Material-visualisations-3">Glass</h2>
            <p></p>

            <h3>Most Common Foods Contaminated with Glass</h3>
            <div style=width:80%>
                <a href="../img/foreign_material-glass-product-type.png"><img
                        src="../img/foreign_material-glass-by-product-type.png">
                </a>
            </div>
            <p><a href="#" class="gototop">Top</a> </p>

            <h3>Temporal Visualisations</h3>
            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td><a href="../img/contaminant-glass-yyyy-mm.png"><img
                                    src="../img/contaminant-glass-yyyy-mm.png"></a></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td><a href="../img/contaminant-glass-mmm.png"><img src="../img/contaminant-glass-mmm.png"></a></td>
                        <td><a href="../img/contaminant-glass-yyyy.png"><img src="../img/contaminant-glass-yyyy.png"></a></td>
                    </tr>
                </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a> </p>

            <h2 id="foreign_Material-visualisations-4">Rubber</h2>
            <p></p>

            <h3>The Most Common Foods Contaminated with Rubber</h3>
            <div style=width:80%><a href="../img/foreign_material-rubber-by-product-type.png"><img
                        src="../img/foreign_material-rubber-by-product-type.png"></a></div>
            <p><a href="#" class="gototop">Top</a> </p>


            <h3>Temporal Visualisations</h3>
            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td><a href="../img/contaminant-rubber-yyyy-mm.png"><img
                                    src="../img/contaminant-rubber-yyyy-mm.png"></a></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td><a href="../img/contaminant-rubber-mmm.png"><img src="../img/contaminant-rubber-mmm.png"></a></td>
                        <td><a href="../img/contaminant-rubber-yyyy.png"><img src="../img/contaminant-rubber-yyyy.png"></a>
                        </td>
                    </tr>
                </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>

            <h3 id="foreign_Material-visualisations-5">Insects</h3>
                <p></p>

                <h3>The Most Common Foods Contaminated with Insects</h3>
                <div style=width:80%><a href="../img/foreign_material-insects-by-product-type.png"><img
                            src="../img/foreign_material-insects-by-product-type.png"></a></div>
                <p><a href="#" class="gototop">Top</a> </p>

                <h3>Temporal Visualisations</h3>
                <!-- <div class="datatable-container" > -->
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td><a href="../img/contaminant-insects-yyyy-mm.png"><img
                                        src="../img/contaminant-insects-yyyy-mm.png"></a></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td><a href="../img/contaminant-insects-mmm.png"><img
                                        src="../img/contaminant-insects-mmm.png"></a>
                            </td>
                            <td><a href="../img/contaminant-insects-yyyy.png"><img
                                        src="../img/contaminant-insects-yyyy.png"></a>
                            </td>
                        </tr>
                    </table>
                <!-- </div> -->
                <p><a href="#" class="gototop">Top</a></p>

                <h2 id="food-by-foreign_material-type">A Slice Above the Rest: Foreign Material Distribution Across Food
                    Categories</h2>


                

                <p id="ready"></p>

                <!-- <div class="datatable-container" > -->
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <thead><tr><td style="width:50%"><h3>Ready Meal / Ready to Eat</h3></td><td><h3>Confectionery</h3></td></tr></thead>

                        <tr>
                            <td><a  href="../img/foreign_material-type-ready-meal-ready-to-eat-pie-total.png">
                                <img src="../img/foreign_material-type-ready-meal-ready-to-eat-pie-total.png"></a></td>
                            <td><a  href="../img/foreign_material-type-confectionery-pie-total.png">
                                <img src="../img/foreign_material-type-confectionery-pie-total.png"></a></td>

                        </tr>
                        </table>
                    <!-- </div> -->
                        <p><a href="#" class="gototop">Top</a></p>

                        <p id="baked"></p>

                        <!-- <div class="datatable-container" > -->
                            <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                            <thead><tr><td style="width:50%"><h3>Ready Meal / Ready to Eat</h3></td><td><h3>Confectionery</h3></td></tr></thead>

                        <tr>
                            <td><a href="../img/foreign_material-type-bread-baked-goods-pie-total.png">
                                <img src="../img/foreign_material-type-bread-baked-goods-pie-total.png"></a></td>
                            <td><a  href="../img/foreign_material-type-vegetables-processed-pie-total.png">
                                <img src="../img/foreign_material-type-vegetables-processed-pie-total.png"></a></td>

                        </tr>
                        </table>
                    <!-- </div> -->
                        <p><a href="#" class="gototop">Top</a></p>

                        <p id="dairy"></p>

                        <!-- <div class="datatable-container" > -->
                            <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                            <thead><tr><td style="width:50%"><h3>Dairy</h3></td><td><h3>Cereal</h3></td></tr></thead>
                        <tr>
                            <td><a  href="../img/foreign_material-type-dairy-pie-total.png">
                                <img src="../img/foreign_material-type-dairy-pie-total.png"></a></td>
                            <td><a  href="../img/foreign_material-type-cereal-pie-total.png">
                                <img src="../img/foreign_material-type-cereal-pie-total.png"></a></td>

                        </tr>
                        </table>
                    <!-- </div> -->
                        <p><a href="#" class="gototop">Top</a></p>

                        <p id="sauces"></p>

                        <!-- <div class="datatable-container" > -->
                            <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                            <thead><tr><td style="width:50%"><h3>Sauces / Condiments</h3></td><td><h3>Baby Foods / Formula</h3></td></tr></thead>
                        <tr>
                            <td><a href="../img/foreign_material-type-sauces-condiments-pie-total.png">
                                <img src="../img/foreign_material-type-sauces-condiments-pie-total.png"></a></td>
                            <td><a  href="../img/foreign_material-type-baby-foods-formula-pie-total.png">
                                <img src="../img/foreign_material-type-baby-foods-formula-pie-total.png"></a></td>

                        </tr>
                        </table>
                    <!-- </div> -->
                        <p><a href="#" class="gototop">Top</a></p>

                    <p id="fish"></p>

                    <!-- <div class="datatable-container" > -->
                        <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <thead><tr><td style="width:50%"><h3>Fish Processed</h3></td><td><h3>Herbs / Spices</h3></td></tr></thead>
                        <tr>
                            <td><a  href="../img/foreign_material-type-fish-processed-pie-total.png">
                                <img src="../img/foreign_material-type-fish-processed-pie-total.png"></a></td>
                            <td><a  href="../img/foreign_material-type-herbs-spices-pie-total.png">
                                <img src="../img/foreign_material-type-herbs-spices-pie-total.png"></a></td>
                        </tr>
                    </table>
                <!-- </div> -->
                <p><a href="#" class="gototop">Top</a></p>




                <p id="beef"></p>

                <!-- <div class="datatable-container" > -->
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <thead><tr><td style="width:50%"><h3>Beef Processed</h3></td><td><h3>Cheese</h3></td></tr></thead>
                    <tr>
                        <td><a  href="../img/foreign_material-type-beef-processed-pie-total.png">
                            <img src="../img/foreign_material-type-beef-processed-pie-total.png"></a></td>
                        <td><a  href="../img/foreign_material-type-cheese-pie-total.png">
                            <img src="../img/foreign_material-type-cheese-pie-total.png"></a></td>
                    </tr>
                </table>
                <!-- </div> -->
                <p><a href="#" class="gototop">Top</a></p>

                <p id="chicken"></p>

                <!-- <div class="datatable-container" > -->
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <thead><tr><td style="width:50%"><h3>Chicken Processed</h3></td><td><h3>Coffee / Tea</h3></td></tr></thead>
                    <tr>
                        <td><a  href="../img/foreign_material-type-chicken-processed-pie-total.png">
                            <img src="../img/foreign_material-type-chicken-processed-pie-total.png"></a></td>
                        <td><a  href="../img/foreign_material-type-coffee-tea-pie-total.png">
                            <img src="../img/foreign_material-type-coffee-tea-pie-total.png"></a></td>
                    </tr>
                </table>
                <!-- </div> -->
                <p><a href="#" class="gototop">Top</a></p>


                <p id="honey"></p>

                <!-- <div class="datatable-container" > -->
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <thead><tr><td style="width:50%"><h3>Honey</h3></td><td><h3>Milk / Alt Milks</h3></td></tr></thead>
                    <tr>
                        <td><a  href="../img/foreign_material-type-honey-pie-total.png">
                            <img src="../img/foreign_material-type-honey-pie-total.png"></a></td>
                        <td><a  href="../img/foreign_material-type-milk-alt-milks-pie-total.png">
                            <img src="../img/foreign_material-type-milk-alt-milks-pie-total.png"></a></td>
                    </tr>
                </table>
                <!-- </div> -->
                <p><a href="#" class="gototop">Top</a></p>


                <p id="meats"></p>

                <!-- <div class="datatable-container" > -->
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <thead><tr><td style="width:50%"><h3>Mixed Meats Processed</h3></td><td><h3>Nuts / Seeds</h3></td></tr></thead>
                    <tr>
                        <td><a  href="../img/foreign_material-type-mixed-meat-processed-pie-total.png">
                            <img src="../img/foreign_material-type-mixed-meat-processed-pie-total.png"></a></td>
                        <td><a  href="../img/foreign_material-type-nuts-seeds-pie-total.png">
                            <img src="../img/foreign_material-type-nuts-seeds-pie-total.png"></a></td>
                    </tr>
                </table>
                <!-- </div> -->
                <p><a href="#" class="gototop">Top</a></p>


                <p id="other"></p>

            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                <thead><tr><td style="width:50%"><h3>Other Processed</h3></td><td><h3>Pet Foods</h3></td></tr></thead>
                <tr>
                    <td><a  href="../img/foreign_material-type-other-processed-pie-total.png">
                        <img src="../img/foreign_material-type-other-processed-pie-total.png"></a></td>
                    <td><a  href="../img/foreign_material-type-pet-food-pie-total.png">
                        <img src="../img/foreign_material-type-pet-food-pie-total.png"></a></td>
                </tr>
            </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>

            <p id="pork"></p>

            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                <thead><tr><td style="width:50%"><h3>Pork Processed</h3></td><td><h3>Rice</h3></td></tr></thead>
                <tr>
                    <td><a  href="../img/foreign_material-type-pork-processed-pie-total.png">
                        <img src="../img/foreign_material-type-pork-processed-pie-total.png"></a></td>
                    <td><a  href="../img/foreign_material-type-rice-pie-total.png">
                        <img src="../img/foreign_material-type-rice-pie-total.png"></a></td>
                </tr>
            </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>


            <p id="sandwiches"></p>

            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                <thead><tr><td style="width:50%"><h3>Sandwiches / Wraps</h3></td><td><h3>Soft Drinks</h3></td></tr></thead>
                <tr>
                    <td><a  href="../img/foreign_material-type-sandwiches-wraps-pie-total.png">
                        <img src="../img/foreign_material-type-sandwiches-wraps-pie-total.png"></a></td>
                    <td><a  href="../img/foreign_material-type-soft-drinks-pie-total.png">
                        <img src="../img/foreign_material-type-soft-drinks-pie-total.png"></a></td>
                </tr>
            </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>

    <h2>A Taste of Trouble: Common Food Contaminants by Product Category</h2>


            <p id="cat-baby"></p>

            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                <thead><tr><td style="width:50%"><h3>Baby Foods / Formula</h3></td><td><h3>Beverages</h3></td></tr></thead>
                <tr>
                    <td><a  href="../img/foreign_material-category-baby-foods-formula-pie-total.png">
                        <img src="../img/foreign_material-category-baby-foods-formula-pie-total.png"></a></td>
                    <td><a  href="../img/foreign_material-category-beverages-pie-total.png">
                        <img src="../img/foreign_material-category-beverages-pie-total.png"></a></td>
                </tr>
            </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>


            <p id="cat-bread"></p>

            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                <thead><tr><td style="width:50%"><h3>Bread / Baked Goods</h3></td><td><h3>Cereals</h3></td></tr></thead>
                <tr>
                    <td><a  href="../img/foreign_material-category-bread-baked-goods-pie-total.png">
                        <img src="../img/foreign_material-category-bread-baked-goods-pie-total.png"></a></td>
                    <td><a  href="../img/foreign_material-category-cereal-pie-total.png">
                        <img src="../img/foreign_material-category-cereal-pie-total.png"></a></td>
                </tr>
            </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>


            <p id="cat-confectionery"></p>

            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                <thead><tr><td style="width:50%"><h3>Confectionery</h3></td><td><h3>Dairy</h3></td></tr></thead>
                <tr>
                    <td><a  href="../img/foreign_material-category-confectionery-pie-total.png">
                        <img src="../img/foreign_material-category-confectionery-pie-total.png"></a></td>
                    <td><a  href="../img/foreign_material-category-dairy-pie-total.png">
                        <img src="../img/foreign_material-category-dairy-pie-total.png"></a></td>
                </tr>
            </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>



            <p id="cat-frozen"></p>

            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                <thead><tr><td style="width:50%"><h3>Frozen / Chilled Foods</h3></td><td><h3>Herbs / Spices</h3></td></tr></thead>
                <tr>
                    <td><a  href="../img/foreign_material-category-frozen-chilled-foods-pie-total.png">
                        <img src="../img/foreign_material-category-frozen-chilled-foods-pie-total.png"></a></td>
                    <td><a  href="../img/foreign_material-category-herbs-spices-pie-total.png">
                        <img src="../img/foreign_material-category-herbs-spices-pie-total.png"></a></td>
                </tr>
            </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>


            <p id="cat-other"></p>

            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                <thead><tr><td style="width:50%"><h3>Other Processed</h3></td><td><h3>Fish Processed</h3></td></tr></thead>
                <tr>
                    <td><a  href="../img/foreign_material-category-other-pie-total.png">
                        <img src="../img/foreign_material-category-other-pie-total.png"></a></td>
                    <td><a  href="../img/foreign_material-category-processed-fish-pie-total.png">
                        <img src="../img/foreign_material-category-processed-fish-pie-total.png"></a></td>
                </tr>
            </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>

            <p id="cat-meats"></p>

            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                <thead><tr><td style="width:50%"><h3>Meats Processed</h3></td><td><h3>Ready Meals / Ready to Eat</h3></td></tr></thead>
                <tr>
                    <td><a  href="../img/foreign_material-category-processed-meats-pie-total.png">
                        <img src="../img/foreign_material-category-processed-meats-pie-total.png"></a></td>
                    <td><a  href="../img/foreign_material-category-ready-meal-ready-to-eat-pie-total.png">
                        <img src="../img/foreign_material-category-ready-meal-ready-to-eat-pie-total.png"></a></td>
                </tr>
            </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>

            <p id="cat-sauces"></p>

            <!-- <div class="datatable-container" > -->
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                <thead><tr><td style="width:50%"><h3>Sauces / Condiments</h3></td><td><h3></h3></td></tr></thead>
                <tr>
                    <td><a  href="../img/foreign_material-category-processed-meats-pie-total.png">
                        <img src="../img/foreign_material-category-processed-meats-pie-total.png"></a></td>
                    <td></td>
                </tr>
            </table>
            <!-- </div> -->
            <p><a href="#" class="gototop">Top</a></p>


            <h2 id="summary">Summary</h2>
            <p>Foreign Material contamination accounts for nearly a quarter (24.4%) of all safety alerts issued by the FSA.</p>
            <p>Collectively, metal, plastic and glass makes up over 54% of all foreign contamination safety alerts. </p>
            <p>Metal is the most common with 45% of all safety alerts issued for foreign material contamination being from metal</p>
            <p>Plastic follows on with  26% of all safety alerts for foreign material contamination</p>
            <p>Glass is third second most common foreign material contaminant,  9% of foreign material contamination alerts are for glass</p>
            <p>
            <!-- <div class="datatable-container" style="margin-right:auto;margin-left:0px; width:100%"> -->
                <?php include "../tables/foreign_material-annual-alert-count.php" ?>
            <!-- </div> -->
                
</p>
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