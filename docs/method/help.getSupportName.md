# help.getSupportName

**Description** : *Get localized name of the telegram support user*

**Layer** : 211

```tl
help.getSupportName#d360e72c = help.SupportName;
```

---

## Result

[help.SupportName](type/help.SupportName)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USER_INVALID** | `403` | Invalid user provided |

---

## Example

```php
$helpSupportName = $client->help->getSupportName();
```