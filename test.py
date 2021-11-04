import requests

url = 'images/icons/iitdh.jpg'
r = requests.get(url, allow_redirects=True)
open('google.ico', 'wb').write(r.content)