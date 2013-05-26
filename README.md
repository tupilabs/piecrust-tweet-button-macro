# PieCrust Tweet Button macro

A Twig macro for PieCrust that adds a tweet button to posts or pages.

##TL;DR:

	{% macro button(base_url,counturl,url,text) %}
	<div class="tw_button" style="">
	    <iframe
		allowtransparency="true"
		frameborder="0"
		scrolling="no"
		src="http://platform.twitter.com/widgets/tweet_button.1368146021.html#_=1369516789398&amp;count=horizontal&amp;counturl={{base_url|e}}{{counturl|e}}&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer={{base_url|e}}{{url|e}}&amp;size=m&amp;text={{text|e}}&amp;url={{base_url|e}}{{url|e}}"
		class="twitter-share-button twitter-count-horizontal"
		title="Twitter Tweet Button"
		data-twttr-rendered="true"
		style="width: 107px; height: 20px;"></iframe>
	</div>
	{% endmacro %}

You can run the web site with the following command line:

	./_piecrust/bin/chef --root=./_kitchen/mywebsite serve 