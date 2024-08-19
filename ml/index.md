---
layout: default
---
# MACHINE LEARNING WORK

---

<!-- ### <center>[<strong>THIS PAGE UNDER CONSTRUCTION</strong>]<br>I recently graduated and am in the process of relocating and rebuilding this site from scratch with my newer work. Content below likely old or placeholder.</center>

--- -->

<div class="postselector">
<ul class="posts">
	  {% for mlentry in site.categories.ml %}
	    <li><a href="{{ mlentry.url }}" title="{{ mlentry.title }}">{{ mlentry.title }}</a></li>
	  {% endfor %}
	</ul>
</div>

{% for mlentry in site.categories.ml %}

## {{ mlentry.title }}

{{ mlentry.content }}

---

{% endfor %}


<!-- ## {{ site.categories.ml.first.title }} -->

<!-- {{ site.categories.ml.first.content }} -->
