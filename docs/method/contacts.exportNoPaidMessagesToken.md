# contacts.exportNoPaidMessagesToken

**Layer** : 233

```tl
contacts.exportNoPaidMessagesToken#83c586ae flags:# revoke:flags.0?true temporary:flags.1?true = ExportedNoPaidMessagesToken;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **revoke** | [`flags.0?true`](type/true) | NOTHING |
| **temporary** | [`flags.1?true`](type/true) | NOTHING |

---

## Result

[ExportedNoPaidMessagesToken](type/ExportedNoPaidMessagesToken)

---

## Example

```php
$exportedNoPaidMessagesToken = $client->contacts->exportNoPaidMessagesToken(
	revoke : true,
	temporary : true,
);
```