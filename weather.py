import requests, json
def weather(location):
    api_key ='602c53b2ffb21da244db428d67c88381'
    base_url = "http://api.openweathermap.org/data/2.5/weather?"
    complete_url = base_url + "appid=" + api_key + "&q=" + location
    response = requests.get(complete_url)
    x = response.json()
    if x["cod"] != "404":
        y = x["main"]
        
        temp = round((y["temp"] - 273.15), 2)
        humi = y["humidity"]
        return temp,humi
    else:
        None