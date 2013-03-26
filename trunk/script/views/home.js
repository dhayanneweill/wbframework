var wb = window.wb || {};

wb.home = {
	init: function(){
		wb.home.render();
		wb.home.bind();
	},
	bind: function(){
	},
	render: function(data){
	    
	    document.getElementById('home').innerHTML = template.componentIndex.replace("{TITLE}","TITULO 01")
	    .replace("{TEXTONE}","Mensagem de teste Mensagem de teste Mensagem de teste Mensagem de teste Mensagem de teste Mensagem de teste " )
        .replace("{MAINLABELBTN}","Veja Mais")
 		.replace("{TITLEONE}","TITULO 02")
        .replace("{TEXTWO}","Mensagem de teste Mensagem de teste Mensagem de teste Mensagem de teste Mensagem de teste Mensagem de teste ")
 		.replace("{MAINLABELBTNTWO}","Veja Mais")
 		.replace("{TITLETWO}","TITULO 03")
        .replace("{TEXTTREE}","Mensagem de teste Mensagem de teste Mensagem de teste Mensagem de teste Mensagem de teste Mensagem de teste ")
        .replace("{MAINLABELBTNFOUR}","Veja Mais")
        .replace("{TITLETREE}","TITULO 04")
        .replace("{TEXTFOUR}"," Mensagem de teste Mensagem de teste Mensagem de teste Mensagem de teste Mensagem de teste Mensagem de teste ")
        .replace("{MAINLABELBTNFIVE}","Veja Mais")
        .replace("{FOOTER}", "@Empresa 2013");
	},
	destroy: function(){
	}	
};
window.wb = wb;
