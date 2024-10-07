import cssselect

with open('/home/hass/Documents/webdev/dev2/static/css/project-style.css', 'r') as f:
    stylesheet = f.read()

# Get all selectors in the stylesheet
selector_list = cssselect.parse(stylesheet)

for selector in selector_list:
    print(selector.get("text")) 
