# help.editUserInfo

**Description** : *Internal use*

**Layer** : 216

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
	message : 'kB36Gz7ylWALKTsw',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 37,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 45,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 0,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 47,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 63,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 93,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 41,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 54,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 0,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 59,
			language : 'CTdJWNA6GgXiY14c',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 40,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 45,
			user_id : -3522311186655022895,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 47,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 91,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 13,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 83,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 77,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 21,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 49,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 98,
			document_id : 4379836286695932608,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 16,
		),
	),
);
```