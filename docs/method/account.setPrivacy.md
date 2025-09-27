# account.setPrivacy

**Description** : *Change privacy settings of current account*

**Layer** : 214

```tl
account.setPrivacy#c9f81ce8 key:InputPrivacyKey rules:Vector<InputPrivacyRule> = account.PrivacyRules;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>key</mark> | [`InputPrivacyKey`](type/InputPrivacyKey) | New privacy rule |
| <mark>rules</mark> | [`Vector<InputPrivacyRule>`](type/InputPrivacyRule) | Peers to which the privacy rule will apply |

---

## Result

[account.PrivacyRules](type/account.PrivacyRules)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PRIVACY_KEY_INVALID** | `400` | The privacy key is invalid |
| **PRIVACY_TOO_LONG** | `400` | Too many privacy rules were specified, the current limit is 1000 |
| **PRIVACY_VALUE_INVALID** | `400` | The specified privacy rule combination is invalid |

---

## Example

```php
$accountPrivacyRules = $client->account->setPrivacy(
	key : $client->inputPrivacyKeyStatusTimestamp(),
	rules : array(
		$client->inputPrivacyValueAllowContacts(),
		$client->inputPrivacyValueAllowAll(),
		$client->inputPrivacyValueAllowUsers(
			users : array(
				$client->inputUserEmpty(),
				$client->inputUserSelf(),
				$client->inputUser(
					user_id : 5605919493606921678,
					access_hash : 9070238351520053973,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 24,
					user_id : 8026346036610510322,
				),
			),
		),
		$client->inputPrivacyValueDisallowContacts(),
		$client->inputPrivacyValueDisallowAll(),
		$client->inputPrivacyValueDisallowUsers(
			users : array(
				$client->inputUserEmpty(),
				$client->inputUserSelf(),
				$client->inputUser(
					user_id : -8790223104857695733,
					access_hash : 1658130689063321325,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 72,
					user_id : 5371723285766225021,
				),
			),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(1723853696844587095),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(4738460532149906995),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
);
```