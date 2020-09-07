'use strict';

const delegate = function (cssClass, myfunction) {
  return function (event) {
    // delegate code hier 
    if (event.target.matches(cssClass)) {
      myfunction(event);
    }
  };
};

// import von variabeln (const oder let)

const toDos = document.querySelector('.list');
const textfield = document.querySelector('.input__textfield');
const formular = document.querySelector('.input__line');
let list = [];
let ToDosFromStorage = localStorage.getItem('toDos');

if (ToDosFromStorage) {
  list = JSON.parse(ToDosFromStorage);
} else {
  list = ['Desinfektionsmittel', 'Mundschutz'];
} // Listen kreieren mit Render Ansatz:


function renderList() {
  toDos.innerHTML = ''; // alte Liste löschen resp. leeren  

  list.forEach(function (toDo, i) {
    let newLi = document.createElement('li'); // Neues Element (li) erzeugen    

    newLi.innerHTML = ` <div class="list__checkbox">
                            <input type="checkbox" class= "list__checkmark" id="${toDo}">
                            <label class="list__label" for="${toDo}"></label>
                        </div>
                        <div class="list__item-name">
                            ${toDo}
                        </div>
                        <div class="list__delete">
                            <img src="images/cross.svg" alt="button to delete">
                        </div> `;
    newLi.id = i; //ID setzen [i = index] > später wichtig fürs löschen!

    newLi.classList.add("list__item");
    toDos.appendChild(newLi); //Element hinzufügen
  });
} // Lösch-Button (um Listenelemente wieder zu löschen) > mit module delegate


toDos.addEventListener('click', delegate('.list__delete img', function (event) {
  let li = event.target.parentNode.parentNode; //img > div (list__delete) > li (list__item)

  li.parentNode.removeChild(li);
  let getID = li.id; //ID geben

  list.splice(getID, 1); //diese ID löschen

  renderList();
  saveList();
})); //Check oder Uncheck mit Toggeln > mit module delegate

toDos.addEventListener('click', delegate('.list__checkmark', function (event) {
  let itemChecked = event.target.parentNode.parentNode;
  itemChecked.classList.toggle('list__item--checked');
  saveList();
})); // Textfeld-Eingabe und Erstellen von li

formular.addEventListener('submit', addToList);

function addToList(event) {
  event.preventDefault(); // Dies braucht es, da der button mit type=submit gemacht ist. Beim klickt blubberts bis zum formular hoch und kann nicht abgesendet werden. mit dem preventDefault unterbricht mans.

  list.push(textfield.value); // Wird zur Liste hinzugefügt (push)

  textfield.value = ""; // Wert in Textfeld wird angesteuert

  saveList();
  renderList(); // Mit dieser Funktion wird das li erstellt
} // Hoch-Button (Element nach oben verschieben)
// Unten-Button (Element nach unten verschieben)
//speichern im LocalStorage


function saveList() {
  localStorage.setItem('toDos', JSON.stringify(list));
} // Liste erstellen


renderList();
