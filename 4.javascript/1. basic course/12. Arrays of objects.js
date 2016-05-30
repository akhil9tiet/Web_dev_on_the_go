/*
Arrays filled with objects will work just like arrays filled with numbers and strings.

In the same way we may loop through an array of numbers to print them out or calculate a sum, we can loop through an array of objects and access properties or methods.
*/
// Our Person constructor
function Person(name, age){
  this.name= name;
  this.age=age;
};

// Now we can make an array of people
var family= new Array();
family[0]= new Person("alice",40);
family[1]= new Person("bob",42);
family[2]= new Person("michelle", 8);
family[3]= new Person("timmy",6);

// loop through our new array
for (var i in family){
    console.log(family[i].name);
}

