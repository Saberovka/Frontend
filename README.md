Bot для YA

// ==UserScript==
// @name         YA Bot
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  try to take over the world!
// @author       Saberova Nataly
// @match        https://yandex.ru/*
// @grant        none
// ==/UserScript==

let keywords = ["товары и игрушки для детей" , "игрушки с доставкой по Москве" , "интернет магазин детских товаров"];
let keyword = keywords[getRandom(0, keywords.length)];


let inputtag= document.getElementsByName("text")[0];
inputtag.value  = keyword;

let btn=document.querySelectorAll("button")[0];

let links=document.links
console.log("btn= ",btn);
if(btn !== undefined){
    btn.click();
}
console.log(links)
for (let i=0;i<links.length;i++){
    if (links[i].href.includes("detmir.ru")){
        let link = links[i];
        console.log ("Найдена строка" + links[i])
        link.click();
        break;

    }
}
function getRandom(min, max) {
  return Math.floor(Math.random() * (max - min) + min);
}
