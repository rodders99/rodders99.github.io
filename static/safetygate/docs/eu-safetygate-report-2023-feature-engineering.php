<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<meta charset="utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta name="color-scheme" content="dark">


<link rel="stylesheet" type="text/css" href="/css/custom.css">
<link rel="stylesheet" type="text/css" href="/css/custom-menu2.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="/css/project-style.css">

<title>eu-safetygate-report-2023</title>

</head>

<body>
<!-- NAVIGATION MENU-->

<!-- <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
    
    
    <div class="page-container">
        
        <div class="toolbar" style="width:100%; text-align:center;">
            <!-- <span class="menu dropbtn" style="align-items:center;" onclick="openNav()"><i style="align-items:center" class="material-icons" style="font-size:24px; color: white">menu</i>&nbsp;Menu</span> -->
            <?php include 'menu-2023.php'; ?></div>
                  <!-- </div> -->
<!-- CONTENT -->


<h1>The EU Safety Gate Data - Feature Engineering</h1>
  <p><img src="https://rodders.me/safetygate/img/icons/Safety_Gate_Logo.png" alt="Safety Gate Logo" style="width:50%"></p>

  <h2>Basics</h2>

  <p>Duplicate Rows - There are no duplicated Rows</p>
  <p>Strip - Strip leading / trailing spaces from df</p>

  <h2>Data Cleaning</h2>
  
  <p>Clean up mistyped accent characters, inconsistent punctuation, rename single use of country names, rename long country names to shorter versions to improve visualisation readability. </p>

  <div class="datatable-container">
    <table class="datatable" style="margin-right: auto; margin-left:0px">        <thead>
    <thead>
    <tr>
    <th style="text-align:left; width:35%"></th>
    <th style="text-align:left"></th>
    <TH style="text-align:center; width:45%"></TH>

    </tr>
    </thead>
    <tbody>
    
    <tr>
    <td style="text-align:left">The Netherlands</td>
    <td style="text-align:left">Netherlands</td>
    </tr>
    <tr>
    <td style="text-align:left">Republic of Korea</td>
    <td style="text-align:left">South Korea</td>
    </tr>
    <tr>
    <td style="text-align:left">United Arab Emirates</td>
    <td style="text-align:left">UAE</td>
    </tr>
    <tr>
    <td style="text-align:left">Russian Federation</td>
    <td style="text-align:left">Russia</td>
    </tr>
    <tr>
    <td style="text-align:left">United Kingdom in respect of Northern Ireland</td>
    <td style="text-align:left">UK</td>
    </tr>
    <tr>
    <td style="text-align:left">United Kingdom</td>
    <td style="text-align:left">UK</td>
    </tr>
    <tr>
    <td style="text-align:left">United States</td>
    <td style="text-align:left">USA</td>
    </tr>
        
    <td style="text-align:left">Türkiye</td>
    <td style="text-align:left">Turkey</td>

    </tr>
    <tr>
    <td style="text-align:left">Democratic People's Republic of Korea</td>
    <td style="text-align:left">North Korea</td>
    </tr>
    <tr>
    <td style="text-align:left">People's Republic of China</td>
    <td style="text-align:left">China</td>
    </tr>

    </tbody>
    </table>
    </div>

  <h2>Feature Engineer - Date Time</h2>
  Feature Engineer new columns from datetime index : Year, Week, 
  
  <h3>Feature Engineer - <code>Economic Area</code></h3>
  
<div class="datatable-container">
<table class="datatable" style="margin-right: auto; margin-left:0px">        <thead>
<tr>
<th style="text-align:left; width:15%"></th>
<th style="text-align:left"></th>
<TH style="text-align:center; width:45%"></TH>

</tr>
</thead>
<tbody>
<tr>
<td style="text-align:left; width:15%">Bulgaria</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Romania</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Czechia</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Denmark</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Hungary</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Poland</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Sweden</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Croatia</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Cyprus</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Ireland</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Austria</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Belgium</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Estonia</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Finland</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">France</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Germany</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Greece</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Italy</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Latvia</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Lithuania</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Luxembourg</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Malta</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">The Netherlands</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Portugal</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Slovakia</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Slovenia</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">Spain</td>
<td style="text-align:left">EU Countries</td>
</tr>
<tr>
<td style="text-align:left">China</td>
<td style="text-align:left">China</td>
</tr>
</tbody>
</table>
</div>

<h2>Fix Motor Vehicles - Brand name / Country of origin inconsistencies</h2>

<p><code>Motor Vehicles</code> is one of the largest categories for safety alerts being issued (after toys, and for 2023, cosmetics), it's worthwhile to improve the quality of relevant data where possible.</p>

<h4>Begin with </h4>
<ul>
    <li>638 Brands</li>
    <li>949 Brand / Country Combinations</li>
