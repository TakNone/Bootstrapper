# help.userInfo

**Description** : *Internal use*

**Layer** : 214

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
	message : 'N9uETpYvy2FDOl8A',
	entities : array(
		$client->messageEntityUnknown(
			offset : 29,
			length : 70,
		),
		$client->messageEntityMention(
			offset : 1,
			length : 6,
		),
		$client->messageEntityHashtag(
			offset : 40,
			length : 10,
		),
		$client->messageEntityBotCommand(
			offset : 1,
			length : 14,
		),
		$client->messageEntityUrl(
			offset : 78,
			length : 49,
		),
		$client->messageEntityEmail(
			offset : 100,
			length : 37,
		),
		$client->messageEntityBold(
			offset : 63,
			length : 36,
		),
		$client->messageEntityItalic(
			offset : 67,
			length : 51,
		),
		$client->messageEntityCode(
			offset : 80,
			length : 4,
		),
		$client->messageEntityPre(
			offset : 85,
			length : 10,
			language : 'zBSCdOQ5mHkvU8eu',
		),
		$client->messageEntityTextUrl(
			offset : 53,
			length : 67,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 21,
			length : 20,
			user_id : -245172858288484427,
		),
		$client->inputMessageEntityMentionName(
			offset : 38,
			length : 97,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 2,
			length : 78,
		),
		$client->messageEntityCashtag(
			offset : 5,
			length : 77,
		),
		$client->messageEntityUnderline(
			offset : 97,
			length : 45,
		),
		$client->messageEntityStrike(
			offset : 93,
			length : 17,
		),
		$client->messageEntityBankCard(
			offset : 13,
			length : 59,
		),
		$client->messageEntitySpoiler(
			offset : 62,
			length : 57,
		),
		$client->messageEntityCustomEmoji(
			offset : 21,
			length : 33,
			document_id : 8354882700521913711,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 48,
			length : 93,
		),
	),
	author : 'Z7fpsJOnrYj2SPIC',
	date : 13,
);
```