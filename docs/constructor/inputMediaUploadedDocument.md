# inputMediaUploadedDocument

**Description** : *New document*

**Layer** : 218

```tl
inputMediaUploadedDocument#37c9330 flags:# nosound_video:flags.3?true force_file:flags.4?true spoiler:flags.5?true file:InputFile thumb:flags.2?InputFile mime_type:string attributes:Vector<DocumentAttribute> stickers:flags.0?Vector<InputDocument> video_cover:flags.6?InputPhoto video_timestamp:flags.7?int ttl_seconds:flags.1?int = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **nosound_video** | [`flags.3?true`](type/true) | Whether to send the file as a video even if it doesn't have an audio track (i.e. if set, the documentAttributeAnimated attribute will not be set even for videos without audio) |
| **force_file** | [`flags.4?true`](type/true) | Force the media file to be uploaded as document |
| **spoiler** | [`flags.5?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| <mark>file</mark> | [`InputFile`](type/InputFile) | The uploaded file |
| **thumb** | [`flags.2?InputFile`](type/InputFile) | Thumbnail of the document, uploaded as for the file |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type of document |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes that specify the type of the document (video, audio, voice, sticker, etc.) |
| **stickers** | [`flags.0?Vector<InputDocument>`](type/InputDocument) | Attached stickers |
| **video_cover** | [`flags.6?InputPhoto`](type/InputPhoto) | Start playing the video at the specified timestamp (seconds) |
| **video_timestamp** | [`flags.7?int`](type/int) | Start playing the video at the specified timestamp (seconds) |
| **ttl_seconds** | [`flags.1?int`](type/int) | Time to live in seconds of self-destructing document |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaUploadedDocument(
	nosound_video : true,
	force_file : true,
	spoiler : true,
	file : $client->upload_file(path : 'file.png'),
	thumb : $client->upload_file(path : 'file.png'),
	mime_type : 'vugRsEdDN8B46c9f',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 57,
			h : 7,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'cPKo8lWQyh9s4uUA',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 80,
				x : -1207415.4189453125,
				y : -1211676.5419921875,
				zoom : 1875281.2158203125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -2067036.0341796875,
			w : 44,
			h : 33,
			preload_prefix_size : 74,
			video_start_ts : -549012.9033203125,
			video_codec : 'EYyuc2ksirFIteng',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 8,
			title : '9t0EhVWeuciQgCG6',
			performer : 'cZLx8OspPXqvQjua',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : '5XolMz73AOxK1BEI',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'MS2hEUOpmHfkaAIB',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
	stickers : array(
		$client->inputDocumentEmpty(),
		$client->inputDocument(
			id : -7858984205338473353,
			access_hash : 7171939867148987391,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_cover : $client->inputPhotoEmpty(),
	video_timestamp : 14,
	ttl_seconds : 28,
);
```