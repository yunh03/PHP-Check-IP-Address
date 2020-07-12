<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.typekit.net/oxn3idk.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="style.css?v=15">
    <link rel="shortcut icon" href="favicons.png">
    <title>내 아이피 주소</title>
</head>
<body>
    <header>
        <h1><span id="ip-copy"><?php echo $_SERVER["HTTP_CF_CONNECTING_IP"]; ?></span></h1>
        <p><?php echo $_SERVER["HTTP_USER_AGENT"]; ?></p>
        <h2><a href="javascript:copyToClipboard('#ip-copy');">CLICK TO COPY IP</a><h2>
    </header>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).html()).select();
    document.execCommand("copy");
    $temp.remove();
    alert("IP 주소가 복사되었습니다.")
}
</script>
</html>
