# webDocument

**Description** : *Remote document*

**Layer** : 222

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
	access_hash : -7586387050052171446,
	size : 47,
	mime_type : 'WaV0DYxT53pMrlsg',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 23,
			h : 71,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'oY54ByfAgIRX8rFt',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 57,
				x : 523306.6220703125,
				y : 1437463.1923828125,
				zoom : -1765258.0791015625,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1281966.7294921875,
			w : 73,
			h : 14,
			preload_prefix_size : 69,
			video_start_ts : -1159681.5810546875,
			video_codec : '5SjVpmiac1UTZCMk',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 19,
			title : 'FyYdlMnSONB5JeK4',
			performer : 'lXbmVCg6fGstYyKw',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'dMNWmEBjbULvGSzI',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : '6dsKx09EMaYQkUCq',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```