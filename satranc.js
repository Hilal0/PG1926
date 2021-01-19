var tablo = document.getElementById("table");
var tablotd = [];
var tablotr = [];
var buton = [];
var hlist = ["A","B","C","D","E","F","G","H"];
var slist = ["8","7","6","5","4","3","2","1"];
document.body.appendChild(tablo);
function onClik(a){
    var x = document.getElementById("h2");
    x.innerHTML = a;
}
for (let i = 0; i < 9; i++) {
    tablotr[i] = tablo.appendChild(document.createElement("tr"));
    for (let a = 0; a < 9; a++) {
        tablotd[a] = document.createElement("td");
        tablotr[i].appendChild(tablotd[a]);
    }
    for (let j = 0; j < 9; j++) {
            buton[j] = document.createElement("button");
            tablotd[j].appendChild(buton[j]);
            buton[j].innerHTML = "‏‏‎";
            buton[j].setAttribute("class","buton");
    }
    for (let e = 1; e < 9; e++) {
        for (let f = 1; f < 9; f++) {
            if (i+1 == 9-f) {
                buton[e].setAttribute("id",hlist[e-1]+slist[8-f]);
                buton[e].setAttribute("onclick","onClik("+"'"+hlist[e-1]+slist[8-f]+"'"+")");
                if ((e % 2 == 1 && f % 2 == 1) || (e % 2 == 0 && f % 2 == 0)) {
                    buton[e].setAttribute("class","yesil");
                }
                else{
                    buton[e].setAttribute("class","beyaz");
                }
            }
                        
        }
    }
    for (let c = 0; c < 8; c++) {
        if (i == 8) {
            buton[c+1].innerHTML = hlist[c];
        }
                
    }
    for (let d = 0; d < 8; d++) {
        if (d == i) {
            buton[0].innerHTML = slist[d];
        }
    }
}
