function calc_total(){
	var dataDeNascimento = document.getElementById('inputNascimento').value;
    var data = new Date(dataDeNascimento);
    var ano = data.getFullYear();

    var dataAgora = new Date();
    var anoAgora = dataAgora.getFullYear();
    var idade = anoAgora-ano;
    document.getElementById('inputIdade').value = idade;
}
 
function adicionar(){
    
}

function imprimir(){
	window.print();
}