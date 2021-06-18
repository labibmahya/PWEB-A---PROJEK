<?php
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, 'https://www.alodokter.com/inilah-manfaat-kunyit-untuk-jerawat-dan-cara-penggunaanya');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$output = curl_exec($ch);
curl_close($ch);      
echo $output;