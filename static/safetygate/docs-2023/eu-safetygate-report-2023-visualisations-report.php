<?php include 'html-inc/header.php'; ?>

<style>
.no-border * {
    border: none !important;
}
</style>
<title>EU Safety Report 2023 - Compare Countries</title>

<body class="colorscheme-light exclude-page">
<div class="float-container">
    <a id="dark-mode-toggle" class="colorscheme-toggle">
        <i class="fa-solid fa-adjust fa-fw" aria-hidden="true"></i>
    </a></div>


<!-- NAVIGATION MENU-->


      <div class="page-container">
        <div class="toolbar" style="width:100%; text-align:center; align-items: center;">
          <!-- <span class="menu dropbtn" style="align-items:center;" onclick="openNav()"><i style="align-items:center" class="material-icons" style="font-size:24px; color: white">menu</i>&nbsp;Menu</span> -->

     
          <!-- JUMP TO MENU -->
          <?php include 'menu-2023.php'; ?></div>
          <div class="countries">
            <div id="JumptoSection" class="country" style="align-items:center;"><h2>Jump to section</h2></div>
              <div class="country">

              <select onchange="window.location.hash=this.value" class="country">
              <option value="Annual Alerts">Annual Alerts</option>
              <option value="Submitting Country">Submitting Country</option>
              <option value="Map Plot">Map Plot Previous Year Vs Current Year</option>
              <option value="Which countries">Which countries' products get the most alerts?</option>
              <option value="economic area">&nbsp;&nbsp;&nbsp;Economic Area of Product origin Previous Year Vs Current Year </option>
              <option value="coo">&nbsp;&nbsp;&nbsp;Country of Product Origin</option>
              <option value="coo_annual">&nbsp;&nbsp;&nbsp;Annual Alerts</option>
              <option value="Product Categories">Product Categories</option>
              <option value="risk">Risk Category</option>
              <option value="counterfeit">Counterfeit type</option>
              <option value="action">Action Required</option>
              <option value="responsible">Responsible Party</option>
              <option value="top_30_brands">Top 30 Worldwide brands for Safety Alerts</option>
              <option value="all-top15-top3s">Top 15 Countries - Key Fact sheets</option>
              <option value="top3">Top 3 Worldwide Product Categories</option>
              <option value="top1_">#1 - Top 3 Product Categories</option>
              <option value="top1_annual">&nbsp;&nbsp;&nbsp;#1 - Total, Annual and Cumulative Alerts</option>
              <option value="top1_submitting">&nbsp;&nbsp;&nbsp;#1 - Submitting Country</option>
              <option value="top1_risk">&nbsp;&nbsp;&nbsp;#1 - Risk Category</option>
              <option value="top1_counterfeit">&nbsp;&nbsp;&nbsp;#1 - Counterfeit </option>
              <option value="top1_action">&nbsp;&nbsp;&nbsp;#1 - Compulsory / Voluntary Action Required</option>
              <option value="top1_responsible">&nbsp;&nbsp;&nbsp;#1 - Compulsory / Voluntary Responsible Party</option>
              <option value="top1_brands">&nbsp;&nbsp;&nbsp;#1 - Top 30 Brands for Safety Alerts</option>
              <option value="top2_">#2 - Top 3 Product Categories</option>
              <option value="top2_annual">&nbsp;&nbsp;&nbsp;#2 - Total, Annual and Cumulative Alerts</option>
              <option value="top2_submitting">&nbsp;&nbsp;&nbsp;#2 - Submitting Country</option>
              <option value="top2_risk">&nbsp;&nbsp;&nbsp;#2 - Risk Category</option>
              <option value="top2_counterfeit">&nbsp;&nbsp;&nbsp;#2 - Counterfeit </option>
              <option value="top2_action">&nbsp;&nbsp;&nbsp;#2 - Compulsory / Voluntary Action Required</option>
              <option value="top2_responsible">&nbsp;&nbsp;&nbsp;#2 - Compulsory / Voluntary Responsible Party</option>
              <option value="top2_brands">&nbsp;&nbsp;&nbsp;#2 - Top Brands for Safety Alerts</option>
              <option value="top3_">#3 - Top 3 Product Categories</option>
              <option value="top3_annual">&nbsp;&nbsp;&nbsp;#3 - Total, Annual and Cumulative Alerts</option>
              <option value="top3_submitting">&nbsp;&nbsp;&nbsp;#3 - Submitting Country</option>
              <option value="top3_risk">&nbsp;&nbsp;&nbsp;#3 - Risk Category</option>
              <option value="top3_counterfeit">&nbsp;&nbsp;&nbsp;#3 - Counterfeit </option>
              <option value="top3_action">&nbsp;&nbsp;&nbsp;#3 - Compulsory / Voluntary Action Required </option>
              <option value="top3_responsible">&nbsp;&nbsp;&nbsp;#3 - Compulsory / Voluntary Responsible Party</option>
              <option value="top3_brands">&nbsp;&nbsp;&nbsp;#3 - Top Brands for Safety Alerts</option>

                
              </select>
            </div></div>
 <!-- </div> -->

    <h1 class="nochange">EU Safety Gate Visualisations report</h1>
    <p><img src="https://rodders.me/safetygate/img-2023/icons/Safety_Gate_Logo.png" style="width:50%"></p>
    <p class='last-updated'><?php include '../tables-2024/last-updated.php' ?></p>

    <p>This report series compiles a detailed collection of visualisations depicting the safety alerts issued for non-food products by the 
  European Union. Featuring around 1,100 meticulously crafted matplotlib plots, this report offers an in-depth visual analysis of the total alerts, 
  allowing readers to easily interpret complex data trends, hazard types, and affected product categories. It serves as a valuable resource for those 
  seeking to understand the broader patterns and specifics of safety alerts through a graphical representation.</p>

  <p>There are four reports in the series</p>

  <div class="no-border">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr><td><a href = "/safetygate/docs-2023/eu-safetygate-report-2023-summary-report.php">Summary Report</a></td>
        <td>A summary for the year to date (comparing up to the same week number for each year) or for the total year </td>
      </tr>
      <tr><td><a href = "/safetygate/docs-2023/eu-safetygate-report-2023-visualisations-report.php">Visualisations Report</a></td>
        <td>A comprehensive suite of visualisation for the year to date (comparing up to the same week number for each year) or for the total year </td>
      </tr>
      <tr><td><a href = "/safetygate/docs-2023/eu-safetygate-report-2023-country.php?country1=china">Country Report</a></td>
        <td>Covering the top 15 countries of product origin, this report details 94 visualisation for each country, covering the main topics 
          of the Safety Gate data.</td>
      </tr>
      <tr><td><a href = "/safetygate/docs-2023/eu-safetygate-report-2023-comparison.php?country1=france&country2=germany">Country Comparison Report</a></td>
        <td>This report compares two countries, covering the top 15 countries of product origin, this report visualisations 
          cover the main topics of the Safety Gate data for each country.</td>
      </tr>
      </tbody>
      </table>
      </div>

    <!-- <div id="tableOfContents"></div> -->
    
    <h2 id="Annual Alerts">Annual Alerts</h2>
<div class="no-border">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr>
      <td>
        <a href="https://rodders.me/safetygate/img-2023/number-of-alerts-validated-on-safetygate-from-2003-to-2023.png" id="PresentAnnual">
        <img src="https://rodders.me/safetygate/img-2023/number-of-alerts-validated-on-safetygate-from-2003-to-2023.png"  /></a>
      </td>
    </tr>
  </tbody>
</table>
  <a href="#" class="gototop">Go to Top</a>
</div>

<h2>Total Annual Alerts Issued</h2>


<p>Over the last few years, the EU Safety Gate member states issue on average around 2,000
  - 2,200 safety alerts per year. 

  <ul><li>Around 25% of all alerts issued are for products where the Country of Origin is unknown.</li>
    <li>On average China represents around 50% of Alerts issued</li>
    <li>2023 was exceptional with 3412 alerts issued.</li></ul>
    
    
<style>
  .lft-align {
  text-align: left !important;
  margin: 0 auto !important; 
  width:100% !important;
}
</style>

    <div class="lft-align">
      <?php include '../tables-2023/table-0-annual_alert_count.php' ?>
    </div>
<hr>

    <div class="lft-align">
      <?php include '../tables-2023/table-1-annual_alert_count.php' ?>
    </div>



