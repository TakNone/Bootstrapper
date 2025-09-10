# sendMessageUploadPhotoAction

**Description** : *User is uploading a photo*

**Layer** : 214

```tl
sendMessageUploadPhotoAction#d1d34a26 progress:int = SendMessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>progress</mark> | [`int`](type/int) | Progress percentage |

---

## Type

[SendMessageAction](type/SendMessageAction)

---

## Example

```php
$sendMessageAction = $client->sendMessageUploadPhotoAction(
	progress : 60,
);
```