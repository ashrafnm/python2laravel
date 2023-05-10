import requests

#domain:https://melorecap.unico-unique.com/
url = 'http://127.0.0.1:8000/upload'
file_path = 'note.txt'

with open(file_path, 'rb') as f:
    file_content = f.read()

files = {'file': (file_path, file_content)}

response = requests.post(url, files=files, verify=False)

if response.status_code == 200:
    print('File uploaded successfully')
else:
    print('File upload failed')

print('HTTP Status Code:', response.status_code)
print('HTTP Reason Phrase:', response.reason)
#print('Response Text:', response.text)
