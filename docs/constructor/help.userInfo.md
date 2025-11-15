# help.userInfo

**Description** : *Internal use*

**Layer** : 218

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
	message : 'NY3Bh1nLSwKfqCsV',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 34,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 89,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 63,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 52,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 12,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 49,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 28,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 64,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 42,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 27,
			language : 'bC79QHKozD2YViWm',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 60,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 19,
			user_id : -5455803838949652072,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 91,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 31,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 39,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 57,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 11,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 96,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 84,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 33,
			document_id : -7465510107305118788,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 12,
		),
	),
	author : 'W5g3p0JzkQM9wAdo',
	date : 8,
);
```