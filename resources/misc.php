<?php
function print_array($data): void
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function print_dump(...$data): void
{
    echo "\n<p>";
    var_dump($data);
    echo "</p>\n";
}
function print_expression($expression): void
{
    echo "\n<pre>" . <<<text
    $expression
    </pre>
    text;
}
function print_title3($title): void
{
    echo '<h3>' . $title . "</h3>\n";
}
function print_paragraph($paragraph): void
{
    echo '<p>' . $paragraph . "</p>\n";
}

function get_random_numbers()
{
    for ($i = 0; $i < 5; $i++):
        $random_numbers[] = rand(1, 100);
    endfor;
    return $random_numbers;
}

function even_number()
{
    for ($i = 2; $i < 10; $i += 2):
        yield $i;
    endfor;
}

//function using on /Section7Array/SpreadOperator/spreadoperatornamedarguments.php
function format_name(string $first, string $middle, string $last): string
{
    return $middle ?
        "$first $middle $last" :
        "$first $last";
}
