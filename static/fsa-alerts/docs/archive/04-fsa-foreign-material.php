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

                    </select>
                </div>
            </div>
        </div>


        <h1>Food Standards Agency - Alerts Analysis</h1>
        <img src="/img/food-standards-agency-logo.jpg" style="width:30%">

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
            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <thead>
                        <tr style="text-align: right;">
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
                            <th>Metal</th>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">9</td>
                            <td style="text-align: center;">8</td>
                            <td style="text-align: center;">6</td>
                            <td style="text-align: center;">6</td>
                            <td style="text-align: center;">12</td>
                            <td style="text-align: center;">30</td>
                            <td style="text-align: center;">20</td>
                            <td style="text-align: center;">91</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>Plastic</th>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">7</td>
                            <td style="text-align: center;">8</td>
                            <td style="text-align: center;">7</td>
                            <td style="text-align: center;">
                                10</td>
                            <td style="text-align: center;">7</td>
                            <td style="text-align: center;">12</td>
                            <td style="text-align: center;">3</td>
                            <td style="text-align: center;">54</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>Glass</th>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">3</td>
                            <td style="text-align: center;">2</td>
                            <td style="text-align: center;">3</td>
                            <td style="text-align: center;">3</td>
                            <td style="text-align: center;">
                                2</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">4</td>
                            <td style="text-align: center;">18</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>Rubber</th>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">5</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">2</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">
                                2</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">9</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>Insects</th>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">
                                3</td>
                            <td style="text-align: center;">7</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>Chemical</th>
                            <td style="text-align: center;">3</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">2</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">
                                6</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>Unknown</th>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">3</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>High Iron Levels</th>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">2</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">2</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>
                                Stones</th>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">2</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">2</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>Aluminium Phosphide</th>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>Apple Stalks</th>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>Histamine</th>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">
                                0</td>
                            <td style="text-align: center;">1</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>Cloth</th>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">
                                0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">
                                1</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>Hard Lumps</th>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">1</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>Silica Beads</th>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">
                                0</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>
                                Sharp Stick</th>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>Undeclared levels <br>of undeclared ingredient</th>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0
                            </td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                        </tr>
                        <tr style="text-align: center">
                            <th>Wood</th>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">0</td>
                            <td style="text-align: center;">1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p><a href="#">Top</a></p>


            <h3 id="foreign_material-total-distribution">Time Series Cross-Sectional Visualisations of Foreign Material Contamination Types</h3>

            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td style="text-align: center;"><a href="img/foreign_material-contaminant_type-yyyy-mm.png"><img
                                    src="img/foreign_material-contaminant_type-yyyy-mm.png"></a></td>
                        <td style="text-align: center;"></td>

                    </tr>
                    <tr>
                        <td style="text-align: center;"><a href="img/foreign_material-contaminant_type-mmm.png"> <img
                                    src="img/foreign_material-contaminant_type-mmm.png"></a></td>
                        <td style="text-align: center;"><a href="img/foreign_material-contaminant_type-yyyy.png"><img
                                    src="img/foreign_material-contaminant_type-yyyy.png"></a></td>
                    </tr>

                </table>
            </div>
            <p><a href="#">Top</a></p>

            <h2 id="foreign_material-type-totals">Safety Alerts Distribution by Foreign Material Type</h2>

            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td style="text-align: center;"><a href="img/foreign_material-pie-total.png"><img src="img/foreign_material-pie-total.png" style="width:100%"></a></td>
                        </td>

                    </tr>

                </table>
            </div>
            <p><a href="#">Top</a></p>


            <h2 id="product-type-totals">Safety Alerts Distribution by Product Category</h2>

            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td style="text-align: center;"><a href="img/foreign_material-product_categories-pie-total.png"><img src="img/foreign_material-product_categories-pie-total.png" style="width:100%"></a>
                        </td>

                    </tr>

                </table>
            </div>
            <p><a href="#">Top</a></p>

            <p></p>
            <h2 id="foreign_material-time-series-total">Time Series Visualisations of Foreign Material Safety Alerts</h2>

            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td style="text-align: center;"><a href="img/foreign_material-yyyy-mm.png"><img src="img/foreign_material-yyyy-mm.png"
                                    style="width:100%"></a></td>

                    </tr>
                    <tr>
                        <td style="text-align: center;"><a href="img/foreign_material-mmm.png"><img src="img/foreign_material-mmm.png"
                                    style="width:100%"></a></td>
                        <td style="text-align: center;"><a href="img/foreign_material-yyyy.png"><img src="img/foreign_material-yyyy.png"
                                    style="width:100%"></a></td>
                    </tr>

                </table>
            </div>
            <p><a href="#">Top</a></p>

            <h2 id="">Safety Alerts by Foreign Material Contaminant</h2>
            <h2 id="foreign_Material-visualisations-1">Metal</h2>
            <p></p>

            <h3>Most Common Foods Contaminated with Metal</h3>
            <div style=width:80%><a href="img/foreign_material-metal-by-product-type.png">
                    <img src="img/foreign_material-metal-by-product-type.png"></a></div>
            <p><a href="#">Top</a> </p>

            <h3>Temporal Visualisations</h3>

            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td style="text-align: center;"><a href="img/contaminant-metal-yyyy-mm.png"><img src="img/contaminant-metal-yyyy-mm.png"
                                    style="width:100%"></a></td>
                        <td style="text-align: center;"></td>

                    </tr>
                    <tr>
                        <td style="text-align: center;"><a href="img/contaminant-metal-mmm.png"><img src="img/contaminant-metal-mmm.png"></a></td>
                        <td style="text-align: center;"><a href="img/contaminant-metal-yyyy.png"><img src="img/contaminant-metal-yyyy.png"></a></td>
                    </tr>
                </table>
            </div>
            <p><a href="#">Top</a></p>

            <h2 id="foreign_Material-visualisations-2">Plastic</h2>
            <p></p>

            <h3>Most Common Foods Contaminated with Plastic</h3>
            <div style=width:80%><a href="img/foreign_material-plastic-by-product-type.png"><img
                        src="img/foreign_material-plastic-by-product-type.png"></a></div>
            <p><a href="#">Top</a> </p>

            <h3>Temporal Visualisations</h3>
            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td style="text-align: center;"><a href="img/contaminant-plastic-yyyy-mm.png"><img
                                    src="img/contaminant-plastic-yyyy-mm.png"></a></td>
                        <td style="text-align: center;"></td>

                    </tr>
                    <tr>
                        <td style="text-align: center;"><a href="img/contaminant-plastic-mmm.png"><img src="img/contaminant-plastic-mmm.png"></a>
                        </td>
                        <td style="text-align: center;"><a href="img/contaminant-plastic-yyyy.png"><img src="img/contaminant-plastic-yyyy.png"></a>
                        </td>
                    </tr>
                </table>
            </div>
            <p><a href="#">Top</a></p>
            <h2 id="foreign_Material-visualisations-3">Glass</h2>
            <p></p>

            <h3>Most Common Foods Contaminated with Glass</h3>
            <div style=width:80%>
                <a href="img/foreign_material-glass-product-type.png"><img
                        src="img/foreign_material-glass-by-product-type.png">
                </a>
            </div>
            <p><a href="#">Top</a> </p>

            <h3>Temporal Visualisations</h3>
            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td style="text-align: center;"><a href="img/contaminant-glass-yyyy-mm.png"><img
                                    src="img/contaminant-glass-yyyy-mm.png"></a></td>
                        <td style="text-align: center;"></td>

                    </tr>
                    <tr>
                        <td style="text-align: center;"><a href="img/contaminant-glass-mmm.png"><img src="img/contaminant-glass-mmm.png"></a></td>
                        <td style="text-align: center;"><a href="img/contaminant-glass-yyyy.png"><img src="img/contaminant-glass-yyyy.png"></a></td>
                    </tr>
                </table>
            </div>
            <p><a href="#">Top</a> </p>

            <h2 id="foreign_Material-visualisations-4">Rubber</h2>
            <p></p>

            <h3>The Most Common Foods Contaminated with Rubber</h3>
            <div style=width:80%><a href="img/foreign_material-rubber-by-product-type.png"><img
                        src="img/foreign_material-rubber-by-product-type.png"></a></div>
            <p><a href="#">Top</a> </p>


            <h3>Temporal Visualisations</h3>
            <div class="datatable-container" id="html_table-source-meta-data">
                <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                    <tr>
                        <td style="text-align: center;"><a href="img/contaminant-rubber-yyyy-mm.png"><img
                                    src="img/contaminant-rubber-yyyy-mm.png"></a></td>
                        <td style="text-align: center;"></td>

                    </tr>
                    <tr>
                        <td style="text-align: center;"><a href="img/contaminant-rubber-mmm.png"><img src="img/contaminant-rubber-mmm.png"></a></td>
                        <td style="text-align: center;"><a href="img/contaminant-rubber-yyyy.png"><img src="img/contaminant-rubber-yyyy.png"></a>
                        </td>
                    </tr>
                </table>
            </div>
            <p><a href="#">Top</a></p>

            <h2 id="foreign_Material-visualisations-5">Insects</h3>
                <p></p>

                <h3>The Most Common Foods Contaminated with Insects</h3>
                <div style=width:80%><a href="img/foreign_material-insects-by-product-type.png"><img
                            src="img/foreign_material-insects-by-product-type.png"></a></div>
                <p><a href="#">Top</a> </p>

                <h3>Temporal Visualisations</h3>
                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td style="text-align: center;"><a href="img/contaminant-insects-yyyy-mm.png"><img
                                        src="img/contaminant-insects-yyyy-mm.png"></a></td>
                            <td style="text-align: center;"></td>

                        </tr>
                        <tr>
                            <td style="text-align: center;"><a href="img/contaminant-insects-mmm.png"><img
                                        src="img/contaminant-insects-mmm.png"></a>
                            </td>
                            <td style="text-align: center;"><a href="img/contaminant-insects-yyyy.png"><img
                                        src="img/contaminant-insects-yyyy.png"></a>
                            </td>
                        </tr>
                    </table>
                </div>
                <p><a href="#">Top</a></p>

                <h2 id="food-by-foreign_material-type">A Slice Above the Rest: Foreign Material Distribution Across Food
                    Categories</h2>




                <div class="datatable-container" id="html_table-source-meta-data">
                    <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
                        <tr>
                            <td style="text-align: center;"><a href="img/foreign_material-type-ready-meal-ready-to-eat-pie-total.png"><img
                                        src="img/foreign_material-type-ready-meal-ready-to-eat-pie-total.png"></a></td>
                            <td style="text-align: center;"><a href="img/foreign_material-type-confectionery-pie-total.png"><img
                                        src="img/foreign_material-type-confectionery-pie-total.png"></a></td>

                        </tr>
                        <tr>

                        </tr>
                        <tr>
                            <td style="text-align: center;"><a href="img/foreign_material-type-bread-baked-goods-pie-total.png"><img
                                        src="img/foreign_material-type-bread-baked-goods-pie-total.png"></a></td>
                            <td style="text-align: center;"><a href="img/foreign_material-type-vegetables-processed-pie-total.png"><img
                                        src="img/foreign_material-type-vegetables-processed-pie-total.png"></a></td>

                        </tr>
                        <tr>

                        </tr>
                        <tr>
                            <td style="text-align: center;"><a href="img/foreign_material-type-dairy-pie-total.png"><img
                                        src="img/foreign_material-type-dairy-pie-total.png"></a></td>
                            <td style="text-align: center;"><a href="img/foreign_material-type-cereal-pie-total.png"><img
                                        src="img/foreign_material-type-cereal-pie-total.png"></a></td>

                        </tr>
                        <tr>

                        </tr>
                        <tr>
                            <td style="text-align: center;"><a href="img/foreign_material-type-sauces-condiments-pie-total.png"><img
                                        src="img/foreign_material-type-sauces-condiments-pie-total.png"></a></td>
                            <td style="text-align: center;"><a href="img/foreign_material-type-baby-foods-formula-pie-total.png"><img
                                        src="img/foreign_material-type-baby-foods-formula-pie-total.png"></a></td>

                        </tr>
                        <tr>
                            <td style="text-align: center;"><a href="img/foreign_material-type-fish-processed-pie-total.png"><img
                                        src="img/foreign_material-type-fish-processed-pie-total.png"></a></td>
                            <td style="text-align: center;"><a href="img/foreign_material-type-herbs-spices-pie-total.png"><img
                                        src="img/foreign_material-type-herbs-spices-pie-total.png"></a></td>
                        </tr>
                    </table>
                </div>
                <p><a href="#">Top</a></p>




            <h2>Summary</h2>
            <p>Foreign Material contamination accounts for nearly a quarter (24.4%) of all safety alerts issued by the FSA.</p>
            <p>Collectively, metal, plastic and glass makes up over 54% of all foreign contamination safety alerts. </p>
            <p>Metal is the most common with 45% of all safety alerts issued for foreign material contamination being from metal</p>
            <p>Plastic follows on with  26% of all safety alerts for foreign material contamination</p>
            <p>Glass is third second most common foreign material contaminant,  9% of foreign material contamination alerts are for glass</p>
            <p>
            <div class="datatable-container" id="html_table-source-meta-data">
            <table class="dataframe datatable" style="width:100%; margin: 0 auto;">
            <thead>    
            <tr style="text-align: right;">      
            <th>Foreign_Material</th>      
            <th>count</th>      
            <th>total</th>    
            </tr>
            </thead>  <tbody>    <tr>      
            <td>Metal</td>      
            <td>91</td>      
            <td>45.%</td>    
            </tr>
                <tr>      
            <td>Plastic</td>      
            <td>54</td>      
            <td>26.%</td>    
            </tr>
                <tr>      
            <td>Glass</td>      
            <td>18</td>      
            <td>9.0%</td>    
            </tr>
                <tr>      
            <td>Rubber</td>      
            <td>9</td>      
            <td>4.5%</td>    
            </tr>
                <tr>      
            <td>Insects</td>      
            <td>7</td>      
            <td>3.4%</td>    
            </tr>
                <tr>      
            <td>Chemical</td>      
            <td>6</td>      
            <td>3.0%</td>    
            </tr>
                <tr>      
            <td>Unknown</td>      
            <td>3</td>      
            <td>1.4%</td>    
            </tr>
                <tr>      
            <td>High Iron Levels</td>      
            <td>2</td>      
            <td>1.0%</td>    
            </tr>
                <tr>      
            <td>Stones</td>      
            <td>2</td>      
            <td>1%</td>    
            </tr>
                <tr>      
            <td>Aluminium Phosphide</td>      
            <td>1</td>      
            <td>0.5%</td>    
            </tr>
                <tr>      
            <td>Undeclared levels of xxx</td>      
            <td>1</td>      
            <td>0.5%</td>    
            </tr>
                <tr>      
            <td>Wood</td>      
            <td>1</td>      
            <td>0.5%</td>    
            </tr>
                <tr>      
            <td>Silica Beads</td>      
            <td>1</td>      
            <td>0.5%</td>    
            </tr>
                <tr>      
            <td>Apple Stalks</td>      
            <td>1</td>      
            <td>0.5%</td>    
            </tr>
                <tr>      
            <td>Histamine</td>      
            <td>1</td>      
            <td>0.5%</td>    
            </tr>
                <tr>      
            <td>Sharp Stick</td>      
            <td>1</td>      
            <td>0.5%</td>    
            </tr>
                <tr>      
            <td>Cloth</td>      
            <td>1</td>      
            <td>0.5%</td>    
            </tr>
                <tr>      
            <td>Hard Lumps</td>      
            <td>1</td>      
            <td>0.5%</td>    
            </tr>
  </tbody></table>
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