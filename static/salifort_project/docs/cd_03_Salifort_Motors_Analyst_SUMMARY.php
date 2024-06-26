<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta name="color-scheme" content="dark">
<meta name="color-scheme" content="dark light">
<title>Salifort Motors project - Analyst's Summary</title>

<link rel="stylesheet" type="text/css" href="/css/custom-menu2.css">
<link rel="stylesheet" type="text/css" href="/css/project-style.css">
<link rel="stylesheet" type="text/css" href="/css/custom.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>
    <div class="page-container">
    <!-- BEGIN NAVIGATION -->
    <div class="toolbar" style="width:100%; text-align:center; align-items: center;">
    <?php include 'menu-salifort.php'; ?>        
    </div>
    <!-- END NAVIGATION -->


<h1 id="analyst-summary">Analyst Summary</h1>
<h1>

    For internal analysts team eyes only

</h1>
<h2 id="document-information">Document Information</h2>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px;">
<tbody>
<tr>
<td style="width:25%">
Document Title
</td>
<td>
Salifort Motors - Analyst's Summary - for internal use only
</td>
</tr>
<tr>
<td>
Author
</td>
<td>
Rod Slater
</td>
</tr>
<tr>
<td>
Version
</td>
<td>
1.0
</td>
</tr>
<tr>
<td>
Created
</td>
<td>
01-11-2023
</td>
</tr>
<tr>
<td>
Modified
</td>
<td>
16-11-2023
</td>
</tr>
</tbody>
</table>
</div>
<h2 id="client-details">Client Details</h2>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto">
<tr>
<td style="width:25%">
Client Name
</td>
<td>
Salifort Motors
</td>
</tr>
<tr>
<td>
Client Contact
</td>
<td>
Mr HR Team
</td>
</tr>
<tr>
<td>
Client Email
</td>
<td>
hr@salifortmotors.it
</td>
</tr>
<tr>
<td>
Client Project
</td>
<td>
HR Team Data Driven Solutions from Machine Learning Models
</td>
</tr>
</table>
</div>
<div id="tableOfContents"></div>
<h2 id="initial-eda">Initial EDA</h2>
<h3 id="columns-renamed">Columns Renamed</h3>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px ">
<tr>
<th style="width:25%">
Old Column Name
</td>
<th>
New Column Name
</td>
</tr>
<tr>
<td>
satisfaction_level
</td>
<td>
satisfaction
</td>
</tr>
<tr>
<td>
last_evaluation
</td>
<td>
last_eval
</td>
</tr>
<tr>
<td>
average_monthly_hours
</td>
<td>
avg_mnth_hrs
</td>
</tr>
<tr>
<td>
time_spend_company
</td>
<td>
tenure
</td>
</tr>
<tr>
<td>
<b>Work_accident</b>
</td>
<td>
accident
</td>
</tr>
<tr>
<td>
Department
</td>
<td>
dept
</td>
</tr>
<tr>
<td>
promotion_last_5years
</td>
<td>
promotion
</td>
</tr>
</table>
</div>
<h3 id="missing-values">Missing Values</h3>
<p>There were no missing values in the dataset</p>
<h3 id="data-that-would-assist-assumptions">Data that would assist &amp;
assumptions</h3>
<ul>
<li>We don't have any information on employee start and end date. We can
carry out a more thorough analysis if we had this information.</li>
<li>We don't have employee leaving reason : dismissed, end of contract,
resigned, redundancy, other.</li>
<li>We also do not have employee position, so for example we are unable
to calculate the employee to manager ratio for each department</li>
</ul>
<p>Since all of these pieces of information can have a considerable
bearing on analysis of <b>left = 1 or not</b> we have to
acknowledge that we are working with limited dataset and can only
provide guideline insights, therefore certain assumptions have been made
to support those insights.</p>
<p>In reality, further investigation with the client's domain experts
would hopefully enable us to source this information. Where assumptions
have been made, these are clearly identified.</p>
<h3 id="outliers">Outliers</h3>
<p>824 outlier rows were removed using <b>tenure</b>, this
represented around 7% of the total data rows. Removal of the outliers is
only necessary for the Logistical Regression modelling.</p>
<h3 id="duplicated-rows">Duplicated Rows</h3>
<p>Duplicated rows equals 3008 rows, about 20% of the total data.</p>

