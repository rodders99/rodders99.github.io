<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta name="color-scheme" content="dark">
<meta name="color-scheme" content="dark light">
<title>Salifort Motors project - HR Summary</title>

<link rel="stylesheet" type="text/css" href="/css/custom-menu2.css">
<link rel="stylesheet" type="text/css" href="/css/project-style.css">
<link rel="stylesheet" type="text/css" href="/css/custom.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>


<body>
    
    <div class="page-container">
    <!-- BEGIN NAVIGATION -->
    <div class="page-container">
    <div class="toolbar" style="width:100%; text-align:center; align-items: center;">
    <?php include 'menu-salifort.php'; ?>        
    </div>
    <!-- END NAVIGATION -->

<h1>Salifort Motors HR Summary</h1>

<h2 id="document-information">Document Information</h2>
<div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px;">


<tr>
<td style="width:18%">
Document Title
</td>
<td>
Salifort Motors - HR Summary
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

</table>
</div>

<h2 id="client-details">Client Details</h2>

<div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px;">
<tr>
<td style="width:15%">
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

<h1>Table of Contents</h1>
<div id="tableOfContents"></div>

<h2 id="additional-visualisations">Additional Visualisations</h2>
<p>This notebook details a number of different visualisations of the
data by department and compared to company average.</p>
<p>This can be used during discussions with team managers</p>
<h3
id="hr-summary-notebook-for-reference-during-team-manager-discussions"><a
href="/salifort_project/docs/HR_Summary_Notebook.html">HR Summary Notebook for reference during team manager discussions</a></h3>
<h2 id="results-of-analysis">Results of analysis</h2>
<p>Following a comprehensive analysis of the data provided by the HR
department on employees who have left the organization, I have
identified several key factors contributing to employee attrition. It is
crucial to address these issues to enhance employee satisfaction,
engagement, and retention within the company.</p>

<h3 id="key-correlations-of-all-employees">Key correlations of all employees</h3>
<img src="/salifort_project/img/all_employees_correlation.png" alt="All Employees Correlation" />

<h3 id="key-correlations-of-employees-who-left">Key correlations of employees who left</h3>
<img src="/salifort_project/img/left_employees_correlation.png" alt="Left Employees correlations" />

<h2 id="observations-from-the-data">Observations from the data</h2>

<h3 id="eda-observations---last_eval">EDA Observations - <b>last_eval</b></h3>
<p>Those who left fall generally into one of two groups either low
scoring or high scoring with 28% of low scoring employees leaving and
17% of high scoring employees leaving. 46% of employees who left had a
low or medium score, there's aso a strong correlation to hours worked as
seen on the correlation plot, where those who left also tend to work
more hours.</p>
<ul>
<li>There's a high correlation with <code>satisfaction</code>,
<code>number_project</code>, <code>avg_mnth_hrs</code> and
<code>tenure</code></li>
<li>20% of those who left had a low <code>last_eval</code> score vs 10%
of total employees who stayed</li>
<li>25% of those who left had a medium <code>last_eval</code> score vs
38% of total employees who stayed</li>
<li>54% of those who left had a high <code>last_eval</code> score vs 51%
of total employees who stayed</li>
</ul>


<img src="/salifort_project/img/last_eval_quadplot.png" alt="Last Eval quadplot" />

<h3 id="eda-observations---number_project">EDA Observations - <b>number_project</b></h3>
<p><strong>Caveats</strong> - The number of projects is a simple metric
that does not take into account either the complexity or duration of the
project. A member of staff could only have worked on one project, but
the complexity and duration of the project would not be taken into
account with the available data. There is also a high correlation to the
number of hours worked.</p>
<ul>
<li><p>People who left are mostly in the low and medium salary
ranges</p></li>
<li><p>People who left are estimated to cost the business £42M (assuming
30% cost of annual salary to replace)</p></li>
<li><p>45% of employees who worked on 2 or less projects left</p></li>
<li><p>100% of employees who worked on seven projects left the
company</p></li>
<li><p>26% of employees who worked on 5 or more projects left the
company</p></li>
<li><p>50% of employees who left, worked on either 2 or less or more
than 5 projects</p></li>
<li><p>Highest retention was with employees who worked on between 3-5
projects where 95% of the staff were retained.</p></li>
<li><p>Lowest retention was with employees who worked on 2 projects, 46%
of the staff were retained or 6+ projects where 3% of the staff were
retained.</p></li>
</ul>


