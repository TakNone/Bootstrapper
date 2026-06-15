# pageBlockRelatedArticles

**Description** : *Related articles*

**Layer** : 227

```tl
pageBlockRelatedArticles#16115a96 title:RichText articles:Vector<PageRelatedArticle> = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>title</mark> | [`RichText`](type/RichText) | Title |
| <mark>articles</mark> | [`Vector<PageRelatedArticle>`](type/PageRelatedArticle) | Related articles |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockRelatedArticles(
	title : $client->textEmpty(),
	articles : array(
		$client->pageRelatedArticle(
			url : 'https://docs.liveproto.dev',
			webpage_id : 5244684289680455494,
			title : 'AMRKhqXviI3BGmxP',
			description : 'KY3DeMFQmofP98ZN',
			photo_id : -8345030445550347488,
			author : 'hbeFDtjCGvlBZ40r',
			published_date : 92,
		),
	),
);
```