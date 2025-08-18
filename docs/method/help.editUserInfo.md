# help.editUserInfo

**Description** : *Internal use*

**Layer** : 211

```tl
help.editUserInfo#66b91b70 user_id:InputUser message:string entities:Vector<MessageEntity> = help.UserInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | User |
| <mark>message</mark> | [`string`](type/string) | Message |
| <mark>entities</mark> | [`Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |

---

## Result

[help.UserInfo](type/help.UserInfo)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ENTITY_BOUNDS_INVALID** | `400` | A specified entity offset or length is invalid, see here » for info on how to properly compute the entity offset/length |
| **USER_INVALID** | `403` | Invalid user provided |

---

## Example

```php
$helpUserInfo = $client->help->editUserInfo(
	user_id : $client->inputUserEmpty(),
	message : 'qBbhjy3oO2m1lHwf',
	entities : array(
		$client->messageEntityUnknown(
			offset : 2,
			length : 15,
		),
		$client->messageEntityMention(
			offset : 78,
			length : 11,
		),
		$client->messageEntityHashtag(
			offset : 93,
			length : 10,
		),
		$client->messageEntityBotCommand(
			offset : 2,
			length : 65,
		),
		$client->messageEntityUrl(
			offset : 42,
			length : 7,
		),
		$client->messageEntityEmail(
			offset : 77,
			length : 81,
		),
		$client->messageEntityBold(
			offset : 70,
			length : 22,
		),
		$client->messageEntityItalic(
			offset : 74,
			length : 69,
		),
		$client->messageEntityCode(
			offset : 100,
			length : 74,
		),
		$client->messageEntityPre(
			offset : 42,
			length : 11,
			language : 'yXgJB0YIeLVNmjxT',
		),
		$client->messageEntityTextUrl(
			offset : 87,
			length : 83,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 45,
			length : 48,
			user_id : -6889796658081130286,
		),
		$client->inputMessageEntityMentionName(
			offset : 21,
			length : 15,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 69,
			length : 76,
		),
		$client->messageEntityCashtag(
			offset : 14,
			length : 66,
		),
		$client->messageEntityUnderline(
			offset : 83,
			length : 27,
		),
		$client->messageEntityStrike(
			offset : 81,
			length : 92,
		),
		$client->messageEntityBankCard(
			offset : 9,
			length : 82,
		),
		$client->messageEntitySpoiler(
			offset : 30,
			length : 81,
		),
		$client->messageEntityCustomEmoji(
			offset : 64,
			length : 7,
			document_id : -8389433758871631698,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 89,
			length : 63,
		),
	),
);
```