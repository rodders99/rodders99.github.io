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

<title>EU Safety Report Compare Countries</title>

</head>

<body >


<!-- NAVIGATION MENU-->

                    
          
    <div class="page-container">
        <div class="toolbar" >
            
            <!-- JUMP TO MENU-->
            <!-- <span class="menu dropbtn" style="align-items:center;" onclick="openNav()"><i style="align-items:center" class="material-icons" style="font-size:24px; color: white">menu</i>&nbsp;Menu</span> -->
            <?php include 'menu-2023.php'; ?></div>
            <div id="JumptoSection"><h2>Jump to section</h2></div>
          <div class="countries">
            <div id="JumptoSection" >
                <select onchange="window.location.hash=this.value" class="country">
                <option value="country_percent_total">Percentage of Total Worldwide Alerts</option>
                <option value="annual">Annual, Cumulative & YoY Change</option>
                <option value="top3s">Top 3 Product and Risk Categories</option>
                <option value="Product Category">Product Category</option>
                <option value="risk">Risk Category</option>
                <option value="counterfeit">Counterfeit</option>
                <option value="responsible_action">Compulsory / Voluntary - Action Required / Responsible Party</option>
                <option value="submitting">Submitting Country</option>
                <option value="top3_categories">Top 3 Product Categories</option>
                <option value="top1_">#1 - Product Category</option>
                <option value="top1_annual">&nbsp;&nbsp;&nbsp;#1 - Annual, Cumulative &amp; YoY Change</option>
                <option value="top1_risk">&nbsp;&nbsp;&nbsp;#1 - Risk Category</option>
                <option value="top1_counterfeit">&nbsp;&nbsp;&nbsp;#1 - Counterfeit</option>
                <option value="top1_action_responsible">&nbsp;&nbsp;&nbsp;#1 - Compulsory / Voluntary - Action Required / Responsible Party</option>
                <option value="top1_submitting">&nbsp;&nbsp;&nbsp;#1 - Submitting Country</option>
                <option value="top1_brands">&nbsp;&nbsp;&nbsp;#1 - Top Brands for Safety Alerts</option>
                <option value="top2_">#2 - Product Category</option>
                <option value="top2_annual">&nbsp;&nbsp;&nbsp;#2 - Annual, Cumulative &amp; YoY Change</option></option>
                <option value="top2_risk">&nbsp;&nbsp;&nbsp;#2 - Risk Category</option>
                <option value="top2_counterfeit">&nbsp;&nbsp;&nbsp;#2 - Counterfeit</option>
                <option value="top2_action_responsible">&nbsp;&nbsp;&nbsp;#2 - Compulsory / Voluntary - Action Required / Responsible Party</option>
                <option value="top2_submitting">&nbsp;&nbsp;&nbsp;#2 - Submitting Country</option>
                <option value="top2_brands">&nbsp;&nbsp;&nbsp;#2 - Top Brands for Safety Alerts</option>
                <option value="top3_">#3 - Top 3 Product Categories</option>
                <option value="top3_annual">&nbsp;&nbsp;&nbsp;#3 - Annual, Cumulative &amp; YoY Change</option>
                <option value="top3_risk">&nbsp;&nbsp;&nbsp;#3 - Risk Category</option>
                <option value="top3_counterfeit">&nbsp;&nbsp;&nbsp;#3 - Counterfeit</option>
                <option value="top3_action_responsible">&nbsp;&nbsp;&nbsp;#3 - Compulsory / Voluntary - Action Required / Responsible Party</option>
                <option value="top3_submitting">&nbsp;&nbsp;&nbsp;#3 - Submitting Country</option>
                <option value="top3_brands">&nbsp;&nbsp;&nbsp;#3 - Top Brands for Safety Alerts</option>
            </select></div>
                    
                            <div id="CompareCountries"><h2>Compare Countries</h2></div>
                            <div id="CompareCountries" class="country"><select id="country1" >
                            <option value="china">China</option>
                            <option value="france">France</option>
                            <option value="germany">Germany</option>
                            <option value="india">India</option>
                            <option value="italy">Italy</option>
                            <option value="japan">Japan</option>
                            <option value="netherlands">The Netherlands</option>
                            <option value="poland">Poland</option>
                            <option value="spain">Spain</option>
                            <option value="sweden">Sweden</option>
                            <option value="taiwan">Taiwan</option>
                            <option value="turkey">Turkey</option>
                            <option value="uk">UK</option>
                            <option value="usa">USA</option>
                            <option value="unknown">Unknown</option>
                            <option value="other">Other</option>
                            
                            
                        </select>
        
                        <select id="country2" class="country">
                            <option value="china">China</option>
                            <option value="france">France</option>
                            <option value="germany">Germany</option>
                            <option value="india">India</option>
                            <option value="italy">Italy</option>
                            <option value="japan">Japan</option>
                            <option value="netherlands">The Netherlands</option>
                            <option value="poland">Poland</option>
                            <option value="spain">Spain</option>
                            <option value="sweden">Sweden</option>
                            <option value="taiwan">Taiwan</option>
                            <option value="turkey">Turkey</option>
                            <option value="uk">UK</option>
                            <option value="usa">USA</option>
                            <option value="unknown">Unknown</option>
                            <option value="other">Other</option>
                        </select>
                            
                            
        <button onclick="redirectToComparison()" class="country">Compare</button> </div>
</div>
<!-- </div> -->

    <h1 >EU Safetygate report - Compare Countries</h1>
    <p><img src="https://rodders.me/safetygate/img-2023/icons/Safety_Gate_Logo.png" alt="Safety Gate Logo" style="width:50%"></p>
    
    <p class='last-updated'><?php include '../tables-2024/last-updated.php' ?></p>


<!-- <div id="tableOfContents"></div> -->


<h4>Compare Countries</h4>
<h4 id="country_percent_total">Countries - 2005-2024 Alerts Percentage of Worldwide Total</h4>
<h3>Percentage of Total Worldwide Alerts</h3>
    <div class="datatable-container" >
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="country-total-alerts-vs-row">
        <tbody> 
          <tr id="country-row-vs-total-alerts">
            <th style="text-align:center;width:10%">% of Total Alerts</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-total-alerts-issued-vs-row-percentage.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/total-alerts-issued-vs-row-percentage.png" class="country1" >
                </a></td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-total-alerts-issued-vs-row-percentage.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/total-alerts-issued-vs-row-percentage.png" class="country2" >
                </a></td>
            
        </tr>
    </tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h3>Country as percentage of Total Worldwide Alerts Previous Year Vs Current Year</h3>

<div class="datatable-container" id="country-2022vs2023">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" >
  <tbody>   
        <tr>
            <th style="text-align:center;width:10%">Previous Year Vs Current Year</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-total-alerts-issued-vs-row-ly-vs-ty.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/total-alerts-issued-vs-row-ly-vs-ty.png" class="country1" >
                </a></td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-total-alerts-issued-vs-row-ly-vs-ty.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/total-alerts-issued-vs-row-ly-vs-ty.png" class="country2" >
                </a></td>
        </tr>
      </tbody>
      </table>
      </div>
      <br><a href="#" class="gototop">Go to Top</a>

      <h4 id="annual">Annual, Cumulative Total</h4>
      <div class="datatable-container" id="country-annual-cumulative">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" >
        <tbody> 
          <tr>
            <th style="text-align:center;width:10%">Annual and Cumulative</th>
            <td style="text-align:center;" >
                <A href="https://rodders.me/safetygate/img-2023/all-annual-and-cumulative-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/annual-and-cumulative-alerts.png" class='country1'/></a>
            </td>
            <td style="text-align:center;" >
                <A href="https://rodders.me/safetygate/img-2023/all-annual-and-cumulative-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/annual-and-cumulative-alerts.png" class='country2'/></a>
            </td>
                </tr>

            </tbody>
        </table>
        </div>
        <br><a href="#" class="gototop">Go to Top</a>
        
        <h4 id="annual">Annual, Cumulative & YoY Change</h4>
         
        <div class="datatable-container" id="country-annual-yoy-change">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" >
        <tbody>
            <tr>
                <th style="text-align:center;width:10%">Annual Cumulative and YoY Change</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-annual-cumulative-alerts-and-yoy-change.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/annual-cumulative-alerts-and-yoy-change.png"  class="country1" ></a>
                </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-annual-cumulative-alerts-and-yoy-change.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/annual-cumulative-alerts-and-yoy-change.png"  class="country2" ></a>
                </td>
      
            </tr>
          </tbody>
        </table>
      </div>
      <br><a href="#" class="gototop">Go to Top</a>


      <h2 id="top3s">Top 3 Product and Risk Categories</h2>
         
      <div class="datatable-container" id="country-top3">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" >
      <tbody>
          <tr>
              <th style="text-align:center;width:10%">% Of Total</th>
              <td style="text-align:center;" >
                  <a href="https://rodders.me/safetygate/img-2023/all-top3s.png" class="country1">
                  <img src="https://rodders.me/safetygate/img-2023/top3s.png"  class="country1" ></a>
              </td>
              <td style="text-align:center;" >
                  <a href="https://rodders.me/safetygate/img-2023/all-top3s.png" class="country2">
                  <img src="https://rodders.me/safetygate/img-2023/top3s.png"  class="country2" ></a>
              </td>
    
          </tr>
        </tbody>
      </table>
    </div>
    <br><a href="#" class="gototop">Go to Top</a>

    <h2 id="Product Category">Product Category</h2>
      <h4>Percentage of Total</h4>

      <div class="datatable-container" id="product-category-percentage">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto"  >
        <tbody> 
          <tr>
            <th style="text-align:center;width:10%">Total</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-category-total-alerts-percentage.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-category-total-alerts-percentage.png" class="country1" ></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-category-total-alerts-percentage.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-category-total-alerts-percentage.png" class="country2" ></a>
                </td>
        </tr> 
    </tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h4>Previous Year Vs Current Year</h4>

