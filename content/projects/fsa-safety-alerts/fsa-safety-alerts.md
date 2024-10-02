+++
title = "Food Standards Agency Alerts Analysis"
date = 2024-08-12T09:15:27.561Z
description = "Analysis of Food Standards Agency Alerts"
draft = false
slug = ""
authors = [ "Rodders" ]
tags = [ "Python", "R", "Pandas", "Numpy", "Matplotlib" ]
categories = [ ]
externalLink = ""
series = [ ]
featuredImage = "/fsa-alerts/cover.jpg"

+++

![FSA Logo](https://rodders.me/projects/fsa-safety-alerts/cover.jpg)

## Analysis of Food Standards Agency Alerts

# Report Index
- [Report Introduction](https://rodders.me/fsa-alerts/docs/00-fsa-analysis-introduction.php)
- [Summary](https://rodders.me/fsa-alerts/docs/01-fsa-summary.php)
- [Pathogenic Contaminants](https://rodders.me/fsa-alerts/docs/02-fsa-pathogens.php)
- [Allergenic Contaminants](https://rodders.me/fsa-alerts/docs/03-fsa-allergens.php)
- [Foreign Material Contaminants](https://rodders.me/fsa-alerts/docs/04-fsa-foreign-material.php)
- [Other Contaminants / Issues](https://rodders.me/fsa-alerts/docs/05-fsa-other.php)
- [Contaminants by Product Type](https://rodders.me/fsa-alerts/docs/06-fsa-product-type.php)

## Analysts Notes
- [Meta Data](https://rodders.me/fsa-alerts/docs/a0-fsa-meta-data.php)
- [Feature Engineering](https://rodders.me/fsa-alerts/docs/a1-fsa-feature-engineering.php)

### Abstract

This report presents a comprehensive review of the food safety alerts issued by the UK Food Standards Agency. The analysis provides insights into the frequency, types, and relevant information about each alert, covering an eight year period. The study aims to raise awareness about the importance of monitoring and responding to food safety incidents, highlighting the need for effective public health measures to prevent outbreaks and protect consumers. By analysing the characteristics and trends of these alerts, this report contributes to the understanding of food safety risks and informs policy decisions aimed at promoting a safer food environment.

## Infographic

![Inforgraphic](https://rodders.me/fsa-alerts/icons/INFOGRAPHIC.png)

## A bit about the UK Food & Drink Sector

- UK consumers spent £245.5bn on food and drink in 2023.[^2]
- The UK Food and Drinks sector (including agriculture) employees 4.378 million people [^3]
- There are 23,110 business in the Food and Drink sector with 98% of these Small / Medium size companies (< 250 employees) [^4]

[^2]: https://www.gov.uk/government/statistics/food-statistics-pocketbook](https://www.gov.uk/government/statistics/food-statistics-pocketbook/food-statistics-in-your-pocket) 

[^3]: https://www.gov.uk/government/statistics/food-statistics-pocketbook](https://www.gov.uk/government/statistics/food-statistics-pocketbook/food-statistics-in-your-pocket#agri-food-sector-employees-gb-2023)

[^4]: https://www.gov.uk/government/statistics/food-statistics-pocketbook](https://www.gov.uk/government/statistics/food-statistics-pocketbook/food-statistics-in-your-pocket#number-of-uk-food-and-drink-manufacturers-by-business-size-in-2023)

## Did you know that 34% of all food safety alerts[^1] are issued to grocery retailers for own brand products, yet the origin of many products remains largely unknown?

As we explore the complexities of food safety in the UK, let's start by peeling back the layers and uncovering the truth behind our daily diets.

Food safety is a critical issue in the UK. Millions of people are affected by foodborne illnesses every year. These illnesses can range from mild discomfort to life-threatening complications.

[^1]: Since 2014. 2021 to 2024 ytd 30% of all safety alerts are issued to Grocers

## Report Objective

In this report, I delve into the complexities of food safety in the UK. I examine the trends, patterns, and areas for improvement, to better understand the issues.

The purpose of this report is to provide a comprehensive visual overview of food safety alerts issued by the UK Food Standards Agency, with a focus on major food categories and their corresponding contamination risks. By presenting a range of visualizations, including stacked bar plots, pie chart and time-series plots. The objective is to provide readers with valuable insights into the types of contaminants that pose the greatest threats to consumer health. By visualizing the data, I have improved accessibility, and in turn, I hope that this helps empower policymakers, industry professionals, and consumers with data-driven insights that inform their decisions on food safety management and risk mitigation strategies.

The report's objective is threefold.

- Firstly, it aims to provide a broad overview of the distribution of food safety alerts across different categories, highlighting areas where contamination risks are particularly high.
- Secondly, it seeks to drill down into specific food categories, presenting detailed visualizations that illustrate the types and frequencies of contaminants associated with each category.
- Finally, the report aims to facilitate comparison and analysis between different food categories, enabling stakeholders to identify trends, patterns, and areas for improvement in food safety practices. 

By achieving these objectives, I hope to contribute to a safer and more informed food system in the UK, and assuage my intense curiosity about how safe UK food really is (Hint, we're good ....)

The main goal of this analysis is to provide data-driven insights that inform policymakers, industry professionals, and consumers about effective strategies for managing food safety risks in the UK. By visualizing the data, I aim to improve accessibility and empower stakeholders with actionable recommendations that can help reduce foodborne illnesses and ensure a safer food system.

## Food for thought? Click here to "spice up" your learning and move on to the detail behind this analysis!

# [fsa-alerts-analysis](https://rodders.me/projects/fsa-alerts/docs/00-fsa-analysis-introduction.php)

## Data Sources

Current Food Safety Alerts can be found at : 
- https://food.gov.uk 

- https://webarchive.nationalarchives.gov.uk/ukgwa/20171207145542/https://www.food.gov.uk/news-updates/news/food-alerts


# Fun and Entertaining Risks found in our food supply (found in the dataset)

While carrying out EDA, a number of alerts caught my eye since they were so far outside the normal list of pathogens and contaminants. It is important to note, in nearly all instances the appearance of these contaminants in food products were one-offs and should not be cause for concern.

## Aflatoxins

### What are Aflatoxins
Aflatoxins are a group of toxic compounds produced by certain moulds (Aspergillus species) that grow in soil, decaying vegetation, hay, and grains. These moulds, primarily 
Aspergillus flavus and Aspergillus parasiticus, can contaminate food crops and pose serious health risks to both humans and animals.

### Key Characteristics and Facts about Aflatoxins:

- **Toxicity and Carcinogenicity:**
    - Aflatoxins are highly toxic and are considered one of the most potent naturally occurring carcinogens.
    - They can cause liver damage and are associated with an increased risk of liver cancer.
    - Chronic exposure to low levels of aflatoxins can also lead to immune suppression and other health issues.

- **Health Impacts:**
    - Acute aflatoxin poisoning (aflatoxicosis) can lead to severe liver damage, acute hepatitis, jaundice, and, in extreme cases, death.
    - Long-term exposure to low levels of aflatoxins is associated with a range of health problems, including liver cancer, stunted growth in children, and compromised immune function.

## Aluminium phosphide 

### What is Aluminium phosphide
Aluminium phosphide (AlP) is a highly toxic chemical compound commonly used as a fumigant to control pests, such as insects and rodents, in various industries like agriculture, forestry, and construction. 
It's also known as aluminum phosphide or aluminum monophosphide.

### Uses

- **Fumigation:** AlP is used to kill pests by releasing toxic phosphine gas when it comes into contact with moisture.
- **Insecticide:** It's used to control insects in stored products, such as grains and other agricultural commodities.
- **Rodenticide:** AlP is used to kill rodents, like rats and mice, in various settings.

### Risks if found in food

- **Toxicity:** Aluminium phosphide is extremely toxic. Ingestion of contaminated food can cause severe symptoms, including:
    - Abdominal pain
    - Vomiting
    - Diarrhoea
    - Nausea
    - Headaches
    - Muscle weakness
    - Respiratory distress (in severe cases)
- **Risk of acute poisoning:** 
    - Consuming AlP contaminated food can lead to rapid onset of symptoms, potentially resulting in acute poisoning.

- **Long-term health effects:** Prolonged exposure or repeated episodes of exposure may cause chronic health issues, such as:
	- Neurological problems
    - Kidney damage
    - Liver damage

### **Residue detection:** Testing for AlP residues in food is challenging, as the compound is highly volatile and easily degrades.


## Atropine & Scopolamine

### What are Atropine and Scopolamine

Atropine and Scopolamine are naturally occurring alkaloid compounds extracted from the plant Atropa belladonna (deadly nightshade). 
It's a powerful anticholinergic agent, commonly used in medicine for various purposes.

### Atropine medical uses

- **Anaesthesia:** Atropine is used as an adjunct to anaesthesia to relax the muscles and reduce secretions.
- **Emergency medicine:** It's used to treat poisoning from certain substances, such as organophosphate pesticides or nerve agents.
- **Eye care:** Atropine eye drops are used to dilate pupils and treat certain eye conditions.


### Scopolamine Medical uses

- **Anaesthesia:** Scopolamine is used as an adjunct to anaesthesia to relax the muscles and reduce secretions.
- **Motion sickness:** It's used to prevent or treat motion sickness, nausea, and vomiting associated with travel, seasickness, or air travel.
- **Irritable bowel syndrome (IBS):** Scopolamine is sometimes used to treat IBS symptoms, such as abdominal pain, diarrhoea, and constipation.


### **Risks if found in food:**

- **Toxicity:** 
Scopolamine & Atropine are highly toxic. Ingestion of contaminated food can cause:
    - Nausea
    - Vomiting
    - Abdominal cramps
    - Diarrhoea
    - Headaches
    - Dizziness
    - Confusion
    - Seizures (in severe cases)

- **Risk of anticholinergic syndrome:** 
Consuming Scopolamine or Atropine contaminated food can lead to the development of anticholinergic syndrome, characterized by:
    - Dry mouth
    - Blurred vision
    - Difficulty speaking or swallowing
    - Increased heart rate and blood pressure
    - Decreased sweating and salivation

- **Long-term health effects:** 
Prolonged exposure or repeated episodes of exposure may cause chronic health issues, such as:
    - Cognitive impairment
    - Memory problems
    - Mood changes



## Rhodamine B

## What is Rhodamine B
Rhodamine B is a synthetic fluorescent dye widely used in various industries, including:

- **Biotechnology:** As a labeling reagent for biomolecules, such as proteins, nucleic acids, and cells.
- **Chemical analysis:** As a fluorescence probe for detecting specific compounds or molecules.
- **Food coloring:** In some countries, Rhodamine B is used as a food dye, although its use is not widely approved due to concerns about toxicity.

### Risks from food contamination:

-  **Toxicity:** Rhodamine B is considered toxic and can cause:
    - Nausea
    - Vomiting
    - Abdominal cramps
    - Diarrhoea
    - Headaches
    - Dizziness
    - Confusion
- **Risk of cancer:** 
Long-term exposure to Rhodamine B has been linked to an increased risk of certain types of cancer, such as:
    - Leukemia
    - Lymphoma
- **Reproductive risks:** 
Exposure to Rhodamine B during pregnancy or breastfeeding may pose reproductive risks, including:
    - Birth defects
    - Fetal damage
- **Neurological concerns:** 
Rhodamine B has been shown to cause neurological effects, such as:
    - Memory impairment
    - Cognitive decline

## Struvite salts

Struvite salts, also known as magnesium ammonium phosphate (MAP), are naturally occurring minerals that can be found in food products. They're formed when magnesium, ammonia, and phosphate ions combine in 
a specific ratio.

- **What is Struvite?**
    - Struvite is a type of mineral that can form in food products, particularly in dairy or meat products, when there's an imbalance of nutrients or pH levels. 
    - It's often associated with spoiled or rotten foods, as it can be a sign of bacterial growth or contamination.

### **Risks from contamination:**

- **Food spoilage:** 

    - Struvite formation can indicate food spoilage, which can lead to food born illnesses if consumed.

- **Toxicity:** 
    - Some struvite salts can be toxic if ingested in large quantities, causing:
    - Nausea
    - Vomiting
    - Abdominal cramps
    - Diarrhoea
    - Headaches
- **Reproductive risks:** 
    - Exposure to certain struvite salts during pregnancy or breastfeeding may pose reproductive risks, including:
    - Birth defects
    - Fetal damage
- **Allergic reactions:** 
    - Some people may be allergic to struvite salts, which can cause skin rashes, itching, and other symptoms.

# Report Index
- [Report Introduction](https://rodders.me/fsa-alerts/docs/00-fsa-analysis-introduction.php)
- [Summary](https://rodders.me/fsa-alerts/docs/01-fsa-summary.php)
- [Pathogenic Contaminants](https://rodders.me/fsa-alerts/docs/02-fsa-pathogens.php)
- [Allergenic Contaminants](https://rodders.me/fsa-alerts/docs/03-fsa-allergens.php)
- [Foreign Material Contaminants](https://rodders.me/fsa-alerts/docs/04-fsa-foreign-material.php)
- [Other Contaminants / Issues](https://rodders.me/fsa-alerts/docs/05-fsa-other.php)
- [Contaminants by Product Type](https://rodders.me/fsa-alerts/docs/06-fsa-product-type.php)

## Analysts Notes
- [Meta Data](https://rodders.me/fsa-alerts/docs/a0-fsa-meta-data.php)
- [Feature Engineering](https://rodders.me/fsa-alerts/docs/a1-fsa-feature-engineering.php)