<?php

return <<<EOT
<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
<creationdate xmlns="DAV:" />
<displayname xmlns="DAV:" />
<getcontentlanguage xmlns="DAV:" />
<getcontenttype xmlns="DAV:" />
<getetag xmlns="DAV:" />
<lockdiscovery xmlns="DAV:" />
<source xmlns="DAV:" />
<supportedlock xmlns="DAV:" />
</prop></propfind>
EOT;

?>