# help.editUserInfo

**Description** : *Internal use*

**Layer** : 233

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
	message : 'ioGyB7L4a5rYI8Oc',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 55,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 24,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 50,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 82,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 55,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 8,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 34,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 13,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 54,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 4,
			language : 'u24xsfe7YjH8bvOI',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 95,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 65,
			user_id : -8592725227413754642,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 22,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 47,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 29,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 60,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 61,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 3,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 10,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 48,
			document_id : -7454106799913713376,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 25,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 94,
			date : 7,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 94,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 45,
			old_text : '4VbYjSFzdli1ay5r',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 10,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 8,
		),
	),
);
```