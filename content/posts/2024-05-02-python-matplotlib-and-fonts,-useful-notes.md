---
title: Python, Matplotlib and Fonts, some useful-notes
date: 2024-01-01
description: "Adding Fonts to Matplotlib, how to guide and supporting code for discovery"
draft: true
authors: "Rodders"
tags: []
categories: []
externalLink: ""
series: {}
type: default
---

# Adding Fonts to Matplotlib

To add new fonts to Matplotlib, you may have found old articles referencing 

## Step 1. Copy the font files to a location

Copy the ```ttf``` or ```otf```  font files to your ~/```python VENV dir```/lib/python3.11/site-packages/matplotlib/mpl-data/fonts/ttf

### example

```cp ~/Downloads/<new font file directory> ~/python VENV dir/lib/python3.11/site-packages/matplotlib/mpl-data/fonts/ttf``` 

## Step 2. remove fontlist-v330.json

fontlist-v330.json is the font cache list created by matplotlib when it loads and will be recreated automatically.

<code>
rm -fr ~/.cache/matplotlib
</code>

## Step 3. Update font cache 

<code>fc-cache -f -v</code>

### Example output

<code>
Font directories:
	/home/.local/share/fonts
	/usr/share/gnome/fonts
	/home/.local/share/flatpak/exports/share/fonts
	/var/lib/flatpak/exports/share/fonts
	/usr/local/share/fonts
	/usr/share/fonts
	/home/.fonts
	/usr/share/texmf/fonts/opentype/public/lm
	/usr/share/texmf/fonts/opentype/public/lm-math
	/usr/share/texmf/fonts/opentype/public/tex-gyre-math
	/usr/share/texmf/fonts/opentype/public/tex-gyre
	/home/.local/share/fonts/Google Fonts
	/home/.local/share/fonts/Monotype Imaging
	/usr/share/fonts/X11
	/usr/share/fonts/cMap
</code>