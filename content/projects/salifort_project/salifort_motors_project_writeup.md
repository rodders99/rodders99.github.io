---
title: Salifort Motors - Google Advanced Analytics Capstone Project
description: Google Advanced Data Analytics Capstone Project
date: "2024-02-10"
keywords:
    - Google
    - Data Analytics
    - Python
    - pandas
    - Machine Learning
slug: Salifort Motors
draft: false

featuredImage: /salifort_project/Salifort-Logo.png

---

![Salifort Logo](/salifort_project/salifort_logo.png)

## Google Advanced Data Analytics Capstone Project - Salifort Motors

### Overview

Salifort Motors (The Client) is a fictitious company experiencing significant loss of employees.
They have created a project team to provide data driven suggestions for the HR team to implement to
improve employee retention.

The estimated cost of lost employees to the client is in the order of £42m for 2022, for 1,991
employees who left employment in 2022, representing 20% of all employees (10,000).

The project was completed using the PACE framework and the conclusions were :

- A Machine Learning model that can make predictions on the probability of an employee leaving
- a number of recommendations for the team at Salifort Motors aimed at improving employee retention.

```
As a capstone project, this was a great opportunity for me  
to develop tools and workflows for a data analysis project. 

While the project only requires a solution with one model, 
I wanted to see how the models compared, which is why this 
is such a large document. 
```

A typical Data Analysis project would decide on a single model and stick with it!

### Client Documentation

- [Client Proposal](/salifort_project/docs/cd_01_Salifort_Motors_project-PROPOSAL.php)

    This details a typical client proposal for the work that needs to be carried out.

- [PACE Framework](/salifort_project/docs/cd_02_Salifort_Motors_PACE_Plan.php)

- [Executive Summary Analysis](/salifort_project/docs/cd_04_Salifort_Motors_EXECUTIVE_SUMMARY.php)
  - [Executive Summary Presentation](/salifort_project/presentation/cd_04a_Salifort_Motors_EXECUTIVE_SUMMARY_PRESENTATION.html)

- [HR Summary Analysis](/salifort_project/docs/cd_05_Salifort_Motors_HR_SUMMARY.php)
  - [HR Summary Presentation](/salifort_project/presentation/cd_05a_Salifort_Motors_HR_SUMMARY_PRESENTATION.html)

- [HR Summary Notebook for discussion](/salifort_project/docs/HR_Summary_Notebook.php)

- [Team Summary](/salifort_project/docs/cd_06_Salifort_Motors_TEAM_SUMMARY.php)

Generates a report for each department

- [Example Team Summary Notebook (Plots for presentations)](/salifort_project/docs/cd_06_Salifort_Motors_TEAM_SUMMARY-example-output.php)

An example of the generated Team report

- [Analyst Report](/salifort_project/docs/cd_03_Salifort_Motors_Analyst_SUMMARY.php)

- [Project Close](/salifort_project/docs/cd_99_Salifort_Motors_Project_Close.php)

### Analyst's Project Notebooks

- [Salifort Project - Data Cleanse Ops](/salifort_project/docs/nb_03_Salifort_Motors_project_EDA_cleanse.php)

- [Salifort Project - EDA Analysis Ops](/salifort_project/docs/nb_04_Salifort_Motors_project_EDA_ANALYSIS.php)

- [Salifort Project - Feature Engineering](/salifort_project/docs/nb_05_Salifort_Motors_project_Feature_Engineering.php)

- [Salifort Project - Logistical Regression Modelling](/salifort_project/docs/nb_06_Salifort_Motors_project_Logistic_Regression_Model.php)

- [Salifort Project - Decision Tree Modelling](/salifort_project/docs/nb_07_Salifort_Motors_project_Decision_Tree_Model.php)

- [Salifort Project - XGBoost Modelling](/salifort_project/docs/nb_08_Salifort_Motors_project_XGBoost_Model.php)

- [Salifort Project - Random Forest Modelling](/salifort_project/docs/nb_09_Salifort_Motors_project_Random_Forest_Model.php)

