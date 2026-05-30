# pageBlockRelatedArticles

**Description** : *Related articles*

**Layer** : 222

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
			webpage_id : -8786444913006007926,
			title : 'kCEaVuKP3rYJfDqx',
			description : 'pinPxHcV3h1oYedm',
			photo_id : -504776525352984618,
			author : 'pwfdjgS8CWz30slo',
			published_date : 39,
		),
	),
);
```