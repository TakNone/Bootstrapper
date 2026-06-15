# updatePrivacy

**Description** : *Privacy rules were changed*

**Layer** : 227

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
			users : array(2031658818454817837),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(-3091728119632092598),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(-5070463549313037623),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(2870724166776342317),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
);
```