---
marp: true
theme: gaia
class: 
    #- lead
    - invert
style: |
  .small-text {
    font-size: 0.75rem;
  }
paginate: true
#backgroundColor: #fff
#backgroundImage: url('https://marp.app/assets/hero-background.svg')
---

![bg left:40% 80%](https://rodders.me/salifort_project/img/salifort_logo.png)

# **Salifort Motors**
# **HR SUMMARY**

HR Data Analysis and Employee Retention Strategy

    https://rodders.me/projects/salifort_project/salifort-motors/

---

# Project Introduction

## Objective
Utilize HR data analysis to identify factors contributing to employee turnover and propose actionable strategies to enhance retention.

## Methodology

Exploratory Data Analysis and Machine Learning Model (XGBoost) to identify key predictors of employee attrition and predict future risks

---

# Key Findings from Data Analysis

### Main Observations

- High turnover among employees with low satisfaction scores, excessive hours (>200/month), or extreme project loads.
- Significant departures linked to salary levels—59% of those who left were on low salaries.

### Critical data points

- 20% low last evaluation scores in leavers vs. 10% in stayers

---

# Detailed Analysis Insights

### Employee Performance and Workload

- 45% of employees engaged in 2 or fewer projects left the company.
- Employees working more than 300 hours monthly showed a 100% turnover rate.

### Tenure and Management

- High turnover noted within 3 to 5-year tenure bracket.
- Current employee-to-manager ratio stands at 23:1, suggesting a need for more management positions.

---

# Risk Prediction Using ML Model

<br>

<div align="center">

| | Probability  | Model Accuracy
| :-  | :-:| :-:
| High Risk | >90% | 72%
| Medium Risk | > 70% | 91%
| General Risk | >50% | 92%

</div>

---

# Current Risk Predictions

## Model Accuracy

- 91.98% of past leavers would have been identified using the model, demonstrating effectiveness.

## Current Risk Levels

    67 employees identified above low risk, with 12 at high risk and 33 at medium risk

---
# Estimate Cost of lost employees

- Assuming a nominal cost of 50% of total annual salary to replace a member of staff

| | # of Staff                       | Cost Per Head | Est Cost   |
|:-| :-: | -: | -: |
| High Salary Left Cost   | 48            | £75,000     | £3,600,000
| Medium Salary Left Cost | 769           | £50,000     | £38,450,000
| Low Salary Left Cost    | 1,174         | £25,000     | £29,350,000
| **Est. replacement cost**        | **1,991**         | |  **£71,400,000**

<p class="small-text">Assumptions on salary have been made.</p>

---
# Blind application of salary review

The costs (and savings) by applying a 30% pay increase to everyone who left


| | # of Staff                       | Cost Per Head | Est Cost   |
|:-| :-: | -: | -: |
| High Salary Left Cost   | 48            | £45,000     | £2,160,000
| Medium Salary Left Cost | 769           | £30,000     | £23,070,000
| Low Salary Left Cost    | 1,174         | £15,000     | £17,610,000
| **Est. replacement cost**        | **1,991**         | |  **£42,840,000**

<p class="small-text">Assumptions on salary have been made.</p>

---
# Application of Machine Learning

Using the machine learning model prediction, we can identify at risk employees before it's too late.

| | # of Staff                       | Cost Per Head | Est Cost   |
|:-| :-: | -: | -: |
| High Salary Left Cost   | 12            | £75,000     | £900,000
| Medium Salary Left Cost | 33           | £50,000     | £1,650,000
| Low Salary Left Cost    | 67         | £25,000     | £1,675,000
| **Est. Salary increase cost**        | **112**         | |  **£4,255,000**

<p class="small-text">Assumptions on salary have been made.</p>

---
# Strategic Recommendations

#### Compensation Adjustments

- Review salary structures to match industry standards

#### Workload Management

- Balance project allocations and working hours

#### Recognition Programs

- Enhance recognition mechanisms

---

# Career Development and Satisfaction

##### Career Growth Opportunities

- Expand opportunities for career advancement

##### Job Satisfaction

- Employee surveys to tailor interventions to enhance the workplace

##### Management Development

- Aggressively expand management training to reduce the employee-to-manager ratio and improve support

---

# Implementation of Flexible Working

#### Flexible Working Options

- Implement more flexible working arrangements to cater to diverse employee needs, enhancing satisfaction and retention.

#### Accident Analysis

- Investigate the high incidence of accidents and ensure workplace safety and well-being.

---

# Conclusion and Next Steps

#### Action Plan

- Immediate review of salary and benefits packages
- Introduction of targeted career development and management training programs

#### Follow-Up

- Schedule quarterly reviews to monitor the impact of implemented strategies and adjust as necessary