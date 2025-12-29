# webDocumentNoProxy

**Description** : *Remote document that can be downloaded without proxying through telegram*

**Layer** : 218

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
	size : 42,
	mime_type : 'K8vsY12yTpiVBwtm',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 4,
			h : 94,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'EfLyWJiuzqKrRktP',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 13,
				x : 315138.943359375,
				y : 1109743.0703125,
				zoom : -377081.466796875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1012113.1494140625,
			w : 16,
			h : 64,
			preload_prefix_size : 63,
			video_start_ts : 901363.3857421875,
			video_codec : 'aV7UpGkXluFW64O8',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 61,
			title : 'UEKowxItN0CJznec',
			performer : 'sUoLWjYJNTPCIEMO',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'ut4i70BHD5ThXjMf',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'i36dFh2tvwSo0YZD',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```