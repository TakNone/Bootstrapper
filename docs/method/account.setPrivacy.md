# account.setPrivacy

**Description** : *Change privacy settings of current account*

**Layer** : 211

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
					user_id : 3520569092678473341,
					access_hash : -1567179230726317491,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 17,
					user_id : 4484909110046699251,
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
					user_id : -8666735262446375047,
					access_hash : -6163633753011416286,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 74,
					user_id : -1187568016870340839,
				),
			),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(-1946257229879639954),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-1966913402114519322),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
);
```