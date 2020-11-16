function calculate() {
    document.getElementById('message').innerHTML = "";

    var myTab = document.getElementById('score');
    let index = document.getElementById('result').cellIndex;
    var res = 0;

    for (let i = 1; i < myTab.rows.length - 1; i++) {
        const objCells = myTab.rows.item(i).cells;


        for (let j = index; j <= index; j++) {
            res = res + stripPercent(objCells.item(j).innerHTML);

            //message.innerHTML = message.innerHTML + ' ' + res.innerHTML;
        }

        message.innerHTML = "Well Done!";
    }

    res = res / 3; //87 + 78 + 81 = 264 / 3 = 82% 
    //alert("AVG: " + res);
    document.getElementById('avg').innerHTML = res + "%";
}

function stripPercent(raw) {
    return parseInt(raw.toString().replace(/D/g, ''));
    //.replace(/D/g, '');
    //.replace(/.*\$/, '')
}