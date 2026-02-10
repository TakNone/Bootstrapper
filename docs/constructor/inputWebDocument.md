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
	size : 59,
	mime_type : 'JA3lzatGfH8WsYnU',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 38,
			h : 83,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'SpQ3FxV2Xf6Nl7Ii',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 67,
				x : 1190305.1875,
				y : 341917.1201171875,
				zoom : -822861.849609375,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 1369162.9130859375,
			w : 65,
			h : 98,
			preload_prefix_size : 37,
			video_start_ts : -1843729.9365234375,
			video_codec : 'L7u6A8v3OnmMeE04',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 77,
			title : 'OrLZu7xzYp1tjNc6',
			performer : 'r4QaN7PV6b89FpKo',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : '1VweSGIU2yHRzEJ4',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : '2Au5hGwZiypsWRlm',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```