# smsjobs.isEligibleToJoin

**Description** : *Check if we can process SMS jobs (official clients only)*

**Layer** : 211

```tl
smsjobs.isEligibleToJoin#edc39d0 = smsjobs.EligibilityToJoin;
```

---

## Result

[smsjobs.EligibilityToJoin](type/smsjobs.EligibilityToJoin)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **NOT_ELIGIBLE** | `403` | The current user is not eligible to join the Peer-to-Peer Login Program |

---

## Example

```php
$smsjobsEligibilityToJoin = $client->smsjobs->isEligibleToJoin();
```