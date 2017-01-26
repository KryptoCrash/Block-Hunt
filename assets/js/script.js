$(function(){ // Starts all listeners and events on document load
	resizeAlerts();
});

function resizeAlerts() { // Resizes the alert boxes
	var heights = [$("#alert-1").height(),$("#alert-2").height()],
	height  = Math.max(heights[0], heights[1]);
	$("#alert-1").height(height);
	$("#alert-2").height(height);
	console.log(height);
}