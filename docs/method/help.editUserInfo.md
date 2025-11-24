# help.editUserInfo

**Description** : *Internal use*

**Layer** : 218

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
	message : 'Eb41lDOQCYFjd76I',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 0,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 15,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 83,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 49,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 83,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 3,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 71,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 80,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 26,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 27,
			language : 'Bm2RTfwnPk39iDUL',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 68,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 1,
			user_id : -5182502972505775523,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 73,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 49,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 20,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 73,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 11,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 62,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 46,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 27,
			document_id : -2473769611806719649,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 81,
		),
	),
);
```