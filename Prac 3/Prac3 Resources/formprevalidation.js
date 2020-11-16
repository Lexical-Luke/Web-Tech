function isEmpty(inputField) {
    if (inputField.type == "checkbox") {
        if (inputField.checked)
            return false;
        return true;
    }
    if (inputField.value == "") {
        return true;
    }
    return false;
}

function highlightEmpty(div) {
    div.style.backgroundColor = "#AA0000";
    div.parentNode.style.backgroundColor = "#AA0000";
    div.parentNode.style.color = "#FFFFFF";
}

function clearFilled(div) {
    div.parentNode.style.backgroundColor = "#FFFFFF";
    div.parentNode.style.color = "#000000";
}

window.onload = function() {
    var mainForm = document.getElementById("mainForm");
    var requiredFields = document.querySelectorAll(".required");
    for (var i = 0; i < requiredFields.length; i++) {
        requiredFields[i].onfocus = function() {
            this.style.backgroundColor = "#FFFFFF";
        }
    }
    mainForm.oninput = function(e) {
        var requiredFields = document.querySelectorAll(".required");
        for (var i = 0; i < requiredFields.length; i++) {
            if (isEmpty(requiredFields[i])) {
                e.preventDefault();
                highlightEmpty(requiredFields[i]);
            } else {
                clearFilled(requiredFields[i]);
            }
        }
    }
}