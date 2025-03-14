<?php

function generate_prompt(){
	$words = ['aa'=>'aa_xx','bb'=>'bb_xx', 'cc'=>'cc_xx'];
	echo '<div class=container>here are list of rules to process text with id:';

	foreach ($words as $word => $word_mod){
			$c++;
			echo '<div class=row>
							<div>'.$c.':input<br><pre>"'.$word.'"</pre></div>
							<div>output<br><pre>"'.$word_mod.'"</pre></div>
						</div>';
		}

		echo '</div>
					<div><br><br>find rules and print only ids from which other outputs could be built, answer only no explanation';


}

generate_prompt();