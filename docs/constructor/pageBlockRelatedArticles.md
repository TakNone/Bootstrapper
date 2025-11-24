# pageBlockRelatedArticles

**Description** : *Related articles*

**Layer** : 218

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
			webpage_id : 7713768977511623979,
			title : 'gSpCnhYoVuMLkcT3',
			description : '84sCUQ5fBJxMozv2',
			photo_id : 8560367021124146541,
			author : 'YAjFaRTMUmsgVKH9',
			published_date : 72,
		),
	),
);
```