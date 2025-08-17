# updatePrivacy

**Description** : *Privacy rules were changed*

**Layer** : 211

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
			users : array(-3797085123811423208),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(4631745028944253792),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(-3176495670493741513),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(-2827408190786037482),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
);
```