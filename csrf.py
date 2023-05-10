import requests

# Make a GET request to retrieve the CSRF token
response = requests.get('http://127.0.0.1:8000')

# Extract the value of the XSRF-TOKEN cookie from the response headers
csrf_token = response.cookies.get('XSRF-TOKEN')

# Use the CSRF token in your file upload request
url = 'http://127.0.0.1:8000/upload'
file_path = 'note.txt'

with open(file_path, 'rb') as f:
    file_content = f.read()

files = {'file': (file_path, file_content)}
headers = {'X-CSRF-TOKEN': csrf_token}

response = requests.post(url, files=files, headers=headers, verify=False)

if response.status_code == 200:
    print('File uploaded successfully')
else:
    print('File upload failed')

print('HTTP Status Code:', response.status_code)
print('HTTP Reason Phrase:', response.reason)
