<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta name="color-scheme" content="dark">
<meta name="color-scheme" content="dark light">
<title>Salifort Motors project - Pace Plan</title>

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


<h1 id="pace-plan">PACE PLAN</h1>
<h2 id="document-information">Document Information</h2>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px">
<tbody>
<tr>
<tr>
<td style="width:15%">
Document Title
</td>
<td>
Salifort Motors - PACE Plan - for internal use only
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
<h2 id="client-details"><a id='toc1_1_2_'></a><a href="#toc0_">Client
Details</a></h2>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px">
<tr>
<td>
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



<h2 id="pace---plan">PACE - (P)LAN</h2>
<h3 id="pace-document-this-document">PACE document (this document)</h3>
<ul>
<li>Prepare a project proposal to define the project objective</li>
<li>Prepare a PACE document outlining the project steps</li>
</ul>

<h3 id="project-objective">Project Objective</h3>
<p>Salifort Motors' Leadership and HR teams are concerned about the
seemingly high number of staff leaving the company.</p>
<p>We have been employed to analyse their employee data in order to
develop a ML model to predict the probability of an employee leaving.</p>
<h3 id="timeline">Timeline</h3>
<p><a href="/salifort_project/docs/Activity_00_Salifort_Motors_timeline.ods">Project
Gantt</a></p>
<figure>
<img src="/salifort_project/img/timeline.png" alt="Alt text" />
<figcaption aria-hidden="true">Time Line</figcaption>
</figure>

<h3 id="project-deliverables">Project Deliverables</h3>
<p>Agreed project deliverables:</p>

<h3>Produce an Executive Summary of the data and project detailing key findings and recommendations</h3>
    <p><A href="/salifort_project/presentation/cd_05a_executive_summary_slides.html">Executive Summary Presentation</A></p>
    <p><A href="/salifort_project/docs/cd_04_Salifort_Motors_EXECUTIVE_SUMMARY.html">Executive Summary Detailed Analysis</A></p>
<h3>Produce an in depth analysts' report of findings and recommendations</h3>
    <p><A href="/static/salifort_project/docs/cd_03_Salifort_Motors_Analyst_SUMMARY.html">Analyst Detailed SUMMARY</A></p>


<h3>Demonstration model :</h3>
<ul><li>Interactive model for what if modelling</li>
<li>Apply the model to current employee data to Identify employees “at risk” of leaving</li>
</ul>
<p><a href="/salifort_project/docs/nb_12_Salifort_Motors_project_MODEL_DEMONSTRATION.html">Demonstration Model</a></p>


<h3>Follow Up:</g3>

