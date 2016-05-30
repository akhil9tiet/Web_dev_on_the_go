// the original Animal class and sayName method
function Animal(name, numLegs) {
    this.name = name;
    this.numLegs = numLegs;
}
Animal.prototype.sayName = function() {
    console.log("Hi my name is " + this.name);
};

// define a Penguin class
function Penguin(name,numLegs){
  this.name = name; 
  this.numLegs=2;
};

// set its prototype to be a new instance of Animal
Penguin.prototype = new Animal();          //This means that Penguin inherits properties and methods from Animal.
var penguin= new Penguin("Rocko",2);
penguin.sayName();


// create your Emperor class here and make it inherit from Penguin
function Emperor (name){
  this.name= name;  
}
// create an "emperor" object and print the number of legs it has
Emperor.prototype= new Penguin();
var emperor = new Emperor("Raja");
console.log(emperor.numLegs);