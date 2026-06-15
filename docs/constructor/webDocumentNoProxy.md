# webDocumentNoProxy

**Description** : *Remote document that can be downloaded without proxying through telegram*

**Layer** : 227

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
	size : 70,
	mime_type : '3zyjpNv827lT1KMg',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 62,
			h : 9,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'TKizkBrEMGObFJg4',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 87,
				x : -380666.5869140625,
				y : -991028.5068359375,
				zoom : 1589266.1826171875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 95371.1708984375,
			w : 27,
			h : 26,
			preload_prefix_size : 19,
			video_start_ts : -74461.072265625,
			video_codec : 'W9HXxcpz7RhZI4mv',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 91,
			title : 'o9xmBcCPXr1zJZ0s',
			performer : 'SFrjk8Ud5PCaElO1',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : '8owa06XZzYCLSTNx',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'jYcTxBA42CShKf8F',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```