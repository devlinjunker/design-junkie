(function(){

	/* Change Page using Link Specified */
	changePage = function(pageLink){
		window.location = pageLink;

		return false;
	}

	// Storage Object that abstracts Web Storage Process
	function storageObject(){
		this.storage;
		var fail, uid;
		
		// Check if Local Storage Exists
		try{
			uid = new Date;
			(this.storage = window.localStorage).setItem(uid, uid);
			fail = this.storage.getItem(uid) != uid;
			this.storage.removeItem(uid);
			if(fail){
				this.storage = false;
			}
		}catch(e){}
		
		// Web Storage Insert Function, Saves in cooke for 10 years if localStorage not available 	
		this.insert = function(name, value){
			if(this.storage){
				this.storage.setItem(name, value);
			}else{
				var escaped_val = escape(value);
				var escaped_name = escape(name);

				var date = new Date;
				date.setDate(date.getDate()+365*10);

				var expires = "; expires="+date.toUTCString();
				document.cookie = escaped_name + "=" + escaped_val + expires + ";path=/";
			}
		}

		// Web Storage Retrieve Funciton, retrieves from cookie if localStorage not available 
		this.retrieve = function(name){
			if(this.storage){
				storedVal = this.storage.getItem(name);
				return ( storedVal ? storedVal : false ) ;
			}else{
				var escaped_name = escape(name);
				var cookie_list = document.cookie.split(";");

				for( var i = 0; i < cookie_list.length; i++ ){
					cookie_settings = cookie_list[i].split("=");
					if( cookie_settings[0].toString() == escaped_name && cookie_settings[1] != undefined){
						return cookie_settings[1];
					}
				}
				return false;
			}
		}

		// Web Storage Delete Function, deletes localStorage object or Cookie 
		this.delete = function(name){
			this.insert(name, undefined);
		}

		// Check if Storage Object or Cookie is set with specified name 
		this.isset = function(name){
			return ( this.retrieve(name) ? true : false );
		}
	}	
	
	// RSS Scraper Object That Parses RSS 
	function rssScraper(){

		this.xml;
		this.recentURL;

		this.getFeed = function(url){
			$.ajax(/* "./retrieveRSS.php" */ url,
				{dataType: "xml",
                 async: false,
				 context: this,
				 data: { url: url },
				 success: function( data ){
					//alert(data);
					this.xml = $(data);
				 },
				 error: function( jqHXR, textStatus, error){
					alert(textStatus+": "+error);
				 }
				});

			this.recentURL = url;
		}

		this.getXML = function(){
			return this.xml;
		}
	}

	var bodyId = $("body").attr('id');

	/* Run Code on Page Load based on body Id */
	if( bodyId == "cs494" ){
		$("tr[id*='assignment']").each( function(){
			var id = $(this).attr('id');
			
			$(this).on( 'click', 
				    function(){ 
					changePage("./"+id)
				    }
				  ); 
		});
	}else if( bodyId == "cs494_assignment1" ){

	}else if( bodyId == "cs494_assignment2"){
		var storer = new storageObject();
		var reader = new rssScraper();

/*
		$("#rss_form #submit").on("click", 
				  	  function(){
						var url = $("#rss_form #url_input").val(); 
						reader.getFeed( url );
						storer.insert("rssURL", url);
					   }
			 	    	 );
*/
		storer.insert("rssURL", "./websites.xml");

		if( storer.isset("rssURL") ){
			var url = storer.retrieve("rssURL");

            //alert(url);
			reader.getFeed(url);
			
			var i = 1;			
			
			var xml = reader.getXML();
			//alert(xml);
			if(xml){
				$(xml).find('website').each(function(){
                    var link = $(this).find('link').text();
                    var name = $(this).find('name').text();
					
                    $("<div id='website"+i+"'><a href='"+link+"'>"+name+" - "+link+"</a></div>").appendTo("#xml_data");
                    
                    storer.insert("website"+i, name+"|"+link);
                    i++;
				});
			}	
		} 
	}else if( bodyId == "cs494_assignment3"){
        var actorPhoto = $('#actor_photo img');

        $("#actor_table tr.actor_info").each(function(){
            var actorID = $(this).attr('data-actor-id');
            
            $(this).bind('click', function(){
                actorPhoto.removeClass("hidden").attr("src", "view-photo.php?id="+actorID);
            })
        }); 
    }

})();
