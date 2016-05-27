#Bootstrap is a popular CSS framework with prewritten CSS rules designed to help you build webpages faster.
Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile first projects on the web.

Take a look at the web browser. In this lesson, we will build this webpage up from scratch using a combination of Bootstrap and custom CSS.

Also in this lesson, we will encounter three new HTML elements:

header: Used to organize headers on a webpage.

footer: Used to organize footers on a webpage.

section: Defines sections on a webpage.
______________________________________________________
 Before Bootstrap can work for us, we need to link to it.

In earlier lessons, we linked only to main.css. Now, in addition to main.css, we will link to a URL that hosts Bootstrap.

The HTML link element makes Bootstrap available to us. Remember that the link element is typically contained within HTML head tags.
'''javascript
<head>
  ... 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
  ...
</head>
'''
Above, the href attribute is set to the URL https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css.

Let's explore what Bootstrap can do for us.

_________________________________________________________
