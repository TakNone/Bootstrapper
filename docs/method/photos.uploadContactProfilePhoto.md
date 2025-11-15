# photos.uploadContactProfilePhoto

**Description** : *Upload a custom profile picture for a contact, or suggest a new profile picture to a contact*

**Layer** : 218

```tl
photos.uploadContactProfilePhoto#e14c4a71 flags:# suggest:flags.3?true save:flags.4?true user_id:InputUser file:flags.0?InputFile video:flags.1?InputFile video_start_ts:flags.2?double video_emoji_markup:flags.5?VideoSize = photos.Photo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **suggest** | [`flags.3?true`](type/true) | If set, will send a messageActionSuggestProfilePhoto service message to user_id, suggesting them to use the specified profile picture; otherwise, will set a personal profile picture for the user (only visible to the current user) |
| **save** | [`flags.4?true`](type/true) | If set, removes a previously set personal profile picture (does not affect suggested profile pictures, to remove them simply delete the messageActionSuggestProfilePhoto service message with messages.deleteMessages) |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | The contact |
| **file** | [`flags.0?InputFile`](type/InputFile) | Profile photo |
| **video** | [`flags.1?InputFile`](type/InputFile) | Animated profile picture video |
| **video_start_ts** | [`flags.2?double`](type/double) | Floating point UNIX timestamp in seconds, indicating the frame of the video/sticker that should be used as static preview; can only be used if video or video_emoji_markup is set |
| **video_emoji_markup** | [`flags.5?VideoSize`](type/VideoSize) | Animated sticker profile picture, must contain either a videoSizeEmojiMarkup or a videoSizeStickerMarkup constructor |

---

## Result

[photos.Photo](type/photos.Photo)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CONTACT_MISSING** | `400` | The specified user is not a contact |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$photosPhoto = $client->photos->uploadContactProfilePhoto(
	suggest : true,
	save : true,
	user_id : $client->get_input_user(peer : '@TakNone'),
	file : $client->upload_file(path : 'file.png'),
	video : $client->upload_file(path : 'file.png'),
	video_start_ts : -1049077.7431640625,
	video_emoji_markup : $client->videoSize(
		type : 'M1csGSk2fJga5Adb',
		w : 42,
		h : 70,
		size : 47,
		video_start_ts : 1152293.03515625,
	),
);
```