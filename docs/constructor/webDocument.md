# webDocument

**Description** : *Remote document*

**Layer** : 216

```tl
webDocument#1c570ed1 url:string access_hash:long size:int mime_type:string attributes:Vector<DocumentAttribute> = WebDocument;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Document URL |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |
| <mark>size</mark> | [`int`](type/int) | File size |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes for media types |

---

## Type

[WebDocument](type/WebDocument)

---

## Example

```php
$webDocument = $client->webDocument(
	url : 'https://docs.liveproto.dev',
	access_hash : 5685024957275365986,
	size : 82,
	mime_type : 'B7ASLsuOj80N163e',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 2,
			h : 5,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'poqYWgC9hSsDPxFO',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 90,
				x : -204687.4423828125,
				y : -125009.384765625,
				zoom : 716887.923828125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1406257.353515625,
			w : 51,
			h : 71,
			preload_prefix_size : 9,
			video_start_ts : -500465.6591796875,
			video_codec : 'IienagkJhsEGH5TN',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 73,
			title : 'e5mb6kJO1t4iy9la',
			performer : 'ZdzbcL7HPWeB8k0t',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'GcQbxklSOCfrALa8',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'B6cCWP9jLiDGrQkq',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```