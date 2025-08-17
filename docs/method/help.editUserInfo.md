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
	message : 'oR6qVsU4zBHhTK1k',
	entities : array(
		$client->messageEntityUnknown(
			offset : 24,
			length : 3,
		),
		$client->messageEntityMention(
			offset : 15,
			length : 77,
		),
		$client->messageEntityHashtag(
			offset : 7,
			length : 32,
		),
		$client->messageEntityBotCommand(
			offset : 22,
			length : 37,
		),
		$client->messageEntityUrl(
			offset : 13,
			length : 54,
		),
		$client->messageEntityEmail(
			offset : 97,
			length : 88,
		),
		$client->messageEntityBold(
			offset : 2,
			length : 22,
		),
		$client->messageEntityItalic(
			offset : 38,
			length : 2,
		),
		$client->messageEntityCode(
			offset : 34,
			length : 100,
		),
		$client->messageEntityPre(
			offset : 21,
			length : 4,
			language : 'Szqe9TNcUHiLBdE0',
		),
		$client->messageEntityTextUrl(
			offset : 71,
			length : 56,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 83,
			length : 53,
			user_id : 3677731976759602008,
		),
		$client->inputMessageEntityMentionName(
			offset : 32,
			length : 64,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 52,
			length : 81,
		),
		$client->messageEntityCashtag(
			offset : 30,
			length : 27,
		),
		$client->messageEntityUnderline(
			offset : 46,
			length : 75,
		),
		$client->messageEntityStrike(
			offset : 57,
			length : 27,
		),
		$client->messageEntityBankCard(
			offset : 56,
			length : 91,
		),
		$client->messageEntitySpoiler(
			offset : 30,
			length : 31,
		),
		$client->messageEntityCustomEmoji(
			offset : 94,
			length : 42,
			document_id : -696447186765963484,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 22,
			length : 63,
		),
	),
);
```