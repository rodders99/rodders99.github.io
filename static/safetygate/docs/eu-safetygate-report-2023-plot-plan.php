<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<meta charset="utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta name="color-scheme" content="dark">


<link rel="stylesheet" type="text/css" href="/css/custom.css">
<link rel="stylesheet" type="text/css" href="/css/custom-menu.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="/css/project-style.css">

<title>eu-safetygate-report-2023</title>

</head>

<body>
<!-- NAVIGATION MENU-->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  <?php include 'menu.php'; ?>
  
  </div>
  
                  <div class="page-container">
                    
                    <div class="toolbar" style="width:100%; text-align:center;">
                      <span class="menu dropbtn" style="align-items:center;" onclick="openNav()"><i style="align-items:center" class="material-icons" style="font-size:24px; color: white">menu</i>&nbsp;Menu</span>
                  </div>
<!-- CONTENT -->
<h1>EU Safety Gate - Visualisation Plan</h2>
  <img src="https://rodders.me/safetygate/img/Safety_Gate_Logo.png" alt="Safety Gate Logo" style="width:50%">



<h2>Visualisation plan for key features of interest :</h2>
<p>
  <ul>
      <li>Show Annual Totals, Annual YoY Change, Cumulative Total</li>
      <li>Show Total Alerts issued Vs Rest of the World (RoW)</li>
      <li>Show 2022 / 2023 Difference in sub categories</li>
</ul>
</p>


<h2>Data Source</h2>

<p>Data was sourced from the EU Safety Gate web site : <a href="https://ec.europa.eu/safety-gate-alerts/screen/webReport#recentAlerts">https://ec.europa.eu/safety-gate-alerts/screen/webReport#recentAlerts</a></p>

<h2>Plot Calculations</h2>
<div class="datatable-container" style="width:100%; ">
  <table class="datatable" >
  <thead>
    <tr>
      <th >Plot Series</th>
      <th style="text-align:center">Plot Count</th>
      <th>Plot Variants</th>
      <th style="text-align:right">Plot Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Summary (Total Worldwide)</td>
      <td style="text-align:center">19</td>
      <td >None</td>
      <td style="text-align:right">19</td>
    </tr>
    <tr>
      <td>Country</td>
    <td style="text-align:center">26</td>
  <td>Country x 17</td>
  <td style="text-align:right">442</td>
</tr>
<tr>
<td>Top 3 Product categories</td>
<td style="text-align:center">22</td>
<td>Country x 17 x <br>Product Category x 3<br>= 51</td>
<td style="text-align:right">1,122</td>
</tr>
<tr>
  <td colspan="2"></td>
  <td style="font-size:18px; font-weight:bold"> Total</td>
  <td style="text-align:right; font-size:18px; font-weight:bold"> 1,583</td>
</tr>
  </tbody>
  </table>
