# sendMessageUploadVideoAction

**Description** : *User is uploading a video*

**Layer** : 216

```tl
sendMessageUploadVideoAction#e9763aec progress:int = SendMessageAction;
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
$sendMessageAction = $client->sendMessageUploadVideoAction(
	progress : 58,
);
```