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
	size : 85,
	mime_type : 'EDt1lmMjfuLSAbQF',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 55,
			h : 93,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'UQo6e78GCIryOflm',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 72,
				x : 218137.9248046875,
				y : 1484125.08203125,
				zoom : -1120806.8623046875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1667008.46484375,
			w : 70,
			h : 10,
			preload_prefix_size : 10,
			video_start_ts : -200561.7001953125,
			video_codec : 'cqkJp7yedOtfzTGv',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 19,
			title : 'a83WOKnH6As4cl0V',
			performer : 'u0li7cNTH436GMmf',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'eW80uYUn4qtCVdDc',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'hqoSdIwkuNT0P6Ml',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```