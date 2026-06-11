# pageBlockPhoto

**Description** : *A photo*

**Layer** : 227

```tl
pageBlockPhoto#1759c560 flags:# spoiler:flags.1?true photo_id:long caption:PageCaption url:flags.0?string webpage_id:flags.0?long = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **spoiler** | [`flags.1?true`](type/true) | NOTHING |
| <mark>photo_id</mark> | [`long`](type/long) | Photo ID |
| <mark>caption</mark> | [`PageCaption`](type/PageCaption) | Caption |
| **url** | [`flags.0?string`](type/string) | HTTP URL of page the photo leads to when clicked |
| **webpage_id** | [`flags.0?long`](type/long) | ID of preview of the page the photo leads to when clicked |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockPhoto(
	spoiler : true,
	photo_id : -4399763398781353220,
	caption : $client->pageCaption(
		text : $client->textEmpty(),
		credit : $client->textEmpty(),
	),
	url : 'https://docs.liveproto.dev',
	webpage_id : 4909433953362584076,
);
```