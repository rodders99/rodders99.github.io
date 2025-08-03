+++
title = "Pt 2. Using Home Assistant to Cure My Migraines"
description = "Using Home Assistant's powerful dashboard, scripting and automations to track health, food and symptoms in order to cure my migraines"
slug = "How I Used Home Assistant to Track Symptoms and Cure Daily Migraines - Part 2 -The Home Assistant Dashboard"
date = 2025-06-27T09:15:27.561Z
draft = false
tags = ["Home Assistant", "Home Assistant Scripts","Home Assistant Dashboard","Home Assistant YAML","Home Assistant Helpers", "Food Diary","Health Tracking", "Biohacking", "YAML", "Microsoft Excel", "Python", "Pandas","Machine Learning"]
categories = ["Home Assistant"]
authors = ["Rodders"]
featuredImage = "/img/homeassistant_logo.jpg"

+++

![Home Assistant Logo](/img/homeassistant_logo.jpg)

- [Introduction](#introduction)
- [It started with a click](#it-started-with-a-click)
  - [Building a data driven health tracker](#building-a-data-driven-health-tracker)
  - [Over-engineering a simple data collection problem?](#over-engineering-a-simple-data-collection-problem)
  - [NABU Casa subscription not required (but very worthwhile and helpful)](#nabu-casa-subscription-not-required-but-very-worthwhile-and-helpful)
  - [A Look at the Home Assistant Dashboard](#a-look-at-the-home-assistant-dashboard)
- [Here's how The Home Assistant Dashboard was made](#heres-how-the-home-assistant-dashboard-was-made)
  - [The Datafile](#the-datafile)
  - [The Lovelace Dashboard Food Button](#the-lovelace-dashboard-food-button)
    - [Example of another category for the Dashboard Button](#example-of-another-category-for-the-dashboard-button)
    - [The Button Logging script](#the-button-logging-script)
    - [What is written to to the file sensor](#what-is-written-to-to-the-file-sensor)
  - [Symptom Severity Logging](#symptom-severity-logging)
    - [Symptom Severity Logging - The input\_number helper](#symptom-severity-logging---the-input_number-helper)
    - [The Lovelace Dashboard Symptom Severity Logging Input and Button code](#the-lovelace-dashboard-symptom-severity-logging-input-and-button-code)
    - [Symptom Severity Logging - The script.](#symptom-severity-logging---the-script)
  - [Recording Sleep Information](#recording-sleep-information)
    - [The Dashboard button and input fields](#the-dashboard-button-and-input-fields)
    - [The Lovelace Dashboard Card](#the-lovelace-dashboard-card)
    - [The script for sleep data capture](#the-script-for-sleep-data-capture)


> If you regularly experience any of the symptoms  [I list in this article](/projects/no-more-migraines-what-i-stopped-eating/how-i-used-home-assistant-to-track-symptoms-and-cure-daily-migraines-part-1-the-beginning/#discovering-my-triggers), it is entirely possible that like me your migraines may be triggered by something in your diet! This is not medical advice, I am not a Medical Professional, do not take medical advice from internet strangers. If you are suffering from similar symptoms, consider approaching a medical professional before biohacking your life. This was my journey, I hope it brings relief to others.

## Introduction

I used to suffer from migraines, amongst multiple less severe but nonetheless annoying symptoms.

Practically every single day, for the last 15 years, I've woken up with a migraine and gone to bed with one. It started 15 years ago at a friend's wedding. The evening before we're sharing a beer (Budweiser) chatting about the upcoming wedding, we go to bed, then at 3am in the morning I'm woken by the worst headache I've ever experienced. Cue 15 years of near daily migraines, not as devastating as the first migraine, but debilitating none the less.

Then I started to track my diet and symptoms with the help of Home Assistant. The goal? Identifying if something in my diet was the trigger for my migraines (And other symptoms).

<h3>Read more about my journey here</h3>

- [Part 1 - No More Migraines, what I stopped eating](/projects/no-more-migraines-what-i-stopped-eating/how-i-used-home-assistant-to-track-symptoms-and-cure-daily-migraines-part-1-the-beginning/)
- Part 2 - Using Home Assistant to Track Symptoms & Cure Migraines
- [Part 3 - Visualising the data for Food and Migraines](/projects/homeassistant-health-dashboard-pt3/how-i-used-home-assistant-to-track-symptoms-and-cure-daily-migraines-part-3-visualising-data/)
- [A Visualisation of My Migraines and Food / Ingredients Consumed](http://rodders.me/health_data_tracker_visualisation/vertical_food_timeline.html)


## It started with a click

Once I started collecting detailed diet and symptom information, I realised that having access to a very detailed food diary actually made it pretty simple to see the problem foods directly in the data, without going to the lengths of building a machine learning model or crafting a creative visualisation. 

It is still my intention to implement the visualisation / machine learning predictive model and share it with the community in the hope that it may help someone else and if you are interested keep your eyes out for my next post on this subject. 

Update - Visualisation [http://rodders.me/health_data_tracker_visualisation/vertical_food_timeline.html](http://rodders.me/health_data_tracker_visualisation/vertical_food_timeline.html)

### Building a data driven health tracker

Over the past seven months that I've been using Home Assistant to log the data:

- Date
- Time
- Categories (Food, Symptom etc.)
- Additional Information (Detailed food info etc.)

I've collected over 12,000 rows of data which is more than enough to use as a dataset for a predictive model and expect some reasonable results. What also helps is now knowing my what my triggers are, I'll be able to compare it to the output from the ML Model. About 80% of this data was readings from a [CMG](https://en.wikipedia.org/wiki/Continuous_glucose_monitor), which were later discounted as irrelevant (this was one of ChatGPTs suggestions that proved pointless)

### Over-engineering a simple data collection problem?

I already knew a paper method of recording would not work for me, I've tried it before and while I'm a big fan of analog, but as a recording methodology for data analysis goes, it's a bit shit.

So I flexed my considerable experience with Home Assistant to develop a Home Assistant dashboard page specific to tracking food / fluid consumption, health indicators and symptoms. 

Here's where Home Assistant comes in, one thing that is a constant is my mobile phone which is rarely out of my hands, couple this with the Home Assistant app [Android](https://play.google.com/store/apps/details?id=io.homeassistant.companion.android&hl=en-GB&gl=US) or [IOS](https://apps.apple.com/us/app/home-assistant/id1099568401), a [Nabu Casa](https://www.nabucasa.com/pricing/) subscription and that combination enabled me to update my food and symptom tracker regardless of where I was, at home or out with friends. 

I had a method of simply (and quickly) keeping a detailed diary of food and symptoms using a simple button click interface that simplified maintaining a food / symptoms Diary etc. which in turn enabled me to begin collecting the detailed data necessary to attempt to identify the causes of my migraines and fix them.

Initially I also used a Continuous Glucose Monitor  ([Libre Freestyle integration](https://github.com/PTST/LibreView-HomeAssistant) FTW!) to monitor blood glucose after eating (ChatGPT suggestion), and it was simple to integrate this into the overall solution I built. However as more data was collected, it became apparent that this was not a factor causing my migraines.

### NABU Casa subscription not required (but very worthwhile and helpful)

A [Nabu Casa Subscription](https://www.nabucasa.com/) enables remote access to your Home Assistant instance, using the Home Assistant app [Android](https://play.google.com/store/apps/details?id=io.homeassistant.companion.android&hl=en-GB&gl=US) or [IOS](https://apps.apple.com/us/app/home-assistant/id1099568401), outside of your home Wi-fi network, which means when you are not home you can access your Home Assistant server from anywhere.

Please note that a Nabu Casa subscription is not required for my solution (but come on, support the Devs!) if: 

- You have already setup your own remote access solution
- You intend on setting up your own [remote access solution](https://www.home-assistant.io/docs/configuration/remote/) 
- You not require remote access to your Home Assistant Instance. 

You won't need it.

However a subscription supports the developers and simplifies a lot of the more complex elements of setting up Home Assistant remote access and integrating with Alexa and Google voice control. 

> Support the Devs!


### A Look at the Home Assistant Dashboard

Here's what the dashboard looks like.

The following details the methods I used to create the dashboard and begin collecting data.

![Home Assistant Health Dashboard](/health_data_tracker_visualisation/homeassistant_health_dashboard-edit%20(resize).jpg)

## Here's how The Home Assistant Dashboard was made

The overall solution is built around a number of Home Assistant components:

- A Datafile where the health indicators, symptom and food was saved as a CSV using the [FILE Integration](https://www.home-assistant.io/integrations/file/)
- A [Home Assistant Template](https://www.home-assistant.io/docs/configuration/templating/) to structure the data as a CSV written to the file
- [Button Dashboard Cards](https://www.home-assistant.io/dashboards/button/) for the various foods & symptoms I want to track 
- [Home Assistant input_number Helpers](https://www.home-assistant.io/integrations/input_number/) to track numeric values such as sleep and headache severity
- [Home Assistant input_text Helper](https://www.home-assistant.io/integrations/input_text/) to record notes, symptoms or foods not already setup with a button 
- [Home Assistant Scripts](https://www.home-assistant.io/integrations/script/) that the buttons call to record the health, symptom and food information to the file integration. 

### The Datafile

To record the data into a CSV Data File that can be analysed with tools like python, pandas and Machine Learning models, a file notification integration needs to be setup in Home Assistant.

``` Settings -> Add Integration -> File -> Setup a notification service. ```

![Setup File Notification](/health_data_tracker_visualisation/file-notification-service.jpg)

- Give it a memorable name, this is used in the script to write the data associated with a button being clicked. 
- Make sure you leave Timestamp OFF, date and time is added by the Home Assistant scripts.

### The Lovelace Dashboard Food Button

![food button](/health_data_tracker_visualisation/food_buttons.jpg)

These are Buttons in a horizontal stack. 

A Button needs to be created for each commonly used food. When the button is clicked the information under the `data` heading is written to the Home Assistant file sensor.

The key elements for data acquisition are under the `data:` heading :

- carbs
- fluids
- category
- item

Hopefully it's obvious that you amend these for each food you wish to create a button for.


```yaml {linenos=inline hl_lines=["6-10"] style=catppuccin-frappe}
show_name: true
show_icon: true
type: entity-button
tap_action:
  action: perform-action
  data:
    category: FOOD
    item: Choccie Coffee (18g CHO & 3 tsp & 400ml fluids)
    carbs: 18
    liquids: 400
  target: {}
  perform_action: script.health_log_button
entity: script.health_log_button
icon: mdi:coffee
hold_action:
  action: none
name: Choccie Coffee (18g CHO)
icon_height: 20px


```


#### Example of another category for the Dashboard Button

The same script can be used to log other non food items by simply changing the category to whatever you want. In my case I started out recording secondary symptoms:

```yaml {linenos=inline hl_lines=["7-9"] style=catppuccin-frappe}
show_name: true
show_icon: true
type: entity-button
name: Feeling Cold
tap_action:
  action: perform-action
  data:
    category: SYMPTOM
    item: Feeling Cold
  target: {}
  perform_action: script.health_log_button
entity: script.health_log_button
icon_height: 20px
icon: mdi:snowflake-alert

```

#### The Button Logging script

This script is called each time a relevant button is clicked. It stores the data in a consistent CSV format for later analysis.

The notify.*file* where file is the name of the file sensor created earlier.

```yaml {linenos=inline style=catppuccin-frappe hl_lines=["14-18", "33-37", "50-54"]}
health_log_button:
  alias: "Health - Log Button"

  sequence:
    - choose:
        - conditions:
            - condition: template
              value_template: "{{ carbs is defined and carbs | int != 0 }}"
          sequence:
            - action: notify.send_message
              enabled: true
              target:
                entity_id: notify.file
              data:
                message: > 
                "{{ now().strftime('%Y-%m-%d')}},
                 {{ now().strftime('%H:%M')}},
                 {{category}},{{item}},{{carbs}}"
            - action: input_number.set_value
              target:
                entity_id: input_number.food_carbs_consumed_event
              data:
                value: "{{carbs}}"
            - action: python_script.set_state
              data:
                entity_id: sensor.food_carbs_day_total
                state: "{{ states('sensor.food_carbs_day_total') | float(0) + states('input_number.food_carbs_consumed_event') | float(0) }}"
            - condition: template
              value_template: "{{ liquids is defined and liquids | int != 0 }}"
            - action: notify.send_message
              target:
                entity_id: notify.file
              data:
                message: >
                "{{ now().strftime('%Y-%m-%d')}}, 
                 {{ now().strftime('%H:%M')}},
                  DRINK,{{item}},{{liquids}}"
            - action: python_script.set_state
              data:
                entity_id: sensor.food_liquids_day_total
                state: "{{ states('sensor.food_liquids_day_total') | float(0) + liquids | float(0) }}"


      default:
        sequence:
          - action: notify.send_message
            enabled: true
            target:
              entity_id: notify.file
            data:
              message: >
              "{{ now().strftime('%Y-%m-%d')}},
               {{ now().strftime('%H:%M')}},
                {{category}},{{item}},0"
```

Essentially this script runs through THEN conditions to determine what to write to the file.


```goat 
.-------------------------------------------.
| If carbs is defined and not zero,         |
| write the carbs and item detail           |
| contained in the card to the file sensor. |
.-------------------------------------------.
                  |
                  v
              .--------.
              |  THEN  |
              .--------.
                  |
                  v
.--------------------------------------------.
| If fluids is defined and not zero,         |
| write the fluids and item detail           |
| contained in the card to the file sensor.  |
.--------------------------------------------.
                  |
                  v
              .--------.
              |  THEN  |
              .--------.
                  |
                  v
.--------------------------------------------.
| If fluids is not defined and not zero AND  |
| If carbs is not defined and not zero       |
| write the category and item detail         |
| contained in the card to the file sensor.  |
.--------------------------------------------.

```



#### What is written to to the file sensor

This will write an entry in the file you have setup that looks like this: 

2025-04-20,10:30,'FOOD','Coffee (15g CHO & 1 tsp Sugar & 400ml Fluids)','15'

2025-04-20,10:30,'DRINK','Coffee (15g CHO & 1 tsp Sugar & 400ml Fluids)','400'

And the data split :

Date | Time | Category | Food Info | Carbs / Fluids
| :- | :- | :- | :- | :- 
2025-04-20 | 10:30 | 'FOOD' | 'Coffee (15g CHO &  1 tsp Sugar &  400ml)' | '15'
2025-04-20 | 10:30 | 'DRINK' | 'Coffee (15g CHO &  1 tsp Sugar &  400ml)' | '400'

### Symptom Severity Logging

The Symptom Severity section consists of five main elements : 


  - [input_number Helper](https://www.home-assistant.io/integrations/input_number/) required for the dashboard card to store the set value
  - A Dashboard card to allow the values to be set
  - A script to store severity values from the input_number helper to the  datafile
  - An optional graph plotting historic data store in the input_number helper

![Severity Logging](/health_data_tracker_visualisation/severity_logging.jpg)

#### Symptom Severity Logging - The input_number helper

The [input_number Helper](https://www.home-assistant.io/integrations/input_number/) needs to be created in Home Assistant to allow this value to be set in the dashboard.

```Settings -> Devices & Services -> Helpers -> + Create Helper -> Number```

Give your helper a name, and under advanced select whether you want to use a slider or input field (either works with the script). 




#### The Lovelace Dashboard Symptom Severity Logging Input and Button code

```yaml {linenos=inline style=catppuccin-frappe}
type: horizontal-stack
cards:
  - features:
      - type: numeric-input
        style: buttons
    type: tile
    entity: input_number.health_headache_severity
    vertical: false
    name: Headache Severity
    features_position: bottom
  - show_name: true
    show_icon: true
    type: button
    tap_action:
      action: perform-action
      target: {}
      perform_action: script.health_headache_severity
    entity: input_number.health_headache_severity
    name: Update Headache
    icon: mdi:head-alert-outline
    icon_height: 20px
view_layout:
  position: sidebar

```

![input_helper](/health_data_tracker_visualisation/input_helper_severity_v2.jpg)

I'm using the [Apex Charts addon](https://github.com/RomRider/apexcharts-card) for plots, it has a lot more flexibility than the normal Home Assistant graph card. 

#### Symptom Severity Logging - The script.

This script adds the data from the input_number helper and stores the data in the datafile in the correct CSV format.

```yaml {linenos=inline style=catppuccin-frappe hl_lines=["7-12"]}
"health_headache_severity":
  alias: Health - Headache Severity
  sequence:
    - action: notify.send_message
      target:
        entity_id: notify.file
      data:
        message: >
                "{{ now().strftime('%Y-%m-%d')}},
                 {{ now().strftime('%H:%M')}},
                 'HEADACHE','Severity',
                 '{{ states('input_number.health_headache_severity') }}'"
```



### Recording Sleep Information 

(Recording multiple data items with a single button click)

If you have a smart watch with an integration for Home Assistant, this could be automatic. My Galaxy smartwatch doesn't have an integration, so I logged sleep data manually.

#### The Dashboard button and input fields

[input_number Helpers](https://www.home-assistant.io/integrations/input_number/) need to be created for each item you wish to record. For my example I was recording the sleep data from my smartwatch because there was no Home Assistant integration for it:

- Restless Sleep
- Light Sleep
- Motionless Sleep

![sleep_record](/health_data_tracker_visualisation/input_helpers_sleep.jpg)

Using the script below, the data from the [input_number Helpers](https://www.home-assistant.io/integrations/input_number/) helpers will be written to the file sensor.

#### The Lovelace Dashboard Card

```yaml {linenos=inline style=catppuccin-frappe}
type: entities
entities:
  - entity: input_number.health_sleep_restless
    name: Restless (minutes)
  - entity: input_number.health_sleep_light
    name: Light (minutes)
  - entity: input_number.health_sleep_motionless
    name: Motionless (Minutes)
  - entity: script.health_sleep_record
    icon: mdi:sleep
    secondary_info: last-changed
    name: Save Record
```

#### The script for sleep data capture 

```yaml {linenos=inline style=catppuccin-frappe hl_lines=["8-13", "18-23", "28-33"]}
"health_sleep_record":
  alias: Health - Sleep Record
  sequence:
    
    - action: notify.send_message
      target:
        entity_id: notify.file
      data:
        message: >
                "{{ now().strftime('%Y-%m-%d')}},
                 {{ now().strftime('%H:%M')}},
                 'SLEEP','RESTLESS', 
                 '{{ states('input_number.health_sleep_restless') }}'"

    - action: notify.send_message
      target:
        entity_id: notify.file
      data:
        message: >
                "{{ now().strftime('%Y-%m-%d')}},
                 {{ now().strftime('%H:%M')}},
                 'SLEEP','LIGHT', 
                 '{{ states('input_number.health_sleep_light') }}'"

    - action: notify.send_message
      target:
        entity_id: notify.file
      data:
        message: > 
                "{{ now().strftime('%Y-%m-%d')}},
                 {{ now().strftime('%H:%M')}},
                 'SLEEP','MOTIONLESS', 
                 '{{ states('input_number.health_sleep_motionless') }}'"
```

And that's it! 12,000 button clicks later and I'm cured !

If you want to find out more about my journey to cure my migraines, read on!

<h3>Read more about my journey here</h3>

- [Part 1 - No More Migraines, what I stopped eating](/projects/no-more-migraines-what-i-stopped-eating/how-i-used-home-assistant-to-track-symptoms-and-cure-daily-migraines-part-1-the-beginning/)
- Part 2 - Using Home Assistant to Track Symptoms & Cure Migraines
- [Part 3 - Visualising the data for Food and Migraines](/projects/homeassistant-health-dashboard-pt3/how-i-used-home-assistant-to-track-symptoms-and-cure-daily-migraines-part-3-visualising-data/)
- [A Visualisation of My Migraines and Food / Ingredients Consumed](http://rodders.me/health_data_tracker_visualisation/vertical_food_timeline.html)