<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>

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


var txt = document.getElementById('txt');
var btn = document.getElementById('btn');
btn.addEventListener('click', function(){
  copyText(txt.value);
})
</script>
<input id="txt" />
<button id="btn">Copy To Clipboard</button>
