# inputPrivacyValueAllowChatParticipants

**Description** : *Allow only participants of certain chats*

**Layer** : 211

```tl
inputPrivacyValueAllowChatParticipants#840649cf chats:Vector<long> = InputPrivacyRule;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chats</mark> | [`Vector<long>`](type/long) | Allowed chat IDs |

---

## Type

[InputPrivacyRule](type/InputPrivacyRule)

---

## Example

```php
$inputPrivacyRule = $client->inputPrivacyValueAllowChatParticipants(
	chats : array(-2864670450912861599),
);
```