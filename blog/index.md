---
layout: default
---
# Blog

<span class="postselector">{% for post in site.posts %}
* {{ post.date | date_to_string }} » [{{ post.title }}]({{ post.url }})
{% endfor %}</span>

{{ site.posts.first.title }}<br/>{{ site.posts.first.date | date_to_string }}

{{ site.posts.first.content }}
