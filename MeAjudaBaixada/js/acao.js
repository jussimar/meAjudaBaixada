$(function(){
	$("#tabela").hide();
	$("#listagem").change(function(){
		if($("#listagem").val() != "EUC"){
			$("#tabela").show();
		} else {
			$("#tabela").hide();
		}
	})

	let d = $("[id^='dd']").length;;
	$("#mais").click(function(){
		d++;
		$("#dependentesss").append(`<div id="dd${d}"><input class="form-control border-purple" placeholder="Nome do dependente" type="text" name="nm_dependente"><br><input class="form-control border-purple" type="date" name="dt_nascimento"><br><input placeholder="CPF do dependente" class="form-control border-purple" type="number" name="cd_cpf"><br></div>`)
	})
	$("#menos").click(function(){
		$("[id^='dd']:last-child").remove()
	})
})