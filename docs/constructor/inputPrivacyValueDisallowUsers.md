# inputPrivacyValueDisallowUsers

**Description** : *Disallow only certain users*

**Layer** : 214

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
			user_id : -3426572549436723997,
			access_hash : 8546844022593863069,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 34,
			user_id : 7038402043820215328,
		),
	),
);
```