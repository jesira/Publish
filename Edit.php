<?php

for $x in doc("Blogs.xml")/posts/post
where $x/UserName == $_SESSION["username"]
return $ed = $x/writing

 ?>
