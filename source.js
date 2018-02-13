function addUser() {
	
	var name = $('#name').val().trim();
    var phone = $('#phone').val().trim();

        $.ajax({
	        type: 'POST',
	        url: 'app.php',
	        data: {
	            name:name,
	            phone:phone,
        	},
          
        success: function(result){
            console.log(result);
            alert("запись добавлена");
        },
        
		error:  function(str, xhr){
	    	alert('Error: ' + xhr.responseCode);
          }

        });
};