# contacts.deleteContacts

**Description** : *Deletes several contacts from the list*

**Layer** : 216

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
	id : array(
		$client->inputUserEmpty(),
		$client->inputUserSelf(),
		$client->inputUser(
			user_id : -8268786998058177283,
			access_hash : 8004580306506449526,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 21,
			user_id : 9141580006057188136,
		),
	),
);
```