- [Salifort Project - Model Comparisons](/salifort_project/docs/nb_11_Salifort_Motors_project_Model_Comparisons.php)

- [Salifort Project - Demonstration Model](/salifort_project/docs/nb_12_Salifort_Motors_project_MODEL_DEMONSTRATION.php)

### About this project structure

#### Methods

Since this is for educational purposes I set out with a number of goals additional to the project objective:

#### Goal 1

Experiment, experiment, break it, fix it, experiment, learn

#### Goal 2

Develop workflow functions to handle common tasks across different models types.

Four models were created with a notebook for each. The workflows are nearly identical in each since I could establish a common set of steps and standardise the most labour-intensive into functions where the entire step could be replaced with a function call.

Outside of the typical functions (load, save, etc), functions were created for visualising, and reporting.

##### For EDA Analysis

Reporting functions.

**```eda_single(dataframe: object, var: str, decplace:int)```:**

    Return a df summary of the EDA variable.
    in  : dataframe: Object = The dataframe to EDA
          var: String       = variable to summarise
          decplace: int     = Number of decimal place for pandas.options.display.float_format # to be removed
    out : dataframe summary of the variable 

**```eda_dual(dataframe: object, var1: str, var2: str, decplace: int)```:**

    Return a df summary of the EDA variable.
    in  : dataframe: Object = The dataframe to EDA
          var1: String      = variable to summarise
          var2: String      = second variable
          decplace: int     = Number of decimal place for pandas.options.display.float_format # to be removed
    out : dataframe grouped by summary of the variable 

**```eda_single_bins(dataframe: object, var: str, bins: list, labels: list, decplace: int)```:**

    Return a BINNED df summary of the EDA variable.
    in  : dataframe: Object = The dataframe to EDA
        : var: String       = variable to summarise
        : bins: List        = list object of the bin groupings e.g. [0, 0.33, 0.5, 0.7, 1] 
        : labels: List      = list object of the bin labels e.g. ['low', 'medium', 'high'] 
        : decplace: int     = Number of decimal place for pandas.options.display.float_format # to be removed
    out : binned dataframe summary of the variable 

Various visualisation functions.

**```correlation_single(dataframe: object, var: str)```:**

    Return a single row from the correlation plot.
    in  : dataframe: Object = The dataframe to EDA
          var: String       = variable to summarise
    out : correlation heatmap plot

**```quadplot(dataframe:object, var:str, annotate:bool)```:**

    Quad plot 2x2 histogram, heatmap, barplot, violinplot,
    in  : dataframe     : Object        = Dataframe to analyse
        : var           : Variable      = variable to summarise
        : annotate      : Bool          = Annotate the heatmap (if lots of data select False) True / False
    out : 4 x plots of the variable.

**```scatplot_single(dataframe: object, x_var: str, y_var: str)```:**

    Create scatterplot of two variables,
    in  : dataframe : Object = Dataframe to analyse
        : x_var     : Str    = First variable to plot on x-axis
        : y_var     : Str    = Second variable to plot on y-axis
    out : single scatterplot

**```scatplot_multi(dataframe: object, var1: str)```:**

    Create scatterplots of one variable against all variables in dataframe,
    in  : dataframe : Object = Dataframe to analyse
        : var1: Variable      = Variable to plot on y-axis
    out : single scatterplot

##### For modelling

**```make_results(model_name: str, model_object: object, X_var: str, y_var: str, y_pred_var: str) ```:**

    Returns a pandas df with the F1, recall, precision, and accuracy scores
    for the model with the best mean F1 score across all validation folds.

    In: 
        model_name (string):  How you want your model to be named in the output table
        model_object:         The model object
        X_var:                numpy array of X data
        y_var:                numpy array of y data
        y_pred_var:           numpy array of predict

    Out: pandas df containing precision, recall, f1, accuracy, and AUC scores of the models

**```format_GS_results(model_name:str, model_object, metric:str)```:**

    Returns a pandas df with the F1, recall, precision, accuracy, and auc scores
    from the GridSearch.
    
    In:
        model_name (string): what you want the model to be called in the output table
        model_object: a fit GridSearchCV object from test data
        metric (string): precision, recall, f1, accuracy, or auc

