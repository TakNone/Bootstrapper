# photo

**Description** : *Photo*

**Layer** : 227

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
	id : -5746667535869888792,
	access_hash : 3360128928705354488,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 12,
	sizes : array(
		$client->photoSizeEmpty(
			type : 'iSnGhjBXqVrZ9Ib7',
		),
		$client->photoSize(
			type : '9fMZ1gwoALOkvtcr',
			w : 59,
			h : 20,
			size : 1,
		),
		$client->photoCachedSize(
			type : 'wnOtIPGXANQpxiRW',
			w : 11,
			h : 77,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'pnj9z2QLmGlxgfoe',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'tJcbYgWX4ehIzCGE',
			w : 73,
			h : 61,
			sizes : array(93),
		),
		$client->photoPathSize(
			type : 'reaT4sNyko8Ki9UA',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_sizes : array(
		$client->videoSize(
			type : 'CtPQrsOUFnLRz8h1',
			w : 11,
			h : 79,
			size : 45,
			video_start_ts : -315079.5400390625,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : 977872860661469722,
			background_colors : array(74),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : -2434171530864034446,
			background_colors : array(78),
		),
	),
	dc_id : 44,
);
```