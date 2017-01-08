# eBay Partner Network (EPN) RSS Feed
Some code to help you display your EPN recommended product RSS feed on your desired website.
Please Note: I have no affiliation with eBay. Please read the eBay documentation and agreements before using this code.

## Fields
The API from eBay will require keywords, ignored keywords (optional) and a campaign ID that is created by you in the EPN portal https://epn.ebay.com/campaigns/new.<br>
```
 var keywords = ""
 var keywordsIgnored = ""
 var campaignid = 0;
```
You will need jQuery, proxy.php, ebay.js and the forsale tag located in index.html. The index.html script appends to the tag 'forsale' in the html to display the feed. The provided RSS url in proxy.php is based on what will be generated from https://epn.ebay.com/tools/rss-generator in EPN and is heavily customizable featuring sorting, region and other advanced search options.

## Local Testing
In your terminal, run the following command to start a local php server:
```
 php -S localhost:9999
```
