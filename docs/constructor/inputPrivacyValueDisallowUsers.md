# inputPrivacyValueDisallowUsers

**Description** : *Disallow only certain users*

**Layer** : 216

```tl
inputPrivacyValueDisallowUsers#90110467 users:Vector<InputUser> = InputPrivacyRule;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>users</mark> | [`Vector<InputUser>`](type/InputUser) | Users to disallow |

---

## Type

[InputPrivacyRule](type/InputPrivacyRule)

---

## Example

```php
$inputPrivacyRule = $client->inputPrivacyValueDisallowUsers(
	users : array(
		$client->inputUserEmpty(),
		$client->inputUserSelf(),
		$client->inputUser(
			user_id : -3743763879782022676,
			access_hash : -9144179317890366374,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 87,
			user_id : 2353695306355822182,
		),
	),
);
```