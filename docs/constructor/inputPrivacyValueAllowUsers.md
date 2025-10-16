# inputPrivacyValueAllowUsers

**Description** : *Allow only certain users*

**Layer** : 216

```tl
inputPrivacyValueAllowUsers#131cc67f users:Vector<InputUser> = InputPrivacyRule;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>users</mark> | [`Vector<InputUser>`](type/InputUser) | Allowed users |

---

## Type

[InputPrivacyRule](type/InputPrivacyRule)

---

## Example

```php
$inputPrivacyRule = $client->inputPrivacyValueAllowUsers(
	users : array(
		$client->inputUserEmpty(),
		$client->inputUserSelf(),
		$client->inputUser(
			user_id : 3936854843427579959,
			access_hash : -3155578927603588368,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 71,
			user_id : -7083344283145734172,
		),
	),
);
```