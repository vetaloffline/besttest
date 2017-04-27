<div>
	<div>
		<div class="text_mein_g"><h1><?=$db['name']?></h1></div>
		<div class="block_text_art"><?=$db['text_articl']?></div>
		<div class="autor_art"><b>Автор:</b> <?=$db['name_user']?></div>
		<div class="autor_art"><b>Дата публикации:</b> <?=$db['data']?></div>
		<div>
		<div class="block_name_comm">Коментарии к статье</div>
			<?
			if (!empty($db['comments'])) {
				foreach ($db['comments'] as $key => $value) {?>
					<div class="block_coment">
						<div><b>Имя автора:</b>  <?=$value['name_user']?></div>
						<div><?=$value['comment']?></div>
					</div>
				<?}}?>
		</div>
		<div class="komm_block">
			<div class="komment">Оставить комментарий</div>
			<form action="/articlone/addcoment" method="POST">
				<label>Имя</label>
				<input type="text" name="nameuser" class="form-control width_clas_name" required>
				<label>Комментарий</label>
				<textarea name="komment" class="form-control width_class" rows='5' required></textarea>
				<input type="hidden" name="id" value="<?=$db['id_articl']?>">
				<input type="submit" name="auth" value="Комментировать" class="btn btn-primary">
			</form>
		</div>
	</div>
	
</div>