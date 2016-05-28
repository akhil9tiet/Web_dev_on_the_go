1.
In index.html, one line below the closing </section> tag of the jumbotron, start building a supporting content section. First, create a section element with the class container that will contain supporting content.
```html
<section class="container">
  ...
</section>
```
Click Run to continue. There won't yet be a visual difference on the webpage.
2.
Inside the opening ```html <section class="container"> ``` tag, create two divs with the Bootstrap class row:
```html
<section class="container">
  <div class="row">
    ...
  </div>
  <div class="row"> 
    ...
  </div>
</section>
```
Be sure to include </div> closing tags for your rows!

Click Run to continue. There won't yet be a visual difference on the webpage.
3.
Inside each row, create two figure elements with the Bootstrap class col-sm-6:
```html
<section class="container">
  <div class="row">
    <figure class="col-sm-6">
    ...
    </figure>
    <figure class="col-sm-6">
    ...
    </figure>
  </div>
  <div class="row">
    <figure class="col-sm-6">
    ...
    </figure>
    <figure class="col-sm-6">
    ...
    </figure>
  </div>
</section>
```
Make sure you have a total of four figure elements.

Click Run to continue. As in previous steps, no change will be seen the web browser.
4.
Finally, inside each figure, add two additional elements:

1.A p element that contains one of the following catagories: 

-kitchen
-woodwork
-gifts
-antiques

For example:

<p>kitchen</p>
2.An image element containing one of the following image URLs:

[Absolute README link](https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/kitchen.jpg)
[Absolute README link](https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/woodwork.jpg)
[Absolute README link](https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/gifts.jpg)
[Absolute README link](https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/antique.jpg)
Here is a hint on how to create img elements.

Here is how the webpage should look like when you've completed this step.

Click Run to view the supporting content section in the web browser. If you toggle between screen widths, you will see how the layout changes