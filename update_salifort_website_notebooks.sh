#!/bin/bash

if [[ $1 = "1" ]]
then
	echo "Converting Notebooks"
	jupyter nbconvert --to html /home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/*.ipynb --output-dir="~/Documents/website/website/static/notebooks" --HTMLExporter.theme=dark
else
	echo "Copying project Documentation"
	export SRC=/home/hass/Documents/Learning/Salifort-Motors-Capstone-Project
	export DEST=/home/hass/Documents/website/website

	# Predictions
	cp $SRC/predictions.html $DEST/static/notebooks
	echo "Converting Markdown down to html"
	pandoc $SRC/99-documentation-project/01-Client_Proposal/Activity_00_Salifort_Motors_project-PROPOSAL.md -o $DEST/static/notebooks/Activity_00_Salifort_Motors_project-PROPOSAL.html
	pandoc $SRC/99-documentation-project/02-PACE_Workflow/Activity_2a_Salifort_Motors_PACE_Plan.md -o $DEST/static/notebooks/Activity_2a_Salifort_Motors_PACE_Plan.html
	pandoc $SRC/99-documentation-project/03-Analyst_Summary/Activity_9c_Salifort_Motors_Analyst_SUMMARY.md -o $DEST/static/notebooks/Activity_9c_Salifort_Motors_Analyst_SUMMARY.html
	pandoc $SRC/99-documentation-project/04-Executive_Summary/Activity_9a_Salifort_Motors_EXECUTIVE_SUMMARY.md -o $DEST/static/notebooks/Activity_9a_Salifort_Motors_EXECUTIVE_SUMMARY.html
	pandoc $SRC/99-documentation-project/05-HR_Summary/Activity_5a-Salifort_Motors_HR_SUMMARY.md -o $DEST/static/notebooks/Activity_5a-Salifort_Motors_HR_SUMMARY.html
	pandoc $SRC/99-documentation-project/06-Team_Summaries/Activity_6a_Salifort_Motors_TEAM_SUMMARY.md -o $DEST/static/notebooks/Activity_6a_Salifort_Motors_TEAM_SUMMARY.html
	echo "Copying images"
	cp $SRC/99-documentation-project/img/* $DEST/static/img
	echo "Copy Stylesheet"
	cp $SRC/99-documentation-project/css/project-style.css $DEST/static/notebooks

fi
