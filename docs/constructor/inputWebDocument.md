# inputWebDocument

**Description** : *The document*

**Layer** : 227

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
	size : 59,
	mime_type : 'jSIQMBZHRzyCgPTv',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 80,
			h : 15,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'yZ1jn43c79gTwdCU',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 9,
				x : -806635.455078125,
				y : 1460712.5224609375,
				zoom : 1402124.2099609375,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 1800956.89453125,
			w : 57,
			h : 62,
			preload_prefix_size : 79,
			video_start_ts : -1213509.48046875,
			video_codec : 'y6aguzTnLYKIwUXv',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 74,
			title : 'VqoClvmIGc5jPJ0b',
			performer : 'zwYxRM3dPyhjNnQ4',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'jrtvA3DsylOg6W4C',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'UXzu6exbJ725EAw3',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```