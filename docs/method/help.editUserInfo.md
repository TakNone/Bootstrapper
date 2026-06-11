# help.editUserInfo

**Description** : *Internal use*

**Layer** : 227

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
	message : 'YqD9vo2fuw6KGcFl',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 58,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 70,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 78,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 92,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 40,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 43,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 48,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 4,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 87,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 99,
			language : '7M1tYl6NBQnwLWSU',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 20,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 52,
			user_id : -6991371602841945893,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 33,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 60,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 40,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 60,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 14,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 65,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 39,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 17,
			document_id : -6931429078882037975,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 11,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 65,
			date : 100,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 58,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 17,
			old_text : 'Fga481TPCY3SUVLj',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 68,
		),
	),
);
```