# help.userInfo

**Description** : *Internal use*

**Layer** : 211

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
	message : 'NntbAqiV9x3KwYeT',
	entities : array(
		$client->messageEntityUnknown(
			offset : 1,
			length : 59,
		),
		$client->messageEntityMention(
			offset : 8,
			length : 92,
		),
		$client->messageEntityHashtag(
			offset : 41,
			length : 84,
		),
		$client->messageEntityBotCommand(
			offset : 99,
			length : 17,
		),
		$client->messageEntityUrl(
			offset : 27,
			length : 53,
		),
		$client->messageEntityEmail(
			offset : 61,
			length : 78,
		),
		$client->messageEntityBold(
			offset : 58,
			length : 63,
		),
		$client->messageEntityItalic(
			offset : 47,
			length : 85,
		),
		$client->messageEntityCode(
			offset : 33,
			length : 32,
		),
		$client->messageEntityPre(
			offset : 32,
			length : 98,
			language : 'xzQL8fjRbiswvHdT',
		),
		$client->messageEntityTextUrl(
			offset : 41,
			length : 100,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 63,
			length : 27,
			user_id : -6649861832050829334,
		),
		$client->inputMessageEntityMentionName(
			offset : 76,
			length : 8,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 79,
			length : 99,
		),
		$client->messageEntityCashtag(
			offset : 16,
			length : 45,
		),
		$client->messageEntityUnderline(
			offset : 1,
			length : 56,
		),
		$client->messageEntityStrike(
			offset : 96,
			length : 25,
		),
		$client->messageEntityBankCard(
			offset : 96,
			length : 49,
		),
		$client->messageEntitySpoiler(
			offset : 39,
			length : 31,
		),
		$client->messageEntityCustomEmoji(
			offset : 48,
			length : 9,
			document_id : 948492483595387176,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 44,
			length : 82,
		),
	),
	author : 'v4xFmoqBDEuL0a2Y',
	date : 94,
);
```