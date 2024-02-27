<html>
20 character random password without misreadable characters with 128 bit enthropy: 
<BR>
<BR>
<TT>

<?php
    function RandomString(string $version)
    {
        $characters = '23456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ,.-?:;_*+!%/=()[]{}<>#$@^~\\';
        // The following characters have been omitted:
        // 0: looks like O
        // 1: looks like l and I
        // l: looks like 1 and I
        // I: looks like 1 and l
        // O: looks like 0
        // ": looks like double '
        // ': if doubled, looks like ", if single, looks like `
        // `: looks like '
        if ($version === "full")
                {
                $charactersLength = strlen($characters);
                $randstringlength = 20;
                }
                else
        if ($version === "non-full")
                {
                $charactersLength = 57;
                $randstringlength = 22;
                }
                else
                {
                $characters = '0123456789ABCDEF';
                $charactersLength = strlen($characters);
                $randstringlength = 32;
                }
        $randstring = '';
        for ($i = 0; $i < $randstringlength; $i++) {
            $randstring .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randstring;
    }

    echo htmlspecialchars(RandomString("full"));
?>

</TT>
<BR>
<BR>
22 character random non-misreadable password without special characters with 128 bit enthropy:
<BR>
<BR>
<TT>

<?php
    echo htmlspecialchars(RandomString("non-full"));
?>

</TT>
<BR>
<BR>
32 character random password with hexadecimal characters with 128 bit enthropy:
<BR>
<BR>
<TT>

<?php
    echo htmlspecialchars(RandomString("hexa"));
?>

</TT>
</html>
