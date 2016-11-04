$("#cgv").change(function() {
    if(this.checked) {
        document.querySelector('#bouton-stripe').style.display = 'block'
    } else {
        document.querySelector('#bouton-stripe').style.display = 'none'
    }
});
