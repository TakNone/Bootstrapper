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
	id : 9171664804253774027,
	access_hash : 8976388073635623769,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 25,
	sizes : array(
		$client->photoSizeEmpty(
			type : '4kQM7hTDZXgebC0d',
		),
		$client->photoSize(
			type : 'PVJ9I4ZBObqm5zU1',
			w : 9,
			h : 45,
			size : 60,
		),
		$client->photoCachedSize(
			type : 'fgqbKYBrWh4pX0yc',
			w : 65,
			h : 20,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'YSjgdwoH2vVhtcpx',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'u7cprTHonN1B5gY2',
			w : 31,
			h : 44,
			sizes : array(56),
		),
		$client->photoPathSize(
			type : 'ZXyOh5kE0YdFv4pB',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_sizes : array(
		$client->videoSize(
			type : 'toAqCVPrKa7OnDZN',
			w : 68,
			h : 38,
			size : 22,
			video_start_ts : 66520.220703125,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -5387932979278602458,
			background_colors : array(35),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : -4355463676462725933,
			background_colors : array(53),
		),
	),
	dc_id : 29,
);
```