<tr>
  <td>
    Nome:
  </td>
  <td>
    <input type="text" name="nome" value="<?=$produto->getNome()?>" class="form-control">
  </td>
</tr>
<tr>
  <td>
    Preco:
  </td>
  <td>
    <input type="number" name="preco" value="<?=$produto->getPreco()?>" class="form-control">
  </td>
</tr>
<tr>
  <td>
    Descrição:
  </td>
  <td>
    <textarea name="descricao" rows="8" cols="40" class="form-control"><?=$produto->getDescricao()?></textarea>
  </td>
</tr>
<tr>
  <td>
    Usado:
  </td>
  <td>
    <input type="checkbox" name="usado" value="1" <?=$produto->getUsado()?>>Usado
  </td>
</tr>
<tr>
  <td>
    Categoria:
  </td>
  <td>
    <select class="form-control" name="categoria_id">
      <?php foreach ($categorias as $categoria):
        $essaEhACategoria = $produto->getCategoria()->getId() == $categoria->getId();
        $selecao = $essaEhACategoria ? "selected='selected'" : "";
        ?>
        <option value="<?=$categoria->getId()?>" <?=$selecao?>>
          <?=$categoria->getNome()?>
        </option>
      <?php endforeach; ?>
    </select>
  </td>
</tr>
<tr>
  <td>
      Tipo Produto
  </td>
  <td>
    <select class="form-control" name="tipoProduto">
      <optgroup label="Livros">
      <?php
        $tipos = array("Livro Fisico","Ebook");
        str_replace(' ','',$tipo);
        foreach ($tipos as $tipo):
          $tipoSemEspaco = str_replace(' ','',$tipo);
          $essaEhOTipo = get_class($produto) == $tipoSemEspaco;
          $selecao = $essaEhOTipo ? "selected='selected'" : "";
          ?>
            <option value="<?=$tipoSemEspaco?>" <?=$selecao?>><?=$tipo?></option>
      <?php endforeach; ?>
        </optgroup>
    </select>
  </td>
</tr>
<tr>
  <td>
    ISBN
  </td>
  <td>
    <input type="text" name="isbn" value="<?php if($produto->temIsbn()){echo $produto->getIsbn();}?>" class="form-control" placeholder="Caso seja um Livro">
  </td>
</tr>
<tr>
  <td>
    Taxa de Impressão
  </td>
  <td>
    <input type="text" name="taxaImpressao" value="<?php if($produto->temTaxaImpressao()){echo $produto->getTaxaImpressao();}?>" class="form-control" placeholder="Caso seja um Livro Físico">
  </td>
</tr><tr>
  <td>
    WaterMark
  </td>
  <td>
    <input type="text" name="waterMark" value="<?php if($produto->temWaterMark()){echo $produto->getWaterMark();}?>" class="form-control" placeholder="Caso seja um Ebook">
  </td>
</tr>
