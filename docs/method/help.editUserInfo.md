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
	message : 'WgdCFIe2q1EVkKDZ',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 57,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 74,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 44,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 83,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 82,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 38,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 8,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 56,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 44,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 32,
			language : 'HlqZLhvE4uFsUgbX',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 58,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 18,
			user_id : -9213456332545873585,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 21,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 58,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 87,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 89,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 18,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 46,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 79,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 14,
			document_id : -9199431445919355373,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 34,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 8,
			date : 23,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 12,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 80,
			old_text : 'oUy79qupnK4dQRHf',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 41,
		),
	),
);
```