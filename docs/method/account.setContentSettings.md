# account.setContentSettings

**Description** : *Set sensitive content settings (for viewing or hiding NSFW content)*

**Layer** : 211

```tl
account.setContentSettings#b574b16b flags:# sensitive_enabled:flags.0?true = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **sensitive_enabled** | [`flags.0?true`](type/true) | Enable NSFW content |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **SENSITIVE_CHANGE_FORBIDDEN** | `403` | You can't change your sensitive content settings |

---

## Example

```php
$bool = $client->account->setContentSettings(
	sensitive_enabled : true,
);
```