var bob = {
    firstName: "Bob",
    lastName: "Jones",
    phoneNumber: "(650) 777-7777",
    email: "bob.jones@example.com"
};

var mary = {
    firstName: "Mary",
    lastName: "Johnson",
    phoneNumber: "(650) 888-8888",
    email: "mary.johnson@example.com"
};

var contacts = [bob, mary];
var contactsLength= contacts.length;
function printPerson(person) {
    console.log(person.firstName + " " + person.lastName);
};

function search(lastName){
    for (var i =0; i<contactsLength;i++){
        if(contacts[i].lastName == lastName){
            printPerson(contacts[i]);
        }
    }
};

function list() {
    contactsLength= contacts.length;
	for (var i = 0; i < contactsLength; i++) {
		printPerson(contacts[i]);
	}
};

function add(firstName, lastName, email, phoneNumber){
    newContact = {
        firstName: firstName,
        lastName: lastName,
        email: email,
        phoneNumber: phoneNumber
    }
    contacts[contacts.length] = newContact;
    
};

add("Akhil", "Gupta","agog@gmail.com","444435555");
list();