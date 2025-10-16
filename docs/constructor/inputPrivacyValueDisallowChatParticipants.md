# inputPrivacyValueDisallowChatParticipants

**Description** : *Disallow only participants of certain chats*

**Layer** : 216

```tl
inputPrivacyValueDisallowChatParticipants#e94f0f86 chats:Vector<long> = InputPrivacyRule;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chats</mark> | [`Vector<long>`](type/long) | Disallowed chat IDs (either a chat or a supergroup ID, verbatim the way it is received in the constructor (i.e. unlike with bot API IDs, here group and supergroup IDs should be treated in the same way)) |

---

## Type

[InputPrivacyRule](type/InputPrivacyRule)

---

## Example

```php
$inputPrivacyRule = $client->inputPrivacyValueDisallowChatParticipants(
	chats : array(-5397917110047665454),
);
```