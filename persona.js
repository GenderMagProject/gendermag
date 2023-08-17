/*
 * Filename: persona.js
 * Functions: dropdown, changeColor, yearinput, empinput, placeinput, paraone,
 *            backparaoneip, Noune, objpro, possadj, posspro, Reflexive,
 *            printDiv, reloadtext
 * Description: Manage dropdown selections, input values, text color changes, 
 *              printing specific sections of the page,and page reloading. 
 */

/*
 * Function: dropdown
 * Description: Handles the dropdown selection event and displays the corresponding section.
 * Params: None
 */
function dropdown(){
  console.log("in function");
  var e = document.getElementById("persona-name-dropdown");
  var myVal = e.options[e.selectedIndex].value;  // Get the selected value from the dropdown 
  console.log(myVal);
  const personaSections = document.getElementsByClassName('persona-section');
  for (const section of personaSections) {
    section.style.display = 'none';  // Hide all persona sections by default
  }
  document.getElementById(myVal).syle.display = 'block';  // Display the selected persona section
}

/*
* Function: changeColor
* Description: Changes the text color of an element.
* Params: section - ID of the element to change color for
*/
function changeColor(section) {
  var elem = document.getElementById(section);
  elem.style.color = "#1E57C8";
}

/*
* Function: yearinput
* Description: Handles year input and displays it on the page.
* Params: None
*/
function yearinput() {
  var yearvalue = document.getElementById("year").value;
  document.getElementById("yearoutput").innerHTML = yearvalue;
  changeColor("year");
}

/*
* Function: empinput
* Description: Handles employee input and displays it on the page.
* Params: None
*/
function empinput() {
  var empvalue = document.getElementById("emp").value;
  document.getElementById("empoutput").innerHTML = empvalue;
  changeColor("emp");
}

/*
* Function: placeinput
* Description: Handles place input and displays it on the page.
* Params: None
*/
function placeinput() {
  var placevalue = document.getElementById("place").value;
  document.getElementById("placeoutput").innerHTML = placevalue;
  changeColor("place");
}

/*
* Function: paraone
* Description: Handles paragraph input and displays it on the page.
* Params: None
*/
function paraone() {
  var para = document.getElementById("Para1").value;
  document.getElementById("para1output").innerHTML = para;
  changeColor("Para1");
}


/*
* Function: backparaoneip
* Description: Handles input for a background paragraph and displays it on the page.
* Params: None
*/
function backparaoneip() {
  var back1 = document.getElementById("backparaone").value;
  document.getElementById("backparaoneop").innerHTML = back1;
  changeColor("backparaone");
}

/*
* Function: Noune
* Description: Handles input for a noun and displays it on the page.
* Params: None
*/
function Noune() {
  var str = document.getElementById("Nouneip").value;
  var noun = str.toLowerCase();
  changeColor("Nouneip");
  console.log("== noun: ", noun)
  if (noun == "") {
    //alert("Oops! did you forget to enter a Subjective Pronouns?");
    return false;
  }
  const nounoutputs = document.getElementsByClassName('nounoutput');
  for (const n of nounoutputs) {
    n.innerHTML = noun;
  }
}

/*
* Function: objpro
* Description: Handles input for an object pronoun and displays it on the page.
* Params: None
*/
function objpro() {
  changeColor("Objpro");
  var str1 = document.getElementById("Objpro").value;
  var obpr = str1.toLowerCase();
  if (obpr == "") {
    //alert("Oops! did you forget to enter an Object Pronouns?");
    return false;  // If the input is empty, return false to prevent further processing
  }
  const obproutputs = document.getElementsByClassName('obproutput');
  for (const o of obproutputs) {
    o.innerHTML = obpr;
  }  
}

/*
* Function: possadj
* Description: Handles input for a possessive adjective and displays it on the page.
* Params: None
*/
function possadj() {
  changeColor("Pos.adj");
  var str2 = document.getElementById("Pos.adj").value;
  var poad = str2.toLowerCase();
  if (poad == "") {
    //alert("Oops! did you forget to enter a Possessive Adjective?");
    return false;
  }
  const poadoutputs = document.getElementsByClassName('poadoutput');
  for (const p of poadoutputs) {
    p.innerHTML = poad;
  }
}

/*
* Function: posspro
* Description: Handles input for a possessive pronoun and displays it on the page.
* Params: None
*/
function posspro() {
  changeColor("Pos.pro");
  var popro = document.getElementById("Pos.pro").value;
  if (popro == "") {
    //alert("Oops! did you forget to enter a Possessive Pronouns?");
    return false;
  }
   /* not defined*/     document.getElementById("Reflexive").innerHTML = popro;
   document.getElementById("Reflexive1").innerHTML = popro;
}

/*
* Function: Reflexive
* Description: Handles input for a reflexive pronoun and displays it on the page.
* Params: None
*/
function Reflexive() {
  changeColor("ref");
  var str3 = document.getElementById("ref").value;
  var refl = str3.toLowerCase();
  if (refl == "") {
    //alert("Oops! did you forget to enter a Reflexive?");
    return false;
  }
  const refloutputs = document.getElementsByClassName('refloutput');
  for (const r of refloutputs) {
    r.innerHTML = refl;
  }
}

/*
* Function: printDiv
* Description: Prints a specific section of the page.
* Params: None
*/
function printDiv() {  
  var printbody = document.getElementById("printbody");
  var printbodyClone = printbody.cloneNode(true);
  var entirepage = document.getElementById("entirepage");
  entirepage.style.display = 'none';
  entirepage.after(printbodyClone);
  window.print();
  printbodyClone.remove();
  entirepage.style.display = 'block';
  return false;
}

/*
* Function: reloadtext
* Description: Reloads the page.
* Params: None
*/
function reloadtext() {
  location.reload();
}