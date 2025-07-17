+++
title = "Pt 1. No More Migraines: What I Stopped Eating"
description = "Using Home Assistant's powerful dashboard, scripting and automations to track health, food and symptoms in order to cure my migraines"
slug = "How I Used Home Assistant to Track Symptoms and Cure Daily Migraines"
date = 2025-06-26T09:15:27.561Z
draft = false
tags = ["Home Assistant", "Home Assistant Scripts","Home Assistant Dashboard","Home Assistant YAML","Home Assistant Helpers", "Food Diary","Health Tracking", "Biohacking", "YAML", "Microsoft Excel", "Python", "Pandas","Machine Learning"]
categories = ["Home Assistant"]
authors = ["Rodders"]
featuredImage = "/img/homeassistant_logo.jpg"

+++

![Home Assistant Logo](https://rodders.me/projects/homeassistant-health-dashboard/homeassistant_logo.jpg)

> If you regularly experience any of the symptoms I list later in the article, you might want to have a close look at your diet! This is not medical advice, I am not a Medical Professional, do not take medical advice from internet strangers. If you are suffering from similar symptoms, consider approaching a medical professional before biohacking your life. This was my journey, I hope it brings relief to others.

##### Table of Contents

- [Introduction](#introduction)
  - [Medical Dead End - ChatGPT to the rescue!](#medical-dead-end---chatgpt-to-the-rescue)
  - [Why paper diaries failed](#why-paper-diaries-failed)
  - [Biohacking My Diet](#biohacking-my-diet)
- [Building a data driven health tracker](#building-a-data-driven-health-tracker)
  - [Starting the Analysis of the collected data](#starting-the-analysis-of-the-collected-data)
  - [Understanding The Pattern of my Symptoms](#understanding-the-pattern-of-my-symptoms)
  - [My Symptom Checklist](#my-symptom-checklist)
  - [Wrong way!](#wrong-way)
  - [The 'Aha!!' Moment: Ingredients, not Foods](#the-aha-moment-ingredients-not-foods)
- [Discovering My Triggers](#discovering-my-triggers)
  - [Symptom Similarities in trigger foods](#symptom-similarities-in-trigger-foods)
  - [Elimination Salvation](#elimination-salvation)
  - [Dairy](#dairy)
  - [Gluten and Wheat](#gluten-and-wheat)
  - [Celery](#celery)
- [Home Assistant Cured my Migraines](#home-assistant-cured-my-migraines)
- [The Reality of Living With Food Intolerances](#the-reality-of-living-with-food-intolerances)
  - [Wheat derivatives are everywhere:](#wheat-derivatives-are-everywhere)
- [CURED!!](#cured)
  - [Let's call it what it is, food allergies](#lets-call-it-what-it-is-food-allergies)
- [The final outcome](#the-final-outcome)
  - [Eating out with Food Allergies](#eating-out-with-food-allergies)
  - [This is a tough one, food allergies are rarely taken seriously.](#this-is-a-tough-one-food-allergies-are-rarely-taken-seriously)
  - ["Prepared in a facility that also handles ```allergen ```" does not mean it is allergen free.](#prepared-in-a-facility-that-also-handles-allergen--does-not-mean-it-is-allergen-free)
  - [Get Tested?](#get-tested)
- [Conclusion](#conclusion)
- [Stranger Danger](#stranger-danger)
  


## Introduction

I used to suffer from migraines, amongst multiple less severe but nonetheless annoying symptoms.

Practically every single day, for the last 15 years, I've woken up with a migraine and gone to bed with one. It started 15 years ago at a friend's wedding. The evening before we're sharing a beer (Budweiser) chatting about the upcoming wedding, we go to bed, then at 3am in the morning I'm woken by the worst headache I've ever experienced. That headache lasted a week and was devastating, I cannot remember a single detail from that week, not the wedding, how I got from Devon to Hampshire after the wedding, none of the calls from work asking where I was, it's a blank.

For 15 years I suffered these migraines, amongst multiple less severe but nonetheless annoying symptoms and more recently the severity of the other symptoms was getting noticeably worse. I was getting desperate, the impact on my sleep, my entire life was huge, I withdrew, I suffered in silence and had reached my breaking point. 

Read more about my journey here

- Part 1 - No More Migraines, what I stopped eating
- [Part 2 - Using Home Assistant to Track Symptoms & Cure Migraines](https://rodders.me/projects/homeassistant-health-dashboard-pt2/how-i-used-home-assistant-to-track-symptoms-and-cure-daily-migraines/)
- [Part 3 - Visualising the data for Food and Migraines](https://rodders.me/projects/homeassistant-health-dashboard-pt3/how-i-used-home-assistant-to-track-symptoms-and-cure-daily-migraines-part-3-visualising-data/)
- [A Visualisation of My Migraines and Food / Ingredients Consumed](http://rodders.me/health_data_tracker_visualisation/vertical_food_timeline.html)

### Medical Dead End - ChatGPT to the rescue!

Many visits to doctors followed this; MRI scans, blood tests, medications (Sumatriptan, Naproxen, Diclofenac, Fun painkillers that had no effect apart from making me a bit high for an hour or two) and of course many migraines later and I finally asked Chatgpt for help. Amongst the wide range of incorrect suggestions offered by ChatGPT, was the golden goose of a suggestion:

<h3><p align="center">"Why don't you keep a diary of symptoms and see if anything stands out?".</p></h3>

<h3><p align="center">Good point, why don't I?<p></h3>

### Why paper diaries failed

I have to admit this was not a new suggestion, I'd attempted this before, but me and paper diaries do not get along: can't find a pen then forget to record something, left the diary at home when out then forget to record something, headache too bad to concentrate and write down what was eaten then forget to update the diary later etc. leading to many many missed entries and an incomplete dataset.

This led me to use my Home Assistant setup to record the information I needed in order to confirm, or not, that my diet was a factor in my migraine journey.

A secondary reason for using Home Assistant was that I needed a clean and consistent machine readable data set. 

You see, it was my intention to flex my Data Analysis skills with python, pandas, visualisations and machine learning models to see if a predictive model or some way of visualising the data could give me some answers, and an incomplete dataset is not going to cut it if I want that. 

I built a [Home Assistant dashboard](https://rodders.me/projects/homeassistant-health-dashboard-pt2/how-i-used-home-assistant-to-track-symptoms-and-cure-daily-migraines/) to make recording food quick and simple, give me a consistent data set and all it took was a couple of click/taps per meal or miserable start to the day.

The third reason is quite simple, I'm a hardcore nerd. So I developed a dashboard for Home Assistant to simplify collecting data allowing me to answer the question "Is my food making me ill?".

The Home Assistant dashboard allowed me to collect consistent, clean data in order to further analyse it using a Machine Learning Model or Visualisation.

### Biohacking My Diet

However, what I found was that having access to a very detailed food and symptom tracker actually made it pretty simple to see the problem foods directly in the data without going to the lengths of building a machine learning model or crafting a creative visualisation. 

I did end up developing the visualisation that demonstrates the improvement in migraine frequency.

Update - Visualisation [http://rodders.me/health_data_tracker_visualisation/vertical_food_timeline.html](http://rodders.me/health_data_tracker_visualisation/vertical_food_timeline.html)

## Building a data driven health tracker

Over the past seven months that I've been using Home Assistant to log the data:

- Date
- Time
- Categories (Food, Symptom, Migraine etc.)
- Additional Information (Detailed food info etc.)

I've collected over 12,000 rows of data which is more than enough to use as a dataset for a predictive model and expect some reasonable results. What also helps is now knowing my what my triggers are, I'll be able to compare it to the output from the ML Model. About 80% of this data was readings from a [CGM](https://en.wikipedia.org/wiki/Continuous_glucose_monitor), which were later discounted as irrelevant to my migraines, this was one of ChatGPT's erroneous suggestions.


### Starting the Analysis of the collected data

I started reviewing the collected data daily, nothing complex, just looking back at what I ate in previous days along with key symptoms, and before I even started developing the planned machine learning model and visualisations, obvious correlations for potentially problematic foods started to become more visible. 


### Understanding The Pattern of my Symptoms

When I first approached this I was expecting to find a binary relationship. i.e `eat a = symptom y`, if this was the case, I am sure I would have diagnosed this a long time ago. At first, as I collected and reviewed more data, the connections between food and symptoms were showing a non binary relationship, i.e. not `eat a = symptom y`, rather `eat a,b,c over a series of days = symptoms y,z,w,x that last for up to a week`.

So, eating `a,b,c = y symptom` doesn't begin to cover the duration and breadth of the symptoms. I ultimately called this  "the 'cascade' effect of my allergic response". I could eat a food with an ingredient of wheat/gluten some days and not appear to have any symptoms (more likely me discounting the initial stages of symptoms), but if I ate another trigger food the following  day I start to feel the beginnings of a migraine within a few hours. 

It took some months to figure out that my allergic response was cumulative. Eat a bit of celery one day, no immediate symptoms, eat a frozen burger (Wheat/Gluten) the following day I might be a bit snuffly with a barely registering headache, eat another trigger the following day and full blown symptoms started. Then not eating a trigger once the migraine started, I'd still have symptoms, because symptoms last up to a week.

### My Symptom Checklist

I would suffer all or some of these symptoms, alongside the migraine, every single time I triggered a migraine, the symptoms lasting anything up to a week.

Symptom | Notes
| :--- | :---
Migraines | These would last 2-5 days
Light headed | At times
Forgetful | I can't recall things: names, places, what I ate the previous day
Joint / Muscle Weakness and Pain | Easier to pull muscle, knee pain when walking upstairs
Fatigue | Waking feeling tired, needing afternoon naps, a walking talking zombie at the best of times
Irritability | Probably directly related to feeling tired and in pain
Inability to get to sleep | Brain running 100 miles an hour
Waking in the night | Hot, sweaty, uncomfortable, unable to return to sleep
Frequent Peeing | Waking 2-3 times during the night. Now I'm migraine free, I sleep a solid 8 hours without waking
Brain Fog | Difficulty Concentrating |
Constipation | In the early days (15 years years ago) this was a major symptom
Bloating | My entire body swells up a bit. I didn't realise this until much later after 2 weeks symptom free.
Sneezing, Runny Nose, Coughing | Really bad episodes would have me sounding like an asthmatic ex coal miner.
Dry Itchy Skin | One insanely itchy part of my body: Left foot, just above the heel, so bad it would prevent me sleeping. This takes two weeks to die down after consuming an allergen.
Pimples | Little red spots would appear across my body with a little white head that would eventually dry out and become almost like a psoriasis spot.
Anxiety / Depression | Driven by a lack of general motivation/energy to get anything done.

Later in the entire process, during some research where I started cross referencing my symptoms with known symptoms for food allergies, the connection became obvious.


### Wrong way!

This led to me excluding suspect foods with some questionable results. For quite a while I had not realised that Celery was a trigger. Dropping Gluten/Wheat from my diet showed an immediate and significant improvement in frequency and intensity of my migraines a few days later. But I was still waking some mornings with a less intense migraine.  This  led to me mis-categorising many foods before I started connecting celery to my symptoms. Once Celery was on my radar, progress became swift: connecting the dots between ingredients and my cumulative allergic/intolerance response and I began the process to begin eliminating and testing those suspect ingredients. 

The first step was eliminating any suspect foods for at least a week until I became symptom free. The first time I finally woke one morning not in pain, I cried happy / relief tears, I was onto something and I could see a potential future without a daily migraine.

After a week of no symptoms I'd 'test' a food, adding it to my diet for 3-4 days and recording any migraines and symptoms.

### The 'Aha!!' Moment: Ingredients, not Foods

Over the following months I refined my understanding of what the hell was going on and adjusted my analysis from **foods** to **ingredients**. Where I had suspected Bread as a **food**, now became the **ingredients** wheat/gluten and any foods containing that ingredient were eliminated. I cook a lot of Asian food, many asian sauces are derived from wheat : Soy, Black Bean, Szechuan Chili Bean, Oyster Sauce. My lazy foods were frozen pork and beef burgers, guess what they contain ? Yeah Wheat. Spice mixes? Wheat, Gluten Free Hob Knob Biscuits? yeah, dairy. I am sure you get the picture, as these problematic ingredients were eliminated I started to see more days without a migraine than with a migraine. 

This led me to begin putting a visualisation together that could perhaps better demonstrate the relationship between ingredients and my symptoms.

## Discovering My Triggers 

### Symptom Similarities in trigger foods

With a little cross referencing, and the benefit of hindsight, there are similarities in symptoms between all of my main Allergic / Intolerant Foods and the obvious standout being Headache across all of them. What isn't discussed in any detail is the severity and duration of the headaches or migraines in my case. 

| **Symptom**                   | **Gluten** | **Wheat** | **Dairy** | **Celery** | **ME**
| ----------------------------- | :--------: | :-------: | :-------: | :--------: | :--------: |
| Headache                      |    **X**   |   **X**   |   **X**   |    **X**   |   **X**
| Bloating / Inflammation       |      X     |     X     |     X     |      X     |   **X**
| Diarrhoea                     |      X     |     X     |     X     |      X     |   **X**
| Constipation                  |      X     |     X     |     X     |            |   **X**
| Fatigue                       |      X     |     X     |     X     |      X     |   **X**
| Brain fog                     |      X     |     X     |     X     |            |   **X**
| Skin rash (eczema, urticaria) |      X     |     X     |     X     |      X     |   **X**
| Difficulty Sleeping           |      X     |     X     |     X     |            |   **X**
| Waking during the night       |      X     |     X     |     X     |            |   **X**
| Frequent Peeing               |      X     |     X     |     X     |            |   **X**
| Itching (mouth/skin)          |            |     X     |     X     |      X     |   **X**
| Sneezing / runny nose / Mucus |            |     X     |     X     |      X     |   **X**
| Joint pain                    |      X     |     X     |     X     |            |   **X**
| Depression/anxiety            |      X     |     X     |     X     |            |   **X**
| Abdominal pain/cramps         |      X     |     X     |     X     |      X     |
| Nausea                        |      X     |     X     |     X     |      X     |
| Anaphylaxis (severe allergy)  |            |     X     |     X     |      X     |
| Weight loss                   |      X     |           |           |            |
| Gas/flatulence                |      X     |     X     |     X     |      X     | 


### Elimination Salvation

Replacing traditional Bread, Pasta and Noodles with gluten free alternatives kept the migraines away which had the most immediate positive impact, but I was still getting symptoms, despite removing gluten from my diet which then led to me concluding I should eliminate any food products that have wheat.

Eliminating all wheat containing foods from my diet demonstrated clear correlation, 72 hours later, the migraine has diminished or gone entirely. 48 hours later and a host of secondary symptoms are in decline, after a week I felt normal for the first time in years. After a week symptom free, I also realised that my entire body swells up a little bit (Bloat) after eating wheat containing products; rings on fingers become tighter and harder to remove when consuming allergens, after a week without gluten, my rings are slipping off my fingers, I'll probably need some rings resizing.

### Dairy

The first food to standout in the dataset was Milk or more specifically dairy. I tested Milk, butter, cheese (sob) and Whey Protein. I eventually reached the conclusion that I cannot consume any amount of these ingredients without triggering symptoms. 

So that's one trigger : Dairy, I am [Lactose Intolerant](https://www.nhs.uk/conditions/lactose-intolerance/), [Casein Intolerant](https://www.healthcentre.org.uk/allergies/food-intolerance-casein-intolerance.html) and [Whey Protein Intolerant](https://intolerancelab.co.uk/whey-intolerance/). For some reason, I can drink lactose free milk even though it has casein in it, thankfully. Pure Whey Protein is a thermonuclear bomb of migraine and feeling like shit for me.

First identified during the dietary elimination phase when I ate some ice-cream, introduced a protein supplement to my diet and tried some yummy cheese. They all had a huge negative impact on my fatigue levels, migraines, sleep etc. I'd previously never realised how quickly symptoms started showing after consuming tiny amounts of these potential allergens. Eliminating them from my diet was an education in how bad certain foods are for me.

So dairy is off the diet for ever, it affects sleep, contributes to mild to bad migraines and a list of secondary symptoms too unpleasant and irritating to detail here. 

### Gluten and Wheat 

The next discovery had me swearing, a lot : Bread, Pasta, Snacks, crisps etc.

Yeah the stuff I eat practically every single day, this had the largest correlation to the worst migraines and drew the loudest and most incredulous 

> # "You have to be Fking kidding me" 

response from me.

> # "I'm Gluten/Wheat Intolerant/allergic ???" 

This is also known as NCGS [Non Coeliac Gluten Sensitivity](https://www.beyondceliac.org/celiac-disease/non-celiac-gluten-sensitivity/symptoms/) when I first read the list of symptoms for this it was surreal "Oh FFS" moment for me.

I found eliminating Wheat/Gluten difficult to stomach and just as hard to eat ... gluten free alternatives are .... different, texture is different, how it tastes is different, how it works when cooked is different. I got used to Gluten Free alternative baked items through a process of trial, error and toasting everything. I'll admit it was hard at first, but over time I've found alternatives that work, I got used to, or just eliminated the item from my diet. 

### Celery

After eliminating dairy and gluten/wheat .... things improved in a significant and measurable way, full blown migraines and secondary symptoms have practically disappeared, however, I was still waking some mornings with what I'll call a low grade headache. This started a secondary elimination cycle, this time identifying celery as a mild allergen.


## Home Assistant Cured my Migraines 

OK, perhaps a more accurate title would be "Home Assistant helped my on my journey to cure my migraines!". Today, and I'm not kidding, thanks to Home Assistant enabling me to capture supremely detailed and consistent information on my diet and symptoms, I cured my migraines by eliminating trigger ingredients from my diet.

But the journey isn't over.


## The Reality of Living With Food Intolerances

I also began to realise that consuming a tiny amount of wheat or dairy means I'm pretty much fkd for a week. What made it even worse was having to read the labels on any sort of processed food I bought and realising that everything seems to have wheat in it, or a derivative of wheat and the ingredients are printed in really small fonts!

Soy Sauce ? Wheat, Vinegar? Wheat, Frozen Burgers? Wheat, Seasoning Spice Mixes? Wheat, Sausages? Wheat, Crisps and Snacky stuff ? Wheat, Pasta? Wheat, Noodles? Wheat, Biscuits and Sweet Snacks? You got it, Wheat, even oven chips all seem to be coated with wheat now. 

### Wheat derivatives are everywhere:

| Primary Gluten-Containing Grains | These are the main sources and always contain gluten  |
| :--- | :--- 
Wheat | All forms: spelt, durum, einkorn, emmer, kamut, farro, Barley, Rye, Triticale (wheat-rye hybrid), Malt (usually from barley) 
Ingredients That Often Contain Gluten, be cautious of these unless labelled gluten-free | Wheat starch (unless labelled “gluten-free”), Hydrolysed wheat protein, Modified food starch (from wheat), Soy sauce (unless gluten-free/tamari), Malt vinegar, Malt extract or flavouring,Seitan (wheat gluten used in vegan meat substitutes) 

| Processed Foods at Risk|  |
| :--- | :--- 
These often contain hidden gluten | Gravy and stock cubes, Sauces and marinades, Ready meals, Processed deli meats including chorizo (Noooooo!), Breading and coating mixes, Beer, ales, lagers (unless gluten-free), some wines.
Watch for These Words on Labels, they may signal gluten | Binders, Thickeners, Stabilizers, Natural flavors (can contain malt or wheat), Rusk, semolina, couscous, or bulgur.



## CURED!!

After eliminating Dairy, Gluten/Wheat and Celery from my diet,  I now wake every morning migraine and symptom free after a solid 8 hours uninterrupted sleep. I still maintain the food and symptom tracker, it's a good habit to keep when my allergies also seem to be developing, I'm pretty sure I never used to be allergic to celery, so it's a new one.

### Let's call it what it is, food allergies

Since the dots have been connected, corrective action taken, quality of life improvements revelled in, a final element was added, taking a prophylactic antihistamine. It appears to reduce the severity of symptoms I'd usually if I am testing suspect foods or accidentally eat a trigger. This suggests my symptoms may be histamine related and at some point might we worth investigating further.

## The final outcome

All trigger foods/ingredients have been eliminated from my diet.

I wake each day without a migraine, unless I am testing. Daily food and symptom logging continues, I suspect my allergies are developing, currently the capsicum family is sitting on the suspect list as well meaning no chillis or bell peppers!

I put on weight rather rapidly after the first 2 weeks of ingredient elimination and converting to gluten free alternatives for bread, pasta and noodles. I'm working on this!

I eat a much healthier diet, lots of fibre, managed levels of carbs, measured proteins, loads of unsaturated fats. 

I rarely eat out, the few times I have, I've suffered, despite declaring allergies which doesn't seem prevent accidental cross contamination. 

My diet is more controlled and managed, meals are planned and prepared and cooked fresh.

For shitty days where I have accidentally ```glutened```, ```dairyed``` or ```celeryed``` myself, I have a stack of sauces in the freezer I've made that can be quickly turned into a stir fry or soup.

I'm borderline obsessive about checking ingredients in the tiny amount of processed food I now eat.

And, yeah, I now realise I'm highly allergic to common foods! FML eh? Fifteen bloody years, more visits to doctors and hospitals than I can remember, and it was food all along! 

### Eating out with Food Allergies

I have realised through bad experience that restaurant foods that are declared gluten/wheat or other allergens free, can still have enough of the allergen from cross contamination to cause me significant problems and the few instances I have eaten out have left me feeling bloody awful, so I don't really eat out much.

On the plus side, I'm becoming an awesome chef! 

### This is a tough one, food allergies are rarely taken seriously.

I've seen the rolled eyes from servers, the scepticism from friends, it's frustrating because "Gluten Free woo!" is a health fad for many, for me it's a serious condition that has a significant negative impact on my health and well-being and now, being symptom free, I get anxious eating anything I haven't prepared myself. 

### "Prepared in a facility that also handles ```allergen ```" does not mean it is allergen free.

Again a lesson learned the hard way. I accept that unless a kitchen / facility is dedicated to allergen free food prep, cross contamination is a very real and common problem and expecting every restaurant to REALLY make an effort to ensure no cross contamination is unrealistic. Expecting factory processed foods that contain no gluten/dairy/celery and do not declare the product as allergen free is also a recipe for disaster for me.

A good example of this is a favourite snack of mine Poppadums, made with lentil flour, absolutely no gluten or other allergens, but made in a facility that handles wheat flour and you've guessed it, I can't eat them.

### Get Tested?

Now, knowing what I know, shouldn't I get tested ? 

In order for testing to be effective I have to be consuming the allergen for at least four weeks before the allergen or DNA testing. However, now I am symptom free, the thought of going back to consuming these foods and suffering the pain and misery it will induce, just to get tested in order to confirm something I already know, simply does not appear to be worth it to me. 

## Conclusion

After 15 years, through the ever-so-simple process of adopting a elimination diet, recording everything I ate and how I felt, testing and eliminating trigger foods, I am migraine free, apart from days I test foods. Ignoring a recent test for celery last week, I've been migraine and symptom free for the last 3 weeks (July 2025 at the time of writing).

I set out to “solve” migraines by recording my diet and symptoms using Home Assistant. I wanted to get a clearer picture of what was happening to me every day. But over time, as the data built up and patterns began to emerge, I started to feel less like I was at the mercy of random symptoms and more like I had something I had control of.

Tracking everything in one place — food, sleep, migraines, ingredients let me spot correlations I’d never have otherwise noticed. 

Visualising it made it real. It helped me adjust my habits, diet, confirm what was working, and slowly piece together a version of daily life where I wasn’t constantly firefighting unexplained migraines.

This approach didn’t magically “cure” anything, but it gave me clarity. And in the mess of trial and error that is managing chronic symptoms, that clarity has been worth everything.

I still log food, it takes a moment to do so using Home Assistant as I suspect my allergies are still developing, we'll see. 

## Stranger Danger

I am not a doctor, this is not medical advice, stranger danger!. Everyone is different, I think my experience might be a possible avenue for the daily migraine sufferers to pursue. The once-in-a-while "kill me" migraines are probably something else. 

I'm guessing, wtf do I know? This is what worked for me, if you're at your breaking point, consider giving this a try?

And there endeth the lesson / journey, may your allergies be insignificant and your diet varied and healthy. 

> # "Live Long and May the Force be With You.


Read more about my journey here

- Part 1 - No More Migraines, what I stopped eating
- [Part 2 - Using Home Assistant to Track Symptoms & Cure Migraines](https://rodders.me/projects/homeassistant-health-dashboard-pt2/how-i-used-home-assistant-to-track-symptoms-and-cure-daily-migraines/)
- [Part 3 - Visualising the data for Food and Migraines](https://rodders.me/projects/homeassistant-health-dashboard-pt3/how-i-used-home-assistant-to-track-symptoms-and-cure-daily-migraines-part-3-visualising-data/)
- [A Visualisation of My Migraines and Food / Ingredients Consumed](http://rodders.me/health_data_tracker_visualisation/vertical_food_timeline.html)