# inputPrivacyValueDisallowChatParticipants

**Description** : *Disallow only participants of certain chats*

**Layer** : 211

```tl
inputPrivacyValueDisallowChatParticipants#e94f0f86 chats:Vector<long> = InputPrivacyRule;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chats</mark> | [`Vector<long>`](type/long) | Disallowed chat IDs |

---

## Type

[InputPrivacyRule](type/InputPrivacyRule)

---

## Example

```php
$inputPrivacyRule = $client->inputPrivacyValueDisallowChatParticipants(
	chats : array(6506420828798677113),
);
```