function validateForm() {
    var x = document.forms["myForm"]["search"].value;
    if (x.length != 6) {
        alert("Please format your search properly.");
        setFocus();
        return false;
    }
    else{
        var patt = /cs[0123][0-9][0-9][0-9]/i;
        if(!patt.test(x)){
            alert("Please format your search properly.");
            setFocus();
            return false;
        }
    }
}
function setFocus() {
    document.getElementById('search').focus();
    document.getElementById('search').value='';
}