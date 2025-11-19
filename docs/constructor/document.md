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
	id : -8159144599684574259,
	access_hash : -1461206712504779018,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 84,
	mime_type : 'qtBiXzuDj9vkxNrC',
	size : -3998478259730648273,
	thumbs : array(
		$client->photoSizeEmpty(
			type : 'sOvADVrqdQJStjbW',
		),
		$client->photoSize(
			type : 'okXl3KBdfG7s6x0u',
			w : 78,
			h : 62,
			size : 81,
		),
		$client->photoCachedSize(
			type : 'KvUnZuXGHEQh3Nxg',
			w : 35,
			h : 46,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'yXdOExjNkzICpAgS',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'SOfPAWukKprU1VJd',
			w : 41,
			h : 47,
			sizes : array(28),
		),
		$client->photoPathSize(
			type : 'PzK9JSXjkZ840ud1',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_thumbs : array(
		$client->videoSize(
			type : 'bxXQ1okA0p9hDIKB',
			w : 11,
			h : 58,
			size : 36,
			video_start_ts : 377897.2099609375,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -2374268308811026841,
			background_colors : array(23),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : -5493241526555047885,
			background_colors : array(46),
		),
	),
	dc_id : 90,
	attributes : array(
		$client->documentAttributeImageSize(
			w : 77,
			h : 52,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'NVgIfW4uc9JFO1t3',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 82,
				x : -260868.1513671875,
				y : 1288392.6708984375,
				zoom : -933915.3359375,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -163526.8994140625,
			w : 49,
			h : 47,
			preload_prefix_size : 54,
			video_start_ts : 73462.5927734375,
			video_codec : 'cxZpy2vfS0ibu4UX',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 99,
			title : '4UmPxJVTtnbOyCMK',
			performer : 'KkW6RLe59E1FOQvD',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'yVCa3oc2HwKRMB5J',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : '1YaFV6kE23LlCej9',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```