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
	id : 5528278135100720986,
	access_hash : -5875637498103770791,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 48,
	sizes : array(
		$client->photoSizeEmpty(
			type : '2MYOnuWf740ywqPs',
		),
		$client->photoSize(
			type : 'SpxHobjFKJG8nNml',
			w : 4,
			h : 77,
			size : 59,
		),
		$client->photoCachedSize(
			type : 'PYRMXjbviCDUh9QO',
			w : 18,
			h : 51,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'IhHD48k5QfXeFn9u',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'Dc3HvUVqtsr8lLge',
			w : 70,
			h : 54,
			sizes : array(79),
		),
		$client->photoPathSize(
			type : 'ExCS5l1WIUYwGLOR',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_sizes : array(
		$client->videoSize(
			type : 'lamQoVM8gIzUCxdq',
			w : 51,
			h : 3,
			size : 23,
			video_start_ts : -340346.6796875,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -800739288378245018,
			background_colors : array(30),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : -7994544406306448151,
			background_colors : array(14),
		),
	),
	dc_id : 40,
);
```