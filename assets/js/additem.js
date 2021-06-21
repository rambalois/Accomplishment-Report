function addItemToList(number) {
	$("#"+number).append('<li class="drag-item drag-textarea"><textarea style="height:60px;width:100%;" oncontextmenu="return false;"></textarea><input style="margin-left:10px;" type="file" id="myFile" name="filename"></li>');
}

function addItemToListAsStudent(number) {
	$("#"+number).append('<li class="drag-item">New Item!</li>');
}
