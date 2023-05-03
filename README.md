# barebones_hypothesis_api_script
Extremely basic script to post a page-note annotation to Hypothes.is

All it does is take some basic input (url, title, annotation, tags) and turn it into a page-annotation on your Hypothes.is account.
You need an Hypothesis API key for it to work (see https://hypothes.is/account/developer when logged in).

This script can be included in other scripts that arrange for how to acquire the input needed to make an annotation.
This script expects 4 variables to be available when included in another script
- $annouri the URL of the article you are annotating
- $annodoc the title of the article you are annotating (if left out it will turn into 'untitled document')
- $annotext the text of your annotation (can contain urls, markdown etc.)
- $cats an array of your tags for this annotation

It is assumed it is being run locally under your own full control, and **no precautions** are taken to verify input etc. or avoid unauthorised access.

3 May 2023.
