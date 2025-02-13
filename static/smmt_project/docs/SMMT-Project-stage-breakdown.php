  <!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta name="color-scheme" content="dark">

<link rel="stylesheet" type="text/css" href="/css/custom-menu2.css">
<link rel="stylesheet" type="text/css" href="/css/project-style.css">
<link rel="stylesheet" type="text/css" href="/css/custom.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">



<meta name="color-scheme" content="dark light">

<style>

</style>
</head>
<body>
<body class="jp-Notebook" data-jp-theme-light="false" data-jp-theme-name="JupyterLab Dark">
  <div class="page-container">
    <!-- BEGIN NAVIGATION -->
    <div class="toolbar" style="width:100%; text-align:center; align-items: center;">
    <?php include 'menu-smmt.php'; ?>        
    </div>
    <!-- END NAVIGATION -->
    <div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs jp-mod-noInput" style="padding: 20px 0"></div>
<h1 id="project-goal">Project Goal</h1>
<p>To obtain additional monthly car registration data to add to my DVLA
Registration Dashboard in Tableau.</p>
<h1
id="monthly-vehicle-registration-by-fuel-type-and-keepership">Monthly
Vehicle Registration by Fuel Type and Keepership</h1>
<p>This is additional data being added to the DVLA Registered Vehicles
dashboard I maintain on Tableau. The DVLA data is issued annually and
only gives annual totals for registered vehicles. SMMT publish data
monthly in an image format and this project, grabs that data from the
images and processes it into a CSV file suitable for import into
Tableau.</p>
<p><a
href="https://public.tableau.com/authoring/VehiclesRegisteredforUKdf_VEH0220/Frontpage">https://public.tableau.com/authoring/VehiclesRegisteredforUKdf_VEH0220/F</a></p>
<p><A href ="https://public.tableau.com/app/profile/rod.slater/viz/VehiclesRegisteredforUKdf_VEH0220/FrontPage">
  <img alt="Tableau Dashboard frontpage" src="/smmt_project/img/tableau-dashboard-fp.png"></a></p>
<h2 id="intent">Intent</h2>
<p>Extract data from SMMT Public Vehicle Registration Data published
monthly in png and jpg image format, of varying image sizes, and then
parse this data into a database to enable querying through a
dashboard.</p>
<h2 id="important-note">Important Note</h2>
<p>The SMMT (Society of Motor Manufacturers and Traders) make their data
available to the public through their news publication service. The data
published by the SMMT is copyright and for this project I have applied a
random percentage to the data to ensure the SMMT copyright is
maintained.</p>
<p>If you wish to source data from the SMMT, please contact them
directly:
<a href="https://www.smmt.co.uk/vehicle-data/production-reports/">https://www.smmt.co.uk/vehicle-data/production-reports/</a></p>

<h2 id="preparation">Preparation</h2>

<h3 id="obtain-images">Obtain Images</h3>
<p>The images can be downloaded from the SMMT website and Google Images,
however the URLs are not consistent :-) and while 20% of these files
were downloaded with an automated <code>wget</code> attempt, there were
still significant errors from missing files. This meant, hand
downloading the missing files that failed the <code>wget</code> attempt
using a logical expansion.</p>

<h3 id="check-images">Check Images</h3>
<p>A sanity check was performed to check for inconsistencies in image
sizes which would affect the OCR process.</p>
<p><code>check\_image\_sizes.py script</code></p>
<p>This script produces a report summarising the image sizes.</p>
<p><img alt="Image Sizer output" src="/smmt_project/img/image-sizer.png"></p>
<p>Image sizes were not consistent.</p>
<p>From this it's clear the cropping function calls will need to be
adapted to the different images sizes and formats.</p>

<h3 id="image-data-layout">Image data layout</h3>
<p>SMMT produced data in two formats that changed over time:</p>
<p>The OLD format contained both fuel type and Keepership type in one
image:</p>

