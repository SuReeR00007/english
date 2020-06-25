<!doctype html>
<html>
    <head>
        @include('head')
    </head>
    <body>
        @include('header')
        <div id="main" class="row">
            <form name="quiz" action="#" class="quizform container">
                <!--csrf токен-->                
                @csrf
                <!--Перебираем массив $questions для формирования списка вопросов для теста--> 
                @foreach ($questions as $question)
                <div class="quizsection">
                    <h2>№{{ $question['number'] }} Как переводится "{{ $question['word'] }}"</h2>
                    <!--перебираем массив возможных вариантов для формирования вариантов ответа--> 
                    @foreach ($question['variant'] as $variant)
                    <div class="answer">
                        <input name="{{ $question['word'] }}" value="{{ $variant }}" id="{{ $variant }}" type="radio" /> {{ $variant }}
                    </div>
                    @endforeach
                </div>
                @endforeach
                <input id="btn" value="Проверить" type="submit" class="btn btn-primary"/> <input value="Сбросить" type="reset" class="btn btn-danger"/>
            </form>
        </div>
    </body>
</html>