</div>
<br>
<h2>Visualisations</h2>
<div class="datatable-container">
  <table class="datatable" >
    <thead>
    <th style="width:15%">Type</th>
    <th>Dataset</th>
    <th>Showing</th>
    <th>Plot Title</td>
    <th >Summary</th>
    <th style="text-align:center;">Per Country<br>(Inc All)</th>
     </tr>
    </thead>
    <tbody>
     <tr>
    <td colspan="5" style="font-size:22px; font-weight: bold;">Summary</td>
    <td></td>
     </tr>
     <tr>
    <td>Annotated Bar / Line</td>
    <td>All</td>
    <td>Annual Count of Alerts</td>
    <td>Number of Alerts Validated on Safetygate from 2003 to 2023</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Geo</td>
    <td>All</td>
    <td>Annual Count of Alerts</td>
    <td>Geo Total 2023 Vs 2023</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Annotated Bar / Line</td>
    <td>All</td>
    <td>Annual Count of Alerts</td>
    <td>All - Annual &amp; Cumulative Alerts</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Annotated Bar / Line</td>
    <td>All</td>
    <td>Annual Count of Alerts</td>
    <td>All - Annual Cumulative Alerts &amp; YoY Change</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Annotated Bar / Line</td>
    <td>All (Ex Country of origin unknown)</td>
    <td>Annual Count of Alerts</td>
    <td>All - Annual &amp; Cumulative Alerts (Exc Unknown)</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Annotated Bar / Line</td>
    <td>All (Ex Country of origin unknown)</td>
    <td>Annual Count of Alerts</td>
    <td>All - Annual Cumulative Alerts &amp; YoY Change (Exc Unknown)</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Pie</td>
    <td>Economic Area of Product Origin</td>
    <td>% of Total</td>
    <td>Economic Area of Product Origin - Total Alerts</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Presentation Pie</td>
    <td>Economic Area of Product Origin</td>
    <td>% of Total</td>
    <td>Economic Area of Product Origin - 2022 Vs 2023 - Total Alerts</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Stacked Bar</td>
    <td>Economic Area of Product Origin</td>
    <td>Annual Count of Alerts</td>
    <td>Economic Area of Product Origin - Annual Alerts</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Pie</td>
    <td>Country of origin</td>
    <td>% of Total</td>
    <td>Country of Origin - Total Alerts - Percentage</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Presentation Pie</td>
    <td>Country of origin</td>
    <td>Annual Count</td>
    <td>Country of Origin - 2022 Vs 2023 - Total Alerts</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Pie</td>
    <td>All (Ex Country of origin unknown)</td>
    <td>% of Total</td>
    <td>Country of Origin - Total Alerts - Percentage (Exc Unknown)</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Presentation Pie</td>
    <td>All (Ex Country of origin unknown)</td>
    <td>Annual Count</td>
    <td>Country of Origin - 2022 Vs 2023 - Total Alerts (Excl Unknown)</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Stacked Area</td>
    <td>Country of origin</td>
    <td>Annual Count</td>
    <td>Country of Origin - Annual Alerts</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Stacked Area</td>
    <td>Country of origin</td>
    <td>% of Total</td>
    <td>Country of Origin - Annual %</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Stacked Area</td>
    <td>All (Ex Country of origin unknown)</td>
    <td>Annual Count</td>
    <td>Country of Origin - Annual Alerts (Exc Unknown)</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Stacked Area</td>
    <td>All</td>
    <td>% of Total</td>
    <td>Country of Origin - Annual Alerts - %</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Stacked Area</td>
    <td>All (Ex Country of origin unknown)</td>
    <td>% of Total</td>
    <td>Country of Origin - Annual Alerts - % (Exc Unknown)</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr>
    <td>Table</td>
    <td>All</td>
    <td>List</td>
    <td>top 30 Brands for Safety Alerts</td>
    <td style="text-align:center";>x</td>
    <td></td>
     </tr>
     <tr></tr>
     <tr>
      <td colspan="6" style="font-size:22px; font-weight: bold;">Country {Country_top30}</td>
    
     </tr>
     <tr>
    <td>Pie</td>
    <td>{country}</td>
    <td>% of Total</td>
    <td>Total Alerts Issued vs RoW %</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Presentation Pie</td>
    <td>{country}</td>
    <td>% of Total 2022 Vs 2023</td>
    <td>Total Alerts Issued vs RoW - 2022 Vs 2023</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Annotated Bar / Line</td>
    <td>{country}</td>
    <td>Annual Count</td>
    <td>Annual &amp; Cumulative Alerts</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Annotated Bar / Line</td>
    <td>{country}</td>
    <td>Annual Count</td>
    <td>Annual Cumulative Alerts &amp; YoY Change</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Pie</td>
    <td>{country}</td>
    <td>% of Total</td>
    <td>Product Category - Total Alerts %</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Stacked Area</td>
    <td>{country}</td>
    <td>Annual Count</td>
    <td>Product Category - Annual Alerts</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Stacked Area</td>
    <td>{country}</td>
    <td>% of Total</td>
    <td>Product Category - Annual Alerts - %</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Pie</td>
    <td>{country}</td>
    <td>% of Total by year, 2022 Vs 2023</td>
    <td>Product Category - 2022 Vs 2023</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Pie</td>
    <td>{country}</td>
    <td>% of Total</td>
    <td>{country}</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Stacked Area</td>
    <td>{country}</td>
    <td>Annual Count</td>
    <td>Risk category - Annual Alerts</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Stacked Area</td>
    <td>{country}</td>
    <td>% of Total</td>
    <td>Risk category - Annual Alerts - %,</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Presentation Pie</td>
    <td>{country}</td>
    <td>% of Total for 2022 Vs 2023</td>
    <td>Risk Category - 2022 Vs 2023</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Stacked Bar</td>
    <td>{country}</td>
    <td>Annual Count Compulsory Vs Voluntary</td>
    <td>Action Required - Annual Alerts</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Stacked Bar</td>
    <td>{country}</td>
    <td>Annual Count Compulsory Vs Voluntary</td>
    <td>Responsible Party - Annual Alerts</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Bar</td>
    <td>{country}</td>
    <td>Annual Count Compulsory Vs Voluntary</td>
    <td>Action Required - Total Alerts</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Bar</td>
    <td>{country}</td>
    <td>Annual Count Compulsory Vs Voluntary</td>
    <td>Responsible Party - Total Alerts</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Presentation Pie</td>
    <td>{country}</td>
    <td>% Total Compulsory Vs Voluntary</td>
    <td>Action Required - 2022 Vs 2023</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Presentation Pie</td>
    <td>{country}</td>
    <td>% Total Compulsory Vs Voluntary</td>
    <td>Responsible Party - 2022 Vs 2023</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Pie</td>
    <td>{country}</td>
    <td>% Total</td>
    <td>Submitting Country - Total Alerts</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Stacked Bar</td>
    <td>{country}</td>
    <td>Annual Count</td>
    <td>Submitting Country - Annual Alerts</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Stacked Bar</td>
    <td>{country}</td>
    <td>% of Total</td>
    <td>Submitting Country - Annual Alerts %</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Presentation Pie</td>
    <td>{country}</td>
    <td>% Total, 2022 Vs 2023</td>
    <td>Submitting Country - 2022 Vs 2023</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Pie</td>
    <td>{country}</td>
    <td>% of Total</td>
    <td>Counterfeit - Total Alerts - Percentage</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Stacked Bar</td>
    <td>{country}</td>
    <td>Annual Count</td>
    <td>Counterfeit - Annual Alerts</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Stacked Bar</td>
    <td>{country}</td>
    <td>% of Total</td>
    <td>Counterfeit - Annual Alerts %</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Presentation Pie</td>
    <td>{country}</td>
    <td>% of Total, 2022 Vs 2023</td>
    <td>Counterfeit - 2022 Vs 2023</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td></td>
     </tr>
     <tr>
      <td colspan="6" style="font-size:22px; font-weight: bold;">Top 3 Product Category {product_category}</td>
     </tr>
     <tr>
    <td>Pie</td>
    <td>{Country} - {Product Category}</td>
    <td>% of Total</td>
    <td>Total Alerts - Percentage of all</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Annotated Bar / Line</td>
    <td>{Country} - {Product Category}</td>
    <td>Annual Count</td>
    <td>Annual &amp; Cumulative Alerts</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Annotated Bar / Line</td>
    <td>{Country} - {Product Category}</td>
    <td>Annual Count</td>
    <td>Annual Cumulative Alerts &amp; YoY Change</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Presentation Pie</td>
    <td>{Country} - {Product Category}</td>
    <td>% Total, 2022 Vs 2023</td>
    <td>Action Required - 2022 Vs 2023,</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Stacked Bar</td>
    <td>{Country} - {Product Category}</td>
    <td>Annual Count - Action Required</td>
    <td>Action Required - Annual Alerts</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Bar</td>
    <td>{Country} - {Product Category}</td>
    <td>Annual Count - Action Required</td>
    <td>Action Required - Total Alerts,</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Presentation Pie</td>
    <td>{Country} - {Product Category}</td>
    <td>% Total, 2022 Vs 2023</td>
    <td>Counterfeit - 2022 Vs 2023,</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Stacked Bar</td>
    <td>{Country} - {Product Category}</td>
    <td>% Total</td>
    <td>Counterfeit - Annual Alerts %</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Stacked Bar</td>
    <td>{Country} - {Product Category}</td>
    <td>Annual Count</td>
    <td>Counterfeit - Annual Alerts,</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Pie</td>
    <td>{Country} - {Product Category}</td>
    <td>% Total</td>
    <td>Counterfeit - Total Alerts - Percentage</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Presentation Pie</td>
    <td>{Country} - {Product Category}</td>
    <td>% Total, 2022 Vs 2023</td>
    <td>Responsible Party - 2022 Vs 2023</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Stacked Bar</td>
    <td>{Country} - {Product Category}</td>
    <td>Annual Count - Responsible Party</td>
    <td>Responsible Party - Annual Alerts</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Bar</td>
    <td>{Country} - {Product Category}</td>
    <td>Annual Count - Responsible Party</td>
    <td>Responsible Party - Total Alerts,</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Presentation Pie</td>
    <td>{Country} - {Product Category}</td>
    <td>% Total, 2022 Vs 2023</td>
    <td>Risk Category - 2022 Vs 2023</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Annotated Bar / Line</td>
    <td>{Country} - {Product Category}</td>
    <td>Annual Count</td>
    <td>Risk Category - Annual Alerts</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Annotated Bar / Line</td>
    <td>{Country} - {Product Category}</td>
    <td>Annual Count</td>
    <td>Risk Category - Annual Alerts Percentage</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Pie</td>
    <td>{Country} - {Product Category}</td>
    <td>% of Total</td>
    <td>Risk Category - Total Alerts - Percentage</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Presentation Pie</td>
    <td>{Country} - {Product Category}</td>
    <td>% Total, 2022 Vs 2023</td>
    <td>Submitting Country - 2022 Vs 2023</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Annotated Bar / Line</td>
    <td>{Country} - {Product Category}</td>
    <td>Annual Count</td>
    <td>Submitting Country - Annual Alerts,</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Annotated Bar / Line</td>
    <td>{Country} - {Product Category}</td>
    <td>Annual Count</td>
    <td>Submitting Country - Annual Percentage</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Pie</td>
    <td>{Country} - {Product Category}</td>
    <td>% of Total</td>
    <td>Submitting Country - Total Alerts Percentage,</td>
    <td></td>
    <td style="text-align:center";>x</td>
     </tr>
     <tr>
    <td>Table</td>
    <td>{Country} - {Product Category}</td>
    <td>List</td>
    <td>top 30 Brands for Safety Alerts</td>
    <td></td>
    <td style="text-align:center";>x</td>
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
  the creative commons license applies this work hosted on <a href="https://rodders99.github.io">https://rodders99.github.io</a>, 
  this means that reuse of this analysis and it's visualisations is allowed provided appropriate credit is given and any changes are indicated.</p>
  

  
  
  
</body>
<script src="../../scripts/projects.js"> </script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<!-- <script src="../../scripts/comparison.js"> </script> -->


</html>






