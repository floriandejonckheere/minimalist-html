function init(){
	var comments = document.getElementsByClassName('comments');
	for (var i = 0, j = comments.length; i < j; i++) {
		comments[i].onclick = toggleComments;
	}
}

function toggleComments(article){
	var elem = document.getElementById('the_id');
	var nextElem = next(elem);
	if (nextElem)
		nextElem.style.display = 'none';

}

function addComment(){

}
function addResponse(){

}


/*
   Credit to John Resig for this function
   taken from Pro JavaScript techniques
*/
function next(elem) {
    do {
        elem = elem.nextSibling;
    } while (elem && elem.nodeType != 1);
    return elem;
}



window.onload = init;
