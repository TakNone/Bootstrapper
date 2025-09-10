# pageBlockRelatedArticles

**Description** : *Related articles*

**Layer** : 214

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
			webpage_id : -5794303363268648375,
			title : 'pj7ZvYlKtr5PmcHA',
			description : '6D7FXh8rcoulTM0G',
			photo_id : -1637115787535100994,
			author : 'hLa14HGcdz3E0Fge',
			published_date : 59,
		),
	),
);
```