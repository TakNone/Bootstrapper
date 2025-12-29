# photos.uploadProfilePhoto

**Description** : *Updates current user profile photo*

**Layer** : 218

```tl
photos.uploadProfilePhoto#388a3b5 flags:# fallback:flags.3?true bot:flags.5?InputUser file:flags.0?InputFile video:flags.1?InputFile video_start_ts:flags.2?double video_emoji_markup:flags.4?VideoSize = photos.Photo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **fallback** | [`flags.3?true`](type/true) | If set, the chosen profile photo will be shown to users that can't display your main profile photo due to your privacy settings |
| **bot** | [`flags.5?InputUser`](type/InputUser) | Can contain info of a bot we own, to change the profile photo of that bot, instead of the current user |
| **file** | [`flags.0?InputFile`](type/InputFile) | Profile photo |
| **video** | [`flags.1?InputFile`](type/InputFile) | Animated profile picture video |
| **video_start_ts** | [`flags.2?double`](type/double) | Floating point UNIX timestamp in seconds, indicating the frame of the video/sticker that should be used as static preview; can only be used if video or video_emoji_markup is set |
| **video_emoji_markup** | [`flags.4?VideoSize`](type/VideoSize) | Animated sticker profile picture, must contain either a videoSizeEmojiMarkup or a videoSizeStickerMarkup constructor |

---

## Result

[photos.Photo](type/photos.Photo)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ALBUM_PHOTOS_TOO_MANY** | `400` | You have uploaded too many profile photos, delete some before retrying |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **EMOJI_MARKUP_INVALID** | `400` | The specified video_emoji_markup was invalid |
| **FILE_PARTS_INVALID** | `400` | The number of file parts is invalid |
| **IMAGE_PROCESS_FAILED** | `400` | Failure while processing image |
| **PHOTO_CROP_FILE_MISSING** | `400` | Photo crop file missing |
| **PHOTO_CROP_SIZE_SMALL** | `400` | Photo is too small |
| **PHOTO_EXT_INVALID** | `400` | The extension of the photo is invalid |
| **PHOTO_FILE_MISSING** | `400` | Profile photo file missing |
| **PHOTO_INVALID** | `400` | Photo invalid |
| **STICKER_MIME_INVALID** | `400` | The specified sticker MIME type is invalid |
| **VIDEO_FILE_INVALID** | `400` | The specified video file is invalid |

---

## Example

```php
$photosPhoto = $client->photos->uploadProfilePhoto(
	fallback : true,
	bot : $client->get_input_user(user : '@TakNone'),
	file : $client->upload_file(path : 'file.png'),
	video : $client->upload_file(path : 'file.png'),
	video_start_ts : -112768.6474609375,
	video_emoji_markup : $client->videoSize(
		type : 'eBn4sNdIwAzyDEVh',
		w : 56,
		h : 7,
		size : 100,
		video_start_ts : 1719309.5986328125,
	),
);
```