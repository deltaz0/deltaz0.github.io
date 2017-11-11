---
layout: default
---
<h1>Blog</h1>
<div class="postselector">
<ul class="posts">
	  {% for post in site.posts %}
	    <li><span>{{ post.date | date_to_string }}</span> » <a href="{{ post.url }}" title="{{ post.title }}">{{ post.title }}</a></li>
	  {% endfor %}
	</ul>
</div>
<p class="meta">{{ page.date | date_to_string }} » <b>{{ page.title }}</b></p>
<div class="post">
{{ content }}
</div>
