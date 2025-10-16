# inputWebDocument

**Description** : *The document*

**Layer** : 216

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
	size : 2,
	mime_type : 'BSj71feUp83GNIMr',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 88,
			h : 37,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : '089woYxfeQbHg3v5',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 5,
				x : 1138195.212890625,
				y : 1745210.4853515625,
				zoom : 154933.505859375,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1251443.0048828125,
			w : 45,
			h : 32,
			preload_prefix_size : 62,
			video_start_ts : -1418594.6982421875,
			video_codec : 'Hbvr8jwUmOLTfV7J',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 54,
			title : 'maguGjTf5zQ6c8ev',
			performer : 'ADxtYsckLVe1X7dT',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'JigEScrF7lfpoPI2',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'eXJig5nybkjLFu6x',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```