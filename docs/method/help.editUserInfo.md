# help.editUserInfo

**Description** : *Internal use*

**Layer** : 225

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
	message : 'ywKT4IsWO5efE9qF',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 25,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 16,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 37,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 65,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 17,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 35,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 85,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 41,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 50,
			language : '47rcBZQtOIoybExs',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 71,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 43,
			user_id : 2886727974590645058,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 69,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 96,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 13,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 30,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 4,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 63,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 48,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 15,
			document_id : 161141716144001944,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 67,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 40,
			date : 6,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 76,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 6,
			old_text : 'vmzEcqWNf1YI5RnM',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 30,
		),
	),
);
```