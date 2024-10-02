<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<meta charset="utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta name="color-scheme" content="dark">
<!-- <link rel="stylesheet" href="/css/coder-dark.css" media="screen"> -->
<!-- <link rel="stylesheet" type="text/css" href="/css/coder.css"> -->
<link rel="stylesheet" type="text/css" href="/css/custom.css">
<link rel="stylesheet" type="text/css" href="/css/custom-menu2.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="/css/project-style.css">

<title>eu-safetygate-report-2023</title>

</head>

<body>

<!-- NAVIGATION MENU-->


  
              <div class="page-container">
              <div class="toolbar" style="width:100%; text-align:center;">
                <!-- <span class="menu dropbtn" style="align-items:center;" onclick="openNav()"><i style="align-items:center" class="material-icons" style="font-size:24px; color: white">menu</i>&nbsp;Menu</span> -->
                <?php include 'menu-2023.php'; ?></div>
                        <!-- JUMP TO MENU-->
          
            <div id="JumptoSection"><h2>Jump to section</h2></div>
            <div class="countries">
          

            
              <select onchange="window.location.hash=this.value" class="country">
                
                <option value="percent">Percentage of Total Worldwide Alerts</option>
                <option value="annual">Country Annual, Cumulative and Year on Year change</option>
                <option value="top3s">Top 3 Product & Risk Categories</option>
                <option value="category">Product Category</option>
                <option value="risk">Risk Category</option>
                <option value="counterfeit">Counterfeit</option>
                <option value="action_responsible">Action Required / Responsible Party</option>
                <option value="submitting">Submitting Country</option>
                

                <option value="top1_">1 - Top Product Category</option>
                <option value="top1_percent">&nbsp;&nbsp;&nbsp;#1 - Percentage of Country Alerts</option>
                <option value="top1_annual">&nbsp;&nbsp;&nbsp;#1 - Annual, Cumulative and Year on Year change</option>
                <option value="top1_risk">&nbsp;&nbsp;&nbsp;#1 - Risk Category</option>
                <option value="top1_counterfeit">&nbsp;&nbsp;&nbsp;#1 - Counterfeit</option>
                <option value="top1_action_responsible">&nbsp;&nbsp;&nbsp;#1 - Voluntary/Compulsory Action Required / Responsible Party</option>
                <option value="top1_submitting">&nbsp;&nbsp;&nbsp;#1 - Submitting Country</option>
                <option value="top1_brands">&nbsp;&nbsp;&nbsp;#1 - Top Brands</option>
                
                <option value="top2_">#2 - Top Product Category</option>
                <option value="top2_percent">&nbsp;&nbsp;&nbsp;#2 - Percentage of Country Alerts</option>
                <option value="top2_annual">&nbsp;&nbsp;&nbsp;#2 - Annual, Cumulative and Year on Year change</option>
                <option value="top2_risk">&nbsp;&nbsp;&nbsp;#2 - Risk Category</option>
                <option value="top2_counterfeit">&nbsp;&nbsp;&nbsp;#2 - Counterfeit</option>
                <option value="top2_action_responsible">&nbsp;&nbsp;&nbsp;#2 - Voluntary/Compulsory Action Required / Responsible Party</option>
                <option value="top2_submitting">&nbsp;&nbsp;&nbsp;#2 - Submitting Country</option>
                <option value="top2_brands">&nbsp;&nbsp;&nbsp;#2 - Top Brands</option>
                
                <option value="top3_">#3 - Top Product Category</option>
                <option value="top3_percent">&nbsp;&nbsp;&nbsp;#2 - Percentage of Country Alerts</option>
                <option value="top3_annual">&nbsp;&nbsp;&nbsp;#2 - Annual, Cumulative and Year on Year change</option>
                <option value="top3_risk">&nbsp;&nbsp;&nbsp;#3 - Risk Category</option>
                <option value="top3_counterfeit">&nbsp;&nbsp;&nbsp;#3 - Counterfeit</option>
                <option value="top3_action_responsible">&nbsp;&nbsp;&nbsp;#3 - Voluntary/Compulsory Action Required / Responsible Party</option>
                <option value="top3_submitting">&nbsp;&nbsp;&nbsp;#3 - Submitting Country</option>
                <option value="top3_brands">&nbsp;&nbsp;&nbsp;#3 - Top Brands</option>
                
              </select>
            </div>
          <!-- </div> -->

    <h1 class="ChangeCountry">EU Safetygate report</h1>
    <p><img src="https://rodders.me/safetygate/img-2023/icons/Safety_Gate_Logo.png" alt="Safety Gate Logo" style="width:49%"></p>
    <p class='last-updated'><?php include '../tables-2024/last-updated.php' ?></p>
<!-- <div id="tableOfContents"></div> -->


<h1 class="ChangeCountry">Visualisations of key data</h1>

<h3 id="percent">Total Safety Alerts Vs RoW</h3>

<div class="datatable-container">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" >
  <tbody> 
    <tr>
      <th style="text-align:center; ">% of Total Alerts</th>
      <th style="text-align:center;">2022 Vs 2023</th>
      
    </tr> 
    <tr>
      <td style="align-items:center;  width:49%" id="country-total-alerts-vs-row">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-total-alerts-issued-vs-row-percentage.png">
           <img src="https://rodders.me/safetygate/img-2023/total-alerts-issued-vs-row-percentage.png" class="change" ></a></td>
      <td style="align-items:center;  width:49%" id="country-2022vs2023">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-total-alerts-issued-vs-row-ly-vs-ty.png">
       <img src="https://rodders.me/safetygate/img-2023/total-alerts-issued-vs-row-ly-vs-ty.png" class="change" ></a></td>
  </tr>

</tbody>
</table>
<a href="#" class="gototop">Go to Top</a>
</div>


<h3 id="annual">Annual, Cumulative and Year on Year change</h3>

<div class="datatable-container">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr><th style="text-align:center;">Annual and Cumulative</th>
      <th style="text-align:center;">Annual Cumulative and YoY Change</th>
    </tr>
      <tr>
        <td style="align-items:top;  width:49%" id="country-annual-cumulative">
          <A href="https://rodders.me/safetygate/img-2023/all-countries-annual-and-cumulative-alerts.png">
            <img src="https://rodders.me/safetygate/img-2023/annual-and-cumulative-alerts.png" class='change'/></a>
        <td style="align-items:top;width:49%" id="country-annual-yoy-change">
          <a href="https://rodders.me/safetygate/img-2023/all-countries-annual-cumulative-alerts-and-yoy-change.png">
            <img src="https://rodders.me/safetygate/img-2023/annual-cumulative-alerts-and-yoy-change.png" class="change" ></a></td>
      </tr>
    </tbody>
  </table>
  <a href="#" class="gototop">Go to Top</a>