</ul>

<h4>After mapping Brands</h4>
<ul>
    <li>428 Brands</li>
    <li>718 Brand / Country Combinations</li>
</ul>


<h4>After mapping Countries</h4>
<ul>
    <li>428 Brands</li>
    <li>428 Brand / Country Combinations</li>
</ul>


<h2>Create consistent <code>risk_category</code> feature from <code>Risk type</code> column</h2>

<h3>Before</h3>

<p>There are 218  variations in the  `Risk type` column</p>

<p>Each entry is a comma separated list of risks. </p>

<p>The first entry in a list is chosen as the main category, i.e `Burns, Chemical, Damage to hearing` is mapped to `Burns`</p>

<p>A Future task is to split the comma separated variables into binary columns
</p>
<h3>After Feature Engineering</h3>

After  <code>Risk type</code> field is feature engineered to <code>risk_category</code>, the result is 14 risk categories

<div class="datatable-container">
    <table class="datatable" style="margin-left:0px">
    <thead>
    <tr>
    <th style="text-align:left; width:20%">risk_category</th>
    <th style="text-align:left">perc_of_total</th>
    <TH style="text-align:center; width:45%"></TH>

    </tr>
    </thead>
    <tbody>
    <tr>
    <td style="text-align:left">Injuries</td>
    <td style="text-align:left">27.28</td>
    </tr>
    <tr>
    <td style="text-align:left">Chemical</td>
    <td style="text-align:left">26.93</td>
    </tr>
    <tr>
    <td style="text-align:left">Breathing Obstruction</td>
    <td style="text-align:left">19.08</td>
    </tr>
    <tr>
    <td style="text-align:left">Electric Shock</td>
    <td style="text-align:left">11.74</td>
    </tr>
    <tr>
    <td style="text-align:left">Burns</td>
    <td style="text-align:left">5.02</td>
    </tr>
    <tr>
    <td style="text-align:left">Fire</td>
    <td style="text-align:left">4.37</td>
    </tr>
    <tr>
    <td style="text-align:left">Environment</td>
    <td style="text-align:left">1.81</td>
    </tr>
    <tr>
    <td style="text-align:left">Eyesight Damage</td>
    <td style="text-align:left">1.23</td>
    </tr>
    <tr>
    <td style="text-align:left">Microbiological</td>
    <td style="text-align:left">0.99</td>
    </tr>
    <tr>
    <td style="text-align:left">Hearing Damage</td>
    <td style="text-align:left">0.88</td>
    </tr>
    <tr>
    <td style="text-align:left">Entrapment</td>
    <td style="text-align:left">0.32</td>
    </tr>
    <tr>
    <td style="text-align:left">Drowning</td>
    <td style="text-align:left">0.31</td>
    </tr>
    <tr>
    <td style="text-align:left">Health Other</td>
    <td style="text-align:left">0.03</td>
    </tr>
    </tbody>
    </table>
</div>

<h2>Feature Engineer <code>Category</code> to <code>product_category</code> </h2>

There are two product category fields:

<p><code>OECD portal category</code> : there are 33 categories, however there are a lot of missing values</p>

<p><code>Category</code> is complete with no missing values and has 80 categories.</p>

<p>The top 12 entries in <code>category</code> represent > 90% of the total number of alerts issued. 
<br>
<code>product_category</code> will detail the top12 + others listed as other.</p>

<h3>Before Feature Engineering</h3>
<ul><li> 81 unique values</li></ul>

<h3>After Feature Engineering</h3>

<ul><li>13 <code>product_category</code> values (12 x named + other)</li></ul>

<h3>After mapping:</h3>
<div class="datatable-container">
    <table class="datatable" style="margin-left:0px">
    <thead>
    <tr>
    <th style="text-align:left;; width:20%"></th>
    <th style="text-align:left"></th>
    <TH style="text-align:center; width:45%"></TH>

    </tr>
    </thead>
    <tbody>
    <tr>
    <td style="text-align:left">Toys</td>
    <td style="text-align:left">8793</td>
    </tr>
    <tr>
    <td style="text-align:left">Clothing &amp; Fashion</td>
    <td style="text-align:left">5337</td>
    </tr>
    <tr>
    <td style="text-align:left">Automotive</td>
    <td style="text-align:left">5317</td>
    </tr>
    <tr>
    <td style="text-align:left">Electrical Appliances</td>
    <td style="text-align:left">3443</td>
    </tr>
    <tr>
    <td style="text-align:left">other</td>
    <td style="text-align:left">3092</td>
    </tr>
    <tr>
    <td style="text-align:left">Cosmetics</td>
    <td style="text-align:left">2525</td>
    </tr>
    <tr>
    <td style="text-align:left">Lighting</td>
    <td style="text-align:left">1831</td>
    </tr>
    <tr>
    <td style="text-align:left">Childcare Equipment</td>
    <td style="text-align:left">1295</td>
    </tr>
    <tr>
    <td style="text-align:left">Chemicals</td>
    <td style="text-align:left">979</td>
    </tr>
    <tr>
    <td style="text-align:left">Jewellery</td>
    <td style="text-align:left">907</td>
    </tr>
    <tr>
    <td style="text-align:left">Protective equipment</td>
    <td style="text-align:left">826</td>
    </tr>
    <tr>
    <td style="text-align:left">Hobby \ Sports</td>
    <td style="text-align:left">628</td>
    </tr>
    <tr>
    <td style="text-align:left">Machinery</td>
    <td style="text-align:left">535</td>
    </tr>
    </tbody>
    </table>