<img src="/salifort_project/img/num_projects_quadplot.png" alt="Number of Projects Quadplot" />

<h3 id="eda-observations---avg_mnth_hrs"><b>avg_mnth_hrs</b></h3>
<img src="/salifort_project/img/avg_hrs_num_project.png" alt="Avg Hours / Number of Projects plot" />
<ul>
<li>30% of employees who left, worked LESS than an average of 150 hours
a month (average less than <strong>7</strong> hours a day)</li>
<li>54% of employees who left, worked MORE than an average of 200 hours
a month (average more than <strong>9</strong> hours a day)</li>
<li>100% of employees who worked 300 or more hours, left employment</li>
</ul>
<img src="/salifort_project/img/avg_mnth_hrs_quadplot.png"
alt="Avg Monthly Hours Quadplot" />

<h3 id="eda-observations---tenure">EDA Observations - <b>tenure</b></h3>
<ul>
<li>93% of staff who left had a tenure of 3 &amp; 5 years</li>
<li>43% of staff who left had a tenure of 2 years or less (847)</li>
<li>684 outlier records identified = about 7% of total record count</li>
<li>87% of staff have been employed for 4 years or less and in theory
would not qualify for promotion_last_5_years, <strong>maybe, we don't
have enough data to be sure</strong></li>
</ul>
<h3 id="employees-vs-management-to-support-them">Employees vs management to support them</h3>

<p>We are making assumptions here!</p>
<p>We would need some additional information in the dataset to identify
the start year for each employee and which department managers belong
to.</p>
<p>In management circles, it is common knowledge that the ideal number
of direct subordinates a manager should have is 7±2 that is around 8
employees,plus or minus 2.</p>

<h3 id="employee-to-manager-ratio">Employee to Manager Ratio</h3>
<p>Currently within Salifort Motors, there are 9616 current employees
(not management) and 384 Managers (not employees). This puts the
employee manager ratio at 23 employees for every manager.</p>
<p>Conventional management thinking of 8 employees per manager, the
client would need to recruit/develop a further 800+ managers to bring
the employee to manager ratio down to more conventional levels.</p>
<p>This also links to the promotion field where the % of employees who
have received promotions in the last five years is very low (1.6%) and
the opportunity to grow management resources within the business is
high.</p>
<p>Consideration should be given to the development path for employees
to move into management.</p>


<img src="/salifort_project/img/tenure_quadplot.png" alt="Tenure quadplot" />

<h3 id="eda-observations---satisfaction">EDA Observations - <b>satisfaction</b></h3>
<p>The feature is not collinear with any others.</p>
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
<img src="/salifort_project/img/satisfaction_quadplot.png" alt="Satisfaction quadplot" />


<h3 id="eda-observations---accident">EDA Observations - <b>accident</b></h3>
<p><strong>15% of all employees had an accident recorded against
them.</strong></p>
<ul>
<li><p>This accident percentage is 6.5 times the national average of
2.3% [^1]. This column will be removed data seems questionable and needs
further investigation before considering it for inclusion in the model,
but with a low % of employees affected, I doubt it will have much impact
on the model.</p></li>
<li><p>There were 1850 accident incidents in the data, which is 15% of
the total staff.</p></li>
<li><p>People who stayed recorded 1,745 accidents (94% of accidents were
from people who stayed)</p>
<ul>
<li>17% of all staff who stayed recorded an accident</li>
</ul></li>
<li><p>People who left recorded 105 accidents (6% of accidents were from
people who left)</p>
<ul>
<li>6% of all staff who left recorded an accident</li>
</ul></li>
</ul>
<p>[^1] In 2022, the rate of injury cases was 2.3 cases per 100 FTE
workers, unchanged from 2021. US Bureau Labour of Statistics, US
Department of Labour - https://www.bls.gov/news.release/pdf/osh.pdf</p>

