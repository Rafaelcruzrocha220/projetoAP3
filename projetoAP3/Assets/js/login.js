console.log('teste');

var buttonLogin = $("#buttonLogin");
var buttonRegistrar = $("#registrarButtonJs");
var menu = $("#menuJs");
var form = $("#logarJs");
var registrar = $("#registrarJs");
var voltarLogin = $("#voltarLogin");
var voltarRegistrar = $("#voltarRegistrar")

buttonLogin.click(function(){
    menu.css('display','none');
    registrar.css('display','none');
    form.css('display','block');
});

voltarLogin.click(function(){
    menu.css('display','flex');
    registrar.css('display','none');
    form.css('display','none');
});

voltarRegistrar.click(function(){
    menu.css('display','none');
    registrar.css('display','none');
    form.css('display','block');
});

buttonRegistrar.click(function(){
    menu.css('display','none');
    registrar.css('display','block');
    form.css('display','none');
})

