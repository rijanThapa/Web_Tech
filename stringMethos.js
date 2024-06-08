var text = "This is my first javascript class";
//print the lenth of string
console.log("the lenght of text is: ", text.length);
//print the char at index 2
console.log("the char at index 2 is: ", text.charAt(2));
//print the unicode at index 5
console.log("the unicode at index 5 is: ", text.charCodeAt(5));
//remove the white space
console.log("the white space removed is: ", text.trim());
// print the string at index 6
console.log("the string at index 6 is: ", text.at(6));
//slice the sting between 1 to 3
console.log("the sliced string is: ", text.slice(1, 3));
//print the substring between index 1 to 3
console.log("the substring is: ", text.substring(1, 3));
//print the upper of string at index 0
console.log("the upper case is: ", text.toUpperCase(0));
// remove white only on right side
console.log("the white space removed is: ", text.trimEnd());
//replace the e by c
console.log("the replaced string is: ", text.replace("t", "e"));
//split the sting after remove wite space
console.log("the splited string is: ", text.split(" "));
