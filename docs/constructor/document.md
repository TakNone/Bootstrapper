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
	id : -773544680563432562,
	access_hash : 2010505931872121938,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 14,
	mime_type : 'GZO7pfjUstqVy524',
	size : 1672799349648535911,
	thumbs : array(
		$client->photoSizeEmpty(
			type : 'OiznMZH0DwCTlVsJ',
		),
		$client->photoSize(
			type : 'htBRSrWQ91PO3dFn',
			w : 51,
			h : 39,
			size : 29,
		),
		$client->photoCachedSize(
			type : 'OQ3xLvlUoHKztwu5',
			w : 80,
			h : 85,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'IAj8G2NBSHJUW6tE',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'bIH1mPCzS2GgFvwk',
			w : 50,
			h : 31,
			sizes : array(2),
		),
		$client->photoPathSize(
			type : 'fAPgnX63amhiMWNB',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_thumbs : array(
		$client->videoSize(
			type : 'oFOanZGmg5TC8hAr',
			w : 4,
			h : 80,
			size : 45,
			video_start_ts : 1308195.9423828125,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : 3117689162839091106,
			background_colors : array(60),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 1030689188074063048,
			background_colors : array(49),
		),
	),
	dc_id : 10,
	attributes : array(
		$client->documentAttributeImageSize(
			w : 51,
			h : 3,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'BY5Apr6MnTgvHL21',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 80,
				x : 1891909.5576171875,
				y : 1756434.4013671875,
				zoom : 976025.30859375,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -229454.3271484375,
			w : 50,
			h : 98,
			preload_prefix_size : 32,
			video_start_ts : -510324.755859375,
			video_codec : 'NFIoy8rTSfA6nRCX',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 17,
			title : '8WfkhU0Qd5qBP4VO',
			performer : 'ZWte87TuhHizvQDK',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : '65atUvRi1ep0IBs8',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'uNCWw7eFXZnMSlYs',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```