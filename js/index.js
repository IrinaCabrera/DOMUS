function funcion(){
    document.getElementById("demo").style.display = "none";
    document.getElementById("ver").style.display = "block";

}     

function redireccionar(){
    if(document.getElementById("exampleInputPassword1").value === "1234"){
        document.getElementById("redSecr").href = "http://localhost/DOMUS/components/indexSecretaria.php#"
    }
}