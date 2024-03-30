---
title: UK - Electric Vehicle Registrations (and other fuels)
description: Google Data Analytics Capstone Project
keywords:
    - Google
    - Data Analytics
    - Python
    - pandas
    - Machine Learning
slug: Salifort Motors
draft: false
banner: img/tableau-dashboard-fp.png
---

![Resize](img/tableau-dashboard-fp.png?height=480)

# Project Goal

To obtain additional monthly car registration data to add to my DVLA Registration Dashboard in Tableau.

# Monthly Vehicle Registration by Fuel Type and Keepership

This is additional data being added to the DVLA Registered Vehicles dashboard I maintain on Tableau. The DVLA data is issued annually and only gives annual totals for registered vehicles. SMMT publish data monthly in an image format and this project, grabs that data from the images and processes it into a CSV file suitable for import into Tableau.

[https://public.tableau.com/authoring/VehiclesRegisteredforUKdf_VEH0220/F](https://public.tableau.com/authoring/VehiclesRegisteredforUKdf_VEH0220/Frontpage)

<A href ="https://public.tableau.com/app/profile/rod.slater/viz/VehiclesRegisteredforUKdf_VEH0220/FrontPage"><img alt="Tableau Dashboard frontpage" src="../img/tableau-dashboard-fp.png"></a>

## Intent

Extract data from SMMT Public Vehicle Registration Data published monthly in png and jpg image format, of varying image sizes, and then parse this data into a database to enable querying through a dashboard.

## Important Note

The SMMT (Society of Motor Manufacturers and Traders) make their data available to the public through their news publication service. The data published by the SMMT is copyright and for this project I have applied a random percentage to the data to ensure the SMMT copyright is maintained.

If you wish to source data from the SMMT, please contact them directly: <a href="https://www.smmt.co.uk/vehicle-data/production-reports/">https://www.smmt.co.uk/vehicle-data/production-reports/</a>

## Project Documentation

- [Project Details]({{< notebook SMMT-Project-stage-breakdown.html >}})

- [Tableau Dashboard](https://public.tableau.com/views/VehiclesRegisteredforUKdf_VEH0220/FrontPage?:language=en-GB&:display_count=n&:origin=viz_share_link)

### Notebooks - Fuel / Customer new format

- [SMMT-1a-OCR-fueltype-newformat.ipynb]({{< notebook SMMT-1a-OCR-fueltype-newformat.html >}})

- [SMMT-1b-CLEANSE-fueltype-newformat.ipynb]({{< notebook SMMT-1b-CLEANSE-fueltype-newformat.html >}})

- [SMMT-1c-SAVE-fueltype-newformat.ipynb]({{< notebook SMMT-1c-SAVE-fueltype-newformat.html >}})

### Notebooks - Fuel Old Format

- [SMMT-2a-OCR-fueltype-oldformat.ipynb]({{< notebook SMMT-2a-OCR-fueltype-oldformat.html >}})

- [SMMT-2b-CLEANSE-fueltype-oldformat.ipynb]({{< notebook SMMT-2b-CLEANSE-fueltype-oldformat.html >}})

- [SMMT-2c-SAVE-fueltype-oldformat.ipynb]({{< notebook SMMT-2c-SAVE-fueltype-oldformat.html >}})

### Notebooks - Customer Old Format

- [SMMT-3a-OCR-custtype-newformat.ipynb]({{< notebook SMMT-3a-OCR-custtype-newformat.html >}})

- [SMMT-3b-CLEANSE-custtype-newformat.ipynb]({{< notebook SMMT-3b-CLEANSE-custtype-newformat.html >}})

- [SMMT-3c-SAVE-custtype-newformat.ipynb]({{< notebook SMMT-3c-SAVE-custtype-newformat.html >}})
