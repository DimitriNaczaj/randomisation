# URL randomisation for web experiments.
This repository contains all the elements to create a url randomisation for experiments on the web.

## Step-by-step procedure: 
1. Download and unzip the repository
2. Open 'websites.php'.
3. Follow the directions within the file:
	* Replace the example websites with your own.
	* Balance the weight of the randomisation by duplicating the url. *If google.com appears 2 times and apple.com 1 time, then google.com is two times more likely to be the chosen link by the redirection script.*
	* Save the file.

4. Upload the two files to your server.
5. Point your participants to https://your-domain.com/random-script.php.
6. Each time you'll visit the above url, you'll be randomly redirected to the websites whose url you wrote in 'websites.php'.

	==**DON'T CHANGE THE NAME OF "WEBSITES.PHP”**==