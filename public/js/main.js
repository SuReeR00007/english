$(document).ready(function () {
    $("td.letter").on('click', function () {
        var letter = $(this).data('letter');
        var audio = new Audio();
        audio.src = 'https://www.native-english.ru/audio/pronounce/letter-' + letter + '.mp3';
        audio.autoplay = true;
    });
    $("td.word").on('click', function () {
        var word = $(this).data('word');
        var audio = new Audio();
        audio.src = 'https://www.native-english.ru/audio/pronounce/' + word + '.mp3';
        audio.autoplay = true;
    });
});

$(document).ready(function () {
    $("#btn").click(
            function () {
                data = $("form.quizform").serialize();       
                sendAjaxForm(data, './check');
                return false;
            }
    );
});

function sendAjaxForm(data, url) {
    $.ajax({
        url: url,
        type: "POST",
        dataType: "html",
        data: data,
        success: function (response) {
            result = $.parseJSON(response).points;
            alert('Правильных ответов: '+result);
            location.reload();

        },
        error: function (response) {
            console.log(response);
        }
    });
}