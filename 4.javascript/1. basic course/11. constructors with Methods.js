/*
Constructors With Methods
In addition to setting properties, constructors can also define methods. This way, as soon as the object is created it will have its own methods as well.

Here we have a Rectangle constructor, which sets the height and width properties equal to the arguments, just like our Person did with name and age.

Notice we have added a calcArea method. This calculates the area of the rectangle in terms of its height and width.

Line 11 creates a new object rex which makes use of the constructor. You can see how rex calls the calcArea method in line 12 and saves the result in a variable, area.
*/

function Rectangle(height, width) {
  this.height = height;
  this.width = width;
  this.calcArea = function() {
      return this.height * this.width;
  };
  // put our perimeter function here!
  this.calcPerimeter = function() {
     return ((this.height + this.width)*2);
  };
}

var rex = new Rectangle(7,3);
var area = rex.calcArea();
var perimeter = rex.calcPerimeter();
console.log(rex, area, perimeter);