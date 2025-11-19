# webDocument

**Description** : *Remote document*

**Layer** : 218

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
	access_hash : -5772879899013608935,
	size : 52,
	mime_type : '3iIoBtQSOgTZcNmw',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 17,
			h : 79,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'mf0qPTSCFle7t8ov',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 49,
				x : 609618.6435546875,
				y : 1192903.8701171875,
				zoom : -538187.8017578125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1347701.888671875,
			w : 87,
			h : 0,
			preload_prefix_size : 85,
			video_start_ts : -1498928.1298828125,
			video_codec : '5UIRXEfy82Q9hd37',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 30,
			title : 'sDJRhBTbeEXAMF6I',
			performer : '6poNG1JrHVDigFPe',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'oU2349uCPL10kphw',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'OIMPVXZnebY4a1Fs',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```