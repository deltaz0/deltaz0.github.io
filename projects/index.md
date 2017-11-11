---
layout: default
---
# Projects

<div class="postselector">
<ul class="posts">
	  {% for project in site.categories.projects %}
	    <li><span>{{ project.date | date_to_string }}</span> » <a href="{{ project.url }}" title="{{ project.title }}">{{ project.title }}</a></li>
	  {% endfor %}
	</ul>
</div>

{{ site.categories.projects.first.date | date_to_string }} » **{{ site.categories.projects.first.title }}**

{{ site.categories.projects.first.content }}
