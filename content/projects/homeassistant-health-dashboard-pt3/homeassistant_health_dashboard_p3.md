+++
title = " Pt 3. Visualising the data for Food and Migraines"
description = "Using Home Assistant's powerful dashboard, scripting and automations to track health, food and symptoms in order to cure my migraines - Part 3 visualising data"
slug = "How I Used Home Assistant to Track Symptoms and Cure Daily Migraines  - Part 3 Visualising Data"
date = 2025-07-07T09:15:27.561Z
draft = false
tags = ["Home Assistant", "Home Assistant Scripts","Home Assistant Dashboard","Home Assistant YAML","Home Assistant Helpers", "Food Diary","Health Tracking", "Biohacking", "YAML", 
"Microsoft Excel", "Python", "Pandas", "plotly", "Machine Learning"]
categories = ["Home Assistant"]
authors = ["Rodders"]
featuredImage = "/img/homeassistant_logo.jpg"

+++

![Home Assistant Logo](/img/homeassistant_logo.jpg)


> If you regularly experience any of the symptoms I list in this article, it is entirely possible that like me your migraines may be triggered by something in your diet! This is not medical advice, I am not a Medical Professional, do not take medical advice from internet strangers. If you are suffering from similar symptoms, consider approaching a medical professional before biohacking your life. This was my journey, I hope it brings relief to others.


