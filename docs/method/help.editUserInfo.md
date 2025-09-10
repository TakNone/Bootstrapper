# help.editUserInfo

**Description** : *Internal use*

**Layer** : 214

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
	message : 'RrWonZJvmHUgVwel',
	entities : array(
		$client->messageEntityUnknown(
			offset : 91,
			length : 77,
		),
		$client->messageEntityMention(
			offset : 93,
			length : 9,
		),
		$client->messageEntityHashtag(
			offset : 99,
			length : 33,
		),
		$client->messageEntityBotCommand(
			offset : 31,
			length : 89,
		),
		$client->messageEntityUrl(
			offset : 8,
			length : 13,
		),
		$client->messageEntityEmail(
			offset : 30,
			length : 81,
		),
		$client->messageEntityBold(
			offset : 63,
			length : 57,
		),
		$client->messageEntityItalic(
			offset : 39,
			length : 94,
		),
		$client->messageEntityCode(
			offset : 38,
			length : 26,
		),
		$client->messageEntityPre(
			offset : 72,
			length : 76,
			language : 'TvLR23oSVYMjBWa9',
		),
		$client->messageEntityTextUrl(
			offset : 97,
			length : 31,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 48,
			length : 95,
			user_id : -5203398148117472711,
		),
		$client->inputMessageEntityMentionName(
			offset : 87,
			length : 80,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 40,
			length : 11,
		),
		$client->messageEntityCashtag(
			offset : 37,
			length : 44,
		),
		$client->messageEntityUnderline(
			offset : 82,
			length : 4,
		),
		$client->messageEntityStrike(
			offset : 18,
			length : 79,
		),
		$client->messageEntityBankCard(
			offset : 89,
			length : 9,
		),
		$client->messageEntitySpoiler(
			offset : 98,
			length : 92,
		),
		$client->messageEntityCustomEmoji(
			offset : 60,
			length : 49,
			document_id : -5963081498855677853,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 19,
			length : 89,
		),
	),
);
```