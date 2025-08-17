# contacts.getSaved

**Description** : *Get all contacts, requires a takeout session, see here » for more info*

**Layer** : 211

```tl
contacts.getSaved#82f1e39f = Vector<SavedContact>;
```

---

## Result

[Vector<SavedContact>](type/SavedContact)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **TAKEOUT_INVALID** | `400` | The specified takeout ID is invalid |
| **TAKEOUT_REQUIRED** | `403` | A takeout session needs to be initialized first, see here » for more info |

---

## Example

```php
$savedContact = $client->contacts->getSaved();
```