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
	message : 'vqoM9Q8VU6aYAFSN',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 20,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 29,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 18,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 63,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 61,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 96,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 26,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 41,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 87,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 74,
			language : 'N6Lhrq1VsWByfYgD',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 76,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 91,
			user_id : 3169535017781742747,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 70,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 40,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 68,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 26,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 9,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 47,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 53,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 10,
			document_id : 7730501832579223063,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 18,
		),
	),
	author : 'kAvPpbQISZfoGgEY',
	date : 70,
);
```