</div>


<h3 class="ChangeCountry" id="top3s">Top3 Product Category and Risk</h3>

<div class="datatable-container" id="Countrytop3">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr>
        
        <td style="text-align:center;" >
          <a href="https://rodders.me/safetygate/img-2023/all-countries-top3s.png">
            <img src="https://rodders.me/safetygate/img-2023/top3s.png"  class="change" ></a></td>


      </tr>
    </tbody>
  </table>
  <a href="#" class="gototop">Go to Top</a>
</div>

<h2 id="category">Product Category</h2>
<h3 class="ChangeCountry" >Product Category - Percentage of Total</h3>

<div class="datatable-container">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr>
      <th style="text-align:center;">Total</th>
      <th style="text-align:center;">2022 Vs 2023</th>
    </tr> 
    <tr>
      <td style="align-items: top; width:49%" id="product-category-percentage">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-product-category-total-alerts-percentage.png">
          <img src="https://rodders.me/safetygate/img-2023/product-category-total-alerts-percentage.png" class="change" ></a></td>
      <td style=" width:49%; align-items: top" id="product-category-2022vs2023">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-product-category-ly-vs-ty.png">
          <img src="https://rodders.me/safetygate/img-2023/product-category-ly-vs-ty.png" class="change" ></a></td>
  </tr>
  </tbody>
</table>
<a href="#" class="gototop">Go to Top</a>
</div>

<h3 >Product Category - Annual, Cumulative and Year on Year change</h3>

<div class="datatable-container">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">

    <tr>
      <th style="text-align:center;">Annual Count</th>
      <th style="text-align:center;">Annual Percent of Total</th>
    </tr> 
    <tr>
      <td style="align-items:top; width:49%" id="product-category-annual">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-product-category-annual-alerts.png">
          <img src="https://rodders.me/safetygate/img-2023/product-category-annual-alerts.png" class="change" ></a></td>
      <td style="align-items:top; width:49%" id="product-category-annual-percentage">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-product-category-annual-alerts-percentage.png">
          <img src="https://rodders.me/safetygate/img-2023/product-category-annual-alerts-percentage.png"  class="change"></a></td>
  </tr>
</tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h2 id="risk">Risk Category</h2>
<h3 >Risk Category - Percentage by Type</h3>

<div class="datatable-container">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr>
      <th style="text-align:center;">Total</th>
      <th style="text-align:center;">2022 Vs 2023</th>
    </tr> 
    <tr>
      <td style="text-align:center; width:49%" id="risk-category-percentage">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-risk-category-total-alerts-percentage.png">
          <img src="https://rodders.me/safetygate/img-2023/risk-category-total-alerts-percentage.png" class="change" ></a></td>
      <td style="text-align:center; width:49%" id="risk-category-2022vs2023">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-risk-category-ly-vs-ty.png">
          <img src="https://rodders.me/safetygate/img-2023/risk-category-ly-vs-ty.png" class="change" ></a></td>
  </tr>
</tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h3 >Risk Category - Annual, Cumulative and Year on Year change</h3>

<div class="datatable-container">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">

    <tr>
      <th style="text-align:center;">Annual Count</th>
      <th style="text-align:center;">Annual Percent of Total</th>
    </tr> 
    <tr>
      <td style="text-align:center; width:49%" id="risk-category-annual">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-risk-category-annual-alerts.png">
          <img src="https://rodders.me/safetygate/img-2023/risk-category-annual-alerts.png" class="change" ></a></td>
      <td style="text-align:center; width:49%" id="risk-category-annual-percentage" >
        <a href="https://rodders.me/safetygate/img-2023/all-countries-risk-category-annual-alerts-percentage.png">
          <img src="https://rodders.me/safetygate/img-2023/risk-category-annual-alerts-percentage.png" class="change" ></a></td>
  </tr>
</tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h2 id="counterfeit">Counterfeit</h2>
<h3 >Counterfeit - Percentage by Type</h3>

<div class="datatable-container">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr>
      <th style="text-align:center;">Total</th>
      <th style="text-align:center;">2022 Vs 2023</th>
    </tr> 
    <tr>
      <td style="text-align:center; width:49%" id="counterfeit-category-percentage">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-counterfeit-total-alerts-percentage.png">
          <img src="https://rodders.me/safetygate/img-2023/counterfeit-total-alerts-percentage.png" class="change" ></a></td>
      <td style="text-align:center; width:49%" id="counterfeit-category-2022vs2023">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-counterfeit-total-alerts-percentage.png">
          <img src="https://rodders.me/safetygate/img-2023/counterfeit-ly-vs-ty.png" class="change" ></a></td>
  </tr>
</tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h3 >Counterfeit - Annual, Cumulative and Year on Year change</h3>

<div class="datatable-container">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">

    <tr>
      <th style="text-align:center;">Annual Count</th>
      <th style="text-align:center;">Annual Percent of Total</th>
    </tr> 
    <tr>
      <td style="text-align:center; width:49%" id="counterfeit-category-annual">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-counterfeit-annual-alerts.png">
          <img src="https://rodders.me/safetygate/img-2023/counterfeit-annual-alerts.png" class="change" ></a></td>
      <td style="text-align:center; width:49%" id="counterfeit-category-annual-percentage">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-counterfeit-annual-alerts-percentage.png">
        <img src="https://rodders.me/safetygate/img-2023/counterfeit-annual-alerts-percentage.png"  class="change"></a></td>
  </tr>
</tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h2 id="action_responsible">Action Required / Responsible Party</h2>
<h3 >Compulsory / Voluntary - Action Required / Responsible Party</h3>

