# inputWebDocument

**Description** : *The document*

**Layer** : 218

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
	size : 71,
	mime_type : 'XydxCG8rRoEF17Z4',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 96,
			h : 66,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'SEI627t8ZMvgsnyr',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 64,
				x : -1471273.8251953125,
				y : 331240.01171875,
				zoom : 2005449.875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -879884.0869140625,
			w : 4,
			h : 88,
			preload_prefix_size : 26,
			video_start_ts : 1876874.67578125,
			video_codec : 'y7RLDVJjwmNHp1z5',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 30,
			title : 'xTQUv1qDkMiO0muL',
			performer : 'IZpWu7tMo1YzGxE3',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'e0GoMkzpx2l9TF6w',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'AE1ZoHW0x5haBP6f',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```