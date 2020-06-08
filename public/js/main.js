$(document).ready(function() {
    $("td").on('click', function() {
        var word = $(this).data('word');
        var audio = new Audio();
        audio.src = 'https://www.native-english.ru/audio/pronounce/letter-'+word+'.mp3';
        audio.autoplay = true;
    });
});
