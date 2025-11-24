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
	message : 'dDYmE18lTSL3Oxhf',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 15,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 50,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 67,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 64,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 26,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 50,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 78,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 34,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 40,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 56,
			language : 'cH6A8lsivVbuxSY0',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 47,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 73,
			user_id : -4550116291511527524,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 91,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 38,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 47,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 47,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 73,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 67,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 33,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 87,
			document_id : -5416902980153660647,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 49,
		),
	),
	author : 'p4kmQFUEo5g1lZxM',
	date : 54,
);
```