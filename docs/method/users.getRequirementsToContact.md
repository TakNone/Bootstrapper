# users.getRequirementsToContact

**Layer** : 211

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
			user_id : -6410317416893913467,
			access_hash : 7927083889551386643,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 29,
			user_id : -1720664493371335723,
		),
	),
);
```