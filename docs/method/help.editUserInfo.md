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
	message : '5oB6L8fg4hPHxURX',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 44,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 99,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 87,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 63,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 13,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 38,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 46,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 23,
			language : 'tgaTdNjeC3mpncLi',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 91,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 47,
			user_id : -5097061566983092114,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 89,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 84,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 52,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 33,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 66,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 85,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 15,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 76,
			document_id : -5154983067743581042,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 29,
		),
	),
);
```