---
title: SMMT - UK Electric Vehicle Registrations (and other fuels)
description: "Google Data Analytics Capstone Project"
date: 2023-12-02T09:15:27.561Z
preview: /img/tableau-dashboard-fp.png
draft: false
tags: ["Google Data Analytics", "Python", "R", "Pandas", "Numpy", "Matplotlib"]
categories: []
type: default
slug: "UK Vehicle Registration Analysis"
keywords:
    - European Safety Gate for Non Food Products
---

![Resize](/img/tableau-dashboard-fp.png?height=480)

## Project Goal

To obtain additional monthly car registration data to add to my DVLA Registration Dashboard in Tableau.

## Monthly Vehicle Registration by Fuel Type and Keepership

This is additional data being added to the DVLA Registered Vehicles dashboard I maintain on Tableau. The DVLA data is issued annually and only gives annual totals for registered vehicles. SMMT publish data monthly in an image format and this project, grabs that data from the images and processes it into a CSV file suitable for import into Tableau.

[![img](/img/tableau-dashboard-fp.png)](https://public.tableau.com/app/profile/rod.slater/viz/VehiclesRegisteredforUKdf_VEH0220/FrontPage)

## Intent

Extract data from SMMT Public Vehicle Registration Data published monthly in png and jpg image format, of varying image sizes, and then parse this data into a database to enable querying through a dashboard.

## Important Note

### The SMMT (Society of Motor Manufacturers and Traders) make their data available to the public through their news publication service. The data published by the SMMT is copyright and for this project I have applied a random percentage to the data to ensure the SMMT copyright is maintained.

If you wish to source data from the SMMT, please contact them directly: [https://www.smmt.co.uk/vehicle-data/production-reports/](https://www.smmt.co.uk/vehicle-data/production-reports/)

## Project Documentation

- [Project Details](/smmt_project/docs/SMMT-Project-stage-breakdown.html)

- [Tableau Dashboard](https://public.tableau.com/views/VehiclesRegisteredforUKdf_VEH0220/FrontPage?:language=en-GB&:display_count=n&:origin=viz_share_link)

### Notebooks - Fuel / Customer new format

- [SMMT-1a-OCR-fueltype-newformat.ipynb](/smmt_project/docs/SMMT-1a-OCR-fueltype-newformat.html)

- [SMMT-1b-CLEANSE-fueltype-newformat.ipynb](/smmt_project/docs/SMMT-1b-CLEANSE-fueltype-newformat.html)

- [SMMT-1c-SAVE-fueltype-newformat.ipynb](/smmt_project/docs/SMMT-1c-SAVE-fueltype-newformat.html)

### Notebooks - Fuel Old Format

- [SMMT-2a-OCR-fueltype-oldformat.ipynb](/smmt_project/docs/SMMT-2a-OCR-fueltype-oldformat.html)

- [SMMT-2b-CLEANSE-fueltype-oldformat.ipynb](/smmt_project/docs/SMMT-2b-CLEANSE-fueltype-oldformat.html)

- [SMMT-2c-SAVE-fueltype-oldformat.ipynb](/smmt_project/docs/SMMT-2c-SAVE-fueltype-oldformat.html)

### Notebooks - Customer Old Format

- [SMMT-3a-OCR-custtype-newformat.ipynb](/smmt_project/docs/SMMT-3a-OCR-custtype-newformat.html)

- [SMMT-3b-CLEANSE-custtype-newformat.ipynb](/smmt_project/docs/SMMT-3b-CLEANSE-custtype-newformat.html)

- [SMMT-3c-SAVE-custtype-newformat.ipynb](/smmt_project/docs/SMMT-3c-SAVE-custtype-newformat.html)
