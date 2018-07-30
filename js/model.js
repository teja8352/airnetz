// When the user clicks the button, open the modal 
function dis(idd) 
{
	document.getElementById('pack').value = idd;
	document.getElementById("pack").readOnly = true;
	document.getElementById('id01').style.display='block';
}

// When the user clicks on <span> (x), close the modal
function clos() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}