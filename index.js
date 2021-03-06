var nomeInp = document.getElementById("nomeInp");
var emailInp = document.getElementById("emailInp");
var descInp = document.getElementById("txtInp");
var subBtn = document.getElementById("subBtn");
console.log("Initializing...");

subBtn.onclick = () => {
    var nm = nomeInp.value;
    var em = emailInp.value;
    var dc = descInp.value;
    if (nm != '' && em != '' && dc != '') {
        console.log(nm, em, dc);
        var url = document["location"].origin + "/mailer.php?nome=" + nm + "&email=" + em + "&texto=" + dc + "&submit=true"
        fetch(url).then((res) => { return res.text() }).then((res) => {
            console.log(res);
            console.log(url)
            document.getElementById("notification").hidden = false;
        });
    } else {
        var alert = htmlToElement('<div class="alert alert-danger selectDisable" role="alert">Prencha todos os campos!<div>')
        contHolder.prepend(alert);
        setTimeout(() => {
            contHolder.removeChild(contHolder.children[0]);
        }, 5 * 1000);
    }
}
