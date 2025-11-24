# messages.editChatPhoto

**Description** : *Changes chat photo and sends a service message on it*

**Layer** : 218

```tl
messages.editChatPhoto#35ddd674 chat_id:long photo:InputChatPhoto = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | Chat ID |
| <mark>photo</mark> | [`InputChatPhoto`](type/InputChatPhoto) | Photo to be set |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **IMAGE_PROCESS_FAILED** | `400` | Failure while processing image |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PHOTO_CROP_SIZE_SMALL** | `400` | Photo is too small |
| **PHOTO_EXT_INVALID** | `400` | The extension of the photo is invalid |
| **PHOTO_INVALID** | `400` | Photo invalid |

---

## Example

```php
$updates = $client->messages->editChatPhoto(
	chat_id : 4404867185184923834,
	photo : $client->inputChatPhotoEmpty(),
);
```