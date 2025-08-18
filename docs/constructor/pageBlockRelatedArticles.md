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
			webpage_id : 3651893810889393728,
			title : 'Zo0sMcS9XDPKzBQ4',
			description : 'qeU36w0XukRyWjBT',
			photo_id : 1120618244133352807,
			author : 'tndpG1DxuWMhq9e3',
			published_date : 9,
		),
	),
);
```