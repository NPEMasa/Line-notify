
import requests

line_token = "<Your API Key>"
url = "https://notify-api.line.me/api/notify"
msg = "こんにちは"

payload = {'message': msg}
headers = {'Authorization': 'Bearer ' + line_token}
line_notify = requests.post(url, data=payload, headers=headers)

res = line_notify.text
print (res)