<div class="datatable-container">
<table class="datatable">
<thead>
<tr>
<th>
Source Image - Old Format fuel and customer in one
</th>
<th>
Cropped Image
</th>
</tr>
</thead>
<tr>
<td>
<img alt="New Format dual" src="/smmt_project/img/old-format-full.png">
</td>
<td>
<img alt="New Format dual cropped" src="/smmt_project/img/old-format-crop.png">
</td>
</tr>
</table>
</div>
<p>I only want the month data, the year data can be calculated, and
sticking to monthly data simplifies everything.</p>
<p>The image is cropped before the OCR function to limit the OCR to a
area of the image I'm interested in and limit extraneous data being
captured.</p>
<p>The newer format separated fuel type and Keepership type into two
separate images.</p>
<div class="datatable-container">
<table class="datatable">
<thead>
<tr>
<th>
Source Image - New Format Keepership
</th>
<th>
Cropped Image
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<img alt="New Format customer" src="/smmt_project/img/new-format-customer-full.png">
</td>
<td>
<img alt="New Format customer cropped" src="/smmt_project/img/new-format-customer-crop1.png">
</td>
</tr>
<tr>
<td>
Source Image - New Format Fuel Type
</td>
<td>
Cropped Image
</td>
</tr>
<tr>
<td>
<img alt="New Format fuel" src="/smmt_project/img/new-format-fuel-full.png">
</td>
<td>
<img alt="New Format fuel cropped" src="/smmt_project/img/new-format-fuel-crop1.png">
</td>
</tr>
</tbody>
</table>
</div>
<h2 id="data-structures">Data Structures</h2>
<p>I'm after a consistent monthly figure from this data, along with
additional fields that can be used to validate results and spot any OCR
errors not picked up during the OCR conversion process. While
it's not necessary to capture a total row, the Total row can be used to
to validate accuracy, so while not required for the final data set, it's
helpful for validation.</p>
<div class="datatable-container">
<table class="datatable">
<thead>
<tr>
<th>
Field Name
</th>
<th>
Contents
</th>
<th>
Type
</th>
<th>
Description
</th>
</tr>
</thead>
<tr>
<td>
Usage
</td>
<td>
Public<br>Private
</td>
<td>
string
</td>
<td>
Public dashboard data is scrambled
</td>
</tr>
<tr>
<td>
Source
</td>
<td>
new<br>old
</td>
<td>
String
</td>
<td>
Which format the data came from<br>old or new
</td>
</tr>
<tr>
<td>
Year
</td>
<td>
The year of the data
</td>
<td>
Int
</td>
<td>
Useful helpers in Tableau sometimes
</td>
</tr>
<tr>
<td>
Month
</td>
<td>
The month of the data
</td>
<td>
String
</td>
<td>
Useful helpers in Tableau sometimes
</td>
</tr>
<tr>
<td>
Topcat
</td>
<td>
Fossil Fuel<br>Renewable Fuel
</td>
<td>
String
</td>
<td>
Top Category
</td>
</tr>
<tr>
<td>
Subcat
</td>
<td>
Petrol<br>Diesel<br>MHEV Petrol<br>MHEV Diesel<br>Plugin Hybrid
(PHEV)<br>Battery Electric (BEV)<br>Hybrid Electric
(HEV)<br>Fleet<br>Private<br>Business<br>Total
</td>
<td>
String
</td>
<td>
Sub Category
</td>
</tr>
<tr>
<td>
Quantity
</td>
<td>
Number of vehicles shipped
</td>
<td>
Int
</td>
<td>
</td>
</tr>
<tr>
<td>
Acquire_Date
</td>
<td>
</td>
<td>
Date
</td>
<td>
Date the data was acquired and entered into the db
</td>
</tr>
<tr>
<td>
Acquire_By
</td>
<td>
</td>
<td>
String
</td>
<td>
Who acquired the data
</td>
</tr>
<tr>
<td>
Acquire_Method
</td>
<td>
Tesseract<br>
</td>
<td>
String
</td>
<td>
Data Acquisition Method
</td>
</tr>
</table>
</div>
<h2 id="breaking-down-the-tasks">Breaking down the tasks</h2>
<ol type="1">
<li>OCR Image files into a text file for three different layouts</li>
<li>Data Cleanse</li>
<li>Feature Engineering</li>
<li>Reformat csv through pandas into long format, save in a new csv with
additional engineered features</li>
</ol>
<h2 id="caveats">Caveats</h2>
<ul>
<li>There are two layout formats in the images, I'll call them
old-format and new-format</li>
<li>The image sizes change
<ul>
<li>for data through 2023 the image sizes have been consistent</li>
<li>Prior to this image sizes can vary a lot, attempting to calculate
image crop dimensions from image sizes was inconsistent, sometimes
<code>pillow</code> doesn't report the right image dimension in the old
formats, not sure why, so images have to manually sorted into sizes
which is identified in the file name by adding 'x' e.g. 201x6</li>
<li>However on the up side, for the old image formats, we only need the
full width and half the height of the image to ocr so we can math
that.</li>
</ul></li>
<li>There's no primary source for dates prior to Oct 2016,but we can get
that data from the previous year listed in the old format for the
following year e.g.Oc-2015 data comes from the Oct-2016 image.</li>
</ul>
<h3 id="order-of-operations">Order of operations</h3>
<h4 id="image-to-text-conversion">1. Image to Text conversion</h4>
<ol type="1">
<li>Dual Type - Old Format : Crop and OCR images, for both fuel type and
keepership, store results in a text file .TXT</li>
<li>Fuel Type - NEW Format : Crop and OCR images, for Fuel Types, store
results in a text file .TXT</li>
<li>Keepership Type - NEW Format : Crop and OCR images, for Fuel Types,
store results in a text file .TXT</li>
</ol>
<h4 id="data-cleansing">2. Data Cleansing</h4>
<ol type="1">
<li>Fuel Type - Old Format : data cleanse TXT File, format and save into
a CSV</li>
<li>Fuel Type - NEW Format : data cleanse TXT File, format and save into
a CSV</li>
<li>Keepership Type - NEW Format : data cleanse TXT File, format and
save into a CSV</li>
</ol>
<h4 id="feature-engineering-feature-additions-error-checking-and-correction">3. Feature engineering, Feature additions, error checking and correction</h4>
<p>The OCR process creates errors.</p>
<p>While steps are taken during the Feature Engineering stage to
identify these errors, additional efforts are required:</p>
<ul>
<li><p>The Mk1 eyeball is also needed.</p></li>
<li><p>The final validation check for this stage is to ensure there are
a consistent number of fields for each record and that the right values
are being detected for <code>int</code> and <code>strings</code></p>
<ol type="1">
<li>Dual Type - Old Format : Add top level category for fuel types,
convert fuel types into sub categories, validation check / error
reporting, save to csv</li>
<li>Fuel Type - NEW Format : Add top level category for fuel types,
convert fuel types into sub categories, validation check / error
reporting, save to csv</li>
<li>Keepership Type - NEW Format : Add top level category for fuel
types, convert fuel types into sub categories, validation check / error
reporting, save to csv</li>
</ol></li>
</ul>
<p>So we've got nine operations to carry out across 145 image files of
different image layouts and image dimensions.</p>
<h2 id="notebooks-and-outputs">Notebooks and outputs</h2>
<h3 id="new-format-fuel-type">New Format Fuel Type</h3>
<h4
id=""><a href="/smmt_project/docs/SMMT-1a-OCR-fueltype-newformat.php">SMMT-1a-OCR-fueltype-newformat.ipynb</a>
<code>1a-OCR-fueltype-newformat.ipynb</code></h4>
<p><img alt="New Format Fuel" src="/smmt_project/img/new-format-fuel-full.png"></p>
<p>Crop and OCR images</p>
<p><img alt="New Format Fuel cropped" src="/smmt_project/img/new-format-fuel-crop1.png"></p>
<p>Store results in a text file
<code>../ocr/OUT_1a_fueltype_OCR_newformat-2023</code></p>
<p>Example output stored in the text file:</p>
<pre><code>  MAY

  2023 2022
  Diesel 5758 7614
  Petrol 59766  56767
  MHEVdiesel 5316 5823
  MHEV petrol 23034 16842
  BEV 24513 15448
  PHEV 9025 7339
  HEV 17792 14561
  TOTAL 145204 124394</code></pre>
