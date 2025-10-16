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
			user_id : 995592093876423624,
			access_hash : 4671562633060309942,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 4,
			user_id : -5457078789888095121,
		),
	),
);
```