# contacts.getStatuses

**Description** : *Use this method to obtain the online statuses of all contacts with an accessible Telegram account*

**Layer** : 211

```tl
contacts.getStatuses#c4a353ee = Vector<ContactStatus>;
```

---

## Result

[Vector<ContactStatus>](type/ContactStatus)

---

## Example

```php
$contactStatus = $client->contacts->getStatuses();
```