<h4
id=""><a href = "/smmt_project/docs/SMMT-1b-CLEANSE-fueltype-newformat.php"><code>SMMT-1b-CLEANSE-fueltype-newformat.ipynb</code></a></h4>
<p>Data cleanse TXT File, format and save into a CSV
<code>../ocr/OUT_1b_fueltype_CLEANSE_newformat-2023.csv</code></p>
<p>Example output stored in CSV file</p>
<pre><code>  May,,
  ,2023,2022
  Diesel,5758,7614
  Petrol,59766,56767
  MHEV_Diesel,5316,5823
  MHEV_Petrol,23034,16842
  BEV,24513,15448
  PHEV,9025,7339
  HEV,17792,14561
  TOTAL,145204,124394</code></pre>
<h4
id=""><a href="/smmt_project/docs/SMMT-1c-SAVE-fueltype-newformat.php"><code>SMMT-1c-SAVEfueltype-newformat.ipynb</code></a></h4>
<p>Add top level category for fuel types, convert fuel types into sub
categories, validation check / error reporting, shuffle data into the
right fields, save to csv
<code>../ocr/OUT_1c_fueltype_newformat_FINISHED-2023.csv</code></p>
<p>Example output store in CSV file</p>
<pre><code>  0,Private,Primary,2023,May,Fossil,Diesel,5758,06-12-23,Tesseract-new,Manual,May-2023
  1,Private,Secondary,2022,May,Fossil,Diesel,7614,06-12-23,Tesseract-new,Manual,May-2022
  2,Private,Primary,2023,May,Fossil,Petrol,59766,06-12-23,Tesseract-new,Manual,May-2023
  3,Private,Secondary,2022,May,Fossil,Petrol,56767,06-12-23,Tesseract-new,Manual,May-2022
  4,Private,Primary,2023,May,xHEV,MHEV_Diesel,5316,06-12-23,Tesseract-new,Manual,May-2023
  5,Private,Secondary,2022,May,xHEV,MHEV_Diesel,5823,06-12-23,Tesseract-new,Manual,May-2022
  6,Private,Primary,2023,May,xHEV,MHEV_Petrol,23034,06-12-23,Tesseract-new,Manual,May-2023
  7,Private,Secondary,2022,May,xHEV,MHEV_Petrol,16842,06-12-23,Tesseract-new,Manual,May-2022
  8,Private,Primary,2023,May,Plugin,BEV,24513,06-12-23,Tesseract-new,Manual,May-2023
  9,Private,Secondary,2022,May,Plugin,BEV,15448,06-12-23,Tesseract-new,Manual,May-2022
  10,Private,Primary,2023,May,Plugin,PHEV,9025,06-12-23,Tesseract-new,Manual,May-2023
  11,Private,Secondary,2022,May,Plugin,PHEV,7339,06-12-23,Tesseract-new,Manual,May-2022
  12,Private,Primary,2023,May,xHEV,xHEV,17792,06-12-23,Tesseract-new,Manual,May-2023
  13,Private,Secondary,2022,May,xHEV,xHEV,14561,06-12-23,Tesseract-new,Manual,May-2022
  14,Private,Primary,2023,May,Total,Total,145204,06-12-23,Tesseract-new,Manual,May-2023
  15,Private,Secondary,2022,May,Total,Total,124394,06-12-23,Tesseract-new,Manual,May-2022</code></pre>

  <h3 >New Format Keepership Type</h3>

  <h4 >
    <a href="/smmt_project/docs/SMMT-3a-OCR-custtype-newformat.php"><code>SMMT-3a-OCR-custtype-newformat.ipynb</code></a></h4>
