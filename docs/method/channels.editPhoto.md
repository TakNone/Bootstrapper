# channels.editPhoto

**Description** : *Change the photo of a channel/supergroup*

**Layer** : 211

```tl
channels.editPhoto#f12e57c9 channel:InputChannel photo:InputChatPhoto = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel/supergroup whose photo should be edited |
| <mark>photo</mark> | [`InputChatPhoto`](type/InputChatPhoto) | New photo |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **FILE_PARTS_INVALID** | `400` | The number of file parts is invalid |
| **FILE_REFERENCE_INVALID** | `400` | The specified file reference is invalid |
| **IMAGE_PROCESS_FAILED** | `400` | Failure while processing image |
| **PHOTO_CROP_SIZE_SMALL** | `400` | Photo is too small |
| **PHOTO_EXT_INVALID** | `400` | The extension of the photo is invalid |
| **PHOTO_FILE_MISSING** | `400` | Profile photo file missing |
| **PHOTO_INVALID** | `400` | Photo invalid |
| **STICKER_MIME_INVALID** | `400` | The specified sticker MIME type is invalid |

---

## Example

```php
$updates = $client->channels->editPhoto(
	channel : $client->inputChannelEmpty(),
	photo : $client->inputChatPhotoEmpty(),
);
```