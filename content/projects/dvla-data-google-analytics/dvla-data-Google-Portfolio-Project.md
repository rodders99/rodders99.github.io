---
title: DVLA Data - Google Data Analytics Portfolio Project
description: Details of my portfolio project for the Google Data Analytics Certification
slug: google-data-analytics-portfolio-project-dvla-data
date: "2023-08-14"
lastmod: "2023-08-14"
banner: "img/dvla_logo-white.png"
draft: false
tags:
  - data analytics
  - Excel
  - Python
  - R Language
  - Tableau
  - SQL
menu: none
categories: []
Author: Rodders

keywords:
  - analytics
  - certified
  - data
  - google
  - Google Data Analytics
  - R Language
  - Python Language
  - SQL
featuredImage: img/dvla_logo-white.png
---

![Alt text](img/dvla_logo-white.png)

## Course Portfolio Project

For the completion stage of the Google Data Analytics Specialisation course we were asked to complete a data analysis project from start to finish.  This allowed me to apply much of the lessons learned during the course to something I had some passion about: sustainable energy and transportation. Specifically looking at the adoption of Electric Vehicles in the UK, which in turn led me on to the broader issues of media messaging around this topic, which has become a separate topic, the bot is running as you read this.

The finale of this project was to produce a Kaggle dataset and a Tableau dashboard, if you want to skip to the end, here's the links to the project outcomes:

## What is this Portfolio Project?

The UK Government (gov.uk) publish lots of datasets in the rather unhelpful wide data format, I looked at the data for fuel types and body types of registered vehicles on the road along with annual registrations of new vehicles. From this I developed a dashboard on Tableau to make this 47Mb data file into something more accessible. The steps I took to get from a pile of government data into a nice and tidy consistent dataset are detailed below, but if you want to skip tot he results, these are listed next.

### Tableau Dashboard

[link](https://public.tableau.com/views/VehiclesRegisteredforUKdf_VEH0220/FrontPage?:language=en-GB&:display_count=n&:origin=viz_share_link)
[![img](/img/tableau-df_veh0220.png)](https://public.tableau.com/views/VehiclesRegisteredforUKdf_VEH0220/FrontPage?:language=en-GB&:display_count=n&:origin=viz_share_link)

### Kaggle Dataset, an exercise in R language for data manipulation

My R project detailed in the kaggle link takes data from [https://www.gov.uk/government/statistical-data-sets/vehicle-licensing-statistics-data-files](https://www.gov.uk/government/statistical-data-sets/vehicle-licensing-statistics-data-files) and carries out cleaning, transformation, EDA, aggregation and merging to produce a long data format csv more suited to machine analysis and dashboarding. 

This is then uploaded to my local MySql server and further visualisation carried out with Tableau.

[Kaggle https://www.kaggle.com/datasets/rodslater/df-veh0220-2022](https://www.kaggle.com/datasets/rodslater/df-veh0220-2022)
