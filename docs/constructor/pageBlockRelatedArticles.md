# pageBlockRelatedArticles

**Description** : *Related articles*

**Layer** : 233

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
			webpage_id : 1004921186934947975,
			title : 'YG87L2RIoTWQ0muk',
			description : 'lFoEb7r1Ahyu4gY8',
			photo_id : 1729212025046987858,
			author : 'V8Q5RB1X6lFJCuao',
			published_date : 48,
		),
	),
);
```