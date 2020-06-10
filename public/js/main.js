$(document).ready(function() {
    $("td.letter").on('click', function() {
        var letter = $(this).data('letter');
        var audio = new Audio();
        audio.src = 'https://www.native-english.ru/audio/pronounce/letter-'+letter+'.mp3';
        audio.autoplay = true;
    });
     $("td.word").on('click', function() {
        var word = $(this).data('word');
        var audio = new Audio();
        audio.src = 'https://www.native-english.ru/audio/pronounce/'+word+'.mp3';
        audio.autoplay = true;
    });
});