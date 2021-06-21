function addItemToList(number) {
	$("#"+number).append('<li ><textarea oncontextmenu="return false;" class="drag-item drag-textarea">New Item!</textarea><input style="margin-left:10px;" type="file" id="myFile" name="filename"></li>');
}

function addItemToListAsStudent(number) {
	$("#"+number).append('<li class="drag-item">New Item!</li>');
}
