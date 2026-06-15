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
	id : -3884123779632869474,
	access_hash : -4677411251945659070,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 47,
	mime_type : 'Q5xdFf4KHGj9maCE',
	size : -4546429079646151486,
	thumbs : array(
		$client->photoSizeEmpty(
			type : 'LHkdhWbTqaYEOx3p',
		),
		$client->photoSize(
			type : 'ucAqfNv4lETWiKa6',
			w : 74,
			h : 93,
			size : 60,
		),
		$client->photoCachedSize(
			type : '4Lrcm7oIB2kY1NaE',
			w : 50,
			h : 39,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'uoncE7QmHKljFRvk',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'wWThzkrbaZCqin1e',
			w : 73,
			h : 41,
			sizes : array(14),
		),
		$client->photoPathSize(
			type : 'TsFlX9YvGhDU3Vec',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_thumbs : array(
		$client->videoSize(
			type : 'GmcTnuB6gXJ9blpS',
			w : 79,
			h : 54,
			size : 10,
			video_start_ts : -2008959.8017578125,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : 3459668693660715750,
			background_colors : array(91),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 4348633436242723402,
			background_colors : array(77),
		),
	),
	dc_id : 13,
	attributes : array(
		$client->documentAttributeImageSize(
			w : 79,
			h : 1,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'F4GKCzqYOoDtjfEp',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 5,
				x : -44517.029296875,
				y : -835005.8291015625,
				zoom : 2064516.4990234375,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -284821.3046875,
			w : 99,
			h : 99,
			preload_prefix_size : 8,
			video_start_ts : -1518967.4853515625,
			video_codec : 'zaoLUPdX5v2sgf4V',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 27,
			title : '1MY4q9ZgtNbsVeka',
			performer : 'WQKFfcJvuxOGkAUP',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'zpjiety3A8K6M4aS',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'lQLkqBy64KMiGf0n',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```