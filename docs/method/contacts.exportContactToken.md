# contacts.exportContactToken

**Description** : *Generates a temporary profile link for the currently logged-in user*

**Layer** : 211

```tl
contacts.exportContactToken#f8654027 = ExportedContactToken;
```

---

## Result

[ExportedContactToken](type/ExportedContactToken)

---

## Example

```php
$exportedContactToken = $client->contacts->exportContactToken();
```