$(document).ready(function() {
	$('button#submit').click(function() {
		// Creates new items in the list using jQuery
		var title = $('input#title').val();
		var description = $('input#description').val();
		$('ul#todos').prepend("<li>" +
								"<label class='checkbox inline'>" +
									"<input type='checkbox' name='task-check' class='task-check' value='" + title + "'>" +
									"<span class='list-title'><strong>" + title + "</strong></span>" +
									"</label>" +
								"<p class='list-description'>" + description + "</p>" +
							   "<p class='meta'><a href='#' class='remove-task'>Delete task?</a></p></li>"
		).hide().fadeIn("slow"); // hide it so it can fade in
		$("form#todo")[0].reset();
		// Allow removal of tasks
		$('a.remove-task').click(function() {
				var removable_task = $(this).parent().parent();
				removable_task.animate({ // animation to disappear
					opacity: 0.25,
					width: 0,
					height: 0
				},{
					complete: function() {
						removable_task.remove();
					}
				});
				return false;
		});
		$('input.task-check').unbind("click");
		$('input.task-check').click(function() {
			var task = $(this).parent().parent(); // make class of li checked
			task.toggleClass('checked'); 
		});
		return false;
	});
	$( "#todos" ).sortable({
		placeholder: "placeholder-highlight"
	});
	$( "#todos" ).disableSelection();
});

