# sendMessageHistoryImportAction

**Description** : *Chat history is being imported*

**Layer** : 211

```tl
sendMessageHistoryImportAction#dbda9246 progress:int = SendMessageAction;
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
$sendMessageAction = $client->sendMessageHistoryImportAction(
	progress : 97,
);
```