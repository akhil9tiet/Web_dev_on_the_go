

/*
Creating a brand new Penguin was nice, but we did end up reusing a lot of the same code as the Animal class. This goes against the "DRY" principle of programming: Don't Repeat Yourself.

Inheritance can help us here! A Penguin is an Animal, so they should have all the same properties and methods as Animal. Whenever this X is-a Y relationship exists, there's a good chance that we should be using inheritance.

Remember, inheritance lets us see and use properties and methods from another class. To say that Penguin inherits from Animal, we need to set Penguin's prototype to be Animal.
*/
// the original Animal class and sayName method
function Animal(name, numLegs) {
    this.name = name;
    this.numLegs = numLegs;
}
Animal.prototype.sayName = function() {
    console.log("Hi my name is " + this.name);
};

// define a Penguin class
//We kind off already know that if it is a penguin it will always have 2 legs so we directly assign that
function Penguin(name,numLegs){
  this.name = name; 
  this.numLegs=2;
};

// set its prototype to be a new instance of Animal
Penguin.prototype = new Animal();          //This means that Penguin inherits properties and methods from Animal.
