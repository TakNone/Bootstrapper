# pageBlockRelatedArticles

**Description** : *Related articles*

**Layer** : 211

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
			webpage_id : 1972468960416712462,
			title : 'onJf8WvdGDRhs42p',
			description : '7muFxcaUlZTBdgkt',
			photo_id : -8805431389971504331,
			author : 'G4OAZr5yf0VwMt3a',
			published_date : 45,
		),
	),
);
```