$(document).ready(function(){
	selesai();
});

function selesai(){
	setTimeout(function(){
		update();
		selesai();
	}, 200);
}

function update(){
	$.getJSON("<?=site_url('home/data_schedule');?>", function(data){
		$("ul").empty();
		$.each(data.result, function(){
			$("ul").append("<li>"+this['name']+"</li>");
		});
	});
}