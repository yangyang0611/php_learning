// tool
$.fn.serializeForm = function() {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

$("#form1 button[name='insert']").click(function() {
    let user=$("#user").val();
    let pw1=$("#password1").val();
    let pw2=$("#password2").val();

    if(pw1 != pw2) {
        alert("密碼設定錯誤，請再輸入一次");
    }
    else {
        alert("賬號密碼設定完成。賬號" + user + "，密碼：" + pw2);
        $("#user-detail").text(user+pw2);
	//$("#user-detail").attr(text,user+pw2);
        `
        var append=

        `
        // $.ajax({
        //     type: "POST",
        //     url: "/insert",
        //     dataType: "json",
        //     contentType: "application/json",
        //     data: JSON.stringify($("#form1").serializeForm()),
        //     success: function(data) {
        //         console.log("hihi");
        //         window.location.assign("");
        //         document.write(result);
        //         // console.log(result);
        //         console.log(result["status"]);
        //     }
        // });
    }
});

// function order() {
//     let item = document.getElementById("").innerHTML;
//     let num = document.getElementsById("amount").value;
//     document.getElementById("order-detail").innerHTML = num;
//     //選購商品, 選購數量，單價，小計元;

// }

// $("#form button[name='orderbtn']").click(function(){
//     console.log("order on click");
//     $.ajax({
//         method: "POST",
//         url: "/order",
//         contentType: 'application/json',
//         data: JSON.stringify($("#form").serializeForm()),
//         dataType: "json",
//     })
//     .done(function(result){
//         console.log(result["status"]);
//     })
//     .fail(function(){

//     })
//     .always(function(){

//     });
// });
