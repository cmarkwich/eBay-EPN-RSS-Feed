<?php
header('Content-type: application/xml');
$keywords = str_replace(" ", "+", $_REQUEST['keywords']);
$keywordsIgnored = str_replace(" ", "%2C", $_REQUEST['keywordsIgnored']);
$campaignid = str_replace(" ", "", $_REQUEST['campaignid']);
// &categoryId1=6000 you are able to query string on a category Id to narrow search results - example 6000 being eBay Motors
$url = "http://rest.ebay.com/epn/v1/find/item.rss?keyword=".$keywords."+-%28".$keywordsIgnored."%29&sortOrder=BestMatch&programid=1&campaignid=".$campaignid."&toolid=10039&listingType1=All&lgeo=1&descriptionSearch=true&feedType=rss";
$handle = fopen($url, "r");
if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        echo $buffer;
    }
    fclose($handle);
}
?>
