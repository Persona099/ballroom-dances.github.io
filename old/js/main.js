
window.onload = GetContent("main");
function GetElem(id){
  return document.getElementById(id);
}
function GetContent(id) {
      GetElem("content").innerHTML = GetElem(id).innerHTML;
}
/*
function GetContent(content){
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'content/' + content + '.html', false);
  xhr.send();
  if (xhr.status != 200) {
    alert( xhr.status + ': ' + xhr.statusText ); 
  } else {
    document.getElementById("content").innerHTML = xhr.responseText;
  }
}
*/
