# help.userInfo

**Description** : *Internal use*

**Layer** : 216

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
	message : 'oYxTQPpZj3AKslXI',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 29,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 45,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 95,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 18,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 34,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 64,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 47,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 58,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 29,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 67,
			language : 'YM1yTQnbpjzIJK0R',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 95,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 38,
			user_id : 1673063059923873850,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 49,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 42,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 76,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 23,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 23,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 74,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 86,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 85,
			document_id : -8883373279642714943,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 73,
		),
	),
	author : 'cRaJ0bE5ToQtnBel',
	date : 48,
);
```