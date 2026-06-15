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
			users : array(5144005947433537526),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(6894364982141206822),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(4693804126508725610),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(3117479008936030615),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
);
```