<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px">
<tr>
<td style="text-align:left;width:25%">Pre Dedupe Rows</td>
<td style="text-align: left;">14999</td>
</tr>
<tr>
<td>Post Deduplication Rows</td>
<td>11991</td>
</tr>
<tr>
<td>Duplicate rows removed</td>
<td>3008</td>
</tr>
</table>
</div>
<p>
There was a class imbalanced in the duplicated data, using
<b>left</b> as the outcome feature:
</p>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px">
<tr>
    <td><code>Left =</code> </td>
    <td style="text-align: center; width:25%"><b>left</b> Count</td>
    <td style="text-align: center; width:40%">left % of total</td>
</tr>
<tr>
    <td style="text-align: center">1</td>
    <td style="text-align: center">1580</td>
    <td style="width:40%; text-align: center">53%</td>
</tr>
<tr>
    <td style="text-align: center">0</td>
    <td style="text-align: center">1428</td>
    <td style="width:40%; text-align: center">47%</td>
</tr>

</table>
</div>


<h2 id="data-engineering">Data Engineering</h2>
<h3 id="features-removed">Features removed</h3>
<p>The <b>accident</b> feature was removed pending further
investigation.</p>
<p>The % of staff who recorded an accident was around 15%, ten times
higher than the national average. For example in 2013 and 2014 the
accident rate was between 23 % and 27%. Is this a dangerous place to
work ?</p>
<h3 id="features-engineered">Features Engineered</h3>
<ul>
<li><b>salary</b> - was ordinal encoded 0 = low, 1= medium, 2 =
high</li>
<li><b>dept</b> - was dummy encoded into binary columns</li>
<li><b>avg_hrs_mnth</b> - as binary encoded to a new feature
called <b>overworked</b> on <b>avg_mnth_hrs</b> &gt;
175</li>
</ul>
<h3 id="datasets">Datasets</h3>
<p>Two datasets were modelled, to provide an educational comparison that
the reduced dataset makes on model performance. It turns out, not a lot
and the lower the correlation, the less effect it has on the outcome,
who would have thought?</p>
<ul>
<li><p><b>data_cleaned_NoOl_FE_AllFeat.csv</b> - Feature
engineered, all features in the data set.</p></li>
<li><p><b>data_cleaned_NoOl_FE_NoDept.csv</b> - Feature
engineered, the dummy encoded department information was removed from
the dataset.</p></li>
</ul>
<h2 id="exploratory-data-analysis">Exploratory Data Analysis</h2>
<h3 id="data-overview">Data overview</h3>
<ul>
<li>11,991 employee records (DeDuped)
<ul>
<li>11,555 Employees</li>
<li>436 Managers</li>
</ul></li>
<li>10,000 current employees (<b>left = 0</b>)
<ul>
<li>9,616 current employees</li>
<li>384 current managers</li>
</ul></li>
<li>1,991 employees who have left (<b>left = 1</b>)
<ul>
<li>16.6% of Total employees</li>
<li>1,939 employees have left (20.16 of total workforce)</li>
<li>52 Managers have left (13.54% of total managers)</li>
</ul></li>
</ul>
<h3 id="initial-pairplot-observations">Initial Pairplot
observations</h3>
<p>Key features to investigate further :</p>
<ul>
<li><b>avg_mnth_hrs</b></li>
<li><b>number_project</b></li>
<li><b>satisfaction</b></li>
<li><b>promotion</b></li>
<li><b>tenure</b></li>
<li><b>last_eval</b></li>
<li><b>salary</b></li>
</ul>
<h3 id="correlation-mean-scores-of-key-features">Correlation mean scores of Key features</h3>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px">
<tr>
<th>
</th>
<td style="text-align: center">
all features
</td>
<td style="text-align: center">
focus features
</td>
<td style="text-align: center">
left = 1 focus
</td>
</tr>
<tr>
<th>
<b>avg_mnth_hrs</b>
</th>
<td style="text-align: center">
9.17%
</td>
<td style="text-align: center">
20.93%
</td>
<td style="text-align: center">
40.69%
</td>
</tr>
<tr>
<th>
    last_eval
