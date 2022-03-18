function dropdown(){
  console.log("in function");
  var e = document.getElementById("persona-name-dropdown");
  var myVal = e.options[e.selectedIndex].value;
  console.log(myVal);
  const personaSections = document.getElementsByClassName('persona-section');
  for (const section of personaSections) {
    section.style.display = 'none';
  }
  document.getElementById(myVal).syle.display = 'block';
}

function changeColor(section) {
  var elem = document.getElementById(section);
  elem.style.color = "#1E57C8";
}

function yearinput() {
  var yearvalue = document.getElementById("year").value;
  document.getElementById("yearoutput").innerHTML = yearvalue;
  changeColor("year");   
}

function empinput() {
  var empvalue = document.getElementById("emp").value;
  document.getElementById("empoutput").innerHTML = empvalue;
  changeColor("emp");
}

function placeinput() {
  var placevalue = document.getElementById("place").value;
  document.getElementById("placeoutput").innerHTML = placevalue;
  changeColor("place");
}

function paraone() {
  var para = document.getElementById("Para1").value;
  document.getElementById("para1output").innerHTML = para;
  changeColor("Para1");
}

function backparaoneip() {
  var back1 = document.getElementById("backparaone").value;
  document.getElementById("backparaoneop").innerHTML = back1;
  changeColor("backparaone");
}

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

function objpro() {
  changeColor("Objpro");
  var str1 = document.getElementById("Objpro").value;
  var obpr = str1.toLowerCase();
  if (obpr == "") {
    //alert("Oops! did you forget to enter an Object Pronouns?");
    return false;
  }
  const obproutputs = document.getElementsByClassName('obproutput');
  for (const o of obproutputs) {
    o.innerHTML = obpr;
  }  
}

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

function reloadtext() {
  location.reload();
}

