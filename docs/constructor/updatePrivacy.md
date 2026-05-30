# updatePrivacy

**Description** : *Privacy rules were changed*

**Layer** : 225

```tl
updatePrivacy#ee3b272a key:PrivacyKey rules:Vector<PrivacyRule> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>key</mark> | [`PrivacyKey`](type/PrivacyKey) | Peers to which the privacy rules apply |
| <mark>rules</mark> | [`Vector<PrivacyRule>`](type/PrivacyRule) | New privacy rules |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePrivacy(
	key : $client->privacyKeyStatusTimestamp(),
	rules : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(6694646717971715471),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(-4011553046402240452),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(5782558352937079965),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(-8750280024056898937),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
);
```