<h3 id="eda-observations---promotion">EDA Observations - <b>promotion</b></h3>
<p>93% of staff have a tenure of five or less than 5 years.</p>
<ul>
<li>of the 10,000 current staff, 1.95% have received a promotion in the
last 5 years</li>
<li>99.6% (1,983) of staff who left did not receive a promotion in the
last five years</li>
<li>4% (8) of staff who left, received a promotion in the last 5
years</li>
<li>There was one employee who left with a tenure 5 years or
greater</li>
</ul>
<h3 id="eda-observations---salary">EDA Observations - <b>salary</b></h3>
<ul>
<li>59% of staff who left were on a low salary</li>
<li>98.6% of staff who left were on a low or medium salary</li>
</ul>

<img src="/salifort_project/img/salary_quadplot.png" alt="Salary quadplot" />


<img src="/salifort_project/img/salary_hrs_projs_adhocplot.png" alt="Salary / Hours / Number of Projects plot" />

<img src="/salifort_project/img/salary_dep_heatmaps.png" alt="Salary Department Heatmap" />


<h2 id="general-recommendations">General Recommendations</h2>

<h3 id="compensation-and-benefits">Compensation and Benefits</h3>
<p>One prominent factor associated with employee departure is low pay.
It is evident that a significant number of departing employees expressed
dissatisfaction with their compensation packages. I recommend a thorough
review of the current salary structures to ensure they align with
industry standards and adequately reward employees for their
contributions.</p>

<h3 id="working-conditions">Working Conditions</h3>
<p>Long working hours and varying project loads have emerged as
significant contributors to employee turnover. Striking a balance
between workload and work-life balance is essential. Addressing these
concerns may involve optimizing project allocation, setting realistic
deadlines, and promoting a healthier work environment.</p>

<h3 id="recognition-and-appreciation">Recognition and Appreciation</h3>
<p>The data indicated a lack of recognition from management as a key
reason for an employees departure. Implementing regular acknowledgment
programs and fostering a culture of appreciation and care can
significantly boost morale and job satisfaction.</p>

<h3 id="job-satisfaction">Job Satisfaction</h3>
<p>Self-reported low job satisfaction is a recurring theme among
departing employees. Conducting employee surveys and feedback sessions
can provide valuable insights into specific areas that require
improvement, allowing the organization to tailor interventions to meet
employee needs.</p>

<h3 id="career-growth-opportunities">Career Growth Opportunities</h3>
<p>The absence of promotions and limited career growth opportunities has
been identified as a concern. Initiatives such as mentorship programs,
skill development workshops, and transparent career progression paths
can help retain valuable talent within the organization.</p>
<p>In conclusion, addressing these key factors is imperative for
fostering a positive work environment, retaining talented employees, and
ultimately improving organizational performance. I recommend a strategic
action plan that includes targeted interventions to mitigate these
challenges and enhance overall employee satisfaction.</p>
<p>Thank you for your attention to these critical matters. I am
available for further discussion and collaboration to implement these
recommendations effectively.</p>

