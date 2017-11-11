---
layout: default
---
# Blog

<div class="postselector">
<ul class="posts">
	  {% for blog in site.categories.blogs %}
	    <li><span>{{ blog.date | date_to_string }}</span> » <a href="{{ blog.url }}" title="{{ blog.title }}">{{ blog.title }}</a></li>
	  {% endfor %}
	</ul>
</div>

{{ site.categories.blogs.first.date | date_to_string }} » **{{ site.categories.blogs.first.title }}**

{{ site.categories.blogs.first.content }}
