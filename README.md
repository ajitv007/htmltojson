# htmltojson
Some strings have html tabs. convert a complete HTML string to JSON

I needed to convert a HTML string into JSON. After looking for results without any success, I thought doing it myself should be faster than searching. As an exemple:

content = '<html><body><div class="an_example"><p>one paragraph</p></div></body></html>'
js = HTMLtoJSONParser.to_json(content)
print (js)
Will produce this:
{'html': {'body': {'div': {'p': {'': 'one paragraph'}, '#class': 'an_example'}}}}