<div class="datatable-container" id="product-category-2022vs2023">
<table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" >
<tbody> 
        <tr>
            <th style="text-align:center;width:10%">Previous Year Vs Current Year</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-category-ly-vs-ty.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-category-ly-vs-ty.png" class="country1" ></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-category-ly-vs-ty.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-category-ly-vs-ty.png" class="country2" ></a>
                </td>
        </tr>
        </tbody>
      </table>
      </div>
      <br><a href="#" class="gototop">Go to Top</a>
      
      <h4>Annual Total</h4>
      
      <div class="datatable-container" id="product-category-annual">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" >
      <tbody>
          <tr>
            <th style="text-align:center;width:10%">Annual Count</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-category-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-category-annual-alerts.png" class="country1" ></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-category-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-category-annual-alerts.png" class="country2" ></a>
                </td>
        </tr>
        
    </tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h4>Annual / Percentage of Total</h4>

<div class="datatable-container" id="product-category-annual-percentage">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
<tbody>
        <tr>
              <th style="text-align:center;">Annual Percent of Total</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-category-annual-alerts-percentage.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-category-annual-alerts-percentage.png"  class="country1"></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-category-annual-alerts-percentage.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-category-annual-alerts-percentage.png"  class="country2"></a>
                </td>
        </tr>
      </tbody>
      </table>
      </div>
      <br><a href="#" class="gototop">Go to Top</a>


      <h2 id="risk">Risk Category</h2>
      <h4>Percentage by Type</h4>

      <div class="datatable-container" id="risk-category-percentage">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody> 
          <tr>
            <th style="text-align:center;width:10%">Total</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-risk-category-total-alerts-percentage.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/risk-category-total-alerts-percentage.png" class="country1" ></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-risk-category-total-alerts-percentage.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/risk-category-total-alerts-percentage.png" class="country2" ></a>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
    <br><a href="#" class="gototop">Go to Top</a>

    <h4>Previous Year Vs Current Year</h4>

    <div class="datatable-container" id="risk-category-2022vs2023">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody>  
            <tr>
              <th style="text-align:center;width:10%">Previous Year Vs Current Year</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-risk-category-ly-vs-ty.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/risk-category-ly-vs-ty.png" class="country1" ></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-risk-category-ly-vs-ty.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/risk-category-ly-vs-ty.png" class="country2" ></a>
                </td>
        </tr>
      </tbody>
      </table>
      </div>
      <br><a href="#" class="gototop">Go to Top</a>
      
      <h4>Annual Total</h4>
      
      <div class="datatable-container" id="risk-category-annual">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      
          <tr>
            <th style="text-align:center;width:10%">Annual Count</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-risk-category-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/risk-category-annual-alerts.png" class="country1" ></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-risk-category-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/risk-category-annual-alerts.png" class="country2" ></a>
                </td>
            </tr> 


        </tbody>
    </table>
    </div>
    <br><a href="#" class="gototop">Go to Top</a>


       <h4>Annual Percentage of Total</h4>

    <div class="datatable-container" id="risk-category-annual">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" >
      <tbody> 

        <tr>
            <th style="text-align:center;">Annual Percent of Total</th>
                <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-risk-category-annual-alerts-percentage.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/risk-category-annual-alerts-percentage.png" class="country1" ></a>
                </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-risk-category-annual-alerts-percentage.png" class="country2">
                        <img src="https://rodders.me/safetygate/img-2023/risk-category-annual-alerts-percentage.png" class="country2" ></a>
                    </td>
        </tr>
      </tbody>
      </table>
      </div>
      <br><a href="#" class="gototop">Go to Top</a>

      <h2 id="counterfeit">Counterfeit</h2>
      <h4>Percentage by Type</h4>

      <div class="datatable-container" id="counterfeit-category-percentage">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody> 
        <tr>
            <th style="text-align:center;width:10%">Total</th>


            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-counterfeit-total-alerts-percentage.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/counterfeit-total-alerts-percentage.png" class="country1" ></a>
                </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-counterfeit-total-alerts-percentage.png" class="country2">
                        <img src="https://rodders.me/safetygate/img-2023/counterfeit-total-alerts-percentage.png" class="country2" ></a>
            </td>
        </tr>
    </tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h4>Previous Year Vs Current Year</h4>

<div class="datatable-container" id="counterfeit-category-2022vs2023">
<table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
<tbody> 
        <tr>
            <th style="text-align:center;width:10%">Previous Year Vs Current Year</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-counterfeit--ly-vs-ty.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/counterfeit-ly-vs-ty.png" class="country1" ></a>
            </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-counterfeit--ly-vs-ty.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/counterfeit-ly-vs-ty.png" class="country2" ></a>
            </td>
        </tr>
      </tbody>
      </table>
      </div>
      <br><a href="#" class="gototop">Go to Top</a>
      
      <h4>Annual Total</h4>
      
      <div class="datatable-container" id="counterfeit-category-annual">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      
          <tr>
            <th style="text-align:center;width:10%">Annual Count</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-counterfeit-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/counterfeit-annual-alerts.png" class="country1" ></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-counterfeit-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/counterfeit-annual-alerts.png" class="country2" ></a>
                </td>

        </tr> 

    </tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h4>Annual Percentage of Total</h4>

<div class="datatable-container" id="counterfeit-category-annual-percentage">
<table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
<tbody> 

        <tr>
            <th style="text-align:center;width:10%">Annual Percent of Total</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-counterfeit-annual-alerts-percentage.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/counterfeit-annual-alerts-percentage.png" class="country1"></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-counterfeit-annual-alerts-percentage.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/counterfeit-annual-alerts-percentage.png" class="country2"></a>
                </td>
        </tr>

      </tbody>
      </table>
      </div>
      <br><a href="#" class="gototop">Go to Top</a>



      <h2 id="responsible_action">Compulsory / Voluntary - Action Required / Responsible Party</h2>
<h4>Previous Year Vs Current Year</h4>
      <div class="datatable-container" id="action-required-responsible-party-2022vs2023">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody> 
          <tr>
            <th style="text-align:center;width:10%">Action Required Previous Year Vs Current Year</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-action-required-ly-vs-ty.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/action-required-ly-vs-ty.png" class="country1"></a></td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-action-required-ly-vs-ty.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/action-required-ly-vs-ty.png" class="country2"></a></td>

        </tr> 
        
        <tr>
              <th style="text-align:center;">Responsible Party Previous Year Vs Current Year</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-responsible-party-ly-vs-ty.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/responsible-party-ly-vs-ty.png" class="country1" ></a></td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-responsible-party-ly-vs-ty.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/responsible-party-ly-vs-ty.png" class="country2" ></a></td>
        </tr>
    </tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>


<h4>Annual Alerts</h4>

