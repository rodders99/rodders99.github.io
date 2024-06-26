<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta name="color-scheme" content="dark">
<meta name="color-scheme" content="dark light">
<title>Salifort Motors project - Executive Summary</title>

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

        
<h1 id="salifort-motors-executive-summary">Salifort Motors Executive
Summary</h1>
<h2 id="document-information">Document Information</h2>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px; width:100%">
<tbody>
<tr>
<td style="width:22%">
Document Title
</td>
<td>
Salifort Motors - Executive Summary
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
<table class="datatable" style="margin-right:auto;margin-left:0px; width:100%">
<tr>
<td style="width:22%">
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

<h1 id="project-overview">Project Overview</h1>
<p>Data provided by the Salifort team was analysed to determine key
factors in employees leaving the company. the data was analysed and a
machine learning model built and used to identify the key reasons for
employees leaving and predict employees who would leave.</p>
<p>Exploratory Data Analysis was carried out on the provided data and
key features of employees who left (the predictor) were identified
during the ML modelling phase.</p>
<ul>
<li>Employees who report a low or medium satisfaction score are most
likely to leave</li>
<li>Employees working more than 175 hrs a month are most likely to
leave</li>
<li>Employees working on too many or two few projects are most likely to
leave</li>
<li>Sales, Support and Technical make up 61% of all employees and have
the highest</li>
<li>employee turnover</li>
<li>Employees on low or medium salaries are most likely to leave</li>
<li>Accident was flagged for further investigation since the % of
employees who were identified with an accident is very high compared to
the national average.</li>
</ul>
<p><img src="/salifort_project/img/key_model_factors.png" width=800></p>
<p>The Machine Learning model was used to predict employees at risk of
leaving:</p>
<p>Using the model, and applying to current employees, we can see there
are 67 current employees flagged as above low risk, of these 33 are
medium risk above the 70% threshold and 12 are high risk employees.</p>
<h2 id="ml-model-predictions-summary-for-current-employees">ML Model
Predictions Summary for CURRENT Employees</h2>

<h2>Risk Threshold Above 90%</h2>

<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px; ">
<tr>
<th style="width:70%">
    probabilities &gt; high_risk_threshold 90%
</th>
<td>
</td>
</tr>
<tr>
<td>
Count of employees with leave probability above 90%
</td>
<td style="text-align: center">
12
</td>
</tr>
<tr>
<td>
Percentage of employees with leave probability above 90%
</td>
<td style="text-align: center">
0.13%
</td>
</tr>
</table>
</div>

<h2>Risk Threshold Above 70%</h2>

<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px; ">
<tr>
<th style="width:70%">
probabilities &gt; medium_risk_threshold 70%
</th>
</thead><tbody>
<td>
</td>
</tr>
<tr>
<td>
Count of employees with leave probability above 70%
</td>
<td style="text-align: center">
33
</td>
</tr>
<tr>
<td>
Percentage of employees with leave probability above 70%
</td>
<td style="text-align: center">
0.36%
</td>
</tr></tbody>
</table>
</div>

<h2>Risk Threshold 50%</h2>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px; ">
<tr>
<th style="width:70%">
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
<td style="text-align: center">
67
</td>
</tr>
<tr>
<td>
Percentage of employees with leave probability above 50%
</td>
<td style="text-align: center">
0.72%
</td>
</tr>
</table>
</div>

<p>If we apply the model to employees who have already left, effectively
testing the model against known data, we can see that 72% of employees
who left would have been flagged by the ML model as at high risk, and
action perhaps could have been taken before the inevitable. If we lower
the risk threshold to medium risk at 70%, then over 90% of
these employees would have been flagged and if we look to those flagged
above low risk at 50%, 91% of employees would have been flagged.</p>
<p>To put some perspective around this, the level of accuracy
demonstrated by the model is significantly better than a random
guess.</p>
<h2 id="ml-model-predictions-summary-for-left-employees">ML Model
Predictions Summary for LEFT Employees</h2>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px">
<tr>
<th style="width:70%">
probabilities &gt; high_risk_threshold 90%
</th>
<td>
</td>
</tr>
<tr>
<td>
Count of employees with leave probability above 90%
</td>
<td style="text-align: center">
1360
</td>
</tr>
<tr>
<td>
Percentage of employees with leave probability above 90%
</td>
<td style="text-align: center">
72.26%
</td>
</tr>
<tr>
<td>
</td>
<td>
</td>
</tr>
</table>
</div>
<h2>Risk Threshold Above 70%</h2>

<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px; ">
<tr>
<th style="width:70%">
probabilities &gt; medium_risk_threshold 70%
</th>
<td>
</td>
</tr>
<tr>
<td>
Count of employees with leave probability above 70%
</td>
<td style="text-align: center">
1712
</td>
</tr>
<tr>
<td>
Percentage of employees with leave probability above 70%
</td>
<td style="text-align: center">
90.97%
</td>
</tr>
<tr>
<td>
</td>
<td>
</td>
</tr>
</table>
</div>
<h2>Risk Threshold Above 70%</h2>

