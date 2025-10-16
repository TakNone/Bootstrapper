# document

**Description** : *Document*

**Layer** : 216

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
	id : -8044681657514752060,
	access_hash : -4325394969028498551,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 9,
	mime_type : 'K2OYZ1Bo6Gwa4FLj',
	size : -251143747115535865,
	thumbs : array(
		$client->photoSizeEmpty(
			type : '45ceUp9XoijyYIJt',
		),
		$client->photoSize(
			type : 'W6tpHmDnA4osc9ia',
			w : 32,
			h : 94,
			size : 12,
		),
		$client->photoCachedSize(
			type : 'zuhcRCVIN6MpT0d8',
			w : 6,
			h : 39,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'ybjp8zQKO9wql5gF',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'rzpdqtREwx3L2QO5',
			w : 28,
			h : 83,
			sizes : array(66),
		),
		$client->photoPathSize(
			type : 'FyDvaRJcz1CVKnLg',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_thumbs : array(
		$client->videoSize(
			type : 'e3XypgKTh4rBOaPS',
			w : 56,
			h : 86,
			size : 32,
			video_start_ts : -629861.794921875,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : 8563845711753031435,
			background_colors : array(49),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : -5431838633514365400,
			background_colors : array(43),
		),
	),
	dc_id : 91,
	attributes : array(
		$client->documentAttributeImageSize(
			w : 100,
			h : 1,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'sm1bTfIvKFLoPy5i',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 54,
				x : 1902330.91015625,
				y : 611136.82421875,
				zoom : 1471467.1611328125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1964620.892578125,
			w : 65,
			h : 70,
			preload_prefix_size : 87,
			video_start_ts : 350338.05078125,
			video_codec : 'uhGnJXEQToji6H87',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 1,
			title : '9c0zuIf5nAVq3KlR',
			performer : 'LkoegHnquT6raItQ',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'Srghl3jUZdCmyRLk',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : '5fGZSyB76lmzvAxV',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```