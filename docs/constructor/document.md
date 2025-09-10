# document

**Description** : *Document*

**Layer** : 214

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
	id : 1176798879389682804,
	access_hash : 8963345455067931780,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 18,
	mime_type : 'raDLvCKk01MuFHPs',
	size : -8506513255295173635,
	thumbs : array(
		$client->photoSizeEmpty(
			type : 'aIhTzXF2LAOexPv4',
		),
		$client->photoSize(
			type : 'KTpSXokns28MgUc3',
			w : 12,
			h : 36,
			size : 97,
		),
		$client->photoCachedSize(
			type : 'xq2F3tiQ8TGMsZCj',
			w : 92,
			h : 99,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'QRV81FrHdWkm6L9p',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'MxaXlWeT5R4SHEuY',
			w : 99,
			h : 41,
			sizes : array(32),
		),
		$client->photoPathSize(
			type : 'OLZD4svRzWUTdEJF',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_thumbs : array(
		$client->videoSize(
			type : '4yr2T5nhOSJ8YHjg',
			w : 67,
			h : 58,
			size : 8,
			video_start_ts : 1243404.5048828125,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -6060787974044228463,
			background_colors : array(29),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : -4408210125253601605,
			background_colors : array(8),
		),
	),
	dc_id : 51,
	attributes : array(
		$client->documentAttributeImageSize(
			w : 0,
			h : 38,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'erSaY7bvDuZ5CpVP',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 9,
				x : 1797571.40234375,
				y : -1510010.0849609375,
				zoom : -754563.8212890625,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 1389849.142578125,
			w : 38,
			h : 4,
			preload_prefix_size : 96,
			video_start_ts : -166539.2255859375,
			video_codec : 'JUy3KA7vWdhB18il',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 35,
			title : 'xHqjXCIJOdQ9VotD',
			performer : 'KbpIGE9TlWuL7BUc',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'HwxaR1obnfCg9lcr',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : '0O71yBmM9rtY3DCk',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```