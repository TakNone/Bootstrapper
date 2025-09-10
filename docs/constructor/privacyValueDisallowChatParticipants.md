# privacyValueDisallowChatParticipants

**Description** : *Disallow only participants of certain chats*

**Layer** : 214

```tl
privacyValueDisallowChatParticipants#41c87565 chats:Vector<long> = PrivacyRule;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chats</mark> | [`Vector<long>`](type/long) | Disallowed chats |

---

## Type

[PrivacyRule](type/PrivacyRule)

---

## Example

```php
$privacyRule = $client->privacyValueDisallowChatParticipants(
	chats : array(5864528021175624629),
);
```