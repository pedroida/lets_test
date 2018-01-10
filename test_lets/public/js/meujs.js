 function apagar(url){
 	if(confirm("Deseja realmente apagar?")){
 		location = url;
 	}
 }

$(function () { //ready
    $(".preco").maskMoney({showSymbol:true, symbol:"R$", decimal:",", thousands:"."});
});