</div>


<h2>Feature Engineer <code>country_top15</code></h2>

There are 111 countries of origin, the top 15 of these represent > 90% of the total alerts. Countries outside of the top 15 were aggregated under <b>'other'</b>.

<div class="datatable-container">
    <table class="datatable" style="margin-left:0px">
    <thead>
    <tr>
            <th style="text-align:left; width:8%">Idx</th>
            <th style="text-align:left; width: 20%">country_top15</th>
            <th style="text-align:center; width:15%">count</th>
            <th style="text-align:center; width:15%">perc_of_total</th>
            <TH style="text-align:center; width:45%"></TH>
    </tr>
    </thead>
    <tbody>
    
    <tr>
    <td style="text-align:left">0</td>
    <td style="text-align:left">China</td>
    <td style="text-align:center">13866</td>
    <td style="text-align:center">39.05</td>
    

    </tr>
    <tr>
    <td style="text-align:left">1</td>
    <td style="text-align:left">Unknown</td>
    <td style="text-align:center">9173</td>
    <td style="text-align:center">25.83</td>
    </tr>
    <tr>
    <td style="text-align:left">2</td>
    <td style="text-align:left">other</td>
    <td style="text-align:center">2994</td>
    <td style="text-align:center">8.43</td>
    </tr>
    <tr>
    <td style="text-align:left">3</td>
    <td style="text-align:left">Germany</td>
    <td style="text-align:center">2333</td>
    <td style="text-align:center">6.57</td>
    </tr>
    <tr>
    <td style="text-align:left">4</td>
    <td style="text-align:left">Italy</td>
    <td style="text-align:center">1263</td>
    <td style="text-align:center">3.56</td>
    </tr>
    <tr>
    <td style="text-align:left">5</td>
    <td style="text-align:left">France</td>
    <td style="text-align:center">1014</td>
    <td style="text-align:center">2.86</td>
    </tr>
    <tr>
    <td style="text-align:left">6</td>
    <td style="text-align:left">Turkey</td>
    <td style="text-align:center">937</td>
    <td style="text-align:center">2.64</td>
    </tr>
    <tr>
    <td style="text-align:left">7</td>
    <td style="text-align:left">United States of America</td>
    <td style="text-align:center">859</td>
    <td style="text-align:center">2.42</td>
    </tr>
    <tr>
    <td style="text-align:left">8</td>
    <td style="text-align:left">Japan</td>
    <td style="text-align:center">851</td>
    <td style="text-align:center">2.40</td>
    </tr>
    <tr>
    <td style="text-align:left">9</td>
    <td style="text-align:left">United Kingdom</td>
    <td style="text-align:center">648</td>
    <td style="text-align:center">1.82</td>
    </tr>
    <tr>
    <td style="text-align:left">10</td>
    <td style="text-align:left">Poland</td>
    <td style="text-align:center">492</td>
    <td style="text-align:center">1.39</td>
    </tr>
    <tr>
    <td style="text-align:left">11</td>
    <td style="text-align:left">India</td>
    <td style="text-align:center">329</td>
    <td style="text-align:center">0.93</td>
    </tr>
    <tr>
    <td style="text-align:left">12</td>
    <td style="text-align:left">Spain</td>
    <td style="text-align:center">315</td>
    <td style="text-align:center">0.89</td>
    </tr>
    <tr>
    <td style="text-align:left">13</td>
    <td style="text-align:left">Taiwan</td>
    <td style="text-align:center">222</td>
    <td style="text-align:center">0.63</td>
    </tr>
    <tr>
    <td style="text-align:left">14</td>
    <td style="text-align:left">Sweden</td>
    <td style="text-align:center">212</td>
    <td style="text-align:center">0.60</td>
    </tr>
    </tbody>
    </table>
    </div>

<h2>Binary Encode <code>Compulsory measures</code> / <code>Voluntary measures</code> columns</h2>