<div class="datatable-container">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr>
      <th style="text-align:center;">Action Required 2022 Vs 2023</th>
      <th style="text-align:center;">Responsible Party 2022 Vs 2023</th>
    </tr> 
    <tr>
      <td style="text-align:center; width:49%" id="action-required-responsible-party-2022vs2023">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-action-required-ly-vs-ty.png">
          <img src="https://rodders.me/safetygate/img-2023/action-required-ly-vs-ty.png"  class="change"></a></td>
      <td style="text-align:center; width:49%" id="action-required-responsible-party-2022vs2023">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-responsible-party-ly-vs-ty.png">
          <img src="https://rodders.me/safetygate/img-2023/responsible-party-ly-vs-ty.png" class="change" ></a></td>
  </tr>
    <tr>
      <th style="text-align:center;">Annual Action Required </th>
      <th style="text-align:center;">Annual Responsible Party</th>
    </tr> 
    <tr>
      <td style="text-align:center; width:49%" id="action-required-responsible-party-annual">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-action-required-annual-alerts.png">
          <img src="https://rodders.me/safetygate/img-2023/action-required-annual-alerts.png"  class="change"></a></td>
      <td style="text-align:center; width:49%" id="action-required-responsible-party-annual">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-responsible-party-annual-alerts.png">
          <img src="https://rodders.me/safetygate/img-2023/responsible-party-annual-alerts.png" class="change" ></a></td>
  </tr>
    <tr>
      <th style="text-align:center;">Total Action Required</th>
      <th style="text-align:center;">Total Responsible Party</th>
    </tr> 
    <tr>
      <td style="text-align:center; width:49%" id="action-required-responsible-party-total">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-action-required-total-alerts.png">
          <img src="https://rodders.me/safetygate/img-2023/action-required-total-alerts.png" class="change" ></a></td>
      <td style="text-align:center; width:49%" id="action-required-responsible-party-total">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-responsible-party-total-alerts.png">
          <img src="https://rodders.me/safetygate/img-2023/responsible-party-total-alerts.png" class="change" ></a></td>
  </tr>
</tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h2 id="submitting">Submitting Country</h2>
<h3 >Submitting Country - Percentage by Country</h3>

<div class="datatable-container">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr>
      <th style="text-align:center;">Total</th>
      <th style="text-align:center;">2022 Vs 2023</th>
    </tr> 
    <tr>
      <td style="text-align:center; width:49%" id="submitting-country-percentage">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-submitting-country-total-alerts-percentage.png">
          <img src="https://rodders.me/safetygate/img-2023/submitting-country-total-alerts-percentage.png" class="change" ></a></td>
      <td style="text-align:center; width:49%" id="submitting-country-2022vs2023">
        <a href="https://rodders.me/safetygate/img-2023/all-countries-submitting-country-ly-vs-ty.png">
          <img src="https://rodders.me/safetygate/img-2023/submitting-country-ly-vs-ty.png" class="change" ></a></td>
  </tr>
</tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>





<h3 >Submitting Country - Annual, Cumulative and Year on Year change</h3>

<div class="datatable-container">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
    <tr>
      <th style="text-align:center;">Annual Count</th>
      <th style="text-align:center;">Annual Percent of Total</th>
    </tr> 
    <tr>
        <td style="text-align:center; width:49%" id="submitting-country-annual" >
          <a href="https://rodders.me/safetygate/img-2023/all-countries-submitting-country-annual-alerts.png">
            <img src="https://rodders.me/safetygate/img-2023/submitting-country-annual-alerts.png"  class="change"></a></td>
        <td style="text-align:center; width:49%" id="submitting-country-annual-percentage">
          <a href="https://rodders.me/safetygate/img-2023/all-countries-submitting-country-annual-alerts-percentage.png">
            <img src="https://rodders.me/safetygate/img-2023/submitting-country-annual-alerts-percentage.png"  class="change"></a></td>
    </tr>
</tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>



<h1 >Top 3 Product Categories</h1>
<!-- Product 0 -->
<h2 class="product_cat0" id="top1_">#1 - Product Category</h1>
<h3 class="product_cat0" id="top1_percent">Product Category - Percentage of Total</h3>

    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-percentage">
        <tbody> 
        <tr>
          <th style="text-align:center;">Total</th>
        
            
        </tr>    
        <tr>
          <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-total-alerts-percentage-of-all.png">
              <img src="https://rodders.me/safetygate/img-2023/product-0-total-alerts-percentage-of-all.png" class="change" ></a></td>      

        </tr> 
</tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h3 class="product_cat0" id="top1_annual">Product Category - Annual, Cumulative and Year on Year change </h3>
  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 
      <tr>
        <th style="text-align:center;">Annual Alerts</th>
        <th style="text-align:center;">Cumulative Total and YoY Change</th>
      </tr> 
      <tr>
        <td style="text-align:center; width:49%" id="product-cat-0-annual-cumulative" >
          <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-annual-and-cumulative-alerts.png">
            <img src="https://rodders.me/safetygate/img-2023/product-0-annual-and-cumulative-alerts.png" class="change" ></a></td>
        <td style="text-align:center; width:49%" id="product-cat-0-annual-yoy-change">
          <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-annual-cumulative-alerts-and-yoy-change.png">
         <img src="https://rodders.me/safetygate/img-2023/product-0-annual-cumulative-alerts-and-yoy-change.png"  class="change"></a></td>
      </tr> 
       
      </tbody>
    </table>
  </div>
  <br><a href="#" class="gototop">Go to Top</a>
 
<h2  id="top1_risk">#1 - Risk Category</h2>

<h3  class="product_cat0">Risk Category - Percentage by Type</h3>
    
    <div class="datatable-container">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody> 
        <tr>
            <th style="text-align:center;">Total</th>
            <th style="text-align:center;">2022 Vs 2023</th>
        </tr>  
        <tr>
          <td style="text-align:center; width:49%" id="product-cat-0-risk-category-percentage">
            <a href="https://rodders.me//safetygate/img-2023/all-countries-product-0-risk-category-total-alerts-percentage.png">
              <img src="https://rodders.me/safetygate/img-2023/product-0-risk-category-total-alerts-percentage.png"  class="change"></a></td>
          <td style="text-align:center; width:49%" id="product-cat-0-risk-category-2022vs2023">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-risk-category-ly-vs-ty.png">
              <img src="https://rodders.me/safetygate/img-2023/product-0-risk-category-ly-vs-ty.png"  class="change"></a></td>
      </tr> 
      </tbody>
      </table>
    </div>
    <br><a href="#" class="gototop">Go to Top</a>

