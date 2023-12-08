@include('layouts.header')
<nav>
    <ul>
        <li><a href="/index">Головна</a></li>
        <li><a href="/contracts">Договори</a></li>
        <li><a href="/instruments">Прилади та Засоби</a></li>
        <li><a href="/visits">Облік Відвідувань</a></li>
        <!-- Додайте посилання на інші розділи тут -->
    </ul>
</nav>
<section id="documentation">
    <h2>Документація</h2>
    <ul>
        <li><a href="documents/document1.pdf" download>Документ 1</a></li>
        <li><a href="documents/document2.docx" download>Документ 2</a></li>
        <li><a href="documents/document3.xlsx" download>Документ 3</a></li>
        <li><a href="documents/document4.pdf" download>Документ 4</a></li>
        <li><a href="documents/document5.docx" download>Документ 5</a></li>
    </ul>
</section>
<section id="documents">
    <h2>Документація</h2>
    <p>Тут ви знайдете всю необхідну документацію, пов'язану з діяльністю нашої лабораторії.</p>
    <input type="file" id="fileToUpload" style="display: none;">
    <button id="uploadButton" onclick="document.getElementById('fileToUpload').click()">Додати документ</button>
    <!-- Список існуючої документації тут -->
</section>

<!-- Додайте інші розділи та вміст за необхідності -->
<footer>
    <p>Зв'яжіться з нами: example@email.com</p>
</footer>
</body>
</html>