<div class="datatable-container" id="action-required-responsible-party-annual">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
          <tr>
            <th style="text-align:center;">Annual Action Required </th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-action-required-annual-alerts.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/action-required-annual-alerts.png" class="country1"></a></td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-action-required-annual-alerts.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/action-required-annual-alerts.png" class="country2"></a></td>

        </tr> 

        <tr>
              <th style="text-align:center;">Annual Responsible Party</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-responsible-party-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/responsible-party-annual-alerts.png" class="country1" ></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-responsible-party-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/responsible-party-annual-alerts.png" class="country2" ></a>
                </td>
        </tr>
    </tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>


<h4>Total Alerts</h4>

<div class="datatable-container" id="action-required-responsible-party-total">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
          <tr>
            <th style="text-align:center;">Total Action Required</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-action-required-total-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/action-required-total-alerts.png" class="country1" ></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-action-required-total-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/action-required-total-alerts.png" class="country2" ></a>
                </td>
        </tr> 
        <tr>
              <th style="text-align:center;">Total Responsible Party</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-responsible-party-total-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/responsible-party-total-alerts.png" class="country1" ></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-responsible-party-total-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/responsible-party-total-alerts.png" class="country2" ></a>
                </td>
        </tr>
      </tbody>
      </table>
      </div>
      <br><a href="#" class="gototop">Go to Top</a>

<h2 id="submitting">Submitting Country</h2>
      <h4>Percentage by Country</h4>

      <div class="datatable-container" id="submitting-country-percentage">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody> 
          <tr>
            <th style="text-align:center;width:10%">Total</th>
            <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-submitting-country-total-alerts-percentage.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/submitting-country-total-alerts-percentage.png" class="country1" ></a>
            </td>
            <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-submitting-country-total-alerts-percentage.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/submitting-country-total-alerts-percentage.png" class="country2" ></a>
            </td>
        </tr> 

    </tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h4>Previous Year Vs Current Year</h4>

<div class="datatable-container" id="submitting-country-2022vs2023">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
        <tr>
              <th style="text-align:center;width:10%">Previous Year Vs Current Year</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-submitting-country-ly-vs-ty.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/submitting-country-ly-vs-ty.png" class="country1" ></a>
            </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-submitting-country-ly-vs-ty.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/submitting-country-ly-vs-ty.png" class="country2" ></a>
            </td>
        </tr>
      </tbody>
      </table>
      </div>
      <br><a href="#" class="gototop">Go to Top</a>
      
      
      <h4>Annual Total</h4>
      
      <div class="datatable-container" id="submitting-country-annual">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
          <tr>
            <th style="text-align:center;width:10%">Annual Count</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-submitting-country-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/submitting-country-annual-alerts.png"  class="country1"></a></td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-submitting-country-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/submitting-country-annual-alerts.png"  class="country2"></a>
                </td>
            </tr> 

        </tbody>
    </table>
    </div>
    <br><a href="#" class="gototop">Go to Top</a>
    
    <h4>Percentage of Total</h4>
    
    <div class="datatable-container" id="submitting-country-annual-percentage">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 
        <tr>
              <th style="text-align:center;">Annual Percent of Total</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-submitting-country-annual-alerts-percentage.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/submitting-country-annual-alerts-percentage.png"  class="country1"></a></td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-submitting-country-annual-alerts-percentage.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/submitting-country-annual-alerts-percentage.png"  class="country2"></a>
                </td>
            </tr>
      </tbody>
      </table>
      </div>
      <br><a href="#" class="gototop">Go to Top</a>
      


      <!-- Product 0 -->
<H1 >Top 3 Product Categories</H1>

<h1 id="top1_">#1 - Product Category</h1>


<h4">Category Percentage of Total Alerts for Country</h4>

    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-percentage">
        <tbody> 
  
        <tr>
          <th style="text-align:center;width:10%">Total</th>
          <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-0-total-alerts-percentage-of-all.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/product-0-total-alerts-percentage-of-all.png" class="country1" >
            </a>
        </td>      
          <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-0-total-alerts-percentage-of-all.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/product-0-total-alerts-percentage-of-all.png" class="country2" >
            </a>
        </td>      
        
            
        </tr>    
        <tr>
        
        </tr> 
</tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h2 id="top1_annual">#1 - Annual, Cumulative & YoY Change</h2>
<h4>Annual Total</h4>
  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-annual-cumulative">
      <tbody> 
      <tr>
        <th style="text-align:center;width:10%">Annual Alerts</th>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-0-annual-and-cumulative-alerts.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/product-0-annual-and-cumulative-alerts.png" class="country1" ></a>
            </td>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-0-annual-and-cumulative-alerts.png" class="country2">
            <img src="https://rodders.me/safetygate/img-2023/product-0-annual-and-cumulative-alerts.png" class="country2" ></a>
        </td>
    </tr> 

</tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>


<h4>Annual Cumulative and YoY Change</h4>
  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-annual-yoy-change">
      <tbody> 
    <tr>
          <th style="text-align:center;width:10%">Annual Cumulative and YoY Change</th>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-0-annual-cumulative-alerts-and-yoy-change.png" class="country1">
            <img src="https://rodders.me/safetygate/img-2023/product-0-annual-cumulative-alerts-and-yoy-change.png"  class="country1"></a>
        </td>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-0-annual-cumulative-alerts-and-yoy-change.png" class="country2">
            <img src="https://rodders.me/safetygate/img-2023/product-0-annual-cumulative-alerts-and-yoy-change.png"  class="country2"></a>
        </td>
      </tr> 
       
      </tbody>
    </table>
  </div>
  <br><a href="#" class="gototop">Go to Top</a>


  <h2 id="top1_risk">#1 - Risk Category</h2>
  <h4>Percentage by Type</h4>
    
    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-risk-category-percentage">
      <tbody> 
      <tr>
          <th style="text-align:center;width:10%">Total</th>
          <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-0-risk-category-total-alerts-percentage.png" class="country1">
            <img src="https://rodders.me/safetygate/img-2023/product-0-risk-category-total-alerts-percentage.png"  class="country1"></a>
        </td>
          <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-0-risk-category-total-alerts-percentage.png" class="country2">
            <img src="https://rodders.me/safetygate/img-2023/product-0-risk-category-total-alerts-percentage.png"  class="country2"></a></td>
        </tr></tbody></table></div>
    <h4>Previous Year Vs Current Year</h4>
    
    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-risk-category-2022vs2023">
      <tbody>   
        <tr>
            <th style="text-align:center;width:10%">Previous Year Vs Current Year</th>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-0-risk-category-ly-vs-ty.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/product-0-risk-category-ly-vs-ty.png"  class="country1"></a>
            </td>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-0-risk-category-ly-vs-ty.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/product-0-risk-category-ly-vs-ty.png"  class="country2"></a>
            </td>
    </tr> 
    </tbody>
    </table>
  </div>
  <br><a href="#" class="gototop">Go to Top</a>

  <h4>Annual Total</h4>
  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-risk-category-annual">
        <tr>
            <th style="text-align:center;width:10%">Annual Total</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-risk-category-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-risk-category-annual-alerts.png" class="country1" ></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-risk-category-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-risk-category-annual-alerts.png" class="country2" ></a>
                </td>
        </tr> 

    </tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>


<h4>Percentage of Total</h4>
  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-risk-category-annual-percentage">
      <tbody> 
        <tr>
            <th style="text-align:center;">Annual Percentage of Total</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-risk-category-annual-alerts-percentage.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-risk-category-annual-alerts-percentage.png" class="country1" ></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-risk-category-annual-alerts-percentage.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-risk-category-annual-alerts-percentage.png" class="country2" ></a>
                </td>
        </tr> 
    
        </tbody>
        </table>
        </div>
        <br><a href="#" class="gototop">Go to Top</a>

