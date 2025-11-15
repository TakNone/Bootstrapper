# pageBlockVideo

**Description** : *Video*

**Layer** : 216

```tl
pageBlockVideo#7c8fe7b6 flags:# autoplay:flags.0?true loop:flags.1?true video_id:long caption:PageCaption = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **autoplay** | [`flags.0?true`](type/true) | Whether the video is set to autoplay |
| **loop** | [`flags.1?true`](type/true) | Whether the video is set to loop |
| <mark>video_id</mark> | [`long`](type/long) | Video ID |
| <mark>caption</mark> | [`PageCaption`](type/PageCaption) | Caption |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockVideo(
	autoplay : true,
	loop : true,
	video_id : -6353115735302081703,
	caption : $client->pageCaption(
		text : $client->textEmpty(),
		credit : $client->textEmpty(),
	),
);
```