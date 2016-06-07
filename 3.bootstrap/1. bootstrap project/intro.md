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

```html

<head>
  ... 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
  ...
</head>

```

Above, the href attribute is set to the URL https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css.

Let's explore what Bootstrap can do for us.

_________________________________________________________
In the diagram, observe the following:

![alt tag](C:/Users/akhgupta/Desktop/web dev/web_dev_projects/3.bootstrap/boostrap image.png)

Bootstrap's grid columns are represented by 12 vertical bars. The boxes represent HTML elements.

The words "container", "jumbotron", "col-sm-6" and "col-sm-3" refer to Bootstrap classes. 

The element with class "jumbotron" spans the entire width of the webpage, beyond the borders of the grid. 

Elements inside the second "container", such as "col-sm-6" and "col-sm-3" are contained within the grid columns. 

Elements labeled "col-sm-3" take up three grid columns; elements labeled "col-sm-6" take up six grid columns.
Take a moment to familiarize yourself with Bootstrap's grid, then click Next to continue.
__________________________________________________________

Let's use Bootstrap's grid to create a simple header with navbar.

In the example code below, an HTML header element with Bootstrap's predefined container class is used:
```html
<header class="container">
  ...
</header>
```
Inside the header, a row is created by using a div with Bootstrap's row class:
```html
<header class="container">
  <div class="row">
  </div> 
</header>
```
Finally, the row is cut into two parts:
```html
<header class="container">
  <div class="row">
   <h1 class="col-sm-4">Heading</h1>
   <nav class="col-sm-8 text-right">
    <p>nav item 1</p>
    <p>nav item 2</p>
    <p>nav item 3</p>
   </nav> 
 </div>
</header>
```
The first part consists of the h1 with Bootstrap's class col-sm-4. It will take up the first four columns on the grid. The second part consists of the nav element with class col-sm-8. It will take up the remaining eight grid columns. text-right indicates that text will be arranged on the right side of the nav.
________________________________________________
In addition to a header/navigation, many websites have a large showcase area featuring important content. Bootstrap refers to this as a jumbotron. Below is an example implementation of a jumbotron.

First, a new section element is created and assigned the jumbotron class:
```html
<section class="jumbotron">

</section>
```
Next a div with the Bootstrap class container is used:
```html
<section class="jumbotron">
  <div class="container">
  ... 
  </div>
</section>
```
A div with the Bootstrap class row text-center can center subsequent child elements which will contain text:
```html
<section class="jumbotron">
  <div class="container">
    <div class="row text-center">
       ...
    </div>
  </div>
</section>
```
The ... is a placeholder for HTML elements containing text, such as h2, p or anchor elements.

Let's explore the jumbotron feature by creating our own below!
______________________________________________________

Many websites have a supporting content area. Supporting content can be arranged using Bootstrap's grid. Below is an example implementation of a supporting content area.

First, an HTML section element with the container class is used:
```html
<section class="container">

</section>
```
Next, div elements with the row class are added:
```html
<section class="container">
  <div class="row">
  </div>
  <div class="row">
  </div>
</section>
```
Finally, the rows are divided by using divs with Bootstrap's col-sm-... class.
```html
<section class="container">
  <div class="row">
    <div class="col-sm-6">
     ...
    </div>
    <div class="col-sm-6">
     ...
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
     ...
    </div>
    <div class="col-sm-6">
     ...
    </div>
  </div>
</section>
```
Above, two rows are divided into two equal parts. Each part takes up 6 of bootstrap's 12 columns. Using the col-sm-6 class ensures that this layout will appear when the user's screen is the width of a tablet device(768 pixels). On narrower screens, such as an iPhone, only one image per row will appear.

Let's create a supporting content area for our webpage!
________________________________________________________

Footers display copyright information, social media links and sometimes site navigation.

Below is one possible implementation for a footer section using Bootstrap:

First, a footer element with Bootstrap's container class is used:
```html
<footer class="container">

</footer>
```
Inside the footer, a div with Bootstrap's row class is added to hold footer content:
```html
<footer class="container">
  <div class="row">
  ... 
  </div>
</footer>
```
Finally, the row is divided into parts using Bootstrap's grid. Here is one suggestion:
```html
<footer class="container">
  <div class="row">
    <p class="col-sm-4">...</p>
    <ul class="col-sm-8">
      <li class="col-sm-1">...</li>
      <li class="col-sm-1">...</li>
      <li class="col-sm-1">...</li>
    </ul>
  </div>
</footer>
```
Above, the row is broken into three parts: a p element that takes up four columns, a ul which takes up 8 columns, and li items which take up 1 column each. The lis could hold navigation menu items or social media icons.

Again, because the col-sm-... class is used, this layout will appear on tablet-width screens and wider. Screen sizes smaller than tablet-width (768 pixels), will not maintain this layout.