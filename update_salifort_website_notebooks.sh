#!/bin/bash

export SRC=/home/hass/Documents/Learning/Salifort-Motors-Capstone-Project
export DEST=/home/hass/Documents/website/website




if [[ $1 = "1" ]]
then

	echo "Converting main Jupyter Notebooks"
	jupyter nbconvert --to html /home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/*.ipynb --output-dir="~/Documents/website/website/static/notebooks" --HTMLExporter.theme=dark
	echo "Converting Team and HR Jupyter Notebooks"
	
	# Team Summary with code
	jupyter nbconvert --to html /home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/99-documentation-project/06-Team_Summaries/cd_06_Salifort_Motors_TEAM_SUMMARY.ipynb --output-dir="~/Documents/website/website/static/notebooks" --HTMLExporter.theme=dark

	# Team Summary Example - no code
	jupyter nbconvert --to html /home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/99-documentation-project/06-Team_Summaries/cd_06_Salifort_Motors_TEAM_SUMMARY-example-output.ipynb --output-dir="~/Documents/website/website/static/notebooks" --HTMLExporter.theme=dark --no-input
	
	jupyter nbconvert --to html /home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/99-documentation-project/05-HR_Summary/*.ipynb --output-dir="~/Documents/website/website/static/notebooks" --HTMLExporter.theme=dark


elif [[ $1 = "testjupy" ]]
then

	jupyter nbconvert --to html /home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/nb_03_Salifort_Motors_project_EDA_cleanse.ipynb --output-dir="~/Documents/website/website/static/notebooks" --HTMLExporter.theme=dark
#	cp /home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/Activity_9y_Salifort_Motors_project_document_menu.html ~/Documents/website/website/static/notebooks

elif [[ $1 = "testmd" ]]
then

	echo "Converting Activity_00_Salifort_Motors_project-PROPOSAL.md"
	pandoc $SRC/99-documentation-project/01-Client_Proposal/cd_01_Salifort_Motors_project-PROPOSAL.md --css=custom-menu.css -o $DEST/static/notebooks/cd_01_Salifort_Motors_project-PROPOSAL.html
	echo "Copying images"
	cp $SRC/99-documentation-project/img/* $DEST/static/img
	echo "Copying Stylesheet"
	cp $SRC/css/project-style.css $DEST/static/notebooks
	cp $SRC/css/custom-menu.css $DEST/static/notebooks


else
	echo "Copying project Documentation"

	echo "Converting Markdown down to html"

	echo "converting cd_01_Salifort_Motors_project-PROPOSAL"

	pandoc $SRC/99-documentation-project/01-Client_Proposal/cd_01_Salifort_Motors_project-PROPOSAL.md -o $DEST/static/notebooks/cd_01_Salifort_Motors_project-PROPOSAL.html

	echo "converting cd_02_Salifort_Motors_PACE_Plan"
	pandoc $SRC/99-documentation-project/02-PACE_Workflow/cd_02_Salifort_Motors_PACE_Plan.md -o $DEST/static/notebooks/cd_02_Salifort_Motors_PACE_Plan.html
	
	echo "converting cd_03_Salifort_Motors_Analyst_SUMMARY"
	pandoc $SRC/99-documentation-project/03-Analyst_Summary/cd_03_Salifort_Motors_Analyst_SUMMARY.md -o $DEST/static/notebooks/cd_03_Salifort_Motors_Analyst_SUMMARY.html
	
	echo "converting cd_04_Salifort_Motors_EXECUTIVE_SUMMARY"
	pandoc $SRC/99-documentation-project/04-Executive_Summary/cd_04_Salifort_Motors_EXECUTIVE_SUMMARY.md -o $DEST/static/notebooks/cd_04_Salifort_Motors_EXECUTIVE_SUMMARY.html
	
	echo "converting cd_05_Salifort_Motors_HR_SUMMARY"
	pandoc $SRC/99-documentation-project/05-HR_Summary/cd_05_Salifort_Motors_HR_SUMMARY.md -o $DEST/static/notebooks/cd_05_Salifort_Motors_HR_SUMMARY.html

# Moved to a jupyter notebook with --no-input
# 	pandoc $SRC/99-documentation-project/06-Team_Summaries/Activity_6a_Salifort_Motors_TEAM_SUMMARY.md -o $DEST/static/notebooks/Activity_6a_Salifort_Motors_TEAM_SUMMARY.html
	echo "converting cd_99_Salifort_Motors_Project_Close"
	pandoc $SRC/99-documentation-project/09-Project_Close/cd_99_Salifort_Motors_Project_Close.md -o $DEST/static/notebooks/cd_99_Salifort_Motors_Project_Close.html


	echo "Copying Predictions"
	cp $SRC/99-documentation-project/07-predictions/* $DEST/static/notebooks/


	
	echo "Copying images"
	cp $SRC/99-documentation-project/img/* $DEST/static/img
	
	echo "Copy Stylesheet"
	cp $SRC/css/project-style.css $DEST/static/notebooks
	cp $SRC/css/custom-menu.css $DEST/static/notebooks

fi
