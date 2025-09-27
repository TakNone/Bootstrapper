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
	id : -8603568539820723320,
	access_hash : 8313137429600813195,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 9,
	mime_type : 'ItiSej9lDchz3THY',
	size : -2025893265572624050,
	thumbs : array(
		$client->photoSizeEmpty(
			type : '5n8CjpyRtiTYdmuw',
		),
		$client->photoSize(
			type : '5jkbHpuZlI04gA9y',
			w : 84,
			h : 32,
			size : 25,
		),
		$client->photoCachedSize(
			type : 'oME8JApZwGxVfStm',
			w : 53,
			h : 3,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'SvUy9ICd75aYmVF2',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'O7xyX1zLQNt3v4uA',
			w : 76,
			h : 77,
			sizes : array(16),
		),
		$client->photoPathSize(
			type : 'Qs4DG8cg5VmLU9yo',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_thumbs : array(
		$client->videoSize(
			type : 'uZBh8joQ0LvwT9HO',
			w : 57,
			h : 21,
			size : 45,
			video_start_ts : 1096111.13671875,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -7154568467405822067,
			background_colors : array(49),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 8248635123115244367,
			background_colors : array(52),
		),
	),
	dc_id : 28,
	attributes : array(
		$client->documentAttributeImageSize(
			w : 40,
			h : 82,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'g1PexZvwzFWbVho4',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 99,
				x : -1189186.958984375,
				y : -1642135.42578125,
				zoom : -184471.9296875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 1653611.6728515625,
			w : 5,
			h : 53,
			preload_prefix_size : 9,
			video_start_ts : 1502612.048828125,
			video_codec : 'PCyJEtakZrMhFYSI',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 65,
			title : 'DpXo6mQI378yqScw',
			performer : 'vShZOsFHVIqikK8M',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'VWOhuS8JQxXbq0cf',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'qnfcQ20VHGp9WzFy',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```