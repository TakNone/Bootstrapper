# smsjobs.leave

**Description** : *Disable SMS jobs (official clients only)*

**Layer** : 211

```tl
smsjobs.leave#9898ad73 = Bool;
```

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
$bool = $client->smsjobs->leave();
```