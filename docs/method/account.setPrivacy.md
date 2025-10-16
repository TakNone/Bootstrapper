# account.setPrivacy

**Description** : *Change privacy settings of current account*

**Layer** : 216

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
					user_id : -522346582340972494,
					access_hash : 7686051586254012255,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 35,
					user_id : 5502737827299883985,
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
					user_id : -5241906426974260781,
					access_hash : -4926405076464561595,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 11,
					user_id : 5834179540461240216,
				),
			),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(-3547966229511941730),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(7599478111618713257),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
);
```