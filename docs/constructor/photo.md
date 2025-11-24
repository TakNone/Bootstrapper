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
	id : -4597912677985758132,
	access_hash : 6071705127888446743,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 38,
	sizes : array(
		$client->photoSizeEmpty(
			type : '2vZsVLY6Q3lmMKF9',
		),
		$client->photoSize(
			type : 'S6lt9Vg8wI7xZJpv',
			w : 19,
			h : 85,
			size : 76,
		),
		$client->photoCachedSize(
			type : '2QSlDmed5YER3MU9',
			w : 16,
			h : 76,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'duimY7IR5VMqAhQ6',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'wZ6tl53LmSNMWX7G',
			w : 57,
			h : 31,
			sizes : array(3),
		),
		$client->photoPathSize(
			type : 'GslAMVchTjq9k6Sx',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_sizes : array(
		$client->videoSize(
			type : 'pKrGniYxZHLIWcge',
			w : 53,
			h : 14,
			size : 45,
			video_start_ts : 387785.232421875,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -6570756082047778736,
			background_colors : array(38),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 8100758753629964655,
			background_colors : array(17),
		),
	),
	dc_id : 70,
);
```