<h1 class="title">Contato</h1>
<form action="../server/contato.php" method="post">
    <div>
        <div class="field">
            <label class="label">Nome</label>
            <div class="control">
                <input class="input" type="text" name="name" placeholder="Digite seu nome">
            </div>
        </div>
    </div>

    <div>
        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input class="input" type="email" name="email" placeholder="Digite seu email">
            </div>
        </div>
    </div>

    <div>
        <div class="field">
            <label class="label">Assunto</label>
            <div class="control">
                <input class="input" type="text" name="subject" placeholder="Digite seu assunto">
            </div>
        </div>
    </div>


    <div class="field">
        <label class="label">Mensagem</label>
        <div class="control">
            <textarea class="textarea" name="message" placeholder="Digite aqui sua mensagem"></textarea>
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Enviar</button>
        </div>
    </div>
</form>