# messages.deletePhoneCallHistory

**Description** : *Delete the entire phone call history*

**Layer** : 211

```tl
messages.deletePhoneCallHistory#f9cbe409 flags:# revoke:flags.0?true = messages.AffectedFoundMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **revoke** | [`flags.0?true`](type/true) | Whether to remove phone call history for participants as well |

---

## Result

[messages.AffectedFoundMessages](type/messages.AffectedFoundMessages)

---

## Example

```php
$messagesAffectedFoundMessages = $client->messages->deletePhoneCallHistory(
	revoke : true,
);
```