<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px; "><tr>
<th style="width:70%">
probabilities &gt; predict_risk_threshold 50%
</th>
<td>
</td>
</tr>
<tr>
<td>
Count of employees with leave probability above 50%
</td>
<td style="text-align: center">
1731
</td>
</tr>
<tr>
<td>
Percentage of employees with leave probability above 50%
</td>
<td style="text-align: center">
91.98%
</td>
</tr>
<tr>
<th>
% of employees left that were predicted
</th>
<td>
</td>
</tr>
<tr>
<th>
</th>
<td>
</td>
</tr>
</table>
</div>
<h2>Risk Threshold Above 70%</h2>

<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px; "><tr>
<th style="width:70%">
XGBoost Predicted to leave &gt; (50% )/ % of employees who left
</th>
<td style="text-align: center">
86.94 %
</td>
</tr>
</table>
</div>

<h2 id="executive-summary">Executive Summary</h2>
<ul>
<li>Support Employee Advancement</li>
<li>Offer Competitive compensation</li>
<li>Recognise Commitment</li>
<li>Recognise Excellence</li>
<li>Cultivate a culture of care</li>
<li>Offer flexible working</li>
</ul>

<h2 id="overview">Overview</h2>
<p>In the year 2020, industries across the board experienced a
significant surge in turnover rates. This trend was largely attributed
to the challenges posed by the pandemic, leading many companies to adapt
to closures, downsizing, or the shift to remote work.</p>

<h2 id="why-address-this-issue">Why Address This Issue?</h2>
<p>Despite the gradual return to normalcy, employees continue to depart
for new opportunities at an unprecedented rate. Employee turnover exacts
a considerable cost, with the hiring process alone accounting for at
least half of the departing employee's annual salary. Moreover, as more
individuals leave, the company culture may suffer, placing additional
stress on remaining staff.</p>

<p>While some turnover is inevitable, aiming for a 10% turnover rate is
prudent. According to the Society for Human Resource Management (SHRM),
most companies currently hover around a 20% turnover rate. The ideal
rate depends on various factors, including industry and internal
promotion rates.</p>

<p><img src="/salifort_project/img/salary_by_dept.png" width=800></p>

<h2 id="strategies-to-enhance-retention-rates">Strategies to Enhance
Retention Rates</h2>

<p>It is imperative to acknowledge that employees are individuals, not
mere figures or resources. Creating a culture that fosters a sense of
value, career development, visibility, and care is crucial to
encouraging employee retention.</p>
<p>To cultivate such a culture, consider implementing the following tips
into your retention strategy:</p>

<h3 id="support-employee-advancement">Support Employee Advancement</h3>

<img src="/salifort_project/img/employee_advancement.png" alt="Employee Advancement Icon">

<p>88% of individuals consider professional development and career growth
as crucial when evaluating potential employers. Investing in the
programs is essential. This commitment not only cultivates skilled and
confident employees but also demonstrates a genuine concern for their
ongoing improvement and success.</p> 

<h3 id="offer-competitive-compensation">
    Offer Competitive Compensation</h3>
<img src="/salifort_project/img/employee_compensation.png" alt="Alt text" />

<p>Competitive and fair salaries for every position within the company
are pivotal to any retention strategy. Ensure that leaders seriously
consider requests for raises. Additionally, creative benefits such as
health insurance, vision and dental coverage, and unique perks like free
snacks or wellness programs can significantly contribute to employee
satisfaction.</p>


<h3 id="recognise-commitment">Recognise commitment</h3>

            
<img src="/salifort_project/img/employee_commitment.png" alt="Alt text" />


<p>Recognizing employee commitment and tenure is an essential aspect of
any organization. It helps to show appreciation and gratitude towards
employees for their dedication, which in turn makes them feel more
valued and satisfied within their position.</p>
<p>Long service recognition is a crucial component of any employee
recognition program. It celebrates and acknowledges the commitment and
loyalty of employees who have dedicated their professional lives to a
company. Recognizing staff's long-term commitment to an organization is
one of the most important forms of recognition within a business.</p>
<p>Celebrating employees' achievements and milestones is essential to
promoting employee engagement and creating a positive workplace
culture.</p>

<h3 id="recognise-excellence">Recognise Excellence</h3>

<img src="/salifort_project/img/employee_excellence.png" alt="Alt text" />

<p>Recognizing employee excellence is another crucial aspect of any
organization. It helps to show appreciation and gratitude towards
employees for their hard work, which in turn makes them feel more valued
and satisfied within their position.</p>
<p>Employee recognition programs can take many forms, including bonuses,
promotions, and public recognition. Some organizations may also offer
non-monetary rewards such as extra vacation days, flexible work hours,
or gift cards. The most important thing is to ensure that the reward is
meaningful and relevant to the employee's interests and needs.</p>

<h3 id="cultivate-a-culture-of-care">Cultivate a Culture of Care</h3>

