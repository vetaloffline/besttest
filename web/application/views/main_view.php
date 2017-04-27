<div>
	<div>
	<div class="text_mein_g"><h1>Список всех статей</h1></div>
		<?
		foreach ($db as $key => $value) {?>
			<div class="block_articl_one"> 
				<div class="name_articl_main"><h2><a href="/articlone/getarticl?id=<?=$value['id_articl']?>"><?=$value['name']?></a></h2></div>
				<div>
					<div><b>Краткое содержание: </b></div>
					<div class="text_articl"><?=$value['text_articl']?></div>
					
				</div>
				<div>
					<div><b>Автор:</b> <?=$value['name_user']?></div>
					<div><b>Дата публикации:</b> <?=$value['data']?></div>
					<div><b>Комментарии: </b> <?=$value['count_comment']?></div>
					<div class="block_podrob"><a href="/articlone/getarticl?id=<?=$value['id_articl']?>">Читать подробнее...</a></div>
				</div>
			</div>

		<?}
		?>
	</div>
	<div class="block_main_articl">
		<div class="text_name_articl">Добавить новую статью</div>
		<div class="articl_block">
			<form action="/addarticl/add" method="POST">
				<div>
					<label for="name_user">Имя автора</label>
					<input type="text" name="name_user" id='name_user' class="form-control input_user" required>
				</div>
				<div>
					<label for="name_articl">Название статья</label>
					<input type="text" name="name_articl" id='name_articl' class="form-control input_user" required>
				</div>
				<div>
					<label for="comment">Статья</label>
					<textarea type="text" name="articl" class="form-control description_d" rows='5' id="comment" required></textarea>
				</div>
				<div class="input_articl_s">
					<input type="submit" name="auth" value="Опубликовать" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>