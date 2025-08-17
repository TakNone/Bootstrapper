# smsjobs.updateSettings

**Description** : *Update SMS job settings (official clients only)*

**Layer** : 211

```tl
smsjobs.updateSettings#93fa0bf flags:# allow_international:flags.0?true = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **allow_international** | [`flags.0?true`](type/true) | Allow international numbers? |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **NOT_JOINED** | `400` | The current user hasn't joined the Peer-to-Peer Login Program |

---

## Example

```php
$bool = $client->smsjobs->updateSettings(
	allow_international : true,
);
```