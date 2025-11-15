# users.getRequirementsToContact

**Description** : *Check whether we can write to the specified users, used to implement bulk checks for Premium\-only messages &raquo; and paid messages &raquo;*

**Layer** : 216

```tl
users.getRequirementsToContact#d89a83a3 id:Vector<InputUser> = Vector<RequirementToContact>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`Vector<InputUser>`](type/InputUser) | Users to check |

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
			user_id : -3242941424651901144,
			access_hash : -5870335357094641445,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 58,
			user_id : 2315764822361360402,
		),
	),
);
```