<p><img alt="New Format customer" src="/smmt_project/img/new-format-customer-full.png"></p>
<p>Crop and OCR images</p>
<p><img alt="New Format customer cropped"  src="/smmt_project/img/new-format-customer-crop1.png"></p>
<p>Store results in a text file
<code>../ocr/OUT_3a_custtype_OCR_newformat-2023</code></p>
<p>Example output stored in the text file:</p>
<pre><code>  MAY
  2023 2022
  Private 65932  66242
  Fleet 76207 55649
  Business 3065 2503
  TOTAL  145204  124394</code></pre>

  <h4 id="">
  <a href="/smmt_project/docs/SMMT-3b-CLEANSE-custtype-newformat.php"><code>SMMT-3b-CLEANSE-custtype-newformat.ipynb</code></a>
  </h4>

<p>data cleanse TXT File, format and save into a CSV </p>

<p>Example output stored in CSV file</p>

<pre><code>
      May,,
      ,2023,2022
      Private,65932,66242
      Fleet,76207,55649
      Business,3065,2503
      TOTAL,145204,124394
</code></pre>
<h4> 
  <a href="/smmt_project/docs/SMMT-3c-SAVE-custtype-newformat.php"><code>SMMT-3c-SAVE-custtype-newformat.ipynb</code></a></h4>
