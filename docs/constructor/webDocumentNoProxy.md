# webDocumentNoProxy

**Description** : *Remote document that can be downloaded without proxying through telegram*

**Layer** : 214

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
	size : 71,
	mime_type : 'LgMGf2nV1jdetxNw',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 83,
			h : 22,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'A0gyDTC6viZ28mJ7',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 54,
				x : -1523513.265625,
				y : -1088907.578125,
				zoom : 286940.2958984375,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1260597.369140625,
			w : 86,
			h : 87,
			preload_prefix_size : 89,
			video_start_ts : 1361115.0263671875,
			video_codec : 'SR15zfbPLxF4OHDg',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 19,
			title : 'sO7zute2W90yEJSr',
			performer : 'XnACB8Zqy6JY14rg',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'bCikjKP6o4M09nJl',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'BQv3CphUV52DNfJG',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```