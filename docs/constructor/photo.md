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
	id : 9086815554270539570,
	access_hash : 5737178170278821619,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 38,
	sizes : array(
		$client->photoSizeEmpty(
			type : 'TzW6yo5cpAbs1keg',
		),
		$client->photoSize(
			type : 'W1LwNOiJVlBXhrab',
			w : 87,
			h : 24,
			size : 52,
		),
		$client->photoCachedSize(
			type : 'jSLHwIdVAJyXOWRa',
			w : 58,
			h : 21,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'qK16MHkBgST74LuF',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'rZYkn8UHAPh5QzM3',
			w : 22,
			h : 59,
			sizes : array(72),
		),
		$client->photoPathSize(
			type : 'YJeGgTQkv5BV4izL',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_sizes : array(
		$client->videoSize(
			type : 'a7mZXVwJUL6rCO1Q',
			w : 68,
			h : 39,
			size : 72,
			video_start_ts : 1304108.3779296875,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -5168815285001706713,
			background_colors : array(16),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 2552603252817275291,
			background_colors : array(87),
		),
	),
	dc_id : 53,
);
```