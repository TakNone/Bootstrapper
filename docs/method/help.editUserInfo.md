# help.editUserInfo

**Description** : *Internal use*

**Layer** : 222

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
	user_id : $client->get_input_user(user : '@TakNone'),
	message : 'VcGL3DpqjmAudtEz',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 82,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 23,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 48,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 30,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 1,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 49,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 31,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 60,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 47,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 69,
			language : 'u0HrZXE63TgJQ2Ad',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 34,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 52,
			user_id : -8450188727304091441,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 14,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 3,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 35,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 3,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 82,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 53,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 91,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 28,
			document_id : -7316494458448178178,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 94,
		),
	),
);
```