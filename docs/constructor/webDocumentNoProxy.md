# webDocumentNoProxy

**Description** : *Remote document that can be downloaded without proxying through telegram*

**Layer** : 229

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
	size : 52,
	mime_type : 'Vpsj1GNqfoeiZrzl',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 77,
			h : 42,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'chslG4KACkFnfePu',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 39,
				x : 1667462.376953125,
				y : 1645716.7529296875,
				zoom : -389414.9970703125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 1510660.2900390625,
			w : 86,
			h : 53,
			preload_prefix_size : 28,
			video_start_ts : -1959023.119140625,
			video_codec : 'DoJwcGi04Ou23qvQ',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 78,
			title : 'ETcIOLaswb8CkXY7',
			performer : 'Fs8OtxR6GKqjUQr7',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : '82EIPaU7ZhrBWxNX',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'aRoAsuyZC5VTQPKg',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```