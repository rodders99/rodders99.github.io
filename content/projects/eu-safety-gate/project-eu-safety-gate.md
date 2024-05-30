+++
title = "EU SafetyGate Report 2023"
date = 2024-03-02T09:15:27.561Z
description = "Analysis of EU SafetyGate data"
draft = false
slug = ""
authors = [ "Rodders" ]
tags = [ "Python", "R", "Pandas", "Numpy", "Matplotlib" ]
categories = [ ]
externalLink = ""
series = [ ]
preview = "/img/Safety_Gate_Logo.png"
+++

![Safety Gate Logo](https://rodders.me/safetygate/img/icons/Safety_Gate_Logo.png)

## The EU Safety Gate project

### About this Project

I first encountered the EU Safety Gate in my previous role.

Since 2003, the Safety Gate has enabled a quick exchange of information among EU/EEA Member States and the European Commission about
dangerous non-food products posing a risk to the health and safety of consumers. Appropriate follow-up has to be taken by the national
authorities so that the notified dangerous products are removed from the market.

To facilitate the transmission of information to the public, the Commission also manages the [Safety Gate public Website](https://ec.europa.eu/safety-gate/#/screen/home).

The alerts are translated into all EU languages, in addition to Icelandic, Norwegian, Arabic, and Ukrainian. Businesses also have at their disposal the Business Safety
Gateway to inform national authorities quickly and efficiently about safety concerns regarding a product that they have put on the market.

This tool will become compulsory under the General Product Safety Regulation.

It is an interesting look into the world of dangerous and non compliant products that are sold across the world, but specifically relates to the European Union.

### Why this analysis?

1) Having encountered the data in a previous role, I was curious how each country approaches their safety recalls (Do they act on compulsory or voluntary motivation?)
2) Country level analysis is not available for the EU Safety Gate Data (I couldn't find any, it may exist), while there is an annual summary report, it's a bit scant on details!
3) I'm interested in the idea of low CO2 dashboards - which are dashboards with pre rendered visualisations, reducing cloud processing energy and cost requirements.

### Project README.md

### Analysts Notes

- [EU Safety Gate Meta Data Overview](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-meta-data.php)
- [EU Safety Gate Feature Engineering](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-feature-engineering.php)
- [EU Safety Gate Visualisations Plan](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-plot-plan.php)

### Safety Gate 2023 Analysis

Top Level analysis of the 2022 - 2023 dataset with visualisations for totals / 2022 Vs 2023 along with top 3 risk and product category visualisations for each country of product origin.

- [Safety Gate Detailed Summary for 2023](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-detail-2023.php)

### Safety Gate Summary Analysis

Top Level analysis of the entire dataset with visualisations for total alerts issued / 2022 Vs 2023 along with top 3 risk and product category visualisations for each country of product origin.

- [Safety Gate Detailed Summary for entire dataset](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-all.php)

### Safety Gate Compare Countries

- [Compare Countries](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-comparison.php?country1=france&country2=germany)

### Country of Origin Report

A detailed analysis with extensive visualisations of all key features of the data.

