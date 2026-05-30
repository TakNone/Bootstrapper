# pageBlockRelatedArticles

**Description** : *Related articles*

**Layer** : 222

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
			webpage_id : -5305915124182527640,
			title : '4cFkazgQAi0EWtsX',
			description : 'ZrVymqc1Ak73a624',
			photo_id : -488456513446485999,
			author : '4hQy9NxKMXH62EAI',
			published_date : 88,
		),
	),
);
```