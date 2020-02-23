function getDetailInfo(id){
    var x = document.getElementsByClassName("application-result");
    for(i=0;i<x.length;i++){
        x[i].style.display="none";
    }
    var y = document.getElementById("app-result-"+id);
    if (y.style.display === "none") {
        y.style.display = "flex";
    } else {
        y.style.display = "none";
    }
}