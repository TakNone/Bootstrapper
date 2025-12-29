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
			webpage_id : 6054593839379505641,
			title : '9o1qif4kOmJDFs7S',
			description : '8XfuReNdzBOKA53U',
			photo_id : -1425209204005231022,
			author : 'JjYLoXgH06Unb1NR',
			published_date : 31,
		),
	),
);
```