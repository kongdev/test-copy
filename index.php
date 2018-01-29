
<script type="text/javascript" data-cfasync="false" src="https://pantip.com/js/version/1517216209/lastest_jquery.js"></script>


<script>
$(document).ready(function(){
	$(document).on('click','#btn',function(){
		console.log('12121212');
		copyText($('#txt').val());
	})
});
function copyText(text){
  function selectElementText(element) {
    if (document.selection) {
      var range = document.body.createTextRange();
      range.moveToElementText(element);
      range.select();
    } else if (window.getSelection) {
      var range = document.createRange();
      range.selectNode(element);
      window.getSelection().removeAllRanges();
      window.getSelection().addRange(range);
    }
  }
  var element = document.createElement('DIV');
  element.textContent = text;
  document.body.appendChild(element);
  selectElementText(element);
  document.execCommand('copy');
  element.remove();
}



</script>
<input id="txt" />
<button id="btn">Copy To Clipboard</button>
