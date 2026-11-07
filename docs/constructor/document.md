# document

**Description** : *Document*

**Layer** : 233

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
	id : 1058717359930375588,
	access_hash : 4071933442022208791,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 55,
	mime_type : 'YEuLIBrqTSzi87bp',
	size : -1988022318441866104,
	thumbs : array(
		$client->photoSizeEmpty(
			type : 'IanqNZuvR2Q91xP8',
		),
		$client->photoSize(
			type : 'IcWXRfa8CLsKvY3Z',
			w : 33,
			h : 16,
			size : 65,
		),
		$client->photoCachedSize(
			type : 'yR4jYrPGi7L0AzpT',
			w : 10,
			h : 1,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'LEbRZgvFInC8w6WX',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'X3eVG0zDO4wuUdn1',
			w : 96,
			h : 25,
			sizes : array(97),
		),
		$client->photoPathSize(
			type : '0YNygfWRIJCd96GK',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_thumbs : array(
		$client->videoSize(
			type : '0eoC2ztgYkpB4sIL',
			w : 64,
			h : 10,
			size : 98,
			video_start_ts : -1037217.1923828125,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -8272463663386721227,
			background_colors : array(86),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : -5783189102615540574,
			background_colors : array(85),
		),
	),
	dc_id : 59,
	attributes : array(
		$client->documentAttributeImageSize(
			w : 32,
			h : 83,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'kf8VgNIjUOLlyToH',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 2,
				x : 244703.767578125,
				y : -182080.75,
				zoom : -1747003.23046875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 331740.271484375,
			w : 7,
			h : 8,
			preload_prefix_size : 85,
			video_start_ts : 1021787.0146484375,
			video_codec : 'Uhr9WZQgXIn5b78f',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 18,
			title : 'gG4LxUZfnFrAkYEC',
			performer : 'Fg0xX7pTDIVCJUl6',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'KO8jy6EWwi02sCqU',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'JP8jtOiNqXb0wWnd',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```