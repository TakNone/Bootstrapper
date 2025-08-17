# stickerSet

**Description** : *Represents a stickerset (stickerpack)*

**Layer** : 211

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
	installed_date : 34,
	id : -4640081163886427128,
	access_hash : -7528592191498495676,
	title : '3JWLYvG7hnFVuPe9',
	short_name : 'HmxLICFwqtrlavWG',
	thumbs : array(
		$client->photoSizeEmpty(
			type : 'q2cZs5Tf9gVnbUkE',
		),
		$client->photoSize(
			type : 'gwbyZhvW9F0XCcHK',
			w : 93,
			h : 10,
			size : 85,
		),
		$client->photoCachedSize(
			type : 'kbpzloxnwXWDmTPQ',
			w : 23,
			h : 99,
			bytes : '?PLiveProtoZ?J??',
		),
		$client->photoStrippedSize(
			type : '3vbNtBe4zIPSnU7O',
			bytes : '
S]?5LiveProto?z?1',
		),
		$client->photoSizeProgressive(
			type : 'OthN2nZYaMU98Sy5',
			w : 70,
			h : 80,
			sizes : array(78),
		),
		$client->photoPathSize(
			type : '1shMKZkNceuOxgtC',
			bytes : 'PE<?LiveProto"A?D',
		),
	),
	thumb_dc_id : 30,
	thumb_version : 80,
	thumb_document_id : 3068412854647120990,
	count : 63,
	hash : 14,
);
```