new Clipboard('.btn');$(function(){$(".editable").each(function(i){var _this=$(this),_target=$(_this.data('target'));_this.attr('contenteditable',true);_this.html(_this.data('placeholder'));_this.on("focus",function(){if(_this.html()==_this.data("placeholder")){_this.html('');}});_this.on("blur",function(){if(_this.html()==_this.data("placeholder")||_this.html()==""){_this.html(_this.data('placeholder'));}});_this.on('keyup paste',function(){_target.val($(this).html());});_target.hide();});});$(".popover-toggle").popover({html:true});$(document).on("click","[data-dismiss=popover]",function(){$($(this).data("target")).click();});$("[data-toggle=modal]").click(function(){$($(this).data("modal")).modal();});$(".ajax").submit(function(){var _this=$(this),$type=_this.attr('method'),$action=_this.attr('action'),$data=_this.serialize();$.ajax({url:$action,type:$type,data:$data,dataType:'json',headers:{'X-CSRF-TOKEN':$("meta[name=csrf-token]").attr('content')},beforeSend:function(){$(".loader").show();_this.find(":input").attr('disabled',true);$(".preview").fadeOut();$(".pane-left").addClass("swipe");$(".pane-right").addClass("fw");},complete:function(){$(".loader").hide();_this.find(":input").attr('disabled',false);if($(document).outerWidth()<=500){$("html,body").animate({scrollTop:$("#pane-right").offset().top});}},error:function(xhr){$(".result").show();$(".result .title").html("Whoopss! There is something went wrong.");if(xhr.status==422){$(".result .msg").html(xhr.responseJSON.data);}else{$(".result .msg").html("Please try again.");}
$(".result .form-group").hide();$(".result .btn").hide();$(".pane-right .overlay").hide();},success:function(data){$(".result").show();$(".result .title").html("Yay! Your link has been arrived.");$(".result .msg").html("");$(".result .form-group").show();$(".result .btn").show();$(".result #result-link").val(data.data.link);$(".result #result-html").val(data.data.html);$(".result #qrcode-image").attr("src",data.data.qrcode);$(".result #qrcode-link-save").attr("href",data.data.qrcode_save);$(".pane-right .overlay").hide();}})
return false;});$(".close-result a").click(function(){$(".preview").fadeIn();$(".pane-left").removeClass("swipe");$(".pane-right").removeClass("fw");$(".result").fadeOut();if($("#type-link").val()=='short'){$(".pane-right .overlay").show();}
if($(document).outerWidth()<=500){$("html,body").animate({scrollTop:0});}});$(document).on("click",".reset-all",function(){$("#generator-form")[0].reset();$("#message").html("Your message here ...");$("#number").html("+1234567");$(".popover-toggle#reset-pop").click();return false;});$(".chooser div a").click(function(){var _this=$(this);$(".chooser .dropdown-toggle").html(_this.text());$(".chooser .dropdown-toggle").removeClass($(".chooser .dropdown-toggle").data("now"));$(".chooser .dropdown-toggle").addClass(_this.parent().data("value"));$(".chooser .dropdown-toggle").attr('data-now',_this.parent().data("value"));if(_this.parent().data("value")=='whatsapp'){$(".not-hide").fadeOut();$(".will-hide").fadeIn();$(".pane-right .overlay").fadeOut();}else if(_this.parent().data("value")=='short'){$(".not-hide").fadeIn();$(".will-hide").fadeOut();$(".pane-right .overlay").fadeIn();}
$("#type-link").val(_this.parent().data("value"));});$("#input-number").on("keyup",function(){$("#number").html($("#phone-code").val()+$(this).val())});$("#input-message").on("keyup",function(){var val=$(this).val();val=val.replace(/</g,'&lt;');val=val.replace(/>/g,'&gt;');val=val.replace(/\n/g,'<br>');val=val.replace(/\*([a-zA-Z0-9]+)\*/g,'<b>$1</b>');val=val.replace(/\~([a-zA-Z0-9]+)\~/g,'<s>$1</s>');val=val.replace(/\_([a-zA-Z0-9]+)\_/g,'<i>$1</i>');val=val.replace(/([a-zA-Z0-9]+)\.([a-zA-Z0-9]+)/g,'<a href="http://$1.$2">$1.$2</a>');$("#message").html(val);});


var yourTextarea=document.getElementById("input-message");
var insertAtCursor=function(myField,myValueBefore,myValueAfter){
    if(document.selection){
        myField.focus();
        document.selection.createRange().text=myValueBefore+document.selection.createRange().text+myValueAfter;
    }else if(myField.selectionStart||myField.selectionStart=='0'){
        var startPos=myField.selectionStart;var endPos=myField.selectionEnd;myField.value=myField.value.substring(0,startPos)+myValueBefore+myField.value.substring(startPos,endPos)+myValueAfter+myField.value.substring(endPos,myField.value.length);
    }}

$("#input-message").keydown(function(e){
    if(e.ctrlKey){
        if(e.keyCode==66){insertAtCursor(yourTextarea,'*','*');
        return false;
    }

    if(e.keyCode==73){
        insertAtCursor(yourTextarea,'_','_');return false;
    }
    if(e.keyCode==83){
        insertAtCursor(yourTextarea,'~','~');return false;
    }}});
    
$(".toolbar .item").click(function(){
        if($(this).data("tool")=='bold'){
            insertAtCursor(yourTextarea,'*','*');
        }

    if($(this).data("tool")=='italic'){
        insertAtCursor(yourTextarea,'_','_');
    }

    if($(this).data("tool")=='striketrhough'){
        insertAtCursor(yourTextarea,'~','~');
    }
    $("#input-message").keyup();
});

$("input[name=link]").keydown(function(event){
    var ew=event.keyCode;
    if(ew==8)
return true;if(ew==189)
return true;if(48<=ew&&ew<=57)
return true;if(65<=ew&&ew<=90)
return true;if(97<=ew&&ew<=122)
return true;return false;});$(".preview-link ul a").click(function(){
    $(".message").removeClass($(".preview-link > a").attr("data-now"));
    $(".message").addClass($(this).attr("data-value"));
    $(".preview-link > a").attr("data-now",
    $(this).attr("data-value"));
});