<h3 class="product_cat0">Risk Category - Annual, Cumulative and Year on Year change</h3>
  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tr>
            <th style="text-align:center;">Annual Total</th>
            <th style="text-align:center;">Cumulative Total and YoY Change</th>
        </tr> 
        <tr>
            <td style="text-align:center; width:49%" id="product-cat-0-risk-category-annual">
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-risk-category-annual-alerts.png">
                <img src="https://rodders.me/safetygate/img-2023/product-0-risk-category-annual-alerts.png" class="change" ></a></td>
            <td style="text-align:center; width:49%" id="product-cat-0-risk-category-annual-percentage" >
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-risk-category-annual-alerts-percentage.png">
                <img src="https://rodders.me/safetygate/img-2023/product-0-risk-category-annual-alerts-percentage.png" class="change" ></a></td>
        </tr> 
    
        </tbody>
        </table>
        </div>
        <br><a href="#" class="gototop">Go to Top</a>

        <h2  id="top1_counterfeit">#1 - Counterfeit</h2>
<h3 class="product_cat0">Counterfeit - Percentage by Type</h3>


    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 
        <tr>
          <th style="text-align:center;">Total</th>
          <th style="text-align:center;">2022 Vs 2023</th>
        </tr>    
        <tr>
          <td style="text-align:center; width:49%" id="product-cat-0-counterfeit-type-percentage" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-counterfeit-total-alerts-percentage.png">
           <img src="https://rodders.me/safetygate/img-2023/product-0-counterfeit-total-alerts-percentage.png"  class="change"></a></td>

          <td style="text-align:center; width:49%" id="product-cat-0-counterfeit-type-2022vs2023">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-counterfeit-ly-vs-ty.png">
           <img src="https://rodders.me/safetygate/img-2023/product-0-counterfeit-ly-vs-ty.png"  class="change"></a></td>
        </tr> 
        </tbody>
      </table>
<a href="#" class="gototop">Go to Top</a></div>


<h3  class="product_cat0">Counterfeit - Annual, Cumulative and Year on Year change</h3>

    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tr>
          <th style="text-align:center;">Annual Total</th>
          <th style="text-align:center;">Cumulative Total and YoY Change</th>
        </tr> 
        <tr>
          <td style="text-align:center; width:49%" id="product-cat-0-counterfeit-type-annual">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-counterfeit-annual-alerts.png">
              <img src="https://rodders.me/safetygate/img-2023/product-0-counterfeit-annual-alerts.png" class="change" ></a></td>
          
              <td style="text-align:center;width:49%" id="product-cat-0-counterfeit-type-annual-percentage">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-counterfeit-annual-alerts-percentage.png">
           <img src="https://rodders.me/safetygate/img-2023/product-0-counterfeit-annual-alerts-percentage.png"  class="change"></a></td>
        </tr> 
      </tbody>
    </table>
<a href="#" class="gototop">Go to Top</a></div>

    <h2  id="top1_action_responsible">#1 - Action Required / Responsible Party</h2>
<h3  class="product_cat0" >Compulsory / Voluntary - Action Required / Responsible Party</h3>

    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 
        <tr>
          <th style="text-align:center;">Required Action 2022 Vs 2023</th>
          <th style="text-align:center;">Responsible Party 2022 Vs 2023</th>
        </tr> 
        <tr>
          <td style="text-align:center; width:49%" id="product-cat-0-action-required-responsible-party-2022vs2023">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-action-required-ly-vs-ty.png">
              <img src="https://rodders.me/safetygate/img-2023/product-0-action-required-ly-vs-ty.png"  class="change"></a></td>
          <td style="text-align:center; width:49%" id="product-cat-0-action-required-responsible-party-2022vs2023">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-responsible-party-ly-vs-ty.png">
              <img src="https://rodders.me/safetygate/img-2023/product-0-responsible-party-ly-vs-ty.png" class="change" ></a></td>
      </tr>
        <tr>
          <th style="text-align:center;">Annual Required Action</th>
          <th style="text-align:center;">Annual Responsible Party</th>
        </tr> 
        <tr>
          <td style="text-align:center; width:49%" id="product-cat-0-action-required-responsible-party-annual">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-action-required-annual-alerts.png">
              <img src="https://rodders.me/safetygate/img-2023/product-0-action-required-annual-alerts.png"  class="change"></a></td>
          <td style="text-align:center; width:49%" id="product-cat-0-action-required-responsible-party-annual">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-responsible-party-annual-alerts.png">
              <img src="https://rodders.me/safetygate/img-2023/product-0-responsible-party-annual-alerts.png" class="change" ></a></td>
      </tr>
        <tr>
            <th style="text-align:center;">Total Required Action</th>
            <th style="text-align:center;">Total Responsible Party</th>
          </tr> 
        <tr>
          <td style="text-align:center; width:49%" id="product-cat-0-action-required-responsible-party-total">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-action-required-total-alerts.png">
              <img src="https://rodders.me/safetygate/img-2023/product-0-action-required-total-alerts.png" class="change" ></a></td>
          <td style="text-align:center; width:49%" id="product-cat-0-action-required-responsible-party-total">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-responsible-party-total-alerts.png">
              <img src="https://rodders.me/safetygate/img-2023/product-0-responsible-party-total-alerts.png" class="change" ></a></td>
      </tr>
    </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>
    </div>


    <h2  id="top1_submitting">#1 - Submitting Country</h2>

