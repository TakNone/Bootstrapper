# messages.checkQuickReplyShortcut

**Description** : *Before offering the user the choice to add a message to a quick reply shortcut, to make sure that none of the limits specified here &raquo; were reached*

**Layer** : 216

```tl
messages.checkQuickReplyShortcut#f1d0fbd3 shortcut:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>shortcut</mark> | [`string`](type/string) | Shorcut name (not ID!) |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |

---

## Example

```php
$bool = $client->messages->checkQuickReplyShortcut(
	shortcut : 'IKgVTtxanoSyCLpe',
);
```