<h2 id="top1_counterfeit">#1 - Counterfeit ?</h2>
        <h4>Percentage by Type</h4>


        <div class="datatable-container">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-counterfeit-type-percentage">
          <tbody> 
            <tr>
              <th style="text-align:center;width:10%">Total</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-counterfeit-total-alerts-percentage.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-counterfeit-total-alerts-percentage.png"  class="country1"></a>
                </td>
              <td style="text-align:center;" >
              <a href="https://rodders.me/safetygate/img-2023/all-product-0-counterfeit-total-alerts-percentage.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/product-0-counterfeit-total-alerts-percentage.png"  class="country2"></a>
            </td>
            </tr> </tbody></table></div>
            <h4>Previous Year Vs Current Year</h4>
    
  <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-counterfeit-type-2022vs2023">
      <tbody>    
            <tr>
                <th style="text-align:center;width:10%">Previous Year Vs Current Year</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-counterfeit-ly-vs-ty.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/product-0-counterfeit-ly-vs-ty.png"  class="country1"></a>
            </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-counterfeit-ly-vs-ty.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/product-0-counterfeit-ly-vs-ty.png"  class="country2"></a>
            </td>
            </tr> 
            </tbody>
          </table>
        </div>   
        <br><a href="#" class="gototop">Go to Top</a>


        <h4>Annual Total</h4>

        <div class="datatable-container">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-counterfeit-type-annual">
            <tr>
              <th style="text-align:center;width:10%">Annual Total</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-counterfeit-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-counterfeit-annual-alerts.png" class="country1" ></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-counterfeit-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-counterfeit-annual-alerts.png" class="country2" ></a>
                </td>
            </tr> 

        </tbody>
    </table>
    </div>
    <br><a href="#" class="gototop">Go to Top</a>
    
    
    <h4>Annual Percentage of Total</h4>
      <div class="datatable-container">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-counterfeit-type-annual-percentage">
          <tbody> 
            <tr>
                <th style="text-align:center;">Annual Percentage of Total</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-counterfeit-annual-alerts-percentage.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-counterfeit-annual-alerts-percentage.png"  class="country1"></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-counterfeit-annual-alerts-percentage.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-counterfeit-annual-alerts-percentage.png"  class="country2"></a>
                </td>
            </tr> 
          </tbody>
        </table>
        </div>   
        <br><a href="#" class="gototop">Go to Top</a>


<h2 id="top1_action_responsible">#1 - Compulsory / Voluntary - Action Required / Responsible Party</h2>
        <h4>Previous Year Vs Current Year Required Action / Responsible Party</h4>

        <div class="datatable-container">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-action-required-responsible-party-2022vs2023">
          <tbody> 
            <tr>
              <th style="text-align:center;width:10%">Required Action Previous Year Vs Current Year</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-action-required-ly-vs-ty.png" class="country1"
           ><img src="https://rodders.me/safetygate/img-2023/product-0-action-required-ly-vs-ty.png"  class="country1"></a>
            </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-action-required-ly-vs-ty.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-action-required-ly-vs-ty.png"  class="country2"></a>
                </td>
            </tr> 
            <tr>
                <th style="text-align:center;">Responsible Party Previous Year Vs Current Year</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-responsible-party-ly-vs-ty.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-responsible-party-ly-vs-ty.png" class="country1" ></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-responsible-party-ly-vs-ty.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-responsible-party-ly-vs-ty.png" class="country2" ></a>
                </td>
          </tr>
        </tbody>
    </table></div>
    <h4>Annual Required Action / Responsible Party</h>

        <div class="datatable-container">
            <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-action-required-responsible-party-annual">
            <tbody> 
            <tr>
              <th style="text-align:center;width:10%">Annual Required Action</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-action-required-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-action-required-annual-alerts.png"  class="country1"></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-action-required-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-action-required-annual-alerts.png"  class="country2"></a>
                </td>
            </tr> 
            <tr>
                <th style="text-align:center;">Annual Responsible Party</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-responsible-party-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-responsible-party-annual-alerts.png" class="country1" ></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-responsible-party-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-responsible-party-annual-alerts.png" class="country2" ></a>
                </td>
          </tr>
          </tbody></table></div>

          <h4>Total Required Action / Responsible Party</h4>

          <div class="datatable-container">
              <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" if="product-cat-0-action-required-responsible-party-total">
              <tbody> 
            <tr>
                <th style="text-align:center;width:10%">Total Required Action</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-0-action-required-total-alerts.png" class="country1">
                        <img src="https://rodders.me/safetygate/img-2023/product-0-action-required-total-alerts.png" class="country1" ></a>
                    </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-0-action-required-total-alerts.png" class="country2">
                        <img src="https://rodders.me/safetygate/img-2023/product-0-action-required-total-alerts.png" class="country2" ></a>
                    </td>
            </tr> 
            <tr>
                <th style="text-align:center;">Total Responsible Party</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-responsible-party-total-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-responsible-party-total-alerts.png" class="country1" ></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-0-responsible-party-total-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-responsible-party-total-alerts.png" class="country2" ></a>
                </td>
          </tr>
        </tbody>
        </table>
        </div>
        <br><a href="#" class="gototop">Go to Top</a>

        <h2 id="top1_submitting">#1 - Submitting Country</h2>

        <h4>Percentage by Country</h4>

        <div class="datatable-container">
            <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-submitting-country-percentage">
            <tbody> 
            <tr>
                <th style="text-align:center;width:10%">Total</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-0-submitting-country-total-alerts-percentage.png" class="country1">
                        <img src="https://rodders.me/safetygate/img-2023/product-0-submitting-country-total-alerts-percentage.png"  class="country1"></a>
                    </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-0-submitting-country-total-alerts-percentage.png" class="country2">
                        <img src="https://rodders.me/safetygate/img-2023/product-0-submitting-country-total-alerts-percentage.png"  class="country2"></a>
                    </td>
            </tr> </tbody></table></div>
        <h4>Previous Year Vs Current Year</h4>

        <div class="datatable-container">
            <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-submitting-country-2022vs2023">
            <tbody>    
            <tr>
                <th style="text-align:center;width:10%">Previous Year Vs Current Year</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-0-submitting-country-ly-vs-ty.png" class="country1">
                        <img src="https://rodders.me/safetygate/img-2023/product-0-submitting-country-ly-vs-ty.png"  class="country1"></a>
                    </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-0-submitting-country-ly-vs-ty.png" class="country2">
                        <img src="https://rodders.me/safetygate/img-2023/product-0-submitting-country-ly-vs-ty.png"  class="country2"></a>
                    </td>
                </tr> 
                </tbody>
              </table>
            </div>   
            <br><a href="#" class="gototop">Go to Top</a>

        <h4>Annual Total</h4>
    
            <div class="datatable-container">
              <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-submitting-country-annual">
                    
            <tr>
                <th style="text-align:center;width:10%">Annual Total</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-0-submitting-country-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-submitting-country-annual-alerts.png"  class="country1"></a>
                </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-0-submitting-country-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-submitting-country-annual-alerts.png"  class="country2"></a>
                </td>

            </tr> 
        </tbody>
    </table>
    </div>
    <br><a href="#" class="gototop">Go to Top</a>
    
    
    <h4>Annual Percentage of Total</h4>
      <div class="datatable-container">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-0-submitting-country-annual-percentage">
          <tbody> 
            <tr>
                <th style="text-align:center;">Annual Percentage of Total</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-0-submitting-country-annual-percentage.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-0-submitting-country-annual-percentage.png" class="country1" ></a>
                </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-0-submitting-country-annual-percentage.png" class="country2">
                        <img src="https://rodders.me/safetygate/img-2023/product-0-submitting-country-annual-percentage.png" class="country2" ></a>
                    </td>
            </tr> 
        
            </tbody>
            </table>
            </div>
            <br><a href="#" class="gototop">Go to Top</a>
    
    
    
    
    <h2 id="top1_brands">#1 - Top Brands for Safety Alerts</h2>
        <div class="datatable-container">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody> 
        <tr >
        <th style="width:10%">Top 15 Brands</th>
 
 
        <td style="text-align: center">
            <a href="https://rodders.me/safetygate/img-2023/all-product-0-top-30-brands-for-safety-alerts.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/product-0-top-30-brands-for-safety-alerts.png" class="country1">
            </td>
        <td style="text-align: center;">
            <a href="https://rodders.me/safetygate/img-2023/all-product-0-top-30-brands-for-safety-alerts.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/product-0-top-30-brands-for-safety-alerts.png" class="country2">
            </td>
        </tr>
        </tbody>
        </table>
        </div>
        <br><a href="#" class="gototop">Go to Top</a>
    

    <!-- Product 1 -->

<h1 id="top2_">#2 - Product Category</h1>

<h3>Percentage of Total Alerts</h3>

    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-percentage">
        <tbody> 

        <tr>
          <th style="text-align:center;width:10%">Total</th>
          <td style="text-align:center;" >
          <a href="https://rodders.me/safetygate/img-2023/all-product-1-total-alerts-percentage-of-all.png" class="country2">
          <img src="https://rodders.me/safetygate/img-2023/product-1-total-alerts-percentage-of-all.png" class="country1" ></a></td>      
          <td style="text-align:center;" >
          <a href="https://rodders.me/safetygate/img-2023/all-product-1-total-alerts-percentage-of-all.png" class="country2">
          <img src="https://rodders.me/safetygate/img-2023/product-1-total-alerts-percentage-of-all.png" class="country2" ></a></td>      
        
            
        </tr>    
        <tr>
        
        </tr> 
</tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>


<h4 id="top2_annual">Annual & Cumulative Total</h4>
  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-annual-cumulative">
      <tbody> 
      <tr>
        <th style="text-align:center;width:10%">Annual Alerts</th>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-1-annual-and-cumulative-alerts.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/product-1-annual-and-cumulative-alerts.png" class="country1" ></a>
            </td>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-1-annual-and-cumulative-alerts.png" class="country2">
            <img src="https://rodders.me/safetygate/img-2023/product-1-annual-and-cumulative-alerts.png" class="country2" ></a>
        </td>
    </tr> 

</tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>


<h4>Annual Cumulative & YoY Change</h4>
  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-annual-yoy-change">
      <tbody> 

    <tr>
          <th style="text-align:center;width:10%">Annual Cumulative and YoY Change</th>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-1-annual-and-yoy-change.png" class="country1">
            <img src="https://rodders.me/safetygate/img-2023/product-1-annual-cumulative-alerts-and-yoy-change.png"  class="country1"></a>
        </td>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-1-annual-and-yoy-change.png" class="country2">
            <img src="https://rodders.me/safetygate/img-2023/product-1-annual-cumulative-alerts-and-yoy-change.png"  class="country2"></a>
        </td>
      </tr> 
       
      </tbody>
    </table>
  </div>
  <br><a href="#" class="gototop">Go to Top</a>

  <h2 id="top2_risk">#2 - Risk Category</h2>

  <h4>Percentage of Alerts by Type</h4>
    
  <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-risk-category-percentage">
      <tbody> 
      <tr>
          <th style="text-align:center;width:10%">Total</th>
          <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-1-risk-category-total-alerts-percentage.png" class="country1">
            <img src="https://rodders.me/safetygate/img-2023/product-1-risk-category-total-alerts-percentage.png"  class="country1"></a>
        </td>
          <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-1-risk-category-total-alerts-percentage.png" class="country2">
            <img src="https://rodders.me/safetygate/img-2023/product-1-risk-category-total-alerts-percentage.png"  class="country2"></a></td>
        </tr>
    </tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h4>Previous Year Vs Current Year</h4>

<div class="datatable-container">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-risk-category-2022vs2023">
  <tbody>  
        <tr>
            <th style="text-align:center;width:10%">Previous Year Vs Current Year</th>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-1-risk-category-ly-vs-ty.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/product-1-risk-category-ly-vs-ty.png"  class="country1"></a>
            </td>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-1-risk-category-ly-vs-ty.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/product-1-risk-category-ly-vs-ty.png"  class="country2"></a>
            </td>
    </tr> 
    </tbody>
    </table>
  </div>
  <br><a href="#" class="gototop">Go to Top</a>

  <h4>Annual, Cumulative and Year on Year change</h4>
  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-risk-category-annual">
        <tbody>
        <tr>
            <th style="text-align:center;width:10%">Annual Total</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-risk-category-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-risk-category-annual-alerts.png" class="country1" ></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-risk-category-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-risk-category-annual-alerts.png" class="country2" ></a>
                </td>
        </tr> 
    </tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h4>Annual Percentage of Total</h4>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-risk-category-annual-percentage">
    <tbody>
    <tr>
            <th style="text-align:center;width:10%">Annual Percentage of Total</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-risk-category-annual-alerts-percentage.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-risk-category-annual-alerts-percentage.png" class="country1" ></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-risk-category-annual-alerts-percentage.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-risk-category-annual-alerts-percentage.png" class="country2" ></a>
                </td>
        </tr> 
    
        </tbody>
        </table>
        </div>
        <br><a href="#" class="gototop">Go to Top</a>


<h2 id="top2_counterfeit">#2 - Counterfeit</h2>
        <h4>Percentage of Total</h4>


        <div class="datatable-container">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-counterfeit-type-percentage">
          <tbody> 
            <tr>
              <th style="text-align:center;width:10%">Total</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-total-counterfeit-type-percentage-of-all.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-counterfeit-total-alerts-percentage.png"  class="country1"></a>
                </td>
              <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-product-1-total-counterfeit-type-percentage-of-all.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/product-1-counterfeit-total-alerts-percentage.png"  class="country2"></a>
            </td>
            </tr> 
            
        </tbody>
    </table>
    </div>
    <br><a href="#" class="gototop">Go to Top</a>


    <h4>Previous Year Vs Current Year</h4>


    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-counterfeit-type-2022vs2023"> 
      <tbody> 

            <tr>
                <th style="text-align:center;width:10%">Previous Year Vs Current Year</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-total-counterfeit-type-ly-vs-ty.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/product-1-counterfeit-ly-vs-ty.png"  class="country1"></a>
            </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-total-counterfeit-type-ly-vs-ty.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/product-1-counterfeit-ly-vs-ty.png"  class="country2"></a>
            </td>
            </tr> 
            </tbody>
          </table>
        </div>   
        <br><a href="#" class="gototop">Go to Top</a>


        <h4>Annual, Cumulative and Year on Year change</h4>

        <div class="datatable-container">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-counterfeit-type-annual">
          <tbody>
            <tr>
              <th style="text-align:center;width:10%">Annual Total</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-annual-counterfeit-alerts-issued.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-counterfeit-annual-alerts.png" class="country1" ></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-annual-counterfeit-alerts-issued.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-counterfeit-annual-alerts.png" class="country2" ></a>
                </td>
            </tr> 

        </tbody>
    </table>
  </div>   
  <br><a href="#" class="gototop">Go to Top</a>


  <h4>Annual Percentage of Total</h4>

  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-counterfeit-type-annual-percentage">
    <tbody>

            <tr>
                <th style="text-align:center;">Annual Percentage of Total</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-annual-counterfeit-alerts-issued-percentage-by-type.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-counterfeit-annual-alerts-percentage.png"  class="country1"></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-annual-counterfeit-alerts-issued-percentage-by-type.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-counterfeit-annual-alerts-percentage.png"  class="country2"></a>
                </td>
            </tr> 
          </tbody>
        </table>
        </div>   
        <br><a href="#" class="gototop">Go to Top</a>



    <h2 id="top2_action_responsible">#2 - Compulsory / Voluntary - Action Required / Responsible Party</h2>
        <h4>Previous Year Vs Current Year</h4>

        <div class="datatable-container">
            <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-action-required-responsible-party-2022vs2023">
             <tbody> 
              <tr>
                <th style="text-align:center;width:10%">Required Action Previous Year Vs Current Year</th>
                <td style="text-align:center;" >
                 <a href="https://rodders.me/safetygate/img-2023/all-product-1-action-required-ly-vs-ty.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-action-required-ly-vs-ty.png"  class="country1"></a>
                </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-1-action-required-ly-vs-ty.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-action-required-ly-vs-ty.png"  class="country2"></a>
                </td>
            </tr> 
            <tr>
                <th style="text-align:center;">Responsible Party Previous Year Vs Current Year</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-1-responsible-party-ly-vs-ty.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-responsible-party-ly-vs-ty.png" class="country1" ></a>
                </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-1-responsible-party-ly-vs-ty.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-responsible-party-ly-vs-ty.png" class="country2" ></a>
                </td>
          </tr></tbody></table></div>
          
          <h4>Annual Compulsory / Voluntary - Action Required / Responsible Party</h4>
          
                  <div class="datatable-container">
            <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-action-required-responsible-party-annual">
                    <tbody> 
            <tr>
              <th style="text-align:center;width:10%">Annual Required Action</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-action-required-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-action-required-annual-alerts.png"  class="country1"></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-action-required-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-action-required-annual-alerts.png"  class="country2"></a>
                </td>
            </tr> 
            <tr>
                <th style="text-align:center;width:10%">Annual Responsible Party</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-responsible-party-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-responsible-party-annual-alerts.png" class="country1" ></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-responsible-party-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-responsible-party-annual-alerts.png" class="country2" ></a>
                </td>
          </tr></tbody></table></div>
          <h3>Total Compulsory / Voluntary - Action Required / Responsible Party</h3>
          <br>
            <div class="datatable-container">

            <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-action-required-responsible-party-total">
                    <tbody> 
            <tr>
                <th style="text-align:center;width:10%">Total Required Action</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-1-action-required-total-alerts.png" class="country1">
                        <img src="https://rodders.me/safetygate/img-2023/product-1-action-required-total-alerts.png" class="country1" ></a>
                    </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-1-action-required-total-alerts.png" class="country2">
                        <img src="https://rodders.me/safetygate/img-2023/product-1-action-required-total-alerts.png" class="country2" ></a>
                    </td>
            </tr> 
            <tr>
                <th style="text-align:center;">Total Responsible Party</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-responsible-party-total-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-responsible-party-total-alerts.png" class="country1" ></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-1-responsible-party-total-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-responsible-party-total-alerts.png" class="country2" ></a>
                </td>
          </tr>
        </tbody>
        </table>
        </div>
        <br><a href="#" class="gototop">Go to Top</a>

    <h2 id="top2_submitting">#2 - Submitting Country</h2>
        <h4>Percentage by Country</h4>

        <div class="datatable-container">
            <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-submitting-country-percentage">
            <tbody> 
            <tr>
                <th style="text-align:center;width:10%">Total</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-1-submitting-country-total-alerts-percentage.png" class="country1">
                        <img src="https://rodders.me/safetygate/img-2023/product-1-submitting-country-total-alerts-percentage.png"  class="country1"></a>
                    </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-1-submitting-country-total-alerts-percentage.png" class="country2">
                        <img src="https://rodders.me/safetygate/img-2023/product-1-submitting-country-total-alerts-percentage.png"  class="country2"></a>
                    </td>
                    </tr>    
                </tbody>
            </table>
        </div>
            <h4>Previous Year Vs Current Year</h4>

            <div class="datatable-container">
                <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-submitting-country-2022vs2023">
                <tbody> 
            <tr>
                <th style="text-align:center;width:10%">Previous Year Vs Current Year</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-1-submitting-country-ly-vs-ty.png" class="country1">
                        <img src="https://rodders.me/safetygate/img-2023/product-1-submitting-country-ly-vs-ty.png"  class="country1"></a>
                    </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-1-submitting-country-ly-vs-ty.png" class="country2">
                        <img src="https://rodders.me/safetygate/img-2023/product-1-submitting-country-ly-vs-ty.png"  class="country2"></a>
                    </td>
                </tr> 
                </tbody>
              </table>
            </div>   
            <br><a href="#" class="gototop">Go to Top</a>




            <h4>Annual Total</h4>
    
            <div class="datatable-container">
              <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-submitting-country-annual">
                <tbody>
                    
            <tr>
                <th style="text-align:center;width:10%">Annual Total</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-1-submitting-country-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-submitting-country-annual-alerts.png"  class="country1"></a>
                </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-1-submitting-country-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-submitting-country-annual-alerts.png"  class="country2"></a>
                </td>

            </tr> 

        </tbody>
    </table>
  </div>   
  <br><a href="#" class="gototop">Go to Top</a>




  <h4>Annual Percentage of Total</h4>

  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-submitting-country-annual-percentage">
      <tbody>


            
            <tr>
                <th style="text-align:center;">Annual Percentage of Total</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-1-submitting-country-annual-percentage.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-1-submitting-country-annual-percentage.png" class="country1" ></a>
                </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-1-submitting-country-annual-percentage.png" class="country2">
                        <img src="https://rodders.me/safetygate/img-2023/product-1-submitting-country-annual-percentage.png" class="country2" ></a>
                    </td>
            </tr> 
        
            </tbody>
            </table>
            </div>
            <br><a href="#" class="gototop">Go to Top</a>
    
    
    
    
    <h2 id="top2_brands">#2 - Top Brands for Safety Alerts</h2>
        <div class="datatable-container">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-1-top-brands">
        <tbody> 
        <tr >
        <th style="width:10%">Top 15 Brands</th>

        <td style="text-align: center;">
            <a href="https://rodders.me/safetygate/img-2023/all-product-1-top-30-brands-for-safety-alerts.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/product-1-top-30-brands-for-safety-alerts.png" class="country1">
            </td>
        <td style="text-align: center;">
            <a href="https://rodders.me/safetygate/img-2023/all-product-1-top-30-brands-for-safety-alerts.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/product-1-top-30-brands-for-safety-alerts.png" class="country2">
            </td>
        </tr>
        </tbody>
        </table>
        </div>
        <br><a href="#" class="gototop">Go to Top</a>




