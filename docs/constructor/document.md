# document

**Description** : *Document*

**Layer** : 227

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
	id : 417343300750752406,
	access_hash : -5543354047145535006,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 68,
	mime_type : 'tU7IziCJVEAlq3Fv',
	size : -6008154113265304577,
	thumbs : array(
		$client->photoSizeEmpty(
			type : '5Z3tz7gvanUO2VfG',
		),
		$client->photoSize(
			type : 'MOpwANITZrHVsj4b',
			w : 83,
			h : 50,
			size : 95,
		),
		$client->photoCachedSize(
			type : '3RqOmG7yMnXCuFaI',
			w : 43,
			h : 91,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'huQgiIMTq62W35pm',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : '6NBihGDIMH4gebWP',
			w : 85,
			h : 56,
			sizes : array(23),
		),
		$client->photoPathSize(
			type : 'burG51ncTXlivsL4',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_thumbs : array(
		$client->videoSize(
			type : 'saUBpGoTMqbnKzvD',
			w : 52,
			h : 23,
			size : 38,
			video_start_ts : -1634178.2587890625,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -2048372527071111738,
			background_colors : array(28),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 6019108741176313277,
			background_colors : array(72),
		),
	),
	dc_id : 58,
	attributes : array(
		$client->documentAttributeImageSize(
			w : 10,
			h : 66,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'kxIPZYBrJSU4580C',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 41,
				x : 1461870.748046875,
				y : 1149158.3330078125,
				zoom : 1641259.5947265625,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 265945.02734375,
			w : 81,
			h : 19,
			preload_prefix_size : 69,
			video_start_ts : 1576546.423828125,
			video_codec : 'h3pV9QnA0TkbelHL',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 3,
			title : 'dkPTjeNZtJosyL4a',
			performer : 'zHTw6B1rv3VRamWo',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'MbpBwKqvRzECJWh4',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : '9vaBiSLQtWkYoMC0',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```