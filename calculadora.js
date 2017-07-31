
alert("Bem Vindo!");

function validate(){

	if(document.getElementById("numero1").value == "" && document.getElementById("numero2").value == "")
	{
		document.getElementById("empty_field").innerHTML = "<br><br>Os campos numero1 e numero2 estão vazios.<br><br>";
		return false;
	}

	if(document.getElementById("numero1").value == "")
	{
		document.getElementById("empty_field").innerHTML = "<br><br>O campo numero1 está vazio.<br><br>";
		return false;
	}

	if(document.getElementById("numero2").value == "")
	{
		document.getElementById("empty_field").innerHTML = "<br><br>O campo numero2 está vazio.<br><br>";
		return false;
	}
	
    return true;
}