# photo

**Description** : *Photo*

**Layer** : 214

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
	id : -5034729073069852651,
	access_hash : 5442272407178465715,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 42,
	sizes : array(
		$client->photoSizeEmpty(
			type : '7qza0WlB9dkQ3S4C',
		),
		$client->photoSize(
			type : 'dp93yOfeBQ2FlmsJ',
			w : 88,
			h : 56,
			size : 20,
		),
		$client->photoCachedSize(
			type : 'mjt3OMi6Y7URWEry',
			w : 87,
			h : 0,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'G0n6dBWRsuzaLAMf',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'qrCEJ2YD9SeZ7j0d',
			w : 83,
			h : 5,
			sizes : array(41),
		),
		$client->photoPathSize(
			type : '26T3EAJmsKWdcMg0',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_sizes : array(
		$client->videoSize(
			type : 'NVLz6msiQdqI2EnY',
			w : 97,
			h : 4,
			size : 12,
			video_start_ts : -840343.0849609375,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : 2909007373934210916,
			background_colors : array(12),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : -5573562355977292001,
			background_colors : array(17),
		),
	),
	dc_id : 39,
);
```