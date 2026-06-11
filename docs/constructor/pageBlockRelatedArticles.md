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
			webpage_id : -3547120322708303289,
			title : '36Jf2LariuUhwz4p',
			description : 'ra0sQMRtTWLUN2qo',
			photo_id : 6454450251330034044,
			author : 'Bv43jxFECR5uS9TJ',
			published_date : 0,
		),
	),
);
```