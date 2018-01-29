<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
var copy = function(elementId) {

	var input = document.getElementById(elementId);
	var isiOSDevice = navigator.userAgent.match(/ipad|iphone/i);

	if (isiOSDevice) {
	  
		var editable = input.contentEditable;
		var readOnly = input.readOnly;

		input.contentEditable = true;
		input.readOnly = false;

		var range = document.createRange();
		range.selectNodeContents(input);

		var selection = window.getSelection();
		selection.removeAllRanges();
		selection.addRange(range);

		input.setSelectionRange(0, 999999);
		input.contentEditable = editable;
		input.readOnly = readOnly;

	} else {
	 	input.select();
	}

	document.execCommand('copy');
}
</script>
<input type="text" id="foo" value="text to copy" />
<button onclick="copy('foo')">Copy text</button>
