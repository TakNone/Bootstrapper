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
			webpage_id : 4906002843896057417,
			title : 'baXCQe4qOuNwAfPn',
			description : 'XWRKr2Q9d0ZjlAkM',
			photo_id : -404029003673923765,
			author : 'ahbS1HniulZLz2dN',
			published_date : 33,
		),
	),
);
```