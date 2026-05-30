# webDocumentNoProxy

**Description** : *Remote document that can be downloaded without proxying through telegram*

**Layer** : 225

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
	size : 60,
	mime_type : '4NozSTX7tW1KyUZx',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 44,
			h : 96,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'H98lFyxcQigUae5L',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 33,
				x : -1043485.638671875,
				y : 709108.8466796875,
				zoom : 1193538.5087890625,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 1307665.15234375,
			w : 32,
			h : 73,
			preload_prefix_size : 13,
			video_start_ts : -1896373.267578125,
			video_codec : 'Bn0H6juc8fJp7laA',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 1,
			title : 'WZHmTUJ57afSBlvY',
			performer : 'PVynDeIzpfil6aqF',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'VNnWzJXxIT8ohjq2',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'udH1eP0zIbnTWsQA',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```