<h2 >Annual Alerts Issued - YoY Change </h2>
<p>2023 saw a 59% increase in the average number of alerts issued in a year, with the total alerts
issued increasing from 2,100 alerts in 2022 to 3,349 in 2023, an
increase of 1,249 over the previous year.</p>

<div class="no-border" id="all-AnnualCumulative" >
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr>
      <th style="text-align:center;">All Countries</th>
      <th style="text-align:center;">Excluding Unknown</th></tr>
      <tr>
        <td style="text-align:center;" >
          <A href="https://rodders.me/safetygate/img-2023/all-countries-annual-and-cumulative-alerts.png">
            <img src="https://rodders.me/safetygate/img-2023/all-countries-annual-and-cumulative-alerts.png"  />
          </a>
        </td>
        <td style="text-align:center;" >
    <a href="https://rodders.me/safetygate/img-2023/all-countries-annual-cumulative-alerts-and-yoy-change.png">
    <img src="https://rodders.me/safetygate/img-2023/all-countries-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
      </tr>
    </tbody>
  </table>
<a href="#" class="gototop">Go to Top</a>
</div>


<h2 id="Submitting Country">Submitting Country</h2>

<p>The country that submitted the safety alert.</p>

<h3 id="Map Plot">Map Plot Previous Year Vs Current Year</h3>
<div class="no-border" id="all-AnnualGeoplot">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
    <tbody> 
      <tr><td>  <a href="https://rodders.me/safetygate/img-2023/all-countries-alert-submitted-by-geo-plot.png">
  <img src="https://rodders.me/safetygate/img-2023/all-countries-alert-submitted-by-geo-plot.png">
</td>
</tr>
</tbody>
</table> 
<a href="#" class="gototop">Go to Top</a>
</div>


<h3 >Previous Year Vs Current Year</h3>

<div class="no-border" id="all-submitting-country-2022vs2023">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr><td>
      <a href="https://rodders.me/safetygate/img-2023/all-countries-submitting-country-ly-vs-ty.png">
        <img src="https://rodders.me/safetygate/img-2023/all-countries-submitting-country-ly-vs-ty.png" ></a>
      </td>
    </tr>
  </tbody>
</table>
<a href="#" class="gototop">Go to Top</a>
</div>


<h3>Annual Alerts and Annual Percentage of Total</h3>
<div class="no-border" id="all-submitting-country-Annual-and-Percentage">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 

    <tr>
      <th style="text-align:center;">Annual Count</th>
      <th style="text-align:center;">Annual Percent of Total</th>
    </tr> 
    <tr>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-countries-submitting-country-annual-alerts.png">
        <img src="https://rodders.me/safetygate/img-2023/all-countries-submitting-country-annual-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-countries-submitting-country-annual-alerts-percentage.png">
        <img src="https://rodders.me/safetygate/img-2023/all-countries-submitting-country-annual-alerts-percentage.png"  ></a></td>
  </tr>
</tbody>
</table>
<a href="#" class="gototop">Go to Top</a>
</div>


<h1 id="Which countries">Which countries' products get the most alerts?</h1>

    <p>The following visualisations show the <code>Economic Area of Product Origin</code> with categories defined as: </p>

<p><ul>
  <li><code>EU Countries</code> within Schengen or European Economic Area (Ex Italy for visibility of 2023 alerts)</li>
  <li><code>Italy</code> - Italy represents around 15% of all alerts issued in 2023 and is highlighted for the 2023 exception</li>
  <li><code>Outside EU</code> - Every other country not within the Eu Countries</li>
  <li><code>China</code> - China represents a large proportion of Global Trade</li>
</ul>

</p>

<h2 id="economic area">Economic Area of Product origin Previous Year Vs Current Year </h2>

<div class="no-border" id="all-Economic-Area-2022-vs-2023">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
  <tr><td>
<a href="https://rodders.me/safetygate/img-2023/all-countries-economic-area-of-product-origin-total-alerts-ly-vs-ty-.png">
  <img src="https://rodders.me/safetygate/img-2023/all-countries-economic-area-of-product-origin-total-alerts-ly-vs-ty-.png" ></a>
  
</td>
</tr>
</tbody>
</table>
<a href="#" class="gototop">Go to Top</a>
</div>

<h2 id="coo">Country of Product Origin</h2>

<p>Within the Top 15 countries are two entries :</p>
<ul><code>other</code> Where the country isn't in the top 15, and represents 2,933 products or 8.4% of the total</ul>
<ul><code>Unknown</code> Where the reporting member didn't record the country of origin, and represents 9,173 products, or 25.8% of the total Alerts issued</ul>


<div class="no-border" id="all-Coo-2022-vs-2023">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
    <tbody> 
      <tr>
        <td>
          <a href="https://rodders.me/safetygate/img-2023/all-countries-country-of-origin-total-alerts-ly-vs-ty-.png">
            <img src="https://rodders.me/safetygate/img-2023/all-countries-country-of-origin-total-alerts-ly-vs-ty-.png" ></a>
          </td>
        </tr>
      </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>

</div>

<h3 id="coo_annual">Annual Alerts</h3>


<div class="no-border" id="all-Coo-Annual-Percentage">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr>
      <th style="text-align:center;">All Countries' of product origin Annual Alerts</th>
      <th style="text-align:center;">All Countries' of product origin percentage of Alerts issued</th>
    </tr> 
    <tr>
      <td style="text-align:center;" >
        <a href="https://rodders.me/safetygate/img-2023/all-countries-country-of-origin-annual-alerts.png">
          <img src="https://rodders.me/safetygate/img-2023/all-countries-country-of-origin-annual-alerts.png"  ></a></td>
          <td style="text-align:center;" >
        <a href="https://rodders.me/safetygate/img-2023/all-countries-country-of-origin-annual-alerts-percentage.png">
          <img src="https://rodders.me/safetygate/img-2023/all-countries-country-of-origin-annual-alerts-percentage.png"  ></a></td>
   </tr>
</tbody>
</table>
<a href="#" class="gototop">Go to Top</a>
</div>




<h2 id="Product Categories">Product Categories</h2>

  <h3 >Previous Year Vs Current Year</h3> 
  <div class="no-border" id="all-product-category-2022vs2023">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
    <tbody> 
      <tr><td>
        <a href="https://rodders.me/safetygate/img-2023/all-countries-product-category-ly-vs-ty.png">
          <img src="https://rodders.me/safetygate/img-2023/all-countries-product-category-ly-vs-ty.png" ></a>
        </td>
      </tr>
    </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>
    </div>
    
  <h3 >Total & Annual Alerts</h3>

  <p>Over the last few years the Toys and Automotive categories are generally those with the most safety alerts. </p>
  
  <p>The exception being 2023 where cosmetics took the top spot with 32% of all alerts issued being for cosmetic products.</p>

<div class="no-border" id="all-product-category-Annual-Percentage">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr>
      <th style="text-align:center;">Annual Count</th>
      <th style="text-align:center;">Annual Percent of Total</th>
    </tr> 
    <tr>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-countries-product-category-annual-alerts.png"><img src="https://rodders.me/safetygate/img-2023/all-countries-product-category-annual-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-countries-product-category-annual-alerts-percentage.png"><img src="https://rodders.me/safetygate/img-2023/all-countries-product-category-annual-alerts-percentage.png"  ></a></td>
  </tr>
</tbody>
</table>
<a href="#" class="gototop">Go to Top</a>
</div>




<h2 id="risk">Risk Category</h2>

<ul><li>The majority of Injury risks come from the automotive product category (9.7% of 2022/2023 total)</li>
  <li>The majority of risks from Toys are breathing obstruction (7% of total) and chemical (7% of total)</li>
  <li>As previously noted the cosmetics risk is from the recent ban of BMHCA</li>
  </ul>

  <h3 >Previous Year Vs Current Year</h3>
  <div class="no-border" id="all-risk-category-2022vs2023">
    <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
    <tbody> 
      <tr><td>
        <a href="https://rodders.me/safetygate/img-2023/all-countries-risk-category-ly-vs-ty.png">
          <img src="https://rodders.me/safetygate/img-2023/all-countries-risk-category-ly-vs-ty.png" ></a>
        </td></tr>
      </tbody></table>
          <a href="#" class="gototop">Go to Top</a></div>


