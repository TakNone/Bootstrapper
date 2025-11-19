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
			webpage_id : 6828252246430729396,
			title : 'Lh2Q8oYFjlTrCXPq',
			description : 'nBFYE6h98vxwOWHp',
			photo_id : 276411143648347276,
			author : 'cALpyUTMWB5CSE7t',
			published_date : 66,
		),
	),
);
```