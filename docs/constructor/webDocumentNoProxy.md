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
	size : 30,
	mime_type : 'F5EseRcXdYjirKUA',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 21,
			h : 0,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'ZeU2W9rSDfAmQvtJ',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 30,
				x : -1405462.138671875,
				y : -1419061.775390625,
				zoom : 718962.44140625,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -753589.65625,
			w : 40,
			h : 22,
			preload_prefix_size : 86,
			video_start_ts : -1304895.671875,
			video_codec : 'kqWs6w8jSLglYUfA',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 74,
			title : 'xJCGa1smRMbYFOQw',
			performer : '0CDnbFwcryY9phVt',
			waveform : '??l?LiveProto?)??',
		),
		$client->documentAttributeFilename(
			file_name : 'Tmh7ctxzwqo3uHFr',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'pRY7u8zADC1NjeEk',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```