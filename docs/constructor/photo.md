# photo

**Description** : *Photo*

**Layer** : 222

```tl
photo#fb197a65 flags:# has_stickers:flags.0?true id:long access_hash:long file_reference:bytes date:int sizes:Vector<PhotoSize> video_sizes:flags.1?Vector<VideoSize> dc_id:int = Photo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : -4409159372717586460,
	access_hash : 5651168406550742976,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 77,
	sizes : array(
		$client->photoSizeEmpty(
			type : 'US1cMyNnRoh6W5mv',
		),
		$client->photoSize(
			type : '7lmrgtZYfUpNxRnb',
			w : 67,
			h : 13,
			size : 3,
		),
		$client->photoCachedSize(
			type : 'gFlpBTEW1f49OuLt',
			w : 71,
			h : 49,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'zRcU9Pgta5iA4xyJ',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'rOcsyvFtXBzUfnT7',
			w : 90,
			h : 59,
			sizes : array(10),
		),
		$client->photoPathSize(
			type : 'NMzqOixbADsZhCRk',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_sizes : array(
		$client->videoSize(
			type : '1UXIk0jtKVO6yLGm',
			w : 22,
			h : 52,
			size : 44,
			video_start_ts : 983759.8310546875,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : 1316852133860776908,
			background_colors : array(85),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 8877178366083493354,
			background_colors : array(58),
		),
	),
	dc_id : 79,
);
```