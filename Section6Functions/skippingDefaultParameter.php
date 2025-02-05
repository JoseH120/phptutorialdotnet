<?php
function create_anchor(
    $text,
    $href = '#',
    $title = '',
    $target = '_self',
) {
    $href = $href ? sprintf('href="%s"', $href) : '';
    $title = $title ? sprintf('title="%s"', $title) : '';
    $target = $target ? sprintf('target="%s"', $target) : '';

    return "<a $href $title $target>$text</a>";
}
$link = create_anchor(
    'PHP Tutorial',
    'https://www.phptutorial.net',
    '',
    '_blank',
);
echo <<<TEXT
$link
<br>

TEXT;
/* mixing named arguments with positional arguments. */
$link2 = create_anchor(
    'PHP Tutorial2',
    'https://www.phptutorial.net',
    '',
    $target = "_blank",
);
echo <<<TEXT
$link2
<br/>



TEXT;
