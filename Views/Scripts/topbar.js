function toggleBar(){
    let hideable = document.getElementById("hideable");
    if(hideable.style.display != "block"){
        hideable.style.display = "block";
    }else{
        hideable.style.display = "none";
    }
}