<h3  class="product_cat0">Submitting Country - Percentage by Country</h3>

    <div class="datatable-container">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody> 
        <tr>
            <th style="text-align:center;">Total</th>
            <th style="text-align:center;">2022 vs 2023</th>
            </tr>    
            <tr>
            <td style="text-align:center; width:49%" id="product-cat-0-submitting-country-percentage">
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-submitting-country-total-alerts-percentage.png">
                <img src="https://rodders.me/safetygate/img-2023/product-0-submitting-country-total-alerts-percentage.png"  class="change"></a></td>
            <td style="text-align:center; width:49%" id="product-cat-0-submitting-country-2022vs2023">
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-submitting-country-ly-vs-ty.png">
                <img src="https://rodders.me/safetygate/img-2023/product-0-submitting-country-ly-vs-ty.png"  class="change"></a></td>
            </tr> 
            </tbody>
          </table>
          <a href="#" class="gototop">Go to Top</a>
        </div>   

    
    <h3  class="product_cat0" >Submitting Country - Annual, Cumulative and Year on Year change</h3>
    
        <div class="datatable-container">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
                
        <tr>
            <th style="text-align:center;">Annual Total</th>
            <th style="text-align:center;">Cumulative Total and YoY Change</th>
        </tr> 
        <tr>
            <td style="text-align:center; width:49%" id="product-cat-0-submitting-country-annual">
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-submitting-country-annual-alerts.png">
                <img src="https://rodders.me/safetygate/img-2023/product-0-submitting-country-annual-alerts.png"  class="change"></a></td>
            <td style="text-align:center; width:49%" id="product-cat-0-submitting-country-annual-percentage">
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-submitting-country-annual-percentage.png">
                <img src="https://rodders.me/safetygate/img-2023/product-0-submitting-country-annual-percentage.png" class="change" ></a></td>
        </tr> 
    
        </tbody>
        </table>
        <a href="#" class="gototop">Go to Top</a>
        </div>


        <h2  id="top1_brands">#1 - Top Brands</h2>

<h3  class="product_cat0" >Top Brands for Safety Alerts</h3>
    <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-top-brands">
    <tbody> 
    <tr >
    <th >Top 30 Brands</th>
    </tr>
    </thead>
    <tbody>
    <tr >
    <td style="text-align: center;"><a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-top-30-brands-for-safety-alerts.png"><img src="https://rodders.me/safetygate/img-2023/product-0-top-30-brands-for-safety-alerts.png" class="change"></td>
    </tr>
    </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>
    </div>


<!-- Product 1 -->
<h2 class="product_cat1" id="top2_">#2 - Product Category</h1>

<h3 class="product_cat1" id="top2_percent">Product Category - Percentage of Total</h3>

    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-percentage">
        <tbody> 
        <tr>
          <th style="text-align:center;">Total</th>
        
            
        </tr>    
        <tr>
          <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-total-alerts-percentage-of-all.png">
              <img src="https://rodders.me/safetygate/img-2023/product-1-total-alerts-percentage-of-all.png" class="change" ></a></td>      
        
        </tr> 
</tbody>
</table>
<a href="#" class="gototop">Go to Top</a>
</div>

<h3 class="product_cat1" id="top2_annual">Product Category - Annual, Cumulative and Year on Year change </h3>
  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 
      <tr>
        <th style="text-align:center;">Annual Alerts</th>
        <th style="text-align:center;">Cumulative Total and YoY Change</th>
      </tr> 
      <tr>
        <td style="text-align:center; width:49%" id="product-cat-1-annual-cumulative">
          <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-annual-and-cumulative-alerts.png">
            <img src="https://rodders.me/safetygate/img-2023/product-1-annual-and-cumulative-alerts.png" class="change" ></a></td>
        <td style="text-align:center; width:49%" id="product-cat-1-annual-yoy-change">
          <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-annual-cumulative-alerts-and-yoy-change.png">
            <img src="https://rodders.me/safetygate/img-2023/product-1-annual-cumulative-alerts-and-yoy-change.png"  class="change"></a></td>
      </tr> 
       
      </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>
  </div>
 
  <h2 class="product_cat1" id="top2_risk">#2 - Risk Category</h2>

<h3  class="product_cat1">Risk Category - Percentage by Type</h3>
    
    <div class="datatable-container">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody> 
        <tr>
            <th style="text-align:center;">Total</th>
            <th style="text-align:center;">2022 Vs 2023</th>
        </tr>  
        <tr>
          <td style="text-align:center; width:49%" id="product-cat-1-risk-category-percentage">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-risk-category-total-alerts-percentage.png">
              <img src="https://rodders.me/safetygate/img-2023/product-1-risk-category-total-alerts-percentage.png"  class="change"></a></td>
          <td style="text-align:center; width:49%" id="product-cat-1-risk-category-2022vs2023">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-risk-category-ly-vs-ty.png">
              <img src="https://rodders.me/safetygate/img-2023/product-1-risk-category-ly-vs-ty.png"  class="change"></a></td>
      </tr> 
      </tbody>
      </table>
      <a href="#" class="gototop">Go to Top</a>
    </div>

<h3 class="product_cat1">Risk Category - Annual, Cumulative and Year on Year change</h3>
  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tr>
            <th style="text-align:center;">Annual Total</th>
            <th style="text-align:center;">Cumulative Total and YoY Change</th>
        </tr> 
        <tr>
            <td style="text-align:center; width:49%" id="product-cat-1-risk-category-annual">
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-risk-category-annual-alerts.png">
                <img src="https://rodders.me/safetygate/img-2023/product-1-risk-category-annual-alerts.png" class="change" ></a></td>
            <td style="text-align:center; width:49%" id="product-cat-1-risk-category-annual-percentage">
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-risk-category-annual-alerts-percentage.png">
                <img src="https://rodders.me/safetygate/img-2023/product-1-risk-category-annual-alerts-percentage.png" class="change" ></a></td>
        </tr> 
    
        </tbody>
        </table>
        <a href="#" class="gototop">Go to Top</a>
        </div>

        <h2  id="top2_counterfeit">#2 - Counterfeit</h2>

<h3 class="product_cat1">Counterfeit - Percentage by Type</h3>


    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 
        <tr>
          <th style="text-align:center;">Total</th>
          <th style="text-align:center;">2022 Vs 2023</th>
        </tr>    
        <tr>
          <td style="text-align:center; width:49%" id="product-cat-1-counterfeit-type-percentage">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-counterfeit-total-alerts-percentage.png">
              <img src="https://rodders.me/safetygate/img-2023/product-1-counterfeit-total-alerts-percentage.png"  class="change"></a></td>
          <td style="text-align:center; width:49%" id="product-cat-1-counterfeit-type-2022vs2023">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-counterfeit-ly-vs-ty.png">
              <img src="https://rodders.me/safetygate/img-2023/product-1-counterfeit-ly-vs-ty.png"  class="change"></a></td>
        </tr> 
        </tbody>
      </table>
<a href="#" class="gototop">Go to Top</a></div>


