# generate_prompt.php

Simple idea here, generate openai prompt using data key=>pair array  
Should produce something like this, copied from browser output:  

```
here are list of rules to process text:
input
"aa"
output
"aa_xx"
input
"bb"
output
"bb_xx"
input
"cc"
output
"cc_xx"


what is that rules? remember the rules and apply it to "dd", answer only no explanation
```


# select_unique_data.php

Generate prompt to choose unique key=>pair from data array to build others - tricky stuff 