</th>
<td style="text-align: center">
9.06%
</td>
<td style="text-align: center">
21.23%
</td>
<td style="text-align: center">
44.42%
</td>
</tr>
<tr>
<th>
number_project
</th>
<td style="text-align: center">
8.81%
</td>
<td style="text-align: center">
20.63%
</td>
<td style="text-align: center">
37.64%
</td>
</tr>
<tr>
<th>
tenure
</th>
<td style="text-align: center">
8.11%
</td>
<td style="text-align: center">
16.63%
</td>
<td style="text-align: center">
43.21%
</td>
</tr>
<tr>
<th>
promotion
</th>
<td style="text-align: center">
6.27%
</td>
<td style="text-align: center">
14.77%
</td>
<td style="text-align: center">
11.65%
</td>
</tr>
<tr>
<th>
salary
</th>
<td style="text-align: center">
5.66%
</td>
<td style="text-align: center">
14.23%
</td>
<td style="text-align: center">
12.66%
</td>
</tr>
<tr>
<th>
accident
</th>
<td style="text-align: center">
4.84%
</td>
<td style="text-align: center">
13.07%
</td>
<td style="text-align: center">
12.95%
</td>
</tr>
<tr>
<th>
dept_management
</th>
<td style="text-align: center">
3.80%
</td>
<td style="text-align: center">
-
</td>
<td style="text-align: center">
-
</td>
</tr>
<tr>
<th>
left
</th>
<td style="text-align: center">
3.32%
</td>
<td style="text-align: center">
-
</td>
<td style="text-align: center">
-
</td>
</tr>
<tr>
<th>
satisfaction
</th>
<td style="text-align: center">
2.80%
</td>
<td style="text-align: center">
11.15%
</td>
<td style="text-align: center">
16.53%
</td>
</tr>
<tr>
<th>
dept_marketing
</th>
<td style="text-align: center">
1.75%
</td>
<td style="text-align: center">
-
</td>
<td style="text-align: center">
-
</td>
</tr>
<tr>
<th>
dept_accounting
</th>
<td style="text-align: center">
1.63%
</td>
<td style="text-align: center">
-
</td>
<td style="text-align: center">
-
</td>
</tr>
<tr>
<th>
dept_RandD
</th>
<td style="text-align: center">
1.44%
</td>
<td style="text-align: center">
-
</td>
<td style="text-align: center">
-
</td>
</tr>
<tr>
<th>
dept_hr
</th>
<td style="text-align: center">
1.31%
</td>
<td style="text-align: center">
-
</td>
<td style="text-align: center">
-
</td>
</tr>
<tr>
<th>
dept_product_mng
</th>
<td style="text-align: center">
1.10%
</td>
<td style="text-align: center">
-
</td>
<td style="text-align: center">
-
</td>
</tr>
<tr>
<th>
dept_IT
</th>
<td style="text-align: center">
0.41%
</td>
<td style="text-align: center">
-
</td>
<td style="text-align: center">
-
</td>
</tr>
<tr>
<th>
dept_support
</th>
<td style="text-align: center">
-0.97%
</td>
<td style="text-align: center">
-
</td>
<td style="text-align: center">
-
</td>
</tr>
<tr>
<th>
dept_technical
</th>
<td style="text-align: center">
-1.80%
</td>
<td style="text-align: center">
-
</td>
<td style="text-align: center">
-
</td>
</tr>
<tr>
<th>
dept_sales
</th>
<td style="text-align: center">
-3.19%
</td>
<td style="text-align: center">
-
</td>
<td style="text-align: center">
-
</td>
</tr>
</table>
</div>
<h2 id="key-observations">Key Observations</h2>
<h3 id="avg_mnth_hrs"><b>avg_mnth_hrs</b></h3>
<figure>
<img src="/salifort_project//img/avg_mnth_hrs.png" alt="Alt text" />
<figcaption aria-hidden="true">Alt text</figcaption>
</figure>
<ul>
<li>34% of staff who left worked a normal 8 hour day.</li>
<li>66% of staff who left worked more than 8 hours a day.</li>
</ul>
<h3 id="last_eval"><b>last_eval</b></h3>
<ul>
<li>80% of those who left scored above 0.5 (Medium) on their last
evaluation.</li>
<li>52% who scored high (&gt;0.70) left the company</li>
<li>88% of all staff scored 0.51 or above.</li>
<li>With a very low promotion rate, high scoring employees have no
career development path to pursue</li>
</ul>
<h3 id="num_project"><b>num_project</b></h3>
<figure>
<img src="/salifort_project//img/num_proj_hrs_image.png" alt="Alt text" />
<figcaption aria-hidden="true">Alt text</figcaption>
</figure>
<ul>
<li><p>The average of number of projects an employee worked on was
4.</p></li>
<li><p>76% of employees who stayed, worked on four or less
projects</p></li>
<li><p>55% of those who left, worked on four or more projects</p></li>
<li><p>98% of those who left, worked on four or more projects, or 2
projects.</p></li>
<li><p>Of total employees who worked on 2 projects, 54% left
employment</p></li>
<li><p>Of total employees who worked on 6 or more projects, 60% left
employment</p></li>
</ul>
<p>The number of projects an employee works on appears to have a high
correlation to employees leaving if they are working on too many
projects, or too few. This also This also correlates to working hours,
where a high percentage of employees working more than 175 hrs a month
are leaving the company</p>
<h3 id="tenure"><b>tenure</b></h3>
<ul>
<li>The mean employee tenure is 3.3 years</li>
</ul>
<p>We don't really have enough data to comment on tenure, however if we
had start date and end date of employees, we could make additional observations.</p>
<p>If we also had the reason for leaving, the analysis could be a lot more
meaningful, therefore for the purposes of this Capstone Project, certain
assumptions will be made.</p>
<h3 id="promotion"><b>Promotion</b></h3>
<p>There appears to be a very low level of promotion within the client's
business.</p>
<p>Only 1.69% of employees who are currently employed have received a
promotion in the last five years.</p>
<h3 id="employee-manager-ratio">Employee / Manager Ratio</h3>
<p>In management circles, it is common knowledge that the ideal number
of direct subordinates a manager should have is 7±2 that is around 8
employees, plus or minus 2. While this may not apply in all industries
and situations, it's a good starting point for measuring the ratio of
employees to managers.</p>
<p>The current ratio of employees to managers in Salifort Motors is
25:1, that is about 25 employees for each manager.</p>
<p>Consideration should be given to create a development path for
employees to grow into management positions to continue the
developmental growth previously seen.</p>
<h3 id="managers-to-accident-rates">Managers to Accident Rates</h3>
<p>As noted earlier, the accident rate % seems very high, in my mind
this is questionable and requires further investigation.</p>
<p><b>Extrapolated data</b> However, digging a little deeper, we
find that the accident rate % increases as total number employees
increases. There would be an expectation that we would see a more
consistent ratio, not an increase in accidents.</p>
<p><b>NOTE this is an extrapolation of the tenure column to estimate employee start date, this is not real but an example of further analysis that could be carried out if we had the relevant employee start-date, end-date data.</b></p>
<p>Start date has been calculated as 
    <span class="math inline">today-tenure=StartDate</span>
