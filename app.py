#!C:\Users\Yash\AppData\Local\Programs\Python\Python310\python.exe
#print("content-type: text/html\n\n" ) 


import webbrowser
import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns
from sklearn.model_selection import train_test_split
from sklearn.model_selection import cross_val_score
from sklearn.metrics import classification_report
from sklearn import metrics
from sklearn.ensemble import RandomForestClassifier
import pickle
import sys
import requests, json
from weather import *

 



temp,humi=(weather(sys.argv[1]))


model = pickle.load(open('RFC.pkl','rb'))
data = ([[sys.argv[2],sys.argv[3],sys.argv[4],temp,humi,sys.argv[5],sys.argv[6]]])
recoomendation =model.predict(data)
rec=str(recoomendation)
print(rec[2:-2])

