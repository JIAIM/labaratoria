@include('layouts.header')
<nav>
    <ul>
        <li><a href="/index">Головна</a></li>
        <li><a href="/documentation">Документація</a></li>
        <li><a href="/instruments">Прилади та Засоби</a></li>
        <li><a href="/visits">Облік Відвідувань</a></li>
    </ul>
</nav>
<section id="contracts">
    <h2>Договори</h2>
    <ul>
        <li><a href="contracts/contract1.pdf" download>Договір 1</a></li>
        <li><a href="contracts/contract2.docx" download>Договір 2</a></li>
        <li><a href="contracts/contract3.pdf" download>Договір 3</a></li>
        <li><a href="contracts/contract4.docx" download>Договір 4</a></li>
        <li><a href="contracts/contract5.pdf" download>Договір 5</a></li>
    </ul>
</section>
@include('layouts.footer')
