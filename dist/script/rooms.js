function formSubmit(){
    $('#BS').validate({
        rules: {
            name: {
                required: true
            },
            phone: {
                required: true
            },
            mail: {
                required: true,
                email: true
            },
            date: {
                required: true,
                date: true
            },
            days: {
                required: true,
                number: true
            }
        },
        messages: {
            name: {
                required: "請輸入您的大名"
            },
            phone: {
                required: "請輸入電話"
            },
            mail: {
                required: "請輸入電子郵件",
                email: "電子郵件格式不正確" 
            },
            date: {
                required: "請選擇入住日期",
                date: "輸入的日期不正確，請重新選擇"
            },
            days: {
                required: "請輸入入住天數",
                number: "入住天數必須為數字"
            }

        },
        submitHandler: function(form){
            $('#BS .each').animate({opacity: 0}, 300);
            $('#loadingStatus').fadeIn(300);
            form.submit();
        }
    });

}