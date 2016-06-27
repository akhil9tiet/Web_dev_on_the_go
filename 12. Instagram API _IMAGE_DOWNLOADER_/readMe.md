#About the project
____________________________________________________________

####This is a simple website source code which will help you download your recent Instagram Imgaes to a local file on your computer with one **click of a mouse**.

For the sake of simplicity, I'm just downloading the recent 5 pictures. We can easily modify a single parameter to download all the images.

The code is written in PHP and uses Instagram APIs. The APIs are mostly used to authenticate a user, get the acess token and pulling out the images.

#Steps required to deploy this project
_____________________________________________________________
1. You will need a Instagram Account. Log into https://www.instagram.com/developer/
2. on the top menu find Manage Clients. Click than and Register for a new client.
3. Read the instructions and provide with a legitimate *Redirect URI*. The URI should start with "http://" or "https://". URI's like "localhost/", "C://Users" wont work.
4. Clone the repository and use your own CLient_ID and Client_Secret to run the code.
5. Make a folder named InstaPics in your working directory(the folder where the program sits.)
________________________________________________________________

While writing this program, I got help from Youtube tutorials on RESTFUL API's, Getting access_token in Instagram and The New Boston tutorials. However, the biggest source of help was the Instagram API documentation page as most of the tutorials are very old and Instagram has moved on to Oauth 2.0 since then.

There are many things which have changed, for example, we need to have *autorization_token* for making any call to the API now.

Thanks for reading! 

If you have any questions regarding the code please feel free to contat me on:

linkedin:
https://in.linkedin.com/in/akhil-gupta-013ab843
email:
gupta_akhil@outlook.com