<h3  class="product_cat1">Counterfeit - Annual, Cumulative and Year on Year change</h3>

    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tr>
          <th style="text-align:center;">Annual Total</th>
          <th style="text-align:center;">Cumulative Total and YoY Change</th>
        </tr> 
        <tr>
          <td style="text-align:center; width:49%" id="product-cat-1-counterfeit-type-annual">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-counterfeit-annual-alerts.png">
              <img src="https://rodders.me/safetygate/img-2023/product-1-counterfeit-annual-alerts.png" class="change" ></a></td>
          <td style="text-align:center; width:49%" id="product-cat-1-counterfeit-type-annual-percentage">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-counterfeit-annual-alerts-percentage.png">
              <img src="https://rodders.me/safetygate/img-2023/product-1-counterfeit-annual-alerts-percentage.png"  class="change"></a></td>
        </tr> 
      </tbody>
    </table>
<a href="#" class="gototop">Go to Top</a></div>

    <h2  id="top2_action_responsible">#2 - Action Required / Responsible Party</h2>


<h3  class="product_cat1" >Voluntary / Compulsory Action Required / Responsible Party</h3>

    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 
        <tr id="product-cat-1-action-required-responsible-party-2022vs2023">
          <th style="text-align:center;">Required Action 2022 Vs 2023</th>
          <th style="text-align:center;">Responsible Party 2022 Vs 2023</th>
        </tr> 
        <tr id="product-cat-1-action-required-responsible-party-2022vs2023">
          <td style="text-align:center; width:49%" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-action-required-ly-vs-ty.png">
              <img src="https://rodders.me/safetygate/img-2023/product-1-action-required-ly-vs-ty.png"  class="change"></a></td>
          <td style="text-align:center; width:49%" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-responsible-party-ly-vs-ty.png">
            <img src="https://rodders.me/safetygate/img-2023/product-1-responsible-party-ly-vs-ty.png" class="change" ></a></td>
      </tr>
        <tr id="product-cat-1-action-required-responsible-party-annual">
          <th style="text-align:center;">Annual Required Action</th>
          <th style="text-align:center;">Annual Responsible Party</th>
        </tr> 
        <tr id="product-cat-1-action-required-responsible-party-annual">
          <td style="text-align:center; width:49%" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-action-required-annual-alerts.png">
              <img src="https://rodders.me/safetygate/img-2023/product-1-action-required-annual-alerts.png"  class="change"></a></td>
          <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-responsible-party-annual-alerts.png">
              <img src="https://rodders.me/safetygate/img-2023/product-1-responsible-party-annual-alerts.png" class="change" ></a></td>
      </tr>
        <tr id="product-cat-1-action-required-responsible-party-total">
            <th style="text-align:center;">Total Required Action</th>
            <th style="text-align:center;">Total Responsible Party</th>
          </tr> 
        <tr id="product-cat-1-action-required-responsible-party-total">
          <td style="text-align:center; width:49%" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-action-required-total-alerts.png">
              <img src="https://rodders.me/safetygate/img-2023/product-1-action-required-total-alerts.png" class="change" ></a></td>
          <td style="text-align:center; width:49%" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-responsible-party-total-alerts.png">
            <img src="https://rodders.me/safetygate/img-2023/product-1-responsible-party-total-alerts.png" class="change" ></a></td>
      </tr>
    </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>
    </div>


    <h2  id="top2_submitting">#2 - Submitting Country</h2>

<h3  class="product_cat1">Submitting Country - Percentage by Country</h3>

    <div class="datatable-container">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody> 
        <tr>
            <th style="text-align:center;">Total</th>
            <th style="text-align:center;">2022 vs 2023</th>
            </tr>    
            <tr>
            <td style="text-align:center; width:49%" id="product-cat-1-submitting-country-percentage">
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-submitting-country-total-alerts-percentage.png">
                <img src="https://rodders.me/safetygate/img-2023/product-1-submitting-country-total-alerts-percentage.png"  class="change"></a></td>
            <td style="text-align:center; width:49%" id="product-cat-1-submitting-country-2022vs2023" >
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-submitting-country-ly-vs-ty.png">
                <img src="https://rodders.me/safetygate/img-2023/product-1-submitting-country-ly-vs-ty.png"  class="change"></a></td>
            </tr> 
            </tbody>
          </table>
          <a href="#" class="gototop">Go to Top</a>
        </div>   

    
    <h3  class="product_cat1" >Submitting Country - Annual, Cumulative and Year on Year change</h3>
    
        <div class="datatable-container">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
                
        <tr>
            <th style="text-align:center;">Annual Total</th>
            <th style="text-align:center;">Cumulative Total and YoY Change</th>
        </tr> 
        <tr>
            <td style="text-align:center; width:49%" id="product-cat-1-submitting-country-annual" >
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-submitting-country-annual-alerts.png">
                <img src="https://rodders.me/safetygate/img-2023/product-1-submitting-country-annual-alerts.png"  class="change"></a></td>
            <td style="text-align:center; width:49%" id="product-cat-1-submitting-country-annual-percentage">
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-submitting-country-annual-percentage.png">
                <img src="https://rodders.me/safetygate/img-2023/product-1-submitting-country-annual-percentage.png" class="change" ></a></td>
        </tr> 
    
        </tbody>
        </table>
        <a href="#" class="gototop">Go to Top</a>
        </div>


        <h2  id="top2_brands">#2 - Top Brands</h2>


<h3  class="product_cat1" >Top Brands for Safety Alerts</h3>
    <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-top-brands">
    <tbody> 
    <tr >
    <th >Top 30 Brands</th>
    </tr>
    </thead>
    <tbody>
    <tr >
    <td style="text-align: center;">
      <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-top-30-brands-for-safety-alerts.png">
        <img src="https://rodders.me/safetygate/img-2023/product-1-top-30-brands-for-safety-alerts.png" class="change"></td>
    </tr>
    </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>
    </div>




<!-- Product 2 -->
<h2  id="top3_">#3 - Product Category</h1>

<h3 class="product_cat2" id="top3_percent">Product Category - Percentage of Total</h3>

    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-percentage">
        <tbody> 
        <tr>
          <th style="text-align:center;">Total</th>
        
            
        </tr>    
        <tr>
          <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-total-alerts-percentage-of-all.png">
              <img src="https://rodders.me/safetygate/img-2023/product-2-total-alerts-percentage-of-all.png" class="change" ></a></td>      
        
        </tr> 
</tbody>
</table>
<a href="#" class="gototop">Go to Top</a>
</div>