<img src="/salifort_project/img/culture_of_care.png" alt="Alt text" />

<p>Employees need to perceive that the company genuinely cares for them.
Offering flexibility in work arrangements, such as unlimited PTO,
flexible hours, or remote work options, can cater to the diverse needs
of your workforce. Implementing recognition programs, such as service
awards and wellness initiatives, reinforces a culture of appreciation
and significantly reduces turnover.</p>
<h3 id="offer-flexible-working">Offer Flexible Working</h3>

<img src="/salifort_project/img/flexible_working.png" alt="Alt text" />

<p>Implementing flexible working arrangements can offer numerous
benefits to employers. Firstly, it fosters a positive work culture by
demonstrating trust in employees' ability to manage their tasks
independently. This autonomy often leads to increased job satisfaction,
which, in turn, can boost overall productivity and creativity.</p>
<p>Flexible working also facilitates better work-life balance, reducing
burnout and improving employee well-being. This, in the long run,
contributes to lower turnover rates and recruitment costs, as satisfied
employees are more likely to stay with their current employer. Moreover,
offering flexibility can attract a wider pool of talent, including
individuals who may not be able to commit to traditional 9-to-5
schedules. Embracing flexibility reflects a progressive and adaptive
approach to work, enhancing the employer's reputation and making the
company more appealing to potential employees.</p>
<p>Ultimately, by accommodating diverse work arrangements, employers can
create a more resilient and agile workforce, better equipped to navigate
the dynamic challenges of the modern business landscape.</p>

<h2 id="enhancing-retention-in-salifort-motors">Enhancing Retention in
Salifort Motors</h2>
<p>In a landscape where employees have abundant employment options,
investing time, effort, and resources in making them feel valued as
integral team members is crucial.</p>
<p>By:</p>
<ul>
<li>Supporting career development</li>
<li>Enhancing compensation</li>
<li>Recognising Commitment</li>
<li>Recognising Excellence</li>
<li>Fostering a positive culture</li>
<li>Offering Flexible Working</li>
</ul>
<p>Salifort Motors can demonstrate loyalty to its employees, fostering
reciprocal loyalty to the organization.</p>
<h2 id="conclusion-and-caution">Conclusion and Caution</h2>
<p>Having detailed all of this, it's crucial to keep in mind the
principle that “correlation does not imply causation.” While ML models
offer powerful predictive capabilities based on data patterns, they
inherently lack the depth to discern causation in complex human
behaviors.</p>
<h1>
Humans are complicated, employees even more so
</h1>
<p>Imagine a scenario where it is observed that there is a strong
correlation between the usage of office snacks and increased employee
engagement. It would be a mistake to assume that providing more snacks
directly boosts engagement. The underlying causation might be a positive
workplace culture that encourages interaction and collaboration, leading
to both higher snack consumption and increased engagement.</p>
<figure>
<img src="/salifort_project/img/correlation-neq-causation.png"
alt="https://www.tylervigen.com/spurious-correlations" />
<figcaption
aria-hidden="true">https://www.tylervigen.com/spurious-correlations</figcaption>
</figure>
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
<h2 id="next-steps">Next Steps</h2>
<p>With additional data we can provide a more detailed analysis and more
accurate model. Additional data that would help:</p>
<ul>
<li>We don't have any information on employee start and end date. We can
carry out a more thorough analysis if we had this information.</li>
<li>We don't have employee leaving reason : dismissed, end of contract,
resigned, redundancy, other.</li>
<li>We also do not have employee position, so for example we are unable
to calculate the employee to manager ratio for each department and can
only approximate this ratio.</li>
</ul>
<p>Since all of these pieces of information can have a considerable
bearing on analysis of <code>left = 1 or not</code> we have to
acknowledge that we are working with limited dataset and can only
provide guideline insights, therefore certain assumptions have been made
to support those insights.</p>
<p>In reality, further investigation with the client's domain experts
would hopefully enable us to source this information. Where assumptions
have been made, these are clearly identified.</p>
<h3 id="recommendations">Recommendations</h3>
<ul>
<li>Review employee salaries for those identified as “at risk”</li>
<li>Develop / review / enhance employee career and skills development
programs</li>
<li>Develop / review / enhance employee recognition programs</li>
<li>Review Work-From-Home and Flexible Working policies.
<ul>
<li>Identify reluctant managers and address their concerns</li>
</ul></li>
<li>Ensure management have regular one-to-one meetings with their team
members and feedback to HR any issues that may need addressing</li>
<li>Hold regular Town Hall meetings for employees, from leadership</li>
</ul>
<h3 id="analytics-team-follow-up">Analytics Team Follow up</h3>
<ul>
<li>We suggest that we hold follow up meetings with the Salifort Team in
6 and 12 months, this review preceded by reviewing the latest HR
data.</li>
</ul>
<p><a href="#top"> scroll to top </a></p>
</div>


</body>
<script src="../../scripts/projects.js"> </script>

</html>