from __future__ import absolute_import, print_function

from tweepy.streaming import StreamListener
from tweepy import OAuthHandler
from tweepy import Stream

consumer_key='qrN*****************T1' #consumer key
consumer_secret='Zb*******************************9Y'  #consumer secret
access_token='98*********************************kd'   #access token
access_token_secret='Fvqb******************************Y7'  #access secret

class StdOutListener(StreamListener):

    def on_data(self,data):
        print (data)
        return True

    def on_error(self, status):
        print (status)

if __name__ == '__main__':
    l = StdOutListener()
    auth = OAuthHandler(consumer_key, consumer_secret)
    auth.set_access_token(access_token, access_token_secret)

    stream = Stream(auth, l)
    topic= input("Read tweets cotaining: ")
    stream.filter(track=[topic])
