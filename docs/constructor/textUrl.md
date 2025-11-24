# textUrl

**Description** : *Link*

**Layer** : 218

```tl
textUrl#3c2884c1 text:RichText url:string webpage_id:long = RichText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`RichText`](type/RichText) | Text of link |
| <mark>url</mark> | [`string`](type/string) | Webpage HTTP URL |
| <mark>webpage_id</mark> | [`long`](type/long) | If a preview was already generated for the page, the page ID |

---

## Type

[RichText](type/RichText)

---

## Example

```php
$richText = $client->textUrl(
	text : $client->textEmpty(),
	url : 'https://docs.liveproto.dev',
	webpage_id : 1889976860852240565,
);
```