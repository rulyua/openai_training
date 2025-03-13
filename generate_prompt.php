<?php

function generate_prompt(){
	$words = ['aa'=>'aa_xx','bb'=>'bb_xx', 'cc'=>'cc_xx'];
	echo '<div class=container>here are list of rules to process text:';

	foreach ($words as $word => $word_mod){
			echo '<div class=row>
							<div>input<br><pre>"'.$word.'"</pre></div>
							<div>output<br><pre>"'.$word_mod.'"</pre></div>
						</div>';
		}

		echo '</div>
					<div><br><br>what is that rules? remember the rules and apply it to 
					"dd", answer only no explanation';

}

generate_prompt();