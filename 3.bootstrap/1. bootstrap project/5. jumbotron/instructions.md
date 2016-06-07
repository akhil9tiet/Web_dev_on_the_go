1.
In index.html, one line below the closing </header> tag, Create a section with the jumbotron class.
```html
<section class="jumbotron">

</section>
```
Click Run. In the web browser, notice a large photo covering the main part of the webpage.
2.
Inside the opening ```html<section class="jumbotron">``` tag, create a div with the container class:
```html
<section class="jumbotron">
  <div class="container">
  </div>
</section>
```
Don't forget your </div> closing tag!

Click Run to continue. There won't yet be a visual change in the web browser.
3.
To center text over the jumbotron image, create another div inside the container div. Give the new div a class of row text-center:
```html
<section class="jumbotron">
  <div class="container">
    <div class="row text-center">
    ...
    </div>
  </div>
</section>
```
The ... is a placeholder for where text elements will go next.

Click Run to continue. There still will not be a visual effect on the web browser.
4.
Finally, add heading and anchor elements to the row.

The anchor element will have Bootstrap's btn btn-primary class, which will transform it into a button.
```html
<section class="jumbotron">
  <div class="container">
    <div class="row text-center">
      <h2>Homemade Goods</h2>
      <h3>This Year's Best</h3>
      <a class="btn btn-primary" href="#" role="button">See all</a>
    </div>
  </div>
</section>
```
Click Run to see the elements centered over the jumbotron image in the web browser.

If you'd like, replace text between h2 , h3 and a tags with text of your choice.

Note: The anchor element's href attribute, #, is a placeholder for an actual URL.