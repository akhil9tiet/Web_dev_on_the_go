/*
Although we cannot directly access private variables from outside the class, there is a way to get around this. We can define a public method that returns the value of a private variable.
*/
function Person(first,last,age) {
   this.firstname = first;
   this.lastname = last;
   this.age = age;
   var bankBalance = 7500;
  
   this.getBalance = function() {
      // your code should return the bankBalance
      return bankBalance;
   };
}

var john = new Person('John','Smith',30);
var myBalance= john.getBalance();

// create a new variable myBalance that calls getBalance()
console.log(myBalance);
console.log(john.bankBalance);