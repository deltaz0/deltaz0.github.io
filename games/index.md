---
layout: default
---
# GAMES WORK

---

<div class="postselector">
<ul class="posts">
	  {% for gamesentry in site.categories.games %}
	    <li><a href="{{ gamesentry.url }}" title="{{ gamesentry.title }}">{{ gamesentry.title }}</a></li>
	  {% endfor %}
	</ul>
</div>

{% for gamesentry in site.categories.games %}

## {{ gamesentry.title }}

{{ gamesentry.content }}

---

{% endfor %}
