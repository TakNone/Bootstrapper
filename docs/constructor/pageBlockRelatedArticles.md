# pageBlockRelatedArticles

**Description** : *Related articles*

**Layer** : 225

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
			webpage_id : -869661312300445942,
			title : 'WCVTtKfAGe0rBQ6I',
			description : 'yvTkJMqtYAFwEoVL',
			photo_id : 4355917841907987446,
			author : '1BQOuRdrU7kp4Eqo',
			published_date : 83,
		),
	),
);
```