<h3 >Total & Annual Alerts</h3>

<div class="no-border" id="all-risk-category-Annual-Percentage">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
   
    <tr>
      <th style="text-align:center;">Annual Count</th>
      <th style="text-align:center;">Annual Percent of Total</th>
    </tr> 
    <tr>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-countries-risk-category-annual-alerts.png"><img src="https://rodders.me/safetygate/img-2023/all-countries-risk-category-annual-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-countries-risk-category-annual-alerts-percentage.png"><img src="https://rodders.me/safetygate/img-2023/all-countries-risk-category-annual-alerts-percentage.png"  ></a></td>
  </tr>
</tbody>
</table>
<a href="#" class="gototop">Go to Top</a></div>


<h2 id="counterfeit">Counterfeit type</h2>


    <h3 >Previous Year Vs Current Year</h3>
    <div class="no-border" id="all-counterfeit-2022vs2023">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 
        <tr><td>
          <a href="https://rodders.me/safetygate/img-2023/all-countries-counterfeit-ly-vs-ty.png">
            <img src="https://rodders.me/safetygate/img-2023/all-countries-counterfeit-ly-vs-ty.png" ></a></td></tr></tbody></table>
            <a href="#" class="gototop">Go to Top</a></div>
  
  
<h3>Total & Annual Alerts </h3>

<div class="no-border" id="all-counterfeit-Annual-Percentage">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 

    <tr>
      <th style="text-align:center;">Annual Count</th>
      <th style="text-align:center;">Annual Percent of Total</th>
    </tr> 
    <tr>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-countries-counterfeit-annual-alerts.png"><img src="https://rodders.me/safetygate/img-2023/all-countries-counterfeit-annual-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-countries-counterfeit-annual-alerts-percentage.png"><img src="https://rodders.me/safetygate/img-2023/all-countries-counterfeit-annual-alerts-percentage.png"  ></a></td>
  </tr>
</tbody>
</table>
<a href="#" class="gototop">Go to Top</a>
</div>

<h2 id="action">Action Required</h2>

The increase in the percentage of alerts requiring a ban from sale in 2023 is due to the ban of the chemical BMHCA in cosmetics.

<h3 >Previous Year Vs Current Year</h3>
<div class="no-border" id="all-action-required-2022vs2023">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr><td>
      <a href="https://rodders.me/safetygate/img-2023/all-countries-action-required-ly-vs-ty.png">
        <img src="https://rodders.me/safetygate/img-2023/all-countries-action-required-ly-vs-ty.png" ></a></td></tr></tbody></table>
        <a href="#" class="gototop">Go to Top</a></div>


<h3>Total & Annual Alerts</h3>
<div class="no-border" id="all-action-required-Annual-CvsV">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr>
      <th style="text-align:center;">Annual Action Required</th>
      <th style="text-align:center;">Compulsory Vs Voluntary</th>
    </tr> 
    <tr>
      <td style="text-align:center;" >
        <a href="https://rodders.me/safetygate/img-2023/all-countries-action-required-annual-alerts.png">
          <img src="https://rodders.me/safetygate/img-2023/all-countries-action-required-annual-alerts.png"  ></a></td>

          <td style="text-align:center; width:50%" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-action-required-total-alerts.png">
              <img src="https://rodders.me/safetygate/img-2023/all-countries-action-required-total-alerts.png"  >
            </a>
            </td>
  
      </tr>
      </tbody></table>
      <a href="#" class="gototop">Go to Top</a>
    </div>

<h2 id="responsible">Responsible Party</h2>

  
<h3 >Previous Year Vs Current Year</h3>
      
      <div class="no-border" id="all-responsible-2022vs2023">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody> 
          <tr><td>
            <a href="https://rodders.me/safetygate/img-2023/all-countries-responsible-partry-ly-vs-ty.png">
        <img src="https://rodders.me/safetygate/img-2023/all-countries-responsible-partry-ly-vs-ty.png" ></a>
      </td></tr></tbody></table>
      <a href="#" class="gototop">Go to Top</a>
    </div>

<h3 >Annual Alerts</h3>

      <div class="no-border" id="all-responsible-Annual-CvsV">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody>   
    <tr>
      <th style="text-align:center;">Annual Responsible Party</th>
      <th style="text-align:center;">Compulsory Vs Voluntary</th>
    </tr> 
    <tr>
      <td style="text-align:center; width:50%" >
        <a href="https://rodders.me/safetygate/img-2023/all-countries-responsible-party-annual-alerts.png">
        <img src="https://rodders.me/safetygate/img-2023/all-countries-responsible-party-annual-alerts.png"  ></a></td>
   
      
        <td style="text-align:center;" >
        <a href="https://rodders.me/safetygate/img-2023/all-countries-responsible-party-total-alerts.png">
          <img src="https://rodders.me/safetygate/img-2023/all-countries-responsible-party-total-alerts.png">
        </a>
      </td>
  
    </tr>
</tbody>
</table>
<a href="#" class="gototop">Go to Top</a>
</div>

<h1 id="top_30_brands">Top 30 Worldwide brands for Safety Alerts</h1>

<h2>Top 30 Brands</h2>

<div class="no-border" id="all-top30-brands">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr><td>
      <a href="https://rodders.me/safetygate/img-2023/all-countries-top-30-brands-for-safety-alerts.png">
        <img src="https://rodders.me/safetygate/img-2023/all-countries-top-30-brands-for-safety-alerts.png"></a>
      </td></tr>
    </tbody></table>
        <a href="#" class="gototop">Go to Top</a>
      </div>


<h2 id="all-top15-top3s">Top 15 Countries - Key Fact sheets</h2>

<p>Programmatically created reproductions of the Top 3 Risk and Product categories by country visualisation in the official Fact sheet. 
<a href="https://www.mpo.cz/assets/en/consumer-protection/products-safety/2024/3/Safety-Gate-2023-factsheet.pdf">Safety_Gate_2023_Factsheet_EN.pdf</a></p>


<h3>Cumulative, Annual and YoY change / Top3 Categories (Risk/Product)</h3>

