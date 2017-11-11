---
layout: default
---
# Blog

<div class="postselector">
<ul class="posts">
	  {% for post in site.posts %}
	    <li><span>{{ post.date | date_to_string }}</span> » <a href="{{ post.url }}" title="{{ post.title }}">{{ post.title }}</a></li>
	  {% endfor %}
	</ul>
</div>

{{ page.date | date_to_string }} » **{{ page.title }}**

{{ content }}
