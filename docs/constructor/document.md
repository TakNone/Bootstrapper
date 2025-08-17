# document

**Description** : *Document*

**Layer** : 211

```tl
document#8fd4c4d8 flags:# id:long access_hash:long file_reference:bytes date:int mime_type:string size:long thumbs:flags.0?Vector<PhotoSize> video_thumbs:flags.1?Vector<VideoSize> dc_id:int attributes:Vector<DocumentAttribute> = Document;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`long`](type/long) | Document ID |
| <mark>access_hash</mark> | [`long`](type/long) | Check sum, dependent on document ID |
| <mark>file_reference</mark> | [`bytes`](type/bytes) | File reference |
| <mark>date</mark> | [`int`](type/int) | Creation date |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type |
| <mark>size</mark> | [`long`](type/long) | Size |
| **thumbs** | [`flags.0?Vector<PhotoSize>`](type/PhotoSize) | Thumbnails |
| **video_thumbs** | [`flags.1?Vector<VideoSize>`](type/VideoSize) | Video thumbnails |
| <mark>dc_id</mark> | [`int`](type/int) | DC ID |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes |

---

## Type

[Document](type/Document)

---

## Example

```php
$document = $client->document(
	id : 6150054556810197207,
	access_hash : -4284545562612614754,
	file_reference : '?f?b?LiveProto??AJ',
	date : 83,
	mime_type : 'qjQLWsStxM9mROBk',
	size : 3357425321670480842,
	thumbs : array(
		$client->photoSizeEmpty(
			type : 'iRpSzXWckyjPIfgH',
		),
		$client->photoSize(
			type : 'WkhfGIgvCdTlizAm',
			w : 59,
			h : 50,
			size : 15,
		),
		$client->photoCachedSize(
			type : 'ko6cKwBMDJegnpZy',
			w : 87,
			h : 61,
			bytes : 'ѓ??LiveProto]h???',
		),
		$client->photoStrippedSize(
			type : '8v4iJyUhsXYCH31Q',
			bytes : 'CG??LiveProto??w,',
		),
		$client->photoSizeProgressive(
			type : 'Qsu6P1aStIXEKgG7',
			w : 86,
			h : 6,
			sizes : array(4),
		),
		$client->photoPathSize(
			type : 'RZ32zjECPvpbQJ0G',
			bytes : '?K+}LiveProto1??[?',
		),
	),
	video_thumbs : array(
		$client->videoSize(
			type : 'ufAsXjnmetyYoDNv',
			w : 30,
			h : 98,
			size : 87,
			video_start_ts : -28353.490234375,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -7794172957010990484,
			background_colors : array(83),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 4686821288025076930,
			background_colors : array(21),
		),
	),
	dc_id : 34,
	attributes : array(
		$client->documentAttributeImageSize(
			w : 92,
			h : 0,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'YRZQ2cqjpK05W89e',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 13,
				x : -143485.1796875,
				y : 1056783.029296875,
				zoom : 1490156.4990234375,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -78289.6845703125,
			w : 35,
			h : 68,
			preload_prefix_size : 9,
			video_start_ts : -895569.62109375,
			video_codec : 'DAW8VLGhjR31PzIK',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 85,
			title : 'E0ewhYPOLHzxN6pU',
			performer : '6aMnvlS0hBKCDG7R',
			waveform : '??#?LiveProto\\?ʁ?',
		),
		$client->documentAttributeFilename(
			file_name : 'Y6kMfh3oy97UcRuZ',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'LxyZvPTnGORcKSFg',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```