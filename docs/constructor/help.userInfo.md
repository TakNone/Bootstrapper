# help.userInfo

**Description** : *Internal use*

**Layer** : 225

```tl
help.userInfo#1eb3758 message:string entities:Vector<MessageEntity> author:string date:int = help.UserInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`string`](type/string) | Info |
| <mark>entities</mark> | [`Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| <mark>author</mark> | [`string`](type/string) | Author |
| <mark>date</mark> | [`int`](type/int) | Date |

---

## Type

[help.UserInfo](type/help.UserInfo)

---

## Example

```php
$helpUserInfo = $client->help->userInfo(
	message : 'R6tUo89FvLBHlhCf',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 63,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 88,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 5,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 92,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 47,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 2,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 4,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 92,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 40,
			language : 'dGJas3ZwbHz5YlCA',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 75,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 14,
			user_id : 8904917663089095746,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 85,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 94,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 83,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 36,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 63,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 52,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 79,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 72,
			document_id : 7506993336048028684,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 18,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 90,
			date : 58,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 46,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 8,
			old_text : 'Yv6aIFcHZpjM9Ggw',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 57,
		),
	),
	author : 'wFzkifaUgoX6DtKW',
	date : 95,
);
```