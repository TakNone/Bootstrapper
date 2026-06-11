# pageBlockVideo

**Description** : *Video*

**Layer** : 227

```tl
pageBlockVideo#7c8fe7b6 flags:# autoplay:flags.0?true loop:flags.1?true spoiler:flags.2?true video_id:long caption:PageCaption = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **autoplay** | [`flags.0?true`](type/true) | Whether the video is set to autoplay |
| **loop** | [`flags.1?true`](type/true) | Whether the video is set to loop |
| **spoiler** | [`flags.2?true`](type/true) | NOTHING |
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
	spoiler : true,
	video_id : 2437643106425206420,
	caption : $client->pageCaption(
		text : $client->textEmpty(),
		credit : $client->textEmpty(),
	),
);
```