<h3 class="product_cat2" id="top3_annual">Product Category - Annual, Cumulative and Year on Year change </h3>
  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 
      <tr>
        <th style="text-align:center;">Annual Alerts</th>
        <th style="text-align:center;">Cumulative Total and YoY Change</th>
      </tr> 
      <tr>
        <td style="text-align:center; width:49%" id="product-cat-2-annual-cumulative">
          <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-annual-and-cumulative-alerts.png">
            <img src="https://rodders.me/safetygate/img-2023/product-2-annual-and-cumulative-alerts.png" class="change" ></a></td>
        <td style="text-align:center; width:49%" id="product-cat-2-annual-yoy-change">
          <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-annual-cumulative-alerts-and-yoy-change.png">
            <img src="https://rodders.me/safetygate/img-2023/product-2-annual-cumulative-alerts-and-yoy-change.png" class="change"></a></td>
      </tr> 
       
      </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>
  </div>
 
    <h2  id="top3_risk">#3 - Risk Category</h2>
<h3  class="product_cat2">Risk Category - Percentage by Type</h3>
    
    <div class="datatable-container">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody> 
        <tr>
            <th style="text-align:center;">Total</th>
            <th style="text-align:center;">2022 Vs 2023</th>
        </tr>  
        <tr>
          <td style="text-align:center; width:49%" id="product-cat-2-risk-category-percentage">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-risk-category-total-alerts-percentage.png">
              <img src="https://rodders.me/safetygate/img-2023/product-2-risk-category-total-alerts-percentage.png"  class="change"></a></td>
          <td style="text-align:center; width:49%" id="product-cat-2-risk-category-2022vs2023">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-risk-category-ly-vs-ty.png">
              <img src="https://rodders.me/safetygate/img-2023/product-2-risk-category-ly-vs-ty.png"  class="change"></a></td>
      </tr> 
      </tbody>
      </table>
      <a href="#" class="gototop">Go to Top</a>
    </div>


<h3 class="product_cat2">Risk Category - Annual, Cumulative and Year on Year change</h3>
  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tr>
            <th style="text-align:center;">Annual Total</th>
            <th style="text-align:center;">Cumulative Total and YoY Change</th>
        </tr> 
        <tr>
            <td style="text-align:center; width:49%" id="product-cat-2-risk-category-annual">
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-risk-category-annual-alerts.png">
                <img src="https://rodders.me/safetygate/img-2023/product-2-risk-category-annual-alerts.png" class="change" ></a></td>
            <td style="text-align:center; width:49%" id="product-cat-2-risk-category-annual-percentage">
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-risk-category-annual-alerts-percentage.png">
                <img src="https://rodders.me/safetygate/img-2023/product-2-risk-category-annual-alerts-percentage.png" class="change" ></a></td>
        </tr> 
    
        </tbody>
        </table>
        <a href="#" class="gototop">Go to Top</a>
        </div>


        <h2  id="top3_counterfeit">#3 - Counterfeit</h2>

<h3 class="product_cat2">Counterfeit - Percentage by Type</h3>


    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 
        <tr>
          <th style="text-align:center;">Total</th>
          <th style="text-align:center;">2022 Vs 2023</th>
        </tr>    
        <tr>
          <td style="text-align:center; width:49%" id="product-cat-2-counterfeit-type-percentage">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-counterfeit-total-alerts-percentage.png">
              <img src="https://rodders.me/safetygate/img-2023/product-2-counterfeit-total-alerts-percentage.png"  class="change"></a></td>
          <td style="text-align:center; width:49%" id="product-cat-2-counterfeit-type-2022vs2023" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-counterfeit-ly-vs-ty.png">
              <img src="https://rodders.me/safetygate/img-2023/product-2-counterfeit-ly-vs-ty.png"  class="change"></a></td>
        </tr> 
        </tbody>
        <a href="#" class="gototop">Go to Top</a></div>
      </table>


<h3  class="product_cat2">Counterfeit - Annual, Cumulative and Year on Year change</h3>

    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tr>
          <th style="text-align:center;">Annual Total</th>
          <th style="text-align:center;">Cumulative Total and YoY Change</th>
        </tr> 
        <tr>
          <td style="text-align:center; width:49%" id="product-cat-2-counterfeit-type-annual">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-counterfeit-annual-alerts.png">
              <img src="https://rodders.me/safetygate/img-2023/product-2-counterfeit-annual-alerts.png" class="change" ></a></td>
          <td style="text-align:center; width:49%" id="product-cat-2-counterfeit-type-annual-percentage">
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-counterfeit-annual-alerts-percentage.png">
              <img src="https://rodders.me/safetygate/img-2023/product-2-counterfeit-annual-alerts-percentage.png"  class="change"></a></td>
        </tr> 
      </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>
    </div>   

    <h2  id="top3_action_responsible">#3 - Action Required / Responsible Party</h2>

<h3  class="product_cat2" >Voluntary / Compulsory Action Required / Responsible Party</h3>

    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 
        <tr id="product-cat-2-action-required-responsible-party-2022vs2023">
          <th style="text-align:center;">Required Action 2022 Vs 2023</th>
          <th style="text-align:center;">Responsible Party 2022 Vs 2023</th>
        </tr > 
        <tr id="product-cat-2-action-required-responsible-party-2022vs2023">
          <td style="text-align:center; width:49%" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-action-required-ly-vs-ty.png">
              <img src="https://rodders.me/safetygate/img-2023/product-2-action-required-ly-vs-ty.png"  class="change"></a></td>
          <td style="text-align:center; width:49%" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-responsible-party-ly-vs-ty.png">
            <img src="https://rodders.me/safetygate/img-2023/product-2-responsible-party-ly-vs-ty.png" class="change" ></a></td>
      </tr>
        <tr id="product-cat-2-action-required-responsible-party-annual">
          <th style="text-align:center;">Annual Required Action</th>
          <th style="text-align:center;">Annual Responsible Party</th>
        </tr> 
        <tr id="product-cat-2-action-required-responsible-party-annual">
          <td style="text-align:center; width:49%" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-action-required-annual-alerts.png">
              <img src="https://rodders.me/safetygate/img-2023/product-2-action-required-annual-alerts.png"  class="change"></a></td>
          <td style="text-align:center; width:49%" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-responsible-party-annual-alerts.png">
              <img src="https://rodders.me/safetygate/img-2023/product-2-responsible-party-annual-alerts.png" class="change" ></a></td>
      </tr>
        <tr id="product-cat-2-action-required-responsible-party-total">
            <th style="text-align:center;">Total Required Action</th>
            <th style="text-align:center;">Total Responsible Party</th>
          </tr> 
        <tr id="product-cat-2-action-required-responsible-party-total">
          <td style="text-align:center; width:49%" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-action-required-total-alerts.png">
            <img src="https://rodders.me/safetygate/img-2023/product-2-action-required-total-alerts.png" class="change" ></a></td>
          <td style="text-align:center; width:49%" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-responsible-party-total-alerts.png">
            <img src="https://rodders.me/safetygate/img-2023/product-2-responsible-party-total-alerts.png" class="change" ></a></td>
      </tr>
    </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>
    </div>

    <h2  id="top3_submitting">#3 - Submitting Country</h2>


