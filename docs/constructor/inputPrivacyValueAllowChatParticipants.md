# inputPrivacyValueAllowChatParticipants

**Description** : *Allow only participants of certain chats*

**Layer** : 218

```tl
inputPrivacyValueAllowChatParticipants#840649cf chats:Vector<long> = InputPrivacyRule;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chats</mark> | [`Vector<long>`](type/long) | Allowed chat IDs (either a chat or a supergroup ID, verbatim the way it is received in the constructor (i.e. unlike with bot API IDs, here group and supergroup IDs should be treated in the same way)) |

---

## Type

[InputPrivacyRule](type/InputPrivacyRule)

---

## Example

```php
$inputPrivacyRule = $client->inputPrivacyValueAllowChatParticipants(
	chats : array(-2852909376850696240),
);
```