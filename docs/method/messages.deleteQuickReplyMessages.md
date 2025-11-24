# messages.deleteQuickReplyMessages

**Description** : *Delete one or more messages from a quick reply shortcut\. This will also emit an updateDeleteQuickReplyMessages update*

**Layer** : 218

```tl
messages.deleteQuickReplyMessages#e105e910 shortcut_id:int id:Vector<int> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>shortcut_id</mark> | [`int`](type/int) | Shortcut ID |
| <mark>id</mark> | [`Vector<int>`](type/int) | IDs of shortcut messages to delete |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **SHORTCUT_INVALID** | `400` | The specified shortcut is invalid |

---

## Example

```php
$updates = $client->messages->deleteQuickReplyMessages(
	shortcut_id : 18,
	id : array(61),
);
```