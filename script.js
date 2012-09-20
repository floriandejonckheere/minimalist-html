function init(){
	var comments = document.getElementsByClassName('comments');
	for (var i = 0, j = comments.length; i < j; i++) {
		comments[i].onclick = toggleComments;
	}
}

function toggleComments(article){

}

function addComment(){

}
function addResponse(){

}
window.onload = init;