<div class="no-border" id="all-top15-kfs">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr>
      <th style="width:10%">Country</th>
      <th style="text-align:center; ">Annual Total</th>
      <th style="text-align:center;">Cumulative Total and YoY Change</th>
    </tr> 
    <tr>
      <td><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=china">China</A></th>
      <td style="text-align:center; width:45%" ><a href="https://rodders.me/safetygate/img-2023/china-annual-and-cumulative-alerts.png"><img src="https://rodders.me/safetygate/img-2023/china-annual-and-cumulative-alerts.png"  ></a></td>
      <td style="text-align:center;" >
           <a href="https://rodders.me/safetygate/img-2023/china-annual-cumulative-alerts-and-yoy-change.png">
          <img src="https://rodders.me/safetygate/img-2023/china-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr> 
    <tr>
      <td ><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=china">China</A></th>
      <td colspan="2" style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/china-top3s.png"><img src="https://rodders.me/safetygate/img-2023/china-top3s"  ></a></td>
    </tr> 

    <tr>
      <td><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=france">France</A></th>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/france-annual-and-cumulative-alerts.png"><img src="https://rodders.me/safetygate/img-2023/france-annual-and-cumulative-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/france-annual-cumulative-alerts-and-yoy-change.png"><img src="https://rodders.me/safetygate/img-2023/france-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr>
    
    <tr>
      <td ><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=france">France</A></th>
      <td colspan="2" style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/france-top3s.png"><img src="https://rodders.me/safetygate/img-2023/france-top3s"  ></a></td>
    </tr> 

    <tr>
      <td><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=germany">Germany</A></th>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/germany-annual-and-cumulative-alerts.png"><img src="https://rodders.me/safetygate/img-2023/germany-annual-and-cumulative-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/germany-annual-cumulative-alerts-and-yoy-change.png"><img src="https://rodders.me/safetygate/img-2023/germany-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr> 
    <tr>
      <td ><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=germany">Germany</A></th>
      <td colspan="2" style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/germany-top3s.png"><img src="https://rodders.me/safetygate/img-2023/germany-top3s"  ></a></td>
    </tr> 

    <tr>
      <td><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=india">India</A></th>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/india-annual-and-cumulative-alerts.png"><img src="https://rodders.me/safetygate/img-2023/india-annual-and-cumulative-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/india-annual-cumulative-alerts-and-yoy-change.png"><img src="https://rodders.me/safetygate/img-2023/india-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr> 
    <tr>
      <td ><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=india">India</A></th>
      <td colspan="2" style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/india-top3s.png"><img src="https://rodders.me/safetygate/img-2023/india-top3s"  ></a></td>
    </tr> 

    <tr>
      <td><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=italy">Italy</A></th>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/italy-annual-and-cumulative-alerts.png"><img src="https://rodders.me/safetygate/img-2023/italy-annual-and-cumulative-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/italy-annual-cumulative-alerts-and-yoy-change.png"><img src="https://rodders.me/safetygate/img-2023/italy-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr> 
    <tr>
      <td ><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=italy">Italy</A></th>
      <td colspan="2" style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/italy-top3s.png"><img src="https://rodders.me/safetygate/img-2023/italy-top3s"  ></a></td>
    </tr> 

    <tr>
      <td><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=japan">Japan</A></th>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/japan-annual-and-cumulative-alerts.png"><img src="https://rodders.me/safetygate/img-2023/japan-annual-and-cumulative-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/japan-annual-cumulative-alerts-and-yoy-change.png"><img src="https://rodders.me/safetygate/img-2023/japan-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr> 
    <tr>
      <td ><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=japan">Japan</A></th>
      <td colspan="2" style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/japan-top3s.png"><img src="https://rodders.me/safetygate/img-2023/japan-top3s"  ></a></td>
    </tr> 

    <tr>
      <td><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=poland">Poland</A></th>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/poland-annual-and-cumulative-alerts.png"><img src="https://rodders.me/safetygate/img-2023/poland-annual-and-cumulative-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/poland-annual-cumulative-alerts-and-yoy-change.png"><img src="https://rodders.me/safetygate/img-2023/poland-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr> 
    <tr>
      <td ><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=poland">Poland</A></th>
      <td colspan="2" style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/poland-top3s.png"><img src="https://rodders.me/safetygate/img-2023/poland-top3s"  ></a></td>
    </tr> 

    <tr>
      <td><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=poland">Spain</A></th>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/spain-annual-and-cumulative-alerts.png"><img src="https://rodders.me/safetygate/img-2023/spain-annual-and-cumulative-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/spain-annual-cumulative-alerts-and-yoy-change.png"><img src="https://rodders.me/safetygate/img-2023/spain-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr> 
    <tr>
      <td ><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=spain">Spain</A></th>
      <td colspan="2" style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/spain-top3s.png"><img src="https://rodders.me/safetygate/img-2023/spain-top3s"  ></a></td>
    </tr> 


    <tr>
      <td><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=sweden">Sweden</A></th>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/sweden-annual-and-cumulative-alerts.png"><img src="https://rodders.me/safetygate/img-2023/sweden-annual-and-cumulative-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/sweden-annual-cumulative-alerts-and-yoy-change.png"><img src="https://rodders.me/safetygate/img-2023/sweden-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr>
    <tr>
      <td ><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=sweden">Sweden</A></th>
      <td colspan="2" style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/sweden-top3s.png"><img src="https://rodders.me/safetygate/img-2023/sweden-top3s"  ></a></td>
    </tr> 

    <tr>
      <td><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=taiwan">Taiwan</A></th>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/taiwan-annual-and-cumulative-alerts.png"><img src="https://rodders.me/safetygate/img-2023/taiwan-annual-and-cumulative-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/taiwan-annual-cumulative-alerts-and-yoy-change.png"><img src="https://rodders.me/safetygate/img-2023/taiwan-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr>
    <tr>
      <td ><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=taiwan">Taiwan</A></th>
      <td colspan="2" style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/taiwan-top3s.png"><img src="https://rodders.me/safetygate/img-2023/taiwan-top3s"  ></a></td>
    </tr> 

    <tr>
      <td><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=uk">UK</A></th>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/uk-annual-and-cumulative-alerts.png"><img src="https://rodders.me/safetygate/img-2023/uk-annual-and-cumulative-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/uk-annual-cumulative-alerts-and-yoy-change.png"><img src="https://rodders.me/safetygate/img-2023/uk-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr>
    <tr>
      <td ><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=uk">UK</A></th>
      <td colspan="2" style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/uk-top3s.png"><img src="https://rodders.me/safetygate/img-2023/uk-top3s"  ></a></td>
    </tr> 

    <tr>
      <td><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=usa">USA</A></th>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/usa-annual-and-cumulative-alerts.png"><img src="https://rodders.me/safetygate/img-2023/usa-annual-and-cumulative-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/usa-annual-cumulative-alerts-and-yoy-change.png"><img src="https://rodders.me/safetygate/img-2023/usa-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr>
    <tr>
      <td ><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=usa">USA</A></th>
      <td colspan="2" style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/usa-top3s.png"><img src="https://rodders.me/safetygate/img-2023/usa-top3s"  ></a></td>
    </tr> 


    <tr>
      <td><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=other">Other</A></th>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/other-annual-and-cumulative-alerts.png"><img src="https://rodders.me/safetygate/img-2023/other-annual-and-cumulative-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/other-annual-cumulative-alerts-and-yoy-change.png"><img src="https://rodders.me/safetygate/img-2023/other-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr>
    <tr>
      <td ><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=other">Other</A></th>
      <td colspan="2" style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/other-top3s.png"><img src="https://rodders.me/safetygate/img-2023/other-top3s"  ></a></td>
    </tr> 


    <tr>
      <td><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=unknown">Unknown</A></th>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/unknown-annual-and-cumulative-alerts.png"><img src="https://rodders.me/safetygate/img-2023/unknown-annual-and-cumulative-alerts.png"  ></a></td>
      <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/unknown-annual-cumulative-alerts-and-yoy-change.png"><img src="https://rodders.me/safetygate/img-2023/unknown-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr>
    <tr>
      <td ><A href="/safetygate/docs/eu-safetygate-report-2023-country.html?country1=unknown">Unknown</A></th>
      <td colspan="2" style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/unknown-top3s.png"><img src="https://rodders.me/safetygate/img-2023/unknown-top3s"  ></a></td>
    </tr> 

</tbody>

</table>
<a href="#" class="gototop">Go to Top</a>
</div>




<H1 id="top3">Top 3 Worldwide Product Categories</H1>
<!-- Product 0 -->

<h2 class="product_cat0" id="top1_">#1 - Top 3 Product Categories</h2>

<h4 class="product_cat0" id="top1_annual">#1 - Total, Annual and Cumulative Alerts</h4>


<div class="no-border" id="all-product-cat-0-annual-cumulative" >
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 

    <tr>
      <th style="text-align:center;">Annual Alerts</th>
      <th style="text-align:center;">Cumulative Total and YoY Change</th>
    </tr> 
    <tr>
      <td style="text-align:center; width:50%" >
        <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-annual-and-cumulative-alerts.png">
          <img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-annual-and-cumulative-alerts.png" ></a></td>
      <td style="text-align:center;" >
        <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-annual-cumulative-alerts-and-yoy-change.png">
          <img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr> 
    <tr>
    </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>
    </div>

<h3 class="product_cat0" id="top1_submitting">#1 - Submitting Country</h3>

<h4 class="product_cat0">Previous Year Vs Current Year</h4>

    <div class="no-border" id="all-product-cat-0-submitting-country-2022vs2023">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 
        <tr><td>
          <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-submitting-country-ly-vs-ty.png">
            <img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-submitting-country-ly-vs-ty.png" ></a>
            </td></tr></tbody></table>
            <a href="#" class="gototop">Go to Top</a>
          </div>
    
<h4 class="product_cat0">Annual Total and Annual Percentage of Total</h4>

    <div class="no-border" id="all-product-cat-0-submitting-country-Annual-Percentage">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 
    
        <tr>
          <th style="text-align:center;">Annual Total</th>
          <th style="text-align:center;">Annual % of total</th>
        </tr> 
        <tr>
          <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-submitting-country-annual-alerts.png"><img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-submitting-country-annual-alerts.png"  ></a></td>
          <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-submitting-country-annual-percentage.png"><img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-submitting-country-annual-percentage.png"  ></a></td>
        </tr> 
    
        </tbody>
        </table>
        <a href="#" class="gototop">Go to Top</a>
        </div>

