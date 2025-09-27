# photo

**Description** : *Photo*

**Layer** : 216

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
	id : -3768134933360856393,
	access_hash : 7039558209861394892,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 45,
	sizes : array(
		$client->photoSizeEmpty(
			type : '3T4urt1XVLdo9iWw',
		),
		$client->photoSize(
			type : 'pNoPlYMR0j5hq3za',
			w : 9,
			h : 82,
			size : 32,
		),
		$client->photoCachedSize(
			type : 'YRUxP2vMHrKjS1Of',
			w : 18,
			h : 87,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'UifI3j7gzhlcG65B',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'rskzjJYia71fICWv',
			w : 49,
			h : 73,
			sizes : array(87),
		),
		$client->photoPathSize(
			type : 'IZ43S7oW6OnUNgdK',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_sizes : array(
		$client->videoSize(
			type : 'vrXuke9ja7YPqZx6',
			w : 76,
			h : 58,
			size : 44,
			video_start_ts : 647051.1669921875,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : 5568807724602353201,
			background_colors : array(91),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 8894786830660939881,
			background_colors : array(81),
		),
	),
	dc_id : 76,
);
```