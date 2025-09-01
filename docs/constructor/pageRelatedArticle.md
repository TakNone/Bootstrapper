# pageRelatedArticle

**Description** : *Related article*

**Layer** : 214

```tl
pageRelatedArticle#b390dc08 flags:# url:string webpage_id:long title:flags.0?string description:flags.1?string photo_id:flags.2?long author:flags.3?string published_date:flags.4?int = PageRelatedArticle;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>url</mark> | [`string`](type/string) | URL of article |
| <mark>webpage_id</mark> | [`long`](type/long) | Webpage ID of generated IV preview |
| **title** | [`flags.0?string`](type/string) | Title |
| **description** | [`flags.1?string`](type/string) | Description |
| **photo_id** | [`flags.2?long`](type/long) | ID of preview photo |
| **author** | [`flags.3?string`](type/string) | Author name |
| **published_date** | [`flags.4?int`](type/int) | Date of publication |

---

## Type

[PageRelatedArticle](type/PageRelatedArticle)

---

## Example

```php
$pageRelatedArticle = $client->pageRelatedArticle(
	url : 'https://docs.liveproto.dev',
	webpage_id : -276338288805856670,
	title : 'DdtszklFWE6qycf4',
	description : 'OzfUcmRJTMrY6nN9',
	photo_id : 4826791434761508571,
	author : 'Bd9SxGhp0K47HU3N',
	published_date : 79,
);
```