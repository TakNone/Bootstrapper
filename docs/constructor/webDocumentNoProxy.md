# webDocumentNoProxy

**Description** : *Remote document that can be downloaded without proxying through telegram*

**Layer** : 233

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
	size : 47,
	mime_type : 'gNOS8if7EqsHX0F9',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 80,
			h : 13,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'oeQatz54T17Sgj2L',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 76,
				x : 361757.0537109375,
				y : -2078395.6689453125,
				zoom : -64180.33203125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 666586.904296875,
			w : 46,
			h : 16,
			preload_prefix_size : 73,
			video_start_ts : 577499.05859375,
			video_codec : 'rGcmY8uDU3Cp1BtF',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 88,
			title : 'QhG3iT5WORVuzbgo',
			performer : 'O6jpd8QSnr395k4L',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : '4aYw2FgCDlBiyZLp',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'kbI2B6d5Ao1jhx9H',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```