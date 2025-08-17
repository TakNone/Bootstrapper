# photo

**Description** : *Photo*

**Layer** : 211

```tl
photo#fb197a65 flags:# has_stickers:flags.0?true id:long access_hash:long file_reference:bytes date:int sizes:Vector<PhotoSize> video_sizes:flags.1?Vector<VideoSize> dc_id:int = Photo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_stickers** | [`flags.0?true`](type/true) | Whether the photo has mask stickers attached to it |
| <mark>id</mark> | [`long`](type/long) | ID |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |
| <mark>file_reference</mark> | [`bytes`](type/bytes) | file reference |
| <mark>date</mark> | [`int`](type/int) | Date of upload |
| <mark>sizes</mark> | [`Vector<PhotoSize>`](type/PhotoSize) | Available sizes for download |
| **video_sizes** | [`flags.1?Vector<VideoSize>`](type/VideoSize) | For animated profiles, the MPEG4 videos |
| <mark>dc_id</mark> | [`int`](type/int) | DC ID to use for download |

---

## Type

[Photo](type/Photo)

---

## Example

```php
$photo = $client->photo(
	has_stickers : true,
	id : -7472821096807874101,
	access_hash : 5095386707154307679,
	file_reference : '???@LiveProto?k?',
	date : 95,
	sizes : array(
		$client->photoSizeEmpty(
			type : 'KWNXUsufSFbzqYcl',
		),
		$client->photoSize(
			type : '5bcOyDmYvoU7a0V6',
			w : 94,
			h : 99,
			size : 1,
		),
		$client->photoCachedSize(
			type : 'Yob7LhgJ0dQFeMar',
			w : 92,
			h : 45,
			bytes : 'd4???LiveProto?*??',
		),
		$client->photoStrippedSize(
			type : '2sMgBayfHcV7teIz',
			bytes : 'z??bLiveProto}V?c5',
		),
		$client->photoSizeProgressive(
			type : 'gjweYA1NFIOxP0H6',
			w : 57,
			h : 45,
			sizes : array(16),
		),
		$client->photoPathSize(
			type : 'Zy1hAElR2rGWfQ6L',
			bytes : 'Y??5LiveProto???',
		),
	),
	video_sizes : array(
		$client->videoSize(
			type : 'w27seSlhYjGqITrf',
			w : 96,
			h : 42,
			size : 73,
			video_start_ts : -474850.845703125,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : 6210941275537678984,
			background_colors : array(18),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 7510328297892276414,
			background_colors : array(73),
		),
	),
	dc_id : 79,
);
```