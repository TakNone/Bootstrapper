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
	id : 4730579409501838065,
	access_hash : 8964329083355666555,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 1,
	sizes : array(
		$client->photoSizeEmpty(
			type : 'o0mpYXZV3CWw28ar',
		),
		$client->photoSize(
			type : '67rpXnGV4zgylkJh',
			w : 97,
			h : 90,
			size : 60,
		),
		$client->photoCachedSize(
			type : 'K7n1rcuUBkFZiYqg',
			w : 70,
			h : 97,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'CpRxfm5BXzM4yKeD',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'WHezCmTEAxyPgnXw',
			w : 24,
			h : 26,
			sizes : array(28),
		),
		$client->photoPathSize(
			type : 'dvGMygtAN6r2aReo',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_sizes : array(
		$client->videoSize(
			type : '19w5FYjL8PkTMSO2',
			w : 28,
			h : 76,
			size : 49,
			video_start_ts : -457616.7177734375,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : 2132467228010206970,
			background_colors : array(69),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : -6409495573659175339,
			background_colors : array(68),
		),
	),
	dc_id : 2,
);
```