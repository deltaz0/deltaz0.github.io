---
layout: default
---
# Projects

<div class="postselector">
<ul class="posts">
	  {% for project in site.categories.projects %}
	    <li><a href="{{ project.url }}" title="{{ project.title }}">{{ project.title }}</a></li>
	  {% endfor %}
	</ul>
</div>

**{{ site.categories.projects.first.title }}**

{{ site.categories.projects.first.content }}