<h3 class="product_cat0" id="top1_risk">#1 - Risk Category</h3>
<h4 class="product_cat0">Previous Year Vs Current Year</h4>

<div class="no-border" id="all-product-cat-0-risk-category-2022vs2023">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
    <tr><td>
      <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-risk-category-ly-vs-ty.png">
        <img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-risk-category-ly-vs-ty.png" ></a>
        </td></tr></tbody></table>
        <a href="#" class="gototop">Go to Top</a>
</div>

<h4 class="product_cat0">Annual Total and Annual Percentage of Total</h4>

<div class="no-border" id="all-product-cat-0-risk-category-Annual-Percentage">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 

          <th style="text-align:center;">Annual Total</th>
          <th style="text-align:center;">Annual % of Total</th>
        </tr> 
        <tr>
          <td style="text-align:center;" >
          <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-risk-category-annual-alerts.png">
            <img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-risk-category-annual-alerts.png"  ></a></td>
          <td style="text-align:center;" >
          <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-risk-category-annual-alerts-percentage.png">
            <img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-risk-category-annual-alerts-percentage.png"  ></a></td>
        </tr> 
    
        </tbody>
        </table>
        <a href="#" class="gototop">Go to Top</a>
        </div>
        
<h3 class="product_cat0" id="top1_counterfeit">#1 - Counterfeit </h3>
<h4>Previous Year Vs Current Year</h4>
        <div class="no-border" id="all-product-cat-0-counterfeit-2022vs2023">

        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
          <tbody> 
            <tr><td>
              <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-counterfeit-ly-vs-ty.png">
                <img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-counterfeit-ly-vs-ty.png"  ></a>
              </td></tr></tbody></table>
              <a href="#" class="gototop">Go to Top</a>
            </div>


<h4 class="product_cat0">Annual Total and Annual Percentage of Total</h4>

    <div class="no-border" id="all-product-cat-0-counterfeit-Annual-Percentage">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 

 
        <tr>
          <th style="text-align:center;">Annual Total</th>
          <th style="text-align:center;">Annual % of Total</th>
        </tr> 
        <tr>
          <td style="text-align:center;" >
          <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-counterfeit-annual-alerts.png">
            <img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-counterfeit-annual-alerts.png"  ></a></td>
          <td style="text-align:center;" >
          <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-counterfeit-annual-alerts-percentage.png">
            <img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-counterfeit-annual-alerts-percentage.png"  ></a></td>
        </tr> 
      </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>

    </div>   
    

      <h3 class="product_cat0" id="top1_action">#1 - Compulsory / Voluntary Action Required /Responsible Party </h3>

      <h3 class="product_cat0">#1 - Compulsory / Voluntary Action Required</h3>
      <h4 class="product_cat0">Previous Year Vs Current Year</h4>

      <div class="no-border" id="all-product-cat-0-action-required-2022vs2023">
        <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
          <tbody> 
            <tr>
              <td >
                <a href = "https://rodders.me/safetygate/img-2023/all-countries-product-0-action-required-ly-vs-ty.png">
                <img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-action-required-ly-vs-ty.png"  ></a>
              </td>
            </tr>
          </tbody>
        </table>
        <a href="#" class="gototop">Go to Top</a>
      </div>

      <h4 class="product_cat0">Annual Total / Compulsory Vs Voluntary</h4>


      <div class="no-border" id="all-product-cat-0-action-required-Annual-Percentage">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
            <tbody>
              <tr>
                <th style="text-align:center;">Annual Total</th>
                <th style="text-align:center;">Compulsory Vs Voluntary</th>
            </tr> 
            <tr>
              <td style="width:50%">
                <a href ="https://rodders.me/safetygate/img-2023/all-countries-product-0-action-required-annual-alerts.png">
                <img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-action-required-annual-alerts.png"  ></a></td>
              <td >
                <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-action-required-total-alerts.png">
                <img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-action-required-total-alerts.png"  ></a></td>
            </tr> 
          </tbody>
        </table>
        <a href="#" class="gototop">Go to Top</a>

        </div>   
        
        <h3 class="product_cat0" id="top1_responsible">#1 - Compulsory / Voluntary Responsible Party</h3>
          <h4 class="product_cat0">Previous Year Vs Current Year</h4>
        <div class="no-border" id="all-product-cat-0-responsible-2022vs2023">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
            <tbody>
              <tr><td>
                <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-responsible-party-ly-vs-ty.png">
                  <img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-responsible-party-ly-vs-ty.png"  ></a>
                </td></tr></tbody></table>
                <a href="#" class="gototop">Go to Top</a>
        </div>


        <h4 class="product_cat0">Annual Total / Compulsory Vs Voluntary</h4>

            <div class="no-border" id="all-product-cat-0-responsible-Annual-Percentage">
              <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
              <tbody> 
    
                <tr>
                  <th style="text-align:center;">Annual Total</th>
                  <th style="text-align:center;">Compulsory Vs Voluntary</th>
                </tr> 
                <tr>
                  <td style="width:50%" >
                    <a href ="https://rodders.me/safetygate/img-2023/all-countries-product-0-responsible-party-annual-alerts.png">
                    <img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-responsible-party-annual-alerts.png"  ></a></td>
                  <td >
                    <a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-responsible-party-total-alerts.png">
                    <img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-responsible-party-total-alerts.png"  ></a></td>
                </tr> 
              </tbody>
            </table>
            <a href="#" class="gototop">Go to Top</a>

            </div>   



<h3 class="product_cat0"  id="top1_brands">#1 - Top 30 Brands for Safety Alerts</h3>
<div class="no-border" id="all-product-cat-0-top30-brands">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
<tr >
<th >Top 30 Brands</th>
</tr>
</thead>
<tbody>
<tr >
<td style="text-align: center;"><a href="https://rodders.me/safetygate/img-2023/all-countries-product-0-top-30-brands-for-safety-alerts.png">
  <img src="https://rodders.me/safetygate/img-2023/all-countries-product-0-top-30-brands-for-safety-alerts.png" ></td>
</tr>
</tbody>
</table>
<a href="#" class="gototop">Go to Top</a>

</div>



<!-- Product 1 -->
<h2 class="product_cat1" id="top2_">#2 - Top 3 Product Categories</h2>

<h3 class="product_cat1" id="top2_annual">#2 - Total, Annual and Cumulative Alerts</h3>


<div class="no-border" id="all-product-cat-1-annual-cumulative">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 

    <tr>
      <th style="text-align:center;">Annual Alerts</th>
      <th style="text-align:center;">Cumulative Total and YoY Change</th>
    </tr> 
    <tr>
      <td style="text-align:center; width:50%" ><a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-annual-and-cumulative-alerts.png">
        <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-annual-and-cumulative-alerts.png" ></a></td>
      <td style="text-align:center;" >
        <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-annual-cumulative-alerts-and-yoy-change.png">
        <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr> 
    <tr>
    </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>

    </div>

    <h4 class="product_cat1">Previous Year Vs Current Year</h4>

    
    
    <div class="no-border" id="all-product-cat-1-submitting-country-2022vs2023">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody>
          <tr><td>
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-submitting-country-ly-vs-ty.png">
              <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-submitting-country-ly-vs-ty.png" ></a>
              </td></tr>
            </tbody>
          </table>
          <a href="#" class="gototop">Go to Top</a>
</div>
    
<h3 class="product_cat1" id="top2_submitting">#2 - Submitting Country</h3>

    <div class="no-border" id="all-product-cat-1-submitting-country-Annual-Percentage">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 
    
        <tr>
          <th style="text-align:center;">Annual Total</th>
          <th style="text-align:center;">Cumulative Total and YoY Change</th>
        </tr> 
        <tr>
          <td style="text-align:center; width:50%" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-submitting-country-annual-alerts.png">
              <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-submitting-country-annual-alerts.png"  ></a></td>
          <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-submitting-country-annual-percentage.png">
              <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-submitting-country-annual-percentage.png"  ></a></td>
        </tr> 
    
        </tbody>
        </table>
        <a href="#" class="gototop">Go to Top</a>

        </div>

<h3 class="product_cat1" id="top2_risk">#2 - Risk Category</h3>
<h4 class="product_cat1">Previous Year Vs Current Year</h4>

