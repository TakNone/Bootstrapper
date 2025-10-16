# stickerSet

**Description** : *Represents a stickerset \(stickerpack\)*

**Layer** : 216

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
	installed_date : 30,
	id : -4525695608786577315,
	access_hash : 6587538791168070597,
	title : 'WRQ4DZA72lBOfiGg',
	short_name : 'BE2z0qGPtSvTpCaY',
	thumbs : array(
		$client->photoSizeEmpty(
			type : '7glOPo15ctivnV0X',
		),
		$client->photoSize(
			type : 'FdOGijwHeUR86kzN',
			w : 8,
			h : 92,
			size : 25,
		),
		$client->photoCachedSize(
			type : 'iV2o9pBba1KHDZ8l',
			w : 37,
			h : 14,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'hlHrIO0p3gdCxD76',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'VyKDa3PM8irfG4Sx',
			w : 55,
			h : 88,
			sizes : array(75),
		),
		$client->photoPathSize(
			type : 's6pLej43zUBSOEgQ',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	thumb_dc_id : 70,
	thumb_version : 69,
	thumb_document_id : -3135189290792094971,
	count : 55,
	hash : 0,
);
```