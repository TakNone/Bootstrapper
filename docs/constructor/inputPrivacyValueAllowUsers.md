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
			user_id : -6999330638004365484,
			access_hash : -6287929955509209000,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 74,
			user_id : -4833738195542555894,
		),
	),
);
```