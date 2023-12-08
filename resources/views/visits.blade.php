@include('layouts.header')
<nav>
    <ul>
        <li><a href="/index">Головна</a></li>
        <li><a href="/documentation">Документація</a></li>
        <li><a href="/contracts">Договори</a></li>
        <li><a href="/instruments">Прилади та Засоби</a></li>
        <!-- Додайте посилання на інші розділи тут -->
    </ul>
</nav>
<section id="attendance">
    <h2>Облік Відвідувань</h2>
    <table>
        <thead>
        <tr>
            <th>Ім'я</th>
            <th>Прізвище</th>
            <th>Час Входу</th>
            <th>Час Виходу</th>
            <th>Предмет</th>
        </tr>
        </thead>
        <tbody>
        @foreach($visits as $visit)
        <tr>
            <td>{{$visit->name}}</td>
            <td>{{$visit->surname}}</td>
            <td>{{$visit->time_in}}</td>
            <td>{{$visit->time_out}}</td>
            <td>{{$visit->subject}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <a href="/create_visit">
        <button id="uploadButton">Додати відвідування</button>
    </a>
</section>
@include('layouts.footer')
