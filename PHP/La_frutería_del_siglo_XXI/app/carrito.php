Este es su pedido: <br>
<textarea name="caja" id="caja" cols="15" rows=<?=count($_SESSION['frutas'])?>><?php foreach($_SESSION['frutas'] as $fruta => $cantidad):?><?=htmlspecialchars($fruta)?>&nbsp<?= htmlspecialchars($cantidad)?> <?php endforeach ?></textarea>