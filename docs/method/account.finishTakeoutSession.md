# account.finishTakeoutSession

**Description** : *Terminate a takeout session, see here » for more info*

**Layer** : 211

```tl
account.finishTakeoutSession#1d2652ee flags:# success:flags.0?true = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **success** | [`flags.0?true`](type/true) | Data exported successfully |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **TAKEOUT_REQUIRED** | `403` | A takeout session needs to be initialized first, see here » for more info |

---

## Example

```php
$bool = $client->account->finishTakeoutSession(
	success : true,
);
```