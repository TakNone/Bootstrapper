# photo

**Description** : *Photo*

**Layer** : 225

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
	id : 7725434377075103075,
	access_hash : 8767181350258991354,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 4,
	sizes : array(
		$client->photoSizeEmpty(
			type : '5vhX7TJjdWIbK4Oc',
		),
		$client->photoSize(
			type : 'Y0DVNUvt3O6euIWx',
			w : 69,
			h : 99,
			size : 86,
		),
		$client->photoCachedSize(
			type : 'uziLpMkUb5VD4TBv',
			w : 71,
			h : 81,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'okwnDP1FtqzHTiXc',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'xwE9vZO8RjoWUaQr',
			w : 76,
			h : 19,
			sizes : array(92),
		),
		$client->photoPathSize(
			type : 'cMFnVQeT6f1D47ox',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_sizes : array(
		$client->videoSize(
			type : 'GvTrahDE4M8A6ZRJ',
			w : 11,
			h : 6,
			size : 16,
			video_start_ts : -1746171.9033203125,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -535856360900707250,
			background_colors : array(97),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 7775078567268877114,
			background_colors : array(44),
		),
	),
	dc_id : 26,
);
```