<p>The <code>Compulsory measures</code> / <code>Voluntary measures</code> columns have detailed not delimited data, 
    sometimes with multiple entries, indicating an escalation in measures. </p>
    
    <p>To simplify the analysis and encoding, the encoding was matched in order of severity. </p>
    
    <p>(I'd make a recommendation to the EU team to re-analyse the requirements of the database and improve this area of their record keeping.)</p>
    
    <p>e.g.</p>
    
       <p><code> Retailer: Withdrawal of the product from the market:27/05/2020  Retailer:Recall of the product from end users:27/05/2020 Distributor:Ban on the marketing of the product and any accompanying measures:27/05/2020</code></p>
    
    <p>This example would be split into {<B>compulsory/voluntary</B>}{<b>responsible_party</b>} {<b>action required</b>}</p>
    <p>e.g.</p>
    <p>{compulsory/voluntary responsible party} options : unknown, retailer, distributor, importer, manufacturer, other</p>
    <p>{compulsory/voluntary action required} options :  Ban, recall, withdrawl,  destruction, removal, criminal, borderstop, warnings</p>

<br>
    New columns with binary mappings added:
    </p>

    <h2>{compulsory_xxxx} or {voluntary_xxxxx} mapping</h2>
    <br>
    <div class="datatable-container">
        <table class="datatable" style="margin-left:0px">
        <thead>
        <tr>
        <th style="text-align:left"></th>
        <th></th>
        <TH style="text-align:center; width:45%"></TH>

        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align:left"><code>compulsory_withdrawal</td></code>
                </tr>
                <tr>
                <td style="text-align:left"><code>compulsory_recall</td></code>
                </tr>
                <tr>
                <td style="text-align:left"><code>compulsory_ban</td></code>
                </tr>
                <tr>
                <td style="text-align:left"><code>compulsory_destruction</td></code>
                </tr>
                <tr>
                <td style="text-align:left"><code>compulsory_removal</td></code>
                </tr>
                <tr>
                <td style="text-align:left"><code>compulsory_criminal</td></code>
                </tr>
                <tr>
                <td style="text-align:left"><code>compulsory_borderstop</td></code>
                </tr>
                <tr>
                <td style="text-align:left"><code>compulsory_warnings</td></code>
                </tr>
                <tr>
                <td style="text-align:left"><code>compulsory_responsible_unknown</td></code>
                </tr>
                <tr>
                <td style="text-align:left"><code>compulsory_responsible_retail</td></code>
                </tr>
                <tr>
                <td style="text-align:left"><code>compulsory_responsible_disti</td></code>
                </tr>
                <tr>
                <td style="text-align:left"><code>compulsory_responsible_importer</td></code>
                </tr>
                <tr>
                <td style="text-align:left"><code>compulsory_responsible_manufacturer</td></code>
                </tr>
                <tr>
                <td style="text-align:left"><code>compulsory_responsible_other</td></code>
                </tr>
        </tbody>
        </table>
      </div>  

<h3>Compulsory measures mapping order of priority</h3>
<h3 ><code>Compulsory measures</code> -&gt; Binary columns encoding</a></h3>
<p>Set binary values in column if true else false</p>
<p>Since multiple values can exist in each field, the order is relevant, we want to indicate severity and the simple contains search will match ay instance, therefore, 
most import is the last search since it will overwrite previous matches</p>

<div class="datatable-container">
    <table class="datatable" style="margin-left:0px">
<thead>
<tr>
<th style="text-align:left">Severity<br>(1 low)</th>
<th style="text-align:left; width:25%"><br>Action</th>
<th style="text-align:center"><br>% of Alerts</th>
<th style="text-align:center"><br>Qty</th>
<TH style="text-align:center; width:45%"></TH>

</tr>
</thead>
<tbody>
<tr>
<td style="text-align:left">8</td>
<td style="text-align:left">Criminal</td>
<td style="text-align:center">0.01%</td>
<td style="text-align:center">2</td>
</tr>
<tr>
<td style="text-align:left">7</td>
<td style="text-align:left">Removal from sale</td>
<td style="text-align:center">0.31%</td>
<td style="text-align:center">111</td>
</tr>
<tr>
<td style="text-align:left">6</td>
<td style="text-align:left">destruction</td>
<td style="text-align:center">1.38%</td>
<td style="text-align:center">490</td>
</tr>
<tr>
<td style="text-align:left">5</td>
<td style="text-align:left">ban</td>
<td style="text-align:center">11.71%</td>
<td style="text-align:center">4,157</td>
</tr>
<tr>
<td style="text-align:left">4</td>
<td style="text-align:left">recall</td>
<td style="text-align:center">11.17%</td>
<td style="text-align:center">3966</td>
</tr>
<tr>
<td style="text-align:left">3</td>
<td style="text-align:left">withdrawal</td>
<td style="text-align:center">29.08%</td>
<td style="text-align:center">10,324</td>
</tr>
<tr>
<td style="text-align:left">2</td>
<td style="text-align:left">borderstop</td>
<td style="text-align:center">4.32%</td>
<td style="text-align:center">1,533</td>
</tr>
<tr>
<td style="text-align:left">1</td>
<td style="text-align:left">warnings</td>
<td style="text-align:center">1.41%</td>
<td style="text-align:center">502</td>
</tr>
</tbody>
</table>
</div>
<br>
<h3>Result of mappings action required</h3>

<div class="datatable-container">
    <table class="datatable" style="margin-left:0px">
        <thead>
            <tr>
            <th style="text-align:left">idx</th>
            <th style="text-align:left; width:25%">Column</th>
            <th style="text-align:center">Total</th>
            <th style="text-align:center">Percentage of Total</th>
            <TH style="text-align:center; width:45%"></TH>

            </tr>
            </thead>
            <tbody>
            <tr>
            <td style="text-align:left">1</td>
            <td style="text-align:left">voluntary_recall</td>
            <td style="text-align:center">8475</td>
            <td style="text-align:center">51.56</td>
            </tr>
            <tr>
            <td style="text-align:left">0</td>
            <td style="text-align:left">voluntary_withdrawal</td>
            <td style="text-align:center">5860</td>
            <td style="text-align:center">35.65</td>
            </tr>
            <tr>
            <td style="text-align:left">4</td>
            <td style="text-align:left">voluntary_removal</td>
            <td style="text-align:center">791</td>
            <td style="text-align:center">4.81</td>
            </tr>
            <tr>
            <td style="text-align:left">3</td>
            <td style="text-align:left">voluntary_destruction</td>
            <td style="text-align:center">656</td>
            <td style="text-align:center">3.99</td>
            </tr>
            <tr>
            <td style="text-align:left">7</td>
            <td style="text-align:left">voluntary_warnings</td>
            <td style="text-align:center">367</td>
            <td style="text-align:center">2.23</td>
            </tr>
            <tr>
            <td style="text-align:left">2</td>
            <td style="text-align:left">voluntary_ban</td>
            <td style="text-align:center">259</td>
            <td style="text-align:center">1.58</td>
            </tr>
            <tr>
            <td style="text-align:left">6</td>
            <td style="text-align:left">voluntary_borderstop</td>
            <td style="text-align:center">29</td>
            <td style="text-align:center">0.18</td>
            </tr>
            <tr>
            <td style="text-align:left">5</td>
            <td style="text-align:left">voluntary_criminal</td>
            <td style="text-align:center">0</td>
            <td style="text-align:center">0.00</td>
            </tr>
            </tbody>
            </table>
    
</div>

<br>
<h3>Result of mappings responsible party</h3>


<div class="datatable-container">
    <table class="datatable" style="margin-left:0px">    
        <thead>
            <tr>
            <th style="text-align:left">idx</th>
            <th style="text-align:left; width:25%">Column</th>
            <th style="text-align:center">Total</th>
            <th style="text-align:center">Percentage of Total</th>
            <TH style="text-align:center; width:45%"></TH>

            </tr>
            </thead>
            <tbody>
            <tr>
            <td style="text-align:left">0</td>
            <td style="text-align:left">voluntary_responsible_unknown</td>
            <td style="text-align:center">20178</td>
            <td style="text-align:center">52.83</td>
            </tr>
            <tr>
            <td style="text-align:left">5</td>
            <td style="text-align:left">voluntary_responsible_other</td>
            <td style="text-align:center">6825</td>
            <td style="text-align:center">17.87</td>
            </tr>
            <tr>
            <td style="text-align:left">4</td>
            <td style="text-align:left">voluntary_responsible_manufacturer</td>
            <td style="text-align:center">4317</td>
            <td style="text-align:center">11.30</td>
            </tr>
            <tr>
            <td style="text-align:left">3</td>
            <td style="text-align:left">voluntary_responsible_importer</td>
            <td style="text-align:center">3448</td>
            <td style="text-align:center">9.03</td>
            </tr>
            <tr>
            <td style="text-align:left">2</td>
            <td style="text-align:left">voluntary_responsible_disti</td>
            <td style="text-align:center">2469</td>
            <td style="text-align:center">6.46</td>
            </tr>
            <tr>
            <td style="text-align:left">1</td>
            <td style="text-align:left">voluntary_responsible_retail</td>
            <td style="text-align:center">954</td>
            <td style="text-align:center">2.50</td>
            </tr>
            </tbody>
            </table>
            
</div>    

<h2 id="creative-commons-license">Creative Commons License</h2>
<p>The reuse policy of European Commission documents is implemented by the Commission Decision 2011/833/EU
of 12 December 2011 on the reuse of Commission documents (OJ L 330, 14.12.2011, p. 39). Except otherwise noted,
the reuse of this document is authorised under a <a href="https://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International (CC-BY 4.0)
licence</a>.</p>
<p>This means that reuse is allowed provided appropriate credit is given and any changes are indicated.</p>
<p>Since this entire analysis is based on data from the EU, and I have used visualisations from the official annual summary as inspiration for the programmatically created version of these visualisations,
the creative commons license applies this work hosted on <a href="https://rodders.me">rodders.me</a>, this means that reuse of this analysis and its visualisations is allowed provided appropriate credit is given and any changes are indicated.</p>

</div>
<script src="../../scripts/projects.js"> </script>



</body>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<!-- <script src="../../scripts/comparison.js"> </script> -->

<script>
    // Hovertips
    tippy('#CompareCountries', {content: 'Select any two countries and click compare to view the visualisations side by side.', theme: 'tomato'});
    tippy('#JumptoSection', {content: 'Select a section to jump to.', theme: 'tomato'});
    tippy('#CountryReport', {content: 'Select a Country to view a detailed report or compare countries.', theme: 'tomato', placement: 'left',});

    tippy('#country-total-alerts-vs-row', {content: 'Percentage of safety alerts issued to Country of Product Origin Vs Rest of the world.', theme: 'tomato'});
    tippy('#country-2022vs2023', {content: '2022 Vs 2023 comparison of percentage of safety alerts issued to Country of Product Origin Vs Rest of the world.', theme: 'tomato'});
    tippy('#country-annual-cumulative', {content: 'Cumulative and annual safety alerts issued to Country of product origin.', theme: 'tomato'});
    tippy('#country-annual-yoy-change', {content: 'Cumulative and annual YoY change safety alerts issued to Country of product origin.', theme: 'tomato'});
    
    tippy('#product-category-percentage', {content: 'Product Category percentage of total safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    tippy('#product-category-2022vs2023', {content: 'Product Category 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    tippy('#product-category-annual', {content: 'Product Category annual safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    tippy('#product-category-annual-percentage', {content: 'Product Category as percentage of annual safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    
    tippy('#risk-category-percentage', {content: 'Risk Category type percentage of total safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    tippy('#risk-category-2022vs2023', {content: 'Risk Category type 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    tippy('#risk-category-annual', {content: 'Risk Category type annual safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    tippy('#risk-category-annual-percentage', {content: 'Risk Category type annual safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    
    tippy('#counterfeit-category-percentage', {content: 'Counterfeit status as percentage of total safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    tippy('#counterfeit-category-2022vs2023', {content: 'Counterfeit status 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    tippy('#counterfeit-category-annual', {content: 'Counterfeit status annual safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    tippy('#counterfeit-category-annual-percentage', {content: 'Counterfeit status annual safety alerts issued to Country of Product Origin.', theme: 'tomato'});

    tippy('#action-required-responsible-party-2022vs2023', {content: 'Compulsory and Voluntary action required / responsible party 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    tippy('#action-required-responsible-party-annual', {content: 'Compulsory and Voluntary action required / responsible party annual safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    tippy('#action-required-responsible-party-total', {content: 'Compulsory and Voluntary action required / responsible party TOTAL safety alerts issued to Country of Product Origin.', theme: 'tomato'});

    tippy('#submitting-country-percentage', {content: 'Submitting Country as percentage of total safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    tippy('#submitting-country-2022vs2023', {content: 'Submitting Country 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    tippy('#submitting-country-annual', {content: 'Submitting Country annual safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    tippy('#submitting-country-annual-percentage', {content: 'Submitting Country annual percentage of safety alerts issued to Country of Product Origin.', theme: 'tomato'});


    /* Product 0 */
    // Totals //
    tippy('#product-cat-0-percentage', 
        {content: '<b><u>#1 Product Category</u></b><br>Alerts as percentage of total safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});
    tippy('#product-cat-0-annual-cumulative', 
        {content: '<b><u>#1 Product Category</u></b><br>Cumulative and annual safety alerts issued to Country of product origin.',
        theme: 'tomato', allowHTML: true,});
    tippy('#product-cat-0-annual-yoy-change', 
        {content: '<b><u>#1 Product Category</u></b><br>Cumulative and annual YoY change safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});


    // Risk Category //
    tippy('#product-cat-0-risk-category-percentage', 
        {content: '<b><u>#1 Product Category</u></b><br>Risk Category as percentage of total safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});
    
    tippy('#product-cat-0-risk-category-2022vs2023', 
        {content: '<b><u>#1 Product Category</u></b><br>Risk Category 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-0-risk-category-annual', 
        {content: '<b><u>#1 Product Category</u></b><br>Risk Category annual safety alerts issued to Country of product origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-0-risk-category-annual-percentage', 
        {content: '<b><u>#1 Product Category</u></b><br>Risk Category annual percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});


    // Counterfeit Type //
    tippy('#product-cat-0-counterfeit-type-percentage', 
        {content: '<b><u>#1 Product Category</u></b><br>Counterfeit Type as percentage of total safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});
    
    tippy('#product-cat-0-counterfeit-type-2022vs2023', 
        {content: '<b><u>#1 Product Category</u></b><br>Counterfeit Type 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-0-counterfeit-type-annual', 
        {content: '<b><u>#1 Product Category</u></b><br>Counterfeit Type annual safety alerts issued to Country of product origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-0-counterfeit-type-annual-percentage', 
        {content: '<b><u>#1 Product Category</u></b><br>Counterfeit Type annual percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});



    // Voluntary / Compulsory Action Required Responsible Party //
    
    tippy('#product-cat-0-action-required-responsible-party-2022vs2023', 
        {content: '<b><u>#1 Product Category</u></b><br>Voluntary / Compulsory Action Required / Responsible Party 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-0-action-required-responsible-party-annual', 
        {content: '<b><u>#1 Product Category</u></b><br>Voluntary / Compulsory Action Required / Responsible Party annual safety alerts issued to Country of product origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-0-action-required-responsible-party-total', 
        {content: '<b><u>#1 Product Category</u></b><br>Voluntary / Compulsory Action Required / Responsible Party Total safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});


    // Submitting Country //
    tippy('#product-cat-0-submitting-country-percentage', 
        {content: '<b><u>#1 Product Category</u></b><br>Submitting Country as percentage of total safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});
    
    tippy('#product-cat-0-submitting-country-2022vs2023', 
        {content: '<b><u>#1 Product Category</u></b><br>Submitting Country 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-0-submitting-country-annual', 
        {content: '<b><u>#1 Product Category</u></b><br>Submitting Country annual safety alerts issued to Country of product origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-0-submitting-country-annual-percentage', 
        {content: '<b><u>#1 Product Category</u></b><br>Submitting Country annual percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});


    tippy('#product-cat-0-top-brands', 
        {content: '<b><u>#1 Product Category</u></b><br>Country of Product Origin Top Brands for safety alerts.', 
        theme: 'tomato', allowHTML: true,});


//* Product 1 */
    // Totals //
    tippy('#product-cat-1-percentage', 
        {content: '<b><u>#2 Product Category</u></b><br>Alerts as percentage of total safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});
    tippy('#product-cat-1-annual-cumulative', 
        {content: '<b><u>#2 Product Category</u></b><br>Cumulative and annual safety alerts issued to Country of product origin.',
        theme: 'tomato', allowHTML: true,});
    tippy('#product-cat-1-annual-yoy-change', 
        {content: '<b><u>#2 Product Category</u></b><br>Cumulative and annual YoY change safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});


    // Risk Category //
    tippy('#product-cat-1-risk-category-percentage', 
        {content: '<b><u>#2 Product Category</u></b><br>Risk Category as percentage of total safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});
    
    tippy('#product-cat-1-risk-category-2022vs2023', 
        {content: '<b><u>#2 Product Category</u></b><br>Risk Category 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-1-risk-category-annual', 
        {content: '<b><u>#2 Product Category</u></b><br>Risk Category annual safety alerts issued to Country of product origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-1-risk-category-annual-percentage', 
        {content: '<b><u>#2 Product Category</u></b><br>Risk Category annual percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});


    // Counterfeit Type //
    tippy('#product-cat-1-counterfeit-type-percentage', 
        {content: '<b><u>#2 Product Category</u></b><br>Counterfeit Type as percentage of total safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});
    
    tippy('#product-cat-1-counterfeit-type-2022vs2023', 
        {content: '<b><u>#2 Product Category</u></b><br>Counterfeit Type 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-1-counterfeit-type-annual', 
        {content: '<b><u>#2 Product Category</u></b><br>Counterfeit Type annual safety alerts issued to Country of product origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-1-counterfeit-type-annual-percentage', 
        {content: '<b><u>#2 Product Category</u></b><br>Counterfeit Type annual percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});



    // Voluntary / Compulsory Action Required Responsible Party //
    
    tippy('#product-cat-1-action-required-responsible-party-2022vs2023', 
        {content: '<b><u>#2 Product Category</u></b><br>Voluntary / Compulsory Action Required / Responsible Party 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-1-action-required-responsible-party-annual', 
        {content: '<b><u>#2 Product Category</u></b><br>Voluntary / Compulsory Action Required / Responsible Party annual safety alerts issued to Country of product origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-1-action-required-responsible-party-total', 
        {content: '<b><u>#2 Product Category</u></b><br>Voluntary / Compulsory Action Required / Responsible Party Total safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});


    // Submitting Country //
    tippy('#product-cat-1-submitting-country-percentage', 
        {content: '<b><u>#2 Product Category</u></b><br>Submitting Country as percentage of total safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});
    
    tippy('#product-cat-1-submitting-country-2022vs2023', 
        {content: '<b><u>#2 Product Category</u></b><br>Submitting Country 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-1-submitting-country-annual', 
        {content: '<b><u>#2 Product Category</u></b><br>Submitting Country annual safety alerts issued to Country of product origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-1-submitting-country-annual-percentage', 
        {content: '<b><u>#2 Product Category</u></b><br>Submitting Country annual percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});


    tippy('#product-cat-1-top-brands', 
        {content: '<b><u>#2 Product Category</u></b><br>Country of Product Origin Top Brands for safety alerts.', 
        theme: 'tomato', allowHTML: true,});



    /* Product 3 */
    // Totals //
    tippy('#product-cat-2-percentage', 
        {content: '<b><u>#3 Product Category</u></b><br>Alerts as percentage of total safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});
    tippy('#product-cat-2-annual-cumulative', 
        {content: '<b><u>#3 Product Category</u></b><br>Cumulative and annual safety alerts issued to Country of product origin.',
        theme: 'tomato', allowHTML: true,});
    tippy('#product-cat-2-annual-yoy-change', 
        {content: '<b><u>#3 Product Category</u></b><br>Cumulative and annual YoY change safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});


    // Risk Category //
    tippy('#product-cat-2-risk-category-percentage', 
        {content: '<b><u>#3 Product Category</u></b><br>Risk Category as percentage of total safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});
    
    tippy('#product-cat-2-risk-category-2022vs2023', 
        {content: '<b><u>#3 Product Category</u></b><br>Risk Category 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-2-risk-category-annual', 
        {content: '<b><u>#3 Product Category</u></b><br>Risk Category annual safety alerts issued to Country of product origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-2-risk-category-annual-percentage', 
        {content: '<b><u>#3 Product Category</u></b><br>Risk Category annual percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});


    // Counterfeit Type //
    tippy('#product-cat-2-counterfeit-type-percentage', 
        {content: '<b><u>#3 Product Category</u></b><br>Counterfeit Type as percentage of total safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});
    
    tippy('#product-cat-2-counterfeit-type-2022vs2023', 
        {content: '<b><u>#3 Product Category</u></b><br>Counterfeit Type 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-2-counterfeit-type-annual', 
        {content: '<b><u>#3 Product Category</u></b><br>Counterfeit Type annual safety alerts issued to Country of product origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-2-counterfeit-type-annual-percentage', 
        {content: '<b><u>#3 Product Category</u></b><br>Counterfeit Type annual percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});



    // Voluntary / Compulsory Action Required Responsible Party //
    
    tippy('#product-cat-2-action-required-responsible-party-2022vs2023', 
        {content: '<b><u>#3 Product Category</u></b><br>Voluntary / Compulsory Action Required / Responsible Party 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-2-action-required-responsible-party-annual', 
        {content: '<b><u>#3 Product Category</u></b><br>Voluntary / Compulsory Action Required / Responsible Party annual safety alerts issued to Country of product origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-2-action-required-responsible-party-total', 
        {content: '<b><u>#3 Product Category</u></b><br>Voluntary / Compulsory Action Required / Responsible Party Total safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});


    // Submitting Country //
    tippy('#product-cat-2-submitting-country-percentage', 
        {content: '<b><u>#3 Product Category</u></b><br>Submitting Country as percentage of total safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});
    
    tippy('#product-cat-2-submitting-country-2022vs2023', 
        {content: '<b><u>#3 Product Category</u></b><br>Submitting Country 2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-2-submitting-country-annual', 
        {content: '<b><u>#3 Product Category</u></b><br>Submitting Country annual safety alerts issued to Country of product origin.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#product-cat-2-submitting-country-annual-percentage', 
        {content: '<b><u>#3 Product Category</u></b><br>Submitting Country annual percentage of safety alerts issued to Country of Product Origin.', 
        theme: 'tomato', allowHTML: true,});


    tippy('#product-cat-2-top-brands', 
        {content: '<b><u>#3 Product Category</u></b><br>Country of Product Origin Top Brands for safety alerts.', 
        theme: 'tomato', allowHTML: true,});

  </script>



  
</html>






