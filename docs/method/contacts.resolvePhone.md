# contacts.resolvePhone

**Description** : *Resolve a phone number to get user info, if their privacy settings allow it*

**Layer** : 211

```tl
contacts.resolvePhone#8af94344 phone:string = contacts.ResolvedPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone</mark> | [`string`](type/string) | Phone number in international format, possibly obtained from a phone number deep link |

---

## Result

[contacts.ResolvedPeer](type/contacts.ResolvedPeer)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PHONE_NOT_OCCUPIED** | `400` | No user is associated to the specified phone number |

---

## Example

```php
$contactsResolvedPeer = $client->contacts->resolvePhone(
	phone : '+1234567890',
);
```