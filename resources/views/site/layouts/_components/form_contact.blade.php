<form action={{ route('site.contacts') }} method="post">
    @csrf
    <input name='nome' type="text" placeholder="Nome" class="borda-preta">
    <br>
    <input name='telefone' type="text" placeholder="Telefone" class="borda-preta">
    <br>
    <input name='email' type="text" placeholder="E-mail" class="borda-preta">
    <br>
    <select name='motivos_contatos' class="borda-preta">
        <option value="">Qual o motivo do contato?</option>
        <option value="">Dúvida</option>
        <option value="">Elogio</option>
        <option value="">Reclamação</option>
    </select>
    <br>
    <textarea name='mensagem' class="borda-preta">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>
