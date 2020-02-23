function switchAppType(id){
    var x = document.getElementsByClassName("apanel-container");
    for(i=0;i<x.length;i++){
        x[i].style.display="none";
    }
    if(x[id].style.display === "none"){
        x[id].style.display = "block";
    }
    else {
        x[id].style.display = "none";
    }

}