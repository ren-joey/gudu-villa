(function (jQuery) {
    function date() {
        var input = document.getElementById("input").value;
        var date = new Date(input).getUTCDay();

        var weekday = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        document.getElementById('output').textContent = weekday[date];
    }

    $(function () {
        $('#BS').on('change', '#BD1', function () {
            let input = $(this).val();
            let date = new Date(input).getUTCDay();

            console.log(date);

            if(date >= 1 && date <= 5){
                $('#BR_1').text('2人房-NT.2,000(優惠)');
                $('#BR_2').text('4人房-NT.2,800(優惠)');
                $('#BR_3').text('6人房-NT.3,600(優惠)');
                $('#BR_4').text('8人房-NT.4,400(優惠)');
                $('#BR_5').text('包棟(20人)-NT.12,000(優惠)');
            }else{
                $('#BR_1').text('2人房-NT.2,500');
                $('#BR_2').text('4人房-NT.3,500');
                $('#BR_3').text('6人房-NT.4,500');
                $('#BR_4').text('8人房-NT.5,500');
                $('#BR_5').text('包棟(20人)-NT.15,000');
            }
        });
    });
})(jQuery)

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
