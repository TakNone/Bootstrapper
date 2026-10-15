# document

**Description** : *Document*

**Layer** : 229

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
	id : -8317906386389502843,
	access_hash : -152157038930473849,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 47,
	mime_type : 'xAt7vsKqD0pFaBrY',
	size : -6805180963081834353,
	thumbs : array(
		$client->photoSizeEmpty(
			type : 'xzpFs2ydJn0bQi1c',
		),
		$client->photoSize(
			type : 'GWvZoY6J0z92trEh',
			w : 15,
			h : 53,
			size : 60,
		),
		$client->photoCachedSize(
			type : 'm6jqcMzdrEwBU2Xk',
			w : 48,
			h : 28,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'Jtjw61PqrEfb7ncl',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'GVcLSxyjfzTmdoW6',
			w : 38,
			h : 73,
			sizes : array(81),
		),
		$client->photoPathSize(
			type : 'QwJy2sGeRvUXktuE',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_thumbs : array(
		$client->videoSize(
			type : '8qaDEyrKUjnI5fH6',
			w : 69,
			h : 92,
			size : 96,
			video_start_ts : -461967.4111328125,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : 2318256722516724695,
			background_colors : array(20),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 7752137319695600809,
			background_colors : array(1),
		),
	),
	dc_id : 4,
	attributes : array(
		$client->documentAttributeImageSize(
			w : 22,
			h : 88,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'jN8PYuLsdGA1gcHK',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 16,
				x : -1827685.7177734375,
				y : 1489071.3193359375,
				zoom : -1837432.0244140625,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -704082.5751953125,
			w : 95,
			h : 71,
			preload_prefix_size : 16,
			video_start_ts : 1564442.0087890625,
			video_codec : 'CjOYrGKJ7PbWuHF5',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 6,
			title : 'HW3bwoYZv0lLx6sU',
			performer : 'JwYxL2MSIigopcyC',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'Q0dYJWo5u8Vg9XMA',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'Q7qraiYbGO0RNPJc',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```