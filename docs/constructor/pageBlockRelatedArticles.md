# pageBlockRelatedArticles

**Description** : *Related articles*

**Layer** : 216

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
			webpage_id : 8463384614119172252,
			title : 'w9XpQjsV5oIf7mxy',
			description : 'ujzxLO0yGEVrCqlD',
			photo_id : -1857856478410883129,
			author : 'PQAK8NtGsBjxVYiM',
			published_date : 48,
		),
	),
);
```