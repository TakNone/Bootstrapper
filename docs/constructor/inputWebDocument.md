# inputWebDocument

**Description** : *The document*

**Layer** : 222

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
	size : 65,
	mime_type : 'XKFhbiUvAIofgwDy',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 86,
			h : 2,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'KoxyI8jbhMS3RAc6',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 65,
				x : -336530.01171875,
				y : 1722670.5703125,
				zoom : -1175544.65625,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1601185.517578125,
			w : 47,
			h : 72,
			preload_prefix_size : 36,
			video_start_ts : 123890.1826171875,
			video_codec : 'BIkLxoJDtP4OvhG6',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 44,
			title : 'uUcnZJk7v54VymeT',
			performer : 'x5kyOfCrA9maDIoM',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'I1KFlHqCrLsyDzUj',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'ukQWRJ6P9VIh0tHw',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```