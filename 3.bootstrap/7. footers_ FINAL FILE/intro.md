1.
Let's create a footer. Below the supporting content's closing </section> tag, create a footer element with the Bootstrap class container:
```html
<footer class="container">
  ...
</footer>
```
Click Run to continue.
2.
Beneath the opening <footer class="container"> tag, create a div with the Bootstrap class row:
```html
<footer class="container">
  <div class="row">
    ...
  </div>
</footer>
```
Don't forget your closing </div> tag! Click Run to continue.
3.
Next divide the row using Bootstrap's grid.

Create a p element with the class col-sm-4 and <ul> element with the class col-sm-8:
```html
<footer class="container">
  <div class="row">
    <p class="col-sm-4">...</p>
    <ul class="col-sm-8">
    ...
    </ul>
  </div>
</footer>
```
Click Run to continue.
4.
Between the <p class="col-sm-4"> and closing </p> add the website copyright:

&copy; 2016 Skillfair
&copy is a character code, which web browsers interpret as the copyright symbol: ©.

Click Run to view the copyright in the web browser.
5.
Between <ul class="col-sm-8"> and </ul>, create four li items. Each will have the class col-sm-1.
```html
<ul class="col-sm-8">
  <li class="col-sm-1">...</li>
  <li class="col-sm-1">...</li>
  <li class="col-sm-1">...</li>
  <li class="col-sm-1">...</li>
</ul>
```
Click Run to continue.
6.
Finally, inside each <li class="col-sm-1">, add an img element that links to a social media icon.

Twitter
```html
<li class="col-sm-1">
  <img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/twitter.svg">
</li>
```
Facebook
```html
<li class="col-sm-1">
  <img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/facebook.svg">
</li>
```
Instagram
```html
<li class="col-sm-1">
  <img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/instagram.svg">
</li>
```
Medium
```html
<li class="col-md-1">
  <img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/medium.svg">
</li>
```
Click Run and view the results in the web browser.