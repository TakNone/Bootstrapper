# inputQuickReplyShortcutId

**Description** : *Selects a quick reply shortcut by its numeric ID*

**Layer** : 211

```tl
inputQuickReplyShortcutId#1190cf1 shortcut_id:int = InputQuickReplyShortcut;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>shortcut_id</mark> | [`int`](type/int) | Shortcut ID |

---

## Type

[InputQuickReplyShortcut](type/InputQuickReplyShortcut)

---

## Example

```php
$inputQuickReplyShortcut = $client->inputQuickReplyShortcutId(
	shortcut_id : 41,
);
```