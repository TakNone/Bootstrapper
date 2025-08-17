# inputChatUploadedPhoto

**Description** : *New photo to be set as group profile photo*

**Layer** : 211

```tl
inputChatUploadedPhoto#bdcdaec0 flags:# file:flags.0?InputFile video:flags.1?InputFile video_start_ts:flags.2?double video_emoji_markup:flags.3?VideoSize = InputChatPhoto;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **file** | [`flags.0?InputFile`](type/InputFile) | File saved in parts using the method upload.saveFilePart |
| **video** | [`flags.1?InputFile`](type/InputFile) | Square video for animated profile picture |
| **video_start_ts** | [`flags.2?double`](type/double) | Floating point UNIX timestamp in seconds, indicating the frame of the video/sticker that should be used as static preview; can only be used if video or video_emoji_markup is set |
| **video_emoji_markup** | [`flags.3?VideoSize`](type/VideoSize) | Animated sticker profile picture, must contain either a videoSizeEmojiMarkup or a videoSizeStickerMarkup constructor |

---

## Type

[InputChatPhoto](type/InputChatPhoto)

---

## Example

```php
$inputChatPhoto = $client->inputChatUploadedPhoto(
	file : $client->inputFile(
		id : 3046504109266925898,
		parts : 8,
		name : 'i5GsF7RBgckOf2yz',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	video : $client->inputFile(
		id : 9115312953532891852,
		parts : 71,
		name : 'N8gfedEbH1h7vmCZ',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	video_start_ts : -537183.900390625,
	video_emoji_markup : $client->videoSize(
		type : 'zeWPuw0RLJkIoiOb',
		w : 51,
		h : 95,
		size : 22,
		video_start_ts : 897458.267578125,
	),
);
```