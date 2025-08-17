# messages.deleteQuickReplyShortcut

**Description** : *Completely delete a quick reply shortcut.
This will also emit an updateDeleteQuickReply update to other logged-in sessions (and no updateDeleteQuickReplyMessages updates, even if all the messages in the shortcuts are also deleted by this method)*

**Layer** : 211

```tl
messages.deleteQuickReplyShortcut#3cc04740 shortcut_id:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>shortcut_id</mark> | [`int`](type/int) | Shortcut ID |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **SHORTCUT_INVALID** | `400` | The specified shortcut is invalid |

---

## Example

```php
$bool = $client->messages->deleteQuickReplyShortcut(
	shortcut_id : 71,
);
```