# document

**Description** : *Document*

**Layer** : 225

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
	id : -3237939648654131404,
	access_hash : 656168270846546624,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 37,
	mime_type : 'hiSuKeZkDNMQEaJy',
	size : 7423949072889232163,
	thumbs : array(
		$client->photoSizeEmpty(
			type : 'LQX9SfpNO1bVKsvk',
		),
		$client->photoSize(
			type : 'ncUS1LtFP6MVJDHu',
			w : 96,
			h : 65,
			size : 1,
		),
		$client->photoCachedSize(
			type : 'fTn3SduQpO9jqbEJ',
			w : 48,
			h : 94,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : '1yOzQnKqBwUoY8GS',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'rXCtDWqkZhzOixHa',
			w : 63,
			h : 12,
			sizes : array(43),
		),
		$client->photoPathSize(
			type : 'Y1jCDwbqdpXUM7KO',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_thumbs : array(
		$client->videoSize(
			type : 'sTXlOLxDoNbGWzcK',
			w : 63,
			h : 33,
			size : 50,
			video_start_ts : -1892924.4111328125,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -5062236624840348313,
			background_colors : array(34),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 5527142869978682084,
			background_colors : array(17),
		),
	),
	dc_id : 19,
	attributes : array(
		$client->documentAttributeImageSize(
			w : 14,
			h : 65,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'HLbwM1O9koQG8p2U',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 15,
				x : -1052276.33203125,
				y : 366137.7294921875,
				zoom : 83394.0185546875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -527627.556640625,
			w : 43,
			h : 99,
			preload_prefix_size : 70,
			video_start_ts : -483241.7958984375,
			video_codec : 'OLAeTB6Uhbpu05Nm',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 19,
			title : '4lnCOQuifNGXJVq0',
			performer : 'tvRAqf6xmKVPUiLe',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'AyMN50JilPO8BtwH',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'a3XIvh47jb1Cxftc',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```