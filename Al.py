import pyttsx3 #pip install di terminal
import speech_recognition as sr #install ini speechRecognition
import datetime
import wikipedia
import webbrowser
import os
import smtplib

print("initializing Al")

MASTER = "Ikhlas"

engine = pyttsx3.init("sapi5")
voices = engine.getProperty("voices")
engine.setProperty("voice", voices[0].id)


# speak
def speak(text):
    engine.say(text)
    engine.runAndWait()


# function
def wishMe():
    hour = int(datetime.datetime.now().hour)

    if hour >= 0 and hour < 12:
        speak("Good Morning" + MASTER)
    elif hour >= 12 and hour < 18:
        speak("Good Afternoon" + MASTER)
    else:
        speak("Good Evening" + MASTER)
        speak("")


# microphone
def takeCommand():
    r = sr.Recognizer()
    with sr.Microphone() as source:
        print("Listening...")
        audio = r.listen(source)

    try:
        print("Recognizing..")
        query = r.recognize_google(audio, language="en-us")
        print(f"user said: {query}\n")

    except Exception as e:
        print("say that again please")
        query = None

    return query   


# main start here
speak("Hello my name is Al, i can help you!")
wishMe()
query = takeCommand()

# logic for task as per query
if "wikipedia" in query.lower():
    speak("searching wikipedia...")
    query = query.replace("wikipedia", "")
    results = wikipedia.summary(query, sentences=2)
    print(results)
    speak(results)

elif "open youtube" in query.lower():
    url = "youtube.com"
    chrome_path = "c:/Program Files (x86)/Googlr/Chrome?Application/chrome.exe %s"
    webbrowser.get(chrome_path).open(url)    