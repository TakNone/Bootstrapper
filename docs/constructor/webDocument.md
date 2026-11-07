# webDocument

**Description** : *Remote document*

**Layer** : 233

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
	access_hash : 1378341369990944063,
	size : 85,
	mime_type : 'hucRBlwiHtQZp2Dn',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 99,
			h : 47,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'HoFkmINld3jsnXJ6',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 72,
				x : 1316360.7880859375,
				y : 1897774.3955078125,
				zoom : 621627.5458984375,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1890712.103515625,
			w : 45,
			h : 18,
			preload_prefix_size : 18,
			video_start_ts : -2051849.537109375,
			video_codec : 'bTkhNEIvxrfjBApW',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 38,
			title : 'iv3PTDS7M6upoUXL',
			performer : 'D7OYAZxTpyGS6ijC',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'd5MQaOe9pNP7Gkr1',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'cGLMWxHPiUCFN8wO',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```