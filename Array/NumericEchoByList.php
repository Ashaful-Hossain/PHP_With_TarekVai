<pre>
<?php
$data=["Dhaka","Cumilla","lalmai","khulna"];

list($city,$dis,$thana,$wp)=$data;

echo $wp;

foreach ($data as $value) {
    echo "<pre>".$value;
}