| | | | |
| :-: |  :-: | :-: | :-: |
|[![China](https://rodders.me/safetygate/img/icons/china-flag.webp)](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=china)|[![France](https://rodders.me/safetygate/img/icons/france-flag.webp)](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=france)|[![India](https://rodders.me/safetygate/img/icons/india-flag.webp)](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=india)|[![Italy flag](https://rodders.me/safetygate/img/icons/italy-flag.webp)](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=italy)
|[China](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=china)|[France](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=france)|[India](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=india)| [Italy](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=italy)
|[![Japan](https://rodders.me/safetygate/img/icons/japan-flag.webp)](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=japan)|[![Netherlands](https://rodders.me/safetygate/img/icons/netherlands-flag.webp)](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=netherlands)|[![Poland](https://rodders.me/safetygate/img/icons/poland-flag.webp)](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=poland)|[![Spain](https://rodders.me/safetygate/img/icons/spain-flag.webp)](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=spain)|
|[Japan](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=japan)|[Netherlands](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=netherlands)|[Poland](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=poland)|[Spain](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=spain)
|[![Sweden](https://rodders.me/safetygate/img/icons/sweden-flag.webp)](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=sweden)|[![Taiwan](https://rodders.me/safetygate/img/icons/taiwan-flag.webp)](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=tawian)|[![Turkey](https://rodders.me/safetygate/img/icons/turkey-flag.webp)](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=turkey)|[![UK](https://rodders.me/safetygate/img/icons/uk-flag.webp)](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=uk)|
|[Sweden](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=sweden)|[Taiwan](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=taiwan)|[Turkey](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=turkey)|[UK](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=uk)
|[![USA](https://rodders.me/safetygate/img/icons/usa-flag.webp)](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=usa)|||
|[USA](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=usa)|[Unknown](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=Unknown)|[Other (not top15)](https://rodders.me/safetygate/docs/eu-safetygate-report-2023-country.php?country1=other)||

### My Analysis

This analysis report aims to address the lack of summary and country level data with a comprehensive set of visualisations of the key features of the Safety Gate Data by country and country comparison.

Extensive feature engineering was carried out in order to produce meaningful and clear visualisations.

This was a great opportunity for me to flex my DA & visualisations skills with a secondary goal to recreate some of the visualisations from the 'official' report using Python, Pandas and Matplotlib.

A good example of my programmatic recreations are the country level top 3 visualisations showing the top 3 product categories and top 3 risks, in the official report and the geoplot, showing 
2022 vs 2023 how many alerts were issued by each country.

Inspiration :

| Source  | Official Version | Python version |
| :- |:- |:- |
|[source](https://webgate.ec.europa.eu/safety/consumers/consumers_safety_gate/statisticsAndAnualReports/2023/Safety_Gate_2023_Factsheet_EN.pdf) |![img](https://rodders.me/safetygate/img/inspiration-top3s.png) | ![img](https://rodders.me/safetygate/img/italy-top3s.png)
| [source](https://webgate.ec.europa.eu/safety/consumers/consumers_safety_gate/statisticsAndAnualReports/2023/Safety_Gate_2023_report_EN.pdf) | ![img](https://rodders.me/safetygate/img/inspiration-purpleplot.png)  | ![img](https://rodders.me/safetygate/img/number-of-alerts-validated-on-safetygate-from-2003-to-2023.png)
| [source](https://webgate.ec.europa.eu/safety/consumers/consumers_safety_gate/statisticsAndAnualReports/2023/Safety_Gate_2023_report_EN.pdf) | ![img](https://rodders.me/safetygate/img/inspiration-geoplot.png)  | ![img](https://rodders.me/safetygate/img/submitting-country-geo-plot.png)

## About the EU Safety Gate Rapid Alert System

The [Safety Gate rapid alert system](https://ec.europa.eu/safety-gate/#/screen/home) plays an important role
enabling swift and effective action to be taken across the single European market when a dangerous product is found.

Exchange of information on dangerous non-food products kicked
off informally in 2001. It became compulsory in 2002 under the
General Product Safety Directive which set up the rapid alert system
for dangerous non-food products. In December 2024, the General
Product Safety Regulation will replace the Directive and the rapid
alert system will officially be renamed Safety Gate.

EU Safety Gate is The data in this report and is based on information from national
authorities on measures taken against dangerous non-food products.

Data has been sourced from [Safety Gate Website](https://ec.europa.eu/safety-gate/).

This information includes various risks that they have identified,
mainly to consumers’ health and safety but also to the environment
or risks in relation to professional products (i.e. products not
normally available to consumers). The report also takes into account
data related to information exchanged among member countries
that is not published on the Safety Gate Website.
The report presents statistics on the rapid alert system. It does not
purport to give a comprehensive picture of all dangerous products
on the single market, nor does it give an overview of all market
surveillance efforts undertaken by the EU/EEA national authorities.
Due to the dynamic nature of the system, the data may vary
depending on the time of extraction.



## Creative Commons License

The reuse policy of European Commission documents is implemented by the Commission Decision 2011/833/EU
of 12 December 2011 on the reuse of Commission documents (OJ L 330, 14.12.2011, p. 39). Except otherwise noted,
the reuse of this document is authorised under a [Creative Commons Attribution 4.0 International (CC-BY 4.0)
licence](https://creativecommons.org/licenses/by/4.0/).

This means that reuse is allowed provided appropriate credit is given and any changes are indicated.

Since this entire analysis is based on data from the EU, and I have used visualisations from the official annual summary as inspiration for the programmatically created version of these visualisations,
the creative commons license applies this work hosted on [rodders.me](https://rodders.me), this means that reuse of this analysis and it's visualisations is allowed provided appropriate credit is given and any changes are indicated.
