<nav class="navbar navbar-expand navbar-dark bg-dark mb-3">
        <div >
            <ul class="navbar-nav">
                <li class="nav-item {{ $active['home'] }}">
                    <a class="nav-link" href="./">Заглавная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ $active['abc'] }}">
                    <a class="nav-link" href="./abc">Алфавит</a>
                </li>
                <li class="nav-item {{ $active['words'] }}">
                    <a class="nav-link" href="./words">Слова</a>
                </li>
                <li class="nav-item {{ $active['translate'] }}">
                    <a class="nav-link" href="./translate">Тест</a>
                </li>
            </ul>
        </div>
</nav>
