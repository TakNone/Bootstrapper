# photo

**Description** : *Photo*

**Layer** : 218

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
	id : 8204345990589712371,
	access_hash : -3493709282900354358,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 54,
	sizes : array(
		$client->photoSizeEmpty(
			type : 'F46qS97NEX2io18a',
		),
		$client->photoSize(
			type : 'r46wIiRdj8EMHZST',
			w : 87,
			h : 95,
			size : 77,
		),
		$client->photoCachedSize(
			type : 'kmCTPpJxlVeq0BQK',
			w : 98,
			h : 33,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : '3Kik7gdMVBzj5mPZ',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'Opf0l7BJhbdrtRGQ',
			w : 96,
			h : 78,
			sizes : array(55),
		),
		$client->photoPathSize(
			type : 'h3MZL4bDxVnd8BYa',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_sizes : array(
		$client->videoSize(
			type : 'uCBLsexVqTnrXt89',
			w : 38,
			h : 37,
			size : 38,
			video_start_ts : 1401473.80078125,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -836088700640104039,
			background_colors : array(12),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 1269169416590942610,
			background_colors : array(58),
		),
	),
	dc_id : 80,
);
```