<p>validation check / error reporting, save to csv
<code>../ocr/OUT_3c_custtype_newformat-FINISHED-2023.csv</code></p>
<p>Example output store in CSV file</p>
<pre><code>  ,Usage,Source,Year,Month,Topcat,Subcat,Quantity,Acquire_Date,Acquire_By,Acquire_ Method,fileDate
  8,Private,Primary,2023,May,Customer,Private,65932,06-12-23,Tesseract-new,Manual,May-2023
  9,Private,Secondary,2022,May,Customer,Private,66242,06-12-23,Tesseract-new,Manual,May-2022
  10,Private,Primary,2023,May,Customer,Fleet,76207,06-12-23,Tesseract-new,Manual,May-2023
  11,Private,Secondary,2022,May,Customer,Fleet,55649,06-12-23,Tesseract-new,Manual,May-2022
  12,Private,Primary,2023,May,Customer,Business,3065,06-12-23,Tesseract-new,Manual,May-2023
  13,Private,Secondary,2022,May,Customer,Business,2503,06-12-23,Tesseract-new,Manual,May-2022
  14,Private,Primary,2023,May,Customer,Total,145204,06-12-23,Tesseract-new,Manual,May-2023
  15,Private,Secondary,2022,May,Customer,Total,124394,06-12-23,Tesseract-new,Manual,May-2022</code></pre>

<h3 id="">OLD Format Fuel &amp; Keepership Type</h3>

<h4 id="">
<a href="/smmt_project/docs/SMMT-2a-OCR-fueltype-oldformat.php"><code>SMMT-2a-tesseract-fueltype-oldformat.ipynb</code></a></h4>
<p><img alt="Dual layout" src="/smmt_project/img/old-format-fueltype-full.png"></p>
<p>Crop and OCR images.</p>
<p><img alt="Cropped Dual Layout" src="/smmt_project/img/old-format-fueltype-crop.png"></p>
<p>Save results in a text file
<code>../ocr/OUT_2a_fueltype_OCR_oldformat-2023.txt</code></p>
<p>Example output stored in the text file:</p>
<pre><code>  October Total Diesel Petrol AFV Private Fleet Business
  2016 180168 89004 85139 6025 77821 96440 5907
  2015 177664 91177 81125 5362 78662 92596 6406
  change 144 244 49 1244 11 42 78
  Mkt share 2016 4944 473 33 432 535 33
  Mkt share 2015 513 457 30 443 521 36</code></pre>

  <h4 id="">
