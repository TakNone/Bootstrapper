# help.userInfo

**Description** : *Internal use*

**Layer** : 227

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
	message : 'P5yAmQnBNeHo7FGw',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 24,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 70,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 17,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 19,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 77,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 96,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 45,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 86,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 84,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 94,
			language : 'mTh2FktJQO9GHIA6',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 9,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 42,
			user_id : -1577937888146413370,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 62,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 56,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 66,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 22,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 52,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 53,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 21,
			document_id : -4707296408155951479,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 38,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 100,
			date : 40,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 87,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 66,
			old_text : 'DzYCwHxNm6leJgvG',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 7,
		),
	),
	author : 'JBioy4ObA31Ugefc',
	date : 57,
);
```