<!-- Product 2 -->
<h1 id="top3_categories">#3 - Top 3 Product Categories</h1>


<h4>Percentage of Total</h4>

    <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-percentage">
        <tbody> 

        <tr>
          <th style="text-align:center;width:10%">Total</th>
          <td style="text-align:center;" >
          <a href="https://rodders.me/safetygate/img-2023/all-product-2-total-alerts-percentage-of-all.png" class="country1">
          <img src="https://rodders.me/safetygate/img-2023/product-2-total-alerts-percentage-of-all.png" class="country1" ></a></td>      
          <td style="text-align:center;" >
          <a href="https://rodders.me/safetygate/img-2023/all-product-2-total-alerts-percentage-of-all.png" class="country2">
          <img src="https://rodders.me/safetygate/img-2023/product-2-total-alerts-percentage-of-all.png" class="country2" ></a></td>      
        
            
        </tr>    
        <tr>
        
        </tr> 
</tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>


<h4 id="top3_annual">Annual & Cumulative Total</h4>
  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-annual-cumulative">
      <tbody> 
      <tr>
        <th style="text-align:center;width:10%">Annual Alerts</th>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-2-annual-and-cumulative-alerts.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/product-2-annual-and-cumulative-alerts.png" class="country1" ></a>
            </td>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-2-annual-and-cumulative-alerts.png" class="country2">
            <img src="https://rodders.me/safetygate/img-2023/product-2-annual-and-cumulative-alerts.png" class="country2" ></a>
        </td>
    </tr> 

</tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>


<h4>Annual Cumulative and YoY change</h4>
  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-annual-yoy-change">
      <tbody> 

    <tr>
          <th style="text-align:center;width:10%">Annual Cumulative and YoY Change</th>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-2-annual-and-yoy-change.png" class="country1">
            <img src="https://rodders.me/safetygate/img-2023/product-2-annual-cumulative-alerts-and-yoy-change.png"  class="country1"></a>
        </td>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-2-annual-and-yoy-change.png" class="country2">
            <img src="https://rodders.me/safetygate/img-2023/product-2-annual-cumulative-alerts-and-yoy-change.png"  class="country2"></a>
        </td>
      </tr> 
       
      </tbody>
    </table>
  </div>
  <br><a href="#" class="gototop">Go to Top</a>


  <h2 id="top3_risk">Risk Category</h2>

  <h4>Percentage by Type</h4>
    
  <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-risk-category-percentage">
      <tbody> 
      <tr>
          <th style="text-align:center;width:10%">Total</th>
          <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-2-risk-category-total-alerts-percentage.png" class="country1">
            <img src="https://rodders.me/safetygate/img-2023/product-2-risk-category-total-alerts-percentage.png"  class="country1"></a>
        </td>
          <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-2-risk-category-total-alerts-percentage.png" class="country2">
            <img src="https://rodders.me/safetygate/img-2023/product-2-risk-category-total-alerts-percentage.png"  class="country2"></a></td>
        </tr> 
    </tbody>
</table>
</div>
        
<h4>Previous Year Vs Current Year</h4>

<div class="datatable-container">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-risk-category-2022vs2023">
  <tbody>     
        <tr>
            <th style="text-align:center;width:10%">Previous Year Vs Current Year</th>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-2-risk-category-ly-vs-ty.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/product-2-risk-category-ly-vs-ty.png"  class="country1"></a>
            </td>
        <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-product-2-risk-category-ly-vs-ty.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/product-2-risk-category-ly-vs-ty.png"  class="country2"></a>
            </td>
    </tr> 
    </tbody>
    </table>
</div>
  <br><a href="#" class="gototop">Go to Top</a>

  <h4>Annual Total</h4>
  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-risk-category-annual">
        <tbody>
        <tr>
            <th style="text-align:center;width:10%">Annual Total</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-risk-category-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-risk-category-annual-alerts.png" class="country1" ></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-risk-category-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-risk-category-annual-alerts.png" class="country2" ></a>
                </td>
        </tr> 

    </tbody>
</table>
</div>
<br><a href="#" class="gototop">Go to Top</a>