<h3>Support HR team &  Team Leader with analysis to support workshops to review the data for their teams.</h3>
<p><a href="/salifort_project/docs/cd_05_Salifort_Motors_HR_SUMMARY.html">HR Summary Analysis</a></p>
<p><a href="/salifort_project/docs/cd_06_Salifort_Motors_TEAM_SUMMARY.html"> Team Summary Analysis Generator Notebook</a></p>
<p><a href="/salifort_project/docs/cd_06_Salifort_Motors_TEAM_SUMMARY-example-output.html">Team Summary Generator Example output</a></p>
<li>Setup a review session with Leadership and HR to compare data pre
and post project</li>
<li>Provide a machine learning model the HR team can use to identify “at
risk” employees.</li>
</ul>
<h3 id="data-exploration-and-cleaning">Data Exploration and
Cleaning</h3>
<ul>
<li>Resources Required
<ul>
<li>Stakeholder input</li>
<li>Stakeholder Analysis</li>
<li>Project Timeline (Gantt Chart)</li>
<li>Dataset (HR_capstone_dataset.csv)</li>
<li>Python Jupyter Notebooks</li>
</ul></li>
</ul>
<h4 id="python-libraries">Python Libraries</h4>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px">
<thead>
<tr>
<th style="width:15%">
Operations
</th>
<th>
Python Libraries
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
Data Import &amp; Manipulation
</td>
<td>
Pandas<br>Numpty
</td>
</tr>
<tr>
<td>
Data Modelling
</td>
<td>
sklearn.linear_model - Logistic Regression<br>sklearn.tree - Decision
Tree<br> sklearn.ensemble Random Forest<br>XGBoost -
</td>
</tr>
<tr>
<td>
Modelling support and Metrics
</td>
<td>
sklearn.model_selection GridSearch<br>sklearn.metrics - model
scoring<br>sklearn.plot_tree - Decision Tree Visualisations
</td>
</tr>
<tr>
<td>
Visualisations
</td>
<td>
matplotlib<br>seaborn
</td>
</tr>
<tr>
<td>
ML Model Save/Load
</td>
<td>
pickle
</td>
</tr>
</tbody>
</table>
</div>
<ul>
<li>Review the supplied data and apply cleaning operations to prepare it
for further analysis and modelling
<ul>
<li>Deduplication</li>
<li>Remove Missing or incomplete data</li>
<li>Rename column headings for consistency</li>
<li>Review Outliers and consider removing for relevant ML models</li>
</ul></li>
<li>Dataset Preparation:
<ul>
<li>Because this is a capstone project and not real life, I will will
prepare two datasets to evaluate performance of these across the four
models we'll evaluate for this project, because I'm curious how the two
different datasets will perform.</li>
<li>Prepare a dataset with minimal Feature Engineering and a dataset
with comprehensive Feature Engineering</li>
</ul></li>
</ul>
<h2 id="analyse">Analyse</h2>
<h3 id="dataset-overview">Dataset overview</h3>
<div class="datatable-container">
<table class="datatable" style="margin-right:auto;margin-left:0px">
<tr>
<td style:width="15%">
Variable
</td>
<td>
Description
</td>
</tr>
<tr>
<td>
satisfaction_level
</td>
<td>
Employee-reported job satisfaction level [0&amp;ndash;1]
</td>
</tr>
<tr>
<td>
last_evaluation
</td>
<td>
Score of employee's last performance review [0&amp;ndash;1]
</td>
</tr>
<tr>
<td>
number_project
</td>
<td>
Number of projects employee contributes to
</td>
</tr>
<tr>
<td>
average_monthly_hours
</td>
<td>
Average number of hours employee worked per month
</td>
</tr>
<tr>
<td>
time_spend_company
</td>
<td>
How long the employee has been with the company (years)
</td>
</tr>
<tr>
<td>
Work_accident
</td>
<td>
Whether or not the employee experienced an accident while at work
</td>
</tr>
<tr>
<td>
left
</td>
<td>
Whether or not the employee left the company
</td>
</tr>
<tr>
<td>
promotion_last_5years
</td>
<td>
Whether or not the employee was promoted in the last 5 years
</td>
</tr>
<tr>
<td>
Department
</td>
<td>
The employee's department
</td>
</tr>
<tr>
<td>
salary
</td>
<td>
The employee's salary (low, medium, high)
</td>
</tr>
</table>
</div>
<h3 id="exploratory-data-analysis">Exploratory Data Analysis</h3>
<ul>
<li>Pairplot to identify key correlations</li>
<li>Correlation Plot &amp; Heatmap to identify key correlations and mean
average scores</li>
<li>Histogram plot for variable distribution</li>
</ul>
<h3 id="eda-data-cleaning-feature-engineering">EDA Data Cleaning &amp;
Feature Engineering</h3>
<ul>
<li>De-duplicate</li>
<li>Remove missing values</li>
<li>Check / correct any categorical value misspellings</li>
<li>Correct any misspellings of column names, convert case of columns to
snake case</li>
<li>Removal of outliers if required by a specific ML Model</li>
<li>As required feature engineering of categorical features to relevant
encoding (dummies, ordinal), binarisation of continuous variables with
threshold.</li>
</ul>
<h3
id="eda-analysis-and-visualisations-of-key-data-features-vs-left">EDA
Analysis and visualisations of key data features Vs
<code>left</code></h3>
<ul>
<li>Variable comparison with <code>left</code>:
<ul>
<li>Visualisation of the feature (histogram, heatmap, box plot, violin
plot)</li>
<li>Detailed Analysis of variable</li>
</ul></li>
<li>Further adhoc visualisations and analysis will be produced driven by
the</li>
<li>variable comparison observations</li>
</ul>
<h3 id="deliverable-eda-analysis-summary">Deliverable: EDA Analysis
Summary</h3>
<h4 id="client-deliverables">Client Deliverables</h4>
<ul>
<li>Write up documenting initial findings from initial EDA</li>
<li>Write up suggestions to HR team and Team Managers</li>
<li>ML model performance Analysis comparisons</li>
<li>ML Model Demonstration and prediction demonstration notebook</li>
</ul>
<h4 id="project-deliverables-11">Project Deliverables-11</h4>
<ul>
<li>Internal Analysis and RFC to analyst team members</li>
</ul>
<h2 id="construct">Construct</h2>
<h3 id="build-traintest">Build, Train/Test</h3>
<p>Build train and test various machine learning models:</p>
<ul><li>Logistic Regression</li><li>Decision Tree</li><li>XGBoost</li><li>Random Forest</li></ul>
<p>Disclaimer - in reality I wouldn't carry out the sort of overkill development you see here, but I want to compare model performance because I'm curious to see how they perform with feature engineering vs without any Feature Engineering</p>

<p><b>cleaned data</b></p>

<p><code>data_cleaned_NoOl_FE_AllFeat</code> - Cleaned, No Outliers,
Feature Engineered, all fields included.- (AllFeat)</p>

<p><code>data_cleaned_NoOl_FE_NoDept</code> - Cleaned, No Outliers, Feature
Engineered, departments removed (NoDept)</p>

<p><code>data_cleaned_NoOl_NoFE_AllFeat</code> - Cleaned, No Outliers, NOT
Feature Engineered, all fields included.- (AllFeat)</p>

<p><code>data_cleaned_Ol_NoFE_AllFeat</code> - Cleaned, Outliers, NOT
Feature Engineered, all fields included.- (AllFeat)</p>

<p>And apply them across the datasets to create a comparison table of
results I can use for the final model recommendations to promote to
development of the demonstration model.</p>

<h3 id="conclusion-and-next-steps">Conclusion and next steps</h3>
<p>From the results of the model development and testing, two models
will be selected and applied to the development of the interactive and
live demonstrations</p>

<h2 id="execute">Execute</h2>
<ul>
<li>Interpret model</li>
<li>Evaluate model performance using metrics</li>
<li>Prepare results, visualizations, and actionable steps to share with
stakeholders</li>
</ul>
<h2 id="conclusion">Conclusion</h2>

<p>Project Close</p>
<ul>
    <li>Under instruction from the client the following operations will be
carried
<ul>
<li>Data Erasure - all supplied data will be backed up to client's
cloud</li>
<li>All local copies of data will be deleted for data security</li>
<li>Agree Dates with client for follow up meetings at six and twelve
months for HR and Team Leaders review meeting</li>
</ul>
<p><a href="#top"> scroll to top </a></p>
</div>


</body>
<script src="../../scripts/projects.js"> </script>
</html>