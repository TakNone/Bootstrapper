# photo

**Description** : *Photo*

**Layer** : 211

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
	id : -8281929665643220982,
	access_hash : -7439574778574380882,
	file_reference : '????LiveProto??kG5',
	date : 27,
	sizes : array(
		$client->photoSizeEmpty(
			type : 'chrmCBFT2fYkMV06',
		),
		$client->photoSize(
			type : 'za2xnK8q0tByQUM4',
			w : 99,
			h : 18,
			size : 26,
		),
		$client->photoCachedSize(
			type : 'GYbfjlNwpnuZFAhg',
			w : 67,
			h : 29,
			bytes : '?3?LiveProtoB?x??',
		),
		$client->photoStrippedSize(
			type : 'ofjKHy4pm2PYkWOw',
			bytes : '?4\\?LiveProtoE0C0',
		),
		$client->photoSizeProgressive(
			type : 'LaQ9KdVjnUbArwoC',
			w : 94,
			h : 21,
			sizes : array(81),
		),
		$client->photoPathSize(
			type : 'Ec6SdXgDr5uNpivM',
			bytes : '?Yܛ?LiveProto?~ycT',
		),
	),
	video_sizes : array(
		$client->videoSize(
			type : 'EIsTz4WlPHDwyvB9',
			w : 25,
			h : 38,
			size : 39,
			video_start_ts : -151481.888671875,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : 1511777849766889061,
			background_colors : array(43),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 157973846338312444,
			background_colors : array(54),
		),
	),
	dc_id : 43,
);
```