in this example</p>
<figure>
<img src="/salifort_project//img/employee_mgr_accident.png" alt="Alt text" />
<figcaption aria-hidden="true">Alt text</figcaption>
</figure>
<h3 id="salary"><b>salary</b></h3>
<p>The majority of staff who left were either on low or medium salary
levels. This is why employees choose to work and if compensation is
below market rates, employees will seek better opportunities.</p>
<figure>
<img src="/salifort_project//img/salary_comparison.png" alt="alt" />
<figcaption aria-hidden="true">alt</figcaption>
</figure>
<h3 id="satisfaction"><b>satisfaction</b></h3>
<figure>
<img src="/salifort_project//img/satisfaction.png" alt="Alt text" />
<figcaption aria-hidden="true">Alt text</figcaption>
</figure>
<p>Employees who left had lower mean and medium scores than those that
stayed.</p>
<ul>
<li>74% of employees who left, self reported a low or medium
satisfaction level (1,460 of 1,991)
<ul>
<li>Compared to 48% of staff who stayed, reporting low to medium
satisfaction</li>
</ul></li>
<li>26% of staff who left, self reported low satisfaction vs 10% of
staff who stayed</li>
<li>46% of staff who left, self reported medium satisfaction vs 38% of
staff who stayed</li>
<li>27% of staff who left, self reported high satisfaction vs 52% of
staff who stayed</li>
</ul>
<h3 id="dept"><b>dept</b></h3>
<p>27% of all employees that left were in sales (550 employees left).
This is not surprising, sales is a tough role, however improving
recruitment practices to identify better candidates and staff training
could help improve staff retention.</p>
<p>The next largest attrition department is Technical at 18.71% (390
employees who left) followed by Support at 15.19% (312 employees who
left).</p>
<p>62% of employees who left worked for one of these three departments.
These three departments also represent 61% of all employees.</p>
<p>R&amp;D and Management have the lowest turnover at 12.25% and 11.95%
compared to the average of other departments which range from 17% -
19%</p>
<h3 id="accident"><b>accident</b></h3>
<p><b>accident</b> stands out as an outlier. <strong>15% of all
employees had an accident recorded against them.</strong></p>
<ul>
<li>This accident percentage is 6.5 times the national average of 2.3%
[^1]. This</li>
<li>column will be removed it seems wrong and needs further
investigation before</li>
<li>considering it for inclusion in the model.</li>
</ul>
<p>[^1] <a
href="https://www.bls.gov/news.release/pdf/osh.pdf">https://www.bls.gov/news.release/pdf/osh.pdf</a></p>
<h1 id="conclusions">Conclusions</h1>
<h2 id="cost-of-replacing-lost-employees">Cost of replacing lost
employees</h2>
<p>Using a broad brush approach to addressing the employee attrition
problem could be expensive. If this approach was applied wholesale to
all employees who left:</p>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px">
<thead>
<tr>
<th>
</th>
<th >
salary
</th>
<th style="text-align: center">
left
</th>
<th style="text-align: center">
count
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
</td>
<td>
high
</td>
<td style="text-align: center">
0
</td>
<td style="text-align: center">
942
</td>
</tr>
<tr>
<td>
</td>
<td>
high
</td>
<td style="text-align: center">
1
</td>
<td style="text-align: center">
48
</td>
</tr>
<tr>
<td>
</td>
<td>
low
</td>
<td style="text-align: center">
0
</td>
<td style="text-align: center">
4,566
</td>
</tr>
<tr>
<td>
</td>
<td>
low
</td>
<td style="text-align: center">
1
</td>
<td style="text-align: center">
1,174
</td>
</tr>
<tr>
<td>
</td>
<td>
medium
</td>
<td style="text-align: center">
0
</td>
<td style="text-align: center">
4,492
</td>
</tr>
<tr>
<td>
</td>
<td>
medium
</td>
<td style="text-align: center">
1
</td>
<td style="text-align: center">
769
</td>
</tr>
</tbody>
</table>
</div>
<p>
The estimated cost of employees leaving (assuming it costs 30% of annual
salary to replace them) is around $42 million.
</p>
<p>
If the suggested cost to replace an employee is 50% of annual salary,
this cost increases to $71 million.
</p>
<h2 id="the-costs-of-replacing-employees-left-1">The costs of replacing
employees (<b>left = 1</b>)</h2>
<p>Assuming a nominal cost of 50% of total annual salary to replace a
member of staff</p>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px">
<thead>
<tr>
<th colspan="4">
Cost of staff LEFT (assuming replacement costs 50% of total salary)
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
</td>
<td style="text-align: right">
# of Staff
</td>
<td style="text-align: right">
Cost Per Head
</td>
<td style="text-align: right">
Est Cost
</td>
</tr>
<tr>
<td>
Estimate High Salary Left Cost
</td>
<td style="text-align: right">
48
</td>
<td style="text-align: right">
75,000
</td>
<td style="text-align: right">
3,600,000
</td>
</tr>
<tr>
<td>
Estimate Medium Salary Left Cost
</td>
<td style="text-align: right">
769
</td>
<td style="text-align: right">
50,000
</td>
<td style="text-align: right">
38,450,000
</td>
</tr>
<tr>
<td>
Estimate Low Salary Left Cost
</td>
<td style="text-align: right">
1,174
</td>
<td style="text-align: right">
25,000
</td>
<td style="text-align: right">
29,350,000
</td>
</tr>
<thead>
<tr>
<th>
Estimate replacement cost
</th>
<th style="text-align: right">
1,991
</th>
<th>
</th>
<th style="text-align: right">
71,400,000
</th>
</thead>
</tr>
</tbody>
</table>
</div>
<h2
id="the-costs-and-savings-by-applying-a-30-pay-increase-to-everyone-who-left">The
costs (and savings) by applying a 30% pay increase to <u>everyone</u>
who left</h2>
<p>(obviously before they left)</p>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px">
<thead>
<tr>
<th colspan="4">
XGBoost staff will leave predictions x 30% pay increase
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
</td>
<td style="text-align: right">
# of Staff
</td>
<td style="text-align: right">
Cost Per Head
</td>
<td style="text-align: right">
Est £ Cost
</td>
</tr>
<tr>
<td>
Estimate High Salary Left Cost
</td>
<td style="text-align: right">
48
</td>
<td style="text-align: right">
45,000
</td>
<td style="text-align: right">
2,160,000
</td>
</tr>
<tr>
<td>
Estimate Medium Salary Left Cost
</td>
<td style="text-align: right">
769
</td>
<td style="text-align: right">
30,000
</td>
<td style="text-align: right">
23,070,000
</td>
</tr>
<tr>
<td>
Estimate Low Salary Left Cost
</td>
<td style="text-align: right">
1,174
</td>
<td style="text-align: right">
15,000
</td>
<td style="text-align: right">
17,610,000
</td>
</tr>
<thead>
<tr>
<th>
Estimate TOTAL Salary Left Cost
</th>
<td>
</td>
<th style="text-align: right">
1,991
</th>
<th style="text-align: right">
42,840,000
</th>
</tr>
</thead>
</tbody>
</table>
</table>
</div>
<h1 id="applying-machine-learning-to-staff-retention">Applying Machine
learning to staff retention</h1>
<p>If we use the machine learning model prediction, we can identify at
risk employees before it's too late, for a substantially lower cost than
applying salary increases wholesale across the business.</p>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px">
<thead>
<tr>
<th colspan="4">
XGBoost Model Predictions of salary cost increases
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
</td>
<td style="text-align: right">
# of Staff
</td>
<td>
Cost Per Head
</td>
<td style="text-align: right">
Est £ Cost
</td>
</tr>
<tr>
<td>
Estimate High Salary Left Cost
</td>
<td style="text-align: right">
12
</td>
<td style="text-align: right">
75,000
</td>
<td style="text-align: right">
900,000
</td>
</tr>
<tr>
<td>
Estimate Medium Salary Left Cost
</td>
<td style="text-align: right">
33
</td>
<td style="text-align: right">
50,000
</td>
<td style="text-align: right">
1,650,000
</td>
</tr>
<tr>
<td>
Estimate Low Salary Left Cost
</td>
<td style="text-align: right">
67
</td>
<td style="text-align: right">
25,000
</td>
<td style="text-align: right">
1,675,000
</td>
</tr>
<thead>
<tr>
<th>
Estimate TOTAL Salary Left Cost
</th>
<th style="text-align: right">
112
</th>
<th>
</th>
<th style="text-align: right">
4,225,000
</th>
</thead>
</tr>
</tbody>
</table>
</div>
<h1 id="model-performance-with-real-data">Model Performance with real
data</h1>
<p>Applying the ML Model to the HR_Dataset for all employees give us
these results:</p>
<h2 id="ml-model-predictions-for-all-employees">ML Model Predictions for
ALL Employees</h2>
<p>This assumes all employees who left are still employees and the ML
model was applied to this data.</p>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px">
<tr>
<td>
Count of employees with leave probability above
<b>high_risk_threshold</b>
</td>
<td style="text-align: center">
1,763
</td>
</tr>
<tr>
<td>
Percentage of employees with leave probability above
<b>high_risk_threshold</b>
</td>
<td style="text-align: center">
15.79%
</td>
</tr>
<tr>
<td>
Count of employees with leave probability above
<b>medium_risk_threshold</b>
</td>
<td style="text-align: center">
1,780
</td>
</tr>
<tr>
<td>
Percentage of employees with leave probability above
<b>medium_risk_threshold</b>
</td>
<td style="text-align: center">
15.94%
</td>
</tr>
</table>
</div>
<p>Using 1,991 employees who have left as the baseline, this means the
ML Model correctly predicted as high risk or above medium risk at 89% of
the people who left. That is the model would predict nearly 90% of the
staff who left, before they left. The 11% would be employees who left
that did not fit the model.</p>
<h2 id="ml-model-applied-to-current-employees">ML Model applied to
CURRENT employees</h2>
<p>Using the same model applied to current employees:</p>
<h3 id="summary-for-current-employees">Summary for CURRENT
Employees</h3>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px">
<tr>
<td>
Count of employees with leave probability above
<b>high_risk_threshold</b>
</td>
<td style="text-align: center">
48
</td>
</tr>
<tr>
<td>
Percentage of employees with leave probability above
<b>high_risk_threshold</b>
</td>
<td style="text-align: center">
52%
</td>
<tr>
<td>
</td>
<td>
</td>
</tr>
<tr>
<td>
Count of employees with leave probability above
<b>medium_risk_threshold</b>
</td>
<td style="text-align: center">
59
</td>
</tr>
<tr>
<td>
Percentage of employees with leave probability above
<b>medium_risk_threshold</b>
</td>
<td style="text-align: center">
64%
</td>
</tr>
</table>
</div>
<p>Where the model is predicting 59 employees are currently at risk of
leaving with a probability &gt; 50% or 48 employees are at risk of
leaving with a probability &gt; 70%, the first step is to talk to the
employee.</p>
<h2 id="conclusion-and-warnings">Conclusion and warnings</h2>
<p>Having detailed all of this, it's crucial to keep in mind the
principle that “correlation does not imply causation.” While ML models
offer powerful predictive capabilities based on data patterns, they
inherently lack the depth to discern causation in complex human
behaviors.</p>
<h3 id="humans-are-complicated-employees-even-more-so">Humans are
complicated, employees even more so</h3>
<p>Imagine a scenario where it is observed that there is a strong
correlation between the usage of office snacks and increased employee
engagement. It would be a mistake to assume that providing more snacks
directly boosts engagement. The underlying causation might be a positive
workplace culture that encourages interaction and collaboration, leading
to both higher snack consumption and increased engagement.</p>
<p>Similarly, with employee turnover prediction, the model can identify
patterns and correlations, but it's essential to remember that
correlation alone doesn't unveil the reasons behind an employee's
decision to leave. It might hint at factors such as work
dissatisfaction, but it won't reveal the underlying causes.</p>
<p>It is essential that building strong relationships, competitive
compensation, and genuine care for employees remains paramount. While ML
models can enhance the understanding, they cannot replace the human
touch in addressing individual concerns and motivations. A
well-compensated and engaged workforce is not merely a statistical
outcome; it reflects the tangible efforts that must be invested in
creating a positive work environment.</p>
<p>As you integrate ML into your HR strategies, it should be viewed as a
complementary tool that works hand-in-hand with existing and new
practices. The commitment to fostering a workplace where employees feel
valued and heard will always be at the core of success in retaining top
talent.</p>
<a href="#top"> scroll to top </a>
</div>
</body>
<script src="../../scripts/projects.js"> </script>
</html>