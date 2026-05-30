# help.userInfo

**Description** : *Internal use*

**Layer** : 222

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
	message : 'yjcVwxBp56uo23QC',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 86,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 58,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 20,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 16,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 74,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 26,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 77,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 38,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 72,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 45,
			language : 'LDUlJZQ2GCw6iF5A',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 71,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 96,
			user_id : -2035005853847116407,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 66,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 74,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 20,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 2,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 27,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 51,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 24,
			document_id : -3735442420490475880,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 64,
		),
	),
	author : '6F9LZsxolUGuPtTM',
	date : 46,
);
```