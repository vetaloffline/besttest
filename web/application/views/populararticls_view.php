<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
<div>
	<div>
	<div class="text_mein_g"><h1>Список последних статей</h1></div>
	<div class="autoplay block_slider" data-slick='{"slidesToShow": 2, "slidesToScroll": 1}'>
		<?
		foreach ($db['toparticls'] as $k => $val) {
			?>
			<div class="block_top_ar">
				<div><a href="/articlone/getarticl?id=<?=$val['id_articl']?>"><?=$val['name']?></a></div>
				<div class="block_text_gs"><?=$val['text_articl']?></div>
				<div class="block_podrob"><a href="/articlone/getarticl?id=<?=$val['id_articl']?>">Читать подробнее...</a></div>
			</div>
		<?}

		?>
	</div>
		<?
		if (!empty($db['all'])) {
		foreach ($db['all'] as $key => $value) {?>
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
					<div><a href="/articlone/getarticl?id=<?=$value['id_articl']?>">Читать подробнее...</a></div>
				</div>
			</div>

		<?}}
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
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script type="text/javascript">
	$('.autoplay').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 3000,
	});
</script>