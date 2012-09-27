function init(){
	var comments = document.getElementsByClassName('comments');
	for (var i = 0, j = comments.length; i < j; i++) {
		comments[i].onClick = function(){ toggleComments(this.id); }
	}
}

function toggleComments(article){
	var elem = document.getElementById(article);
	var nextElem = next(elem);
	if (nextElem)
		alert(nextElem.id);

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
