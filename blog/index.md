---
layout: default
---
# Blog

<div class="postselector">
<ul class="posts">
	  {% for blogentry in site.categories.blog %}
	    <li><span>{{ blogentry.date | date_to_string }}</span> » <a href="{{ blogentry.url }}" title="{{ blogentry.title }}">{{ blogentry.title }}</a></li>
	  {% endfor %}
	</ul>
</div>

{{ site.categories.blog.first.date | date_to_string }} » **{{ site.categories.blog.first.title }}**

{{ site.categories.blog.first.content }}
