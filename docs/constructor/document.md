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
	id : 2298217601929256234,
	access_hash : -5112821713442376235,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 5,
	mime_type : 'ZjVWefi2qzyJlKYC',
	size : 1913653632733171772,
	thumbs : array(
		$client->photoSizeEmpty(
			type : 'uYLgfbICZSJ5K7RQ',
		),
		$client->photoSize(
			type : 'oGyjLcKiTzg2639x',
			w : 5,
			h : 67,
			size : 64,
		),
		$client->photoCachedSize(
			type : 'TRQOV0fv3xemYCNr',
			w : 88,
			h : 52,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : '8231yRkuqliWKTvO',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : 'ZCaPNqIh9WDHxfgM',
			w : 16,
			h : 86,
			sizes : array(45),
		),
		$client->photoPathSize(
			type : '8K2Rl0x5BjFqE391',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_thumbs : array(
		$client->videoSize(
			type : 'QaA2DikdpqTgUG4z',
			w : 70,
			h : 74,
			size : 99,
			video_start_ts : 1433937.083984375,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -3226347435745194834,
			background_colors : array(51),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 1435952470436964333,
			background_colors : array(71),
		),
	),
	dc_id : 82,
	attributes : array(
		$client->documentAttributeImageSize(
			w : 38,
			h : 13,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'GnOk1oEDyIPXV9H3',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 41,
				x : 1238983.7080078125,
				y : 1472325.0771484375,
				zoom : -1980497.55078125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 982670.1923828125,
			w : 8,
			h : 42,
			preload_prefix_size : 10,
			video_start_ts : 709476.373046875,
			video_codec : '5sG8xIpdJjLfTSCH',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 36,
			title : 'MAjZwDdHQqKl16EL',
			performer : 't2VRdyOqPaTzBJon',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'Aw4t75jG9vpMZdOg',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'tJMxrwX496meGpCs',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```