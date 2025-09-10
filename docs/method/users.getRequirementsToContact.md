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
			user_id : 5322924287473951824,
			access_hash : -4946496921755967385,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 5,
			user_id : -7041686992543038613,
		),
	),
);
```