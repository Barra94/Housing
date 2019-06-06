var oTab = document.getElementById('tab');
var oLis = oTab.getElementsByTagName('li');
var oDivs = oTab.getElementsByTagName('div');

for (var i = 0; i < oLis.length; i++) {
  var oLi = oLis[i];
  oLi.n = i;

  oLi.onclick = function () {

    for (var j = 0; j < oDivs.length; j++) {

      oLis[j].className = '';
      oDivs[j].className = '';
    }

    this.className = "s";
    oDivs[this.n].className = "s";
  };
}