**```classification_report_summary(name:str, y_var:str, y_pred_var:str)```:**

    Gather stats from predictions and format into a report

    In: 
        name:str    : Test data name for report header e.g. TEST or TRAIN
        y_var       : y variable
        y_pred_var  : y prediction Variable

    Out: Display of precision, recall, f1, accuracy, and AUC scores of the models, Weighted Average and Prediction f1 score for true/false

#### Goal 3

Compare model performances across the most common models Logistical Regression, Random Forest, Decision Tree and XGBoost.

#### Goal 4

Compare the effect on model performance of using the complete dataset and a feature engineered version  where features that had very low or no correlation were removed.
      - In this project it was mainly the departments the employee worked in that had little bearing on the results.
  
Two datasets were created <code>AllFeat</code> which had all of the dataset features,  and <code>NoDept</code> which had the departments removed.

Each model was created, trained, used for predictions and scored. These scores were stored in Results.csv
  
#### Goal 5

Create working demonstrations of the models to give 'live' performance comparisons that would be easier to understand for the client's team. e.g.  rather than presenting F1 scores, AUC, Precision, etc. I can present an example where the model has been applied and a prediction given.

Four examples were developed and can be found in the following notebooks:

##### Interactive

The function is given information about the employee:

- last_eval
- left
- number_project
- overworked
- promotion
- salary
- satisfaction
- tenure

And outputs a prediction from the main three models

##### Summary

The models are run through the dataset for employees who have left and employees who have stayed. So, for example 1991 employees had left, the models are run on these employees to see how many it would have predicted to leave and again on the current employees to predict who is at risk from leaving.

##### Predictions on datafile

The HR dataset is processed through the models and columns added with predictions, this is stored in an html file for later viewing

##### Team Manager's report

This is a template that can be customised by the HR Team for each team manager. By simply changing one variable for the team an entire report can be generated, saving the HR team a lot of time preparing for meetings with team managers.

#### [Salifort Project - Team Summary Jupyter Notebook](/salifort_project/docs/cd_06_Salifort_Motors_TEAM_SUMMARY.php)

This notebook provides two elements to the team manager :

takes the variable for the team and applies a series of code cells to present the team's employee data as a series of comparative plots that demonstrate these metrics side by side for the company, the employees in that team that left and the current employees along with indicators across all plots for the average for the company.

### Data and Files

Files are structured to preserve my sanity

	<h1>Directory Tree</h1><p>
	├── 00-data_cleaned<br>
	├── 00-data_source<br>
	├── 04-pickle-ML-models<br>
	├── 99-documentation-project<br>
	│   ├── 00-Timeline<br>
	│   ├── 01-Client_Proposal<br>
	│   ├── 02-PACE_Workflow<br>
	│   ├── 03-Analyst_Summary<br>
	│   ├── 04-Executive_Summary<br>
	│   ├── 05-HR_Summary<br>
	│   ├── 06-Team_Summaries<br>
	│   ├── 07-predictions<br>
    │   ├── 08-plot_data<br>
    │   ├── 09-project_close<br>
	│   ├── css<br>
	│   └── img<br>
	├── z-dev-notebooks<br>
	├── nb_03_Salifort_Motors_project_EDA_cleanse.ipynb<br>
	├── nb_04_Salifort_Motors_project_EDA_ANALYSIS.ipynb<br>
	├── nb_06_Salifort_Motors_project_Feature_Engineering.ipynb<br>
	├── nb_06_Salifort_Motors_project_Logistical_Regression_Model.ipynb<br>
	├── nb_07_Salifort_Motors_project_Decision_Tree_Model.ipynb<br>
    ├── nb_08_Salifort_Motors_project_XGBoost_Model.ipynb<br>
	├── nb_09_Salifort_Motors_project_Random_Forest_Model.ipynb<br>
	├── nb_11_Salifort_Motors_project_Model_Comparisons.ipynb<br>
	├── nb_12_Salifort_Motors_project_MODEL_DEMONSTRATION.ipynb<br>

<br><br><p>

19 directories
</p>
