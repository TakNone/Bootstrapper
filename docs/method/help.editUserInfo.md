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
	message : 'MnvLaWysoUEQ1reX',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 67,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 21,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 41,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 91,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 40,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 36,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 63,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 14,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 72,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 31,
			language : 'Jqmcn0AuCbkVotzi',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 73,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 59,
			user_id : -6795150312613602860,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 38,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 36,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 31,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 11,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 78,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 98,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 15,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 96,
			document_id : 3369466173601633603,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 99,
		),
	),
);
```