# photo

**Description** : *Photo*

**Layer** : 233

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
	id : -6336667121360055588,
	access_hash : -6634918686765421468,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 91,
	sizes : array(
		$client->photoSizeEmpty(
			type : 'mFzt74IN2Vvc8bYX',
		),
		$client->photoSize(
			type : 'bUJkGLIn6as1oTe3',
			w : 18,
			h : 60,
			size : 77,
		),
		$client->photoCachedSize(
			type : 'eTcw84nzu5Xy9vjQ',
			w : 22,
			h : 76,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'k6Dbor18Gcs4X5NF',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'QM8dD3OkXnPpVzxb',
			w : 60,
			h : 63,
			sizes : array(13),
		),
		$client->photoPathSize(
			type : 'wi7UYsKyqTe1CvLh',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_sizes : array(
		$client->videoSize(
			type : 'xoAcpLXjw4zSTVFd',
			w : 80,
			h : 17,
			size : 55,
			video_start_ts : 1166788.35546875,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -1309599174300312404,
			background_colors : array(32),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 1440010476691621668,
			background_colors : array(50),
		),
	),
	dc_id : 17,
);
```