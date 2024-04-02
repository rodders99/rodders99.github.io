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

I first encountered the EU Safetygate in my previous role.

Since 2003, the Safety Gate has enabled a quick exchange of information among EU/EEA Member States and the European Commission about
dangerous non-food products posing a risk to the health and safety of consumers. Appropriate follow-up has to be taken by the national
authorities so that the notified dangerous products are removed from the market.

To facilitate the transmission of information to the public, the Commission also manages the [Safety Gate public website](https://ec.europa.eu/safety-gate/#/screen/home).

The alerts are translated into all EU languages, in addition to Icelandic, Norwegian, Arabic, and Ukrainian. Businesses also have at their disposal the Business Safety
Gateway to inform national authorities quickly and efficiently about safety concerns regarding a product that they have put on the market.

This tool will become compulsory under the General Product Safety Regulation.

It is a horrifying look into the world of dangerous and non compliant products that are sold across the world.

### Why this analysis?

Country level analysis is not available for the EU Safety Gate Data (I couldn't find any, it may exist), while there is an annual summary report, it's a bit scant on details!

## Skip to the report

### Analysts Notes

- [About the EU Safetygate data](/projects//safetygate/eu-safetygate-about.html)
- [EU Safetygate Meta Data Overview](/safetygate/docs/eu-safetygate-report-2023-meta-data.html)
- [EU Safetygate Feature Engineering](/safetygate/docs/eu-safetygate-report-2023-feature-engineering.html)

### Safety Gate Summary Analysis

- [Safety Gate Detailed Summary](/safetygate/docs/eu-safetygate-report-2023-all.html)

### Safety Gate Compare Countries

- [Compare Countries](eu-safetygate-report-2023-comparison.html?country1=france&country2=germany)

### Country of Origin Report

| | | | |
| :-: |  :-: | :-: | :-: |
|[![China Flag](https://rodders.me/img/icons/flag-china.webp)](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=china)|[![France flag](https://rodders.me/img/icons/flag-france.webp)](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=france)|[![India flag](https://rodders.me/img/icons/flag-india.webp)](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=india)|[![Italy flag](https://rodders.me/img/icons/flag-italy.webp)](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=italy)
|[China](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=china)|[France](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=france)|[India](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=india)| [Italy](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=italy)
|[![Japan Flag](https://rodders.me/img/icons/flag-japan.webp)](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=japan)|[![Poland flag](https://rodders.me/img/icons/flag-poland.webp)](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=poland)|[![Spain flag](https://rodders.me/img/icons/flag-spain.webp)](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=spain)|[![Sweden flag](https://rodders.me/img/icons/flag-sweden.webp)](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=sweden)|
|[Japan](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=japan)|[Poland](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=poland)|[Spain](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=spain)|[Sweden](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=sweden)
|[![Taiwan Flag](https://rodders.me/img/icons/flag-taiwan.webp)](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=taiwan)|[![Turkey flag](https://rodders.me/img/icons/flag-turkey.webp)](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=türkiye)|[![UK flag](https://rodders.me/img/icons/flag-uk.webp)](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=UK)|[![USA flag](https://rodders.me/img/icons/flag-usa.webp)](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=usa)|
|[Taiwan](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=taiwan)|[Türkiye](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=türkiye)|[UK](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=uk)|[USA](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=usa)
|[Unknown](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=Unknown)|[Other (not top15)](/safetygate/docs/eu-safetygate-report-2023-country.html?country1=other)||

### My Analysis

This analysis report aims to address the lack of summary and country level data with a comprehensive set of visualisations of the key features of the Safety Gate Data by country and country comparison.

Extensive feature engineering was carried out in order to produce meaningful and clear visualisations.

This was a great opportunity for me to flex my DA & visualisations skills with a secondary goal to recreate some of the visualisations from the 'official' report using Python, Pandas and Matplotlib.

A good example of my programmatic recreations are the country level top 3 visualisations showing the top 3 product categories and top 3 risks, in the official report and the geoplot, showing 
2022 vs 2023 how many alerts were issued by each country.

Inspiration :

| Source  | Official Version | Python version
| :- |:- |:-
|[source](https://webgate.ec.europa.eu/safety/consumers/consumers_safety_gate/statisticsAndAnualReports/2023/Safety_Gate_2023_Factsheet_EN.pdf) |![img](https://rodders.me/img/inspiration-top3s.png) | ![img](https://rodders.me/img/italy-top3s.png)
| [source](https://webgate.ec.europa.eu/safety/consumers/consumers_safety_gate/statisticsAndAnualReports/2023/Safety_Gate_2023_report_EN.pdf) | ![img](https://rodders.me/img/inspiration-purpleplot.png)  | ![img](https://rodders.me/img/number-of-alerts-validated-on-safetygate-from-2003-to-2023.png)
| [source](https://webgate.ec.europa.eu/safety/consumers/consumers_safety_gate/statisticsAndAnualReports/2023/Safety_Gate_2023_report_EN.pdf) | ![img](https://rodders.me/img/inspiration-geoplot.png)  | ![img](https://rodders.me/img/submitting-country-geo-plot.png)

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

## EU Safety Gate Summary Report

[EU SafetyGate Analysis Report](/safetygate/docs/eu-safetygate-report-2023-all.html)
Top level covering total data and some country specific visualisations such as total alerts issued to country of product origin and top3 risk category and product categories for each country.

## EU Safety Gate Summary Country Report Card

[EU SafetyGate COUNTRY  Analysis Report](/safetygate/docs/eu-safetygate-report-2023-country.html)

A Country level report with detailed visualisations for all key features in the data.

## EU Safety Gate Compare Safetygate visualisations

[EU SafetyGate COUNTRY  Analysis Report](/safetygate/docs/eu-safetygate-report-2023-comparison.html)

Similar to the country level report, but allows two countries to be compared.

## Creative Commons License

The reuse policy of European Commission documents is implemented by the Commission Decision 2011/833/EU
of 12 December 2011 on the reuse of Commission documents (OJ L 330, 14.12.2011, p. 39). Except otherwise noted,
the reuse of this document is authorised under a [Creative Commons Attribution 4.0 International (CC-BY 4.0)
licence](https://creativecommons.org/licenses/by/4.0/).

This means that reuse is allowed provided appropriate credit is given and any changes are indicated.

Since this entire analysis is based on data from the EU, and I have used visualisations from the official annual summary as inspiration for the programmatically created version of these visualisations,
the creative commons license applies this work hosted on [rodders99.github.io](rodders99.github.io), this means that reuse of this analysis and it's visualisations is allowed provided appropriate credit is given and any changes are indicated.
