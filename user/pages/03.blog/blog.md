---
title: Blog
body_classes: 'blog group-blog infinite-scroll'
menu: Blog
blog_url: blog
sitemap:
    changefreq: monthly
    priority: 1.03
content:
    items: '@self.children'
    order:
        by: date
        dir: desc
    limit: 10
    pagination: true
feed:
    description: 'Sample Blog Description'
    limit: 10
pagination: true
---

## Latest Blog Posts
### Written by the Harvard community, the purpose of the blog is to start conversations on different mental health topics. To submit a post, head to the submissions page.