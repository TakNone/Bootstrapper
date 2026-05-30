# webDocumentNoProxy

**Description** : *Remote document that can be downloaded without proxying through telegram*

**Layer** : 222

```tl
webDocumentNoProxy#f9c8bcc6 url:string size:int mime_type:string attributes:Vector<DocumentAttribute> = WebDocument;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Document URL |
| <mark>size</mark> | [`int`](type/int) | File size |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes for media types |

---

## Type

[WebDocument](type/WebDocument)

---

## Example

```php
$webDocument = $client->webDocumentNoProxy(
	url : 'https://docs.liveproto.dev',
	size : 41,
	mime_type : 'bOV6qC1RzAH0QdNm',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 14,
			h : 36,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'hWJvolCeOkTYPX4d',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 40,
				x : 942847.076171875,
				y : 751900.322265625,
				zoom : -947300.650390625,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 1428289.1826171875,
			w : 33,
			h : 88,
			preload_prefix_size : 38,
			video_start_ts : -384424.470703125,
			video_codec : 'G6O4PeNvmW19jZVk',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 90,
			title : '0YaqdDlcVhEn2FrL',
			performer : 'A8rs4U5zP3vhoRiV',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'miA12VdzFgBQ5kwn',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'VBclsFqPW1Yv6Dk3',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```