- [Introduction](#introduction)
- [Collecting the Data](#collecting-the-data)
- [The Data Structure](#the-data-structure)
- [The initial collected data](#the-initial-collected-data)
- [Adding Ingredients to Foods in the dataset](#adding-ingredients-to-foods-in-the-dataset)
- [The Visualisation](#the-visualisation)


## Introduction

Practically every single day, for the last 15 years, I’ve woken up with a migraine and gone to bed with one. It started 15 years ago at a friend’s wedding. The evening before we’re sharing a beer (Budweiser) chatting about the upcoming wedding, we go to bed, then at 3am in the morning I’m woken by the worst headache I’ve ever experienced. Cue 15 years of near daily migraines, not as devastating as the first migraine, but debilitating none the less.

Then I started to track my diet and symptoms with the help of Home Assistant. The goal? Identifying if something in my diet was the trigger for my migraines (And other symptoms).

<h3>Read more about my journey here</h3>

- [Part 1 - No More Migraines, what I stopped eating](/projects/no-more-migraines-what-i-stopped-eating/how-i-used-home-assistant-to-track-symptoms-and-cure-daily-migraines-part-1-the-beginning/)
- [Part 2 - Using Home Assistant to Track Symptoms & Cure Migraines](/projects/homeassistant-health-dashboard-pt2/how-i-used-home-assistant-to-track-symptoms-and-cure-daily-migraines-part-2-the-home-assistant-dashboard/)
- Part 3 - Visualising the data for Food and Migraines
- [A Visualisation of My Migraines and Food / Ingredients Consumed](http://rodders.me/health_data_tracker_visualisation/vertical_food_timeline.html)

## Collecting the Data

Note that Home Assistant is not necessary to collect data, a paper and pen works just as well. While paper and pen didn't work for me, I wanted machine readable data, Paper and pen may work for you. Don't get hung up on the data collection methodology, there are apps out there, use them or don't. 

## The Data Structure

Using Python, Pandas and Plotly, I developed a lookup to add suspect ingredients to the initial dataset, along with a visualisation to visualise the relationship between my diet and migraines.

## The initial collected data

| Date | Time | Category | Item | Data
| :--- | :--- | :--- | :--- | :--- 
2025-01-16 | 13:36 | FOOD | Chip Shop Burger Chips | 60
2025-01-16 | 13:36 | HEADACHE | RECORD | 1
2025-01-16 | 17:28 | WEIGHT | RECORD | 75.4Kg
2025-01-16 | 19:37 | FOOD | Rice | 48
2025-01-16 | 19:37 | FOOD | Roast Pork | 0
2025-01-16 | 19:37 | FOOD | Vegetables | 0
2025-01-17 | 01:30 | FOOD | Apple Juice | 10
2025-01-17 | 04:20 | FOOD | Apple Juice | 10
2025-01-17 | 08:35 | FOOD | Lactose Free Milk | 0
2025-01-17 | 08:35 | FOOD | Sugar | 4
2025-01-17 | 08:35 | FOOD | Weetabix | 13
2025-01-17 | 08:35 | FOOD | Weetabix | 13
2025-01-17 | 12:35 | FOOD | Chipolata Sausages | 0

## Adding Ingredients to Foods in the dataset
During my data collection and the initial discovery phase, I started to draw a conclusion that it wasn't a food item, i.e. bread or cheese, it was a component of that food item, an ingredient. To build a more comprehensive data set, I needed to add the ingredients to my data so I setup a small lookup table and kept note of suspect ingredients that I could later add to the initial collected data.

Item | Ingredients | Ingredients_list
| :--- | :--- | :--- 
Butter | Casein/Whey/Lactose | Butter - Casein/Whey/Lactose
Cheese | Casein/Whey/Lactose | Cheese - Casein/Whey/Lactose
Choccie Coffee | Casein/Whey/Lactose | Choccie Coffee - Casein/Whey/Lactose
Diabetic Chocolate | Casein/Whey/Lactose | Diabetic Chocolate - Casein/Whey/Lactose
Lactose Free Cheese | Casein/Whey/Lactose | Lactose Free Cheese - Casein/Whey/Lactose
Parmaggio Regianna Cheese | Casein/Whey/Lactose | Parmaggio Regianna Cheese - Casein/Whey/Lactose
Celery | Celery | Celery - Allergenic
Black Bean Sauce | Wheat/Gluten | Black Bean Sauce - Wheat/Gluten
Chicken Satay | Wheat/Gluten | Chicken Satay - Wheat/Gluten
Chipolata Sausages | Wheat/Gluten | Chipolata Sausages - Wheat/Gluten
Cofast Potato Spicy Snack | Wheat/Gluten | Cofast Potato Spicy Snack - Wheat/Gluten
Cornish Pasty | Wheat/Gluten | Cornish Pasty - Wheat/Gluten
Frozen Burgers | Wheat/Gluten | Frozen Burgers - Wheat/Gluten
Chip Shop Burger Chips | Wheat/Gluten’, ‘Casein/Whey/Lactose | Chip Shop Burger Chips - Wheat/Gluten,Chip Shop Burger Chips – Casein/Whey/Lactose

## The Visualisation

Using Python, Pandas and Plotly  I merged the Food / Symptom Diary and Ingredients datasets to produce this interactive visualisation:

[![snapshot of the Food / Ingredient / Symptom Visualisation](http://rodders.me/health_data_tracker_visualisation/example_visualisation.png)](http://rodders.me/health_data_tracker_visualisation/vertical_food_timeline.html)

http://rodders.me/health_data_tracker_visualisation/vertical_food_timeline.html

Click on the image or link to open the visualisation, hover over the dots for details of foods consumed (Blue) and Suspect ingredients of those foods (Green), click drag to select an area to zoom into, double click to zoom out. Additional controls are in the top right of the plot.


<h3>Read more about my journey here</h3>

- [Part 1 - No More Migraines, what I stopped eating](/projects/no-more-migraines-what-i-stopped-eating/how-i-used-home-assistant-to-track-symptoms-and-cure-daily-migraines-part-1-the-beginning/)
- [Part 2 - Using Home Assistant to Track Symptoms & Cure Migraines](/projects/homeassistant-health-dashboard-pt2/how-i-used-home-assistant-to-track-symptoms-and-cure-daily-migraines-part-2-the-home-assistant-dashboard/)
- Part 3 - Visualising the data for Food and Migraines
- [A Visualisation of My Migraines and Food / Ingredients Consumed](http://rodders.me/health_data_tracker_visualisation/vertical_food_timeline.html)