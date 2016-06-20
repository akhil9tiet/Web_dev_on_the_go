from __future__ import absolute_import, print_function

from tweepy.streaming import StreamListener
from tweepy import OAuthHandler
from tweepy import Stream
#########
import sys
#import json
import csv
#from urllib import *

import urllib.request
import urllib.parse
########

consumer_key='q******************1' #consumer key
consumer_secret='Z******************************9Y'  #consumer secret
access_token='9*******************************************d'   #access token
access_token_secret='F****************************************Y7'  #access secret

class StdOutListener(StreamListener):

    def on_data(self,data):
        tweet = data.split(',"text":"')[1].split('","source')[0]
        saveTweets = tweet +'\n'
        output = open('output.csv', 'a')
        output.write(saveTweets)
        output.close()
        return True

    def on_error(self, status):
        print ("The error status is"+ str(status))

if __name__ == '__main__':
    l = StdOutListener()
    auth = OAuthHandler(consumer_key, consumer_secret)
    auth.set_access_token(access_token, access_token_secret)
    file = open('today.txt', 'a')
    #topic = input("Read tweets cotaining: ")
    stream = Stream(auth, l)
    stream.filter(track=["Hillary Clinton"])

