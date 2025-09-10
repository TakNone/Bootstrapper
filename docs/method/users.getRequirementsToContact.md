# users.getRequirementsToContact

**Layer** : 214

```tl
users.getRequirementsToContact#d89a83a3 id:Vector<InputUser> = Vector<RequirementToContact>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`Vector<InputUser>`](type/InputUser) | NOTHING |

---

## Result

[Vector<RequirementToContact>](type/RequirementToContact)

---

## Example

```php
$requirementToContact = $client->users->getRequirementsToContact(
	id : array(
		$client->inputUserEmpty(),
		$client->inputUserSelf(),
		$client->inputUser(
			user_id : 589143621257017009,
			access_hash : -6328646555334833611,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 65,
			user_id : 1266770827541360329,
		),
	),
);
```