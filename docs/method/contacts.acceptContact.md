# contacts.acceptContact

**Description** : *If the add contact action bar is active, add that user as contact*

**Layer** : 211

```tl
contacts.acceptContact#f831a20f id:InputUser = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputUser`](type/InputUser) | The user to add as contact |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CONTACT_ADD_MISSING** | `400` | Contact to add is missing |
| **CONTACT_ID_INVALID** | `400` | The provided contact ID is invalid |
| **CONTACT_REQ_MISSING** | `400` | Missing contact request |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |

---

## Example

```php
$updates = $client->contacts->acceptContact(
	id : $client->inputUserEmpty(),
);
```