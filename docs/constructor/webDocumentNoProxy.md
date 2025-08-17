# webDocumentNoProxy

**Description** : *Remote document that can be downloaded without proxying through telegram*

**Layer** : 211

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
	size : 10,
	mime_type : 'XPhYvLTFl0g1RKsj',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 9,
			h : 76,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'ns82XrBVmS0qRZ6p',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 99,
				x : 799342.9052734375,
				y : -1032902.625,
				zoom : 1132255.20703125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 282603.5478515625,
			w : 62,
			h : 73,
			preload_prefix_size : 65,
			video_start_ts : 994779.0302734375,
			video_codec : '8FZcHpNiW0CGEyXA',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 42,
			title : 'Lm6gR5qevuGDUOJI',
			performer : 'QwMlxjm5bsyeDzuY',
			waveform : 'ǣ)5?LiveProto?I
',
		),
		$client->documentAttributeFilename(
			file_name : '9CRJzNmc6qHDFkSv',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'RbsdImPD61NTHXQz',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```