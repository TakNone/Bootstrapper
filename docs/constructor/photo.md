# photo

**Description** : *Photo*

**Layer** : 229

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
	id : -1916952127120654275,
	access_hash : 4083345330408844642,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 13,
	sizes : array(
		$client->photoSizeEmpty(
			type : '3Olf45xXorweyLst',
		),
		$client->photoSize(
			type : '6931KI7gAptVql2m',
			w : 34,
			h : 63,
			size : 61,
		),
		$client->photoCachedSize(
			type : 'AR7yzNUSKkCHT1Im',
			w : 71,
			h : 21,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'yNIPx8UnFDSzfaMB',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'xXIo9TUBqHagNGvk',
			w : 74,
			h : 44,
			sizes : array(15),
		),
		$client->photoPathSize(
			type : '6f3Dtg1AZXsWVq2G',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_sizes : array(
		$client->videoSize(
			type : '20s8CjyIawZWAKf9',
			w : 57,
			h : 73,
			size : 4,
			video_start_ts : 1121119.2333984375,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : 8706066043548814506,
			background_colors : array(23),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 4560856780858647250,
			background_colors : array(56),
		),
	),
	dc_id : 21,
);
```