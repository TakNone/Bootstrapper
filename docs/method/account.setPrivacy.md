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
					user_id : 4832657253403406119,
					access_hash : 5762086230079499313,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 6,
					user_id : 7167614066413191243,
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
					user_id : 1432040878003348639,
					access_hash : 1128918430733002338,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 37,
					user_id : 4133115106722934408,
				),
			),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(-5329035933976443968),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(2571872869580036504),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
);
```