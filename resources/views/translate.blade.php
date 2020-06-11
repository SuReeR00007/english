<!doctype html>
<html>
    <head>
        @include('head')
    </head>
    <body>
        @include('header')
        <div id="main" class="row container">
            <form name="quiz" action="javascript:check();" class="quizform">
                <div class="quizsection">
                    @foreach ($questions as $question)
                    <h2>#$question->number Как переводится ""</h2>
                    @foreach ($question->variant as $variant)
                    <div class="answer">
                        <input name="q1" value="value2" id="value1" type="radio" checked="checked" /> Value 1
                    </div>
                    @endforeach
                    <p>Это пользователь {{ $user->id }}</p>
                    @endforeach
                    <h2>#1 Как переводится ""</h2>

                    <div class="answer">
                        <input name="q1" value="value2" id="value1" type="radio" checked="checked" /> Value 1
                    </div>

                    <div class="answer">
                        <input name="q1" value="value1" id="value2" type="radio" /> Value 2
                    </div>

                    <div class="answer">
                        <input name="q1" value="value1" id="value3" type="radio" /> Value 3
                    </div>

                    <div class="answer">
                        <input name="q1" value="value1" id="value4" type="radio" /> Value 4
                    </div>          
                </div>
                <div class="quizsection">

                    <h2>Вопрос #2</h2>

                    <div class="answer">
                        <input name="q2" value="value1" id="value1" type="radio" checked="checked" /> Value 1
                    </div>

                    <div class="answer">
                        <input name="q2" value="value2" id="value2" type="radio" /> Value 2
                    </div>

                    <div class="answer">
                        <input name="q2" value="value1" id="value3" type="radio" /> Value 3
                    </div>

                    <div class="answer">
                        <input name="q2" value="value1" id="value4" type="radio" /> Value 4
                    </div>
                </div>
                <input value="Submit" type="submit" /> <input value="Reset" type="reset" />
            </form>
        </div>
    </body>
</html>