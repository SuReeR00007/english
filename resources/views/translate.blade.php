<!doctype html>
<html>
    <head>
        @include('head')
    </head>
    <body>
        @include('header')
        <div id="main" class="row">
            <form name="quiz" action="javascript:check();" class="quizform container">
                @foreach ($questions as $question)
                <div class="quizsection">
                    <h2>№{{ $question['number'] }} Как переводится "{{ $question['word'] }}"</h2>
                    @foreach ($question['variant'] as $variant)
                    <div class="answer">
                        <input name="{{ $question['word'] }}"  id="{{ $variant }}" type="radio" /> {{ $variant }}
                    </div>
                    @endforeach
                </div>
                @endforeach
                <input value="Submit" type="submit" /> <input value="Reset" type="reset" />
            </form>
        </div>
    </body>
</html>