<h4>Annual Percentage of Total</h4>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-risk-category-annual-percentage">
    <tbody>

        <tr>
            <th style="text-align:center;">Annual Percentage of Total</th>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-risk-category-annual-alerts-percentage.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-risk-category-annual-alerts-percentage.png" class="country1" ></a>
                </td>
            <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-risk-category-annual-alerts-percentage.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-risk-category-annual-alerts-percentage.png" class="country2" ></a>
                </td>
        </tr> 
    
        </tbody>
        </table>
        </div>
        <br><a href="#" class="gototop">Go to Top</a>

<h2 id="top3_counterfeit">#3 - Counterfeit ?</h2>

        <h4>Percentage by Type</h4>


        <div class="datatable-container">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-counterfeit-type-percentage">
          <tbody> 
            <tr>
              <th style="text-align:center;width:10%">Total</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-total-counterfeit-type-percentage-of-all.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-counterfeit-total-alerts-percentage.png"  class="country1"></a>
                </td>
              <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-product-2-total-counterfeit-type-percentage-of-all.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/product-2-counterfeit-total-alerts-percentage.png"  class="country2"></a>
            </td>
            </tr>   
        </tbody>
    </table>
</div>
            <h4>Previous Year Vs Current Year</h4>
    
  <div class="datatable-container">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-counterfeit-type-2022vs2023">
      <tbody>     
            <tr>
                <th style="text-align:center;width:10%">Previous Year Vs Current Year</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-total-counterfeit-type-ly-vs-ty.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/product-2-counterfeit-ly-vs-ty.png"  class="country1"></a>
            </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-total-counterfeit-type-ly-vs-ty.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/product-2-counterfeit-ly-vs-ty.png"  class="country2"></a>
            </td>
            </tr> 
            </tbody>
          </table>
        </div>   
        <br><a href="#" class="gototop">Go to Top</a>


        <h4>Annual & Cumulative Total</h4>

        <div class="datatable-container">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-counterfeit-type-annual">
            <tbody>
            <tr>
              <th style="text-align:center;width:10%">Annual Total</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-annual-counterfeit-alerts-issued.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-counterfeit-annual-alerts.png" class="country1" ></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-annual-counterfeit-alerts-issued.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-counterfeit-annual-alerts.png" class="country2" ></a>
                </td>
            </tr> 

        </tbody>
    </table>
  </div>   
  <br><a href="#" class="gototop">Go to Top</a>


  <h4>Annual Percentage of Total</h4>

  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-counterfeit-type-annual">
      <tbody>

            <tr>
                <th style="text-align:center;">Annual Percentage of Total</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-annual-counterfeit-alerts-issued-percentage-by-type.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-counterfeit-annual-alerts-percentage.png"  class="country1"></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-annual-counterfeit-alerts-issued-percentage-by-type.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-counterfeit-annual-alerts-percentage.png"  class="country2"></a>
                </td>
            </tr> 
          </tbody>
        </table>
        </div>   
        <br><a href="#" class="gototop">Go to Top</a>



<h2 id="top3_action_responsible">#3 - Compulsory / Voluntary - Action Required / Responsible Party</h2><br>
        <h4>Previous Year Vs Current Year</h4>

        <div class="datatable-container">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-action-required-responsible-party-2022vs2023">
          <tbody> 
            <tr>
              <th style="text-align:center;width:10%">Required Action Previous Year Vs Current Year</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-action-required-ly-vs-ty.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-action-required-ly-vs-ty.png"  class="country1"></a>
            </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-action-required-ly-vs-ty.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-action-required-ly-vs-ty.png"  class="country2"></a>
                </td>
            </tr> 
            <tr>
                <th style="text-align:center;">Responsible Party Previous Year Vs Current Year</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-responsible-party-ly-vs-ty.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-responsible-party-ly-vs-ty.png" class="country1" ></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-responsible-party-ly-vs-ty.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-responsible-party-ly-vs-ty.png" class="country2" ></a>
                </td>
          </tr>
        </tbody>
    </table>
</div>
<h4>Annual Compulsory / Voluntary - Action Required / Responsible Party</h4>
<br>
        <div class="datatable-container">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-action-required-responsible-party-annual">
          <tbody> 
            <tr>
              <th style="text-align:center;width:10%">Annual Required Action</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-action-required-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-action-required-annual-alerts.png"  class="country1"></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-action-required-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-action-required-annual-alerts.png"  class="country2"></a>
                </td>
            </tr> 
            <tr>
                <th style="text-align:center;">Annual Responsible Party</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-responsible-party-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-responsible-party-annual-alerts.png" class="country1" ></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-responsible-party-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-responsible-party-annual-alerts.png" class="country2" ></a>
                </td>
          </tr>
        </tbody>
    </table>
</div>
          <h4>Total Compulsory / Voluntary - Action Required / Responsible Party</h4>

        <div class="datatable-container">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-action-required-responsible-party-total">
          <tbody> 
            <tr>
                <th style="text-align:center;width:10%">Total Required Action</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-2-action-required-total-alerts.png" class="country1">
                        <img src="https://rodders.me/safetygate/img-2023/product-2-action-required-total-alerts.png" class="country1" ></a>
                    </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-2-action-required-total-alerts.png" class="country2">
                        <img src="https://rodders.me/safetygate/img-2023/product-2-action-required-total-alerts.png" class="country2" ></a>
                    </td>
            </tr> 
            <tr>
                <th style="text-align:center;">Total Responsible Party</th>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-responsible-party-total-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-responsible-party-total-alerts.png" class="country1" ></a>
                </td>
              <td style="text-align:center;" >
                <a href="https://rodders.me/safetygate/img-2023/all-product-2-responsible-party-total-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-responsible-party-total-alerts.png" class="country2" ></a>
                </td>
          </tr>
        </tbody>
        </table>
        </div>
        <a href="#" class="gototop">Go to Top</a>

        <h2 id="top3_submitting">#3 - Submitting Country</h2>
        <h4>Percentage by Country</h4>

        <div class="datatable-container">
            <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-submitting-country-percentage">
            <tbody> 
            <tr>
                <th style="text-align:center;width:10%">Total</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-2-submitting-country-total-alerts-percentage.png" class="country1">
                        <img src="https://rodders.me/safetygate/img-2023/product-2-submitting-country-total-alerts-percentage.png"  class="country1"></a>
                    </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-2-submitting-country-total-alerts-percentage.png" class="country2">
                        <img src="https://rodders.me/safetygate/img-2023/product-2-submitting-country-total-alerts-percentage.png"  class="country2"></a>
                    </td>
            </tr> 
        </tbody>
    </table>
