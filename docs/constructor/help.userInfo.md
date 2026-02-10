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
	message : 'jodGb9hq08erY3fg',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 63,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 55,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 70,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 52,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 47,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 77,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 3,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 2,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 47,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 51,
			language : 'mwgJZxh4fSB6bdOH',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 10,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 30,
			user_id : -4262523403352109882,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 10,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 74,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 31,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 12,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 20,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 2,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 34,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 7,
			document_id : 3947698839061404803,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 63,
		),
	),
	author : 'Zmyf845xEsBHUwYg',
	date : 80,
);
```