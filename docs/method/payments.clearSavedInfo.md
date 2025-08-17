# payments.clearSavedInfo

**Description** : *Clear saved payment information*

**Layer** : 211

```tl
payments.clearSavedInfo#d83d70c1 flags:# credentials:flags.0?true info:flags.1?true = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **credentials** | [`flags.0?true`](type/true) | Remove saved payment credentials |
| **info** | [`flags.1?true`](type/true) | Clear the last order settings saved by the user |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->payments->clearSavedInfo(
	credentials : true,
	info : true,
);
```