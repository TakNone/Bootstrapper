# messages.editQuickReplyShortcut

**Description** : *Rename a quick reply shortcut\.
This will emit an updateQuickReplies update to other logged\-in sessions*

**Layer** : 216

```tl
messages.editQuickReplyShortcut#5c003cef shortcut_id:int shortcut:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>shortcut_id</mark> | [`int`](type/int) | Shortcut ID |
| <mark>shortcut</mark> | [`string`](type/string) | New shortcut name |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |
| **SHORTCUT_INVALID** | `400` | The specified shortcut is invalid |

---

## Example

```php
$bool = $client->messages->editQuickReplyShortcut(
	shortcut_id : 0,
	shortcut : 'ow8lOgsxpJhZdVvc',
);
```