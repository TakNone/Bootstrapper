# updatePrivacy

**Description** : *Privacy rules were changed*

**Layer** : 233

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
			users : array(-8850934418892304009),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(-371325952029910042),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(1606867983659656616),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(4776675718683680751),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
);
```