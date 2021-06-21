function addItemToList(number) {
	$("#"+number).append('<li ><textarea oncontextmenu="return false;" class="drag-item drag-textarea">New Item!</textarea><input type="file" id="myfile" name="myfile"></li>');
}

function addItemToListAsStudent(number) {
	$("#"+number).append('<li class="drag-item">New Item!</li>');
}
