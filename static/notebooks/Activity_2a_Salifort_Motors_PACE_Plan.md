# Table of Contents

- [Table of Contents](#table-of-contents)
  - [Deliverables](#deliverables)
  - [PACE - (P)LAN](#pace---plan)
    - [PACE document (this document)](#pace-document-this-document)
    - [Project Objective](#project-objective)
    - [Timeline](#timeline)
    - [Project Deliverables](#project-deliverables)
    - [Data Exploration and Cleaning](#data-exploration-and-cleaning)
  - [Analyse](#analyse)
    - [Dataset overview](#dataset-overview)
    - [Exploratory Data Analysis](#exploratory-data-analysis)
    - [EDA Data Cleaning \& Feature Engineering](#eda-data-cleaning--feature-engineering)
    - [EDA Analysis and visualisation of key data features (compared to the key outcome variable `left`)](#eda-analysis-and-visualisation-of-key-data-features-compared-to-the-key-outcome-variable-left)
    - [Deliverable: EDA Analysis Summary](#deliverable-eda-analysis-summary)
      - [Client Deliverables](#client-deliverables)
      - [Project Deliverables-11](#project-deliverables-11)
  - [Construct](#construct)
    - [Build, Train/Test](#build-traintest)
    - [Conclusion and next steps](#conclusion-and-next-steps)
  - [Execute](#execute)
  - [Conclusion](#conclusion)

## Deliverables

- [Executive Summary](Activity_9a_Salifort_Motors_EXECUTIVE_SUMMARY.md)
- [Management Summary](Activity_9b_Salifort_Motors_MANAGEMENT_SUMMARY.md)
- [Demonstration Model](Activity_9z_Salifort_Motors_Project_MODEL-DEMONSTRATION.ipynb)
- [Analyst Report](Activity_9c_Salifort_Motors_Analyst_SUMMARY.md)
  - [Data Cleaning](Activity_3a_Salifort_Motors_project_EDA_cleanse.ipynb)
  - [Feature Engineering](Activity_3c_Salifort_Motors_project_Feature_Engineering.ipynb)
  - [EDA Analysis](Activity_3b_Salifort_Motors_project_EDA_ANALYSIS.ipynb)
  - [Logistic Regression Model](Activity_4a_Salifort_Motors_project_Logistic_Regression_Model.ipynb)
  - [Decision Tree Model](Activity_4b_Salifort_Motors_project_Decision_Tree_Model)
  - [Random Forest Model](Activity_4c_Salifort_Motors_project_Random_Forest_Model)

## PACE - (P)LAN

### PACE document (this document)

- Prepare a project proposal to define the project objective
- Prepare a PACE document outlining the project steps

### Project Objective

Salifort Motors' Leadership and HR teams are concerned about the seemingly high number of staff leaving the company.

We have been employed to analyse their employee data in order to develop a ML model to predict if an employee will leave.

### Timeline

[Project Gaant](Activity_00_Salifort_Motors_timeline.ods)

![Alt text](../img/timeline.png)


### Project Deliverables

From this analysis and modelling project we can :

- Produce an Executive Summary of the data and project detailing key findings & recommendations
- Produce an in depth analysts report of findings & recommendations
- Demonstration model :
  - Interactive model for what if modelling
  - Apply the model to current employee data to Identify employees "at risk" of leaving

Follow Up:

- Support HR team with Team Leader workshops to review the data for their teams.
- Setup a review session with Leadership and HR to compare data pre and post project
- Provide a machine learning model the HR team can use to identify "at risk" employees.

### Data Exploration and Cleaning

- Resources Required
  - Stakeholder input
  - Stakeholder Analysis
  - Project Timeline (Gaant Chart)
  - Dataset (HR_capstone_dataset.csv)
  - Python Jupyter Notebooks
  - Python Libraries

Operations | Python Libraries
| :- | :-
| Data Import & Manipulation  | Pandas<br>Numpty
| Data Modelling | sklearn.linear_model - Logistic Regression<br>sklearn.tree - Decision Tree<br>sklearn.ensemble Random Forest<br>XGBoost - 
| Modelling support and Metrics| sklearn.model_selection GridSearch<br>sklearn.metrics - model scoring<br>sklearn.plot_tree - Decision Tree Visulisations
| Visualisations | matplotlib<br>seaborn
| ML Model Save/Load | pickle

- Review the supplied data and apply cleaning operations to prepare it for further analysis and modelling
  - Deduplication
  - Remove Missing or incomplete data
  - Rename column headings for consistency
  - Review Outliers and consider removing for relevant ML models

- Dataset Preparation:
  - Because this is a capstone project and not real life, I will will prepare two datasets to evaluate performance of these across the four models we'll evaluate for this project, because I'm curious how the two different datasets will perform.
   Prepare a dataset with minimal Feature Engineering and a dataset with comprehensive Feature Engineering

## Analyse

### Dataset overview

Variable  |Description |
-----|-----|
satisfaction_level|Employee-reported job satisfaction level [0&ndash;1]|
last_evaluation|Score of employee's last performance review [0&ndash;1]|
number_project|Number of projects employee contributes to|
average_monthly_hours|Average number of hours employee worked per month|
time_spend_company|How long the employee has been with the company (years)
Work_accident|Whether or not the employee experienced an accident while at work
left|Whether or not the employee left the company
promotion_last_5years|Whether or not the employee was promoted in the last 5 years
Department|The employee's department
salary|The employee's salary (low, medium, high)

### Exploratory Data Analysis

- Pairplot to identify key correlations
- Correlation Plot & Heatmap to identify key correlations and mean average scores
- Histogram plot for variable distribution

### EDA Data Cleaning & Feature Engineering

- De-duplicate
- Remove missing values
- Check / correct any categorical value misspellings
- Correct any misspellings of column names, convert case of columns to snake case
- Removal of outliers if required by a specific ML Model
- As required feature engineering of categorical features to relevant encoding (dummies, ordinal), binarisation of continuous variables with threshold.
  
### EDA Analysis and visualisation of key data features (compared to the key outcome variable `left`)

- Variable comparison with `left`:
  - Visualisation of the feature (histogram, heatmap, box plot, violin plot)
  - Detailed Analysis of variable

- Further adhoc visualisations and analysis will be produced driven by the variable comparison observations

### Deliverable: EDA Analysis Summary

#### Client Deliverables

- Write up documenting initial findings from initial EDA
- Write up suggestions to HR team and Team Managers
- ML model performance Analysis comparisons
- ML Model Demonstration and prediction demonstration notebook

#### Project Deliverables-11

- Internal Analysis and RFC to analyst team members

## Construct

### Build, Train/Test

Build train and test various machine learning models

`Project Disclaimer - in reality I wouldn't carry out the sort of overkill development you see here, but I want to compare model performance because I'm curious to see how they perform with feature engineering vs without any Feature Engineering)`

Dataset | Key Features | Model
| :- | :- | :-
salifort_data_clean.csv | Post EDA Clean, minimal feature engineering<br>Dedupe, Missing Values, | Logistic Regression<br>Decision Tree<br>RandomForest<BR>XGBoost
salifort_data_clean_no_ol.csv | As above with outliers removed | Logistic Regression (LR is sensitive to outliers)
salifort_data_clean_FE.csv | As above with Feature Engineering<br>Salary<br>Overworked | Logistic Regression<br>Decision Tree<br>RandomForest<BR>XGBoost

And apply them across the datasets to create a comparison table of results I can use for the final model recommendations to promote to development of the demonstration model.

### Conclusion and next steps

From the results of the model development and testing, two models will be selected and applied to the development of the interactive and live demonstrations

## Execute

- Interpret model
- Evaluate model performance using metrics
- Prepare results, visualizations, and actionable steps to share with stakeholders

## Conclusion

Project Close

- Under instruction from the client the following operations will be carried
  - Data Erasure - all supplied data will be backed up to client's cloud
  - All local copies of data will be deleted for data security
  - Agree Dates with client for follow up meetings at six and twelve months for HR and Team Leaders review meeting

