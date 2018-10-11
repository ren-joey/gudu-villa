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
        });
    });
})(jQuery)