# sendMessageUploadRoundAction

**Description** : *User is uploading a round video*

**Layer** : 216

```tl
sendMessageUploadRoundAction#243e1c66 progress:int = SendMessageAction;
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
$sendMessageAction = $client->sendMessageUploadRoundAction(
	progress : 28,
);
```