<div class="no-border" id="all-product-cat-1-risk-category-2022vs2023">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
    <tbody>
      <tr><td>
        <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-risk-category-ly-vs-ty.png">
          <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-risk-category-ly-vs-ty.png" ></a>
          </td></tr></tbody></table>
          <a href="#" class="gototop">Go to Top</a>
</div>

<h4 class="product_cat1">Annual Total / Annual Percentage of Total</h4>

    <div class="no-border" id="all-product-cat-1-risk-category-Annual-Percentage">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 

        <tr>
          <th style="text-align:center;">Annual Total</th>
          <th style="text-align:center;">Cumulative Total and YoY Change</th>
        </tr> 
        <tr>
          <td style="text-align:center; width:50%" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-risk-category-annual-alerts.png">
              <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-risk-category-annual-alerts.png"  ></a></td>
          <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-risk-category-annual-alerts-percentage.png">
              <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-risk-category-annual-alerts-percentage.png"  ></a></td>
        </tr> 
    
        </tbody>
        </table>
        <a href="#" class="gototop">Go to Top</a>

        </div>
        
<h3 class="product_cat1" id="top2_counterfeit">#2 - Counterfeit </h3>
<h4 class="product_cat1">Previous Year Vs Current Year </h4>

        <div class="no-border" id="all-product-cat-1-counterfeit-2022vs2023">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
            <tbody>
              <tr>
                <td>
                  <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-counterfeit-ly-vs-ty.png">
                  <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-counterfeit-ly-vs-ty.png"  >
                  </a>
                </td>
              </tr>
            </tbody>
        </table>
          <a href="#" class="gototop">Go to Top</a>
        </div>

        <h4 class="product_cat1">Annual Total and Annual Percentage of Total</h4>


    <div class="no-border" id="all-product-cat-1-counterfeit-Annual-Percentage">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 
 
        <tr>
          <th style="text-align:center;">Annual Total</th>
          <th style="text-align:center;">Cumulative Total and YoY Change</th>
        </tr> 
        <tr>
          <td style="text-align:center; width:50%" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-counterfeit-annual-alerts.png">
              <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-counterfeit-annual-alerts.png"  ></a></td>
          <td style="text-align:center;" >
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-counterfeit-annual-alerts-percentage.png">
              <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-counterfeit-annual-alerts-percentage.png"  ></a></td>
        </tr> 
      </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>

    </div>   
    

    <h3 class="product_cat1" id="top2_action">#2 - Compulsory / Voluntary Action Required</h3>

    <h4 class="product_cat1">Previous Year Vs Current Year</h4>

    <div class="no-border" id="all-product-cat-1-action-required-2022vs2023">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody>
          <tr><td>
            <a href= "https://rodders.me/safetygate/img-2023/all-countries-product-1-action-required-ly-vs-ty.png">
              <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-action-required-ly-vs-ty.png"></a>
              </td></tr></tbody></table>
              <a href="#" class="gototop">Go to Top</a>
</div>

<h4 class="product_cat1">Annual Total / Compulsory Vs Voluntary Total</h4>

        <div class="no-border" id="all-product-cat-1-action-required-CvsV">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
          <tbody> 

            <tr>
              <th style="text-align:center;">Annual Total</th>
              <th style="text-align:center;">Compulsory Vs Voluntary Total</th>
            </tr> 
            <tr>
              <td style="width:50%">
                <a href ="https://rodders.me/safetygate/img-2023/all-countries-product-1-action-required-annual-alerts.png">
                <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-action-required-annual-alerts.png"  ></a></td>
              <td >
                <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-action-required-total-alerts.png">
                <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-action-required-total-alerts.png"  ></a></td>
            </tr> 
          </tbody>
        </table>
        <a href="#" class="gototop">Go to Top</a>

        </div>   
        
        <h3 class="product_cat1" id="top2_responsible">#2 - Compulsory / Voluntary Responsible Party</h3>
        <h4 class="product_cat1">Previous Year Vs Current Year</h4>

        <div class="no-border" id="all-product-cat-1-responsible-2022vs2023">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
            <tbody>
              <tr><td>
                <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-responsible-party-ly-vs-ty.png">
                  <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-responsible-party-ly-vs-ty.png"  ></a>
                  </td></tr></tbody></table>
                  <a href="#" class="gototop">Go to Top</a>
</div>

<h4 class="product_cat1">Annual Total / Compulsory Vs Voluntary Total</h4>

            <div class="no-border" id="all-product-cat-1-responsible-CvsV">
              <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
              <tbody> 
    
                <tr>
                  <th style="text-align:center;">Annual Total</th>
                  <th style="text-align:center;">Compulsory Vs Voluntary Total</th>
                </tr> 
                <tr>
                  <td style="width:50%">
                    <a href ="https://rodders.me/safetygate/img-2023/all-countries-product-1-responsible-party-annual-alerts.png">
                    <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-responsible-party-annual-alerts.png"  ></a></td>
                  <td >
                    <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-responsible-party-total-alerts.png">
                    <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-responsible-party-total-alerts.png"  ></a></td>
                </tr> 
              </tbody>
            </table>
            <a href="#" class="gototop">Go to Top</a>

            </div>   



<h3 class="product_cat1" id="top2_brands">#2 - Top Brands for Safety Alerts</h3>
<div class="no-border" id="all-product-cat-1-top30-brands">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
<tr >
<th >Top 30 Brands</th>
</tr>
</thead>
<tbody>
<tr >
<td style="text-align: center;">
  <a href="https://rodders.me/safetygate/img-2023/all-countries-product-1-top-30-brands-for-safety-alerts.png">
  <img src="https://rodders.me/safetygate/img-2023/all-countries-product-1-top-30-brands-for-safety-alerts.png" ></td>
</tr>
</tbody>
</table>
<a href="#" class="gototop">Go to Top</a>

</div>


<!-- Product 2 -->

<h2 class="product_cat2" id="top3_">#3 - Top 3 Product Categories</h2>
<h3 class="product_cat2"id="top3_annual">#3 - Total, Annual and Cumulative Alerts</h3>

<div class="no-border" id="all-product-cat-2-annual-cumulative">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 

    <tr>
      <th style="text-align:center;">Annual Alerts</th>
      <th style="text-align:center;">Cumulative Total and YoY Change</th>
    </tr> 
    <tr>
      <td style="text-align:center; width:50%" >
        <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-annual-and-cumulative-alerts.png">
          <img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-annual-and-cumulative-alerts.png" ></a></td>
      <td style="text-align:center;" >
        <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-annual-cumulative-alerts-and-yoy-change.png">
          <img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-annual-cumulative-alerts-and-yoy-change.png"  ></a></td>
    </tr> 
    <tr>
    </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>

    </div>

<h3 class="product_cat2"id="top3_submitting">#3 - Submitting Country</h3>
<h4>Previous Year Vs Current Year</h4>

    <div class="no-border" id="all-product-cat-2-submitting-country-2022vs2023">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody>
          <tr><td>
            <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-submitting-country-ly-vs-ty.png">
              <img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-submitting-country-ly-vs-ty.png" ></a>
              </td></tr></tbody></table>
              <a href="#" class="gototop">Go to Top</a>
</div>
<h4>Annual Total and Annual Percentage of Total</h4>


    <div class="no-border" id="all-product-cat-2-submitting-country-Annual-Percentage">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 
    
        <tr>
          <th style="text-align:center;">Annual Total</th>
          <th style="text-align:center;">Cumulative Total and YoY Change</th>
        </tr> 
        <tr>
          <td style="text-align:center; width:50%" ><a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-submitting-country-annual-alerts.png"><img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-submitting-country-annual-alerts.png"  ></a></td>
          <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-submitting-country-annual-percentage.png"><img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-submitting-country-annual-percentage.png"  ></a></td>
        </tr> 
    
        </tbody>
        </table>
        <a href="#" class="gototop">Go to Top</a>

        </div>

<h3 class="product_cat2"id="top3_risk">#3 - Risk Category</h3>
<h4>Previous Year Vs Current Year</h4>


<div class="no-border" id="all-product-cat-2-risk-category-2022vs2023">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
    <tbody>
      <tr><td>
        <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-risk-category-ly-vs-ty.png">
        <img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-risk-category-ly-vs-ty.png" ></p></a>
        </td></tr></tbody></table>
        <a href="#" class="gototop">Go to Top</a>
