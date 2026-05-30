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
	message : 'IDGANa4RXjfwqCBd',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 17,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 96,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 63,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 82,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 60,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 99,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 16,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 76,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 10,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 60,
			language : 'Z1XJmTdOipDxqYaS',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 79,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 91,
			user_id : 2274167961512882556,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 86,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 43,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 5,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 2,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 83,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 21,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 100,
			document_id : -5839959976303083343,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 85,
		),
	),
);
```