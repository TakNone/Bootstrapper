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
	message : 'SBjgr24vkVNbs05a',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 20,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 56,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 97,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 63,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 67,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 81,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 19,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 61,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 63,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 20,
			language : 'GpoaO2dy4qkiwuZV',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 63,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 55,
			user_id : 3288578256399017092,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 12,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 12,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 0,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 28,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 9,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 16,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 25,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 73,
			document_id : 449945987766748072,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 75,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 9,
			date : 62,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 99,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 72,
			old_text : 'kosgcCylOWK8aPIU',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 73,
		),
	),
	author : 'wTxdynWzKNCtJ6ea',
	date : 17,
);
```