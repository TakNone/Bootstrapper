# document

**Description** : *Document*

**Layer** : 222

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
	id : 3773650424415513606,
	access_hash : 618353131139586192,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 52,
	mime_type : 'G9exQwItdiC8EPDW',
	size : -1062908109262110854,
	thumbs : array(
		$client->photoSizeEmpty(
			type : 't6flI3Tyx7942UdF',
		),
		$client->photoSize(
			type : 'ipqG8de5KwY6XDar',
			w : 67,
			h : 97,
			size : 7,
		),
		$client->photoCachedSize(
			type : 'IC1wyf6tEnBDNarP',
			w : 8,
			h : 17,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'WhBMyOV6GE02bp7L',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : '8CcUdw1PQ4veNXAf',
			w : 59,
			h : 33,
			sizes : array(20),
		),
		$client->photoPathSize(
			type : '0b9lDGXMyHqQAhrU',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_thumbs : array(
		$client->videoSize(
			type : '9yu1ZQiINEhj4onK',
			w : 36,
			h : 55,
			size : 11,
			video_start_ts : -425836.34375,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -6896128046873816585,
			background_colors : array(74),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 7887593056949327054,
			background_colors : array(23),
		),
	),
	dc_id : 68,
	attributes : array(
		$client->documentAttributeImageSize(
			w : 3,
			h : 18,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'yi7VUvpnMLkOTX8P',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 42,
				x : -1262737.2080078125,
				y : -1574448.2880859375,
				zoom : 1829694.1005859375,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 766694.8056640625,
			w : 27,
			h : 24,
			preload_prefix_size : 91,
			video_start_ts : -1735019.9892578125,
			video_codec : 'mQ48o9CTfjq6xHFR',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 52,
			title : 'ismIlfFOKYTSCuc9',
			performer : 'gL2i3RwOl89MduaH',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'dIyGbrH3Ou6SFT4c',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'wRm0okXqxQnE5iUd',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```