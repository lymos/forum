/**
* forum admin js
*/
function admin(){
	this.config = {
		base_url: 'http://localhost/forum/backend/web/index.php?r='
	};
};

/**
* menu click bind
* @param obj Html Obj
*/
admin.prototype.bindMenuClick = function(){
	var controller = $(this).attr('c');
	var view = $(this).attr('v');
	var action = $(this).attr('a');
	if(! A){
		var A = new admin();
	}
	A.loadHtml(controller, view, action);
};

/**
 * bind form submit class
 */
admin.prototype.bindSubmitClick = function(){
	var form = $(this).parents('form');
	var action = form.attr('action');
	var method = form.attr('method') ? form.attr('method').toUpperCase() : '';
	var form_data = form.serialize();
	if(method == 'GET'){
		$.getJSON(action, form_data, admin.submitCallback);
	}else if(method == 'POST' || ! method){
		$.ajax({
			url: action,
			type: method,
			data: form_data,
			success: admin.submitCallback
		});
	}
}

/**
 * form after submit callback function
 */
admin.prototype.submitCallback = function(data){
	log(data);
}

/**
* load html content
* @param controller Controller File Name
* @param view View File Name
* @param action Action Name
* @param obj Html Obj 
*/
admin.prototype.loadHtml = function(controller, view, action, obj){
	if(! action){
		var action = 'fetch';
	}
	if(! obj){
		var obj = '.right .content';
	}	
	var url = this.config.base_url + controller + '/' + action;
	$(obj).load(url, 'view=' + view, this.afterLoadHtml);
};

admin.prototype.afterLoadHtml = function(){
	$('.submit').bind('click', A.bindSubmitClick);
}

function goToPage(view){
}

function log(cont){
	console.log(cont);
}

// dom ready
$(document).ready(function(){
	A = new admin();
	$('.menu-item').bind('click', A.bindMenuClick);
	//$('.submit').bind('click', A.bindSubmitClick);
});
