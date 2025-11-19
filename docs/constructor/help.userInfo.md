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
	message : 'dqPzTi13kmQS9DBM',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 61,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 25,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 99,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 16,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 10,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 43,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 40,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 80,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 53,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 48,
			language : 'Bqth0Xn1dlCQE2mU',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 47,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 93,
			user_id : -3294273196371596394,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 49,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 6,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 67,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 32,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 34,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 29,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 87,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 41,
			document_id : 2172849614022784394,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 49,
		),
	),
	author : 's0Jfca7qj8BU5v3o',
	date : 78,
);
```