<h2 id="about-the-ml-model">About the ML model</h2>
<p>The model is based on a machine learning algorithm call XGBoost.</p>
<h2 id="ml-model-predictions-summary-for-current-employees">ML Model
Predictions Summary for CURRENT Employees</h2>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px">
<tr>
<th>
probabilities &gt; high_risk_threshold 90%
</th>
<td>
</td>
</tr>
<tr>
<td>
Count of employees with leave probability above 90%
</td>
<td style="text-align: right">
12
</td>
</tr>
<tr>
<td>
Percentage of employees with leave probability above 90%
</td>
<td style="text-align: right">
0.13%
</td>
</tr>
<tr>
<td>
</td>
<td>
</td>
</tr>
<tr>
<th>
probabilities &gt; medium_risk_threshold 70%
</th>
<td>
</td>
</tr>
<tr>
<td>
Count of employees with leave probability above 70%
</td>
<td style="text-align: right">
33
</td>
</tr>
<tr>
<td>
Percentage of employees with leave probability above 70%
</td>
<td style="text-align: right">
0.36%
</td>
</tr>
<tr>
<th>
probabilities &gt; predict_risk_threshold 50%
</th>
<td>
</td>
</tr>
<tr>
<td>
</td>
<td>
</td>
</tr>
<tr>
<td>
Count of employees with leave probability above 50%
</td>
<td style="text-align: right">
67
</td>
</tr>
<tr>
<td>
Percentage of employees with leave probability above 50%
</td>
<td style="text-align: right">
0.72%
</td>
</tr>
</table>
</div>
<p>If we apply the model to employees who have already left, effectively
testing the model against known data, we can see that 72% of employees
who left would have been flagged by the ML model as at high risk, and
action perhaps could have been taken before the inevitable. If we lower
the risk threshold threshold to medium risk at 70%, then over 90% of
these employees would have been flagged and if we look to those flagged
above low risk at 50%, 91% of employees would have been flagged.</p>
<p>To put some perspective around this, the level of accuracy
demonstrated by the model is significantly better than a random
guess.</p>

<h2 id="ml-model-predictions-summary-for-left-employees">ML Model Predictions Summary for LEFT Employees</h2>
<div class="datatable-container">
    <table class="datatable" style="margin-right:auto;margin-left:0px; ">
    <thead>
        <tr>
        <th style="text-align:left; width:60%">probabilities &gt; high_risk_threshold 90%</th>
        <th>
        </th>
        </tr>
    </thead>
<tbody>
<tr>
    <td>
        Count of employees with leave probability above 90%
    </td>
    <td style="text-align: right">
        1,360
    </td>
</tr>
<tr>
    <td style="text-align:left">
        <b>Percentage of employees with leave probability above 90%</b>
    </td>
    <td style="text-align: right">
    72.26%
    </td>
</tr>
<tr>
<td>
</td>
<td>
</td>
</tr>


<tr>
    <td>
        <b>probabilities &gt; medium_risk_threshold 70%</b>
    </td>
    <td>
    </td>
</tr>
<tr>
<td>
Count of employees with leave probability above 70%
</td>
<td style="text-align: right">
1,712
</td>
</tr>
<tr>
<td style="text-align:left">
Percentage of employees with leave probability above 70%
</td>
<td style="text-align: right">
90.97%
</td>
</tr>
<tr>
<td>
</td>
<td>
</td>
</tr>
<tr>
    <td style="text-align:left">
        <b>probabilities &gt; predict_risk_threshold 50%</b>
    </td>
    <td>
    </td>
</tr>

<tr>
    <td>
        Count of employees with leave probability above 50%
    </td>
    <td style="text-align: right">
        1,731
    </td>
</tr>
<tr>
    <td style="text-align:left">
        Percentage of employees with leave probability above 50%
    </td>
    <td style="text-align: right">
        91.98%
    </td>
</tr>
<tr>
    <td>
    </td>
    <td>
    </td>
</tr>
<tr>

    <td style="text-align:left">
        <b>% of employees left that were predicted</b>
    </td>
    <td>
    </td>
</tr>

<td style="text-align:left">
XGBoost Predicted to leave &gt; (50% )/ % of employees who left
</td>
<td style="text-align: right">
86.94 %
</td>
</tr>
</thead>
</table></div>


<h2 id="demonstration-of-the-ml-model">Demonstration of the ML
Model</h2>
<p>This requires a live setup. Kaggle to the rescue!</p>
<p>Predictions Files</p>
<p>Team Report Template</p>
<a href="#top"> scroll to top </a>
</div>


</main>
</body>
<script src="../../scripts/projects.js"> </script>

</html>