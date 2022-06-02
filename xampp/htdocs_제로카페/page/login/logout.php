<script src="../../style/common.js">
</script>
<?php

include "../../include/lib.php";

session_destroy();


echo "
	<script>
		msg('안녕히 가세요.');
		goPage('/');
	</script>
";
