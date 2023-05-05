function likeRate(){
    var display = document.getElementById("contentLike").style.display;
    if(display == "none")
        document.getElementById("contentLike").style.display = 'block';
    else
        document.getElementById("contentLike").style.display = 'none';

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert("Obrigado pelo seu like!");
        }
    };
    xmlhttp.open("GET", "saveLike.php", true);
    xmlhttp.send();
}