</div>
            <h4>Previous Year Vs Current Year</h4>

        <div class="datatable-container">
            <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-submitting-country-2022vs2023">
            <tbody>    
            <tr>
                <th style="text-align:center;width:10%">Previous Year Vs Current Year</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-2-submitting-country-ly-vs-ty.png" class="country1">
                        <img src="https://rodders.me/safetygate/img-2023/product-2-submitting-country-ly-vs-ty.png"  class="country1"></a>
                    </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-2-submitting-country-ly-vs-ty.png" class="country2">
                        <img src="https://rodders.me/safetygate/img-2023/product-2-submitting-country-ly-vs-ty.png"  class="country2"></a>
                    </td>
                </tr> 
                </tbody>
              </table>
            </div>   
            <br><a href="#" class="gototop">Go to Top</a>




            <h4>Annual & Cumulative Total</h4>
    
            <div class="datatable-container">
              <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-submitting-country-annual">
                <tbody>
                    
            <tr>
                <th style="text-align:center;width:10%">Annual Total</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-2-submitting-country-annual-alerts.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-submitting-country-annual-alerts.png"  class="country1"></a>
                </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-2-submitting-country-annual-alerts.png" class="country2">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-submitting-country-annual-alerts.png"  class="country2"></a>
                </td>

            </tr> 
        </tbody>
    </table>
  </div>   
  <br><a href="#" class="gototop">Go to Top</a>




  <h4>Annual Cumulative and YoY Change</h4>

  <div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-submitting-country-annual-percentage">
      <tbody>
            <tr>
                <th style="text-align:center;width:10%">Annual Cumulative and YoY Change</th>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-2-submitting-country-annual-percentage.png" class="country1">
                    <img src="https://rodders.me/safetygate/img-2023/product-2-submitting-country-annual-percentage.png" class="country1" ></a>
                </td>
                <td style="text-align:center;" >
                    <a href="https://rodders.me/safetygate/img-2023/all-product-2-submitting-country-annual-percentage.png" class="country2">
                        <img src="https://rodders.me/safetygate/img-2023/product-2-submitting-country-annual-percentage.png" class="country2" ></a>
                    </td>
            </tr> 
        
            </tbody>
            </table>
            </div>
            <br><a href="#" class="gototop">Go to Top</a>
    
    
    
    
    <h2 id="top3_brands">#3 - Top Brands for Safety Alerts</h2>
        <div class="datatable-container">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto" id="product-cat-2-top-brands">
        <tbody> 
        <tr >
        <th style="width:10%;">Top 15 Brands</th>
      
        <td style="text-align: center;">
            <a href="https://rodders.me/safetygate/img-2023/all-product-2-top-30-brands-for-safety-alerts.png" class="country1">
                <img src="https://rodders.me/safetygate/img-2023/product-2-top-30-brands-for-safety-alerts.png" class="country1">
            </td>
        <td style="text-align: center;">
            <a href="https://rodders.me/safetygate/img-2023/all-product-2-top-30-brands-for-safety-alerts.png" class="country2">
                <img src="https://rodders.me/safetygate/img-2023/product-2-top-30-brands-for-safety-alerts.png" class="country2">
            </td>
        </tr>
        </tbody>
        </table>
        </div>
        <br><a href="#" class="gototop">Go to Top</a>
    </body>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    
    

    <script>
        // Hover tips
        tippy('#CompareCountries', {content: 'Select any two countries and click compare to view the visualisations side by side.', theme: 'tomato'});
        tippy('#JumptoSection', {content: 'Select a section to jump to.', theme: 'tomato'});
        tippy('#CountryReport', {content: 'Select a Country to view a detailed report or compare countries.', theme: 'tomato', placement: 'left',});

        tippy('#country-total-alerts-vs-row', {content: 'Percentage of safety alerts issued to Country of Product Origin Vs Rest of the world.', theme: 'tomato'});
        tippy('#country-2022vs2023', {content: 'Previous Year Vs Current Year comparison of percentage of safety alerts issued to Country of Product Origin Vs Rest of the world.', theme: 'tomato'});
        tippy('#country-annual-cumulative', {content: 'Cumulative and annual safety alerts issued to Country of product origin.', theme: 'tomato'});
        tippy('#country-annual-yoy-change', {content: 'Cumulative and annual YoY change safety alerts issued to Country of product origin.', theme: 'tomato'});

        tippy('#country-top3', {content: 'Top 3 Product and Risk Categories issued to Country of product origin.', theme: 'tomato'});

        tippy('#product-category-percentage', {content: 'Product Category percentage of total safety alerts issued to Country of Product Origin.', theme: 'tomato'});
        tippy('#product-category-2022vs2023', {content: 'Product Category Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', theme: 'tomato'});
        tippy('#product-category-annual', {content: 'Product Category annual safety alerts issued to Country of Product Origin.', theme: 'tomato'});
        tippy('#product-category-annual-percentage', {content: 'Product Category as percentage of annual safety alerts issued to Country of Product Origin.', theme: 'tomato'});
        
        tippy('#risk-category-percentage', {content: 'Risk Category type percentage of total safety alerts issued to Country of Product Origin.', theme: 'tomato'});
        tippy('#risk-category-2022vs2023', {content: 'Risk Category type Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', theme: 'tomato'});
        tippy('#risk-category-annual', {content: 'Risk Category type annual safety alerts issued to Country of Product Origin.', theme: 'tomato'});
        tippy('#risk-category-annual-percentage', {content: 'Risk Category type annual safety alerts issued to Country of Product Origin.', theme: 'tomato'});
        
        tippy('#counterfeit-category-percentage', {content: 'Counterfeit status as percentage of total safety alerts issued to Country of Product Origin.', theme: 'tomato'});
        tippy('#counterfeit-category-2022vs2023', {content: 'Counterfeit status Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', theme: 'tomato'});
        tippy('#counterfeit-category-annual', {content: 'Counterfeit status annual safety alerts issued to Country of Product Origin.', theme: 'tomato'});
        tippy('#counterfeit-category-annual-percentage', {content: 'Counterfeit status annual safety alerts issued to Country of Product Origin.', theme: 'tomato'});

        tippy('#action-required-responsible-party-2022vs2023', {content: 'Compulsory and Voluntary action required / responsible party Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', theme: 'tomato'});
        tippy('#action-required-responsible-party-annual', {content: 'Compulsory and Voluntary action required / responsible party annual safety alerts issued to Country of Product Origin.', theme: 'tomato'});
        tippy('#action-required-responsible-party-total', {content: 'Compulsory and Voluntary action required / responsible party TOTAL safety alerts issued to Country of Product Origin.', theme: 'tomato'});

        tippy('#submitting-country-percentage', {content: 'Submitting Country as percentage of total safety alerts issued to Country of Product Origin.', theme: 'tomato'});
        tippy('#submitting-country-2022vs2023', {content: 'Submitting Country Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', theme: 'tomato'});
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
            {content: '<b><u>#1 Product Category</u></b><br>Risk Category Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', 
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
            {content: '<b><u>#1 Product Category</u></b><br>Counterfeit Type Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', 
            theme: 'tomato', allowHTML: true,});

        tippy('#product-cat-0-counterfeit-type-annual', 
            {content: '<b><u>#1 Product Category</u></b><br>Counterfeit Type annual safety alerts issued to Country of product origin.', 
            theme: 'tomato', allowHTML: true,});

        tippy('#product-cat-0-counterfeit-type-annual-percentage', 
            {content: '<b><u>#1 Product Category</u></b><br>Counterfeit Type annual percentage of safety alerts issued to Country of Product Origin.', 
            theme: 'tomato', allowHTML: true,});



        // Voluntary / Compulsory Action Required Responsible Party //
        
        tippy('#product-cat-0-action-required-responsible-party-2022vs2023', 
            {content: '<b><u>#1 Product Category</u></b><br>Voluntary / Compulsory Action Required / Responsible Party Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', 
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
            {content: '<b><u>#1 Product Category</u></b><br>Submitting Country Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', 
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
            {content: '<b><u>#2 Product Category</u></b><br>Risk Category Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', 
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
            {content: '<b><u>#2 Product Category</u></b><br>Counterfeit Type Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', 
            theme: 'tomato', allowHTML: true,});

        tippy('#product-cat-1-counterfeit-type-annual', 
            {content: '<b><u>#2 Product Category</u></b><br>Counterfeit Type annual safety alerts issued to Country of product origin.', 
            theme: 'tomato', allowHTML: true,});

        tippy('#product-cat-1-counterfeit-type-annual-percentage', 
            {content: '<b><u>#2 Product Category</u></b><br>Counterfeit Type annual percentage of safety alerts issued to Country of Product Origin.', 
            theme: 'tomato', allowHTML: true,});



        // Voluntary / Compulsory Action Required Responsible Party //
        
        tippy('#product-cat-1-action-required-responsible-party-2022vs2023', 
            {content: '<b><u>#2 Product Category</u></b><br>Voluntary / Compulsory Action Required / Responsible Party Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', 
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
            {content: '<b><u>#2 Product Category</u></b><br>Submitting Country Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', 
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
            {content: '<b><u>#3 Product Category</u></b><br>Risk Category Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', 
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
            {content: '<b><u>#3 Product Category</u></b><br>Counterfeit Type Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', 
            theme: 'tomato', allowHTML: true,});

        tippy('#product-cat-2-counterfeit-type-annual', 
            {content: '<b><u>#3 Product Category</u></b><br>Counterfeit Type annual safety alerts issued to Country of product origin.', 
            theme: 'tomato', allowHTML: true,});

        tippy('#product-cat-2-counterfeit-type-annual-percentage', 
            {content: '<b><u>#3 Product Category</u></b><br>Counterfeit Type annual percentage of safety alerts issued to Country of Product Origin.', 
            theme: 'tomato', allowHTML: true,});



        // Voluntary / Compulsory Action Required Responsible Party //
        
        tippy('#product-cat-2-action-required-responsible-party-2022vs2023', 
            {content: '<b><u>#3 Product Category</u></b><br>Voluntary / Compulsory Action Required / Responsible Party Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', 
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
            {content: '<b><u>#3 Product Category</u></b><br>Submitting Country Previous Year Vs Current Year percentage of safety alerts issued to Country of Product Origin.', 
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
    <script src="/scripts/comparison.js"> </script>

    </script>
    </html>
    