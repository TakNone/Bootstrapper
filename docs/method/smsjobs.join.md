# smsjobs.join

**Description** : *Enable SMS jobs (official clients only)*

**Layer** : 211

```tl
smsjobs.join#a74ece2d = Bool;
```

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **NOT_ELIGIBLE** | `400` | The current user is not eligible to join the Peer-to-Peer Login Program |

---

## Example

```php
$bool = $client->smsjobs->join();
```