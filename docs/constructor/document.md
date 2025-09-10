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
	id : -5138492482856114022,
	access_hash : 6622838679054524176,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 45,
	mime_type : 'Srt0wIzJeANEPcLB',
	size : 3112854856596069394,
	thumbs : array(
		$client->photoSizeEmpty(
			type : 'c2Otn951x6Lvfm4h',
		),
		$client->photoSize(
			type : 'gIr5d3xFKaQvo8ED',
			w : 78,
			h : 9,
			size : 34,
		),
		$client->photoCachedSize(
			type : 'xtoIfhn3p9LvKruF',
			w : 56,
			h : 95,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'fvM32ZzPFiHONR0W',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : '0Y5FxChqnOfNVJUM',
			w : 44,
			h : 80,
			sizes : array(19),
		),
		$client->photoPathSize(
			type : 'U9QTFhw1ZmoxSukd',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_thumbs : array(
		$client->videoSize(
			type : 'JH0AGP2ImqK6rLUd',
			w : 66,
			h : 74,
			size : 63,
			video_start_ts : 28148.6328125,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : 3312648484614874986,
			background_colors : array(9),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 2742289593230166857,
			background_colors : array(1),
		),
	),
	dc_id : 7,
	attributes : array(
		$client->documentAttributeImageSize(
			w : 14,
			h : 13,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'WQZGmyI5l3XenSqB',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 9,
				x : 691568.017578125,
				y : -2047707.267578125,
				zoom : -1793809.5712890625,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1980248.521484375,
			w : 16,
			h : 45,
			preload_prefix_size : 69,
			video_start_ts : -1327240.39453125,
			video_codec : 'DKr3Me6WsUQFZPzk',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 2,
			title : 'yIUMFEZoOXbuDwNi',
			performer : '5CviPq1nJpaZOtSz',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'Jj7zEBSI4aQpFXms',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : '8bKBgIY0HAR1UNZh',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```