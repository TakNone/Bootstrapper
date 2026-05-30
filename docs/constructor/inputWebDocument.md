# inputWebDocument

**Description** : *The document*

**Layer** : 225

```tl
inputWebDocument#9bed434d url:string size:int mime_type:string attributes:Vector<DocumentAttribute> = InputWebDocument;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Remote document URL to be downloaded using the appropriate method |
| <mark>size</mark> | [`int`](type/int) | Remote file size |
| <mark>mime_type</mark> | [`string`](type/string) | Mime type |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes for media types |

---

## Type

[InputWebDocument](type/InputWebDocument)

---

## Example

```php
$inputWebDocument = $client->inputWebDocument(
	url : 'https://docs.liveproto.dev',
	size : 67,
	mime_type : '4uEywVJRSZm9ovPt',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 30,
			h : 89,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'dQzOw4fjoCuDYarm',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 55,
				x : 1645496.9462890625,
				y : -1164023.1962890625,
				zoom : -249920.74609375,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1473836.90625,
			w : 80,
			h : 88,
			preload_prefix_size : 60,
			video_start_ts : -417704.0595703125,
			video_codec : 's4DxBg0Z1nRjIGVw',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 50,
			title : 'dA8zORvIy20mwaW6',
			performer : 'jIoQbU9HCw8NOEfa',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'VaT5gDw6IEUCQSdH',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'rM6fkcsujUbAZHim',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```