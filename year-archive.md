---
layout: page
title: Posts
permalink: /year-archive/
---

<div class="home">

  {%- assign posts_by_year = site.posts | group_by_exp:"post", "post.date | date: '%Y'" | reverse -%}
  {%- for year_group in posts_by_year -%}
    <h2 class="post-list-heading">{{ year_group.name }}</h2>
    <ul class="post-list">
      {%- for post in year_group.items -%}
        <li><span class="post-meta">{{ post.date | date: "%b %-d" }}</span>
          <h3>
            <a class="post-link" href="{{ post.url | relative_url }}">{{ post.title | escape }}</a>
          </h3>
        </li>
      {%- endfor -%}
    </ul>
  {%- endfor -%}

</div>