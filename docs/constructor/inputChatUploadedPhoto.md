# inputChatUploadedPhoto

**Description** : *New photo to be set as group profile photo*

**Layer** : 216

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
		id : -6886970001337644583,
		parts : 18,
		name : 'UnSW7cHB3hlvmTV5',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	video : $client->inputFile(
		id : 5454767028478417219,
		parts : 49,
		name : 'xfWan5LSyIheAilv',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	video_start_ts : 1006947.15625,
	video_emoji_markup : $client->videoSize(
		type : 'WjBFbU1IENvXdKw6',
		w : 20,
		h : 19,
		size : 40,
		video_start_ts : -2076550.8896484375,
	),
);
```