<h3 class="product_cat2">#3 - Submitting Country - Percentage by Country</h3>

    <div class="datatable-container">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody> 
        <tr>
            <th style="text-align:center;">Total</th>
            <th style="text-align:center;">2022 vs 2023</th>
            </tr>    
            <tr>
            <td style="text-align:center; width:49%" id="product-cat-2-submitting-country-percentage">
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-submitting-country-total-alerts-percentage.png">
                <img src="https://rodders.me/safetygate/img-2023/product-2-submitting-country-total-alerts-percentage.png"  class="change"></a></td>
            <td style="text-align:center; width:49%" id="product-cat-2-submitting-country-2022vs2023">
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-submitting-country-ly-vs-ty.png">
                <img src="https://rodders.me/safetygate/img-2023/product-2-submitting-country-ly-vs-ty.png"  class="change"></a></td>
            </tr> 
            </tbody>
          </table>
          <a href="#" class="gototop">Go to Top</a>
        </div>   

    
    <h3  class="product_cat2" >#3 - Submitting Country - Annual, Cumulative and Year on Year change</h3>
    
        <div class="datatable-container">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
                
        <tr>
            <th style="text-align:center;">Annual Total</th>
            <th style="text-align:center;">Cumulative Total and YoY Change</th>
        </tr> 
        <tr>
            <td style="text-align:center; width:49%" id="product-cat-2-submitting-country-annual">
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-submitting-country-annual-alerts.png">
                <img src="https://rodders.me/safetygate/img-2023/product-2-submitting-country-annual-alerts.png"  class="change"></a></td>
            <td style="text-align:center; width:49%" id="product-cat-2-submitting-country-annual-percentage">
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-submitting-country-annual-percentage.png">
                <img src="https://rodders.me/safetygate/img-2023/product-2-submitting-country-annual-percentage.png" class="change" ></a></td>
        </tr> 
    
        </tbody>
        </table>
        <a href="#" class="gototop">Go to Top</a>
        </div>

<h3  class="product_cat2"  id="top3_brands">#3 - Top Brands for Safety Alerts</h3>
    <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-top-brands">
    <tbody> 
    <tr >
    <th >Top 30 Brands</th>
    </tr>
    </thead>
    <tbody>
    <tr >
    <td style="text-align: center;">
      <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-top-30-brands-for-safety-alerts.png">
        <img src="https://rodders.me/safetygate/img-2023/product-2-top-30-brands-for-safety-alerts.png" class="change"></td>
    </tr>
    </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>
    </div>


</div>

<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<script src="projects-2023.js"> </script>

<script>
  // Hover tips
  tippy('#CompareCountries', {content: 'Select any two countries and click compare to view the visualisations side by side.', theme: 'tomato'});
  tippy('#JumptoSection', {content: 'Select a section to jump to.', theme: 'tomato'});
  tippy('#CountryReport', {content: 'Select a Country to view a detailed report or compare countries.', theme: 'tomato', placement: 'left',});

  tippy('#Countrytop3', {content: 'Top3 Product and Risk Categories for country.', theme: 'tomato', placement: 'left',});


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
      {content: '<b><u>#1 Product Category</u></b><br>Voluntary / Compulsory<br>Action Required / Responsible Party<br>2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', 
      theme: 'tomato', allowHTML: true,});

  tippy('#product-cat-0-action-required-responsible-party-annual', 
      {content: '<b><u>#1 Product Category</u></b><br>Voluntary / Compulsory<br>Action Required / Responsible Party<br>Annual safety alerts issued to Country of product origin.', 
      theme: 'tomato', allowHTML: true,});

  tippy('#product-cat-0-action-required-responsible-party-total', 
      {content: '<b><u>#1 Product Category</u></b><br>Voluntary / Compulsory<br>Action Required / Responsible Party<br>Total safety alerts issued to Country of Product Origin.', 
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
      {content: '<b><u>#2 Product Category</u></b><br>Voluntary / Compulsory<br>Action Required / Responsible Party<br>2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', 
      theme: 'tomato', allowHTML: true,});

  tippy('#product-cat-1-action-required-responsible-party-annual', 
      {content: '<b><u>#2 Product Category</u></b><br>Voluntary / Compulsory<br>Action Required / Responsible Party<br>Annual safety alerts issued to Country of product origin.', 
      theme: 'tomato', allowHTML: true,});

  tippy('#product-cat-1-action-required-responsible-party-total', 
      {content: '<b><u>#2 Product Category</u></b><br>Voluntary / Compulsory<br>Action Required / Responsible Party<br>Total safety alerts issued to Country of Product Origin.', 
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
      {content: '<b><u>#3 Product Category</u></b><br>Voluntary / Compulsory<br>Action Required / Responsible Party<br>2022 Vs 2023 percentage of safety alerts issued to Country of Product Origin.', 
      theme: 'tomato', allowHTML: true,});

  tippy('#product-cat-2-action-required-responsible-party-annual', 
      {content: '<b><u>#3 Product Category</u></b><br>Voluntary / Compulsory<br>Action Required / Responsible Party<br>Annual safety alerts issued to Country of product origin.', 
      theme: 'tomato', allowHTML: true,});

  tippy('#product-cat-2-action-required-responsible-party-total', 
      {content: '<b><u>#3 Product Category</u></b><br>Voluntary / Compulsory<br>Action Required / Responsible Party<br>Total safety alerts issued to Country of Product Origin.', 
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



</body>

</html>


