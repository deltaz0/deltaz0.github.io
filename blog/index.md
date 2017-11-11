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
<p class="meta">{{ site.posts.first.date | date_to_string }} » <b>{{ site.posts.first.title }}</b></p>
<div class="post">
{{ site.posts.first.content }}
</div>
