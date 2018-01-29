<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
var clipboard = new Clipboard('.copyUrl');
               
                $('.copyUrl').on('click',function() {
                    var $input = $('#copyIos');
                    $input.val(share_url);
                    if (navigator.userAgent.match(/ipad|ipod|iphone/i)) {
                        clipboard.on('success', function(e) {
                            e.clearSelection();
                            $.sDialog({
                                skin: "red",
                                content: 'copy success!',
                                okBtn: false,
                                cancelBtn: false,
                                lock: true
                            });
                            console.log('copy success!');
                        });
                    } else {
                        $input.select();
                    }
                    //document.execCommand('copy');
                    $input.blur();
                });
</script>
<input id="copyIos" type="hidden" value="">
<a href="javascript" class="copyUrl">copy</a>
