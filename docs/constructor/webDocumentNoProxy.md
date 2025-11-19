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
	size : 27,
	mime_type : 'IcfUuXod4Y9SpCrZ',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 90,
			h : 40,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'j0AElsBqJUtrHikp',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 38,
				x : 696546.8232421875,
				y : -710668.83984375,
				zoom : -1817302.7998046875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -2064134.6630859375,
			w : 86,
			h : 42,
			preload_prefix_size : 82,
			video_start_ts : -863793.2958984375,
			video_codec : 'IrfpYZRzv9qEA5Lc',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 96,
			title : 'eXZE6LCiozWPO2lN',
			performer : 'MSx4vfcwI6qt0no1',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'oFjlTSpI2z8Bc7NL',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'IG3KPiFHNzM0E8ur',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```