# sendMessageUploadAudioAction

**Description** : *User is uploading a voice message*

**Layer** : 214

```tl
sendMessageUploadAudioAction#f351d7ab progress:int = SendMessageAction;
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
$sendMessageAction = $client->sendMessageUploadAudioAction(
	progress : 3,
);
```