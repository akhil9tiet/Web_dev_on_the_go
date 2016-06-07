1.
In index.html, on the line below the opening <body> tag, create a header element with Bootstrap's container class:
```htm
<header class="container">
  ...
</header>
```
Click Run to continue.
2.
Next, inside the opening `<header class="container">` tag, create a div with the Bootstrap class row:
```htm
<header class="container">
  <div class="row">
  </div>
</header>
```
Click Run to continue.
3.
Now we'll cut the row into two parts.

The first part: inside the `<div class="row">` tag, create an h1 with Bootstrap's class col-sm-4. The content for the h1 will be the company name. You can use "Skillfair" or anything you'd like:
```htm
<header class="container">
  <div class="row">
    <h1 class="col-sm-4">Skillfair</h1>
  </div>
</header>
```
Click Run to see the results in the web browser.
4.
Now for the second part of the row. One line below the h1 element, create a nav element with Bootstrap's class col-sm-8 text-right:
```htm
<header class="container">
  <div class="row">
    <h1 class="col-sm-4">Skillfair</h1>
    <nav class="col-sm-8 text-right">
    </nav>
 </div>
</header>
```
Click Run to continue.
5.
Finally, inside the opening `<nav class="col-sm-8">`, create three p elements. The content for each p will be a navigation item. You could use item names such as "newest", "catalogue" and "contact":
```htm
<header class="container">
  <div class="row">
    <h1 class="col-sm-4">Skillfair</h1>
    <nav class="col-sm-8 text-right">
      <p>newest</p>
      <p>catalogue</p>
      <p>contact</p>
    </nav>
 </div>
</header>
```
Click Run to see the compeleted header/navigation in the web browser.