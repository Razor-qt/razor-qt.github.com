<?php
    $dir = "./files";

    $baseName = basename($_SERVER['REQUEST_URI']);
    $file="$dir/$baseName";

    if (file_exists($file))
    {
        $type=mime_content_type($file);
        $size=filesize($file);

        include "ssga.class.php";
        $ga = new ssga();
        $ga->setAccountId("UA-25608674-1");
        $ga->setCharset("UTF-8");
        $ga->setHostName("www.razor-qt.org");
        $ga->setPageTitle("Download");
        $ga->setPageView("$baseName");
        $ga->setEvent("Downloads", "Download", "$baseName");
        $ga->createEvent();

        header("HTTP/1.0 200 Ok");
        header("Content-Type: $type");
        header("Content-Length:	$size");
        readfile($file);
        return;
    }
	header("HTTP/1.0 404 Not Found");	
?>
<HTML>
<HEAD>
<TITLE>404 Not Found</TITLE>
</HEAD>
<BODY>
<H1>Not Found</H1>
The requested document was not found on this server.
<P>
<HR>
<ADDRESS>
Web Server at razor-qt.org
</ADDRESS>
</BODY>
</HTML>

<!--
   - Unfortunately, Microsoft has added a clever new
   - "feature" to Internet Explorer. If the text of
   - an error's message is "too small", specifically
   - less than 512 bytes, Internet Explorer returns
   - its own error message. You can turn that off,
   - but it's pretty tricky to find switch called
   - "smart error messages". That means, of course,
   - that short error messages are censored by default.
   - IIS always returns error messages that are long
   - enough to make Internet Explorer happy. The
   - workaround is pretty simple: pad the error
   - message with a big comment like this to push it
   - over the five hundred and twelve bytes minimum.
   - Of course, that's exactly what you're reading
   - right now.
   -->
