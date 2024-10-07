<?php include 'html-inc/header.php'; ?>

<style>
.no-border * {
    border: none !important;
}
</style>
<title>EU Safety Report - Meta Data Overview</title>

<body class="colorscheme-light">
<div class="float-container">
    <a id="dark-mode-toggle" class="colorscheme-toggle">
        <i class="fa-solid fa-adjust fa-fw" aria-hidden="true"></i>
    </a></div>


<!-- NAVIGATION MENU-->


  
  
  <div class="page-container">
    
    <div class="toolbar" style="width:100%; text-align:center;">
      <!-- <span class="menu dropbtn" style="align-items:center;" onclick="openNav()"><i style="align-items:center" class="material-icons" style="font-size:24px; color: white">menu</i>&nbsp;Menu</span> -->
      <?php include 'menu-2023.php'; ?></div>
                  <!-- </div> -->
                  <h1>EU Safety Gate Data - Meta Data</h1>
                  <img src="https://rodders.me/safetygate/img-2023/icons/Safety_Gate_Logo.png" alt="Safety Gate Logo" style="width:50%">
                  <h2>Data Source</h2>
                  
                  <p>Data was sourced from <a href="https://ec.europa.eu/safety-gate-alerts/screen/webReport">https://ec.europa.eu/safety-gate-alerts/screen/webReport</a> as weekly files in 
                    Excel Format and consolidated into a single list.<br>
                    The File Date was obtained from the first row of the Excel Sheet. </p>
                    
                    <h2>Feature Engineering</h2>
                    <p>The imported data structure was feature engineered to add additional visualisation and analysis capabilities.</p>

<h2>License </h2>
<p>The data used is free for use under Creative Commons Attribution 4.0 International (CC-BY 4.0) licence.</p>

