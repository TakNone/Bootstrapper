# privacyValueDisallowChatParticipants

**Description** : *Disallow only participants of certain chats*

**Layer** : 218

```tl
privacyValueDisallowChatParticipants#41c87565 chats:Vector<long> = PrivacyRule;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chats</mark> | [`Vector<long>`](type/long) | Disallowed chats IDs (either a chat or a supergroup ID, verbatim the way it is received in the constructor (i.e. unlike with bot API IDs, here group and supergroup IDs should be treated in the same way)) |

---

## Type

[PrivacyRule](type/PrivacyRule)

---

## Example

```php
$privacyRule = $client->privacyValueDisallowChatParticipants(
	chats : array(-2660899928068928159),
);
```