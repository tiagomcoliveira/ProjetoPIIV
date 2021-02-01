<?php
require_once(menu.php);


?>



<div class="espacoclubes">
            <legend>Adicionar Clube</legend>
            <br>
            <form action="addnoticia.php" method="POST">
            <input type="text" name="NOME_CLUBE" id="NOME_CLUBE" placeholder="nome do clube" style="outline: none"
                required class="camponclubendocente">
            <br><br>
            <input type="text" name="DIAS_CLUBE" id="DIAS_CLUBE" placeholder="dias " style="outline: none" required
                class="campodiasclube">
            <br><br>
            <input type="text" name="HORAINICIO_CLUBE" id="HORAINICIO_CLUBE" placeholder="início" style="outline: none" required
                class="campoiniciofimclube">
            <input type="text" name="HORAFIM_CLUBE" id="HORAFIM_CLUBE" placeholder="fim" style="outline: none" required
                class="campoiniciofimclube">
            <br><br>
            <input type="text" name="VAGAS_CLUBE" id="VAGAS_CLUBE" placeholder="vagas" style="outline: none" required
                class="campovagas"> 
            <br><br>
            <input type="text" name="DOCENTE_CLUBE" id="DOCENTE_CLUBE" placeholder="docente" style="outline: none" required
                class="camponclubendocente">
            <br><br>
            <textarea name="DESCRICAO_CLUBE" class="corpo" rows="8" placeholder="descrição" required
                style="outline: none"></textarea>
            <br><br>
            <div class="upload">
                <legend style="font-size: 18px">adicionar imagem <legend style="font-size: 12px;">(100x100 px)</legend>
                </legend>
                <input type="file" class="btnupload" accept="image/png, image/jpeg, image/gif" style="outline: none;">
            </div>
            <input id="btnaddclube" type="submit" value="Adicionar" class="btn_pubnot">
            </form>
        </div>
        <br><br><br><br>
        <div class="relogio" id="datetime" style="text-align: center;"></div>
    </div>

</body>

</html>