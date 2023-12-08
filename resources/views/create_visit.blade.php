@include('layouts.header')
<nav>
    <ul>
        <li><a href="/index">Головна</a></li>
        <li><a href="/documentation">Документація</a></li>
        <li><a href="/contracts">Договори</a></li>
        <li><a href="/instruments">Прилади та Засоби</a></li>
        <li><a href="/visits">Облік Відвідувань</a></li>
        <!-- Додайте посилання на інші розділи тут -->
    </ul>
</nav>
<section id="addVisit">
    <h2>Додати Візит</h2>
    <form action="/store_visit" method="post">
        @csrf
        <label for="visitorName">Ім'я Відвідувача:</label>
        <input type="text" id="visitorName" name="name" required>

        <label for="visitorSurname">Прізвище Відвідувача:</label>
        <input type="text" id="visitorSurname" name="surname" required>

        <label for="visitorTime_in">Час Входу:</label>
        <input type="text" id="visitorTime_in" name="time_in" required>

        <label for="visitorTime_out">Час Виходу</label>
        <input type="text" id="visitorTime_out" name="time_out" required>

        <label for="visitorSubject">Предмет</label>
        <input type="text" id="visitorSubject" name="subject" required>

        <button type="submit">Зберегти Візит</button>
    </form>
</section>
@include('layouts.footer')
