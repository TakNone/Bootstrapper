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
			webpage_id : -4425400841657257546,
			title : 'xNXwuHybW4OQj9aE',
			description : '4beOvEyoQaKhmpXB',
			photo_id : -8103604076420663016,
			author : 'n1FEMGoHKUWfpO4P',
			published_date : 82,
		),
	),
);
```