</div>
<h4>Annual Total and Annual Percentage of Total</h4>

    <div class="no-border" id="all-product-cat-2-risk-category-Annual-Percentage">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 

        <tr>
          <th style="text-align:center;">Annual Total</th>
          <th style="text-align:center;">Annual Percentage of Total</th>
        </tr> 
        <tr>
          <td style="text-align:center; width:50%" ><a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-risk-category-annual-alerts.png"><img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-risk-category-annual-alerts.png"  ></a></td>
          <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-risk-category-annual-alerts-percentage.png"><img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-risk-category-annual-alerts-percentage.png"  ></a></td>
        </tr> 
    
        </tbody>
        </table>
        <a href="#" class="gototop">Go to Top</a>

        </div>
        
        <h3 class="product_cat2"id="top3_counterfeit">#3 - Counterfeit </h3>
        <h4>Previous Year Vs Current Year</h4>


        <div class="no-border" id="all-product-cat-2-counterfeit-2022vs2023">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
            <tbody>
              <tr><td>
                <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-counterfeit-ly-vs-ty.png">
                  <img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-counterfeit-ly-vs-ty.png"  ></a>
</td></tr></tbody></table>
<a href="#" class="gototop">Go to Top</a>
</div>

<h4>Annual Total and Annual Percentage of Total</h4>


    <div class="no-border" id="all-product-cat-2-counterfeit-Annual-Percentage">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
      <tbody> 

 
        <tr>
          <th style="text-align:center;">Annual Total</th>
          <th style="text-align:center;">Annual Percentage of Total</th>
        </tr> 
        <tr>
          <td style="text-align:center; width:50%" ><a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-counterfeit-annual-alerts.png"><img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-counterfeit-annual-alerts.png"  ></a></td>
          <td style="text-align:center;" ><a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-counterfeit-annual-alerts-percentage.png"><img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-counterfeit-annual-alerts-percentage.png"  ></a></td>
        </tr> 
      </tbody>
    </table>
    <a href="#" class="gototop">Go to Top</a>

    </div>   
    

<h3 class="product_cat2" id="top3_action">#3 - Compulsory / Voluntary Action Required </h3>        
<h4>Previous Year Vs Current Year</h4>

    <div class="no-border" id="all-product-cat-2-action-required-2022vs2023">
      <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
        <tbody>
          <tr><td>
            <a href = "https://rodders.me/safetygate/img-2023/all-countries-product-2-action-required-ly-vs-ty.png">
              <img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-action-required-ly-vs-ty.png"  ></a>
              </td></tr></tbody></table>
              <a href="#" class="gototop">Go to Top</a>
</div>

<h4>Annual Total and Compulsory Vs Voluntary Total</h4>

        <div class="no-border" id="all-product-cat-2-action-required-CvsV">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
          <tbody> 

            <tr>
              <th style="text-align:center;">Annual Total</th>
              <th style="text-align:center;">Compulsory Vs Voluntary Total</th>
            </tr> 
            <tr>
              <td style="width:50%">
                <a href ="https://rodders.me/safetygate/img-2023/all-countries-product-2-action-required-annual-alerts.png">
                <img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-action-required-annual-alerts.png"  ></a></td>
              <td >
                <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-action-required-total-alerts.png">
                <img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-action-required-total-alerts.png"  ></a></td>
            </tr> 
          </tbody>
        </table>
        <a href="#" class="gototop">Go to Top</a>

        </div>   
        
<h3 class="product_cat2" id="top3_responsible">#3 - Compulsory / Voluntary Responsible Party</h3>
<h4>Previous Year Vs Current Year</h4>


        <div class="no-border" id="all-product-cat-2-responsible-2022vs2023">
          <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
            <tbody>
              <tr><td>
                <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-responsible-party-ly-vs-ty.png">
                  <img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-responsible-party-ly-vs-ty.png"  ></a>
                  </td></tr></tbody></table>
                  <a href="#" class="gototop">Go to Top</a>
</div>

<h4>Annual Total Compulsory Vs Voluntary Total</h4>

        <div class="no-border" id="all-product-cat-2-responsible-CvsV">
              <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
              <tbody> 
    
                <tr>
                  <th style="text-align:center;">Annual Total</th>
                  <th style="text-align:center;">Compulsory Vs Voluntary Total</th>
                </tr> 
                <tr>
                  <td style="width:50%">
                    <a href ="https://rodders.me/safetygate/img-2023/all-countries-product-2-responsible-party-annual-alerts.png">
                    <img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-responsible-party-annual-alerts.png"  ></a></td>
                  <td >
                    <a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-responsible-party-total-alerts.png">
                    <img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-responsible-party-total-alerts.png"  ></a></td>
                </tr> 
              </tbody>
            </table>
            <a href="#" class="gototop">Go to Top</a>

            </div>   



<h3 class="product_cat2"  id="top3_brands">#3 - Top Brands for Safety Alerts</h3>
<div class="no-border" id="all-product-cat-2-top30-brands">
  <table class="datatable" style="margin-right:auto;margin-left:0px; width:auto">
  <tbody> 
<tr >
<th >Top 30 Brands</th>
</tr>
</thead>
<tbody>
<tr >
<td style="text-align: center;"><a href="https://rodders.me/safetygate/img-2023/all-countries-product-2-top-30-brands-for-safety-alerts.png">
  <img src="https://rodders.me/safetygate/img-2023/all-countries-product-2-top-30-brands-for-safety-alerts.png" ></td>
</tr>
</tbody>
</table>
<a href="#" class="gototop">Go to Top</a>
<br><br>
<br>
<br>
</div>

</b>


<script src="projects-2024.js"> </script>

<?php include 'html-inc/footer.php'; ?>
    <script src="/js/coder.min.6ae284be93d2d19dad1f02b0039508d9aab3180a12a06dcc71b0b0ef7825a317.js"></script>

</body>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<!-- <script src="../../scripts/comparison.js"> </script> -->

