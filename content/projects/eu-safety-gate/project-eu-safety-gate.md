+++ 
draft = false
date = 2024-03-02T09:57:08Z
title = "EU SafetyGate Report 2023"
description = "Analysis of EU SafetyGate data"
slug = ""
authors = ["Rodders"]
tags = ["Python", "R", "Pandas", "Numpy", "Matplotlib"]
categories = []
externalLink = ""
series = []
+++

![Safety Gate Logo](https://rodders.me/img/Safety_Gate_Logo.png)

## The EU Safety Gate project

### About this Project

Comprehensive Analysis is not currently available for the EU Safety Gate Data, this report aims to address that with a comprehensive set of visualisations of the key features of the Safety Gate Data.



## About the EU Safety Gate Rapid Alert System

The Safety Gate rapid alert system plays an important role
enabling swift and effective action to be taken across the single
market when a dangerous product is found.

Exchange of information on dangerous non-food products kicked
off informally in 2001. It became compulsory in 2002 under the
General Product Safety Directive which set up the rapid alert system
for dangerous non-food products. In December 2024, the General
Product Safety Regulation will replace the Directive and the rapid
alert system will officially be renamed Safety Gate.

EU Safety Gate is The data in this report and is based on information from national
authorities on measures taken against dangerous non-food products.

Data has been sourced from [Safety Gate Web Site](https://ec.europa.eu/safety-gate/).

This information includes various risks that they have identified,
mainly to consumers’ health and safety but also to the environment
or risks in relation to professional products (i.e. products not
normally available to consumers). The report also takes into account
data related to information exchanged among member countries
that is not published on the Safety Gate website.
The report presents statistics on the rapid alert system. It does not
purport to give a comprehensive picture of all dangerous products
on the single market, nor does it give an overview of all market
surveillance efforts undertaken by the EU/EEA national authorities.
Due to the dynamic nature of the system, the data may vary
depending on the time of extraction.

![Safety Gate Logo](https://rodders.me/img/safetygate/img/Safety_Gate_Logo.png)

## EU Safety Gate Summary Report

[EU SafetyGate Analysis Report](/safetygate/docs/eu-safetygate-report-2023-all.html)

## EU Safety Gate Summary Country Report Card

[EU SafetyGate COUNTRY  Analysis Report](/safetygate/docs/eu-safetygate-report-2023-country.html)

## EU Safety Gate Compare Safetygate visualisations

[EU SafetyGate COUNTRY  Analysis Report](/safetygate/docs/eu-safetygate-report-2023-comparison.html)

### Data Meta Data

| #  | Column Name| Count|Dtype|Field Values|Notes|
| :- | :-         | :-:  | :-  | :-         |:- |
|0|Type of alert|35508|object|Serious risk', 'Other types of alerts', 'Other risk levels'| |
|1|Type|35508|object|Consumer', 'Professional'| |
|2|Alert number|35508|object|Numeric Reference| |
|3|Alert submitted by|35508|object|32 x Countries referenced| |
|4|Country of origin|35508|object|108 x Countries referenced|Feature Engineered to new column ‘country_top15’ detailing the top 15 countries, Non top-15 countries categorised as other and ‘economic_area’ : EU Countries, Outside EU, Italy (noted for 2023 specifically)|
|5|Counterfeit|35508|object|No' 'Unknown' 'Yes'| |
|6|Risk type|35508|object|218 x Risk Types|Feature engineered to ‘risk_category’ to reduce values to a manageable level for plotting. The FIRST entry in the value is used as the risk_category. e.g. 'Injuries, Multiple Injuries Possible: Crushing, Fractures, Concussion, Internal Injuries.' would feature engineer to ‘Injuries.|
|7|Risk legal provision|27363|object|16,174 unique values|No Analysis carried out|
|8|Product|34164|object|8926 unique values|Category’ was used instead with additional feature engineering to product_category|
|9|Name|21872|object| |No Analysis carried out|
|10|Description|35069|object| |No Analysis carried out|
|11|Brand|35508|object|14,713 x values|Feature engineering of Brand was carried out for the motoring product category, other product categories were not changed. The Cleansed Motor Category Brand was then used to re-feature engineer the country of origin to reflect the HQ of the Motoring Brand. |
|12|Category|35508|object|80 x values|OECD Portal Category was used to feature engineer ‘product_category’|
|13|Type / number of model|30341|object|28,078 x values|No Analysis carried out|
|14|OECD Portal category|23450|object| |No Analysis carried out, too many missing values|
|15|Risk|22220|object| |No Analysis carried out, free text, no categorical data. |
|16|Compulsory measures|35508|object| |Feature Engineered to binary feature voluntary_xxxxx|
|17|Voluntary measures|35508|object| |Feature Engineered to binary feature compulsory_xxxxx|
|18|Products were found and measures were taken also in|9459|object| |No Analysis carried out, too many missing values|
|19|Company recall page|1165|object| |No Analysis carried out, too many missing values|
|20|URL of Case|35508|object| |No Analysis carried out, not categorical|
|21|Barcode|5917|object| |No Analysis carried out, too many missing values|
|22|Batch number|14252|object| |No Analysis carried out, too many missing values|
|23|Company recall code (**)|1831|object| |No Analysis carried out, too many missing values|
|24|Production dates (**)|4074|object| |No Analysis carried out, too many missing values|
|25|Packaging description|6126|object| |Feature Engineered|
|26|year|35508|datetime64[ns]| |Feature Engineered|
|27|week|35508|object| |Feature Engineered|
|28|date|35508|datetime64[ns]| |Feature Engineered|
|29|economic_area|35508|object| |Feature Engineered|
|30|risk_category|35508|object| |Feature Engineered|
|31|product_category|35508|object| |Feature Engineered|
|32|country_top15|35508|object| |Feature Engineered|
|33|compulsory_warnings|35508|bool| |Feature Engineered|
|34|compulsory_borderstop|35508|bool| |Feature Engineered|
|35|compulsory_withdrawal|35508|bool| |Feature Engineered|
|36|compulsory_recall|35508|bool| |Feature Engineered|
|37|compulsory_ban|35508|bool| |Feature Engineered|
|38|compulsory_destruction|35508|bool| |Feature Engineered|
|39|compulsory_removal|35508|bool| |Feature Engineered|
|40|compulsory_criminal|35508|bool| |Feature Engineered|
|41|compulsory_responsible_unknown|35508|bool| |Feature Engineered|
|42|compulsory_responsible_retail|35508|bool| |Feature Engineered|
|43|compulsory_responsible_disti|35508|bool| |Feature Engineered|
|44|compulsory_responsible_importer|35508|bool| |Feature Engineered|
|45|compulsory_responsible_manufacturer|35508|bool| |Feature Engineered|
|46|compulsory_responsible_other|35508|bool| |Feature Engineered|
|47|voluntary_warnings|35508|bool| |Feature Engineered|
|48|voluntary_borderstop|35508|bool| |Feature Engineered|
|49|voluntary_withdrawal|35508|bool| |Feature Engineered|
|50|voluntary_recall|35508|bool| |Feature Engineered|
|51|voluntary_ban|35508|bool| |Feature Engineered|
|52|voluntary_destruction|35508|bool| |Feature Engineered|
|53|voluntary_removal|35508|bool| |Feature Engineered|
|54|voluntary_criminal|35508|bool| |Feature Engineered|
|55|voluntary_responsible_unknown|35508|bool| |Feature Engineered|
|56|voluntary_responsible_retail|35508|bool| |Feature Engineered|
|57|voluntary_responsible_disti|35508|bool| |Feature Engineered|
|58|voluntary_responsible_importer|35508|bool| |Feature Engineered|
|59|voluntary_responsible_manufacturer|35508|bool| |Feature Engineered|
|60|voluntary_responsible_other|35508|bool| |Feature Engineered|

## Creative Commons License

The reuse policy of European Commission documents is implemented by the Commission Decision 2011/833/EU
of 12 December 2011 on the reuse of Commission documents (OJ L 330, 14.12.2011, p. 39). Except otherwise noted,
the reuse of this document is authorised under a [Creative Commons Attribution 4.0 International (CC-BY 4.0) licence](https://creativecommons.org/licenses/by/4.0/). This means that reuse is allowed provided appropriate credit is given and any changes are indicated.
