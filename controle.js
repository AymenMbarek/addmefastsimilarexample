var buttonstate=0;
function onoff(element)
{
  buttonstate= 1 - buttonstate;
  var blabel, bstyle, bcolor;
  if(buttonstate)
  {
    blabel="on";
    bstyle="green";
    bcolor="lightgreen";
  }
  else
  {
    blabel="off";
    bstyle="lightgray";
    bcolor="gray";
  }
  var child=element.firstChild;
  child.style.background=bstyle;
  child.style.color=bcolor;
  child.innerHTML=blabel;
}