# stickerSet

**Description** : *Represents a stickerset \(stickerpack\)*

**Layer** : 218

```tl
stickerSet#2dd14edc flags:# archived:flags.1?true official:flags.2?true masks:flags.3?true emojis:flags.7?true text_color:flags.9?true channel_emoji_status:flags.10?true creator:flags.11?true installed_date:flags.0?int id:long access_hash:long title:string short_name:string thumbs:flags.4?Vector<PhotoSize> thumb_dc_id:flags.4?int thumb_version:flags.4?int thumb_document_id:flags.8?long count:int hash:int = StickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **archived** | [`flags.1?true`](type/true) | Whether this stickerset was archived (due to too many saved stickers in the current account) |
| **official** | [`flags.2?true`](type/true) | Is this stickerset official |
| **masks** | [`flags.3?true`](type/true) | Is this a mask stickerset |
| **emojis** | [`flags.7?true`](type/true) | This is a custom emoji stickerset |
| **text_color** | [`flags.9?true`](type/true) | Whether the color of this TGS custom emoji stickerset should be changed to the text color when used in messages, the accent color if used as emoji status, white on chat photos, or another appropriate color based on context |
| **channel_emoji_status** | [`flags.10?true`](type/true) | If set, this custom emoji stickerset can be used in channel/supergroup emoji statuses |
| **creator** | [`flags.11?true`](type/true) | Whether we created this stickerset |
| **installed_date** | [`flags.0?int`](type/int) | When was this stickerset installed |
| <mark>id</mark> | [`long`](type/long) | ID of the stickerset |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash of stickerset |
| <mark>title</mark> | [`string`](type/string) | Title of stickerset |
| <mark>short_name</mark> | [`string`](type/string) | Short name of stickerset, used when sharing stickerset using stickerset deep links |
| **thumbs** | [`flags.4?Vector<PhotoSize>`](type/PhotoSize) | Stickerset thumbnail |
| **thumb_dc_id** | [`flags.4?int`](type/int) | DC ID of thumbnail |
| **thumb_version** | [`flags.4?int`](type/int) | Thumbnail version |
| **thumb_document_id** | [`flags.8?long`](type/long) | Document ID of custom emoji thumbnail, fetch the document using messages.getCustomEmojiDocuments |
| <mark>count</mark> | [`int`](type/int) | Number of stickers in pack |
| <mark>hash</mark> | [`int`](type/int) | Hash |

---

## Type

[StickerSet](type/StickerSet)

---

## Example

```php
$stickerSet = $client->stickerSet(
	archived : true,
	official : true,
	masks : true,
	emojis : true,
	text_color : true,
	channel_emoji_status : true,
	creator : true,
	installed_date : 89,
	id : -4858879421786219452,
	access_hash : -3876015004995848010,
	title : '3OKpFHJSkblXvAu0',
	short_name : 'sngQizPkKTrpC3Zh',
	thumbs : array(
		$client->photoSizeEmpty(
			type : 'DqQJuPozZ8UYcOra',
		),
		$client->photoSize(
			type : '9Q6YTZqwEjuXx14F',
			w : 78,
			h : 9,
			size : 73,
		),
		$client->photoCachedSize(
			type : 'GCfhIowVg01r6sz7',
			w : 44,
			h : 60,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : '5siaDSCT6MblvBeQ',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'gGNqvRQst6HpXdDw',
			w : 87,
			h : 52,
			sizes : array(58),
		),
		$client->photoPathSize(
			type : 'Hwi2zeVCsQWBhaYU',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	thumb_dc_id : 72,
	thumb_version : 89,
	thumb_document_id : 3374085932797277793,
	count : 65,
	hash : 0,
);
```