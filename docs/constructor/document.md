# document

**Description** : *Document*

**Layer** : 218

```tl
document#8fd4c4d8 flags:# id:long access_hash:long file_reference:bytes date:int mime_type:string size:long thumbs:flags.0?Vector<PhotoSize> video_thumbs:flags.1?Vector<VideoSize> dc_id:int attributes:Vector<DocumentAttribute> = Document;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 1368270651452090234,
	access_hash : -4840568219584789557,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 33,
	mime_type : 'bJnmK7PAqz5BOUFL',
	size : 4760061095515291629,
	thumbs : array(
		$client->photoSizeEmpty(
			type : 's8S3QWKzUaPZJToI',
		),
		$client->photoSize(
			type : 'YH1CTtliR5gcsqn2',
			w : 26,
			h : 9,
			size : 87,
		),
		$client->photoCachedSize(
			type : 'G7ztIdy63FHm509D',
			w : 37,
			h : 27,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : '2rHO15RUFVB3gqyo',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'DkWTAVmeazMKxYSE',
			w : 43,
			h : 33,
			sizes : array(84),
		),
		$client->photoPathSize(
			type : 'wp1bqS2uDhQYxLlF',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_thumbs : array(
		$client->videoSize(
			type : 'fG8YaqEjXxWyegJC',
			w : 39,
			h : 62,
			size : 63,
			video_start_ts : 1756307.55859375,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : 5747381353821771745,
			background_colors : array(79),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : -9158756227014444229,
			background_colors : array(37),
		),
	),
	dc_id : 85,
	attributes : array(
		$client->documentAttributeImageSize(
			w : 93,
			h : 54,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'XHM2g6tbW9emp1K5',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 81,
				x : 189923.40625,
				y : -1831984.0908203125,
				zoom : 1955802.8955078125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -206428.001953125,
			w : 15,
			h : 57,
			preload_prefix_size : 25,
			video_start_ts : 1996955.8037109375,
			video_codec : 'BCmFbnD4MpLWzGNt',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 75,
			title : 'ThiO8lfSJruWxa2X',
			performer : 'GzPpNhOV83197uAZ',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'FckKjAwh3YqSoiDr',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'NVT5UcZY9CJGiQoq',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```