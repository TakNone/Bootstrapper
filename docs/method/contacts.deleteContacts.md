# contacts.deleteContacts

**Description** : *Deletes several contacts from the list*

**Layer** : 218

```tl
contacts.deleteContacts#96a0e00 id:Vector<InputUser> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`Vector<InputUser>`](type/InputUser) | User ID list |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |

---

## Example

```php
$updates = $client->contacts->deleteContacts(
	id : array($client->get_input_user(user : '@TakNone')),
);
```