<h2>Key Features Analysed</h2>
  
  <h2 id="the-eu-safety-gate-meta-data">The EU Safety Gate Meta Data</h2>
  <h3 id="data-meta-data">Data Meta Data</h3>
  <div class="no-border">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <thead>
  <tr>
  <th style="text-align:left; width:25px">#</th>
  <th style="text-align:left">Column Name</th>
  <th style="text-align:center">Count</th>
  <th style="text-align:center">Data Type</th>
  <th style="text-align:left">Field Values</th>
  <th style="text-align:left">Notes</th>
  </tr>
  </thead>
  <tbody>
    <tr>
        <td style="text-align:left">Idx</td>
        <td style="text-align:left">Date Time Index</td>
        <td style="text-align:center">35,508</td>
        <td style="text-align:center">DateTime</td>
        <td style="text-align:left">DatetimeIndex: 35,508 entries, 2007-08-05 to 2007-05-06</td>
        <td style="text-align:left"></td>
        </tr>
  <tr>
  <td style="text-align:left">0</td>
  <td style="text-align:left">Type of alert</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left">'Serious risk'<br>'Other types of alerts',<br> 'Other risk levels'</td>
  <td style="text-align:left">'Serious risk' (94.8% of entries)' <br>'Other types of alerts' (1.72% of entries),<br> 'Other risk levels' (3.48% of entries)</td>
  </tr>
  <tr>
  <td style="text-align:left">1</td>
  <td style="text-align:left">Type</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left">'Consumer', 'Professional'</td>
  <td style="text-align:left">Consumer (98.49% of entries)<br>Professional (1.51% of entries)</td>
  </tr>
  <tr>
  <td style="text-align:left">2</td>
  <td style="text-align:left">Alert number</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left">Numeric Reference</td>
  <td style="text-align:left">No analysis carried out</td>
  </tr>
  <tr>
  <td style="text-align:left">3</td>
  <td style="text-align:left">Alert submitted by</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left">32 x Countries referenced</td>
  <td style="text-align:left">Cleansing operations only.</td>
  </tr>
  <tr>
  <td style="text-align:left">4</td>
  <td style="text-align:left">Country of origin</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left">108 x Countries referenced</td>
  <td style="text-align:left">Feature Engineered to new column <code>country_top15</code> detailing the top 15 countries, Non top-30 countries categorised as other <br> Feature Engineered to new column <code>economic_area</code> : EU Countries, Outside EU, Italy (noted for 2023 specifically)</td>
  </tr>
  <tr>
  <td style="text-align:left">5</td>
  <td style="text-align:left">Counterfeit</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left">No' 'Unknown' 'Yes'</td>
  <td style="text-align:left"></td>
  </tr>
  <tr>
  <td style="text-align:left">6</td>
  <td style="text-align:left">Risk type</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left">218 unique values</td>
  <td style="text-align:left">Feature engineered to <code>risk_category</code> to reduce the number of values to a manageable level for plotting. <br>The FIRST entry in the value is used as the risk_category. e.g.<br>'Injuries, Multiple Injuries Possible: Crushing, Fractures, Concussion, Internal Injuries.' would feature engineer to 'Injuries'</td>
  </tr>
  <tr>
  <td style="text-align:left">7</td>
  <td style="text-align:left">Risk legal provision</td>
  <td style="text-align:center">27363</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left">16,174 unique values</td>
  <td style="text-align:left">No Analysis carried out</td>
  </tr>
  <tr>
  <td style="text-align:left">8</td>
  <td style="text-align:left">Product</td>
  <td style="text-align:center">34164</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left">8,926 unique values</td>
  <td style="text-align:left"><code>Category</code> was used instead with additional feature engineering to product_category</td>
  </tr>
  <tr>
  <td style="text-align:left">9</td>
  <td style="text-align:left">Name</td>
  <td style="text-align:center">21,872</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">No Analysis carried out</td>
  </tr>
  <tr>
  <td style="text-align:left">10</td>
  <td style="text-align:left">Description</td>
  <td style="text-align:center">35,069</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">No Analysis carried out</td>
  </tr>
  <tr>
  <td style="text-align:left">11</td>
  <td style="text-align:left">Brand</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left">14,713 unique values</td>
  <td style="text-align:left">Feature engineering of Brand was carried out for the motoring product category, other product categories were not changed. The Cleansed Motor Category Brand was then used to re-feature engineer the country of origin to reflect the HQ of the Motoring Brand.</td>
  </tr>
  <tr>
  <td style="text-align:left">12</td>
  <td style="text-align:left">Category</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left">80 unique values</td>
  <td style="text-align:left"><code>Category</code> was used to feature engineer <code>product_category</code></td>
  </tr>
  <tr>
  <td style="text-align:left">13</td>
  <td style="text-align:left">Type / number of model</td>
  <td style="text-align:center">30,341</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left">28,078 unique values</td>
  <td style="text-align:left">No Analysis carried out</td>
  </tr>
  <tr>
  <td style="text-align:left">14</td>
  <td style="text-align:left">OECD Portal category</td>
  <td style="text-align:center">23,450</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">No Analysis carried out, too many missing values</td>
  </tr>
  <tr>
  <td style="text-align:left">15</td>
  <td style="text-align:left">Risk</td>
  <td style="text-align:center">22,220</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">No Analysis carried out, free text, no categorical data.</td>
  </tr>
  <tr>
  <td style="text-align:left">16</td>
  <td style="text-align:left">Compulsory measures</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Multiple entries per field. The FIRST Entry was used to feature engineer to a binary feature <code>voluntary_xxxxx</code>></td>
  </tr>
  <tr>
  <td style="text-align:left">17</td>
  <td style="text-align:left">Voluntary measures</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Multiple entries per field. The FIRST Entry was used to feature engineer to a binary feature  <code>compulsory_xxxxx</code></td>
  </tr>
  <tr>
  <td style="text-align:left">18</td>
  <td style="text-align:left">Products were found and measures were taken also in</td>
  <td style="text-align:center">9,459</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">No Analysis carried out, too many missing values</td>
  </tr>
  <tr>
  <td style="text-align:left">19</td>
  <td style="text-align:left">Company recall page</td>
  <td style="text-align:center">1,165</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">No Analysis carried out, too many missing values</td>
  </tr>
  <tr>
  <td style="text-align:left">20</td>
  <td style="text-align:left">URL of Case</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">No Analysis carried out, not categorical</td>
  </tr>
  <tr>
  <td style="text-align:left">21</td>
  <td style="text-align:left">Barcode</td>
  <td style="text-align:center">5,917</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">No Analysis carried out, too many missing values</td>
  </tr>
  <tr>
  <td style="text-align:left">22</td>
  <td style="text-align:left">Batch number</td>
  <td style="text-align:center">14,252</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">No Analysis carried out, too many missing values</td>
  </tr>
  <tr>
  <td style="text-align:left">23</td>
  <td style="text-align:left">Company recall code (**)</td>
  <td style="text-align:center">1,831</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">No Analysis carried out, too many missing values</td>
  </tr>
  <tr>
  <td style="text-align:left">24</td>
  <td style="text-align:left">Production dates (**)</td>
  <td style="text-align:center">4,074</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">No Analysis carried out, too many missing values</td>
  </tr>
  <tr>
  <td style="text-align:left">25</td>
  <td style="text-align:left">Packaging description</td>
  <td style="text-align:center">6,126</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">No Analysis carried out, too many missing values</td>
  </tr>
  <tr>
  <td style="text-align:left">26</td>
  <td style="text-align:left">year</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">datetime64[ns]</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">27</td>
  <td style="text-align:left">week</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">28</td>
  <td style="text-align:left">date</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">datetime64[ns]</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">29</td>
  <td style="text-align:left">economic_area</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">30</td>
  <td style="text-align:left">risk_category</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">31</td>
  <td style="text-align:left">product_category</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">32</td>
  <td style="text-align:left">country_top15</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">object</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">33</td>
  <td style="text-align:left">compulsory_warnings</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">34</td>
  <td style="text-align:left">compulsory_borderstop</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">35</td>
  <td style="text-align:left">compulsory_withdrawal</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">36</td>
  <td style="text-align:left">compulsory_recall</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">37</td>
  <td style="text-align:left">compulsory_ban</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">38</td>
  <td style="text-align:left">compulsory_destruction</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">39</td>
  <td style="text-align:left">compulsory_removal</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">40</td>
  <td style="text-align:left">compulsory_criminal</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">41</td>
  <td style="text-align:left">compulsory_responsible_unknown</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">42</td>
  <td style="text-align:left">compulsory_responsible_retail</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">43</td>
  <td style="text-align:left">compulsory_responsible_disti</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">44</td>
  <td style="text-align:left">compulsory_responsible_importer</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">45</td>
  <td style="text-align:left">compulsory_responsible_manufacturer</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">46</td>
  <td style="text-align:left">compulsory_responsible_other</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">47</td>
  <td style="text-align:left">voluntary_warnings</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">48</td>
  <td style="text-align:left">voluntary_borderstop</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">49</td>
  <td style="text-align:left">voluntary_withdrawal</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">50</td>
  <td style="text-align:left">voluntary_recall</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">51</td>
  <td style="text-align:left">voluntary_ban</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">52</td>
  <td style="text-align:left">voluntary_destruction</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">53</td>
  <td style="text-align:left">voluntary_removal</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">54</td>
  <td style="text-align:left">voluntary_criminal</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">55</td>
  <td style="text-align:left">voluntary_responsible_unknown</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">56</td>
  <td style="text-align:left">voluntary_responsible_retail</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">57</td>
  <td style="text-align:left">voluntary_responsible_disti</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">58</td>
  <td style="text-align:left">voluntary_responsible_importer</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">59</td>
  <td style="text-align:left">voluntary_responsible_manufacturer</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
  </tr>
  <tr>
  <td style="text-align:left">60</td>
  <td style="text-align:left">voluntary_responsible_other</td>
  <td style="text-align:center">35,508</td>
  <td style="text-align:center">bool</td>
  <td style="text-align:left"></td>
  <td style="text-align:left">Feature Engineered</td>
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
  <p>Since this entire analysis is based on data from the EU, and I have used visualisations from the official annual summary 
    as inspiration for the programmatically created version of these visualisations,
  the creative commons license applies this work hosted on <a href="https://rodders.me">https://rodders.me</a>, 
  this means that reuse of this analysis and it's visualisations is allowed provided appropriate credit is given and any changes are indicated.</p>
  

  
<?php include 'html-inc/footer.php'; ?>
<script src="/js/coder.min.6ae284be93d2d19dad1f02b0039508d9aab3180a12a06dcc71b0b0ef7825a317.js"></script> 
  
</body>
<script src="../../scripts/projects.js"> </script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<!-- <script src="../../scripts/comparison.js"> </script> -->



</html>






