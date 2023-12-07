<script>
	//-- перейти на страницу с заданным номером
	function goto_selpage(){
		el = document.getElementById('new_page');
		page_num = el.value.trim();
		if(page_num){
			window.location.href = '?page_num='+ page_num;
		}		
	}
</script>
<?php
	//-- линейка кнопок для постраничного просмотра таблицы
	
	//-- блокировка пагинации при одной странице
	if ($pages_count > 1){
		//-- выводим номер текущей страницы и общее число страниц
		echo "<div class = page_itog> страница номер $page_num из $pages_count </div>";
		
		//-- выводим кнопки пагинации 
		echo '<ul class="pages">';

		//-- сформировать кусок кнопок пагинации
		function form_pagebuttons( $start_page, $end_page )
		{   global $page_num;
			for( $num=$start_page; $num <=$end_page; $num++ ){
				if( $num == $page_num)
					echo "<li class=curr_page> <a href='?page_num=".$page_num."'>$page_num </a></li>";
				else
					echo "<li > <a href='?page_num=".$num."'>$num </a></li>";
			}
		}
		
		//-- кнопка назад
		$next_page = $page_num + 1; $prev_page = $page_num - 1;
		echo "<li> <a href='?page_num=".$prev_page."'> &lt;- </a></li>";
			
		//-- формируем кнопки с номерами страниц
		if($pages_count <=12){    //-- малое количество страниц
			form_pagebuttons( 1, $pages_count );
		}else{                    //--страниц много
			if($page_num <= 5){ //-- номер выбран близко к началу
				form_pagebuttons( 1, $page_num + 2 );
				echo "<li class='dots'> ...</li>";
				form_pagebuttons( $pages_count-2, $pages_count );

			} elseif($page_num > $pages_count - 5){//-- номер выбран близко к концу
				form_pagebuttons( 1, 3 );
				echo "<li class='dots'> ...</li>";
				form_pagebuttons( $page_num-2, $pages_count );

			} else{//-- номер выбран в середине списка
				form_pagebuttons( 1, 3 );
				echo "<li class='dots'> ...</li>";
				form_pagebuttons( $page_num-2, $page_num+2);
				echo "<li class='dots'> ...</li>";
				form_pagebuttons( $pages_count-2, $pages_count );
			}
			
			//-- кнопка вперед
			echo "<li> <a href='?page_num=".$next_page."'> -&gt;</a></li>";	
			//-- кнопка перехода к произвольной странице
			echo "<li class='dots'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>";
			echo "<li> <a onclick='goto_selpage();'> =&gt; </a></li>";		
			echo "<li> <input type=text id = new_page value= $page_num ></li>";
			echo "</ul>";
		};
	};
?>
