$(function() {
	$('.delete-role').on('click', function(e) {
		var role = $(this).attr('href').replace('#', '');
		var conf = confirm('Are you sure you want to delete this role ?');
		if (conf) {
			$.post('', {action: 'delete_role', role:role});
			$(this).parent().parent().remove();
		}
		e.preventDefault();
	});
});

function confirmDeleteUser(user_id, username) {
	$('#deleteUserModal #delete_user_id').val(user_id);
	$('#deleteUserModal #username').text(username);
	$('#deleteUserModal').modal('show');
}

function deleteUser(user_id) {
	$.post('', {action: 'delete_user', user_id: user_id});
	$('#users [data-id="'+user_id+'"]').parent().remove();
	$('#deleteUserModal').modal('hide');
}

function composeEmail(email) {
	if (email)
		$('#composeModal #to').val(email);
	$('#composeModal').modal('show');
}
function sendEmail() {
	var to = $('#to'),
		subject = $('#subject'),
		message = $('#message');

	if (to.val().length <= 0) 
		to.focus();
	else if (subject.val().length <= 0) 
		subject.focus();
	else if (message.val().length <= 0) 
		message.focus();
	else {
		$.post('index.php?page=send_email', {to: to.val(), subject: subject.val(), message : message.val()});
		$('#composeModal').modal('hide');
		to.val('');
		subject.val('');
		message.val('');
	}
}