/* Spørsmål til denne css'en kan stillest til meg på mail eller på diskusjon
på mitt.uib.no, jeg har ikke tid til å kommentere hele nå.*/
body {
  height: 100%;
  width: 100%;
  margin: 0 auto;
  max-width: 1080px;
  background-color: #e8f1f2;
}

header img {
  max-width: 100%;
  height: auto;
  display: block;
  position: relative;
  margin: 0 auto;
  text-align: center;
}

nav {
  background-color: #006494;
  overflow:auto;
  text-align: center;
  margin-left: 2em;
  margin-right: 2em;
  height: auto;
}

nav a {
  display: inline-block;
  color: white;
  padding: 1em 1.5em;
  text-decoration: none;
  border-right: 1px solid #bbb;
}

nav a:last-of-type {
  border-right: none;
}

nav a:hover {
  background-color: #111;
}
main {
  margin-top: 2em;
  margin-bottom: 5em;
  margin-left: auto;
  margin-right: auto;
  width: 90%;
}

main h1 {
  margin-left: 10%;
}

section.evaluation, .registration {
  width: 60%;
  margin-left: auto;
  margin-right: auto;
  padding-bottom: 3em;
  padding-top: 1em;
  border-bottom: solid 1px black;
}
section.result, .index{
  width: 60%;
  margin-left: auto;
  margin-right: auto;
  padding-bottom: 1em;
  border-bottom: solid 1px black;
}
section:last-of-type {
  border-bottom: none;
}

form input[type!="radio"] {
  margin-top: 1em;
  float: left;
}

form input[name~="search"] {
  margin-right: 1em;
}
form input[type~="text"],[type~="number"]{
  width: 50%;
  min-width: 120px;
  display: inline-block;
  clear: both;
}
textarea {
  box-sizing: border-box;
  width: 100%;
  margin-top: 1em;

}
form input.register{
  float: right;
}
form input.evalButton {
  float: left;
}
form select.evalSelect {
  float: left;
  width: 20%;
  height: auto;
  margin-right: 1em;
}
#job1Info, #job2Info, #job3Info{
  display: none;
}
button[name="newJobButton"] {
  margin-top: 2em;
}
footer {
  position: fixed;
  bottom: 0px;
  max-width: 1080px;
  width: 90%;
  margin-left: 2em;
  margin-right: 2em;
  background-color: #006494;
  text-align: center;
  height: auto;
}
footer p {
  display: block;
}
footer a {
  margin-left: 1em;
  color: lightblue;
}
footer a:hover {
  color: white;
}
@media screen and (max-width: 530px) {
  header img {
    display: none;
  }
  header nav {
    width: 85%;
    height: auto;
  }
  main h1 {
    display: none;
  }
  header nav a {
    display: list-item;
    list-style-type: none;
    margin-left: auto;
    margin-right: auto;
    border-bottom: solid 1px black;
  }
  header nav a:last-of-type {
    border-bottom: none
  }
  form input.register {
    float: left;
    clear: both;
  }
  form input[type="radio"] {
    height: 50%;
    width: auto;
  }
  footer {
    float: none;
  }
}
