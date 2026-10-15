# pageBlockRelatedArticles

**Description** : *Related articles*

**Layer** : 229

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
			webpage_id : -219966550206200643,
			title : '8Eud5qBpJxGy3Yj0',
			description : 'KwfSsdH4yk6EWztD',
			photo_id : -8600476143751684057,
			author : 'QOd2fPuTEXxgBNmJ',
			published_date : 37,
		),
	),
);
```