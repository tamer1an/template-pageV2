var name,email;

function elemHasAttribute(elementName,attribute){
	var element = document.createElement(elementName);
	return attribute in element;
};	

function checkEmail() {
	var email = document.getElementById('email');
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!filter.test(email.value) || $.trim(email.value) == 'yourmail@domain.com') {
		email.focus;
		return false;
	} else {
		return true;
	}
}

$(function(){ //// page run
	$('noscript').remove();
	
	if(!elemHasAttribute('input','placeholder'))
		$("#main_form").placeholder();
	
	if(!elemHasAttribute('input','autofocus'))
		$('input[autofocus=true]' ).focus();
	
	if(!elemHasAttribute('input','required'))
		$("#contact-submit").click(function(e){
			e.preventDefault();
			
			var bool = 	$.trim($('#name').val())!= '' 
			&& $.trim($('#email').val())!= ''
			&& checkEmail()
			&& $.trim($('#name').val())!='at least 2 letters';
			
			if(bool){
				// alert('Validation passed');
			} else {
				alert('Please fill required fields');
			}
		});
	
	$('#name,#email,#phone').bind('change keyup',function(e){ //,#comment,#date,
		switch(e.target.id){
			case 'name':
				var trimName = $.trim(this.value);
				if(trimName=='' || trimName.length<2 || trimName=='at least 2 letters')
					$(this).addClass('bgr');
				else
					$(this).removeClass('bgr');
			break;
			case 'email':
				if($.trim(this.value)==''||!checkEmail())
					$(this).addClass('bgr');
				else
					$(this).removeClass('bgr');
			break;
			case 'phone':
				if(!(parseInt(this.value[this.value.length-1])>=0 && this.value.length <= 11))
					this.value = this.value.substr(0,this.value.length-1);
			break;
		}
	});
});		


// UTIL FUNCTIONS
//Include js files function
function include(file,scriptStack) {
	var script = document.createElement('script');
	script.src = file;
	script.type = 'text/javascript';
	
	if(scriptStack == 'async' && elemHasAttribute('script','async'))
		script.async = true;
	else if(scriptStack == 'defer')
		script.defer = true;
		
	document.getElementsByTagName('head')[0].appendChild(script);
	debuggStack({'msg':'script.js(47): include '+file});
};	

//Include js file with callback function
function includeWithCallBack(file, callback) {
	var script = document.createElement('script');
	script.src = file;
	script.type = 'text/javascript';
	document.getElementsByTagName('head')[0].appendChild(script);
		
	script.onreadystatechange = function() {
		if(script.readyState == "complete" || script.readyState=="loaded") {
			script.onreadystatechange = false;
			callback;
		} else {
			script.onload = function() {
			callback;
			};
		}
	};
};

// Placeholders
(function($){  
  $.fn.placeholder = function(){   
    function valueIsPlaceholder(input){
      return ($(input).val() == $(input).attr("placeholder"));
    }
    return this.each(function() {  
      $(this).find(":input").each(function(){
        if($(this).attr("type") == "password"){ 
          
          var new_field = $("<input type='text'>");
          new_field.attr("rel", $(this).attr("id"));
          new_field.attr("value", $(this).attr("placeholder"));
          $(this).parent().append(new_field);
          new_field.hide();
          
          function showPasswordPlaceHolder(input){
            if( $(input).val() == "" || valueIsPlaceholder(input) ){ 
              $(input).hide();
              $('input[rel=' + $(input).attr("id") + ']').show();
            };
          };
          
          new_field.focus(function(){
            $(this).hide();
            $('input#' + $(this).attr("rel")).show().focus();
          });

          $(this).blur(function(){ showPasswordPlaceHolder(this);  });
          showPasswordPlaceHolder(this); 
        
        }else{
   		  function showPlaceholder(input, reload){
            if( $(input).val() == "" || 
              ( reload && valueIsPlaceholder(input) ) ) 
                $(input).val($(input).attr("placeholder"));
          };
          
          $(this).focus(function(){
			if($(this).val() == $(this).attr("placeholder"))  $(this).val("");
          });

          $(this).blur(function(){ showPlaceholder($(this), false) });
          showPlaceholder(this, true); 
        };
      });
	  
      $(this).submit(function(){  
        $(this).find(":input").each(function(){
          if($(this).val() == $(this).attr("placeholder"))
            $(this).val("");
        });
      });
      
    });  
  };
})(jQuery); 