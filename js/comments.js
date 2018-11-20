					
function outputComment(comment, user) {				
	document.write("<td><p class='comment'>'" + comment + "'</p><p class='user'>User: " + user + "</p></td></tr>");
}

function outputComments() {
	
	for (i = 0; i < comments.length; i++) {
		
		//Write <tr id="titles"> only for first comment
		if (i == 0) {
			document.write("<tr id ='titles'>");
		} else {
			document.write("<tr>");
		}
		//Pass Comments to function from array array
		outputComment(comments[i][0], comments[i][1]);
		
	}
}