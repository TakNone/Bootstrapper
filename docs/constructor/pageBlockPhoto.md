# pageBlockPhoto

**Description** : *A photo*

**Layer** : 218

```tl
pageBlockPhoto#1759c560 flags:# photo_id:long caption:PageCaption url:flags.0?string webpage_id:flags.0?long = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	photo_id : 6942417218893428856,
	caption : $client->pageCaption(
		text : $client->textEmpty(),
		credit : $client->textEmpty(),
	),
	url : 'https://docs.liveproto.dev',
	webpage_id : 2259141600853723885,
);
```