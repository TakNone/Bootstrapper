# sendMessageUploadDocumentAction

**Description** : *User is uploading a file*

**Layer** : 218

```tl
sendMessageUploadDocumentAction#aa0cd9e4 progress:int = SendMessageAction;
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
$sendMessageAction = $client->sendMessageUploadDocumentAction(
	progress : 12,
);
```