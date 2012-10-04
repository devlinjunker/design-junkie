function $_GET(q,s) { 
	s = s ? s : window.location.search; 
	var re = new RegExp('&'+q+'(?:=([^&]*))?(?=&|$)','i'); 
	return (s=s.replace(/^\?/,'&').match(re)) ? (typeof s[1] == 'undefined' ? '' : decodeURIComponent(s[1])) : undefined; 
} 

$(document).ready(function(){
	
	var query = $_GET('query').toLowerCase();
	var found = false;
	
	$('#content li').each(function(){
		if( $(this).html().toLowerCase().indexOf(query) == -1 ){
			$(this).remove();
		}else{
			found = true;
			
			if( $(this).is("#projectlist li") ){
				$("#projects").removeClass('hidden');
			}else if( $(this).is("#lablist li") ){
				$("#labs").removeClass('hidden');
			}else{
				alert('hi');
			}
		}
	});
	
	if(!found){
		$('#noresults').removeClass('hidden');
	}
});