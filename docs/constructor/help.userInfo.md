# help.userInfo

**Description** : *Internal use*

**Layer** : 233

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
	message : 'ABqlkvbLKu7DaeoO',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 96,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 42,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 12,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 49,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 98,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 81,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 76,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 75,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 9,
			language : 'qY9iMvJQf0nbSyFs',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 20,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 33,
			user_id : -7246214879076381787,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 89,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 43,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 28,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 41,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 57,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 51,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 43,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 5,
			document_id : 6154945927543234160,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 13,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 59,
			date : 88,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 91,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 18,
			old_text : 'Yzf5dAiVQkSO0oZm',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 10,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 44,
		),
	),
	author : 'F3LumlsCB4f9ViPx',
	date : 96,
);
```