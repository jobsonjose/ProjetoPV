function numeroSiape(){
	var i =document.getElementById("tipos");
	if (i.value == 'professor' || i.value == 'servidor') {
		document.getElementById('professor').style.display = 'block';
		document.getElementById('aluno').style.display = 'none';
	}else{
		document.getElementById('aluno').style.display = 'block';
		document.getElementById('professor').style.display = 'none';
	}
}
function validar(){
	var SIAP = formuser.SIAP.value;
	var CPF = formuser.CPF.value;
	if(document.getElementById('professor').style.display == 'block'){
		if(SIAP == ''){
			formuser.CPF.value = null;
			alert("Preencha o Campo com seu SIAP!");
			document.getElementById('professor').style.display = 'block';
			formuser.SIAP.focus();						
			return false;						
		}if(SIAP.length != 7){
			alert("SIAP inválido,Tente Novamente!");
			formuser.SIAP.value = null;
			formuser.SIAP.focus();
			return false;
		}
	}else{
	if(CPF == ''){
		formuser.SIAP.value = null;
		alert('Preencha o Campo com seu CPF!');
		document.getElementById('aluno').style.display = 'block';	
		formuser.CPF.focus();
		return false;
	}if(CPF.length != 11) {
		alert("CPF inválido,Tente Novamente!");
		formuser.CPF.value = null;
		formuser.CPF.focus();
		return false;
		}
	}
}					