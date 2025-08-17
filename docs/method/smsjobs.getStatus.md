# smsjobs.getStatus

**Description** : *Get SMS jobs status (official clients only)*

**Layer** : 211

```tl
smsjobs.getStatus#10a698e8 = smsjobs.Status;
```

---

## Result

[smsjobs.Status](type/smsjobs.Status)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **NOT_JOINED** | `400` | The current user hasn't joined the Peer-to-Peer Login Program |

---

## Example

```php
$smsjobsStatus = $client->smsjobs->getStatus();
```