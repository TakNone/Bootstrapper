# privacyValueAllowChatParticipants

**Description** : *Allow all participants of certain chats*

**Layer** : 216

```tl
privacyValueAllowChatParticipants#6b134e8e chats:Vector<long> = PrivacyRule;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chats</mark> | [`Vector<long>`](type/long) | Allowed chat IDs (either a chat or a supergroup ID, verbatim the way it is received in the constructor (i.e. unlike with bot API IDs, here group and supergroup IDs should be treated in the same way)) |

---

## Type

[PrivacyRule](type/PrivacyRule)

---

## Example

```php
$privacyRule = $client->privacyValueAllowChatParticipants(
	chats : array(-7509938822664996676),
);
```