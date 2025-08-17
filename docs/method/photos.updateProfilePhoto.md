# photos.updateProfilePhoto

**Description** : *Installs a previously uploaded photo as a profile photo*

**Layer** : 211

```tl
photos.updateProfilePhoto#9e82039 flags:# fallback:flags.0?true bot:flags.1?InputUser id:InputPhoto = photos.Photo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **fallback** | [`flags.0?true`](type/true) | If set, the chosen profile photo will be shown to users that can't display your main profile photo due to your privacy settings |
| **bot** | [`flags.1?InputUser`](type/InputUser) | Can contain info of a bot we own, to change the profile photo of that bot, instead of the current user |
| <mark>id</mark> | [`InputPhoto`](type/InputPhoto) | Input photo |

---

## Result

[photos.Photo](type/photos.Photo)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ALBUM_PHOTOS_TOO_MANY** | `400` | You have uploaded too many profile photos, delete some before retrying |
| **FILE_PARTS_INVALID** | `400` | The number of file parts is invalid |
| **IMAGE_PROCESS_FAILED** | `400` | Failure while processing image |
| **LOCATION_INVALID** | `400` | The provided location is invalid |
| **PHOTO_CROP_SIZE_SMALL** | `400` | Photo is too small |
| **PHOTO_EXT_INVALID** | `400` | The extension of the photo is invalid |
| **PHOTO_ID_INVALID** | `400` | Photo ID invalid |

---

## Example

```php
$photosPhoto = $client->photos->updateProfilePhoto(
	fallback : true,
	bot : $client->inputUserEmpty(),
	id : $client->inputPhotoEmpty(),
);
```