<a href="/smmt_project/docs/SMMT-2b-CLEANSE-fueltype-oldformat.php"><code>SMMT-2b-CLEANSE-fueltype-oldformat.ipynb</code></a></h4>
<p>Data cleanse TXT File, format into csv.</p>
<p>Save into a CSV
<code>../ocr/OUT_3a_custtype_CLEANSE_oldformat-2023.csv</code></p>
<p>Example output stored in CSV file</p>
<pre><code>  October,Total,Diesel,Petrol,AFV,Private,Fleet,Business
  2016,180168,89004,85139,6025,77821,96440,5907
  2015,177664,91177,81125,5362,78662,92596,6406</code></pre>

  <h4 id="">
    <a href="/smmt_project/docs/SMMT-2c-SAVE-fueltype-oldformat.php"><code>SMMT-2c-SAVE-fueltype-oldformat.ipynb</code></a></h4>
<p>Validation check / error reporting, variable shuffling with pandas
and recovery of OLD data without a primary source.</p>
<p>Save to csv
<code>../ocr/OUT_2c_fueltype_oldformat-FINISHED-2023.csv</code></p>
<p>Example output store in CSV file</p>
<table>
<tr>
<td>
,Usage,Source,Year,Month,Topcat,Subcat,Quantity,Acquire_Date,Acquire_By,Acquire_Method,fileDate
0,Private,Primary,2016,October,Fuel_TOTAL,Total,180168,03-07-23,tesseract-old,Manual,October-2016
1,Private,Primary,2016,October,Fossil,Diesel,89004,03-07-23,tesseract-old,Manual,October-2016
2,Private,Primary,2016,October,Fossil,Petrol,85139,03-07-23,tesseract-old,Manual,October-2016
3,Private,Primary,2016,October,Xhev,AFV,6025,03-07-23,tesseract-old,Manual,October-2016
4,Private,Primary,2016,October,Customer,Private,77821,03-07-23,tesseract-old,Manual,October-2016
5,Private,Primary,2016,October,Customer,Fleet,96440,03-07-23,tesseract-old,Manual,October-2016
6,Private,Primary,2016,October,Customer,Business,5907,03-07-23,tesseract-old,Manual,October-2016
7,Private,<font style="color:red; background-color:white">Secondary,2015,October</font>,Fuel_TOTAL,Total,177664,03-07-23,tesseract-old,Manual,October-2015
8,Private,<font style="color:red; background-color:white">Secondary,2015,October</font>Fossil,Diesel,91177,03-07-23,tesseract-old,Manual,October-2015
9,Private,<font style="color:red; background-color:white">Secondary,2015,October</font>Fossil,Petrol,81125,03-07-23,tesseract-old,Manual,October-2015
10,Private,<font style="color:red; background-color:white">Secondary,2015,October</font>Xhev,AFV,5362,03-07-23,tesseract-old,Manual,October-2015
11,Private,<font style="color:red; background-color:white">Secondary,2015,October</font>Customer,Private,78662,03-07-23,tesseract-old,Manual,October-2015
12,Private,<font style="color:red; background-color:white">Secondary,2015,October</font>Customer,Fleet,92596,03-07-23,tesseract-old,Manual,October-2015
13,Private,<font style="color:red; background-color:white">Secondary,2015,October</font>Customer,Business,6406,03-07-23,tesseract-old,Manual,October-2015
</td>
</tr>
</table>
<h2 id="last-steps">Last Steps</h2>
<p>The last steps are manual, recovering the missing data from primary
source (Oct-2015 to Sep-2016) is achieved by using the data from images
from the following year. Since it's simpler to just grab all the data,
primary data (the data for the file it's dated for) and secondary data
(the previous year is detailed in the file hence why we can recover 2015
data from the 2016 files) is grabbed at this stage but tagged with its
source: primary or secondary. While it's simple to filter current
primary data using the source field = 'primary' this would miss the
missing primary data, so the final manual step is to sort the data file
by date and change the source flag for Oct-2015 - Sep-2016 to primary
and since we are already manually editing the file, we may as well
remove the secondary data while we are at it.</p>
<p>Data is also 'scrambled' a bit to hide the true numbers because the
SMMT sell their data as a service and while this is not for commercial
use, it is the complete data set in CSV format from 2015 to the current
day, so it's quite valuable. The <code>usage</code> column is a flag for
me, Private is the real data, Public is the scrambled data you see on
the Tableau dashboard.</p>