<script>
    // Hover tips

    tippy('#PresentAnnual', {content: 'Programmatic Recreation of "official" visualisations', theme: 'tomato', placement: 'right-end'});
    tippy('#AnnualTable', {content: 'Annual Alerts issued per year', theme: 'tomato', placement: 'right-end'});
    tippy('#all-AnnualCumulative', {content: 'Cumulative and annual safety alerts issued Worldwide.', theme: 'tomato'});
    tippy('#all-AnnualYoY', {content: 'Cumulative and annual YoY change safety alerts issued Worldwide.', theme: 'tomato'});
    tippy('#all-AnnualGeoplot', {content: 'Submitting Country Previous Year Vs Current Year.', theme: 'tomato'});
    tippy('#all-submitting-country-2022vs2023', {content: 'Submitting Country Previous Year Vs Current Year percentage of safety alerts.', theme: 'tomato'});
    tippy('#all-submitting-country-Annual-and-Percentage', {content: 'Submitting Country Annual Total and Annual Percentage of Total.', theme: 'tomato'});
    tippy('#all-Cosmetics-Coo', {content: 'Cosmetics - Country of Product Origin Previous Year Vs Current Year.', theme: 'tomato'});
    tippy('#all-Cosmetics-Brands', {content: 'Cosmetics - Top 30 brands for Safety Alerts.', theme: 'tomato'});
    tippy('#all-Economic-Area-2022-vs-2023', {content: 'Previous Year Vs Current Year comparison of Economic Area of Product Origin (Feature Engineered) by Percentage of total for top 15.', theme: 'tomato'});
    tippy('#all-Coo-2022-vs-2023', {content: 'Previous Year Vs Current Year comparison of percentage of safety alerts issued to Country of Product Origin.', theme: 'tomato'});
    tippy('#all-Coo-Annual-Percentage', {content: 'Country of product origin, Annual Total and Annual Percentage of Total..', theme: 'tomato'});
    tippy('#all-product-category-2022vs2023', {content: 'Product Category Previous Year Vs Current Year percentage of Total safety alerts.', theme: 'tomato'});
    tippy('#all-product-category-Annual-Percentage', {content: 'Product Category , Annual Total and Annual Percentage of Total..', theme: 'tomato'});
    tippy('#all-risk-category-2022vs2023', {content: 'Risk Category type Previous Year Vs Current Year percentage of safety alerts.', theme: 'tomato'});
    tippy('#all-risk-category-Annual-Percentage', {content: 'Risk Category, Annual Total and Annual Percentage of Total..', theme: 'tomato'});
    tippy('#all-counterfeit-2022vs2023', {content: 'Counterfeit type Previous Year Vs Current Year percentage of safety alerts.', theme: 'tomato'});
    tippy('#all-counterfeit-Annual-Percentage', {content: 'Counterfeit, Annual Total and Annual Percentage of Total.', theme: 'tomato'});
    tippy('#all-action-required-2022vs2023', {content: 'Compulsory and Voluntary action required Previous Year Vs Current Year percentage of safety alerts.', theme: 'tomato'});
    tippy('#all-action-required-Annual-CvsV', {content: 'Compulsory and Voluntary action required Annual Total and Total Comparison.', theme: 'tomato'});
    tippy('#all-responsible-2022vs2023', {content: 'Compulsory and Voluntary Responsible Party Previous Year Vs Current Year percentage of safety alerts.', theme: 'tomato'});
    tippy('#all-responsible-Annual-CvsV', {content: 'Compulsory and Voluntary Responsible Party Annual Total and Total Comparison.', theme: 'tomato'});
    tippy('#all-top15-kfs', {content: 'Top 15 countries, fact sheet. Annual & Cumulative alerts, top 3 Product and Risk categories.', theme: 'tomato', placement: 'right-end'});
    tippy('#all-top30-brands', {content: 'Top 30 Brands For safety alerts.', theme: 'tomato'});
    

    // Product 1 / cat-0

    tippy('#all-product-cat-0-annual-cumulative', 
        {content: '<b><u>#1 Product Category</u></b><br>Cumulative and annual safety alerts issued.',
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-0-submitting-country-2022vs2023', 
        {content: '<b><u>#1 Product Category</u></b><br>2022 Vs 20232 Submitting Country as percentage of total safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-0-submitting-country-Annual-Percentage', 
        {content: '<b><u>#1 Product Category</u></b><br>Submitting Country Annual Total and Annual percentage of total safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-0-risk-category-2022vs2023', 
        {content: '<b><u>#1 Product Category</u></b><br>2022 Vs 20232 Risk Category as percentage of total safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-0-risk-category-Annual-Percentage', 
        {content: '<b><u>#1 Product Category</u></b><br>Risk Category Annual Total and Annual percentage of total safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-0-counterfeit-2022vs2023', 
        {content: '<b><u>#1 Product Category</u></b><br>Counterfeit Type Previous Year Vs Current Year percentage of safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-0-counterfeit-Annual-Percentage', 
        {content: '<b><u>#1 Product Category</u></b><br>Counterfeit Type Annual Total and Annual percentage of total safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

     tippy('#all-product-cat-0-action-required-2022vs2023', 
        {content: '<b><u>#1 Product Category</u></b><br>Compulsory and Voluntary action required Previous Year Vs Current Year percentage of safety alerts.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-0-action-required-CvsV', 
        {content: '<b><u>#1 Product Category</u></b><br>Compulsory and Voluntary action required Annual and Total Comparison.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-0-responsible-2022vs2023', 
        {content: '<b><u>#1 Product Category</u></b><br>Compulsory and Voluntary Responsible Party Previous Year Vs Current Year percentage of safety alerts.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-0-responsible-CvsV', 
        {content: '<b><u>#1 Product Category</u></b><br>Compulsory and Voluntary Responsible Party Annual and Total Comparison.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-0-top30-brands', 
    {content: '<b><u>#1 Product Category</u></b><br>Top 30 Brands For safety alerts.', 
    theme: 'tomato', allowHTML: true,});

// Product 2 / cat-1
    tippy('#all-product-cat-1-annual-cumulative', 
        {content: '<b><u>#2 Product Category</u></b><br>Cumulative and annual safety alerts issued to Country of product origin.',
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-1-submitting-country-2022vs2023', 
        {content: '<b><u>#2 Product Category</u></b><br>2022 Vs 20232 Submitting Country as percentage of total safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-1-submitting-country-Annual-Percentage', 
        {content: '<b><u>#2 Product Category</u></b><br>Submitting Country Annual Total and Annual percentage of total safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-1-risk-category-2022vs2023', 
        {content: '<b><u>#2 Product Category</u></b><br>2022 Vs 20232 Risk Category as percentage of total safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-1-risk-category-Annual-Percentage', 
        {content: '<b><u>#2 Product Category</u></b><br>Risk Category Annual Total and Annual percentage of total safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-1-counterfeit-2022vs2023', 
        {content: '<b><u>#2 Product Category</u></b><br>Counterfeit Type Previous Year Vs Current Year percentage of safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-1-counterfeit-Annual-Percentage', 
        {content: '<b><u>#2 Product Category</u></b><br>Counterfeit Type Annual Total and Annual percentage of total safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

     tippy('#all-product-cat-1-action-required-2022vs2023', 
        {content: '<b><u>#2 Product Category</u></b><br>Compulsory and Voluntary action required Previous Year Vs Current Year percentage of safety alerts.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-1-action-required-CvsV', 
        {content: '<b><u>#2 Product Category</u></b><br>Compulsory and Voluntary action required Annual and Total Comparison.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-1-responsible-2022vs2023', 
        {content: '<b><u>#2 Product Category</u></b><br>Compulsory and Voluntary Responsible Party Previous Year Vs Current Year percentage of safety alerts.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-1-responsible-CvsV', 
        {content: '<b><u>#2 Product Category</u></b><br>Compulsory and Voluntary Responsible Party Annual and Total Comparison.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-1-top30-brands', 
    {content: '<b><u>#2 Product Category</u></b><br>Top 30 Brands For safety alerts.', 
    theme: 'tomato', allowHTML: true,});


    // Product 3 / cat-2
  tippy('#all-product-cat-2-annual-cumulative', 
        {content: '<b><u>#3 Product Category</u></b><br>Cumulative and annual safety alerts issued to Country of product origin.',
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-2-submitting-country-2022vs2023', 
        {content: '<b><u>#3 Product Category</u></b><br>2022 Vs 20232 Submitting Country as percentage of total safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-2-submitting-country-Annual-Percentage', 
        {content: '<b><u>#3 Product Category</u></b><br>Submitting Country Annual Total and Annual percentage of total safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-2-risk-category-2022vs2023', 
        {content: '<b><u>#3 Product Category</u></b><br>2022 Vs 20232 Risk Category as percentage of total safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-2-risk-category-Annual-Percentage', 
        {content: '<b><u>#3 Product Category</u></b><br>Risk Category Annual Total and Annual percentage of total safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-2-counterfeit-2022vs2023', 
        {content: '<b><u>#3 Product Category</u></b><br>Counterfeit Type Previous Year Vs Current Year percentage of safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-2-counterfeit-Annual-Percentage', 
        {content: '<b><u>#3 Product Category</u></b><br>Counterfeit Type Annual Total and Annual percentage of total safety alerts issued.', 
        theme: 'tomato', allowHTML: true,});

     tippy('#all-product-cat-2-action-required-2022vs2023', 
        {content: '<b><u>#3 Product Category</u></b><br>Compulsory and Voluntary action required Previous Year Vs Current Year percentage of safety alerts.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-2-action-required-CvsV', 
        {content: '<b><u>#3 Product Category</u></b><br>Compulsory and Voluntary action required Annual and Total Comparison.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-2-responsible-2022vs2023', 
        {content: '<b><u>#3 Product Category</u></b><br>Compulsory and Voluntary Responsible Party Previous Year Vs Current Year percentage of safety alerts.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-2-responsible-CvsV', 
        {content: '<b><u>#3 Product Category</u></b><br>Compulsory and Voluntary Responsible Party Annual and Total Comparison.', 
        theme: 'tomato', allowHTML: true,});

    tippy('#all-product-cat-2-top30-brands', 
    {content: '<b><u>#3 Product Category</u></b><br>Top 30 Brands For safety alerts.', 
    theme: 'tomato', allowHTML: true,});

    tippy('#CompareCountries', {content: 'Select any two countries and click compare to view the visualisations side by side.', theme: 'tomato', placement: 'right-end'});
    tippy('#JumptoSection', {content: 'Select a section to jump to.', theme: 'tomato'});
    tippy('#CountryReport', {content: 'Select a Country to view a detailed report or compare countries.', theme: 'tomato', placement: 'left',});




    

  </script>



</html>






