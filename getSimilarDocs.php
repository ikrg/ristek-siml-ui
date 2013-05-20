<?php

if (!isset($_GET['id'])) {
	$result = "";	
}
$id = $_GET['id'];

$solr_query =" 
http://202.46.1.18:8983/solr/collection1/select?q=id%3A" . $id . "&wt=xml&indent=true&mlt=true&mlt.fl=judul,sari&mlt.mindf=1&mlt.mintf=1&fl=id,score";


