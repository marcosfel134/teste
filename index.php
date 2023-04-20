<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar</title>
    <link rel="stylesheet" href="_css/marcosfel134.css">
</head>
<body>
    <main>
        <section class="interface">
            <div class="formulario">
                <form action="salvar.php" method="post">

                    <div class="div1">
                        <legend>Informações básicas</legend>
                    </div>

                    <div class="div2">
                        <fieldset>
                            <div>
                                <div>
                                    <label for="name">Nome</label>
                                    <input type="text" name="name" id="name" value="Priscilla Barros" required>
                                </div>
                                <div>
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" id="email" value="priscilla.barros@netwall.com.br" required>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="div3">
                        <button type="submit" class="btn-submit">Salvar</button>
                    </div>

                </form>
            </div>
        </section>
    </main>
</body>
</html>