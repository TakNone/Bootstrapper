# help.editUserInfo

**Description** : *Internal use*

**Layer** : 229

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
	message : 'IJDZPlC0m7MfR1jy',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 38,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 67,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 24,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 30,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 41,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 31,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 41,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 61,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 0,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 94,
			language : 'qgI3VeAQ1zfUKYtG',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 4,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 1,
			user_id : -3800683133146599490,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 48,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 29,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 38,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 0,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 69,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 76,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 75,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 11,
			document_id : -6162062825090264069,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 9,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 43,
			date : 21,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 57,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 41,
			old_text : '9Y6LpQKXDW3vaxku',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 67,
		),
	),
);
```