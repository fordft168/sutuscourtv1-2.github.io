import requests
from PIL import Image

def download_image(url, filename):
    response = requests.get(url)
    if response.status_code == 200:
        with open(filename, 'wb') as file:
            file.write(response.content)
            print(f"Image saved as {filename}")
    else:
        print("Failed to download image.")

# Specify the URL of the image
url = "http://www.sutuscourt.com/images/content/pool/Pool-"

# Specify the range of numbers for the images you want to download
start_number = 1
end_number = 14

# Download each image in the range
for i in range(start_number, end_number + 1):
    # Construct the full URL for the image
    image_url = f"{url}{i:02d}.jpg"
    
    # Specify the filename to save the image
    filename = f"Pool-{i:02d}.jpg"
    
    # Download and save the image
    download_image(image_url, filename)
